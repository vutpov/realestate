@extends('admin.master')

@section('col','col-md-6')

@section('page-header','View All Schedule')

@section('content')

<table class="table table-hover dataTable">

    <thead>
        SchID, ConID, Date, Customer, Status
        <tr>
            <th>#</th>
            <th>Contract ID</th>
            <th>Created At</th>
            <th>Customer</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($propTypes as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->propertyType}}</td>
            <td>
                <a href="/system/editPropTypes/{{$item->propertyTypeId}}"><i class="fa fa-edit"></i></a>
                @if($item->status == 1)
                <a href="/system/PropTypesStatus/{{$item->propertyTypeId}}/trash"><i class="fa fa-trash"></i></a>
                @else
                <a href="/system/PropTypesStatus/{{$item->propertyTypeId}}/recycle"><i class="fas fa-recycle"></i></a>
                @endif
            </td>
        </tr>
        @endforeach

    </tbody>




</table>

<div class="form-group">
    <label for="">
        <input type="checkbox" name="chkbox" id="chkbox-proptyType" {{$check}}>
        Trash
    </label>
</div>

@endsection

@section('display-detail','display:none')