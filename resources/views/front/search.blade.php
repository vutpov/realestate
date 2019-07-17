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
                <a class="btn btn-primary form-control" role="button" aria-pressed="true" href="/show-result">
                    <i class="fas fa-search"></i>
                    &nbsp;Search
                </a>
            </div>
        </div>
        <!--Search Sectionx End-->
    </div>
    <!--Block Top of Body End-->


    <!--Data Middle of Body-->
    <div class="row bg-light rounded p-3 mt-3">
        <div class="container">

            <!--pagination-->
            <nav aria-label="Page navigation example">
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
            </nav>
            <!--Pagination End-->


            <!--Card Data include Advertisement-->
            <div class="row mr-3">
                <!--Card Data-->
                <div class="col-lg-9 text-muted">

                    <!--First Card-->
                    <div class="card mt-3">
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
                    </div>
                    <!--First Card-->


                    <!--Other card-->
                    <div class="card mt-3">
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
                    </div>
                    <!--Other card end-->
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

            <!--Pagination B-->
            <div class="pt3 mt-3">
                <nav aria-label="Page navigation example">
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
                </nav>
            </div>
            <!--Pagination B End-->

        </div>
    </div>
    <!--Data Middle of Body End-->

</div>
<!--Body End-->
@endsection;