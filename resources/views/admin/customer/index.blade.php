@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All Agency')

@section('content')


<table class="table table-hover dataTable">

    <thead>
        <tr>

            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($customers as $customer)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->phone}}</td>
                <td>{{$customer->address}}</td>
                <td>
                    <a href="{{url('/system/editCustomer/'.$customer->customerId)}}"><i class="fa fa-edit"></i></a>
                    <a href="{{url('/system/deleteCustomer/'.$customer->customerId)}}"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>

@endsection

@section('display-detail','display:none')