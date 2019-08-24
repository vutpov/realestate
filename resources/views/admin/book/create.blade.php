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
            <option data-price="{{$item->price}}" data-cost="{{$item->cost}}" data-code="{{$item->propertyCode}}"
                value="{{$item->propertyId}}">
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
            value="{{old('Amount')}}" disabled />


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


    <div class="form-group" style="display:inline-flex;">
        <button type="button" class="btn btn-primary" id="btn-addProperty">Add Property</button>
        <button type="button" class="btn btn-secondary" id="btn-cancel">Cancel</button>
    </div>



    {{-- Book Detail --}}

    <table class="table table-hover detail has-action" id="detail">




    </table>

    <input type="submit" class="btn btn-primary" />

</div>



@endsection


@section('script')
<script>
    $(document).ready(()=>{
        
        $('#propertySelect').val('').change();
        $('#costDetail').keyup(e=> e.preventDefault());

        $('#amountDetail').keyup(e => {
            e.preventDefault();
            console.log('ddd');
        });
            
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
            //console.log(message);
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

            //console.log(cost,price,discount,subtotal,message);

            showProfitable( $('.inform-profitable-wrapper'),profitableControl,message);
        };


       

        // console.log($('#propertySelect'));

        $('#propertySelect').on('select2:select', (e)=> {

            let price=$("#propertySelect").find(":selected").data("price");
            let cost=$("#propertySelect").find(":selected").data("cost");
            let discount=$("#propertySelect").find(":selected").data("discount");

            $('#costDetail').val(cost);
            $('#priceDetail').val(price);
            $('#discountDetail').val('0');
           


            checkProfitable();
        });

        


        //init datatable detail

        let column=['No','Code','Commission','Cost','Price','Discount','Amount','Action']
        let showDiff=[false,true,false,false,false,false,false,true];

        let detail = new customTable($('#detail'),column,showDiff);
        let arrPropertyCode=[];



        const checkPropertyExists=()=>{
            const selectProperty=String($('#propertySelect').find(":selected").data("code"));
            
           
            if($.inArray(selectProperty,arrPropertyCode)!=-1){
                renderMessage($('.show-message.detail'),'error',['Property Exists']); 
                
                return false; 
            }
           
            return true;
        };

        const validateDetail=(validateProperty)=>{
            let commission=Number($('#commissionDetail').val());

            const hasCommision= commission == 0;
            
            const selectProperty=$('#propertySelect').val();
          
            if(selectProperty==null){
                renderMessage($('.show-message.detail'),'error',['Property is Required']);
                return false; 
            }

            //console.log($.inArray(selectProperty,arrPropertyCode));

            

            return validateProperty;

        };



        
        const validatePropertyUpdate=(propertyCode)=>{
            
            const selectedPropertyCode=String($("#propertySelect").find(":selected").data("code"));

            let tempPropertyCode = arrPropertyCode;

            tempPropertyCode=tempPropertyCode.filter((temp)=>{
                //console.log(`temp:${temp}`,`propertyCode:${propertyCode}`);
                return temp!=propertyCode;
            });

            tempPropertyCode.push(selectedPropertyCode);

            //console.log(arrPropertyCode,tempPropertyCode);

            let count = $.grep(tempPropertyCode, function (elem) {
                return elem === selectedPropertyCode;
            }).length;

            
            //console.log(count);
            


            return count;
        }

        $('#btn-addProperty').click((e)=>{
            
            if($(e.target).text()==='Add Property'){

                if(validateDetail(checkPropertyExists())){
                    renderMessage($('.show-message.detail'),'success',['Added a new property']); 
                    arrPropertyCode.push(String($('#propertySelect').find(":selected").data("code")));

                    const count=$('#detail tr').length;

                    const propertyId = $('#propertySelect').val();

                    const propertyCode=$("#propertySelect").find(":selected").data("code");


                    const commission =$('#commissionDetail').val();

                    const cost=$('#costDetail').val();

                    const price=$('#priceDetail').val();

                    const discount=$('#discountDetail').val();

                    const amount=$('#amountDetail').val();



                    let btn=`<Button class="btn btn-primary detail-edit" alt=${propertyCode}>Edit</Button>
                        <Button class="btn btn-danger detail-delete" alt=${propertyCode}>Delete</Button>
                    `

                    detail.addRow([count,[propertyId,propertyCode],commission,cost,price,discount,amount,['edit',btn]]);



                } 
            }else if($(e.target).text()==='Update'){

                const propertyCode=$(e.target).data('code');

                if(validatePropertyUpdate(propertyCode)>=2){
                    renderMessage($('.show-message.detail'),'error',['Property Duplicated']);
                    return false;
                }
            }          
        });



        const handleCancel=(e)=>{
            $('#propertySelect').val('').change();


            const commission =$('#commissionDetail').val("0");

            const cost=$('#costDetail').val("");

            const price=$('#priceDetail').val("");

            const discount=$('#discountDetail').val("");

            const amount=$('#amountDetail').val("");

            $('#btn-addProperty').removeAttr('data-code');
            $('#btn-addProperty').html('Add Property');


            $(e.target).css('display','none');

            $('.inform-profitable-wrapper').css('display','none');

            $('.show-message').css('display','none');
        };


        $('#btn-cancel').click((e)=> handleCancel(e));

        $('#detail').click((e)=>{
            e.stopPropagation();
            if($(e.target).hasClass('detail-edit')){
                $('#btn-cancel').css('display','block');

                let propertyCode=$(e.target).attr('alt');
               
                $('#btn-addProperty').attr("data-code",propertyCode);
                $('#btn-addProperty').html("Update");

                

            }else if($(e.target).hasClass('detail-delete')){
                handleCancel(e); 
                $(e.target).parents('tr').remove();
            }
        });

    });

    

</script>
@endsection