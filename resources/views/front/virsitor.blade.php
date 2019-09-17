@extends('front.layout-visitor')
@section('navbar','navbar-light scrolling-navbar')
@section('nav-collapse','background-color: white;')
@section('screen-resize','background-color:white;')
@section('search','color:#1e4eb0;')
@section('logo')
<img src="{{url('front/img/logo.png')}}" width="100" alt="">
@endsection

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
{{--  <link rel="stylesheet" href="css/style.css">  --}}
<div class="container text-white position-relative mt-n5 mb-5" style="margin-top:110px !important ; background-color: #0080c0">
    <div class="row  rounded p-3  ">

        <div class="col-md-4 col-sm-4 col-xs-4 ">
            <div class="container pt-4 pb-3">
                <div class="user-profile">
                    <a href="#"><img src="{{asset("admin/dist/img/avatar.png")}}" class="float-left border mr-4"
                            alt=""></a>
                    <div class="user-info">
                        <ul class="list-unstyled">
                            {{-- <li>
                                <h6 class="pb-2">Panha</h6>
                            </li> --}}

                            <li>
                                <p><b>Username</b>:{{$name->name}} </p>
                            </li>
                            <li>
                                <p><b>Email</b>:{{ $email->email}}</p>
                            </li>
                            <li>
                                <p><b>Phone</b>:{{$tel->tel}}</p>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: -40px">
    <div class="two-scrolled-wrapper">
        <div class="table-responsive">
            <table class="table table-hover dataTable" id="table" >
                <thead>
                    <tr>
                        {{-- <th>#</th> --}}
                        <th>ID</th>
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

                        <th>
                            <div style="width: 150px; text-align: center;">Action</div>
                        </th>

                    </tr>
                </thead>
                <tfoot>

                    {{--
                    @foreach ($property as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                    <td>{{$item->propertyCode}}</td>
                    <td>{{$item->propertyType}}</td>
                    <td>{{$item->propAttribute}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->no}}</td>
                    <td>{{$item->st}}</td>
                    <td>{{$item->cost}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->free}}</td>
                    <td>
                        <img src="{{asset('/storage/img')}}/{{$item->image}}" alt="" class="img-fluid" width="50px"
                            height="50px" />
                    </td>

                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </th>

                        </tr>
                        @endforeach



                </tfoot> --}}
            </table>

        </div>
    </div>

</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script type="text/javascript">
    {{-- $("tr:has(td)").remove(); --}}
            {{-- $(document).ready(function() {
           $('#example').DataTable();
                } ); --}}
                {{-- var someTableDT = $("#tb").on("draw.dt", function () {
                    $(this).find(".dataTables_empty").parents('tbody').empty();
                }).DataTable(0); --}}
                {{-- $(document).ready(function() {
                    $('#tb').dataTable( {

                    } );
                } ); --}}
                $(document).ready(function(){

                    $('#table').DataTable({
                     processing: true,
                     serverSide: true,
                     ajax:{
                      url: "{{ route('visitor-product') }}",
                     },
                     columns:[
                       {
                            data: 'propertyId',
                            name: 'propertyId'
                       },
                      {
                       data: 'propertyCode',
                       name: 'propertyCode'
                      },
                      {
                       data: 'propertyType',
                       name: 'propertyType'
                      },
                      {
                        data: 'propAttribute',
                        name: 'propAttribute'
                       },
                       {
                        data: 'description',
                        name: 'description'
                       },
                       {
                        data: 'no',
                        name: 'no'
                       },
                       {
                        data: 'st',
                        name: 'st'
                       },
                       {
                        data: 'cost',
                        name: 'cost'
                       },

                       {
                        data: 'price',
                        name: 'price'
                       },
                       {
                        data: 'free',
                        name: 'free'
                       },
                      {
                        data: 'image',
                        name: 'image',
                        render: function(data, type, full, meta){
                       // return "<img src={{ URL::to('/storage/img') }}/" + data + " width='70' class='img-thumbnail' />";
                      // return "<img src= {{asset('/storage/')}}/" + data + " width='70' class='img-thumbnail' />";
                      return "<img src={{asset('/storage/')}}/" + data + " width='70' class='img-thumbnail' />";
                        },

                        orderable: false
                       },
                      {
                       data: 'action',
                       name: 'action',
                       orderable: false
                      }
                     ]
                    });
                });
</script>

@endsection;
@section('display-detail','display:none')
