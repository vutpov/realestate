@extends('front.layout')
@section('navbar','navbar-light scrolling-navbar')
@section('nav-collapse','background-color: white;')
@section('screen-resize','background-color:white;')
@section('search','color:#1e4eb0;')
@section('logo')
<img src="{{url('front/img/logo.png')}}" width="100" alt="">
@endsection
<!-- jQuery library -->
@section('content')
<!--Body-->
<div class="container text-white position-relative mt-n5 mb-5" style="margin-top:110px !important">

    <form action="/show-result" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <!--Block Top of Body-->
        <div class="row bg-dark rounded p-3  ">

            <div class="col-md-3 col-sm-3 col-xs-3 ">
                <div class="form-group">
                    <label for="city">City</label>
                    <select class="form-control" name="cityname" id="city_id">
                        <option value="" selected="selected">-- Selected --</option>
                        @foreach ($citys as $key => $value)
                        <option value="{{  $value }}">
                            {{ $value }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">

                    <label for="purpose">Purpose</label>
                    <select class="form-control" name="purposename" id="purpose_id">
                        <option value="" selected="selected">-- Selected --</option>
                        @foreach ($ptype as $key => $value)
                        <option value="{{  $value }}"> {{ $value }}
                        </option>
                        @endforeach

                    </select>
                </div>


            </div>
            <!-- break -->
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                    <label for="type">Property Type</label>
                    <select class="form-control" name="typename" id="type_id">
                        <option value="" selected="selected">-- Selected --</option>
                        <option value="apartment">Apartment</option>
                        <option value="apartment">Serviced Apartment</option>
                        <option value="condominium">Condo</option>
                        <option value="house">House</option>
                        <option value="land">Land</option>
                        <option value="new build land, new development">New Build</option>
                        <option value="penthouse">Penthouse</option>
                        <option value="investment, land">Villa</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="bedroom">Bedroom</label>
                    <select class="form-control" name="bedrom" id="bedroom_id">
                        <option value="" selected="selected">-- Selected --</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>
                </div>

            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group">
                    <label for="maxprice">Max Price</label>
                    <input type="number" name="max_price" class="form-control" placeholder="800000" required>
                </div>
                <div class="form-group">
                    <label for="minprice">Min Price</label>
                    <input type="number" name="min_price" class="form-control" placeholder="20000" required>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3">
                <label for="area">All Area</label>
                <select name="area" class="form-control" id="areaid">
                    <option value="" selected="selected">-- Selected --</option>
                    <option value="Banteay Meanchey">Banteay Meanchey</option>
                    <option value="Battambang">Battambang</option>
                    <option value="BKK 1">BKK 1</option>
                    <option value="BKK 2 & 3">BKK 2 & 3</option>
                    <option value="Boeung Trabek">Boeung Trabek</option>
                    <option value="Boeung Tumpun">Boeung Tumpun</option>
                    <option value="Chong Khneas">Chong Khneas</option>
                    <option value="Chreav">Chreav</option>
                    <option value="Chroy Changva">Chroy Changva</option>
                    <option value="Greater Phnom Penh">Greater Phnom Penh</option>
                    <option value="Kampong Cham">Kampong Cham</option>
                    <option value="Kampong Speu">Kampong Speu</option>
                    <option value="Kampong Thom">Kampong Thom</option>
                    <option value="Kampot">Kampot</option>
                    <option value="Kandal">Kandal</option>
                    <option value="Kep">Kep</option>
                    <option value="Koh Kong">Koh Kong</option>
                    <option value="Kouk Chak">Kouk Chak</option>
                    <option value="Kratie">Kratie</option>
                    <option value="Mittapheap">Mittapheap</option>
                    <option value="Night Market Area">Night Market Area</option>
                    <option value="Nokor Thum">Nokor Thum</option>
                    <option value="Old Market / Pub Street">Old Market / Pub Street</option>
                    <option value="Olympic Stadium">Olympic Stadium</option>
                    <option value="Phsar Daeum Thkov">Phsar Daeum Thkov</option>
                    <option value="Phsar Kandal">Phsar Kandal</option>
                    <option value="Prey Nob">Prey Nob</option>
                    <option value="Riverside and Central Market">Riverside and Central Market</option>
                    <option value="Russian Market (Toul Tom Poung)">Russian Market (Toul Tom Poung)</option>
                    <option value="Sala Kamreuk">Sala Kamreuk</option>
                    <option value="Sambour">Sambour</option>
                    <option value="Slor Kram">Slor Kram</option>
                    <option value="Sra Ngae">Sra Ngae</option>
                    <option value="Stueng Hav">Stueng Hav</option>
                    <option value="Svay Dong Kom">Svay Dong Kom</option>
                    <option value="Takeo">Takeo</option>
                    <option value="Tonle Bassac">Tonle Bassac</option>
                    <option value="Toul Kork">Toul Kork</option>
                    <option value="Toul Svay Prey 1">Toul Svay Prey 1</option>
                    <option value="Toul Svay Prey 2">Toul Svay Prey 2</option>
                    <option value="Wat Bo">Wat Bo</option>
                    <option value="Wat Damnak">Wat Damnak</option>
                    <option value="Wat Phnom">Wat Phnom</option>
                </select>
                <div class="col-md-3 col-sm-3 col-xs-3">
                <div class="form-group" style="margin-top: 40px; margin-left: -25px ; ">
                    {{-- <a class="btn btn-primary form-control" role="button" aria-pressed="true" href="/show-result"> --}}
                    <button type="submit" class="btn btn-blue" id="search" style="width: 450%;" >
                        <i class="fas fa-search">Search</i></button>
                </div>
            </div>
            </div>

            <!--Search Sectionx End-->
        </div>
        <!--Block Top of Body End-->
    </form>


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
                @foreach($t as $row)
                <div class="col-md-3 mb-4">


                    <div class="card border-0 bg-light scale_img" style="cursor: pointer;">
                        <div style="overflow:hidden">
                            <!-- Edit -->
                            <div id="loading1629" class="spinner-grow position-absolute"
                                style="right:0;width: 1.5rem; height: 1.5rem; z-index:1" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                            <img id="lazy1629" src="{{asset('/storage/img')}}/{{$row->image}}" height="150px"
                                class="card-img-top rounded-0" style="z-index:3" alt="...">

                            <!-- Edit End-->
                        </div>

                        <div class="card-img-overlay">
                            <span class="badge badge-yellow">$ {{$row->price}} SALE</span>
                        </div>
                        <div class="card-body">
                            <span class="text-uppercase font-weight-bold">Condo for {{$row->propertyType}}</span>
                            <div>
                                <span class="badge badge-light"><i class="fas fa-bed"></i> 1 </span>
                                <span class="badge badge-light"><i class="fas fa-shower"></i> 1 </span>
                                <span class="badge badge-light">60</span>
                                <span class="text-muted badge badge-light text-uppercase"><i
                                        class="fas fa-map-marker-alt"></i> {{$row->location}}</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-clock"></i> 4
                                    days ago</span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-eye"></i>
                                    36</span>
                            </div>

                            <a href="/show-result/show-detail/{{$row->propertyId}}" class="stretched-link"></a>
                        </div>
                    </div>


                </div>
                @endforeach
                <!--Card in Grid End-->

             {{--   <div class="col-md-3 mb-4">
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
                                    week ago
                                </span>
                                <span class="text-muted badge badge-light text-uppercase"><i class="fas fa-eye"></i>
                                    40
                                </span>
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
                </div> --}}

            </div>
            <!--Recently End-->

        </div>
    </div>
    <!--Data Middle of Body End-->

</div>
{{-- <script>
    $(document).ready(function($){
        $.get('/exploress', function(data) {
          //  let teacher_nation_id = $('#city_id').val();
            var nations = $('#purpose_id');
          //  nations.empty();

            $.each(data, function(key, value) {
                nations.append("<option value='"+ key +"'>" + value + "</option>");
            });

        //    nations.val(teacher_nation_id); // This will select the default value
        });
    }); --}}
{{-- </script>
<script type="text/javascript">
    $(document).ready(function() {
            $('#city_id').on('change', function() {
                var stateID = $(this).val();
                if(stateID) {
                    $.ajax({
                        url: '/myform/ajax/'+stateID,
                        type: "GET",
                        dataType: "json",
                        success:function(data) {


                            $('$purpose_id').empty();
                            $.each(data, function(key, value) {
                                $('$purpose_id').append('<option value="'+ key +'">'+ value +'</option>');
                            });


                        }
                    });
                }else{
                    $('$purpose_id').empty();
                }
            });
        });
</script>
<!--Body End-->
<script type="javascript">
    $(document).ready(function() {
            $('.mdb-select').materialSelect();
        });
    </script> --}}
@endsection;
