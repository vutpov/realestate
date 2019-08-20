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

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { }

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


        // foreach ($propAttribute as $prop) {
        //     dd($prop);
        // }




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
            'thumbnail' => 'required'
        ]);


        if ($validator->passes()) {

            $property = new Property();
            $property->projectId = $request->project;
            $property->propertyCode = rand(0, 99) . substr(time() . '', 6);
            $property->description = $request->description;
            $property->no = $request->no;
            $property->st = $request->st;
            $property->umid = $request->mesurement;
            $property->unit = $request->unit;
            $property->propertyTypeId =  $request->propertyType;
            $property->propAttribId = $request->propAttribute;
            $property->price = $request->price;
            $property->cost = $request->cost;
            $property->partnerId = $request->partner;
            $property->staffId = Auth::user()->staffId;

            $path = request()->file('thumbnail')->store('propertyImage');
            $PropertyImage = new PropertyImage();
            $PropertyImage->image = $path;
            $PropertyImage->is_featured = 1;
            $PropertyImage->propertyId = $request->propertyId;

            $property->save();
            $PropertyImage->save();

            return response()->json(['success' => 'Added new records.'], 200);
        }


        return response()->json(['error' => $validator->errors()->all(), 'failOnValidate' => true, 'data' => substr(time() . '', 6)], 403);
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
}
