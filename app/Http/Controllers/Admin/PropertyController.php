<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Requests\valProperty;
use App\Http\Controllers\Controller;
use App\Property;
use App\Project;
use App\PropertyType;
use App\PropAttribute;
use App\UM;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use App\PropertyImage;
use Response;
use Illuminate\Support\Facades\Auth;
use App\Partner;


class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $partnerQry = DB::table('partners')
            ->select('partnerId', 'partner');

        $projectQry = DB::table('projects')
            ->select('projectId', 'project');


        $property = DB::table('properties')
            ->join('staffs', 'properties.staffId', '=', 'staffs.staffId')
            ->join('property_types', 'property_types.propertyTypeId', '=', 'properties.propertyTypeId')
            ->join('prop_attributes', 'prop_attributes.propAttributeId', '=', 'properties.propAttribId')
            ->join('property_images', 'property_images.propertyId', '=', 'properties.propertyId')
            ->select(
                'propertyCode',
                'property_types.propertyType',
                'prop_attributes.propAttribute',
                'description',
                'no',
                'st',
                'cost',
                'price',
                'free',
                'properties.status',
                'propertyType',
                'staffs.name',
                'properties.created_at',
                'properties.updated_at',
                'project',
                'partner',
                'image',
                'properties.propertyId'
            )
            ->leftJoinSub($partnerQry, 'partners', function ($join) {
                $join->on('partners.partnerId', '=', 'properties.partnerId');
            })
            ->leftJoinSub($projectQry, 'projects', function ($join) {
                $join->on('projects.projectId', '=', 'properties.projectId');
            })
            ->where('is_featured', '=', '1')
            ->orderByDesc('created_at')
            ->get();




        $data = array('property' => $property);

        return View('admin.property.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = Project::select('projectId', 'project')
            ->get();
        $propertyType = PropertyType::select('propertyTypeId', 'propertyType')
            ->get();

        $propAttribute = PropAttribute::select('propAttributeID', 'propAttribute')
            ->get();

        $statement = DB::select("SHOW TABLE STATUS LIKE 'properties'");


        $nextId = $statement[0]->Auto_increment;

        $unitMesurementType = UM::select('umid', 'um')
            ->get();


        $data = array(
            'project' => $project,
            'propertyType' => $propertyType,
            'propAttribute' =>  $propAttribute,
            'unitMesurementType' => $unitMesurementType,
            'nextId' => $nextId
        );
        return View('admin.property.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [

            'project' => 'required',
            'propertyType' => 'required',
            'no' => 'min:1|max:5',
            'st' => 'min:1|max:20',
            'price' => 'required|numeric',
            'cost' => 'required|numeric',
            'mesurement' => 'required',
            'unit' => 'regex:/\dx\d/',
            'propAttribute' => 'required',
            'thumbnail' => 'required',

        ]);

        $partnerId = DB::table('partners')
            ->join('projects', 'projects.partnerId', '=', 'partners.partnerId')
            ->select('partners.partnerId')
            ->where('projects.projectId', '=', $request->project)
            ->pluck('partnerId')[0];


        if ($validator->passes()) {

            //join('contacts', 'users.id', '=', 'contacts.user_id')


            DB::table('properties')->insert([
                'projectId' => $request->project,
                'propertyCode' => rand(0, 999) . substr(time() . '', 6),
                'description' => $request->description,
                'no' => $request->no,
                'st' => $request->st,
                'umid' => $request->mesurement,
                'unit' => $request->unit,
                'propertyTypeId' => $request->propertyType,
                'propAttribId' => $request->propAttribute,
                'price' => $request->price,
                'cost' => $request->cost,
                'created_at' => now(),
                'partnerId' => $request->partner,
                'staffId' => Auth::user()->staffId,
                'partnerId' => $partnerId,
            ]);
            $newPropertyId = DB::getPdo()->lastInsertId() + 1;



            $path = request()->file('thumbnail')->store('propertyImage');
            $PropertyImage = new PropertyImage();
            $PropertyImage->image = $path;
            $PropertyImage->is_featured = 1;
            $PropertyImage->propertyId = $request->propertyId;


            $PropertyImage->save();




            return response()->json(['message' => ['Added new records.'], 'propertyId' => $newPropertyId, 'data' =>  Auth::user()->staffId], 200);
        }


        return response()->json(['message' => $validator->errors()->all(), 'failOnValidate' => true, 'data' =>  $partnerId], 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function propertyImageUpload(Request $request)
    {

        $path = $request->file('file')->store('propertyImage');

        DB::table('property_images')->insert([
            'image' => $path,
            'is_featured' => 0,
            'propertyId' => $request->propertyId
        ]);



        return response()->json(array('success' => true), 200);
    }

    public static function getAvailableProperty()
    {
        return Property::select('propertyId', 'propertyCode', 'cost', 'price')
            ->where('status', '=', 1)
            ->get();
    }

    public static function updatePropertyStatus($id, $status)
    {
        //status 
        //1=available
        //2=block
        //3=book
        //4=contract
        //5=sold
        DB::table('properties')
            ->where('propertyId', '=', $id)
            ->update(['status' => $status]);
    }
}
