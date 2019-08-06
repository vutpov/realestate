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
            <td><a href="{{url('/system/editPartner/'. $item->partnerId)}}"><i class="fa fa-edit"></i></a>
                <a href="#" data-toggle="modal" data-target="#partner-{{$item->partnerId}}"><i class="fa fa-trash"></i></a>
            </td>
        </tr>


        {{--model--}}
        <div class="modal fade" id="partner-{{$item->partnerId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h3 class="modal-title text-warning">Alert Dialog</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <h5>Are you sure that you want to delete partner: &nbsp;&nbsp;<b>{{$item->partner}}</b></h5>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="{{url('/system/deletePartner/'. $item->partnerId)}}" class="btn btn-primary">Delete</a>
                </div>
            </div>
            </div>
        </div>



        @endforeach 


    </tbody>

</table>



@endsection

@section('display-detail','display:none')