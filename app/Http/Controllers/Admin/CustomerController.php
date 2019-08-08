<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        Customer::create(request()->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|min:12|max:30|unique:customers',
            'address' => 'required|min:10:max:191',
            'phone' => 'required|min:9|max:30'
        ]));

        return redirect('system/customer');
    }

    public function edit($id)
    {
        $customer = Customer::where('customerId',$id)->firstOrFail();
        return view('admin.customer.edit',compact('customer'));
    }

    public function update($id)
    {
        $customer = Customer::where('customerId',$id)->firstOrFail();

        $attributes = request()->validate([
            'name' => 'required|min:3|max:30',
            'email' => ['required','min:12','max:30','unique:customers,email,'.$customer->email.',email'],
            'address' => 'required|min:10:max:191',
            'phone' => 'required|min:9|max:30'
        ]);

        Customer::where('customerId',$id)->update($attributes);

        return redirect('/system/customer');
    }

    public function destroy($id)
    {
        Customer::where('customerId',$id)->delete();

        return redirect('/system/customer');
    }
}
