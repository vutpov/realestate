@extends('front.layout')
@section('navbar','navbar-light scrolling-navbar')
@section('nav-collapse','background-color: white;')
@section('screen-resize','background-color:white;')
@section('search','color:#1e4eb0;')
@section('logo')
<img src="{{url('front/img/logo.png')}}" width="100" alt="">
@endsection

@section('content')





<!--Body-->
<div class="container text-white position-relative mt-n5 mb-5" style="margin-top:135px !important">

    <form action="/show-result" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <!--Block Top of Body-->
        <span><label  name="statusone" value="1"></label></span>
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
                        <button type="submit" class="btn btn-blue" id="search" name="search" value="1" style="width: 450%;">
                            <i class="fas fa-search">Search</i></button>
                    </div>
                </div>
            </div>

            <!--Search Sectionx End-->
        </div>
        <!--Block Top of Body End-->
    </form>


    <!--Data Middle of Body-->
    <div class="row bg-light rounded p-3 mt-3 middle-wrapper">

        <div class="container">

            <!--Card Data include Advertisement-->
            <div class="row mr-3">
                <!--Card Data-->

                <div class="col-lg-9 text-muted">

                    <div class="card mt-3">

                        <div class="slide-container mb-5 my-lightSlide-container">

                            <ul id="lightSlider">
                                @foreach($t as $row)
                                <li data-thumb="{{asset('/storage/')}}/{{$row->image}}">
                                    <img src="{{asset('/storage/')}}/{{$row->image}}" height="300px" width="100%">
                                </li>
                                @endforeach
                                {{-- <li data-thumb="{{url('front/img/house.jpg')}}">
                                <img src="{{url('front/img/house.jpg')}}" width="100%">
                                </li>
                                <li data-thumb="{{url('front/img/house.jpg')}}">
                                    <img src="{{url('front/img/house.jpg')}}" width="100%">
                                </li>
                                <li data-thumb="{{url('front/img/house.jpg')}}">
                                    <img src="{{url('front/img/house.jpg')}}" width="100%">
                                </li>
                                <li data-thumb="{{url('front/img/house.jpg')}}">
                                    <img src="{{url('front/img/house.jpg')}}" width="100%">
                                </li>
                                <li data-thumb="{{url('front/img/house.jpg')}}">
                                    <img src="{{url('front/img/house.jpg')}}" width="100%">
                                </li>
                                <li data-thumb="{{url('front/img/house.jpg')}}">
                                    <img src="{{url('front/img/house.jpg')}}" width="100%">
                                </li>
                                <li data-thumb="{{url('front/img/house.jpg')}}">
                                    <img src="{{url('front/img/house.jpg')}}" width="100%">
                                </li> --}}
                            </ul>

                        </div>

                        <!--Text-->
                        @foreach ($information as $item)
                        <div class="bg-light mt-3 py-3 px-3">
                            <!--Price List -->
                            <div class="mb-3">
                                <div class="float-left">
                                    <div class="border d-inline p-2 mt-2">
                                        <span class="text-muted">
                                            {{$item->propertyType}} price</span>
                                        <span class="font-weight-bold">
                                            <i class="fas fa-dollar-sign"></i>
                                            {{$item->price}}
                                        </span>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <!--End Price List -->


                            <!--End Location-->
                            <div class="">
                                <p class="font-weight-light text-capitalize">
                                    <i class="fas fa-map-marker-alt text-muted"></i>

                                    {{-- Phnom Penh Thmei,
                                    Sen Sok,
                                    phnom penh --}}
                                    {{$item->location}}
                                </p>
                            </div>
                            <!--End Location-->

                            <!--Description-->
                            <div>
                                {{-- <div class="font-weight-bolder text-capitalize">
                                    <p>Condo for Sale in <span>Sen Sok</span></p>
                                </div> --}}
                                {{-- //description --}}

                                <p>{{$item->description}}</p>


                            </div>


                            <!--End Description-->

                            <!--Property Information-->
                            <div>
                                <div class="row">
                                    <div class="col">
                                        <p class="font-weight-bolder text-capitalize">Information</p>
                                        {{-- AJ9-Cs-S0006 --}}
                                        <p><i class="fas fa-exclamation-circle"></i> ID : {{$item->propertyCode}}</p>
                                        <p><i class="far fa-square small"></i> size: {{$item->unit}}</p>
                                        <p id="bedrooms"><i class="fas fa-bed small"></i> bedroom & bathroom:
                                            {{$item->propAttribute}}

                                        </p>
                                        {{-- <p id="bathrooms"><i class="fas fa-syringe small"></i> bathroom: 1</p> --}}
                                        <p><i class="far fa-eye small"></i> viewed: 88 times</p>
                                        <p><i class="fas fa-clock small"></i> listed: 1 week ago</p>
                                    </div>
                                    <div class="col">
                                        <p class="font-weight-bolder text-capitalize">Property Price Detail</p>
                                        <div class="">
                                            <div class="border p-2 mt-2">
                                                <span class="text-muted">Sale price</span>
                                                <span class="font-weight-bold"><i class="fas fa-dollar-sign"></i>
                                                    {{$item->price}}</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End Property Information -->
                            @endforeach
                        </div>
                        <!--Text End-->

                    </div>

                </div>

                <!--Card Data End-->


                <!--Advertisement-->
                <div class="col-lg-3 text-muted">
                    <div class="card mt-3">
                        <div class="card-header">
                            <p class="display-5 mb-0 text-uppercase">Advertisement</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content.
                            </p>
                        </div>
                    </div>
                </div>
                <!--Advertisement End-->

            </div>
            <!--Card Data include Advertisement End-->

        </div>

    </div>
    <!--Data Middle of Body End-->

</div>
<!--Body End-->


@endsection
