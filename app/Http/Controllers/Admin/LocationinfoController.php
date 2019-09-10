<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\LocationInfo;
class LocationinfoController extends Controller
{
    public function index()
    {
    	$user=LocationInfo::all();
    	$data=array(
    		"users"=>$user
    	);
        
        return view("admin.locationinfos.index",$data);
    }
    public function create()
    {
        return view("admin.locationinfos.create");
    }
    public function store(Request $request)
    {
    	//dd($request->all());
    	$location = new LocationInfo;
    	$location->locationinfo = $request->locationinfo;
    	$location->save();

    	return redirect('system/viewlocation');
    }

    public function destroy($id)
    {
        LocationInfo::where('locationinfoId', $id)->delete();
        return redirect('/system/viewlocation');
    }

    public function edit($id)
    {
        $location = LocationInfo::where('locationinfoId',$id)->firstOrFail();
        return view('admin.locationinfos.edit',compact('location'));
    }

    public function update($id)
    {
        $location = LocationInfo::where('locationinfoId',$id)->firstOrFail();
        $attributes = request()->validate([
            'locationinfo' => 'required',
        ]);
        LocationInfo::where('locationinfoId',$id)->update($attributes);

        return redirect('/system/viewlocation');
    }
}
