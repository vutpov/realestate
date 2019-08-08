@extends('admin.master')

@section('col','col-md-6')

@section('page-header','View All Agency Type')

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


        @foreach ($agencyType as $a)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$a->agencyType}}</td>



            <td>
                <a href="{{url('/system/editAgencyType/'.$a->agencyTypeId)}}"><i class="fa fa-edit"></i></a>

                @if ($a->status==1)
                <a href="{{url('/system/agencyTypeStatus/'.$a->agencyTypeId.'/trash')}}"><i class="fa fa-trash"></i></a>
                @else
                <a href="{{url('/system/agencyTypeStatus/'.$a->agencyTypeId.'/untrash')}}"><i
                        class="fas fa-recycle"></i></a>
                @endif



            </td>
        </tr>
        @endforeach


    </tbody>

</table>

<div class="form-group">




    <div class="checkbox">
        <label>
            <input type="checkbox" value="{{$trashUrl}}" name="trash-check-staff" id="trash-check-staff"
                {{$checkTrash}}>
            Trash
        </label>
    </div>

</div>


@endsection

@section('display-detail','display:none')