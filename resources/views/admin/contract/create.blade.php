@extends('admin.master')

@section('page-header','Create New Contract')


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


    {{-- Book --}}
    <div class="form-group">
        <label class="control-label" for="bookId">Book ID</label>
        <input type="text" class="form-control" name="bookId" placeholder="Book ID" value="{{old('bookId')}}" />
        <span class="help-block"></span>
    </div>



    {{-- Customer --}}
    <div class="form-group">
        <label>Customer</label>
        <select class="form-control" name="cutomer">
            <option>Customer 1</option>
            <option>Customer 2</option>
        </select>
    </div>


    {{-- Agency --}}
    <div class="form-group">
        <label>Agency</label>
        <select class="form-control" name="agency">
            <option>Agency 1</option>
            <option>Agency 2</option>
        </select>
    </div>


    {{-- Commission --}}

    <div class="form-group">
        <label class="control-label" for="commission">Commission</label>
        <input type="number" class="form-control" name="commission" placeholder="Commission"
            value="{{old('commission')}}" />
        <span class="help-block"></span>
    </div>


    {{-- Percent Paid --}}
    <div class="form-group">
        <label>Percent Paid</label>
        <select class="form-control" name="percent">
            <option>30%</option>
            <option>40%</option>
            <option>50%</option>
        </select>
    </div>



    {{-- Total Discount --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Total Discount</label>
        <input type="number" class="form-control" name="totalDiscount" placeholder="Total Discount"
            value="{{old('commission')}}" />
        <span class="help-block"></span>
    </div>


    {{-- Amount --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Amount</label>
        <input type="number" class="form-control" name="amount" placeholder="amount" value="" disabled />
        <span class="help-block"></span>
    </div>


    {{-- remain --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Remain</label>
        <input type="number" class="form-control" name="remain" placeholder="Remain" value="{{old('remain')}}"
            disabled />
        <span class="help-block"></span>
    </div>


</form>


@endsection


@section('col-detail','col-md-6')

@section('detail-header','Contract Detail')



@section('detail')
{{-- Property --}}
<div class="form-group">
    <label>Property</label>
    <select class="form-control" name="property">
        <option>Property 1</option>
        <option>Property 2</option>
    </select>
</div>


{{--  Price --}}

<div class="form-group">
    <label class="control-label" for="inputSuccess">Price</label>
    <input type="number" class="form-control" name="price" placeholder="Price" value="{{old('Price')}}" />
    <span class="help-block"></span>
</div>

{{--  Discount --}}

<div class="form-group">
    <label class="control-label" for="inputSuccess"> Discount</label>
    <input type="number" class="form-control" name="discount" placeholder="Discount" value="{{old('Discount')}}" />
    <span class="help-block"></span>
</div>


{{--  Amount --}}

<div class="form-group">
    <label class="control-label" for="inputSuccess"> Amount</label>
    <input type="number" class="form-control" name="amount" placeholder="Amount" value="{{old('Amount')}}" />
    <span class="help-block"></span>
</div>



<div class="form-group">
    <button type="button" class="btn btn-primary">Add Property</button>
</div>



{{-- Contract Detail --}}

<div class="form-group">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Property ID</th>
            </tr>
        </thead>
        <tbody>


            {{-- @foreach ($user as $u)
                            <tr>
                                <td>{{$loop->iteration}}</td>
            <td>{{$u->username}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->role}}</td>
            <td>{{$u->status}}</td>
            <td><a href="{{url('/system/editUser')}}"><i class="fa fa-edit"></i></a>
                <a href="{{url('/system/editUser')}}"><i class="fa fa-trash"></i></a></td>
            </tr>
            @endforeach --}}


        </tbody>
    </table>
</div>

<input type="submit" class="btn btn-primary" />
@endsection