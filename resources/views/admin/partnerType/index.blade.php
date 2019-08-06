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


        @foreach ($partnerTypes as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->partnerType}}</td>
            <td><a href="{{url('/system/editPartnerType/'. $item->partnerTypeId)}}"><i class="fa fa-edit"></i></a>
                <a href="#" data-toggle="modal" data-target="#partnerType-{{$item->partnerTypeId}}"><i class="fa fa-trash"></i></a>
            </td>
        </tr>


        {{--model--}}
        <div class="modal fade" id="partnerType-{{$item->partnerTypeId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h3 class="modal-title text-warning">Alert Dialog</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <h5>Are you sure that you want to delete partnerType: &nbsp;&nbsp;<b>{{$item->partnerType}}</b></h5>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{url('/system/deletePartnerType/'. $item->partnerTypeId)}}" class="btn btn-primary">Delete</a>
                    </div>
                </div>
            </div>
        </div>


        @endforeach


    </tbody>

</table>

@endsection

@section('display-detail','display:none')