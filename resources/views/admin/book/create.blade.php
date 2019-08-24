@extends('admin.master')

@section('page-header','Create New Booking')


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


    {{-- Customer --}}
    <div class="form-group">
        <label>Customer</label>
        <select class="form-control select2" name="cutomer">
            @foreach ($customer as $item)
            <option value="{{$item->customerId}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>


    {{-- Agency --}}
    <div class="form-group">
        <label>Agency</label>
        <select class="form-control select2" name="agency">
            @foreach ($agency as $item)
            <option value="{{$item->agencyId}}">{{$item->agency}}</option>
            @endforeach

        </select>
    </div>









    {{-- Limit Amount --}}
    <div class="form-group">
        <label class="control-label" for="commission">Limit Amount</label><!-- Default checked -->


        <div class="input-group">
            <input type="number" value="20" class="form-control" name="limitAmount" placeholder="Limit Amount" disabled>
            <span class="input-group-addon-end">%</span>
        </div>





        <span class="help-block"></span>
    </div>




    {{-- date_of_birth --}}
    <div class="form-group">
        <label>Deadline:</label>

        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right datepicker" name="deadline" value="{{old('deadline')}}">
        </div>
        <!-- /.input group -->
    </div>



    {{-- Amount --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Amount</label>
        <input type="number" class="form-control" name="amount" placeholder="Amount" value="" disabled />
        <span class="help-block"></span>
    </div>



    {{-- Total Discount --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Total Discount</label>
        <input type="number" class="form-control" name="totalDiscount" placeholder="Total Discount"
            value="{{old('commission')}}" disabled />
        <span class="help-block"></span>
    </div>





    {{-- SubTotal --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Subtotal</label>
        <input type="number" class="form-control" name="subtotal" placeholder="Subtotal" value="{{old('subtotal')}}"
            disabled />
        <span class="help-block"></span>
    </div>



    {{-- Deposit --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Deposit</label>
        <input type="number" class="form-control" name="deposit" placeholder="Deposit" value="{{old('deposit')}}" />
        <span class="help-block"></span>
    </div>


    {{-- Credit --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Credit</label>
        <input type="number" class="form-control" name="credit" placeholder="Credit" value="{{old('credit')}}" />
        <span class="help-block"></span>
    </div>


</form>


@endsection



@section('col-detail','col-md-12')


@section('detail-header','Book Detail')


@section('detail')


<div class="book-detail">
    <div class="alert show-message detail" style="display:none">

    </div>



    {{-- Property --}}
    <div class="form-group">
        <label>Property</label>
        <select class="form-control select2 " id="propertySelect" name="property">
            @foreach ($property as $item)
            <option data-price="{{$item->price}}" data-cost="{{$item->cost}}" value="{{$item->propertyId}}">
                {{$item->propertyCode}}</option>
            @endforeach
        </select>
    </div>

    {{-- Commission --}}

    <div class="form-group">
        <label class="control-label" for="commission">Commission</label>
        <input type="number" class="form-control" name="commission" id="commissionDetail" placeholder="Commission"
            value="0" />
        <span class="help-block"></span>
    </div>


    {{--  Cost --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Cost</label>
        <input type="number" class="form-control" id="costDetail" name="costDetail" placeholder="Cost" disabled
            value="{{old('Cost')}}" />
        <span class="help-block"></span>
    </div>



    {{--  Price --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Price</label>
        <input type="number" data-toggle="tooltip" class="form-control my-toggle-bottom" id="priceDetail"
            name="priceDetail" placeholder="Price" value="{{old('Price')}}" />
        <span class="help-block"></span>
    </div>

    {{--  Discount --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess">Discount</label>
        <input type="number" data-toggle="tooltip" class="form-control my-toggle-bottom" id="discountDetail"
            name="discount" placeholder="Discount" value="{{old('Discount')}}" />

    </div>


    {{--  Amount --}}

    <div class="form-group">
        <label class="control-label" for="inputSuccess"> Amount</label>
        <input type="number" class="form-control" id="amountDetail" name="amount" placeholder="Amount"
            value="{{old('Amount')}}" />


        <div class="inform-profitable-wrapper">

            <label class="control-label gain green-color" for="inputSuccess">
                <i class="fas fa-check"></i>
                <span class="display-profitable"></span>
            </label>

            <label class="control-label loss red-color" for="inputError">
                <i class="fas fa-times"></i>
                <span class="display-profitable"></span>
            </label>

        </div>


    </div>


    <div class="form-group">
        <button type="button" class="btn btn-primary" id="btn-addProperty">Add Property</button>
    </div>



    {{-- Book Detail --}}

    <table class="table table-hover" id="detail">




    </table>

    <input type="submit" class="btn btn-primary" />

</div>



@endsection


@section('script')
<script>
    $(document).ready(()=>{
        

        $('#costDetail').keyup(e=> e.preventDefault());
            
        $('#priceDetail').keyup(e=>{
            checkProfitable();
        });

            
        $('#discountDetail').keyup(e=>{
            checkProfitable();
        });

        const showProfitable = (profitableWrapper,profitableControl, message) => {
            if(message===''){
                $(profitableWrapper).css('display','none');
                return;
            }

            message+=" $";
            
            
            let profitableDisplay=`${profitableControl} .display-profitable`;
            console.log(message);
            $(profitableWrapper).css('display','block');
            $(profitableControl).css('display','block');
            $(profitableDisplay).html(message);
            $(profitableControl).siblings().css('display','none');



            

        };

        const checkProfitable=()=>{
            
            let price = Number($('#priceDetail').val());
            let cost = Number($('#costDetail').val());
            let discount = Number($('#discountDetail').val());
            
            let subtotal=price-discount;


            let absMoney=Math.abs(cost-subtotal);

            let profitableControl;

            let message='';

            if(cost>subtotal){
                profitableControl='.loss';
                message=`Loss : ${absMoney}`;
            }else if(cost<subtotal){
                profitableControl='.gain';
                message=`Gain : ${absMoney}`;
            }else{
                profitableControl=message='';
            }

            $('#amountDetail').val(subtotal);

            console.log(cost,price,discount,subtotal,message);

            showProfitable( $('.inform-profitable-wrapper'),profitableControl,message);
        };


        $('#propertySelect').val('').change();

        // console.log($('#propertySelect'));

        $('#propertySelect').on('select2:select', (e)=> {

            let price=$("#propertySelect").find(":selected").data("price");
            let cost=$("#propertySelect").find(":selected").data("cost");
            let discount=$("#propertySelect").find(":selected").data("cost");

            $('#costDetail').val(cost);
            $('#priceDetail').val(price);
            $('#discountDetail').val('0');
           


            checkProfitable();
        });

        


        //init datatable detail

        let column=['No','Property','Commission','Cost','Price','Discount','Amount','Action']
        let showDiff=[false,true,false,false,false,false,false,false];

        let detail = new customTable($('#detail'),column,showDiff);



        const validateDetail=()=>{
            let commission=Number($('#commissionDetail').val());

            const hasCommision= commission == 0;
            
            const selectProperty=$('#propertySelect').val();
          
            if(selectProperty==null){
                
            }
            
            
            return true;
            

        };


        $('#btn-addProperty').click(()=>{
            
            if(validateDetail()){

            }
        });
        

    });

    

</script>
@endsection