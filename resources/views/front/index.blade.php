@extends('front.master')

@section('content')
  <!--::menu part start::-->
  @include('front.shared.home-nav')
  <!--::menu part end::-->

  <!--::banner part start::-->
  <section class="banner_part" style="">
    <div class="container">
      <div class="row align-content-center">
        <div class="col-lg-6">
          <div class="banner_text aling-items-center">
            <div class="banner_text_iner">
              <h5>Beautiful investments</h5>
              <h2>Everyone Deserves
                the Opportunity of
                the Home</h2>
              <p>Enim a, scelerisque aliquet vivamus neque diam sed at pede do laos orci. Potenti vel
                in sagittis nulla augue vitae et tempus torquent dicid Lacinia neque mus maleware
                poside</p>
              <a href="#" class="btn_1 banner_btn ">View Property</a>
              <div class="d-none d-xl-block banner_social_icon">
                  <ul class="list-inline">

                     <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span>kniron</a><span class="dot"><i class="fas fa-circle"></i></span></li>
                     <li class="list-inline-item"><a href="#"><span class="ti-email"></span>info@kniron.com</a><span class="dot"><i class="fas fa-circle"></i></span></li>
                     <li class="list-inline-item"><a href="#"><span class="ti-tablet"></span>(855) 23 978 999/ 78 338 000</a></li>
                  </ul>
               </div>
            </div>
          </div>
        </div>
      </div>
    </div>


  </section>
  <!--::banner part end::-->

  <!--::team part end::-->
  <section class="team_part">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="team_img"></div>
        </div>
        <div class="offset-lg-1 col-lg-5">
          <div class="team_member_text">
            <h2>Living From <br>
              The Team That Cares</h2>
            <p>Unto all set life creeping own set. Saw make multiply female watge deb all set life
              creeping own set. Saw make multiply female watge abund winged subdue dominion
              own night days second</p>
            <ul>
              <li><span class="ti-paint-bucket"></span>Set dry signs spirit a kind First shall them windged
                creping</li>
              <li><span class="ti-check-box"></span>He two face one moved dominion man you're likeness</li>
              <li><span class="ti-ruler-pencil"></span>Sea forth fill have divide be dominion from life for feven
              </li>
            </ul>
            <a href="#" class="btn_1">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <img src="{{url('front/img/section_overlay.png')}}" alt="">
  </section>
  <!--::team part end::-->

  <!--::passion_part end::-->
  <div class="passion_part">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section_tittle">
            <h1>Our Passion is <br>
              People What’s Yours?</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="single_passion">
            <div class="single_passion_item">
              <a href="#" class="passion_icon"> <i class="flaticon-compass"></i> </a>
              <h4>Creative Design</h4>
              <p>Hac facilisi ac vitae consec tetu commod vel magna suspen disse on senectus
                pharetra magnfauc bed</p>
              <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="single_passion">
            <div class="single_passion_item">
              <a href="#" class="passion_icon"> <i class="flaticon-desk"></i> </a>
              <h4>Experience Style</h4>
              <p>Hac facilisi ac vitae consec tetu commod vel magna suspen disse on senectus
                pharetra magnfauc bed</p>
              <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="single_passion">
            <div class="single_passion_item">
              <a href="#" class="passion_icon"> <i class="flaticon-bathroom"></i> </a>
              <h4>Product Research</h4>
              <p>Hac facilisi ac vitae consec tetu commod vel magna suspen disse on senectus
                pharetra magnfauc bed</p>
              <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="single_passion">
            <div class="single_passion_item">
              <a href="#" class="passion_icon"> <i class="flaticon-beach"></i> </a>
              <h4>Affordable Price</h4>
              <p>Hac facilisi ac vitae consec tetu commod vel magna suspen disse on senectus
                pharetra magnfauc bed</p>
              <a href="#" class="btn_2">Read More <span class="ti-arrow-right"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--::passion_part end::-->

  <!--::apartment_part end::-->
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
            <div class="col-md-4 col-lg-4">
               <div class="single_appartment_part">
                  <div class="appartment_img">
                     <img src="{{url('front/img/2-01.jpg')}}" alt="">
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
                     <img src="{{url('front/img/Room-01.jpg')}}" alt="">
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
                     <img src="{{url('front/img/appertment_3.png')}}" alt="">
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
         </div>
      </div>
   </div>
  <!--::apartment_part end::-->

  <!--::review_part end::-->
  <div class="review_part" id="testimonial">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-lg-7">
          <div class="section_tittle">
            <h1>Our Happy Customer
              Says About us</h1>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="review_part_text owl-carousel">
            <div class="singler_eview_part">
              <div class="client_info">
                <img src="{{url('front/img/client_1.png')}}" alt="">
                <h4>Mouunt Alezaber</h4>
                <p>Project manager</p>
              </div>
              <p><i>Enim a, scelerisque aliquet. Vivamus neque diam sed at, pede laoreet orci.
                  Potenti vel In sagittis nulla augue vitae et tempus torquent. Lacinia neque
                  mus taciti ante prsent at facilisis. Enim a, scelerisque aliquet. Vivamus
                  neque diam sed at, pede laoreet orci Potti, vel. In sagittis nulla augue
                  vitae et tempus torquent.</i></p>
            </div>
            <div class="singler_eview_part">
              <div class="client_info">
                <img src="{{url('front/img/client_2.png')}}" alt="">
                <h4>Mouunt Alezaber</h4>
                <p>Project manager</p>
              </div>
              <p><i>Enim a, scelerisque aliquet. Vivamus neque diam sed at, pede laoreet orci.
                  Potenti vel In sagittis nulla augue vitae et tempus torquent. Lacinia neque
                  mus taciti ante prsent at facilisis. Enim a, scelerisque aliquet. Vivamus
                  neque diam sed at, pede laoreet orci Potti, vel. In sagittis nulla augue
                  vitae et tempus torquent.</i></p>
            </div>
            <div class="singler_eview_part">
              <div class="client_info">
                <img src="{{url('front/img/client_1.png')}}" alt="">
                <h4>Mouunt Alezaber</h4>
                <p>Project manager</p>
              </div>
              <p><i>Enim a, scelerisque aliquet. Vivamus neque diam sed at, pede laoreet orci.
                  Potenti vel In sagittis nulla augue vitae et tempus torquent. Lacinia neque
                  mus taciti ante prsent at facilisis. Enim a, scelerisque aliquet. Vivamus
                  neque diam sed at, pede laoreet orci Potti, vel. In sagittis nulla augue
                  vitae et tempus torquent.</i></p>
            </div>
            <div class="singler_eview_part">
              <div class="client_info">
                <img src="{{url('front/img/client_2.png')}}" alt="">
                <h4>Mouunt Alezaber</h4>
                <p>Project manager</p>
              </div>
              <p><i>Enim a, scelerisque aliquet. Vivamus neque diam sed at, pede laoreet orci.
                  Potenti vel In sagittis nulla augue vitae et tempus torquent. Lacinia neque
                  mus taciti ante prsent at facilisis. Enim a, scelerisque aliquet. Vivamus
                  neque diam sed at, pede laoreet orci Potti, vel. In sagittis nulla augue
                  vitae et tempus torquent.</i></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--::review_part end::-->

  <!--::cta_part start::-->
  <div class="cta_part">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="cta_iner">
            <h1>Are You Ready For Move? </h1>
            <p>Lights had saw moving saw female blessed</p>
            <a href="#" class="cta_btn">Sing Up</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--::cta_part end::-->

  <!--::blog_part start::-->
  <div class="blog_part">
      <div class="container">
         <div class="row">
            <div class="col-sm-8 col-lg-5">
               <div class="section_tittle">
                  <h1>Featured Property</h1>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-6 col-lg-7">
               <div class="single_blog">
                  <div class="appartment_img">
                     <img src="{{url('front/img/Bodaiju-01.jpg')}}" alt="">
                  </div>
                  <div class="single_appartment_content">
                     <p><a href="#">Apartment</a> / March 20, 2019</p>
                     <a href="blog.php">
                        <h4>Doee lights without darkness that said
                           good deep years very.</h4>
                     </a>
                     <ul class="list-unstyled">
                        <li><a href=""> <span class="ti-comment"></span> </a> 2 comment</li>
                        <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-5">
               <div class="right_single_blog">
                  <div class="single_blog">
                     <div class="media">
                        <img src="{{url('front/img/blog-1.png')}}" class=" mr-3" alt="...">
                        <div class="media-body align-self-center">
                           <p><a href="#">home</a></p>
                           <a href="blog.php">
                              <h5 class="mt-0">Green very from for rule stars seasons</h5>
                           </a>
                           <ul class="list-unstyled">
                              <li><a href=""> <span class="ti-time"></span> </a> Mar 12</li>
                              <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="single_blog">
                     <div class="media">
                        <img src="{{url('front/img/blog-2.png')}}" class="mr-3" alt="...">
                        <div class="media-body align-self-center">
                           <p><a href="#">Apartment</a></p>
                           <a href="blog.php">
                              <h5 class="mt-0">Moveth wherein subdue of brought</h5>
                           </a>
                           <ul class="list-unstyled">
                              <li><a href=""> <span class="ti-time"></span> </a> Mar 12</li>
                              <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="single_blog">
                     <div class="media">
                        <img src="{{url('front/img/blog-3.png')}}" class="mr-3" alt="...">
                        <div class="media-body align-self-center">
                           <p><a href="blog.php">Apartment</a></p>
                           <a href="">
                              <h5 class="mt-0">Firmament heaven cant him night rule</h5>
                           </a>
                           <ul class="list-unstyled">
                              <li><a href=""> <span class="ti-time"></span> </a> Mar 12</li>
                              <li><a href=""> <span class="ti-heart"></span> </a> 0 like</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
  <!--::blog_part end::-->

@endsection