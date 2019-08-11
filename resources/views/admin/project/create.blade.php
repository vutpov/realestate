@extends('admin.master')

@section('page-header','Create New Project')


@section('col','col-md-6')






@section('content')






<form action="{{url('/system/storeProject')}}" method="POST" enctype="multipart/form-data">
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






    {{-- Type --}}


    <div class="form-group">



        <label>Type</label>
        <select class="form-control select2" name="partner">

            <?php
                foreach ($partner as $p) {
                    echo('<option value='.$p->partnerId.'>'.$p->partner.'</option>');
                }    
            ?>

        </select>
    </div>

    {{-- project --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Project</label>
        <input type="text" class="form-control" id="project" name="project" placeholder="Project"
            value="{{old('project')}}" />
        <span class="help-block"></span>
    </div>



</form>


@endsection


@section('col-detail','col-md-12')

@section('detail-header','Project Detail')


@section('detail')







<form action="" method="post" id="detail">
    <div class="form-group w-50">


        {{-- Type --}}

        <label>Type</label>
        <select class="form-control" name="type">

            <?php
                        foreach ($propertyType as $item) {
                            echo('<option value='.$item->propertyTypeId.'>'.$item->propertyType.'</option>');
                        }    
                    ?>

        </select>
    </div>




    {{-- project --}}
    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">Code</label>
        <input type="text" class="form-control text-validate" id="code" name="code" placeholder="Code"
            data-toggle="tooltip" data-placement="bottom" title="Please input 4 or more character"
            alt="Please input 4 or more character" />
        <span class="help-block"></span>
    </div>


    {{-- description --}}
    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">Description</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Description" />
        <span class="help-block"></span>
    </div>


    {{-- No --}}
    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">No</label>
        <input type="text" class="form-control text-validate" id="no" name="no" placeholder="No" data-toggle="tooltip"
            data-placement="bottom" title="Please input value" alt="Please input value" />
        <span class="help-block"></span>
    </div>


    {{-- St --}}
    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">ST</label>
        <input type="text" class="form-control text-validate" id="st" name="st" placeholder="St" data-toggle="tooltip"
            data-placement="bottom" title="Please input value" alt="Please input value" />
        <span class="help-block"></span>
    </div>



    {{-- Props Attribute --}}

    <div class="form-group w-50">
        <label>Type</label>
        <select class="form-control" name="Attribute" id="attribute">

            <?php
                        foreach ($propAttribute as $item) {
                            echo('<option value='.$item->propAttributeID.'>'.$item->propAttribute.'</option>');
                        }    
                    ?>

        </select>
    </div>




    {{--  Cost --}}

    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">Cost</label>
        <input type="number" class="form-control number-validate" id="cost" name="cost" placeholder="Cost"
            data-toggle="tooltip" data-placement="bottom" title="Please input value" alt="Please input value" />
        <span class="help-block"></span>
    </div>


    {{--  Price --}}

    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">Price</label>
        <input type="number" class="form-control number-validate" id="price" name="price" placeholder="Price"
            data-toggle="tooltip" data-placement="bottom" title="Please input value" alt="Please input value" />
        <span class="help-block"></span>
    </div>


    {{-- Free --}}
    <div class="form-group w-50">
        <label class="control-label" for="inputSuccess">Free</label>
        <input type="text" class="form-control" id="free" name="free" placeholder="Free" />
        <span class="help-block"></span>
    </div>



    {{-- Publish --}}
    <div class="form-group w-50">
        <label>Publish</label>
        <select class="form-control" name="publish" id="publish">
            <option value="0">Pending</option>
            <option value="1">Published</option>
        </select>
    </div>




    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="btnAdd" id="btnAdd">Add Property</button>
    </div>



</form>




{{-- Book Detail --}}





<div class="form-group">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Type</th>
                <th>Code</th>
                <th>Description</th>
                <th>No</th>
                <th>St</th>
                <th>Cost</th>
                <th>Price</th>
                <th>Free</th>
                <th>Status</th>
                <th>Publish</th>
            </tr>
        </thead>
        <tbody>


            {{-- @foreach ($user as $u)
                            <tr>
                                <td>{{$loop->iteration}}</td>
            <td>{{$u->username}}</td>
            <td>{{$u->name}}</td>
            <td>{{$u->role}}</td>
            <td>{{$u->status}}</td>
            <td><a href="{{url('/system/editUser')}}"><i class="fa fa-edit"></i></a>
                <a href="{{url('/system/editUser')}}"><i class="fa fa-trash"></i></a></td>
            </tr>
            @endforeach --}}


        </tbody>
    </table>
</div>

<input type="submit" class="btn btn-primary" />

@endsection