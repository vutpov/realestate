@extends('admin.master')

@section('page-header','Test')


@section('col','col-md-6')

@section('content')

<form action="/system/storeProperty" method="POST" id="test">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="alert show-message" style="display:none">

    </div>



    {{-- Amount --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Amount</label>
        <input type="text" class="form-control" name="amount" placeholder="Amount" id="amount" />
        <span class="help-block"></span>
    </div>

    {{-- Rate --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Rate</label>
        <input type="text" class="form-control" name="rate" placeholder="Rate" id="rate" />
        <span class="help-block"></span>
    </div>

    {{-- Druation --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Duration</label>
        <input type="text" class="form-control" name="duration" placeholder="Duration" id="duration" />
        <span class="help-block"></span>
    </div>

    {{-- Start --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Start</label>
        <input type="date" class="form-control" name="start" placeholder="start" id="start" />
        <span class="help-block"></span>
    </div>



    <button class="btn btn-primary pull-right" id="submitTest">Submit</button>















</form>






@endsection


@section('col-detail','col-md-12')

@section('detail-header','Test Detail')

@section('detail')
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

@endsection

@section('script')
<script>
    $('#submitTest').click((e)=>{
        e.preventDefault();
        let amount = Number($('#amount').val());
        let rate= Number($('#rate').val())/100;
        let duration= Number($('#duration').val());
        let start= $('#start').val();


       
        
        let monthlyInstallment = roundToTwo((rate*amount) / ( 1- ( Math.pow( (1+rate) , duration*-1 )) ),2);;

        let firstInstallment=0;

        let remainPrecision=0;

        if(monthlyInstallment % 1 > 0){
            firstInstallment = String(monthlyInstallment).split('.');
            console.log(firstInstallment);
            monthlyInstallment = Number(firstInstallment[0]);

            remainPrecision = roundToTwo(Number('0.'+firstInstallment[1]) * duration);

            firstInstallment =  roundToTwo(Number(monthlyInstallment) + remainPrecision);
        }else{
            firstInstallment=monthlyInstallment ;
        }


        let dateStart = new Date(start);

        let oldOutDebt = roundToTwo(monthlyInstallment*(duration-1) + firstInstallment);

        let interest =roundToTwo(amount * rate);

        

        let principle = roundToTwo(firstInstallment - interest);

        let outPrinciple =roundToTwo(amount - principle);
    
        //console.log(amount,oldOutDebt);

        let newOutDebt= roundToTwo(oldOutDebt-firstInstallment);

        let oldOutPrinciple;

        let scheduleList=[];

        let amountToPay=firstInstallment;
       
      
        for(let i = 1;i<=duration;i++){
            let schedule={};
            schedule['payDate']=formatDateYMD(dateStart);
            schedule['interest']=interest;
            schedule['principle']=principle;
            schedule['amountToPay']=amountToPay;
            schedule['outPrinciple']=outPrinciple;
            schedule['outDebt']=newOutDebt;
            // console.log(i,formatDateYMD(dateStart),interest,principle,amountToPay,outPrinciple,newOutDebt);
            
            scheduleList.push(schedule);
    
            dateStart.setMonth(dateStart.getMonth()+1);
            interest= roundToTwo(outPrinciple*rate,2);
            principle= roundToTwo(monthlyInstallment - interest,2);
            amountToPay = monthlyInstallment;
            outPrinciple = roundToTwo(outPrinciple-principle,2);
            newOutDebt=  roundToTwo((newOutDebt-amountToPay),2);
        }
        

        let lastSchedule=scheduleList[duration-1];

        if(lastSchedule['outPrinciple']!=0){
            lastSchedule['principle']=scheduleList[duration-2]['outPrinciple'];
            lastSchedule['interest']=roundToTwo(lastSchedule['amountToPay']-lastSchedule['principle']);
            lastSchedule['amountToPay']= lastSchedule['principle'] +  lastSchedule['interest'];
            lastSchedule['outPrinciple']= 0;
        }
        


        // scheduleList[scheduleList.length-1]["outPrinciple"]=0;
        // scheduleList[scheduleList.length-1]["outDebt"]=0;
        //console.log(tInterest);




        //prepare data to send

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
        
        return;


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