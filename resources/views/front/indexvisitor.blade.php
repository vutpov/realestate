@extends('front.layout-visitor')
@section('navbar','navbar-light scrolling-navbar')
@section('nav-collapse','background-color: white;')
@section('screen-resize','background-color:white;')
@section('search','color:#1e4eb0;')
@section('logo')
<img src="{{url('front/img/logo.png')}}" width="100" alt="">
@endsection
{{--
@section('col','col-md-12')

@section('page-header','View All Properties')  --}}


@section('content')
<br>
<div class="container text-white position-relative mt-n5 mb-5" style="margin-top:110px !important ;background-color: #0080ff">
    <div class="row rounded p-3  ">

        <div class="col-md-4 col-sm-4 col-xs-4 ">

            <form action="{{Route('storePropertyfront')}}" method="POST" id="form-submit-property">
                @csrf
                {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
                <div class="alert show-message" style="display:none">
                </div>
                <input type="hidden" value="{{$nextId}}" id="propertyId" name="propertyId">
                {{-- <input type="hidden" value="{{$staffid->staffid}}" id="staffid" name="staffid"> --}}

                {{-- Property Type --}}

                <div class="form-group">
                    <label>Property Type</label>
                    <select name="propertyType" class="form-control ">
                        @foreach($propertyType as $p)
                        <option value="{{$p->propertyTypeId}}">{{$p->propertyType}}</option>
                        @endforeach

                    </select>
                </div>


                {{-- Description --}}
                <div class="form-group">
                    <label class="control-label" for="inputSuccess">Description</label>
                    <textarea name="description" placeholder="Description" id="description" class="form-control valid"
                        required="" aria-invalid="false"></textarea>
                    {{--  <area  class="form-control" name="description" placeholder="Description" id="description" />  --}}
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
                    <select name="mesurement" class="form-control ">
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
                    {{-- <input type="Text" class="form-control" name="cost" placeholder="Cost" /> --}}
                    <input type="number" min="1" name="cost" id="ad_price" class="form-control  number " required="" aria-describedby="basic-addon1" value="">
                    <span class="help-block"></span>
                </div>

                {{-- Price --}}
                <div class="form-group">
                    <label class="control-label" for="inputSuccess">Price</label>
                    {{-- <input type="Text" class="form-control" name="price" placeholder="Price" /> --}}
                    <input type="number" min="1" name="price" id="ad_price" class="form-control  number " required="" aria-describedby="basic-addon1" value="">
                    <span class="help-block"></span>
                </div>

                {{-- Property Attribute --}}
                <div class="form-group">
                    <label>Property Attribute</label>
                    <select name="propAttribute" class="form-control ">
                        @foreach($propAttribute as $p)
                        <option value="{{$p->propAttributeID}}">{{$p->propAttribute}}</option>
                        @endforeach
                    </select>
                    <span class="help-block"></span>
                </div>

                {{-- Location --}}
                {{-- <div class="form-group">
                    <label class="control-label" for="inputSuccess">Location</label>
                    <textarea name="location" placeholder="location" id="location" class="form-control valid"
                        required="" aria-invalid="false"></textarea>
                    <span class="help-block"></span>
                </div> --}}

                {{-- Thumbnail --}}
                <div class="form-group">
                    <label class="control-label" for="thumbnial">Thumbnail</label>
                    <input name="thumbnail" type="file" />
                    <span class="help-block"></span>
                </div>

            </form>

            <form action="{{ Route('propertyImageUploadfront') }}"
                class="dropzone needsclick dz-clickable dropzone-wrapper" id="propertyDropzone"
                enctype="multipart/form-data" method="post">
                @csrf
                //
                <meta name="csrf-token" content="{{ csrf_token() }}">
                <div class="dz-message needsclick">
                    <div style="color:black;">Drop files here or click to upload.<br></div>
                </div>

            </form>

            <input type="submit" class="btn btn-primary" value="Submit" id="submitProperty" />
            <button class="btn btn-danger pull-right">
                <a style="color:white;" href="/explores">Back</a>

            </button>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4 ">
                <div style="margin-top: 20px; ">

                        <div class="container" >
                            <div class="mapouter">
                                <div class="gmap_canvas"><iframe width="1000" height="800" id="gmap_canvas"
                                        src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="100"></iframe>Google Maps
                                    Generator
                                    by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div>
                                <style>
                                    .mapouter {
                                        position: relative;
                                        text-align: right;
                                        height: 500px;
                                        width: 700px;
                                    }

                                    .gmap_canvas {
                                        overflow: hidden;
                                        background: none !important;
                                        height: 500px;
                                        width: 700px;
                                    }
                                </style>
                            </div>
                        </div>

                    </div>
        </div>

    </div>

    @section('display-detail','display:none')
    @section('script')
    <script>
        var myDropzone;

    const sendData = () =>{
        let description = $("input[name='description']").val();


        var frmdata = new FormData($("#form-submit-property")[0])



        $.ajax({
           // headers: {
        //        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       //     },
            method:"POST",
            url: "{{route('storePropertyfront')}}",
            processData:false,
            contentType:false,
            data: frmdata,
            success: response =>{


                $("#propertyId").val(response.propertyId)



                myDropzone.processQueue();
                console.log(response);
                renderMessage($('.show-message'),'success', response.message);

            },
            error: response=>{

                renderMessage($('.show-message'),'error', response.responseJSON.message);



            },
            complete: response=>{
                console.log(response.data);

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
    {{-- <html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <br><br> --}}



    {{-- <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Property Types</th>
                <th>Attribute</th>
                <th>Description</th>
                <th>No</th>
                <th>St</th>
                <th>Cost</th>
                <th>Price</th>
                <th>Free</th>
                <th>Thumbnail</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th style="width: 150px;">Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                @foreach ($property as $item)
            <tr>
                <th>{{$loop->iteration}}</th>
    <th>{{$item->propertyCode}}</th>
    <th>{{$item->propertyType}}</th>
    <th>{{$item->propAttribute}}</th>
    <th>{{$item->description}}</th>
    <th>{{$item->no}}</th>
    <th>{{$item->st}}</th>
    <th>{{$item->cost}}</th>
    <th>{{$item->price}}</th>
    <th>{{$item->free}}</th>
    <th>
        <img src="{{asset('/storage/img')}}/{{$item->image}}" alt="" class="img-fluid" width="50px" height="50px" />
    </th>
    <th>{{$item->created_at}}</th>
    <th>{{$item->updated_at}}</th>
    <th>
        <a>
            <link rel="stylesheet" href="#">Edit</a>

        &nbsp; <a>
            <link rel="stylesheet" href="#">Delete</a>
    </th>

    </tr>
    @endforeach

    </tr>
    </tfoot>
    </table> --}}


    {{-- <div class="form-group">
            <label for="">
                <input type="checkbox" name="chkbox" id="chkbox-proptyType" {{$check}}>
    Trash
    </label>
</div> --}}

{{-- @endsection --}}
{{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> --}}



{{-- @section('display-detail','display:none') --}}
{{-- </div> --}}
{{--
</body>

</html>
<script>
    $(document).ready(function() {
   $('#example').DataTable();
        } );
</script> --}}

{{-- <div class="container text-white position-relative mt-n7 mb-7" style="margin-top:150px !important"> --}}
{{-- <!DOCTYPE html>

        <html>

        <head>

          <title>Laravel Ajax Multiple Image Upload with Preview Example</title>

          <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

          <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>



          <style type="text/css">

            input[type=file]{

              display: inline;

            }

            #image_preview{

              border: 1px solid black;

              padding: 10px;

            }

            #image_preview img{

              width: 200px;

              padding: 5px;

            }

          </style>



        </head>

        <body>



        <div class="container">

          <h1>Laravel Ajax Multiple Image Upload with Preview Example</h1>

          <form action="#" method="post" enctype="multipart/form-data">

              {{ csrf_field() }}

<input type="file" id="uploadFile" name="uploadFile[]" multiple />

<input type="submit" class="btn btn-success" name='submitImage' value="Upload Image" />

</form>



<br />

<div id="image_preview"></div>

</div>



</body>



<script type="text/javascript">
    $("#uploadFile").change(function(){

             $('#image_preview').html("");

             var total_file=document.getElementById("uploadFile").files.length;

             for(var i=0;i<total_file;i++)

             {

              $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"'>");

             }

          });



          $('form').ajaxForm(function()

           {

            alert("Uploaded SuccessFully");

           });



</script>

</html> --}}
