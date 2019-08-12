@extends('admin.master')

@section('col','col-md-6')

@section('page-header','View All Property Types')

@section('content')

<table class="table table-hover dataTable">

    <thead>
        <tr>
            <th>#</th>
            <th>Property Types</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>



    </tbody>


    <div class="form-group">
        <label for="">
            <input type="checkbox" name="chkbox" id="chkbox-proptyType">
        </label>
    </div>

</table>

@endsection

@section('display-detail','display:none')