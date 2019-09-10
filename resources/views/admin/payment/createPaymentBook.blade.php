@extends('admin.master')

@section('page-header','Payment for Booking')

@section('col','col-md-12')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <form action="" method="POST">
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
        
                <div class="form-group">
                    <label id="bookId">Book ID</label>
                    <select name="bookId" class="form-control select2" id="book">
                        <option selected disabled>-- Please choose a BookId --</option>
                        @foreach($book as $item)
                        <option value="{{$item->bookId}}">{{$item->bookId}}</option>
                        @endforeach
                    </select>
                    <span class="help-block"></span>
                </div>

                {{-- Limit Amount --}}

                <div class="form-group">
                    <label class="control-label" for="inputSuccess">Limit Amount</label>
                    <input type="number" id="limitAmount" class="form-control" name="limitAmount" placeholder="Limit Amount" value="" disabled />
                    <span class="help-block"></span>
                </div>

                {{-- Remain --}}

                <div class="form-group">
                    <label class="control-label" for="inputSuccess">Remain</label>
                    <input type="number" id="remain" class="form-control" name="remain" placeholder="Remain" value="" disabled />
                    <span class="help-block"></span>
                </div>
        
                 {{-- Deposit --}}
        
                <div class="form-group">
                    <label class="control-label" for="inputSuccess">Deposit</label>
                    <input type="number" id="deposit" class="form-control" name="deposit" placeholder="Deposit" value=""/>
                    <span class="help-block"></span>
                </div>

                <input type="submit" class="btn btn-primary" id="submit" value="Submit" />
            </form>
        </div>
        
        <div class="col-md-1"></div>

        <div class="col-md-5">
            <p class="h5 text-center mt-2 text-primary" id="list-of-deposit"></p>
            <table class="table table-hover detail" id="list">
                
            </table>
        </div>
    </div>

<div class="modal" id="modal-wrapper">
    <section class="content-header">
        <h2>Invoice Booking Info</h2>
    </section>

    <section class="content container-fluid schedule">
        <div class="row">
            <div class="col-md-12">
                <h4>Invoice</h4>
                <div class="box box-primary">
                    <div class="box-body">
                        <?php
                            $parameter = explode("/",$_SERVER['REQUEST_URI']);
                        ?>
                        @if(is_numeric($parameter[count($parameter) - 1]))
                            @include('admin.invoice.book');
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@section('display-detail','display:none')

@section('script')
<script type="text/javascript">
    $(document).ready(() =>{
        $('#book').change(function(){
            var text = $(this).val();
            var link = window.location.origin + "/system/createPaymentBook/" + text;
            window.location = link;
        });

        let column=['No','InvoiceNo','Date','Deposit'];
        let showDiff=[false,false,false,false];
        let tableList = new customTable($('#list'),column,showDiff);

        // console.log(window.location.href);
        let link = window.location.href;
        let id = (link.split("/"))[link.split("/").length - 1];
        $('#bookId').html('Book ID is No ' +id);
        console.log(id);
        if(id == Number(id))
        {
            console.log('hello');
            var url = window.location.origin + "/system/getDetailList/" + id;

            $.get(url, function(data, status){
                console.log(data);
                $('#list-of-deposit').html('List of Deposit');
                let remain = 0;

                let count = $('#contract tr').length;
                data.detail.forEach(element => {
                    count++;
                    tableList.addRow(count,[count,element.invoiceNum,element.created_at,element.price])
                    remain += element.price;
                });

                let limitAmount = data.deposit[0].limitMoney;
                $('#limitAmount').val(limitAmount);
                $('#remain').val(limitAmount - remain);

                $('#deposit').keyup(() =>{
                    let deposit = Number($('#deposit').val());
                    if(deposit > $('#remain').val())
                        alert("Deposit can't higher than Remaining Amount");
                });
            });
        }

        let date, deposit, invoiceNum;
        $("#submit").click((e)=>{
            e.preventDefault();

            deposit = $('#deposit').val();

            if(deposit == ''){
                alert('Need Deposit');
                return;
            }
            invoiceNum = generateRandom();
            $("#invoice-code").html(invoiceNum);

            date = formatCurrentDate();
            $("#date").html(date);


            $("#modal-wrapper").modal();
            $('#bookingInvoice-detail').html("");
            // stRow=`<tr><td>1</td>${stRow}</tr>`;
            $('#bookingInvoice-detail').append(`<tr><td>1</td><td>${date}</td><td>${deposit}</td></tr>`);
        });

        $('#btn-submitPayment').click((e)=>{
            e.preventDefault();

            let master = {
                bookId : id,
                invoiceNum : invoiceNum,
                total : deposit
            }
            console.log(master);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type : 'POST',
                url: "{{route('storePaymentBooking')}}",
                dataType : 'json',
                contentType:'application/json',
                data: JSON.stringify(master),
                success: response =>{
               
                    console.log(response);
                    location.replace("{{route('payment')}}");
              
                },
                error: response=>{
                    console.log(response.responseJSON);

                },
                complete: response=>{
                    console.log(response);
                }
            });
        });
    });
</script>
@endsection