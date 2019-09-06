@extends('admin.master')

@section('page-header','View Contract')


@section('col','col-md-6')
@section('content')
<form action="{{url('/system/storeUser')}}" method="POST" id="form-contract">
    @csrf
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="alert show-message master" style="display:none">

    </div>

    {{-- Book --}}
    <div class="form-group">
        <label>Book ID</label>
        <input type="text" class="form-control" value="{{$contract->bookId}}" disabled />
        <span class="help-block"></span>
    </div>

    {{-- Customer --}}
    <div class="form-group">
        <label>Customer</label>
        <input type="text" class="form-control" placeholder="customer" name="customer" id="customer" value="{{$contract->customer}}"
            disabled />
    </div>

    {{-- Agency --}}
    <div class="form-group">
        <label>Agency</label>
        <input type="text" class="form-control" placeholder="agency" id="agency" name="agency" value="{{$contract->agency}}" disabled />
    </div>

    {{-- Commission --}}

    <div class="form-group">
        <label class="control-label" for="commission">Commission</label>
        <input type="number" class="form-control" name="commission" id="commission" placeholder="Commission"
            value="{{$contract->comission}}" disabled />
        <span class="help-block"></span>
    </div>

    {{-- Amount --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Amount</label>
        <input type="number" id="amount" class="form-control" name="amount" placeholder="amount" value="{{$contract->amount}}" disabled />
        <span class="help-block"></span>
    </div>

    {{-- Total Discount --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Discount</label>
        <input type="number" class="form-control" name="discount" id="discount" placeholder="Discount" value="{{$contract->discount}}" disabled />
        <span class="help-block"></span>
    </div>

    {{-- SubTotal --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Sub Total</label>
        <input type="number" class="form-control" name="subtotal" id="subtotal" placeholder="Sub Total" value="{{$contract->subTotal}}"
            disabled />
        <span class="help-block"></span>
    </div>

    {{-- Deposit --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Deposit</label>
        <input type="number" class="form-control" name="deposit" id="deposit" placeholder="Deposit" value="{{$contract->deposit}}" disabled />
        <span class="help-block"></span>
    </div>

    {{-- Credit --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Remain</label>
        <input type="number" id="credit" class="form-control" name="credit" placeholder="Remain" value="{{$contract->credit}}" disabled />
        <span class="help-block"></span>
    </div>
</form>
@endsection

@section('col-detail','col-md-8')

@section('detail-header','Contract Detail')

@section('detail')
<div class="form-group">
    <table class="table table-hover detail has-action" id="contract">
        <thead>
            <th>No</th>
            <th>Code</th>
            <th>Price</th>
            <th>Discount</th>
            <th>Amount</th>
        </thead>
        <tbody>
            @foreach ($detail as $item)
            <tr>
                <td>{{$item->contractId}}</td>
                <td>{{$item->propertyCode}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->discount}}</td>
                <td style="padding: 1rem;">{{$item->amount}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>


</div>
@endsection