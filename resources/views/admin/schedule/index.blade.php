@extends('admin.master')

@section('col','col-md-12')

@section('page-header','View All Schedule')

@section('content')

<table class="table table-hover dataTable">

    <thead>

        <tr>
            <th>#</th>
            <th>Contract ID</th>
            <th>Created At</th>
            <th>Customer</th>
            <th>Status</th>
            <th>Completion</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($schedule as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->contractId}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->name}}</td>

            <td>
                @if ($item->status==0)
                Pending
                @else
                Done
                @endif
            </td>
            <td>{{$item->completion}}%</td>
            <td><a href="{{route("showSchedule",['id'=>$item->contractId])}}"><i class="fas fa-search"></i></a>


        </tr>
        @endforeach

    </tbody>




</table>



@endsection

@section('display-detail','display:none')