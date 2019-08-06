@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All Users')

@section('content')

<table class="table table-hover dataTable">

    <thead>
        <tr>

            <th>#</th>
            <th>Username</th>
            <th>Staff</th>
            <th>Role</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>


        @foreach ($user as $u)
        <tr>


            <td>{{$loop->iteration}}</td>
            <td>{{$u->username}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->role}}</td>
            <td>


                {{($u->status==1)?'Activated':'Deactivated'}}
            </td>
            <td><a href="{{url('/system/editUser/'.$u->userId)}}"><i class="fa fa-edit"></i></a>
                <a href="{{url('/system/deleteUser/'.$u->userId)}}"><i class="fa fa-trash"></i></a>
                <a href="{{url('/system/setActive/'.$u->userId)}}"><i class="far fa-check-square"></i></a>
            </td>
        </tr>
        @endforeach


    </tbody>

</table>

@endsection

@section('display-detail','display:none')