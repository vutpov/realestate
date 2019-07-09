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
            <td>{{$u->status}}</td>
            <td>Edit</td>
        </tr>
        @endforeach


    </tbody>

</table>

@endsection