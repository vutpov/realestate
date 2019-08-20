@extends('admin.master')

@section('page-header','Create New Property Attribute')


@section('col','col-md-6')
@section('content')


<form action="{{url('/system/storePropAttribute')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif


    {{-- propAttributeDetail --}}
    @foreach ($propDetail as $item)

    <div class="form-group ">
        <label class="control-label" for="inputSuccess">{{$item}}</label>
        <input type="text" class="form-control" name="{{$item}}" placeholder="{{$item}}" value="{{old($item)}}" />
        <span class="help-block"></span>
    </div>
    @endforeach







    <input type="submit" class="btn btn-primary" value="Submit" />
    <button class="btn btn-danger pull-right">
        <a style="color:white;" href="/system/propAttribute">Cancel</a>
    </button>



</form>


@endsection

@section('display-detail','display:none')