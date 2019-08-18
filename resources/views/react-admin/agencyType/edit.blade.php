@extends('admin.master')

@section('page-header','Edit Agency Type')


@section('col','col-md-6')
@section('content')

<?php
    use App\Http\Helpers\Helper;
    $type = Helper::oldOrDB('type',$agencyType->agencyType);

?>

<form action="{{url('/system/updateAgencyType',$agencyType->agencyTypeId)}}" method="POST"
    enctype="multipart/form-data">
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


    {{-- Type --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Type</label>
        <input type="text" class="form-control" name="type" placeholder="Type" value="{{$type}}" />
        <span class="help-block"></span>
    </div>


    <button class="btn btn-danger pull-right">
        <a style="color:white;" href="/system/agencyType">Cancel</a>
    </button>




    <input type="submit" class="btn btn-primary" />



</form>





@endsection

@section('display-detail','display:none')