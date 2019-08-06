<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Staffs;
use App\Position;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $staff = DB::table('staffs')
            ->join('positions', 'positions.positionId', '=', 'staffs.positionId')
            ->select('staffId', 'name', 'positions.position', 'gender', 'dob', 'address', 'phone', 'email', 'profile')
            ->get();



        $data = array('staff' => $staff);




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
    public function store(Request $request)
    {


        $this->validate($request, [
            'name' => 'required|min:5|max:50|unique:staffs',
            'gender' => 'required',
            'date_of_birth' => 'required|date',
            'address' => 'required|min:5',
            'phone' => 'required|min:10',
            'email' => 'required|min:12|unique:staffs',
            'profile' => 'mimes:jpeg,png '
        ]);

        $path = null;
        if ($request->file('profile') != null) {
            $path = $request->file('profile')->store('profile');
        }


        $staff = new Staffs;
        $staff->name = $request->name;
        $staff->gender = $request->gender;
        $staff->dob =   date('Y-m-d', strtotime($request->date_of_birth));
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
