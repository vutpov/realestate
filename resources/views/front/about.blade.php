@extends('front.layout')
@section('navbar','navbar-light scrolling-navbar')
@section('nav-collapse','background-color: white;')
@section('screen-resize','background-color: white;')
@section('about','color:#1e4eb0;')
@section('logo')
<img src="{{url('front/img/logo.png')}}" width="100" alt="">
@endsection
@section('content')
{{-- <div id="showcase" class="my-4 py-5">
        <div class="primary-overlay text-white">
           
        </div>
    </div> --}}
<section style="margin-top:80px; background-color: #FAFAFA;" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="info-header">
                    <h1 style="font-size:4.2rem" class="text-dark pb-3">
                        About Us
                    </h1>
                    <h5 class="text-dark pb-3">
                        <a style="color:#01B0E6" href="/">Homepage</a> / About Us
                    </h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="color:white;">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{url('front/img/about.jpg')}}" alt="">
            </div>
            <div class="col-lg-6">
                <h5 style="color:#01B0E6;" class="pt-4">
                    Our purpose is to build trust for our Customer
                </h5>
                <p class="text-dark pt-3 display-4">
                    We help to find your dream house base on your preferences
                </p>
                <p style="color:#7C7C7C;" class="lead pt-3">
                    Our Company has agents across Cambodia that can find your house, apartment, land or offices either
                    for rent or sale depend on your preferences.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection