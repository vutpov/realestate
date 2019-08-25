@extends('admin.master')

@section('page-header','Edit Project')


@section('col','col-md-6')






@section('content')


<?php
    use App\Http\Helpers\Helper;
   

    $parterToShow = Helper::oldOrDB('partner',$selectPartner->partnerId);

    $stProject = Helper::oldOrDB('project',$project->project);

   
?>




<form action="{{url('/system/updateProject',$project->projectId)}}" method="POST" enctype="multipart/form-data">
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
        <select class="form-control select2" name="partner" id="partner">

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
            value="{{$stProject}}" />
        <span class="help-block"></span>
    </div>

    <input type="submit" class="btn btn-primary" value="Submit" />
    <button class="btn btn-danger pull-right">
        <a style="color:white;" href="/system/project">Cancel</a>
    </button>



</form>


@endsection


@section('display-detail','display:none')


@section('script')

<script>
    $('#partner').val('{{$parterToShow }}');
    $('#partner').select2().trigger('change');


</script>

@endsection