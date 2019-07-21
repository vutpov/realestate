@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All Book')

@section('content')



<table class="table table-hover dataTable">

    <thead>
        <tr>
            <th>#</th>
            <th>Book ID</th>
            <th>Staff</th>
            <th>Customer</th>
            <th>Agent</th>
            <th>Date</th>
            <th>Limit Amount</th>
            <th>Dead Line</th>
            <th>Total</th>
            <th>Discount</th>
            <th>SubTotal</th>
            <th>Deposit</th>
            <th>Credit</th>
            <th>Commission</th>
            <th>Status</th>
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