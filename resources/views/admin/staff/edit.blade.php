@extends('admin.master') @section('page-header','Create New Staff')

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

    $dob;

    if(old('date_of_birth') === null){
        $dob=(new DateTime($staff->dob))->format('m/d/Y');
    }else{
        $dob=old('date_of_birth');
    }
    
    $address = Helper::oldOrDB('address',$staff->address);

    $phone = Helper::oldOrDB('phone',$staff->phone);

    $email = Helper::oldOrDB('email',$staff->email);

?>

<form action="{{url('/system/updateStaff',$staff->staffId)}}" method="post" enctype="multipart/form-data">
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


    <?php
        $positionError=($errors->has('position'))?'has-error':'';
    ?>

    {{-- position --}}
    <!--Class = has-success, has-error!-->
    <div class="form-group {{$positionError}}">



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

    <?php
        $nameError=($errors->has('name'))?'has-error':'';
    ?>

    {{-- name --}}
    <div class="form-group {{$nameError}}">
        <label class="control-label" for="inputSuccess">Name</label>
        <input type="text" class="form-control" id="inputSuccess" name="name" placeholder="Name" value="{{$name}}" />
        <span class="help-block"></span>
    </div>

    <?php
        $genderError=($errors->has('gender'))?'has-error':'';
    ?>
    {{-- gender --}}
    <div class="form-group{{$genderError}}">
        <label>Gender</label>
        <select class="form-control" name="gender">
            <option value='Male' {{$selectMale}}>Male</option>
            <option value='Female' {{$selectFemale}}>Female</option>

        </select>
    </div>

    <?php
        $date_of_birthError=($errors->has('date_of_birth'))?'has-error':'';
    ?>
    {{-- date_of_birth --}}
    <div class="form-group {{$date_of_birthError}}">
        <label>Date Of Birth:</label>

        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control pull-right datepicker" name="date_of_birth" value="{{$dob}}">
        </div>
        <!-- /.input group -->
    </div>



    <?php
        $addressError=($errors->has('address'))?'has-error':'';
       
    ?>
    {{-- address --}}
    <div class=" form-group {{$addressError}}">
        <label>Address</label>
        <textarea class="form-control" rows="3" placeholder="Address" name="address">{{$address}}</textarea>
    </div>

    <?php
        $phoneError=($errors->has('phone'))?'has-error':'';
    ?>
    {{-- phone --}}
    <div class=" form-group {{$phoneError}}">
        <label class="control-label" for="inputSuccess">Phone</label>
        <input type="number" class="form-control" placeholder="Phone" name="phone" value="{{$phone}}" />
        <span class="help-block"></span>
    </div>


    <?php
        $emailError=($errors->has('email'))?'has-error':'';
    ?>
    {{-- email --}}
    <div class="form-group {{$emailError}}">
        <label class="control-label" for="inputSuccess">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{$email}}" />
        <span class="help-block"></span>
    </div>

    {{-- profile --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Profile</label>
        <input type="file" class="form-control" name="profile" />
        <span class="help-block"></span>
    </div>

    <input type="submit" class="btn btn-primary" />

</form>








@endsection

@section('display-detail','display:none')