@extends('admin.master')

@section('page-header','Create New City')


@section('col','col-md-6')
@section('content')

{{-- city--}}
<form action="/system/updateCity/{{$city->cityId}}" method="POST">
	@csrf
  
 <div class="form-group">
    <label class="control-label" for="inputSuccess">City</label>
    <input type="text" class="form-control" name="city" placeholder="city" value="{{$city->city}}"/>
    <span class="help-block"></span>
  </div>
  <input type="submit" class="btn btn-primary" />

  <button class="btn btn-danger pull-right">
      <a style="color:white;">Cancel</a>
  </button>

</form>


@endsection

@section('display-detail','display:none')