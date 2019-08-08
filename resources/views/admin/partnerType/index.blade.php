@extends('admin.master')

@section('col','col-md-6')

@section('page-header','View All Partner Types')

@section('content')

<table class="table table-hover dataTable">

    <thead>
        <tr>
            <th>#</th>
            <th>Type</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>


        @foreach ($partnerTypes as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->partnerType}}</td>
            <td>
                @if($item->status == 1)
                    <a href="/system/ChangeStatusPartnerType/{{$item->partnerTypeId}}/{{$item->status}}"><i class="fas fa-eye"></i></a>
                @else
                    <a href="/system/ChangeStatusPartnerType/{{$item->partnerTypeId}}/{{$item->status}}"><i class="fas fa-eye-slash"></i></a>
                @endif
            </td>
            <td><a href="{{url('/system/editPartnerType/'. $item->partnerTypeId)}}"><i class="fa fa-edit"></i></a>
                <a href="#" ><i class="fa fa-trash"></i></a>
            </td>
        </tr>



        @endforeach


    </tbody>

</table>

@endsection

@section('display-detail','display:none')