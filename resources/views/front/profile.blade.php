@extends('front.layout-profile')
@section('navbar','navbar-light scrolling-navbar')
@section('nav-collapse','background-color: white;')
@section('screen-resize','background-color:white;')
@section('search','color:#1e4eb0;')
@section('logo')
<img src="{{url('front/img/logo.png')}}" width="100" alt="">
@endsection
<!-- jQuery library -->

@section('manu')
<div class="menu-top" style="margin-right: 100px">
    <ul class="nav ml-auto">
        <li class="nav-item dropdown mr-3">
            <a href="#" id="userdropdown" role="button" data-toggle="dropdown"><i class="fas fa-user"
                    style="font-size: 28px;margin-top: 7px"></i></a>
            <div class="dropdown-menu dropdown-menu-right mt-4">
                <a href="#" class="dropdown-item"><i class="fas fa-cog"></i>&nbsp;&nbsp;Setting</a>
                <a href="/explores" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;LogOut</a>
            </div>
        </li>
        <li class="nav-item">
            <a href="{{route('createPropertyfront')}}" class="nav-link btn btn-sm btn-warning">Post Free Ad</a>
        </li>
    </ul>
    @endsection
    <br><br>
    @section('content')
    <!--Body-->
    <div class="container text-black position-relative mt-n5 mb-5" style="margin-top:110px !important">

        <body>
            <!-- User Information -->
            <div class="container-fluid user-detail bg-white border-top border-bottom ">
                <div class="container pt-4 pb-3">
                    <div class="user-profile">
                        <a href="#"><img src="{{url('front/img/default_profile.jpg')}}" class="float-left border mr-4"
                                alt=""></a>
                        <div class="user-info">
                            <ul class="list-unstyled">

                                <li>
                                    <p><b>Username</b>:&nbsp;&nbsp;{{$name->name}} </p>
                                </li>
                                <li>
                                    <p><b>Email</b>:&nbsp;&nbsp;{{ $email->email}}</p>
                                </li>
                                <li>
                                    <p><b>Phone</b>:&nbsp;&nbsp;{{$tel->tel}}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Content -->
            <div class="container-fluid content p-0">
                <br>

                <!-- List Product -->
                <div class="container">
                    <div class="list-pro">
                        <div class="table-responsive">

                            <table class="table table-hover dataTable">

                                <thead class="bg-dark text-white">

                                    <tr>
                                        <th>ID</th>
                                        <th>Code</th>
                                        <th>Property Types</th>
                                        <th>
                                            <div style=" text-align: center"> Attribute</div>
                                        </th>
                                        <th>Description</th>
                                        <th>No</th>
                                        <th>St</th>
                                        <th>Cost</th>
                                        <th>Price</th>
                                        <th>Free</th>
                                        <th>Thumbnail</th>

                                        <th>
                                            <div style="width: 170px; text-align: center"> Action </div>
                                        </th>


                                        <th style="visibility:collapse">IDs</th>
                                    </tr>

                                </thead>
                                <tbody>

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
                                            <img src="{{asset('/storage/')}}/{{$item->image}}" alt="" style="width: 70px"
                                                class='img-thumbnail' />
                                        </td>

                                        <td>
                                            <a href="#" class="btn btn-sm btn-primary">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                        <td style="visibility:collapse">{{$item->propertyId}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="pt3 mt-3">
                    <span> {{$property->appends(request()->input())->links()}}</span>
                </div>
            </div>
        </body>
    </div>


    @endsection
    @section('display-detail','display:none')
