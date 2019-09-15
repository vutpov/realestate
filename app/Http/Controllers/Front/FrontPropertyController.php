<?php

namespace App\Http\Controllers\Front;


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

class FrontPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexfront()
    {


        // $partnerQry = DB::table('partners')
        //     ->select('partnerId', 'partner');

        // $projectQry = DB::table('projects')
        //     ->select('projectId', 'project');


        // $property = DB::table('properties')
        //     ->join('property_types', 'property_types.propertyTypeId', '=', 'properties.propertyTypeId')
        //     ->join('prop_attributes', 'prop_attributes.propAttributeId', '=', 'properties.propAttribId')
        //     ->join('property_images', 'property_images.propertyId', '=', 'properties.propertyId')
        //     ->select(
        //         'propertyCode',
        //         'property_types.propertyType',
        //         'prop_attributes.propAttribute',
        //         'description',
        //         'no',
        //         'st',
        //         'cost',
        //         'price',
        //         'free',
        //         'properties.created_at',
        //         'properties.updated_at',
        //         'image',
        //         'properties.propertyId'
        //     )
        //     ->where('is_featured', '=', '1')
        //     ->orderByDesc('created_at')
        //     ->get();


        if (request()->ajax()) {
            $data =   DB::table('properties')
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
                    'properties.created_at',
                    'properties.updated_at',
                    'image',
                    'properties.propertyId'
                )
                ->where('is_featured', '=', '1')->where('properties.staffId','=',Auth::user()->staffId)
                ->orderByDesc('created_at')
                ->get();

            return datatables()->of($data)
                ->addColumn('action', function ($row) {
                    $button = '<button type="button" name="edit" id="' . $row->propertyId . '" class="edit btn btn-primary btn-sm">Edit</button>';
                    $button .= '&nbsp;&nbsp;';
                    $button .= '<button type="button" name="delete" id="' . $row->propertyId . '" class="delete btn btn-danger btn-sm">Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        //  dd($data);

        return View('front.virsitor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createfront()
    {
        // $project = Project::select('projectId', 'project')
        //     ->get();
        $propertyType = PropertyType::select('propertyTypeId', 'propertyType')
            ->get();

        $propAttribute = PropAttribute::select('propAttributeID', 'propAttribute')
            ->get();

        $statement = DB::select("SHOW TABLE STATUS LIKE 'properties'");


        $nextId = $statement[0]->Auto_increment;



        $unitMesurementType = UM::select('umid', 'um')
            ->get();


        $data = array(
            // 'project' => $project,
            'propertyType' => $propertyType,
            'propAttribute' =>  $propAttribute,
            'unitMesurementType' => $unitMesurementType,
            'nextId' => $nextId
        );
        return View('front.indexvisitor', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storefront(Request $request)
    {


        $validator = Validator::make($request->all(), [

            // 'project' => 'required',
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

        // $partnerId = DB::table('partners')
        //     ->join('projects', 'projects.partnerId', '=', 'partners.partnerId')
        //     ->select('partners.partnerId')
        //     ->where('projects.projectId', '=', $request->project)
        //     ->pluck('partnerId')[0];


        if ($validator->passes()) {

            //join('contacts', 'users.id', '=', 'contacts.user_id')


            DB::table('properties')->insert([
                // 'projectId' => $request->project,
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
                // 'staffId' => $request->sid,
                // 'partnerId' => $request->partner,
                  'staffId' => Auth::user()->staffId,
                // 'partnerId' => $partnerId,
                'status' => 1
            ]);
            $newPropertyId = DB::getPdo()->lastInsertId() + 1;



            $path = request()->file('thumbnail')->store('img');
            $PropertyImage = new PropertyImage();
            $PropertyImage->image = $path;
            $PropertyImage->is_featured = 1;
            $PropertyImage->propertyId = $request->propertyId;


            $PropertyImage->save();



            // return response()->json(['message' => ['Added new records.'], 'propertyId' => $newPropertyId, 'data' => 2], 200);
            return response()->json(['message' => ['Added new records.'], 'propertyId' => $newPropertyId, 'data' =>  Auth::user()->staffId], 200);
        }


        return response()->json(['message' => $validator->errors()->all(), 'failOnValidate' => true], 403);
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

    public function propertyImageUploadfront(Request $request)
    {

        
        $path = $request->file('file')->store('img');
           DB::table('property_images')->insert([
            'image' => $path,
            'is_featured' => 0,
            'propertyId' => $request->propertyId
        ]);
        return response()->json(array('success' => true), 200);
    }

    public static function getAvailablePropertyfront()
    {
        return Property::select('propertyId', 'propertyCode', 'cost', 'price')
            ->where('status', '=', 1)
            ->get();
    }

    public static function updatePropertyStatusfront($id, $status)
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

    public function imagesUploadPostfront(Request $request)

    {

        request()->validate([

            'uploadFile' => 'required',

        ]);



        foreach ($request->file('uploadFile') as $key => $value) {

            $imageName = time() . $key . '.' . $value->getClientOriginalExtension();

            $value->move(public_path('img'), $imageName);
        }



        return response()->json(['success' => 'Images Uploaded Successfully.']);
    }
}
