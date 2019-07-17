@extends('front.layout')
@section('navbar','navbar-dark scrolling-navbar')
@section('nav-collapse','background-color: #1e4eb0;')
@section('screen-resize','background-color: #16397e;')
@section('logo')
    <img src="{{url('front/img/logo-white.png')}}" width="140" height="50" alt="">
@endsection

@section('home','active')
@section('content')
    <!--Carousel Wrapper-->
  <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1" data-slide-to="1"></li>
      <li data-target="#carousel-example-1" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <!--Mask-->
        <div class="view">
          <div class="full-bg-img flex-center mask rgba-indigo-light white-text">
            <ul class="animated fadeInUp col-lg-12 list-unstyled list-inline">
              <li>
                <h1 class="font-weight-bold text-uppercase">Our Company provide:</h1>
              </li>
              <li>
                <p class="font-weight-bold text-uppercase py-4">We can find your dream house</p>
              </li>
              @include('front.button')
            </ul>
          </div>
        </div>
        <!--/.Mask-->
      </div>
      <!--/.First slide-->

      <!--Second slide -->
      <div class="carousel-item">
        <!--Mask-->
        <div class="view">
          <div class="full-bg-img flex-center mask rgba-purple-light white-text">
            <ul class="animated fadeInUp col-lg-12 list-unstyled">
              <li>
                <h1 class="font-weight-bold text-uppercase">Availabe in Cambodia</h1>
              </li>
              <li>
                <p class="font-weight-bold text-uppercase py-4">Have agents in all provinces</p>
              </li>
              @include('front.button')
            </ul>
          </div>
        </div>
        <!--/.Mask-->
      </div>
      <!--/.Second slide -->

      <!--Third slide-->
      <div class="carousel-item">
        <!--Mask-->
        <div class="view">
          <div class="full-bg-img flex-center mask rgba-blue-light white-text">
            <ul class="animated fadeInUp col-lg-12 list-unstyled">
              <li>
                <h1 class="font-weight-bold text-uppercase">Commission acceptable</h1></li>
              <li>
                <p class="font-weight-bold text-uppercase py-4">Our service is gurantee the best one so far</p>
              </li>
              @include('front.button')
            </ul>
          </div>
        </div>
        <!--/.Mask-->
      </div>
      <!--/.Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
@endsection