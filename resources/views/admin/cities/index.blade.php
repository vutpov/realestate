

@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All City')

@section('content')

<table class="table table-hover dataTable">

    <thead>
        <tr>

            <th>#</th>
            <th>City</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($users as $item)
    	<tr>
    		<th>{{$loop->iteration}}</th>
        	<th>{{$item->city}}</th>
        	<th>
       		   
                <a href="{{url('/system/editCity/'.$item->cityId)}}"><i class="fa fa-edit"></i></a>

                <a href="{{url('/system/destroy/'.$item->cityId)}}"><i class="fa fa-trash"></i></a>

                <!-- <a href="#"><i class="fas fa-recycle"></i></a> -->
            	
            </th>
    	</tr>
    	@endforeach
    </tbody>

</table>

@endsection

@section('display-detail','display:none') 