@extends('admin.master')

@section('page-header','Create New Payment For Installment')


@section('col','col-md-12')
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


    {{-- Contract Id --}}
    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">Contract ID</label>
        <input type="text" class="form-control" name="contractId" placeholder="Contract ID"
            value="{{old('contractId')}}" />
        <span class="help-block"></span>
    </div>


    {{-- Cost --}}
    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">Amount To Pay</label>
        <input type="number" class="form-control" name="cost" value="{{old('Amount To Pay')}}" disabled />
        <span class="help-block"></span>
    </div>


    {{-- Total Discount --}}
    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">Total Discount</label>
        <input type="number" class="form-control" name="discount" placeholder="Total Discount"
            value="{{old('Total Discount')}}" />
        <span class="help-block"></span>
    </div>

    {{-- Penalty --}}
    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">Penalty</label>
        <input type="number" class="form-control" name="change" disabled />
        <span class="help-block"></span>
    </div>


    {{-- Price --}}
    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">Price</label>
        <input type="number" class="form-control" name="price" placeholder="price" value="{{old('price')}}" />
        <span class="help-block"></span>
    </div>




    {{-- Change --}}
    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">Change</label>
        <input type="number" class="form-control" name="change" disabled />
        <span class="help-block"></span>
    </div>

    <br>




</form>


@endsection

@section('detail-header','Payment Detail')

@section('detail')

{{-- schedule --}}

<div class="form-group">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>APay</th>
                <th>Prin.</th>
                <th>Int.</th>
                <th>OutPrin.</th>
                <th>Out.Debt</th>
                <th>Penalty</th>
                <th>Status</th>
                <th>Action</th>
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