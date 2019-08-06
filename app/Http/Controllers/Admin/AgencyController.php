<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use App\AgencyType;
use App\Agency;
use Illuminate\Validation\Rule;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agency = Agency::join('Agency_Types','Agencies.AgencyTypeId','=','Agency_Types.AgencyTypeId')
            ->select('*')->get();
        return View('admin.agency.index',compact('agency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = AgencyType::all();
        return View('admin.agency.create',compact('type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = self::validateAgency($request);

        $attributes['tCOm'] = 0;
        $attributes['paid'] = 0;
        $attributes['amountDue'] = 0;
        
        // dd($attributes);
        Agency::create($attributes);

        return redirect('/system/agency');
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
        $agency = Agency::where('agencyId',$id)->join('Agency_Types','Agencies.AgencyTypeId','=','Agency_Types.AgencyTypeId')
            ->select('*')->get();

        $type = AgencyType::all();

        return view('admin.agency.edit',compact('agency','type'));
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
        $attributes = self::validateAgency($request);
        
        $agency = Agency::where('agencyId',$id)->firstOrFail();
        request()->validate([
            'email' => ['required','min:12','max:30','unique:agencies,email,'.$agency->email.',email']
        ]);

        Agency::where('agencyId',$id)->update($attributes);

        return redirect('/system/agency');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agency::where('agencyId',$id)->delete();

        return redirect('/system/agency');
    }

    public function validateAgency($request)
    {
        $attributes = request()->validate([
            'agency' => 'required|min:5|max:30',
            'phone' => 'required|min:9|max:30',
            'email' => ['required','min:12','max:30'],
            'address' => 'required|min:10:max:191',
            'agencyTypeId' => 'required'
        ]);

        $agencyType = AgencyType::where('agencyType',$request->agencyTypeId)->firstOrFail();
        $attributes['agencyTypeId'] = $agencyType->agencyTypeId;

        return $attributes;
    }
}
