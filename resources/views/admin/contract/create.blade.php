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
        {{-- <input type="text" class="form-control" name="bookId" placeholder="Book ID" value="{{old('bookId')}}" />
        --}}
        <span class="help-block"></span>
    </div>

    {{-- Customer --}}
    <div class="form-group">
        <label>Customer</label>
        <input type="text" class="form-control" placeholder="customer" name="customer" id="customer" value=""
            disabled />
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
            value="{{old('commission')}}" required />
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
        <input type="number" class="form-control" name="discount" id="discount" placeholder="Discount" value="0" />
        <span class="help-block"></span>
    </div>

    {{-- SubTotal --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Sub Total</label>
        <input type="number" class="form-control" name="subtotal" id="subtotal" placeholder="Sub Total" value="0"
            disabled />
        <span class="help-block"></span>
    </div>

    {{-- Deposit --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Deposit</label>
        <input type="number" class="form-control" name="deposit" id="deposit" placeholder="Deposit" value="0" />
        <span class="help-block"></span>
    </div>

    {{-- Credit --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Remain</label>
        <input type="number" id="credit" class="form-control" name="credit" placeholder="Remain" value="0" disabled />
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


<input type="submit" class="btn btn-primary" id="btn-schedule" value="Confirm" />


@endsection


@section('additional-info')


<!-- Modal HTML embedded directly into document -->
<div id="scheule-wrapper" class="modal">


    <!-- Detail Header -->
    <section class="content-header">
        <h2>
            Installment Info
        </h2>

    </section>


    <!-- Detail content -->
    <section class="content container-fluid schedule">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-body">

                        {{-- Amount --}}
                        <div class="form-group">
                            <label class="control-label" for="inputSuccess">Amount</label>
                            <input type="text" class="form-control" name="amount" placeholder="Amount"
                                id="amountSchedule" disabled />
                            <span class="help-block"></span>
                        </div>

                        {{-- Rate --}}
                        <div class="form-group">
                            <label class="control-label" for="inputSuccess">Rate</label>
                            <input type="text" class="form-control" name="rate" placeholder="Rate" id="rateSchedule" />
                            <span class="help-block"></span>
                        </div>

                        {{-- Druation --}}
                        <div class="form-group">
                            <label class="control-label" for="inputSuccess">Duration</label>
                            <input type="text" class="form-control" name="duration" placeholder="Duration"
                                id="durationSchedule" />
                            <span class="help-block"></span>
                        </div>

                        {{-- Start --}}
                        <div class="form-group">
                            <label class="control-label" for="inputSuccess">Start</label>
                            <input type="date" class="form-control" name="start" placeholder="start"
                                id="startSchedule" />
                            <span class="help-block"></span>
                        </div>

                        <button class="btn btn-primary" id="getSchedule">Get Schedule</button>

                        <button type="submit" class="btn btn-primary pull-right" id="submitContract">Submit</button>





                    </div>
                </div>
            </div>

            <div class="col-md-12">

                <h4>
                    Schedule
                </h4>

                <div class="box box-primary">
                    <div class="box-body">

                        <table class="table" id="schedule">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Interest</th>
                                    <th scope="col">Principle</th>
                                    <th scope="col">Amount To Pay</th>
                                    <th scope="col">Out Principle</th>
                                    <th scope="col">Out Debt</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>


                    </div>
                </div>

            </div>
        </div>



    </section>
    <!-- /.content -->




</div>







@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(() => {
        let column=['No','Code','Price','Discount','Amount']
        let showDiff=[false,false,false,false,false];

        let contract = new customTable($('#contract'),column,showDiff);
        
        $('#book').change(function(){


            $(".schedule tbody").html('');
            $('.custom-datatable-body').html('');
            var text = $(this).val();
            var url = window.location.origin + "/system/getDetailBook/" + text;




            $.get(url,function(data, status){
                console.log(data);
                var date = new Date().toLocaleDateString();
                var deadline = new Date(data.book.deadline).toLocaleDateString();
                if(deadline < date){
                    renderMessage($('.show-message'),'error',['Deadline is already expired.']);
                    return;
                }
                if(data.book.status != "2"){
                    renderMessage($('.show-message'),'error',['Limit Amount not yet']);
                    return;
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

        let scheduleList=[];
        
        $("#submitContract").click(()=>{    


            let arrDataRow=(scheduleList.map(element => {
        
                return JSON.stringify(element);
            }));




            var master = {
                bookId : $('#book').val(),
                commission : $('#commission').val(),
                amount : $('#amount').val(),
                discount : $('#discount').val(),
                subtotal : $('#subtotal').val(),
                deposit : $('#deposit').val(),
                credit : $('#credit').val(),
                "scheduleList" : arrDataRow
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
                    $.modal.close();
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


        $("#btn-schedule").click((e)=>{
            e.preventDefault();
            $("#scheule-wrapper").modal();

            $("#amountSchedule").val($('#credit').val());
        });


       

        $("#getSchedule").click((e)=>{
            let amount = Number($('#credit').val());
            let rate= Number($('#rateSchedule').val())/100;
            let duration= Number($('#durationSchedule').val());
            let start= $('#startSchedule').val();

            //console.log(amount,rate,duration,start);


            let amountToPay = roundToTwo((rate*amount) / ( 1- ( Math.pow( (1+rate) , duration*-1 )) ),2);

            let dateStart = new Date(start);

            let oldOutDebt = roundToTwo(amountToPay * duration,2);

            let interest = roundToTwo(amount * rate);

            let principle = roundToTwo(amountToPay -interest);

            let outPrinciple =roundToTwo(amount - principle);
        
            console.log(amount,oldOutDebt);

            let newOutDebt=oldOutDebt-amountToPay;

            let oldOutPrinciple;

            scheduleList=[];

        

            let remainPrecisionPayment;

            for(let i = 1;i<=duration;i++){
                let schedule={};
                schedule['payDate']=formatDateYMD(dateStart);
                schedule['interest']=interest;
                schedule['principle']=principle;
                schedule['amountToPay']=amountToPay;
                schedule['outPrinciple']=outPrinciple;
                schedule['outDebt']=newOutDebt;
                //console.log(i,formatDateYMD(dateStart),interest,principle,amountToPay,outPrinciple,newOutDebt);
                
                scheduleList.push(schedule);
                

                dateStart.setMonth(dateStart.getMonth()+1);
                interest= roundToTwo(outPrinciple*rate,2);
                principle= roundToTwo(amountToPay -interest,2);
            
                outPrinciple = roundToTwo(outPrinciple-principle,2);
                newOutDebt=  roundToTwo((newOutDebt-amountToPay),2);
            }   


            // scheduleList[scheduleList.length-1]["outPrinciple"]=0;
            // scheduleList[scheduleList.length-1]["outDebt"]=0;
            //console.log(scheduleList);
        
            let rowSt='';

        
            scheduleList.forEach((value,index)=>{
                rowSt+=`<tr>`

                rowSt+=`<td>${index+1}</td>`
                
                

                for(column in value){
                    rowSt+=`<td>${value[column]}</td>`
                }
                rowSt+=`</tr>` 
            });

            $('#schedule tbody').html('');
            $('#schedule tbody').html(rowSt);
            
            // return;
        });
       






    });
</script>
@endsection