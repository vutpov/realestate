@extends('admin.master')

@section('page-header','Create New LocationInfos')


@section('col','col-md-6')
@section('content')

{{-- city--}}
<form action="/system/updateLocation/{{$location->locationinfoId}}" method="POST">
	@csrf
  
 <div class="form-group">
    <label class="control-label" for="inputSuccess">LocationInfo</label>
    <input type="text" class="form-control" name="locationinfo" placeholder="locationinfo" value="{{$location->locationinfo}}"/>
    <span class="help-block"></span>
  </div>
  <input type="submit" class="btn btn-primary" />

  <button class="btn btn-danger pull-right">
      <a style="color:white;">Cancel</a>
  </button>

</form>


@endsection

@section('display-detail','display:none')