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



        <label>Partner</label>
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




<!-- Modal HTML embedded directly into document -->
<div id="ex1" class="modal">
    <form action="" method="post" id="detail">
        <div class="form-group">


            {{-- Type --}}

            <label>Type</label>
            <select class="form-control" name="type" id="propertyType">

                <?php
                    foreach ($propertyType as $item) {
                        echo('<option value='.$item->propertyTypeId.'>'.$item->propertyType.'</option>');
                    }    
                ?>

            </select>
        </div>




        {{-- project --}}
        <div class="form-group">
            <label class="control-label" for="inputSuccess">Code</label>
            <input type="text" class="form-control text-validate" id="code" name="code" placeholder="Code"
                data-toggle="tooltip" data-placement="bottom" title="Please input 4 or more character"
                alt="Please input 4 or more character" />
            <span class="help-block"></span>
        </div>


        {{-- description --}}
        <div class="form-group ">
            <label class="control-label" for="inputSuccess">Description</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Description" />
            <span class="help-block"></span>
        </div>


        {{-- No --}}
        <div class="form-group">
            <label class="control-label" for="inputSuccess">No</label>
            <input type="text" class="form-control text-validate" id="no" name="no" placeholder="No"
                data-toggle="tooltip" data-placement="bottom" title="Please input value" alt="Please input value" />
            <span class="help-block"></span>
        </div>


        {{-- St --}}
        <div class="form-group">
            <label class="control-label" for="inputSuccess">ST</label>
            <input type="text" class="form-control text-validate" id="st" name="st" placeholder="St"
                data-toggle="tooltip" data-placement="bottom" title="Please input value" alt="Please input value" />
            <span class="help-block"></span>
        </div>



        {{-- Props Attribute --}}

        <div class="form-group">
            <label class="control-label" for="inputSuccess">Property Attribute</label>
            <select class="form-control select2" name="Attribute" id="attribute">

                <?php
                    foreach ($propAttribute as $item) {
                        echo('<option value='.$item->propAttributeID.'>'.$item->propAttribute.'</option>');
                    }    
                ?>

            </select>
        </div>




        {{--  Cost --}}

        <div class="form-group">
            <label class="control-label" for="inputSuccess">Cost</label>
            <input type="number" class="form-control number-validate" id="cost" name="cost" placeholder="Cost"
                data-toggle="tooltip" data-placement="bottom" title="Please input value" alt="Please input value" />
            <span class="help-block"></span>
        </div>


        {{--  Price --}}

        <div class="form-group">
            <label class="control-label" for="inputSuccess">Price</label>
            <input type="number" class="form-control number-validate" id="price" name="price" placeholder="Price"
                data-toggle="tooltip" data-placement="bottom" title="Please input value" alt="Please input value" />
            <span class="help-block"></span>
        </div>


        {{-- Free --}}
        <div class="form-group">
            <label class="control-label" for="inputSuccess">Free</label>
            <input type="text" class="form-control" id="free" name="free" placeholder="Free" />
            <span class="help-block"></span>
        </div>



        {{-- Publish --}}
        <div class="form-group">
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

</div>


<!-- Link to open the modal -->
<p><a href="#ex1" class="btn btn-primary" rel="modal:open">Add Property</a></p>











{{-- Book Detail --}}



<div class="callout callout-info summary">

    <div>Count: <span id="tCount">0</span></div>
    <div>Cost: <span id="tCost">0</span></div>
    <div>Price: <span id="tPrice">0</span></div>
</div>




<div class="form-group">
    <table class="table table-hover" id="table-project-detail">
        <thead>
            <tr class="tr-heading">
                <th>#</th>
                <th>Type</th>
                <th>Code</th>
                <th>Description</th>
                <th>No</th>
                <th>St</th>
                <th>Property Attribute</th>
                <th>Cost</th>
                <th>Price</th>
                <th>Free</th>
                <th>Publish</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody id="project-detail-body">

        <tbody id="project-detail-body">




        </tbody>



        </tbody>
    </table>
</div>

<input type="submit" class="btn btn-primary" />

@endsection