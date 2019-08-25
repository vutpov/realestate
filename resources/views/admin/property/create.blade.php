@extends('admin.master')

@section('page-header','Create New Property')


@section('col','col-md-6')

@section('content')

<form action="/system/storeProperty" method="POST" id="form-submit-property">
    @csrf
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="alert show-message" style="display:none">

    </div>


    <input type="hidden" value="{{$nextId}}" id="propertyId" name="propertyId">


    <div class="form-group">
        <label>Project</label>
        <select name="project" class="form-control select2">
            @foreach($project as $p)
            <option value="{{$p->projectId}}">{{$p->project}}</option>
            @endforeach

        </select>
    </div>



    {{-- Property Type --}}
    <div class="form-group">
        <label>Property Type</label>
        <select name="propertyType" class="form-control select2">
            @foreach($propertyType as $p)
            <option value="{{$p->propertyTypeId}}">{{$p->propertyType}}</option>
            @endforeach

        </select>
    </div>


    {{-- Description --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Description</label>
        <input type="text" class="form-control" name="description" placeholder="Description" id="description" />
        <span class="help-block"></span>
    </div>


    {{-- Phone --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">No</label>
        <input type="text" class="form-control" name="no" placeholder="No" />
        <span class="help-block"></span>
    </div>

    {{-- St --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">St</label>
        <input type="email" class="form-control" name="st" placeholder="St" />
        <span class="help-block"></span>
    </div>


    {{-- Unit Mesurement Type --}}
    <div class="form-group">
        <label>Unit Mesurement Type</label>
        <select name="mesurement" class="form-control select2">
            @foreach($unitMesurementType as $u)
            <option value="{{$u->umid}}">{{$u->um}}</option>
            @endforeach

        </select>
    </div>


    {{-- Unit --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Unit</label>
        <input type="Text" class="form-control" name="unit" placeholder="Unit" />
        <span class="help-block"></span>
    </div>



    {{-- Cost --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Cost</label>
        <input type="Text" class="form-control" name="cost" placeholder="Cost" />
        <span class="help-block"></span>
    </div>

    {{-- Price --}}
    <div class="form-group">
        <label class="control-label" for="inputSuccess">Price</label>
        <input type="Text" class="form-control" name="price" placeholder="Price" />
        <span class="help-block"></span>
    </div>

    {{-- Property Attribute --}}
    <div class="form-group">
        <label>Property Attribute</label>
        <select name="propAttribute" class="form-control select2">
            @foreach($propAttribute as $p)
            <option value="{{$p->propAttributeID}}">{{$p->propAttribute}}</option>
            @endforeach
        </select>
    </div>



    {{-- Thumbnail --}}
    <div class="form-group">
        <label class="control-label" for="thumbnial">Thumbnail</label>
        <input name="thumbnail" type="file" />
        <span class="help-block"></span>
    </div>








</form>

<form action="{{ route('propertyImageUpload') }}" class="dropzone needsclick dz-clickable dropzone-wrapper"
    id="propertyDropzone" enctype="multipart/form-data" method="post">
    @csrf
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="dz-message needsclick">
        Drop files here or click to upload.<br>
    </div>

</form>


<input type="submit" class="btn btn-primary" value="Submit" id="submitProperty" />
<button class="btn btn-danger pull-right">
    <a style="color:white;" href="/system/property">Cancel</a>
</button>

@endsection


@section('display-detail','display:none')

@section('script')
<script>
    var myDropzone;

    const sendData = () =>{
        let description = $("input[name='description']").val();
               
                
        var frmdata = new FormData($("#form-submit-property")[0])
        
        

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            url: "{{route('storeProperty')}}",
            processData:false,
            contentType:false,
            data: frmdata,
            success: response =>{
               
                
                $("#propertyId").val(response.propertyId)
              
                myDropzone.processQueue();

                renderMessage($('.show-message'),'success', response.message);
                
            },
            error: response=>{
               
                renderMessage($('.show-message'),'error', response.responseJSON.message);
                
                

            },
            complete: response=>{
                console.log(response);
               
            },
            dataType: "json",
            // contentType : "application/json"
        });
        
    };
    
   

    Dropzone.options.propertyDropzone = {
        autoProcessQueue:false,
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        clickable: true,
        addRemoveLinks:true,
        timeout: 5000,


        
        init: function() {
            myDropzone=this;
            this.on("success", function(file, response) {             
                
                this.removeFile(file);


            });

            this.on('sending', function(file, xhr, formData){
                formData.append('propertyId', file.propertyId);
            });

            this.on("addedfile",(file)=>{
                file.propertyId=$('#propertyId').val();
              
            });

            this.on("error", function(file, response) {
                console.log(response);
                  
            });

            this.on("complete", function(file, response) {
                console.log(response);
                  
            });

            


            $("#submitProperty").click(()=>{      
                //$('#form-submit-property').submit();

                sendData();

                // if(sendData()){
                //     console.log('send photo');
                //     myDropzone.processQueue();
                    
                // }else{
                //     console.log('not send photo');
                // }
                   
            });
            
        }

        
    };


    

</script>
@endsection