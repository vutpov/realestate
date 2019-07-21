@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All Partners')

@section('content')

<table class="table table-hover dataTable">

    <thead>
        <tr>

            <th>#</th>
            <th>Name</th>
            <th>Type</th>
            <th>Date Created</th>
            <th>Address</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>


        {{-- @foreach ($user as $u)
        <tr>
            <td>{{$loop->iteration}}</td>
        <td>{{$u->username}}</td>
        <td>{{$u->name}}</td>
        <td>{{$u->role}}</td>
        <td>{{$u->status}}</td>
        <td><a href="{{url('/system/editUser')}}"><i class="fa fa-edit"></i></a>
            <a href="{{url('/system/editUser')}}"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach --}}


    </tbody>

</table>

@endsection

@section('display-detail','display:none')