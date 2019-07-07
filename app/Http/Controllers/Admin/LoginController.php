<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Company;
use App\Staffs;
use App\Position;
use App\Role;
use App\User;

use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    public function index()
    {
        $company = Company::all()->count();
        if($company ==0)
        {
            return view('admin.create.step1');
        }

        return view('admin.login.index');
    }

    public function postCreateStep2()
    {
        $company = request()->validate([
            'companyname' => 'required|min:3|max:50',
            'email' => ['required','unique:companies','min:12'],
            'tel' => 'required',
            'address' => 'required|min:5',
            'description' => 'required',
            
        ]);


            
            request()->session()->put('company',$company);
            
            
            return redirect('/system/create-step2');
    
        }
        

    public function CreateStep2()
    {
        // dd(request()->session()->get('company'));
        return view('admin.create.step2',compact('company',request()->session()->get('company')));
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
            
        $position = Position::where('position','Admin')->first();
        $role = Role::where('role','Admin')->first();
        
        $staffAttr['positionId'] = $position->positionId;
        $staffId = DB::table('staffs')->insertGetId($staffAttr);
                
        unset($userAttr['confirmed']);
        $userAttr['status'] = 'active';
        $userAttr['staffId'] = $staffId;
        $userAttr['roleId'] = $role->roleId;
        DB::table('users')->insert($userAttr);

        return redirect('/system');
    }
}
