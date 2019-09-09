<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Company;
use App\Staffs;
use App\Position;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/system';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function index()
    {
        $company = Company::all()->count();
        if ($company == 0) {
            return view('admin.create.step1');
        }

        return view('admin.login.index');
    }

    public function index1()
    {
        $company = Company::all()->count();
        if ($company == 0) {
            return view('admin.create.step1');
        }
        return view('react-admin.login.index');
    }



    public function postCreateStep2()
    {


        $company = request()->validate([
            'companyname' => 'required|min:3|max:50',
            'email' => ['required', 'unique:companies', 'min:12'],
            'tel' => 'required',
            'address' => 'required|min:5',
            'description' => 'required',
            'logo' => 'required|mimes:jpeg,png'
        ]);



        $logo = request()->file('logo')->store('logo');


        $company['logo'] = $logo;


        request()->session()->put('company', $company);

        return redirect('/system/create-step2');
    }


    public function CreateStep2()
    {
        // dd(request()->session()->get('company'));
        return view('admin.create.step2', compact('company', request()->session()->get('company')));
    }

    // public function fallback()
    // {
    //     $company=request()->session()->get('company');
    //     return view('admin.create.step1',compact('comp',$company));
    // }

    public function store()
    {

        $staffAttr = request()->validate([
            'name' => 'required|min:5|max:50',
            'gender' => 'required',
            'dob' => 'required|date',
            'address' => 'required|min:5',
            'phone' => 'required|min:10',
            'email' => 'required|min:12|unique:staffs'
        ]);

        $userAttr = request()->validate([
            'username' => 'required|min:3|max:20',
            'password' => 'required|min:6',
            'confirmed' => 'required|min:6|same:password'
        ]);

        Company::create(request()->session()->get('company'));

        $position = Position::where('position', 'Admin')->first();
        $role = Role::where('role', 'Admin')->first();

        $staffAttr['positionId'] = $position->positionId;
        $staffId = DB::table('staffs')->insertGetId($staffAttr);

        unset($userAttr['confirmed']);
        $userAttr['staffId'] = $staffId;
        $userAttr['roleId'] = $role->roleId;
        $userAttr['password'] =  Hash::make($userAttr['password']);


        DB::table('users')->insert($userAttr);

        return redirect('/system');
    }

    public function login(Request $request)
    {

        $this->validate(
            $request,
            [
                'username' => 'required',
                // 'password' => 'required'
            ]
        );

        $user = User::where('staffId', 1)
            ->first();

        if ($user) {

            Auth::loginUsingId($user->UserId);
            return redirect()->route('dashboard');
        } else {
            //dd($user);
            return redirect()->back()->withInput();
        }


        //Hashing
        // if (Auth::attempt(['username' => $request->username, 'password' => $request->password, 'status' => 1])) {




        //     $staff = DB::table('staffs')
        //         ->join('users', 'users.staffId', '=', 'staffs.staffId')
        //         ->join('roles', 'roles.roleId', '=', 'users.roleId')
        //         ->select('name', 'profile', 'role')
        //         ->where('staffs.staffId', '=', Auth::user()->staffId)
        //         ->get();


        //     $staff = $staff[0];

        //     //laravel
        //     return redirect()->intended('/system/dashboard')->with('staff', $staff);
        //     //laravel


        //     // return redirect()->intended('/react/dashboard')->with('staff', $staff);
        // } else {
        //     //laravel
        //     return redirect()->back()->with('msg', 'Your username or password incorrect');
        //     //laravel
        // }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/system');
    }
}
