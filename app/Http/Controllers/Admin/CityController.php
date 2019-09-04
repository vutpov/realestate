<?php

namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;
use App\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
    	$user=City::all();
    	$data=array(
    		"users"=>$user
    	);
        
        return view("admin.cities.index",$data);
    }
    public function create()
    {
        return view("admin.cities.create");
    }
    public function store(Request $request)
    {
    	//dd($request->all());
    	$city = new City;
    	$city->city = $request->city;
    	$city->save();

    	return redirect('system/addcities');
    }

    public function destroy($id)
    {
        City::where('cityId', $id)->delete();
        return redirect('/system/addcities');
    }



    public function edit($id)
    {
        $city = City::where('cityId',$id)->firstOrFail();
        return view('admin.cities.edit',compact('city'));
    }

    public function update($id)
    {
        $city = City::where('cityId',$id)->firstOrFail();
        $attributes = request()->validate([
            'city' => 'required',
        ]);
        City::where('cityId',$id)->update($attributes);

        return redirect('/system/addcities');
    }

}
