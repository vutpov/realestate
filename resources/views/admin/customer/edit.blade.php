@extends('admin.master')

@section('page-header','Update Customer')


@section('col','col-md-6')
@section('content')

<form action="/system/updateCustomer/{{$customer->customerId}}" method="POST">
    {{method_field('PATCH')}}
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
        <input type="text" class="form-control" name="name" placeholder="Name" value="{{$customer->name}}"/>
        <span class="help-block"></span>
    </div>

    {{-- Email --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{$customer->email}}" />
        <span class="help-block"></span>
    </div>

    {{-- Phone --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Phone</label>
        <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$customer->phone}}" />
        <span class="help-block"></span>
    </div>


    {{-- Address --}}
    <div class="form-group">
        <label>Address</label>
        <textarea name="address" class="form-control" rows="3" placeholder="Address">{{$customer->address}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <button class="btn btn-danger pull-right">
        <a style="color:white;" href="/system/agency">Cancel</a>
    </button>
</form>


@endsection

@section('display-detail','display:none')