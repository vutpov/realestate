<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PropAttribute;
use App\PropAttribDetail;
use Illuminate\Support\Facades\DB;




class Prop_Attribute extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($getTrash = false)
    {


        if ($getTrash) {
            $propAttribute = PropAttribute::all();

            $url = url('/system/propAttribute/');

            $checkTrash = 'checked';
        } else {

            $propAttribute = PropAttribute::where('status', '<>', -1)->get();

            $url = url('/system/propAttribute/trash');


            $checkTrash = '';
        }






        $data = array(
            'propAttribute' => $propAttribute,
            'trashUrl' => $url,
            'checkTrash' => $checkTrash
        );


        return View('admin.propAttribute.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $propAttributeDetail = PropAttribDetail::all()->pluck('propAttributeDetail')->toArray();
        $data = array(

            'propDetail' =>  $propAttributeDetail
        );
        return View('admin.propAttribute.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->input();




        $validateArray = array();

        foreach ($input as $key => $item) {
            if ($key === "_token") {
                continue;
            }
            $validateArray[$key] = 'required';
        }

        $this->validate($request, $validateArray);


        $sql = 'insert into prop_attributes (propAttribute) values(?)';


        $value = '';

        foreach ($input as $key => $item) {

            if ($key === "_token") {
                continue;
            }

            $value .= $key . ":" . $item . ',';
        }


        $value = substr($value, 0, strlen($value) - 1);

        DB::insert($sql, [$value]);

        return redirect('/system/propAttribute');
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

    public function setStatus($id, $status)
    {

        $status = $status == 'trash' ? -1 : 1;

        PropAttribute::where('propAttributeid', $id)->update(array(
            'status' => $status,
        ));

        return redirect()->back();
    }
}
