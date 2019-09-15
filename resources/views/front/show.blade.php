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



<div class="container text-white position-relative mt-n5 mb-5" style="margin-top:110px !important">

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
    <div class="row bg-light rounded p-3 mt-3">
        <div class="container" id="tag_container">

            <!--pagination-->
            {{-- <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav> --}}
            <!--Pagination End-->


            <!--Card Data include Advertisement-->



            <div class="row mr-3">
                    {{-- <!--Advertisement-->
                    <div class="col-lg-3 text-muted" >
                        <div class="card mt-3 " style="margin-right: -40px;">
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
                    <!--Advertisement End--> --}}

                @foreach ($result as $row)
                <!--Card Data-->
                <div class="col-lg-9 text-muted">

                    <!--First Card-->
                    <a href="/show-result/show-detail/{{$row->propertyId}}" class="card mt-3">
                        <!--Head Data-->
                        <div class="card-header">
                            {{$row->propertyType}} For Sale
                        </div>
                        <!--Head Data End-->

                        <!--Body Data-->
                        <div class="card-body  p-0 position-relative">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Images -->
                                    <img src="{{asset('/storage/')}}/{{$row->image}}" class="card-img-top rounded-0"
                                        style="z-index:3" alt="..." height="200px">
                                </div>
                                <div class="col-md-8 ">
                                    <!--description-->
                                    <div class="position-relative ">
                                        <div id="listing-cat-price" class="p-1 mt-2">
                                            {{-- <h5 class="p-0">$ 700/<sub>MONTHLY</sub></h5> --}}
                                            <h5 class="p-0">$ {{$row->price}}/<sub>{{$row->propertyType}} Price</sub>
                                            </h5>
                                        </div>
                                        <div id="listing-size " class="p-1">
                                            <span class="text-muted"><i class="fas fa-vector-square"></i> 53</span>
                                        </div>

                                        <div class="p-1">
                                            <span class="text-muted"><i class="fas fa-bed"></i> 1 </span>
                                            <span class="text-muted"><i class="fas fa-shower"></i> 1 </span>
                                        </div>

                                        <div id="listing-location" class="p-1">
                                            <span class="text-muted text-uppercase"><i
                                                    class="fas fa-map-marker-alt"></i>House {{$row->no}} Street
                                                {{$row->st}} {{$row->location}}</span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--body data end-->


                        <!--foot data-->
                        <div class="card-footer p-1">
                            <div class="float-left text-muted small">
                                <div class="btn btn-sm text-muted">
                                    <i
                                        class="far fa-clock"></i>{{ Carbon\Carbon::parse($row->created_at)->format('d-m-Y ') }}
                                    <i class="far fa-eye"></i> 172 views
                                </div>
                            </div>
                            <div class="float-right">
                                <button aria-hidden="true" data-toggle="modal" data-backdrop="static"
                                    data-target="#call_card" class="btn btn-rouned-0 btn-sm btn-outline-success"><i
                                        class="fas fa-phone"></i> Call</button>
                                <button id="single_btn_message_id1565" aria-hidden="true" data-toggle="modal"
                                    data-backdrop="static" data-target="#email_card"
                                    class="btn btn-rouned-0 btn-sm  btn-outline-success"><i class="fas fa-envelope"></i>
                                    Email</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--Foot Data End-->
                    </a>
                    <!--First Card-->


                    <!--Other card-->
                    {{-- <a href="/show-result/show-detail" class="card mt-3">
                        <!--Head Data-->
                        <div class="card-header">
                            Land For Sale
                        </div>
                        <!--Head Data End-->
                        <!--Body Data-->
                        <div class="card-body  p-0 position-relative">
                            <div class="row">
                                <div class="col-md-4">
                                    <!-- Images -->
                                    <img src="front/img/house.jpg" class="img-fluid" style="z-index:3" alt="...">
                                </div>
                                <div class="col-md-8 ">
                                    <!--description-->
                                    <div class="position-relative ">
                                        <div id="listing-cat-price" class="p-1 mt-2">
                                            <h5 class="p-0">$ 700/<sub>MONTHLY</sub></h5>
                                        </div>
                                        <div id="listing-size " class="p-1">
                                            <span class="text-muted"><i class="fas fa-vector-square"></i> 53</span>
                                        </div>
                                        <div class="p-1">
                                            <span class="text-muted"><i class="fas fa-bed"></i> 1 </span>
                                            <span class="text-muted"><i class="fas fa-shower"></i> 1 </span>
                                        </div>
                                        <div id="listing-location" class="p-1">
                                            <span class="text-muted text-uppercase"><i
                                                    class="fas fa-map-marker-alt"></i> Doun Penh phnom penh</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--body data end-->
                        <!--foot data-->
                        <div class="card-footer p-1">
                            <div class="float-left text-muted small">
                                <div class="btn btn-sm text-muted">
                                    <i class="far fa-clock"></i> 1 month ago
                                    <i class="far fa-eye"></i> 172 views
                                </div>
                            </div>
                            <div class="float-right">
                                <button aria-hidden="true" data-toggle="modal" data-backdrop="static"
                                    data-target="#call_card" class="btn btn-rouned-0 btn-sm btn-outline-success"><i
                                        class="fas fa-phone"></i> Call</button>
                                <button id="single_btn_message_id1565" aria-hidden="true" data-toggle="modal"
                                    data-backdrop="static" data-target="#email_card"
                                    class="btn btn-rouned-0 btn-sm  btn-outline-success"><i class="fas fa-envelope"></i>
                                    Email</button>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!--Foot Data End-->
                    </a> --}}
                    <!--Other card end-->
                </div>
                <!--Card Data End-->

                @endforeach

            </div>
            <!--Card Data include Advertisement End-->

            <!--Pagination B-->
            <div class="pt3 mt-3">
                <span> {{$result->appends(request()->input())->links()}}</span>
            </div>
            <!--Pagination B End-->

        </div>
    </div>
    <!--Data Middle of Body End-->

</div>
{{-- <script type="text/javascript">
    $(window).on('hashchange', function() {
        if (window.location.hash) {
            var page = window.location.hash.replace('#', '');
            if (page == Number.NaN || page <= 0) {
                return false;
            }else{
                getData(page);
            }
        }
    });
    $(document).ready(function()
    {
        $(document).on('click', '.pagination a',function(event)
        {
            event.preventDefault();
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
            var myurl = $(this).attr('href');
            var page=$(this).attr('href').split('page=')[1];
            getData(page);
        });
    });
    function getData(page){
        $.ajax(
        {
            url: '?page=' + page,
            type: "get",
            datatype: "html"
        }).done(function(data){
            $("#tag_container").empty().html(data);
            location.hash = page;
        }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
        });
    }
</script> --}}
<!--Body End-->
@endsection;
