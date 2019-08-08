@extends('admin.master')

@section('page-header','View All Staffs')



@section('col','col-md-12')


@section('content')


<table class="table table-hover dataTable">

    <thead>
        <tr>
            <th>#</th>

            <th>Name</th>
            <th>Position</th>
            <th>Gender</th>
            <th>DOB</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Profile</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>



        @foreach ($staff as $s)
        <tr>


            <td>{{$loop->iteration}}</td>
            <td>{{$s->name}}</td>
            <td>{{$s->position}}</td>
            <td>{{$s->gender}}</td>
            <td>{{$s->dob}}</td>
            <td>{{$s->address}}</td>
            <td>{{$s->phone}}</td>
            <td>{{$s->email}}</td>

            <td><img src="{{url('/storage')}}/{{$s->profile}}" alt="" class="img-fluid" width="100" height="100">


            </td>

            <td>
                <a href="{{url('/system/editStaff/'.$s->staffId)}}"><i class="fa fa-edit"></i></a>

                @if ($s->status==1)
                <a href="{{url('/system/staffStatus/'.$s->staffId.'/trash')}}"><i class="fa fa-trash"></i></a>
                @else
                <a href="{{url('/system/staffStatus/'.$s->staffId.'/untrash')}}"><i class="fas fa-recycle"></i></a>
                @endif



            </td>
        </tr>
        @endforeach


    </tbody>

</table>


<div class="form-group">




    <div class="checkbox">
        <label>
            <input type="checkbox" value="{{$trashUrl}}" name="trash-check-staff" id="trash-check-staff"
                {{$checkTrash}}>
            Trash
        </label>
    </div>

</div>
@endsection




@section('display-detail','display:none')