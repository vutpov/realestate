<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('admin.customer.index',compact('customers'));
    }

    public function create()
    {
        return view('admin.customer.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|min:12|max:30|unique:customers',
            'username' => 'required|min:4|max:30|unique:customers',
            'password' => 'required|min:6',
            'confirm' => 'same:password',
            'address' => 'required|min:10:max:191',
            'phone' => 'required|min:9|max:30'
        ]);

        unset($attributes['confirm']);
        $attributes['password'] = Hash::make($attributes['password']);

        Customer::create($attributes);

        return redirect('system/customer');
    }

    public function edit($id)
    {
        $customer = Customer::where('customerId',$id)->firstOrFail();
        return view('admin.customer.edit',compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::where('customerId',$id)->firstOrFail();

        $attributes = request()->validate([
            'name' => 'required|min:3|max:30',
            'email' => ['required','min:12','max:30','unique:customers,email,'.$customer->email.',email'],
            'username' => 'required|min:4|max:30|unique:customers,username,'.$customer->username.',username',
            'address' => 'required|min:10:max:191',
            'phone' => 'required|min:9|max:30'
        ]);

        if(!empty($request->password)){
            $this->validate($request,[
                'password' => 'min:6',
                'confirm' => 'same:password',
            ]);
            $attributes['password'] = Hash::make($request->password);
        }

        Customer::where('customerId',$id)->update($attributes);

        return redirect('/system/customer');
    }

    public function destroy($id)
    {
        Customer::where('customerId',$id)->delete();

        return redirect('/system/customer');
    }
}
