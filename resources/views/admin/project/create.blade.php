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


    {{-- Customer --}}
    <div class="form-group">
        <label>Partner</label>
        <select class="form-control" name="partner">
            <option>Partner 1</option>
            <option>Partner 2</option>
        </select>
    </div>

    {{-- project --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Project</label>
        <input type="text" class="form-control" id="inputSuccess" name="project" placeholder="Project"
            value="{{old('project')}}" />
        <span class="help-block"></span>
    </div>



</form>


@endsection


@section('col-detail','col-md-12')

@section('detail-header','Project Detail')


@section('detail')




{{-- Type --}}
<div class="form-group w-50">
    <label>Type</label>
    <select class="form-control" name="type">
        <option>Land</option>
        <option>House</option>
    </select>
</div>


{{-- project --}}
<div class="form-group w-50">
    <label class="control-label" for="inputSuccess">Code</label>
    <input type="text" class="form-control" id="inputSuccess" name="code" placeholder="Code" />
    <span class="help-block"></span>
</div>


{{-- description --}}
<div class="form-group w-50">
    <label class="control-label" for="inputSuccess">Description</label>
    <input type="text" class="form-control" id="inputSuccess" name="description" placeholder="Description" />
    <span class="help-block"></span>
</div>


{{-- No --}}
<div class="form-group w-50">
    <label class="control-label" for="inputSuccess">No</label>
    <input type="text" class="form-control" id="inputSuccess" name="no" placeholder="No" />
    <span class="help-block"></span>
</div>


{{-- St --}}
<div class="form-group w-50">
    <label class="control-label" for="inputSuccess">st</label>
    <input type="text" class="form-control" id="inputSuccess" name="st" placeholder="St" />
    <span class="help-block"></span>
</div>

{{-- Props Attribute --}}
<div class="form-group w-50">
    <label class="control-label" for="inputSuccess">Attribute</label>
    <input type="text" class="form-control" id="inputSuccess" name="attrib" placeholder="Attribute" disabled />
    <span class="help-block"></span>
</div>


{{--  Cost --}}

<div class="form-group w-50">
    <label class="control-label" for="inputSuccess">Cost</label>
    <input type="number" class="form-control" name="cost" placeholder="Cost" />
    <span class="help-block"></span>
</div>


{{--  Price --}}

<div class="form-group w-50">
    <label class="control-label" for="inputSuccess">Price</label>
    <input type="number" class="form-control" name="price" placeholder="Price" />
    <span class="help-block"></span>
</div>


{{-- Free --}}
<div class="form-group w-50">
    <label class="control-label" for="inputSuccess">Free</label>
    <input type="text" class="form-control" id="inputSuccess" name="free" placeholder="Free" />
    <span class="help-block"></span>
</div>

{{-- Status --}}
<div class="form-group w-50">
    <label>Status</label>
    <select class="form-control" name="status">
        <option>Hard</option>
        <option>Soft</option>
        <option>None</option>
    </select>
</div>


{{-- Publish --}}
<div class="form-group w-50">
    <label>Publish</label>
    <select class="form-control" name="publish">
        <option>Pending</option>
        <option>Published</option>
    </select>
</div>




{{--  Discount --}}

<div class="form-group w-50">
    <label class="control-label" for="inputSuccess"> Discount</label>
    <input type="number" class="form-control" name="discount" placeholder="Discount" value="{{old('Discount')}}" />
    <span class="help-block"></span>
</div>


{{--  Amount --}}

<div class="form-group w-50">
    <label class="control-label" for="inputSuccess"> Amount</label>
    <input type="number" class="form-control" name="amount" placeholder="Amount" value="{{old('Amount')}}" />
    <span class="help-block"></span>
</div>


<div class="form-group">
    <button type="button" class="btn btn-primary">Add Property</button>
</div>


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