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

    <input type="submit" class="btn btn-primary" value="Submit" />
    <button class="btn btn-danger pull-right">
        <a style="color:white;" href="/system/propAttribute">Cancel</a>
    </button>



</form>


@endsection


@section('display-detail','display:none')