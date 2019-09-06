@extends('admin.master')

@section('page-header','Create StateProvince')


@section('col','col-md-6')
@section('content')


{{-- name--}}
<form action="/system/updatestateprovince/{{$stateprovince->stateOrProvinceId}}" method="POST">
	@csrf
  
 <div class="form-group" >
    <label class="control-label" for="inputSuccess">Name</label>
    <input type="text" class="form-control" name="name" placeholder="name" value="{{$stateprovince->name}}"/>
    <span class="help-block"></span>
  </div>
  <input type="submit" class="btn btn-primary" />

  <button class="btn btn-danger pull-right">
      <a style="color:white;">Cancel</a>
  </button>

</form>


@endsection

@section('display-detail','display:none')