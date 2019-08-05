@extends('admin.master')

@section('col','col-md-6')

@section('page-header','View All Partner Types')

@section('content')

<table class="table table-hover dataTable">

    <thead>
        <tr>
            <th>#</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>


        @foreach ($partnerTypes as $value)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$value->partnerType}}</td>
            <td><a href="{{url('/system/editUser')}}"><i class="fa fa-edit"></i></a>
                <a href="{{url('/system/editUser')}}"><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        @endforeach


    </tbody>

</table>

@endsection

@section('display-detail','display:none')