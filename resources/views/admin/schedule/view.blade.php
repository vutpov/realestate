@extends('admin.master')

@section('page-header')
View schedule for contractId:<b>{{$customer->contractId}}</b>
<div class="pull-right">Customer:<b>{{$customer->name}}</b></div>
@endsection

@section('col','col-md-12')

@section('content')



<button type="button" class="btn btn-primary" id="btn-payment">Payment</button>



<div id="modal-wrapper" class="modal">



    <!-- Detail content -->
    <section class="content container-fluid schedule">
        <div class="row">


            <div class="col-md-12">

                <h4>
                    Invoice
                </h4>

                <div class="box box-primary">
                    <div class="box-body">

                        @include('admin.invoice.installment')


                    </div>
                </div>

            </div>
        </div>



    </section>
    <!-- /.content -->



</div>



<table class="table check-table" id="schedule">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">#</th>
            <th scope="col">Pay Date</th>
            <th scope="col">Interest</th>
            <th scope="col">Principle</th>
            <th scope="col">Amount To Pay</th>
            <th scope="col">Out Principle</th>
            <th scope="col">Out Debt</th>
            <th scope="col">Penalty</th>
            <th scope="col">Total</th>
            <th scope="col">Status</th>
        </tr>
    </thead>

    <div class="my-max-height"></div>
    <tbody>

        @foreach ($schedule as $item)

        <tr>
            <td class="first-cell"><input type="checkbox" class="checkSchedule"
                    data-check="{{$item->scheduleInstallId}}"></td>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->payDate}}</td>
            <td>{{$item->interest}}</td>
            <td>{{$item->principle}}</td>
            <td>{{$item->amountToPay}}</td>
            <td>{{$item->outPrinciple}}</td>
            <td>{{$item->outDebt}}</td>
            <td>{{$item->penalty}}</td>
            <td>{{$item->total}}</td>
            <td>
                @if($item->status==1)
                Pending
                @else
                Done
                @endif
            </td>
        </tr>
        @endforeach


    </tbody>
</table>










@endsection


@section('display-detail','display:none')


@section('script')
<script>
    var amountToPay;

    $("#btn-payment").click((e)=>{
        e.preventDefault();
       

        $("#invoice-code").html(generateRandom());

        $("#date").html(formatCurrentDate());

        getDataSceduleTopayment();
    });


    
    const getDataSceduleTopayment=()=>{
        let selectedRow= $("#schedule input:checked").parents('tr').toArray();
        
        if(selectedRow.length==0){
            alert("Please select at least a row to pay");
            return;
        }
        var dataRow=[];
        $("#modal-wrapper").modal();

        for(let i=0;i<selectedRow.length;i++){
            let col=$(selectedRow[i]).children().toArray();
            


            let discountHtml=document.createElement('td');
            
            
            $('<input/>').attr({type:'number',class:'discount-detail',value:'0'}).appendTo(discountHtml);
            
            let temp=col;
            col=col.slice(2,6);
           
            col=col.concat($(temp[8]).toArray());
            
            col.push(discountHtml);

            col=col.concat($(temp[9]).toArray());
            dataRow.push(col);
        }

        
    
      


        $('#installment-detail').html("");

        let j=1;
        for(let i=dataRow.length-1;i>=0;i--){
            let stRow='';
        
            dataRow[i].forEach((col,index)=>{
                stRow+=col.outerHTML;
            });
            stRow=`<tr><td>${j}</td>${stRow}</tr>`;
        
            $('#installment-detail').append(stRow);
            j++;
        }


        let summeryValue={};
        summeryValue["interest"]=0;
        summeryValue["priciple"]=0;
        summeryValue["subTotal"]=0;
        summeryValue["penalty"]=0;
        summeryValue["total"]=0;
       
        for(i=0;i<dataRow.length;i++){
            summeryValue["interest"]+=Number(dataRow[i][1].innerText);
            summeryValue["priciple"]+=Number(dataRow[i][2].innerText);
            summeryValue["subTotal"]+=Number(dataRow[i][3].innerText);
            summeryValue["penalty"]+=Number(dataRow[i][4].innerText);
            summeryValue["total"]+=Number(dataRow[i][6].innerText);
        }

        amountToPay=roundToTwo(summeryValue["total"]);

        for(key in summeryValue){
            summeryValue[key]=roundToTwo(summeryValue[key]);
        }
        
       
        
       
        $("#install-interest").html(summeryValue["interest"]);
        $("#install-principle").html(summeryValue["priciple"]);
        $("#install-subTotal").html(summeryValue["subTotal"]);
        $("#install-penalty").html(summeryValue["penalty"]);
        $("#install-total").html(summeryValue["total"]);

        
    }


    $('#installment-detail').keyup(e=>{
        if(e.target.classList=='discount-detail'){
            changeItemDiscount();

            getResultSummary();
        }
    });


    const getResultSummary=()=>{
       
        let itemDiscount=$('#install-item-discount').html();
        let invoiceDiscount=$('#install-invoice-discount').val();
        let totalDiscount = roundToTwo(Number(itemDiscount) + Number(invoiceDiscount));
        let total = roundToTwo(amountToPay - totalDiscount);
        
        console.log(`itemDiscout ${itemDiscount}`, `invoiceDiscount ${invoiceDiscount}`);
        console.log($('#install-invoice-discount'));
 
        $('#install-total-discount').html(totalDiscount);
        $('#install-total').html(total);
        
    };


    $('#install-invoice-discount').keyup(e=>{
       
        getResultSummary();
    });

    const changeItemDiscount=()=>{
        let dicountField=document.querySelectorAll(".discount-detail");
        dicountField=Array.from(dicountField);
        
        

        let totalItemDiscount=0;
        dicountField.forEach(field=>{
            totalItemDiscount+=Number($(field).val());
            //console.log(totalItemDiscount);
        });

        totalItemDiscount=roundToTwo(totalItemDiscount);
        
        $('#install-item-discount').html(totalItemDiscount);
       
    }






    $('#btn-submitPayment').click((e)=>{
        e.preventDefault();
        let amount = Number($('#amount').val());
        let rate= Number($('#rate').val())/100;
        let duration= Number($('#duration').val());
        let start= $('#start').val();

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

        let scheduleList=[];

       

        let remainPrecisionPayment;

        for(let i = 1;i<=duration;i++){
            let schedule={};
            schedule['dateStart']=formatDateYMD(dateStart);
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


        scheduleList[scheduleList.length-1]["outPrinciple"]=0;
        scheduleList[scheduleList.length-1]["outDebt"]=0;
        console.log(scheduleList);

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


        let arrDataRow=(scheduleList.map(element => {
      
            return JSON.stringify(element);
        }));

        let jsonData = {
            "scheduleList" : arrDataRow
        };



        $.ajax({      

            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "{{route('storeSchedule')}}",
            dataType: 'json',
            contentType:'application/json',
            data: JSON.stringify(jsonData),
            success: response =>{
               
                console.log(response);
                
               
            },
            error: response=>{
                console.log(response.responseJSON);

            },
            complete: response=>{
                console.log(response);
            },
            
        });

    });



</script>
@endsection