@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All Projects')

@section('content')


<table class="table table-hover dataTable">

    <thead>
        <tr>

            <th>#</th>
            <th>ID</th>
            <th>Project</th>
            <th>Staff</th>
            <th>Partner</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($projects as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->projectId}}</td>
            <td>{{$item->project}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->partner}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
            <td><a href="{{url('/system/editProject/'. $item->projectId)}}"><i class="fa fa-edit"></i></a>

            </td>
        </tr>
        @endforeach


    </tbody>

</table>

@endsection

@section('display-detail','display:none')