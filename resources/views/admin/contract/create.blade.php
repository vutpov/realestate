@extends('admin.master')

@section('page-header','Create New Contract')
@section('col','col-md-6')
@section('content')

<form action="{{url('/system/storeUser')}}" method="POST" id="form-contract">
    @csrf
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="alert show-message master" style="display:none">

    </div>

    <input type="hidden" value="{{$nextId}}" id="ContractId" name="ContractId">
    {{-- Book --}}
    <div class="form-group">
        <label>Book ID</label>
        <select name="bookId" class="form-control select2" id="book">
            <option value="first" selected>-- Please choose a BookId --</option>
            @foreach($book as $item)
                <option value="{{$item->bookId}}">{{$item->bookId}}</option>
            @endforeach
        </select>
        {{-- <input type="text" class="form-control" name="bookId" placeholder="Book ID" value="{{old('bookId')}}" /> --}}
        <span class="help-block"></span>
    </div>

    {{-- Customer --}}
    <div class="form-group">
        <label>Customer</label>
        <input type="text" class="form-control" placeholder="customer" name="customer" id="customer" value="" disabled />
        {{-- <select class="form-control select2" name="customer">
            <option>Customer 1</option>
            <option>Customer 2</option>
        </select> --}}
    </div>

    {{-- Agency --}}
    <div class="form-group">
        <label>Agency</label>
        <input type="text" class="form-control" placeholder="agency" id="agency" name="agency" value="" disabled />
        {{-- <select class="form-control select2" name="agency">
            <option>Agency 1</option>
            <option>Agency 2</option>
        </select> --}}
    </div>

    {{-- Commission --}}

    <div class="form-group">
        <label class="control-label" for="commission">Commission</label>
        <input type="number" class="form-control" name="commission" id="commission" placeholder="Commission"
            value="{{old('commission')}}" required/>
        <span class="help-block"></span>
    </div>

    {{-- Percent Paid --}}
    {{-- <div class="form-group">
        <label>Percent Paid</label>
        <select class="form-control" name="percent">
            <option>30%</option>
            <option>40%</option>
            <option>50%</option>
        </select>
    </div> --}}

    {{-- Amount --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Amount</label>
        <input type="number" id="amount" class="form-control" name="amount" placeholder="amount" value="" disabled />
        <span class="help-block"></span>
    </div>

    {{-- Total Discount --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Discount</label>
        <input type="number" class="form-control" name="discount" id="discount" placeholder="Discount"
            value="0"/>
        <span class="help-block"></span>
    </div>

    {{-- SubTotal --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Sub Total</label>
        <input type="number" class="form-control" name="subtotal" id="subtotal" placeholder="Sub Total"
            value="0" disabled/>
        <span class="help-block"></span>
    </div>

    {{-- Deposit --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Deposit</label>
        <input type="number" class="form-control" name="deposit" id="deposit" placeholder="Deposit"
            value="0"/>
        <span class="help-block"></span>
    </div>

    {{-- Credit --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Remain</label>
        <input type="number" id="credit" class="form-control" name="credit" placeholder="Remain" value="0"
            disabled />
        <span class="help-block"></span>
    </div>
</form>
@endsection

@section('col-detail','col-md-8')

@section('detail-header','Contract Detail')

@section('detail')
{{-- Property --}}
{{-- <div class="form-group">
    <label>Property</label>
    <select class="form-control" name="property">
        <option>Property 1</option>
        <option>Property 2</option>
    </select>
</div> --}}


{{--  Price --}}

{{-- <div class="form-group">
    <label class="control-label" for="inputSuccess">Price</label>
    <input type="number" class="form-control" name="price" placeholder="Price" value="{{old('Price')}}" />
    <span class="help-block"></span>
</div> --}}

{{--  Discount --}}

{{-- <div class="form-group">
    <label class="control-label" for="inputSuccess"> Discount</label>
    <input type="number" class="form-control" name="discount" placeholder="Discount" value="{{old('Discount')}}" />
    <span class="help-block"></span>
</div> --}}


{{--  Amount --}}

{{-- <div class="form-group">
    <label class="control-label" for="inputSuccess"> Amount</label>
    <input type="number" class="form-control" name="amount" placeholder="Amount" value="{{old('Amount')}}" />
    <span class="help-block"></span>
</div> --}}



{{-- <div class="form-group">
    <button type="button" class="btn btn-primary">Add Property</button>
</div> --}}



{{-- Contract Detail --}}

<div class="form-group">
    <table class="table table-hover detail" id="contract">

    </table>
</div>

<input type="submit" class="btn btn-primary" id="submitContract" value="Submit" />
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(() => {
            let column=['No','Code','Price','Discount','Amount']
            let showDiff=[false,false,false,false,false];

            let contract = new customTable($('#contract'),column,showDiff);
            
            $('#book').change(function(){
                $('.custom-datatable-body').html('');
                var text = $(this).val();
                var url = window.location.origin + "/system/getDetailBook/" + text;

                $.get(url,function(data, status){
                    console.log(data);
                    var date = new Date().toLocaleDateString();
                    var deadline = new Date(data.book.deadline).toLocaleDateString();
                    if(deadline < date){
                        renderMessage($('.show-message'),'error',['Deadline is already expired.']);
                        location.reload();
                    }
                    if(data.book.status != "2"){
                        renderMessage($('.show-message'),'error',['Limit Amount not yet']);
                        location.reload();
                    }
                        
                    $('#agency').val(data.book.agency);
                    $('#customer').val(data.book.customer);
                    $('#commission').val(data.book.commission);
                    $('#amount').val(data.book.credit);
                    $('#subtotal').val(data.book.credit);
                    $('#credit').val(data.book.credit);

                    let count = $('#contract tr').length;
                    let amount = 0;

                    data.detail.forEach(element => {
                        contract.addRow(count,[count, element.propertyCode, element.price, element.discount, element.amount]);
                        count++;
                    });

                    const changeCredit=()=>{
                        let subtotal = Number($('#subtotal').val());
                        let deposit = Number($('#deposit').val());
                        let credit = subtotal - deposit;
                        if(credit < deposit)
                            alert('Deposit must be lower than Credit');
                        else
                            $('#credit').val(credit);
                    };

                    const changeSubTotal = ()=>{
                        let amount = Number($('#amount').val());
                        let discount = Number($('#discount').val());
                        let subtotal = amount - discount;
                        if(subtotal < discount)
                            alert('Discount must be lower than Amount');
                        else
                            $('#subtotal').val(subtotal);
                    };

                    $('#discount').keyup(()=>{
                        changeSubTotal();
                        changeCredit();
                    });

                    $('#deposit').keyup(()=>{
                        changeCredit();
                    });
                });
            });

            $("#submitContract").click(()=>{    

                var master = {
                    bookId : $('#book').val(),
                    commission : $('#commission').val(),
                    amount : $('#amount').val(),
                    discount : $('#discount').val(),
                    subtotal : $('#subtotal').val(),
                    deposit : $('#deposit').val(),
                    credit : $('#credit').val(),
                }
                
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type : 'POST',
                    url: "{{route('storeContract')}}",
                    dataType : 'json',
                    contentType:'application/json',
                    data: JSON.stringify(master),
                    success: response =>{
                        $("#contractId").val(response.contractId)
                        
                        renderMessage($('.show-message'),'success', response.message);
                        location.reload();
                    },
                    error: response=>{
                        renderMessage($('.show-message'),'error', response.responseJSON.message);
                    },
                    complete: response=>{
                        console.log(response);
                    },
                });
            });
        });
    </script>
@endsection