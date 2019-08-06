<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partner;
use App\PartnerType;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return View('admin.partner.index', compact('partners', $partners));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partnerType = PartnerType::all();
        return View('admin.partner.create', compact('partnerType', $partnerType));
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
            'partner' => 'required|regex:/^[a-zA-Z ]+$/',
            'phone' => 'required|regex:/^[0-9 ]+$/',
            'email' => 'required',
            'address' => 'required|regex:/^[a-zA-Z ]+$/|min:5|max:15'
        ]);

        $partner = new Partner;
        $partner->partner = $request->partner;
        $partner->phone = $request->phone;
        $partner->email = $request->email;
        $partner->address = $request->address;
        $partner->partnerTypeId = $request->partnerType;
        $partner->save();

        return redirect('/system/partner');

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
}
