@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All Partners')

@section('content')

<table class="table table-hover dataTable">

    <thead>
        <tr>

            <th>#</th>
            <th>Partner</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>PartnerType</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>


        @foreach ($partners as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->partner}}</td>
            <td>{{$item->address}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->partnerTypes->partnerType}}</td>
            <td><a href="{{url('/system/editPartner')}}"><i class="fa fa-edit"></i></a>
                <a href="{{url('/system/editUser')}}"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach 


    </tbody>

</table>

@endsection

@section('display-detail','display:none')