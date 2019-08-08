@extends('admin.master') @section('page-header','Create New Staff')

@section('col','col-md-8')
@section('content')




<form action="{{url('/system/storeStaff')}}" method="post" enctype="multipart/form-data">
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
                    echo('<option value='.$p->positionId.'>'.$p->position.'</option>');
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
        <input type="text" class="form-control" id="inputSuccess" name="name" placeholder="Name"
            value="{{old('name')}}" />
        <span class="help-block"></span>
    </div>

    <?php
        $genderError=($errors->has('gender'))?'has-error':'';
    ?>
    {{-- gender --}}
    <div class="form-group{{$genderError}}">
        <label>Gender</label>
        <select class="form-control" name="gender">
            <option>Male</option>
            <option>Female</option>

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
            <input type="text" class="form-control pull-right datepicker" name="date_of_birth"
                value="{{old('date_of_birth')}}">
        </div>
        <!-- /.input group -->
    </div>



    <?php
        $addressError=($errors->has('address'))?'has-error':'';
       
    ?>
    {{-- address --}}
    <div class=" form-group {{$addressError}}">
        <label>Address</label>
        <textarea class="form-control" rows="3" placeholder="Address" name="address">{{old('address')}}</textarea>
    </div>

    <?php
        $phoneError=($errors->has('phone'))?'has-error':'';
    ?>
    {{-- phone --}}
    <div class=" form-group {{$phoneError}}">
        <label class="control-label" for="inputSuccess">Phone</label>
        <input type="number" class="form-control" placeholder="Phone" name="phone" value="{{old('phone')}}" />
        <span class="help-block"></span>
    </div>


    <?php
        $emailError=($errors->has('email'))?'has-error':'';
    ?>
    {{-- email --}}
    <div class="form-group {{$phoneError}}">
        <label class="control-label" for="inputSuccess">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}" />
        <span class="help-block"></span>
    </div>

    {{-- profile --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Profile</label>
        <input type="file" class="form-control" name="profile" />
        <span class="help-block"></span>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    <button class="btn btn-danger pull-right">
        <a style="color:white;" href="/system/staff">Cancel</a>
    </button>




</form>









@endsection

@section('display-detail','display:none')