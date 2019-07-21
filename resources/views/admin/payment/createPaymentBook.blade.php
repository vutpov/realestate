@extends('admin.master')

@section('page-header','Create New Payment For Book')


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


    {{-- Book Id --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Book ID</label>
        <input type="text" class="form-control" name="bookId" placeholder="Book ID" value="{{old('bookId')}}" />
        <span class="help-block"></span>
    </div>


    {{-- Cost --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Amount To Pay</label>
        <input type="number" class="form-control" name="cost" value="{{old('Amount To Pay')}}" disabled />
        <span class="help-block"></span>
    </div>


    {{-- Total Discount --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Total Discount</label>
        <input type="number" class="form-control" name="discount" placeholder="Total Discount"
            value="{{old('Total Discount')}}" />
        <span class="help-block"></span>
    </div>

    {{-- Price --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Price</label>
        <input type="number" class="form-control" name="price" placeholder="price" value="{{old('price')}}" />
        <span class="help-block"></span>
    </div>


    {{-- Change --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Change</label>
        <input type="number" class="form-control" name="change" disabled />
        <span class="help-block"></span>
    </div>


    <input type="submit" class="btn btn-primary" />


</form>


@endsection