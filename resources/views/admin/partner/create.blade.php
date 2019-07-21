@extends('admin.master')

@section('page-header','Create New Partner')


@section('col','col-md-6')
@section('content')


<form action="{{url('/system/storeUser')}}" method="POST" enctype="multipart/form-data">
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
        <select class="form-control">
            <option>Project</option>
            <option>One Time</option>
        </select>
    </div>

    {{-- Name --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}" />
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



    <input type="submit" class="btn btn-primary" />



</form>


@endsection