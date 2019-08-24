<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Staffs;
use App\Position;
use App\Http\Helpers\Helper;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($getTrash = false)
    {


        if ($getTrash) {
            $staff = DB::table('staffs')
                ->join('positions', 'positions.positionId', '=', 'staffs.positionId')
                ->select('staffId', 'name', 'positions.position', 'gender', 'dob', 'address', 'phone', 'email', 'profile', 'status')
                ->get();

            $url = url('/system/staff/');

            $checkTrash = 'checked';
        } else {
            $staff = DB::table('staffs')
                ->join('positions', 'positions.positionId', '=', 'staffs.positionId')
                ->select('staffId', 'name', 'positions.position', 'gender', 'dob', 'address', 'phone', 'email', 'profile', 'status')
                ->where('status', '<>', -1)
                ->get();
            $url = url('/system/staff/trash');


            $checkTrash = '';
        }




        $data = array(
            'staff' => $staff,
            'trashUrl' => $url,
            'checkTrash' => $checkTrash
        );




        return View('admin.staff.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $position = Position::all();
        $data = array('position' => $position);

        return View('admin.staff.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    // public function uploadProfile(Request $request){

    // }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:5|max:50|unique:staffs',
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required|min:5',
            'phone' => 'required|min:10',
            'email' => 'required|email|unique:staffs',
            'profile' => 'mimes:jpeg,jpg,png',
            'position' => 'required'
        ]);
        

        $path = null;
        if ($request->file('profile') != null) {
            $path = $request->file('profile')->store('profile');
        }


        $staff = new Staffs;
        $staff->name = $request->name;
        $staff->gender = $request->gender;
        $staff->dob = Helper::formatMysqlDate($request->date_of_birth);
        $staff->address = $request->address;
        $staff->phone = $request->phone;
        $staff->email = $request->email;
        $staff->positionId = $request->position;
        $staff->profile = $path;

        $staff->save();
        return redirect('system/staff');
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
        $position = Position::all();
        $staff = Staffs::where('staffId', $id)->get()[0];



        $data = array(
            'position' => $position,
            'staff' => $staff,

        );


        return View('admin.staff.edit', $data);
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
            'name' => [
                'min:5|max:20',
                Rule::unique('staffs')->ignore($id, 'staffId'),
            ],
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required|min:5',
            'phone' =>  [
                'min:10',
                Rule::unique('staffs')->ignore($id, 'staffId')
            ],
            'email' =>  [
                'required',
                'email',
                Rule::unique('staffs')->ignore($id, 'staffId')
            ],
            'profile' => 'mimes:jpeg,jpg,png',
            'position' => 'required'
        ]);





        Staffs::where('staffId', $id)->update(array(
            'name' => $request->name,
            'gender' => $request->gender,
            'dob' => Helper::formatMysqlDate($request->date_of_birth),
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'positionId' => $request->position,
        ));

        if ($request->file('profile') != null) {
            $path = $request->file('profile')->store('profile');
            Staffs::where('staffId', $id)->update(array(
                'profile' => $path,
            ));
        }


        return redirect('/system/staff');
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

        Staffs::where('staffId', $id)->update(array(
            'status' => $status,
        ));

        return redirect()->back();
    }
}
