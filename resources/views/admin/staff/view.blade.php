@extends('admin.master') @section('page-header','Profile')

@section('col','col-md-8')
@section('content')



<?php

    use App\Http\Helpers\Helper;

  
    $name = Helper::oldOrDB('name',$staff->name);
    


    $selectMale=$selectFemale='';

    if($staff->gender==='Male'){
        $selectMale='selected';
    }else{
        $selectFemale='selected';
    }

    $dob=(new DateTime($staff->dob))->format('m/d/Y');
    
    $address = Helper::oldOrDB('address',$staff->address);

    $phone = Helper::oldOrDB('phone',$staff->phone);

    $email = Helper::oldOrDB('email',$staff->email);

?>

<form action="" method="post" enctype="multipart/form-data">





    {{-- position --}}
    <!--Class = has-success, has-error!-->
    <div class="form-group">



        <label>Position</label>
        <select class="form-control" name="position">

            <?php

                foreach ($position as $p) {

                    $selected='';
                    if($p->positionId === $staff->positionId){
                        $selected='selected';                        
                    }

                    echo('<option '.$selected.' value='.$p->positionId.'>'.$p->position.'</option>');
                }    
            ?>

        </select>
    </div>



    {{-- name --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Name</label>
        <input type="text" class="form-control" id="inputSuccess" name="name" placeholder="Name" value="{{$name}}" />
        <span class="help-block"></span>
    </div>


    {{-- gender --}}
    <div class="form-group">
        <label>Gender</label>
        <select class="form-control" name="gender">
            <option value='Male' {{$selectMale}}>Male</option>
            <option value='Female' {{$selectFemale}}>Female</option>

        </select>
    </div>


    {{-- date_of_birth --}}
    <div class="form-group">
        <label>Date Of Birth:</label>

        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right datepicker" name="date_of_birth" value="{{$dob}}">
        </div>
        <!-- /.input group -->
    </div>




    {{-- address --}}
    <div class=" form-group">
        <label>Address</label>
        <textarea class="form-control" rows="3" placeholder="Address" name="address">{{$address}}</textarea>
    </div>


    {{-- phone --}}
    <div class=" form-group">
        <label class="control-label" for="inputSuccess">Phone</label>
        <input type="number" class="form-control" placeholder="Phone" name="phone" value="{{$phone}}" />
        <span class="help-block"></span>
    </div>



    {{-- email --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{$email}}" />
        <span class="help-block"></span>
    </div>

    {{-- profile --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Profile</label><br>
        <img src="{{asset("admin/dist/img/avatar.png")}}" alt="">
    </div>

    <button class="btn btn-danger pull-right">
        <a style="color:white;" href="/system/dashboard">Cancel</a>
    </button>

</form>








@endsection

@section('display-detail','display:none')