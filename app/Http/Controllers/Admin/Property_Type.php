<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\PropertyType;

class Property_Type extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($getTrash = false)
    {
        if($getTrash){
            $check = "checked";
            $propTypes = PropertyType::where('status', '-1')->get();
            $data = [
                'check' => $check,
                'propTypes' => $propTypes 
            ];
            return view('admin.propertyType.index', $data);
        }else{
            $check = '';
            $propTypes = PropertyType::where('status', '<>', '-1')->get();
            $data = [
                'check' => $check,
                'propTypes' => $propTypes 
            ];
            return view('admin.propertyType.index', $data);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.propertyType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'propertyType' => 'required'
        ]);

        $propType = new PropertyType;
        $propType->propertyType = $request->propertyType;
        $propType->save();
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
        $propTypes = PropertyType::where('propertyTypeId', $id)->first();
        $data = [
            'propTypes' => $propTypes 
        ];  
        return view('admin.propertyType.edit', $data);
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
        $this->validate($request, [
            'propertyType' => 'required'
        ]);

        PropertyType::where('propertyTypeId', $id)->update(['propertyType' => $request->propertyType]);
        return redirect('/system/PropTypes');
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

    public function setStatus($id, $status){
        $st = $status == 'trash' ? -1 : 1;
        PropertyType::where('propertyTypeId', $id)->update(['status' => $st]);
        return redirect()->back();
    }


}
