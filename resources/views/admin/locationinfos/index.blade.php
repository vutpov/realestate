

@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All LocationInfos')

@section('content')

<table class="table table-hover dataTable">

    <thead>
        <tr>

            <th>#</th>
            <th>LocationInfo</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($users as $item)
    	<tr>
    		<th>{{$loop->iteration}}</th>
        	<th>{{$item->locationinfo}}</th>
        	<th>
       		   
                <a href="{{url('/system/editLocation/'.$item->locationinfoId)}}"><i class="fa fa-edit"></i></a>

                <a href="{{url('/system/destroy/'.$item->locationinfoId)}}"><i class="fa fa-trash"></i></a>

                <!-- <a href="#"><i class="fas fa-recycle"></i></a> -->
            	
            </th>
    	</tr>
    	@endforeach
    </tbody>

</table>

@endsection

@section('display-detail','display:none') 