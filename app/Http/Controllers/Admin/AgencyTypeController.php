<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AgencyType;
use App\Agency;
use Illuminate\Validation\Rule;

class AgencyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($getTrash = false)
    {


        if ($getTrash) {
            $agencyType = AgencyType::all();

            $url = url('/system/agencyType/');

            $checkTrash = 'checked';
        } else {
            $agencyType = AgencyType::where('status', '<>', -1)->get();
            $url = url('/system/agencyType/trash');


            $checkTrash = '';
        }




        $data = array(
            'agencyType' => $agencyType,
            'trashUrl' => $url,
            'checkTrash' => $checkTrash
        );




        return View('admin.agencyType.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('admin.agencyType.create');
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
            'type' => 'required|unique:agencyType'

        ]);

        $agencyType = new AgencyType();

        $agencyType->agencyType = $request->type;

        $agencyType->save();


        return redirect('/system/agencyType');
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

        $agencyType = AgencyType::where('agencyTypeId', $id)->get()[0];




        $data = [
            'agencyType' => $agencyType

        ];


        return View('admin.agencyType.edit', $data);
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
            'agencyTypeId' => [
                Rule::unique('agency_types')->ignore($id, 'agencyTypeId'),
            ],
        ]);


        AgencyType::where('agencyTypeId', $id)->update(array(
            'agencyType' => $request->type,

        ));
        return redirect('/system/agencyType');
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


    public function setStatus($id, $status)
    {

        $status = $status == 'trash' ? -1 : 1;

        AgencyType::where('agencyTypeId', $id)->update(array(
            'status' => $status,
        ));

        return redirect()->back();
    }
}
