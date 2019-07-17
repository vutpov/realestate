@extends('front.layout')
@section('navbar','navbar-light scrolling-navbar')
@section('nav-collapse','background-color: white;')
@section('screen-resize','background-color:white;')
@section('contact','color:#1e4eb0;')
@section('logo')
<img src="{{url('front/img/logo.png')}}" width="140" height="50" alt="">
@endsection
@section('content')
<section style="margin-top:80px; background-color: #FAFAFA;" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="info-header">
                    <h1 style="font-size:4.2rem" class="text-dark pb-3">
                        About Us
                    </h1>
                    <h5 class="text-dark pb-3">
                        <a style="color:#01B0E6" href="/">Homepage</a> / Contact Us
                    </h5>
                </div>
            </div>
        </div>
        <div class="row">
            <h5 style="color:#6F6F6F; letter-spacing:1px; word-spacing:4px;" class="">
                Thank you for your interest in our service. Please contact us using the information below. To get the
                latest updates from Our Company, connect with us on social media.
            </h5>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="container">
                    <div class="pl-3 pt-5">
                        <i style="font-size:7em;" class="fas fa-envelope-open-text"></i>
                        <h5 class="text-dark pt-3">SO17@gmail.com</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pt-5">
                    <div class="container">
                        <i style="font-size:7em;" class="far fa-compass"></i>
                        <h5 class="text-dark pt-3">Phnom Penh, Cambodia</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pt-5">
                    <div class="container">
                        <i style="font-size:7em;" class="fas fa-phone-volume"></i>
                        <h5 class="text-dark pt-3">012 123 456 / 016 111 222 / 076 555 4443</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <iframe src="https://www.google.com/maps/place/SETEC+Institute/@11.5680235,104.8941575,18.28z/data=!4m5!3m4!1s0x31095173761d4a53:0xcd09ff2f4d326e3f!8m2!3d11.5680377!4d104.8946757" frameborder="0" allowfullscreen></iframe> --}}
    {{-- <div class="row">
                <div class="mapouter"><div class="gmap_canvas"><iframe width="650" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=setec%20&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:650px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:650px;}</style></div>
        </div> --}}
    <iframe style="padding-top:50px;"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1604.0470679484329!2d104.89415749587096!3d11.568023473056328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31095173761d4a53%3A0xcd09ff2f4d326e3f!2sSETEC+Institute!5e0!3m2!1sen!2skh!4v1563075108615!5m2!1sen!2skh"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</section>
@endsection