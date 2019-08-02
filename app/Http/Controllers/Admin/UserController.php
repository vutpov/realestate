<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')
            ->join('staffs', 'users.staffId', '=', 'staffs.staffId')
            ->join('roles', 'users.roleId', '=', 'roles.roleId')
            ->select('userId', 'username', 'staffs.name', 'role', 'users.status')
            ->get();

        $data = array('user' => $user);


        return View('Admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    static function getRole()
    {
        return DB::table('roles')->select('roleId', 'role')->get();
    }

    public function create()
    {
        $staff  = DB::select(DB::raw("SELECT staffId,name from staffs where staffId not in(select staffId from users)"));

        $role = $this::getRole();

        $data = array(
            'staff' => $staff,
            'role' => $role
        );
        return View('admin.user.create', $data);
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
            'username' => 'min:5|max:20',
            'password' => 'min:5',
            'confirm' => 'same:password',
            'staff' => 'required',
        ]);


        $user = new User;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->roleId = $request->role;
        $user->staffId = $request->staff;
        $user->save();

        return redirect('/system/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $staff  = DB::select(DB::raw("SELECT staffId,name from staffs where staffId not in(select staffId from users where staffId not in($id))"));

        $user = User::find($id);

        $role = $this::getRole();

        $data = array(
            'user' => $user,
            'staff' => $staff,
            'role' => $role
        );

        return View('admin.user.create', $data);
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
