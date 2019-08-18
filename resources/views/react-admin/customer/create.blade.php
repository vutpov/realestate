@extends('admin.master')

@section('page-header','Create New Customer')


@section('col','col-md-6')
@section('content')

<form action="/system/storeCustomer" method="POST">
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

    {{-- Name --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}"/>
        <span class="help-block"></span>
    </div>

    {{-- Email --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{old('email')}}" />
        <span class="help-block"></span>
    </div>

    {{-- Phone --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{old('phone')}}" />
        <span class="help-block"></span>
    </div>


    {{-- Address --}}
    <div class="form-group">
        <label>Address</label>
        <textarea name="address" class="form-control" rows="3" placeholder="Address">{{old('address')}}</textarea>
    </div>
    <input type="submit" class="btn btn-primary" />
</form>


@endsection

@section('display-detail','display:none')