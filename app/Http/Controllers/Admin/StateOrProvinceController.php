<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\StateOrProvince;
class StateOrProvinceController extends Controller
{
    public function index()
    {
    	//SELECT 
    	$user=StateOrProvince::all();
    	$data=array(
    		"users"=>$user
    	);
        return view("admin.stateprovince.index",$data);
    }
    public function create()
    {
        return view("admin.stateprovince.create");
    }
    public function store(Request $request)
    {
    	//dd($request->all());
    	$stateprovince = new StateOrProvince;
    	$stateprovince->name = $request->name;
    	$stateprovince->save();

    	return redirect('system/viewstatprovince');
    }

    public function destroy($id)
    {
        StateOrProvince::where('stateOrProvinceId', $id)->delete();
        return redirect('/system/viewstatprovince');
    }

    public function edit($id)
    {
        $stateprovince = StateOrProvince::where('stateOrProvinceId',$id)->firstOrFail();
        return view('admin.stateprovince.edit',compact('stateprovince'));
    }

    public function update($id)
    {
        $stateprovince = StateOrProvince::where('stateOrProvinceId',$id)->firstOrFail();
        $attributes = request()->validate([
            'name' => 'required',
        ]);
        StateOrProvince::where('stateOrProvinceId',$id)->update($attributes);

        return redirect('/system/viewstatprovince');
    }
}
