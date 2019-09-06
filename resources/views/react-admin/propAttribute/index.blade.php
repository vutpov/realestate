@extends('admin.master')

@section('col','col-md-6')

@section('page-header','View All Property Attributes')

@section('content')

<table class="table table-hover dataTable">

    <thead>
        <tr>
            <th>#</th>
            <th>Attribute</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>


        @foreach ($propAttribute as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->propAttribute}}</td>
            <td>
                <a href="{{url('/system/editPropAttribute/'.$item->propAttributeid)}}"><i class="fa fa-edit"></i></a>

                @if ($item->status==1)
                <a href="{{url('/system/propAttributeStatus/'.$item->propAttributeid.'/trash')}}"><i
                        class="fa fa-trash"></i></a>
                @else
                <a href="{{url('/system/propAttributeStatus/'.$item->propAttributeid.'/untrash')}}"><i
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