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
    <div class="row bg-light rounded p-3 mt-3 middle-wrapper">
        <div class="container">

            <!--Card Data include Advertisement-->
            <div class="row mr-3">
                <!--Card Data-->
                <div class="col-lg-9 text-muted">
                    <div class="card mt-3">

                        <div class="slide-container mb-5 my-lightSlide-container">
                            <ul id="lightSlider">
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
                                </li>
                                <li data-thumb="{{url('front/img/house.jpg')}}">
                                    <img src="{{url('front/img/house.jpg')}}" width="100%">
                                </li>
                                <li data-thumb="{{url('front/img/house.jpg')}}">
                                    <img src="{{url('front/img/house.jpg')}}" width="100%">
                                </li>
                            </ul>
                        </div>

                        <!--Text-->
                        <div class="bg-light mt-3 py-3 px-3">
                            <!--Price List -->
                            <div class="mb-3">
                                <div class="float-left">
                                    <div class="border d-inline p-2 mt-2">
                                        <span class="text-muted">Sale price</span>
                                        <span class="font-weight-bold"><i class="fas fa-dollar-sign"></i>
                                            105000</span>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            <!--End Price List -->


                            <!--End Location-->
                            <div class="">
                                <p class="font-weight-light text-capitalize">
                                    <i class="fas fa-map-marker-alt text-muted"></i>

                                    Phnom Penh Thmei,
                                    Sen Sok,
                                    phnom penh
                                </p>
                            </div>
                            <!--End Location-->

                            <!--Description-->
                            <div>
                                <div class="font-weight-bolder text-capitalize">
                                    <p>Condo for Sale in <span>Sen Sok</span></p>
                                </div>
                                <div>
                                    <p>A great opportunity to buy condominiums located on big roads, areas filled
                                        with supermarkets, international schools, hospitals, and more.</p>

                                    <p>There is a large car park, swimming pool, gym, steam, saunas, mini mart,
                                        coffee shop and a wide garden with more&nbsp;options</p>

                                    <p>Have One&nbsp;Bedrooms,One bathroom&nbsp;Size: 60m2 Sell price:
                                        $105,000-$165,000/unit</p>

                                    <p>Have Two&nbsp;Bedrooms, Two bathrooms Size: 120m2 Sell price:
                                        $218,000-$222,000/unit</p>

                                    <p>**** Free Offer&nbsp;</p>

                                    <p>kitchen appliances&nbsp;</p>

                                    <p>bathroom accessories</p>

                                    <p>Aircon compressor</p>

                                    <p>Parking</p>

                                    <p>ជាឱកាសដ៏ល្អមួយក្នុងការទិញខុនដូដែលមានទីតាំងស្ថិតនៅលើផ្លូវធំ ៗ
                                        តំបន់ដែលពោរពេញទៅដោយផ្សារទំនើប សាលាអន្តរជាតិ មន្ទីរពេទ្យ និង
                                        កន្លែងជាច្រើនទៀត។<br>
                                        មានកន្លែងចតឡានធំ អាងហែលទឹក បន្ទប់ហាត់ប្រាណ ចំហាយសូណាមីន ហាងកាហ្វេ និង
                                        សួនច្បារធំទូលាយដែលមានជម្រើសច្រើនថែមទៀត។</p>

                                    <p>មានបន្ទប់គេង១ បន្ទប់ទឹក១ ទំហំ ៦០ម៉ែត្រការ៉េ តម្លៃលក់ចាប់ពី ១០៥,០០០​ ដុល្លារ
                                        ដល់ ១៦៥,០០០​ ដុល្លារ ក្នុងមួយយូនីត</p>

                                    <p>មានបន្ទប់គេង២ បន្ទប់ទឹក២ ទំហំ ១២០ម៉ែត្រការ៉េ តម្លៃលក់ចាប់ពី ២១៨,០០០ ដុល្លារ
                                        ដល់ ២២២,០០០ ដុល្លារ ក្នុងមួយយូនីត</p>

                                    <p>ហ្រ្វីសំភារៈផ្ទះបាយ និង សំភារៈបន្ទប់ទឹក១ឈុត</p>

                                    <p>ហ្រ្វីម៉ាស៊ីនត្រជាក់</p>

                                    <p>ហ្រ្វីចំណតឡាន</p>

                                </div>
                            </div>
                            <!--End Description-->

                            <!--Property Information-->
                            <div>
                                <div class="row">
                                    <div class="col">
                                        <p class="font-weight-bolder text-capitalize">Information</p>
                                        <p><i class="fas fa-exclamation-circle"></i> ID : AJ9-Cs-S0006</p>
                                        <p><i class="far fa-square small"></i> size: 60</p>
                                        <p id="bedrooms"><i class="fas fa-bed small"></i> bedroom: 1</p>
                                        <p id="bathrooms"><i class="fas fa-syringe small"></i> bathroom: 1</p>
                                        <p><i class="far fa-eye small"></i> viewed: 88 times</p>
                                        <p><i class="fas fa-clock small"></i> listed: 1 week ago</p>
                                    </div>
                                    <div class="col">
                                        <p class="font-weight-bolder text-capitalize">Property Price Detail</p>
                                        <div class="">
                                            <div class="border p-2 mt-2">
                                                <span class="text-muted">Sale price</span>
                                                <span class="font-weight-bold"><i class="fas fa-dollar-sign"></i>
                                                    105000</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- End Property Information -->

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