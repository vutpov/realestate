@extends('front.master')

@section('content')

  @include('front.shared.nav')

  <div class="review_part about_review one-column">
      <div class="container">
          <div class="row">
              <div class="col-sm-8 col-lg-7">
                  <div class="section_tittle">
                      <h1>Product and Service
                      </h1>
                  </div>
              </div>
  
  
  
          </div>
  
          <div class="row">
              <div class="col-lg-12">
  
                  <p>
                      Over the past five years, K NIRON REAL ESTATE Co., Ltd has provided a variety of services in the real estate sector in Cambodia with clients both Khmer and foreign such as:
                  </p>
  
                  <ul>
                      <li>
                          <p>Land: Our Company has been Providing service on buy-selling and renting with a variety of clients: Phnom Penh, Kandal, Kampot, Kompong Chhnang, Preah Sihanouk Province ...</p>
                      </li>
  
                      <li>
                          <p>
                              House: is a customer's need. Among them, Baal offers trading services and leasing services to clients in various locations such as Phnom Penh, Kandal, Kampot, and Preah Sihanouk.
                          </p>
                      </li>
  
                      <li>
                          <p>
                              Condo Room: Currently, the company offers services on buy-selling and renting modern condominiums such as condo Budiaju, condo Boeung Tumpun, and Condo Diamante Island.
                          </p>
                      </li>
                  </ul>
  
              </div>
  
  
          </div>
  
  
          <div class="apartment_part">
              <div class="container">
                  <div class="row justify-content-between align-content-center">
                      <div class="col-md-8 col-lg-7">
                          <div class="section_tittle">
                              <h1>Provide The <br>
                                  Beautiful Apartment</h1>
                          </div>
                      </div>
                      <div class="col-md-4 col-lg-5">
                          <div class="view_more_btn float-right d-none d-md-block">
                              <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      {{-- <div class="col-md-4 col-lg-4">
                          <div class="single_appartment_part">
                              <div class="appartment_img">
                                  <img src="img/2-01.jpg" alt="">
                                  <div class="single_appartment_text">
                                      <h3>$1,235632</h3>
                                      <p><span class="ti-location-pin"></span> 384 Treeline Park, San Antonio, TX</p>
                                  </div>
                              </div>
                              <div class="single_appartment_content">
                                  <a href="" class="love_us"> <span class="ti-heart"></span> </a>
                                  <p>Home, Apartment</p>
                                  <a href="#">
                                      <h4>Detached House For Sale</h4>
                                  </a>
                                  <ul class="list-unstyled">
                                      <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                                      <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                                      <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-lg-4">
                          <div class="single_appartment_part">
                              <div class="appartment_img">
                                  <img src="img/Room-01.jpg" alt="">
                                  <div class="single_appartment_text">
                                      <h3>$1,235632</h3>
                                      <p><span class="ti-location-pin"></span> 384 Treeline Park, San Antonio, TX</p>
                                  </div>
                              </div>
                              <div class="single_appartment_content">
                                  <a href="" class="love_us"> <span class="ti-heart"></span> </a>
                                  <p>Home, Apartment</p>
                                  <a href="#">
                                      <h4>Detached House For Sale</h4>
                                  </a>
                                  <ul class="list-unstyled">
                                      <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                                      <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                                      <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 col-lg-4">
                          <div class="single_appartment_part">
                              <div class="appartment_img">
                                  <img src="img/appertment_3.png" alt="">
                                  <div class="single_appartment_text">
                                      <h3>$1,235632</h3>
                                      <p><span class="ti-location-pin"></span> 384 Treeline Park, San Antonio, TX</p>
                                  </div>
                              </div>
                              <div class="single_appartment_content">
                                  <a href="" class="love_us"> <span class="ti-heart"></span> </a>
                                  <p>Home, Apartment</p>
                                  <a href="#">
                                      <h4>Detached House For Sale</h4>
                                  </a>
                                  <ul class="list-unstyled">
                                      <li><a href=""><span class="flaticon-bath"></span></a> 04</li>
                                      <li><a href=""><span class="flaticon-bed"></span></a> 03</li>
                                      <li><a href=""><span class="flaticon-frame"></span></a> 2400 sqft</li>
                                  </ul>
                              </div>
                          </div>
                      </div> --}}

                      @foreach( $products as $item )
                      <div class="col-md-4 col-lg-4">
                          <div class="single_appartment_part">
                              <div class="appartment_img">
                                  <img src="img/appertment_3.png" alt="">
                                  <div class="single_appartment_text">
                                      <h3>{{$item->price}}</h3>
                                      <p><span class="ti-location-pin"></span>{{$item->location}}</p>
                                  </div>
                              </div>
                              <div class="single_appartment_content">
                                  <a href="" class="love_us"> <span class="ti-heart"></span></a>
                                  
                                  
                                  <p>{{$item->propType}}</p>
                                  <a href="#">
                                      <h4>{{$item->description}}</h4>
                                  </a>
                                  <ul class="list-unstyled">

                                    <?php
                                      
                                      // $propAttributes = [];
                                      // dd($item->propAttribute);
                                      // $expoldeProps = explode(",", $item->propAttribute);
                                      
                                      // foreach($expoldeProps as $temp){
                                      //   $propItem = explode(":", $temp);
                                       
                                      //   $propAttributes[$propItem[0]] = $propItem[1];
                                      // }
                                      ?>

                                    {{-- <li><a href=""><span class="flaticon-bath"></span></a>{{$propAttributes['Bathroom']}}</li>
                                    <li><a href=""><span class="flaticon-bed"></span></a>{{$propAttributes['Bedroom']}}</li>
                                    <li><a href=""><span class="flaticon-frame"></span></a>{{$item->unit}}</li> --}}
                                  </ul>
                              </div>
                          </div>
                      </div>


                      @endforeach
                      
                      
                  </div>
              </div>
          </div>
  
      </div>
  </div>

@endsection