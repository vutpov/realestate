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
use Response;

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


        // foreach ($propAttribute as $prop) {
        //     dd($prop);
        // }

        


        $unitMesurementType = UM::select('umid', 'um')
            ->get();


        $data = array(
            'project' => $project,
            'propertyType' => $propertyType,
            'propAttribute' =>  $propAttribute,
            'unitMesurementType' => $unitMesurementType
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
            'no' => 'required',
            'st' => 'required',
            'price' => 'required',
            'cost' => 'required',
            'mesurement' => 'required',
            'unit' => 'required',
            'propAttribute' => 'required'
        ]);


        if ($validator->passes()) {
            return response()->json(['success' => 'Added new records.'], 200);
        }


        return response()->json(['error' => $validator->errors()->all(), 'failOnValidate' => true, 'data' => $request->all()], 403);
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
            'is_featured' => 0
        ]);

        $imageId = DB::getPdo()->lastInsertId();

        return response()->json(array('success' => true, 'imageId' => $imageId), 200);
    }
}
