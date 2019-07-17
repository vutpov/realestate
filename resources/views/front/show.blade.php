@extends('front.layout')
@section('navbar','navbar-light scrolling-navbar')
@section('nav-collapse','background-color: white;')
@section('screen-resize','background-color:white;')
@section('search','color:#1e4eb0;')
@section('logo')
<img src="{{url('front/img/logo.png')}}" width="140" height="50" alt="">
@endsection

@section('content')
<!--Body-->
<div class="container text-white position-relative mt-n5 mb-5" style="margin-top:110px !important">

    <!--Block Top of Body-->
    <div class="row bg-dark rounded p-3">

        <!--Radio-->
        <div class="col-lg-12 pb-3">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" checked name="inlineRadioOptions" id="inlineRadio1"
                    value="option1">
                <label class="form-check-label text-white" for="inlineRadio1">BUY</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                    value="option1">
                <label class="form-check-label text-white" for="inlineRadio2">RENT</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                    value="option1">
                <label class="form-check-label text-white" for="inlineRadio3">BOTH</label>
            </div>
        </div>
        <!--Radio End-->


        <!--Search Sectionx-->
        <div class="col-lg-3">
            <div class="form-group">
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="form-group">
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <a class="btn btn-primary form-control" role="button" aria-pressed="true" href="search.html">
                    <i class="fas fa-search"></i>
                    &nbsp;Search
                </a>
            </div>
        </div>
        <!--Search Sectionx End-->
    </div>
    <!--Block Top of Body End-->


    <!--Data Middle of Body-->
    <div class="row mt-3 bg-light rounded">
        <div class="container">

            <!--Find by Category-->
            <div class="card-header bg-light text-dark">
                <strong>Find by category</strong>
                <a href="#" class="text-dark text-decoration-none float-right">
                    Show All
                </a>
            </div>
            <!--Find by Category End-->


            <!--List Category-->
            <div class="card-body">
                <div class="card-deck">

                    <!--Category One-->
                    <div class="card text-dark bg-info shadow">
                        <div class="card-header">House</div>
                        <img src="front/img/house.jpg" height="" alt="" class="card-img-top">
                        <div class="btn-group position-absolute" style="bottom:0;width:100%">
                            <a href="#" class="btn btn-secondary rounded-0" style="width:50%">Buy</a>
                            <a href="#" class="btn btn-secondary rounded-0" style="width:50%">Rent</a>
                        </div>
                    </div>
                    <!--Category One End-->

                    <!--Category One-->
                    <div class="card text-dark bg-info shadow">
                        <div class="card-header">BUILDING</div>
                        <img src="/front/img/building.jpg" height="" alt="" class="card-img-top">
                        <div class="btn-group position-absolute" style="bottom:0;width:100%">
                            <a href="#" class="btn btn-secondary rounded-0" style="width:50%">Buy</a>
                            <a href="#" class="btn btn-secondary rounded-0" style="width:50%">Rent</a>
                        </div>
                    </div>
                    <!--Category One End-->

                    <!--Category One-->
                    <div class="card text-dark bg-info shadow">
                        <div class="card-header">LAND</div>
                        <img src="/front/img/building.jpg" height="" alt="" class="card-img-top">
                        <div class="btn-group position-absolute" style="bottom:0;width:100%">
                            <a href="#" class="btn btn-secondary rounded-0" style="width:50%">Buy</a>
                            <a href="#" class="btn btn-secondary rounded-0" style="width:50%">Rent</a>
                        </div>
                    </div>
                    <!--Category One End-->

                </div>
            </div>
            <!--List Category End-->


            <!--Recently-->
            <div class="row p-3">
                <!-- Grid -->
                <div class="col-md-12 mt-5 mb-3">
                    <h1 class="text-dark">Our Recently post</h1>
                </div>

                <!--Card in Grid-->
                <div class="col-md-3 mb-4">
                    <div class="card border-0 bg-light scale_img" style="cursor: pointer;">
                        <div style="overflow:hidden">
                            <!-- Edit -->
                            <div id="loading1629" class="spinner-grow position-absolute"
                                style="right:0;width: 1.5rem; height: 1.5rem; z-index:1" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <img id="lazy1629"
                                src="http://franceaj-immo.com/uploaded/thumb_30124560_938010383030446_1472773985727365996_n (1)_5d24574fe6922.jpg"
                                height="150px" class="card-img-top rounded-0" style="z-index:3" alt="...">
                            <!-- Edit End-->
                        </div>

                        <div class="card-img-overlay">
                            <span class="badge badge-yellow">$ 105000 SALE</span>
                        </div>
                        <div class="card-body">
                            <span class="text-uppercase font-weight-bold">Condo for Sale</span>
                            <div>
                                <span class="badge badge-light"><i class="fas fa-bed"></i> 1 </span>
                                <span class="badge badge-light"><i class="fas fa-shower"></i> 1 </span>
                                <span class="badge badge-light">60</span>
                                <span class="text-muted badge badge-light text-uppercase"><i
                                        class="fas fa-map-marker-alt"></i> Sen Sok phnom penh</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-clock"></i> 4
                                    days ago</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-eye"></i>
                                    36</span>
                            </div>
                            <a href="http://franceaj-immo.com/v/condo/20724" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <!--Card in Grid End-->

                <div class="col-md-3 mb-4">
                    <div class="card border-0 bg-light scale_img" style="cursor: pointer;">
                        <div style="overflow:hidden">
                            <!-- edit -->
                            <div id="loading1628" class="spinner-grow position-absolute"
                                style="right:0;width: 1.5rem; height: 1.5rem; z-index:1" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <img id="lazy1628"
                                src="http://franceaj-immo.com/uploaded/thumb_photo_2019-06-26_15-06-54_5d244c397bea5.jpg"
                                height="150px" class="card-img-top rounded-0" style="z-index:3" alt="...">
                            <!-- edit -->
                        </div>

                        <div class="card-img-overlay">
                            <span class="badge badge-yellow">$ 1800 SALE</span>
                        </div>
                        <div class="card-body">
                            <span class="text-uppercase font-weight-bold">Condo for Sale</span>
                            <div>
                                <span class="badge badge-light"><i class="fas fa-bed"></i> 2 </span>
                                <span class="badge badge-light"><i class="fas fa-shower"></i> 2 </span>
                                <span class="badge badge-light">99.90</span>
                                <span class="text-muted badge badge-light text-uppercase"><i
                                        class="fas fa-map-marker-alt"></i> Sen Sok phnom penh</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-clock"></i> 4
                                    days ago</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-eye"></i>
                                    44</span>
                            </div>
                            <a href="http://franceaj-immo.com/v/condo/42151" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-0 bg-light scale_img" style="cursor: pointer;">
                        <div style="overflow:hidden">
                            <!-- edit -->
                            <div id="loading1627" class="spinner-grow position-absolute"
                                style="right:0;width: 1.5rem; height: 1.5rem; z-index:1" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <img id="lazy1627" src="http://franceaj-immo.com/uploaded/thumb_land_5d1eee8d7b5fa.png"
                                height="150px" class="card-img-top rounded-0" style="z-index:3" alt="...">
                            <!-- edit -->
                        </div>

                        <div class="card-img-overlay">
                            <span class="badge badge-yellow">$ 2700 SALE</span>
                        </div>
                        <div class="card-body">
                            <span class="text-uppercase font-weight-bold">Land for sale</span>
                            <div>
                                <span class="badge badge-light"><i class="fas fa-bed"></i> 0 </span>
                                <span class="badge badge-light"><i class="fas fa-shower"></i> 0 </span>
                                <span class="badge badge-light">16m x 30m</span>
                                <span class="text-muted badge badge-light text-uppercase"><i
                                        class="fas fa-map-marker-alt"></i> Tuol Kouk phnom penh</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-clock"></i> 1
                                    week ago</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-eye"></i>
                                    40</span>
                            </div>
                            <a href="http://franceaj-immo.com/v/land/32371" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-0 bg-light scale_img">
                        <div style="overflow:hidden">
                            <!-- edit -->
                            <div id="loading1626" class="spinner-grow position-absolute"
                                style="right:0;width: 1.5rem; height: 1.5rem; z-index:1" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <img id="lazy1626" src="http://franceaj-immo.com/uploaded/thumb_3_5d1c1c956a327.jpeg"
                                height="150px" class="card-img-top rounded-0" style="z-index:3" alt="...">
                            <!-- edit -->
                        </div>

                        <div class="card-img-overlay">
                            <span class="badge badge-yellow">$ 800000 SALE</span>
                        </div>
                        <div class="card-body">
                            <span class="text-uppercase font-weight-bold">House For Sale</span>
                            <div>
                                <span class="badge badge-light"><i class="fas fa-bed"></i> 10 </span>
                                <span class="badge badge-light"><i class="fas fa-shower"></i> 4 </span>
                                <span class="badge badge-light">234</span>
                                <span class="text-muted badge badge-light text-uppercase"><i
                                        class="fas fa-map-marker-alt"></i> Mean Chey phnom penh</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-clock"></i> 1
                                    week ago</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-eye"></i>
                                    40</span>
                            </div>
                            <a href="http://franceaj-immo.com/v/house/33175" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-0 bg-light scale_img" style="cursor: pointer;">
                        <div style="overflow:hidden">
                            <!-- edit -->
                            <div id="loading1625" class="spinner-grow position-absolute"
                                style="right:0;width: 1.5rem; height: 1.5rem; z-index:1" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <img id="lazy1625"
                                src="http://franceaj-immo.com/uploaded/thumb_WhatsApp Image 2019-06-28 at 2.48.22 PM_5d15c321c9e1a.jpeg"
                                height="150px" class="card-img-top rounded-0" style="z-index:3" alt="...">
                            <!-- edit -->
                        </div>

                        <div class="card-img-overlay">
                            <span class="badge badge-lg badge-yellow">$ 5000/<sub>MONTHLY</sub></span>
                        </div>
                        <div class="card-body">
                            <span class="text-uppercase font-weight-bold">House For Rent </span>
                            <div>
                                <span class="badge badge-light"><i class="fas fa-bed"></i> 8 </span>
                                <span class="badge badge-light"><i class="fas fa-shower"></i> 8 </span>
                                <span class="badge badge-light">11x16m</span>
                                <span class="text-muted badge badge-light text-uppercase"><i
                                        class="fas fa-map-marker-alt"></i> Ruessei Kaev phnom penh</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-clock"></i> 2
                                    weeks ago</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-eye"></i>
                                    25</span>
                            </div>
                            <a href="http://franceaj-immo.com/v/house/24355" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-0 bg-light scale_img" style="cursor: pointer;">
                        <div style="overflow:hidden">
                            <!-- edit -->
                            <div id="loading1623" class="spinner-grow position-absolute"
                                style="right:0;width: 1.5rem; height: 1.5rem; z-index:1" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <img id="lazy1623" src="http://franceaj-immo.com/uploaded/thumb_33_5d159abf47879.jpg"
                                height="150px" class="card-img-top rounded-0" style="z-index:3" alt="...">
                            <!-- edit -->
                        </div>

                        <div class="card-img-overlay">
                            <span class="badge badge-lg badge-yellow">$ 6000/<sub>MONTHLY</sub></span>
                        </div>
                        <div class="card-body">
                            <span class="text-uppercase font-weight-bold">House For Rent </span>
                            <div>
                                <span class="badge badge-light"><i class="fas fa-bed"></i> 0 </span>
                                <span class="badge badge-light"><i class="fas fa-shower"></i> 0 </span>
                                <span class="badge badge-light">12x18</span>
                                <span class="text-muted badge badge-light text-uppercase"><i
                                        class="fas fa-map-marker-alt"></i> Chamkar Mon phnom penh</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-clock"></i> 2
                                    weeks ago</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-eye"></i>
                                    45</span>
                            </div>
                            <a href="http://franceaj-immo.com/v/house/65789" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-0 bg-light scale_img">
                        <div style="overflow:hidden">
                            <!-- edit -->
                            <div id="loading1622" class="spinner-grow position-absolute"
                                style="right:0;width: 1.5rem; height: 1.5rem; z-index:1" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <img id="lazy1622" src="http://franceaj-immo.com/uploaded/thumb_44_5d159271819da.jpeg"
                                height="150px" class="card-img-top rounded-0" style="z-index:3" alt="...">
                            <!-- edit -->
                        </div>

                        <div class="card-img-overlay">
                            <span class="badge badge-lg badge-yellow">$ 3600/<sub>MONTHLY</sub></span>
                        </div>
                        <div class="card-body">
                            <span class="text-uppercase font-weight-bold">House For Rent </span>
                            <div>
                                <span class="badge badge-light"><i class="fas fa-bed"></i> 10 </span>
                                <span class="badge badge-light"><i class="fas fa-shower"></i> 10 </span>
                                <span class="badge badge-light">14x10m</span>
                                <span class="text-muted badge badge-light text-uppercase"><i
                                        class="fas fa-map-marker-alt"></i> Chamkar Mon phnom penh</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-clock"></i> 2
                                    weeks ago</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-eye"></i>
                                    39</span>
                            </div>
                            <a href="http://franceaj-immo.com/v/house/36863" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card border-0 bg-light scale_img">
                        <div style="overflow:hidden">
                            <!-- edit -->
                            <div id="loading1621" class="spinner-grow position-absolute"
                                style="right:0;width: 1.5rem; height: 1.5rem; z-index:1" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <img id="lazy1621" src="http://franceaj-immo.com/uploaded/thumb_11_5d14829a9c0ac.jpg"
                                height="150px" class="card-img-top rounded-0" style="z-index:3" alt="...">
                            <!-- edit -->
                        </div>

                        <div class="card-img-overlay">
                            <span class="badge badge-yellow">$ 750000 SALE</span>
                            <span class="badge badge-lg badge-yellow">$ 1500/<sub>MONTHLY</sub></span>
                        </div>
                        <div class="card-body">
                            <span class="text-uppercase font-weight-bold">House For Rent </span>
                            <div>
                                <span class="badge badge-light"><i class="fas fa-bed"></i> 17 </span>
                                <span class="badge badge-light"><i class="fas fa-shower"></i> 17 </span>
                                <span class="badge badge-light">8x22m</span>
                                <span class="text-muted badge badge-light text-uppercase"><i
                                        class="fas fa-map-marker-alt"></i> Mean Chey phnom penh</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-clock"></i> 2
                                    weeks ago</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-eye"></i>
                                    33</span>
                            </div>
                            <a href="http://franceaj-immo.com/v/house/68360" class="stretched-link"></a>
                        </div>
                    </div>
                </div>

            </div>
            <!--Recently End-->

        </div>
    </div>
    <!--Data Middle of Body End-->

</div>
<!--Body End-->
@endsection;