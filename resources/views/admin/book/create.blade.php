@extends('admin.master')

@section('page-header','Create New Booking')


@section('col','col-md-6')
@section('content')



<form id="form-submit-book" method="POST" enctype="multipart/form-data">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="alert show-message master" style="display:none">

    </div>



    {{-- Customer --}}
    <div class="form-group">
        <label>Customer</label>
        <select class="form-control select2" name="customer" id="customerSelect">
            @foreach ($customer as $item)
            <option value="{{$item->customerId}}">{{$item->name}}</option>
            @endforeach
        </select>
    </div>


    {{-- Agency --}}
    <div class="form-group">
        <label>Agency</label>
        <select class="form-control select2" name="agency" id="agencySelect">
            @foreach ($agency as $item)
            <option value="{{$item->agencyId}}">{{$item->agency}}</option>
            @endforeach

        </select>
    </div>





    {{-- date_of_birth --}}
    <div class="form-group">
        <label>Deadline:</label>

        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right datepicker" name="deadline" id="deadLineDatePicker">
        </div>
        <!-- /.input group -->
    </div>

    {{-- <Button id="btnTest">Test</Button> --}}





</form>


@endsection



@section('col-detail','col-md-12')


@section('detail-header','Book Detail')


@section('detail')


<div class="book-detail">

    <div class="row">

        <div class="col-md-6">
            <div class="alert show-message detail" style="display:none">

            </div>



            {{-- Property --}}
            <div class="form-group">
                <label>Property</label>


                <select class="form-control select2 " id="propertySelect" name="property">
                    @foreach ($property as $item)
                    <option data-price="{{$item->price}}" data-cost="{{$item->cost}}"
                        data-code="{{$item->propertyCode}}" value="{{$item->propertyId}}">
                        {{$item->propertyCode}}</option>
                    @endforeach
                </select>



            </div>


            {{-- Commission --}}

            <div class="form-group">
                <label class="control-label" for="commission">Commission</label>
                <input type="number" class="form-control" name="commission" id="commissionDetail"
                    placeholder="Commission" value="0" />
                <span class="help-block"></span>
            </div>


            {{--  Cost --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Cost</label>
                <input type="number" class="form-control" id="costDetail" name="costDetail" placeholder="Cost" disabled
                    value="0" />
                <span class="help-block"></span>
            </div>



            {{--  Price --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Price</label>
                <input type="number" data-toggle="tooltip" class="form-control my-toggle-bottom" id="priceDetail"
                    name="priceDetail" placeholder="Price" value="0" />
                <span class="help-block"></span>
            </div>

            {{--  Discount --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Discount</label>
                <input type="number" data-toggle="tooltip" class="form-control my-toggle-bottom" id="discountDetail"
                    name="discount" placeholder="Discount" value="0" />

            </div>


            {{--  Amount --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess"> Amount</label>
                <input type="number" class="form-control" id="amountDetail" name="amount" placeholder="Amount" value="0"
                    disabled />


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


            <div class="form-group" style="">
                <button type="button" class="btn btn-primary" id="btn-addProperty">Add Property</button>
                <button type="button" class="btn btn-secondary" id="btn-cancel">Cancel</button>
                <button type="submit" class="btn btn-primary pull-right" id="btn-Submit">Submit</button>

            </div>

        </div>


        <div class="col-md-6">
            {{-- Limit Amount --}}
            <div class="form-group">
                <label class="control-label" for="commission">Limit Amount</label><!-- Default checked -->


                <div class="input-group">
                    <input type="number" value="20" class="form-control" name="limitAmount" id="limitAmount"
                        placeholder="Limit Amount" disabled>
                    <span class="input-group-addon-end">%</span>
                </div>

                <span class="help-block"></span>

                <div class="input-group" style="margin-top:20px">
                    <input type="number" value="0" class="form-control" name="limitMoney" id="limitMoney"
                        placeholder="Limit Amount" disabled>
                    <span class="input-group-addon-end">$</span>
                </div>

                <span class="help-block"></span>
            </div>

            {{-- Commission --}}

            <div class="form-group">
                <label class="control-label" for="commission">Commission</label>
                <input type="number" class="form-control" name="commission" id="commissionMaster"
                    placeholder="Commission" value="0" />
                <span class="help-block"></span>
            </div>


            {{-- Amount --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Amount</label>
                <input type="number" class="form-control" name="amount" placeholder="Amount" id="amountMaster" value="0"
                    disabled />
                <span class="help-block"></span>
            </div>



            {{-- Total Discount --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Total Discount</label>
                <input type="number" class="form-control" name="totalDiscount" id="discountMaster"
                    placeholder="Total Discount" value="0" />
                <span class="help-block"></span>
            </div>





            {{-- SubTotal --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Subtotal</label>
                <input type="number" class="form-control" name="subtotal" placeholder="Subtotal" id="subtotalMaster"
                    value="0" disabled />
                <span class="help-block"></span>
            </div>



            {{-- Deposit --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Deposit</label>
                <input type="number" class="form-control" name="deposit" placeholder="Deposit" id="depositMaster"
                    value="0" />
                <span class="help-block"></span>
            </div>


            {{-- Credit --}}

            <div class="form-group">
                <label class="control-label" for="inputSuccess">Credit</label>
                <input type="number" class="form-control" name="credit" placeholder="Credit" id="creditMaster" value="0"
                    disabled />
                <span class="help-block"></span>
            </div>


        </div>

    </div>






    {{-- Book Detail --}}

    <table class="table table-hover detail has-action" id="detail">




    </table>



</div>



@endsection

{{-- JAVASCRIPT --}}
@section('script')
<script>
    $(document).ready(()=>{
        
        $('#propertySelect').val('').change();
        $('#costDetail').keyup(e=> e.preventDefault());

        $('#amountDetail').keyup(e => {
            e.preventDefault();
            //console.log('ddd');
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

            handleChangeSelect();
        });




        

        
        const handleChangeSelect=()=>{
            let price=$("#propertySelect").find(":selected").data("price");
            let cost=$("#propertySelect").find(":selected").data("cost");
            let discount=$("#propertySelect").find(":selected").data("discount");

            $('#costDetail').val(cost);
            $('#priceDetail').val(price);
            $('#discountDetail').val('0');
           
            checkProfitable();
        };


        //init datatable detail

        let column=['No','Id','Code','Commission','Cost','Price','Discount','Amount','Action']
        let showDiff=[false,false,false,false,false,false,false,false,true];

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

            tempPropertyCode=tempPropertyCode.filter(item=>{
                //console.log(item,propertyCode);
                return item!=propertyCode;

            })

            tempPropertyCode.push(selectedPropertyCode);

            //console.log('arr',arrPropertyCode,'temp',tempPropertyCode);

            let count = $.grep(tempPropertyCode, function (elem) {
                return elem === selectedPropertyCode;
            }).length;

            
            //console.log(tempPropertyCode);
            


            return count;
        }


        /* master*/
        var totalMaster=0;
        var subTotalMaster=0;
        var commissionMaster=0;
        const changeLimitAmount=()=>{
            let limitAmount=Number($('#limitAmount').val())/100;
            let limitMoney=totalMaster*limitAmount;
            $('#limitMoney').val(limitMoney);
        }

        const changeCommissionMaster=(oldAmount,newAmount)=>{
            commissionMaster=commissionMaster-Number(oldAmount)+Number(newAmount);
            $('#commissionMaster').val(commissionMaster);
        }

        const changeTotalMaster=(oldAmount,newAmount)=>{
            totalMaster=totalMaster-Number(oldAmount)+Number(newAmount);
            $('#amountMaster').val(totalMaster);
        }

        const changeSubTotalMaster=()=>{
            let discountMaster=$('#discountMaster').val();
            subTotalMaster=totalMaster-discountMaster;
            //console.log(subTotalMaster);
            $('#subtotalMaster').val(subTotalMaster);
        }

        const changeCreditMaster=()=>{
            let credit=subTotalMaster-(Number($('#depositMaster').val()));
            $('#creditMaster').val(credit);
        };


        $('#depositMaster').keyup(()=>{
            changeCreditMaster();
        });

        $('#discountMaster').keyup(()=>{
            changeSubTotalMaster();
            changeCreditMaster();
        });

        const changeMaster=()=>{

            //for reference

            // changeTotalMaster(0,amount);
            //changeCommissionMaster(0,commission);
            // changeSubTotalMaster();
            // changeLimitAmount();
            // changeCreditMaster();
            
        };



        /* end of master*/


        $('#btn-addProperty').click((e)=>{
            
            if($(e.target).text()==='Add Property'){

                if(validateDetail(checkPropertyExists())){
                    renderMessage($('.show-message.detail'),'success',['Added a new property']); 
                    arrPropertyCode.push(String($('#propertySelect').find(":selected").data("code")));

                    const count=$('#detail tr').length;

                    const propertyId=$("#propertySelect").val();
                    console.log(propertyId);

                    const propertyCode=$("#propertySelect").find(":selected").data("code");
                    console.log(propertyCode);

                    const commission =Number($('#commissionDetail').val());

                    const cost=Number($('#costDetail').val());

                    const price=Number($('#priceDetail').val());

                    const discount=Number($('#discountDetail').val());

                    const amount=Number($('#amountDetail').val());



                    // let btn=`<Button class="btn btn-primary detail-edit">Edit</Button>
                    //     <Button class="btn btn-danger detail-delete">Delete</Button>
                    // `

                    let btn=`
                        <Button class="btn btn-danger detail-delete">Delete</Button>
                    `

                    detail.addRow(propertyId,[count,propertyId,propertyCode,commission,cost,price,discount,amount,['edit',btn]]);

                    changeTotalMaster(0,amount);
                    changeCommissionMaster(0,commission);
                    changeSubTotalMaster();
                    changeLimitAmount();
                    changeCreditMaster();

                } 
            }else if($(e.target).text()==='Update'){

                let propertyCode=$(e.target).data('code');
                let amount=$(e.target).data('amount');
                let commission=$(e.target).data('commission');
                //console.log(propertyCode);
                if(validatePropertyUpdate(propertyCode)>=2){
                    renderMessage($('.show-message.detail'),'error',['Property Duplicated']);
                    return ;
                }

                
                

                const propertyId = $('#propertySelect').val()+"";

                let newPropertyCode=$("#propertySelect").find(":selected").data("code")+"";


                const newCommission =Number($('#commissionDetail').val())+"";

                const cost=Number($('#costDetail').val())+"";

                const price=Number($('#priceDetail').val())+"";

                const discount=Number($('#discountDetail').val())+"";

                const newAmount=Number($('#amountDetail').val())+"";


                //setValue(row,col,...value)

                const selectedRowIndex=$(e.target).data('index');
               

                arrPropertyCode=arrPropertyCode.filter((item)=>{
                    return item!=propertyCode;
                });

                arrPropertyCode.push(newPropertyCode+"");
                console.log(arrPropertyCode);

                detail.setValue(selectedRowIndex,1,propertyId);
                detail.setValue(selectedRowIndex,2,newPropertyCode);
                detail.setValue(selectedRowIndex,3,newCommission);
                detail.setValue(selectedRowIndex,4,cost);
                detail.setValue(selectedRowIndex,5,price);
                detail.setValue(selectedRowIndex,6,discount);
                detail.setValue(selectedRowIndex,7,newAmount);

                handleCancel('none');

                console.log(commission,newCommission);

                changeTotalMaster(amount,newAmount);
                changeCommissionMaster(commission,newCommission);
                changeSubTotalMaster();
                changeLimitAmount();
                changeCreditMaster();

                renderMessage($('.show-message.detail'),'success',['Updated Success']);
            }          
        });

      

        const handleCancel=(e)=>{
            $('#propertySelect').val('').change();

            selectedRowNum=-1;
            const commission =$('#commissionDetail').val("0");

            const cost=$('#costDetail').val("");

            const price=$('#priceDetail').val("");

            const discount=$('#discountDetail').val("");

            const amount=$('#amountDetail').val("");

            $('#btn-addProperty').html('Add Property');


            $(e.target).css('display','none');

            $('.inform-profitable-wrapper').css('display','none');

            $('.show-message').css('display','none');

            $('#btn-cancel').css('display','none');
            clearBtnAddData('#btn-addProperty','no');
            clearBtnAddData('#btn-addProperty','code');
            clearBtnAddData('#btn-addProperty','index');
            clearBtnAddData('#btn-addProperty','amount');
        };
        

        $('#btn-cancel').click((e)=> handleCancel(e));

        $('#detail').click((e)=>{
            e.stopPropagation();
            let oldAmount=Number($(e.target).parents('tr').attr('data-amount'));
            let oldCommssion=Number($(e.target).parents('tr').attr('data-commission'));
            let propertyCode=$(e.target).parents('tr').attr('data-code');

            //console.log(propertyCode);
            if($(e.target).hasClass('detail-edit')){
                $('#btn-cancel').css('display','initial');

                selectedRowNum=$(e.target).parents('tr').index();
               
                

                //console.log(selectedRowNum);
                clearBtnAddData('#btn-addProperty','index');
                clearBtnAddData('#btn-addProperty','no');
                clearBtnAddData('#btn-addProperty','code');
                clearBtnAddData('#btn-addProperty','amount');
                clearBtnAddData('#btn-addProperty','commission');
            
                $('#btn-addProperty').attr("data-code",propertyCode);
                $('#btn-addProperty').attr("data-index",selectedRowNum);
                $('#btn-addProperty').attr("data-amount",oldAmount);
                $('#btn-addProperty').attr("data-commission",oldCommssion);
               
                $('#btn-addProperty').html("Update");

                let propertyId=$(e.target).parents('tr').attr('alt');
                $('#btn-addProperty').attr('alt',propertyId);
                //console.log(propertyCode);
                
                $('#commissionDetail').val($(e.target).parents('tr').data('commission'));
                
                $('#propertySelect').val(propertyId).trigger('change');
            
                
                handleChangeSelect();

            }else if($(e.target).hasClass('detail-delete')){
                handleCancel(e);
                //console.log(propertyCode);
                arrPropertyCode=arrPropertyCode.filter((element)=>{
                    return element!=propertyCode;
                })

                

                changeTotalMaster(oldAmount,0);
                changeCommissionMaster(oldCommssion,0);
                changeSubTotalMaster();
                changeLimitAmount();
                changeCreditMaster();
                


                //console.log(arrPropertyCode);

                $(e.target).parents('tr').remove();

                detail.resetTableIncrement();
                

            }
        });




        /*send request*/
        
        $("#btn-Submit").click(()=>{
            /*working js*/
            
            if(Number($('#subtotalMaster').val())<=0){

                renderMessage($(".show-message.detail"),"error","Please make sure subtotal is greater than 0");
                return;
            }

            let arrDataRow=(detail.getAllValue()).map(element => {
                
                return JSON.stringify(element);
            });
            

           
            var master = {
                deadline : $('#deadLineDatePicker').val(),
                customer : $('#customerSelect').val(),
                agency : $('#agencySelect').val(),
                limitAmount :  $('#limitAmount').val(),
                limitMoney :  $('#limitMoney').val(),
                commission : $('#commissionMaster').val(),
                amount : $('#amountMaster').val(),
                discount : $('#discountMaster').val(),
                subTotal : $('#subtotalMaster').val(),
                deposit : $('#depositMaster').val(),
                credit : $('#creditMaster').val(),
                detail : arrDataRow,
            };

            


            
            $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "{{route('storeBook')}}",
            dataType: 'json',
            contentType:'application/json',
            data: JSON.stringify(master),
            success: response =>{
               
               
                $("#propertyId").val(response.propertyId)
                console.log(response);
                renderMessage($('.show-message.master'),'success', response.message);
                location.reload();
            },
            error: response=>{
                console.log(response.responseJSON);

               

                renderMessage($('.show-message.master'),'error', response.responseJSON.message);
                

            },
            complete: response=>{
                console.log(response);
            },
            
            });
        });

        /*end of send request*/

    });

    

</script>
@endsection