@extends('admin.master')

@section('page-header','Create New Partner')


@section('col','col-md-6')
@section('content')


<form action="{{url('/system/partner')}}" method="POST">
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






    {{-- Partner Type --}}
    <div class="form-group">
        <label>Partner Type</label>
        <select class="form-control" name="partnerType">
            @foreach($partnerType as $item)
                <option value="{{$item->partnerTypeId}}">{{ $item->partnerType }}</option>
            @endforeach
        </select>
    </div>

    {{-- Name --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Partner</label>
        <input type="text" class="form-control" name="partner" placeholder="Name" value="{{old('name')}}" />
        <span class="help-block"></span>
    </div>

    {{-- phone --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{old('phone')}}" />
        <span class="help-block"></span>
    </div>

    {{-- email --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}" />
        <span class="help-block"></span>
    </div>


    {{-- Address --}}
    <div class="form-group">
        <label>Address</label>
        <textarea class="form-control" rows="3" placeholder="Address" name="address">{{old('address')}}</textarea>
    </div>



    <input type="submit" class="btn btn-primary pull-right" value="Add" />



</form>


@endsection

@section('display-detail','display:none')