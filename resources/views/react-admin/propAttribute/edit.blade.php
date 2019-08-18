@extends('admin.master')

@section('page-header','Edit User')


@section('col','col-md-6')
@section('content')



<form action="{{url('/system/updatePropAttribute',$propAttributeId)}}" method="POST" enctype="multipart/form-data">
    
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



    <?php

        use App\Http\Helpers\Helper;
        
        $dataOutput=array();

        foreach($pairedValue as $key => $value){
            $dataOutput[$key] = Helper::oldOrDB($key , $value);
            
        }
    
    ?>

    {{--propAttributeDetail--}}
    @foreach ($propDetail as $value)

    <div class="form-group">
        <label class="control-label" for="inputSuccess">{{$value}}</label>
        <input type="text" class="form-control" name="{{$value}}" placeholder="{{$value}}"
            value="{{$dataOutput[$value]}}" />
        <span class="help-block"></span>
    </div>
    @endforeach












    <input type="submit" class="btn btn-primary" />
    <button class="btn btn-danger pull-right">
        <a style="color:white;" href="/system/propAttribute">Cancel</a>
    </button>


</form>


@endsection

@section('display-detail','display:none')