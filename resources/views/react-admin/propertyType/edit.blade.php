@extends('admin.master')

@section('page-header','Create New Property Type')


@section('col','col-md-6')
@section('content')


<form action="{{url('/system/updatePropTypes/' . $propTypes->propertyTypeId)}}" method="POST">
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


    <div class="form-group">
        <label for="">Property Types</label>
        <input type="text" name="propertyType" value="{{$propTypes->propertyType}}" class="form-control">
    </div>
    <div class="from-group">
        <button class="btn btn-primary pull-right" type="submit" name="btnAdd">UPDATE</button>
    </div>



</form>


@endsection

@section('display-detail','display:none')