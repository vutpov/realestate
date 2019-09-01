@extends('admin.master')

@section('page-header')
View schedule for contractId:<b>{{$customer->contractId}}</b>
<div class="pull-right">Customer:<b>{{$customer->name}}</b></div>
@endsection

@section('col','col-md-12')

@section('content')



<button type="button" class="btn btn-primary">Payment</button>




<div class="my-max-height">
    <table class="table check-table" id=" schedule">
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
        <tbody>

            @foreach ($schedule as $item)

            <tr>
                <td class="first-cell"><input type="checkbox" class="checkSchedule"></td>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->payDate}}</td>
                <td>{{$item->interest}}</td>
                <td>{{$item->principle}}</td>
                <td>{{$item->amountToPay}}</td>
                <td>{{$item->outPrinciple}}</td>
                <td>{{$item->outDebt}}</td>
                <td>{{$item->penalty}}</td>
                <td>0</td>
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

</div>








@endsection


@section('display-detail','display:none')


@section('script')
<script>
    $('#submitTest').click((e)=>{
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