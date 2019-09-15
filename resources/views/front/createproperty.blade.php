<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="google-site-verification" content="Vj3nFdA-uZGZFOP3ZajI-jYDUUPyNZL-EMAE5WbY94A" />
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="https://www.khmer24.com/khmer24-crm-18/template/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Hanuman" rel="stylesheet">
    <!--[if lt IE 9]>
           <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <![endif]-->
    <title>Post an Ad - Khmer24.com</title>
    <script type="text/javascript" src="https://www.khmer24.com/khmer24-crm-18/template/js/jquery-3.3.1.min.js">
    </script>
    <script type="text/javascript" src="https://www.khmer24.com/khmer24-crm-18/template/js/main.js"></script>
    <script type="text/javascript" src="https://www.khmer24.com/khmer24-crm-18/template/js/popper.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://www.khmer24.com/khmer24-crm-18/template/plugin/bootstrap-4.1.3/css/bootstrap.min.css">
    <script type="text/javascript"
        src="https://www.khmer24.com/khmer24-crm-18/template/plugin/bootstrap-4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://www.khmer24.com/khmer24-crm-18/template/css/main.css">
    <link rel="stylesheet" type="text/css"
        href="https://www.khmer24.com/khmer24-crm-18/template/plugin/custom-icon-fonts/style.css">
    <link href="https://unpkg.com/ionicons@4.3.0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="alternate" media="only screen and (max-width: 640px)"
        href="https://m.khmer24.com/en/post.html?category=76">
    <link rel="alternate" href="https://www.khmer24.com/post.html?category=76" hreflang="x-default" />
    <link rel="alternate" href="https://www.khmer24.com/en/post.html?category=76" hreflang="en" />
    <link rel="alternate" href="https://www.khmer24.com/km/post.html?category=76" hreflang="km" />
    <link href="https://www.khmer24.com/khmer24-crm-18/template/css/post.css" rel="stylesheet">
    <script src="https://www.khmer24.com/khmer24-crm-18/template/plugin/plupload-2.1.8/plupload.full.min.js"></script>
    <script src="https://www.khmer24.com/khmer24-crm-18/template/js/jquery.chained.js"></script>
    <script src="https://www.khmer24.com/khmer24-crm-18/template/js/jquery.validate.min.js"></script>
    <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
    <script>
        var googletag = googletag || {};
           googletag.cmd = googletag.cmd || [];
    </script>

    <script type="application/ld+json">
        {
                 "@context" : "http://schema.org",
                 "@type" : "Organization",
                 "url" : "https://www.khmer24.com/",
                 "logo" : "https://www.khmer24.com/khmer24-crm-18/template/img/khmer24.gif",
                 "contactPoint" : [{
                 "@type" : "ContactPoint",
                 "telephone" : "+855 93 724724",
                 "contactType" : "customer service"
             }],
             "sameAs" : [
             "https://www.facebook.com/khmer24",,
             "https://www.instagram.com/khmer24website",
             "https://www.plus.google.com/khmer24"
             ]
         }
    </script>

    <script type="text/javascript">
        _atrk_opts = { atrk_acct:"hTfpn1a4KM10Y8", domain:"khmer24.com",dynamic: true};
         (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    </script>
    <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=hTfpn1a4KM10Y8" style="display:none"
            height="1" width="1" alt="" /></noscript>

    <script type="text/javascript">
        $('document').ready(function(){

                 var base_url = 'https://www.khmer24.com/';

                                 // var myVar = setInterval(function(){ if(show_notification==false) { myTimer() } }, 30000);

                 var not_loading = false;
                 var last_id = 0;
                 var first_id = 0;
                 var loadmore = true;
                 var is_loading_notification = false;

                 function myTimer(scroll=false) {

                     if(is_loading_notification==true) {
                         return;
                     }
                     is_loading_notification = true;

                     not_loading = true;

                     var submitData = {};
                     submitData['csrf_test_name'] = '1422a057f63eae10fe8d86e632e28001';

                     $.post(base_url+'notification/get',submitData,function(result){
                         if(result.status==1 || result.status=='1') {

                             if(parseInt(result.data.total_unread)>0) {
                                 $('#notification-badge').text(result.data.total_unread);
                                 $('#notification-badge').removeClass('d-none');
                             } else {
                                 $('#notification-badge').addClass('d-none');
                             }
                             not_loading = false;

                         } else {

                         }
                         is_loading_notification = false;
                     },'json');
                 }
                 myTimer();

                 function myStopFunction() {
                     clearInterval(myVar);
                 }



         });
    </script>
    <style type="text/css">
        body {
            min-width: 1500px;
        }
    </style>
</head>

<body>

    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=217361691621555&version=v2.0";
         fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));
    </script>


    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
       (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
       m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
       })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
       ga('create', 'UA-9169607-2', 'auto');
       ga('send', 'pageview');
    </script>

    <header id="header" class="bg-white border-bottom">
        <div class="my-container header-content">
            <nav class="navbar row">
                <a href="https://www.khmer24.com/en/" class="navbar-brand"><img
                        src="https://www.khmer24.com/khmer24-crm-18/template/img/khmer24.gif" alt="Khmer24"></a>
                <ul class="nav mr-auto left-nav">
                    <li class="nav-item">
                        <a class="nav-link disabled btn-change-lang"
                            href="https://www.khmer24.com/km/post.html?category=76"><span
                                class="icon khmer-flage"></span></a>
                    </li>
                </ul>
                <ul class="nav nav-pills justify-content-end right-nav">
                    <li class="nav-item nav-item-login">
                        <a class="nav-link" href="https://www.khmer24.com/en/notifications"><span
                                class="icon icon-notification-fill"></span><span id="notification-badge"
                                class="badge badge-pill badge-danger d-none">0</span></a>
                    </li>

                    <li class="nav-item nav-item-login nav-user-photo ">
                        <div class="dropdown">

                            <a class="nav-link" href="https://www.khmer24.com/en/posts" id="dropdownUserMenu"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                    class="icon icon-user-photo"><img class="img-cover"
                                        src="https://www.khmer24.com/khmer24-crm-18/template/img/user.png"></span></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownUserMenu">
                                <small class="text-secondary pl-3">Your Pages:</small>
                                <div class="list-pages">
                                    <a class="dropdown-item"
                                        href="https://www.khmer24.com/en/business-dashboard-372358"><span
                                            class="icon-logo"><img class="img-cover"
                                                src="https://www.khmer24.com/khmer24-crm-18/template/img/image-placeholder.png"></span>
                                        Unknow </a> </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="https://www.khmer24.com/en/post"
                                    title="POST FREE AD"><span class="icon-plus-full"></span> POST FREE AD</a>
                                <a class="dropdown-item" href="https://www.khmer24.com/en/manage-ads.html"
                                    title="My Ads"><span class="icon-folder"></span> My Ads</a>
                                <a class="dropdown-item" href="https://www.khmer24.com/en/likes.html"
                                    title="Likes"><span class="icon-like"></span> Likes</a>
                                <a class="dropdown-item" href="https://www.khmer24.com/en/setting.html"
                                    title="Setting"><span class="icon-setting-outline"></span> Setting</a>
                                <a class="dropdown-item" href="https://www.khmer24.com/en/logout.html"
                                    title="Log out"><span class="icon-off"></span> Log out</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item ml-2">
                        <a class="nav-link btn-post btn-warning long-text" href="https://www.khmer24.com/en/post">POST
                            FREE AD</a>
                        <a class="nav-link btn-post btn-warning short-text"
                            href="https://www.khmer24.com/en/post">POST</a>
                    </li>
                </ul>
            </nav>
            <div id="header-search">
                <form class="form-inline form-mini-search p-0 pb-2 mr-auto" action="https://www.khmer24.com/en/search"
                    method="get">
                    <input class="form-control col-12 pr-4 input-keyword" type="search"
                        placeholder="What are you looking for..." aria-label="What are you looking for..." value=""
                        name="q">
                    <select name="category" class="form-control select-category">
                        <option value="">All Category</option>
                        <option value="mobile-phones-tablets" class="main">Phones & Tablets</option>
                        <option value="phones-tablets" class="child">Phones, Tablets</option>
                        <option value="smart-watches" class="child">Smart Watches</option>
                        <option value="phone-accessories" class="child">Phone Accessories</option>
                        <option value="phone-numbers" class="child">Phone Numbers</option>
                        <option value="computer-and-accessories" class="main">Computers & Accessories</option>
                        <option value="computers" class="child">Computers</option>
                        <option value="computer-accessories" class="child">Computer accessories</option>
                        <option value="softwares" class="child">Softwares</option>
                        <option value="electronics-appliances" class="main">Electronics & Appliances</option>
                        <option value="consumer-electronics" class="child">Consumer Electronics</option>
                        <option value="security-camera" class="child">Security Camera</option>
                        <option value="cameras-camcorders" class="child">Cameras, camcorders</option>
                        <option value="tvs-videos-and-audios" class="child">TVs, Videos and Audios</option>
                        <option value="home-appliances" class="child">Home appliances </option>
                        <option value="video-games-consoles-toys" class="child">Video games, consoles, toys </option>
                        <option value="cars-and-vehicles" class="main">Cars and Vehicles</option>
                        <option value="cars-for-sale" class="child">Cars for Sale</option>
                        <option value="bicycles" class="child">Bicycles</option>
                        <option value="motorcycles-for-sale" class="child">Motorcycles for Sale</option>
                        <option value="vehicles-for-rent" class="child"> Vehicles for Rent</option>
                        <option value="car-maintenance-repair" class="child">Car Maintenance & Repair</option>
                        <option value="lorries-vans" class="child">Lorries & Vans</option>
                        <option value="financing-insurance" class="child">Financing & Insurance</option>
                        <option value="car-parts-accessories" class="child">Car Parts & Accessories</option>
                        <option value="others-vihicles" class="child">Others</option>
                        <option value="property-housing-rentals" class="main">House & Lands</option>
                        <option value="house-for-sale" class="child">House for Sale</option>
                        <option value="house-for-rent" class="child">House for Rent</option>
                        <option value="apartment-for-sale" class="child">Apartment for Sale</option>
                        <option value="apartment-for-rent" class="child">Apartment for Rent</option>
                        <option value="landed-properties-for-sale" class="child">Land for Sale</option>
                        <option value="landed-properties-for-rent" class="child">Landed Properties for Rent</option>
                        <option value="commercial-properties-for-sale" class="child">Commercial for Sale</option>
                        <option value="commercial-properties-for-rent" class="child">Commercial for Rent</option>
                        <option value="room-for-rent" class="child">Room for Rent</option>
                        <option value="properties-wanted" class="child">Properties Wanted</option>
                        <option value="agent-services" class="child">Agent Services</option>
                        <option value="others-properties" class="child">Others</option>
                        <option value="jobs" class="main">Jobs</option>
                        <option value="jobs-accounting" class="child">Accounting</option>
                        <option value="jobs-administration" class="child">Administration</option>
                        <option value="jobs-architecture-engineering" class="child">Architecture/Engineering</option>
                        <option value="jobs-assistant-secretary" class="child">Assistant/Secretary</option>
                        <option value="jobs-audit-taxation" class="child">Audit/Taxation</option>
                        <option value="jobs-banking-insurance" class="child">Banking/Insurance</option>
                        <option value="jobs-cashier-receptionist" class="child">Cashier/Receptionist</option>
                        <option value="jobs-catering-restaurant" class="child">Catering/Restaurant</option>
                        <option value="jobs-cleaner-maid" class="child">Cleaner/Maid</option>
                        <option value="jobs-consultancy" class="child">Consultancy</option>
                        <option value="jobs-customer-service" class="child">Customer Service</option>
                        <option value="jobs-design" class="child">Design</option>
                        <option value="jobs-education-training" class="child">Education/Training</option>
                        <option value="jobs-finance" class="child">Finance</option>
                        <option value="jobs-freight-shipping-delivery-warehouse" class="child">Freight/Shipping
                            /Delivery/Warehouse</option>
                        <option value="jobs-hotel-hospitality" class="child">Hotel/Hospitality</option>
                        <option value="jobs-human-resource" class="child">Human Resource</option>
                        <option value="jobs-information-technology" class="child">Information Technology</option>
                        <option value="jobs-lawyer-legal-service" class="child">Lawyer/Legal Service</option>
                        <option value="jobs-management" class="child">Management</option>
                        <option value="jobs-manufacturing" class="child">Manufacturing</option>
                        <option value="jobs-marketing" class="child">Marketing</option>
                        <option value="jobs-media-advertising" class="child">Media/Advertising</option>
                        <option value="jobs-medical-health-nursing" class="child">Medical/Health/Nursing</option>
                        <option value="jobs-merchandising-purchasing" class="child">Merchandising/Purchasing</option>
                        <option value="jobs-operations" class="child">Operations</option>
                        <option value="jobs-project-management" class="child">Project Management</option>
                        <option value="jobs-quality-control" class="child">Quality Control</option>
                        <option value="jobs-resort-casino" class="child">Resort/Casino</option>
                        <option value="jobs-sales" class="child">Sales</option>
                        <option value="jobs-security-driver" class="child">Security/Driver</option>
                        <option value="jobs-technician" class="child">Technician</option>
                        <option value="jobs-telecommunication" class="child">Telecommunication</option>
                        <option value="jobs-translation-interpretation" class="child">Translation/Interpretation
                        </option>
                        <option value="jobs-travel-agent-ticket-sales" class="child">Travel Agent/Ticket Sales</option>
                        <option value="jobs-others" class="child">Others</option>
                        <option value="services" class="main">Services</option>
                        <option value="accounting" class="child">Accounting</option>
                        <option value="automotive" class="child">Automotive</option>
                        <option value="advertising-media" class="child">Advertising & Media</option>
                        <option value="bridal-services" class="child">Bridal Services</option>
                        <option value="cleaning-maid-services" class="child">Cleaning & Maid Services</option>
                        <option value="construction-arch.-interiors" class="child">Construction, Arch. & Interiors
                        </option>
                        <option value="education-training" class="child">Education & Training</option>
                        <option value="engineering" class="child">Engineering</option>
                        <option value="insurance" class="child">Insurance</option>
                        <option value="massage-spa" class="child">Massage & Spa</option>
                        <option value="hospitality-travel-tourism" class="child">Hospitality, Travel & Tourism</option>
                        <option value="health-medical-pharma" class="child">Health, Medical & Pharma</option>
                        <option value="it-telecom" class="child">IT & Telecom</option>
                        <option value="interior-design-renovation" class="child">Interior Design & Renovation</option>
                        <option value="legal" class="child">Legal</option>
                        <option value="movers-logistics" class="child">Movers & Logistics</option>
                        <option value="plumbing-electrical" class="child">Plumbing & Electrical</option>
                        <option value="property-real-estate" class="child">Property & Real Estate</option>
                        <option value="science" class="child">Science</option>
                        <option value="supply-chain-logistics" class="child">Supply Chain & Logistics</option>
                        <option value="printing-publishing" class="child">Printing & Publishing</option>
                        <option value="other-services" class="child">Other Services</option>
                        <option value="fashion-beauty" class="main">Fashion & Beauty</option>
                        <option value="jewellery-watches" class="child">Jewelry, watches </option>
                        <option value="clothing-accessories" class="child">Clothing, accessories</option>
                        <option value="beauty-healthcare-products" class="child">Beauty & Healthcare</option>
                        <option value="books-sports-hobbies" class="main">Books, Sports & Hobbies</option>
                        <option value="cds-dvds-vhs" class="child">CDS, DVDS, VHS</option>
                        <option value="books" class="child">Books</option>
                        <option value="sports-equipment" class="child">Sports Equipment</option>
                        <option value="others-buy-sell" class="child">Others</option>
                        <option value="furniture-decor" class="main">Furniture & Decor</option>
                        <option value="household-items" class="child">Household Items</option>
                        <option value="office-furniture" class="child">Office Furniture</option>
                        <option value="home-furniture" class="child">Home Furniture</option>
                        <option value="kitchenware" class="child">Kitchenware</option>
                        <option value="handicrafts-paintings" class="child">Handicrafts Paintings</option>
                        <option value="pets" class="main">Pets</option>
                        <option value="dogs" class="child">Dogs</option>
                        <option value="cats" class="child">Cats</option>
                        <option value="birds" class="child">Birds</option>
                        <option value="fish" class="child">Fish</option>
                        <option value="pet-food" class="child">Pet Food</option>
                        <option value="pet-accessories" class="child">Pet Accessories</option>
                        <option value="other-pets" class="child">Other</option>
                        <option value="foods" class="main">Foods</option>
                        <option value="meat" class="child">Meat</option>
                        <option value="seafood" class="child">Seafood</option>
                        <option value="fruits" class="child">Fruits</option>
                        <option value="vegetables" class="child">Vegetables</option>
                        <option value="beverages" class="child">Beverages</option>
                        <option value="grocery" class="child">Grocery</option>
                        <option value="bread-and-bakery" class="child">Bread & Bakery</option>
                        <option value="beer-and-wine" class="child">Beer & Wine</option>
                        <option value="rice-and-cereal" class="child">Rice & Cereal</option>
                        <option value="other-foods" class="child">Other</option>
                    </select>
                    <button class="btn my-0 my-sm-0" type="submit"><span class="icon ion-ios-search"></span></button>
                </form>
            </div>
        </div>
    </header>
    <section class="pt-4 pb-4 posting-form">
        <div class="my-container">
            <script type="text/javascript"
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOmxt7IlnEeNXCqEFN-YQUfY6V40hmxnY"></script>
            <script type="text/javascript">
                $(document).ready(function () {

                     var marker;
                     var map;
                     var geocoder;

                     var map_loading = $('#map_loading').show();

                     var x=11.54487290000000;
                     var y=104.89216680000001;
                     var z=7;
                     var is_has_old_map = 1;
                     if(is_has_old_map==1) {
                         z=15;
                     }

                     function loadMap() {

                         if(x && y) {
                                 // Define the latitude and longitude positions
                                 latitude = parseFloat(x);
                                 longitude = parseFloat(y);
                                 latlngPos = new google.maps.LatLng(latitude, longitude);
                                 // Set up options for the Google map
                                 var myOptions = {
                                     zoom: z,
                                     center: latlngPos,
                                     mapTypeId: google.maps.MapTypeId.ROADMAP,
                                     fullscreenControl: false,
                                     streetViewControl: false
                                 };
                                 // Define the map
                                 map = new google.maps.Map(document.getElementById("map"), myOptions);


                                 // geocoder = new google.maps.Geocoder;

                                 // for move map
                                 google.maps.event.addListener(map,'mouseout',function() {
                                     window.setTimeout(function() {


                                     },100);
                                 });

                                 // set maker by click
                                 google.maps.event.addListener(map, 'dragend', function(e) {
                                     $('#map_lat').val(map.getCenter().lat());
                                     $('#map_lng').val(map.getCenter().lng());
                                 });

                                     // for move map
                                 google.maps.event.addDomListener(window, "resize", function() {
                                     // 3 seconds after the center of the map has changed, pan back to the marker
                                     window.setTimeout(function() {

                                     },100);
                                 });


                                 map_loading.hide();
                                 is_has_old_map = 1;
                        }

                         $('<div/>').addClass('centerMarker').appendTo(map.getDiv())
                          .click(function(){
                              var that=$(this);
                              if(!that.data('win')){
                                  that.data('win',new google.maps.InfoWindow({content:'this is the center'}));
                                  that.data('win').bindTo('position',map,'center');
                              }
                              that.data('win').open(map);
                          });

                      }
                     loadMap();
                     if(is_has_old_map==1) {
                         google.maps.event.addDomListener(window, 'load', loadMap);
                     }

                     $('#find_location').click(function(e){
                         e.preventDefault();
                         map_loading.show();

                         var pos = {
                             lat: x,
                             lng: y
                         };
                         // Try HTML5 geolocation.
                         if (navigator.geolocation) {
                             navigator.geolocation.getCurrentPosition(function(position) {
                                 pos = {
                                     lat: position.coords.latitude,
                                     lng: position.coords.longitude
                                 };

                                 map.setCenter(pos);
                                 map.setZoom(12);

                                 map_loading.hide();
                             }, function() {
                                 map.setCenter(pos);
                                 map.setZoom(12);

                                 map_loading.hide();
                             });
                         } else {
                           // Browser doesn't support Geolocation
                           map.setCenter(pos);
                           map.setZoom(12);

                           map_loading.hide();
                       }
                     });
                 });

            </script>
            <script>
                $(document).ready(function() {
                 jQuery.validator.addMethod("phone", function(value, element) {
                     if((value.charAt(0)==0 && value.charAt(1)!=0) || value.length==0 ){
                         return true;
                     }
                     return false;
                 }, "Invalid phone number.");

         // Validate
         $("#form-post").validate({
             rules:
             {
                 ad_headline:{required:true, maxlength:101},
                 ad_text:{required:true, maxlength:10000},
                 name:{required:true, minlength:3, maxlength:50},
                 'phone-1':{required:true, minlength:9, maxlength:10,number: true,phone:true},
                 'phone-2':{minlength:9, maxlength:10,number: true,phone:true},
                 'phone-3':{minlength:9, maxlength:10,number: true,phone:true},
                 ad_kindof:{required:true},
             },
             errorClass:"error invalid-feedback",
             highlight: function(label) {
                 $(label).addClass('error');
                 $(label).closest('.form-group').removeClass('has-success has-feedback').addClass('has-error has-feedback')
                 $(label).closest('.form-group').find('label.error').remove();
                 $(label).closest('.form-group input').after('<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span><span id="inputError2Status" class="sr-only">(error)</span>');
             },

             success: function(label,element) {
                 $(label).removeClass('error');
                 $(element).removeClass('is-invalid');
                 $(label).closest('.form-group').removeClass('has-error has-feedback').addClass('has-success has-feedback');
                 $(label).closest('.form-group').find('label.error').remove();
                 label.after('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span><span id="inputSuccess2Status" class="sr-only">(success)</span>');
                 label.remove();
                 $('.has-success').find('.checkbox').css('margin-bottom','0');
             },

             errorPlacement: function(error, element) {
                 if(error.text()) {
                     element.addClass('is-invalid');
                     element.closest('.form-input').append(error);
                 }
             },

             // focusInvalid: false,
             invalidHandler: function(form, validator) {
                 if (!validator.numberOfInvalids())
                     return;

                 $('html, body').animate({
                     scrollTop: $(validator.errorList[0].element).offset().top
                 }, 700);
             },

             submitHandler: function(form) {

                 $("#form-post input[type='submit']").attr('disabled','disabled').val('Saving...').css({"background-color": "#dedede", "border": "none" });

                 $.post($("#form-post").attr('action'), $("#form-post").serialize(), function(data) {
                     if(data.status == 1 || data.status == '1') {
                         if(data.is_logged_in == 1 || data.is_logged_in == '1') {
                             window.location = 'https://www.khmer24.com/en/posts';
                         } else {
                             $('#account-question').modal('show');
                             // $.fancybox('#account-question',{autoSize : true, width: '100%', height:'100%',padding:0, margin:0, modal:true });
                   //  window.location = 'https://www.khmer24.com/en/register.html';
               }
           }else{
               $("#form-post input[type='submit']").removeAttr('disabled').val('Submit').removeAttr('style');
               alert(data.info);
           }
       },'json');
             }
         });

     });

            </script>
            <div class="post_form bg-white rounded border my_content">
                <div class="header p-3">
                    <h1 class="title">POST FREE AD</h1>
                    <div class="step">
                        <ul class="list-unstyled">
                            <li class="active"><span class="text"><i>1</i> Choose a category</span></li>
                            <li class="active"><span class="text"><i>2</i> Fill Description</span></li>
                        </ul>
                    </div>
                </div>
                <div class="post_form p-3">
                    <div class="post_form">
                        <form action="https://www.khmer24.com/en/post?category=76" id="form-post"
                            class="form form-horizontal" method="post" accept-charset="utf-8">
                            <input type="hidden" name="csrf_test_name" value="1422a057f63eae10fe8d86e632e28001" />
                            <input type="hidden" value="ea5d2f1c" name="sec">
                            <div class="form-group">
                                <label for="title" class="col control-label">Category</label>
                                <div class="col-6 cat_path">
                                    <div class="category-selected">
                                        <ul class="list-unstyled list-inline">
                                            <li>House & Lands</li>
                                            <li>House for Sale</li>
                                        </ul>
                                        <a class="btn btn-sm  btn-primary btn_change_cat"
                                            href="https://www.khmer24.com/en/post">Change</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ad_headline" class="col control-label">Title <span
                                        class="red">*</span></label>
                                <div class="col col-6 form-input">
                                    <input id="ad_headline" class="form-control" type="text" name="ad_headline" value=""
                                        required>
                                </div>
                            </div>
                            <div class="form-group input-ad_field"><label for="ad_field"
                                    class="col-sm-3 control-label">Bedroom</label>
                                <div class="form-input col-sm-6 col-lg-3"><select id="ad_field" name="ad_field"
                                        class="form-control ">
                                        <option value="" data-value=""></option>
                                        <option value="1" data-value="1" class="empty1">1</option>
                                        <option value="2" data-value="2" class="empty1">2</option>
                                        <option value="3" data-value="3" class="empty1">3</option>
                                        <option value="4" data-value="4" class="empty1">4</option>
                                        <option value="5" data-value="5" class="empty1">5</option>
                                        <option value="6" data-value="6" class="empty1">6</option>
                                        <option value="more" data-value="more" class="empty1">More+</option>
                                    </select></div>
                            </div>
                            <div class="form-group input-ad_model"><label for="ad_model"
                                    class="col-sm-3 control-label">Bathroom</label>
                                <div class="form-input col-sm-6 col-lg-3"><select id="ad_model" name="ad_model"
                                        class="form-control ">
                                        <option value="" data-value=""></option>
                                        <option value="1" data-value="1" class="empty1">1</option>
                                        <option value="2" data-value="2" class="empty1">2</option>
                                        <option value="3" data-value="3" class="empty1">3</option>
                                        <option value="4" data-value="4" class="empty1">4</option>
                                        <option value="5" data-value="5" class="empty1">5</option>
                                        <option value="6" data-value="6" class="empty1">6</option>
                                        <option value="more" data-value="more" class="empty1">More+</option>
                                    </select></div>
                            </div>
                            <div class="form-group input-ad_auto_condition"><label for="ad_auto_condition"
                                    class="col-sm-3 control-label">Facing</label>
                                <div class="form-input col-sm-6 col-lg-3"><select id="ad_auto_condition"
                                        name="ad_auto_condition" class="form-control ">
                                        <option value="" data-value=""></option>
                                        <option value="east" data-value="east" class="empty1">East</option>
                                        <option value="north" data-value="north" class="empty1">North</option>
                                        <option value="northeast" data-value="northeast" class="empty1">Northeast
                                        </option>
                                        <option value="northwest" data-value="northwest" class="empty1">Northwest
                                        </option>
                                        <option value="south" data-value="south" class="empty1">South</option>
                                        <option value="southeast" data-value="southeast" class="empty1">Southeast
                                        </option>
                                        <option value="southwest" data-value="southwest" class="empty1">Southwest
                                        </option>
                                        <option value="west" data-value="west" class="empty1">West</option>
                                    </select></div>
                            </div>
                            <div class="form-group input-ad_year"><label for="ad_year"
                                    class="col-sm-3 control-label">Size(m<sup>2</sup>)</label>
                                <div class="form-input col-sm-6 col-lg-3"><input type="text" name="ad_year" value=""
                                        id="ad_year" class="form-control  number " />
                                </div>
                            </div>
                            <div class="form-group input-ad_price"><label for="ad_price"
                                    class="col-sm-3 control-label">Price <i class="red">*</i></label>
                                <div class="form-input col-sm-6 col-lg-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"
                                                id="inputGroupPrepend_ad_price">$</span></div><input type="number"
                                            min="1" name="ad_price" id="ad_price" class="form-control  number " required
                                            aria-describedby="basic-addon1" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ad_text" class="col control-label">Description <span
                                        class="red">*</span></label>
                                <div class="col col-8 form-input">
                                    <textarea name="ad_text" id="ad_text" class="required form-control"
                                        rows="10"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ad_text" class="col control-label">Ad Photos <i class="red">*</i></label>
                                <div id="plupload" class="col-8">
                                    <div class="row plupload_block">
                                        <div class="pl fleft col-12">
                                            <span class="drop_file_hear"></span>
                                            <div id="multi-upload">
                                                <div id="console"></div>
                                                <ul class="list-image list-unstyled">
                                                    <li>
                                                        <div id="item-1" class="item">
                                                            <a href="javascript:;" class="btn-browse" id="browse-1">Add
                                                                Image</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div id="item-2" class="item">
                                                            <a href="javascript:;" class="btn-browse" id="browse-2">Add
                                                                Image</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div id="item-3" class="item">
                                                            <a href="javascript:;" class="btn-browse" id="browse-3">Add
                                                                Image</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div id="item-4" class="item">
                                                            <a href="javascript:;" class="btn-browse" id="browse-4">Add
                                                                Image</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div id="item-5" class="item">
                                                            <a href="javascript:;" class="btn-browse" id="browse-5">Add
                                                                Image</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div id="item-6" class="item">
                                                            <a href="javascript:;" class="btn-browse" id="browse-6">Add
                                                                Image</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div id="item-7" class="item">
                                                            <a href="javascript:;" class="btn-browse" id="browse-7">Add
                                                                Image</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div id="item-8" class="item">
                                                            <a href="javascript:;" class="btn-browse" id="browse-8">Add
                                                                Image</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="drop_box" id="drop-image">
                                                    <span class="image_placeholder"></span>
                                                    <p>Drop your photo hear.</p>
                                                </div>
                                                <div class="total_status"> <span class="current_uploads"
                                                        id="current_uploads">0</span> of <span class="total">8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                    <div style="display:none;">
                                        <input type="hidden" id="count" value="1">
                                        <input type="hidden" id="csrf" value="1422a057f63eae10fe8d86e632e28001">
                                        <input type="hidden" id="browser" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col control-label">Name <span class="red">*</span></label>
                                <div class="col col-lg-4 form-input">
                                    <input id="name" class="form-control" type="text" name="name" value="sam chanpanha">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="col control-label">Phone <span class="red">*</span></label>
                                <div class="col col-lg-4 phone">
                                    <div class="phone-1 form-input">
                                        <input type="tel" name="phone-1" value="087556833" id="phone-1"
                                            class="form-control number" maxlength="10" placeholder="Tel 1">
                                        <a href="javascript:void(0)" class="add_phone" data-id="add"><i
                                                class="icon-plus-full"></i></a>
                                    </div>
                                    <div class="phone-2 form-input  ">
                                        <input type="tel" name="phone-2" value="" id="phone-2"
                                            class="form-control number" maxlength="10" placeholder="Tel 2">
                                        <a href="javascript:void(0)" class="delete_phone" data-id="phone-2"><i
                                                class="icon-remove"></i></a>
                                    </div>
                                    <div class="phone-3 form-input d-none">
                                        <input type="tel" name="phone-3" value="" id="phone-3"
                                            class="form-control number" maxlength="10" placeholder="Tel 3">
                                        <a href="javascript:void(0)" class="delete_phone" data-id="phone-3"><i
                                                class="icon-remove"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col control-label">Email</label>
                                <div class="col col-6 form-input">
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="sopheavetey0303@gmail.com">
                                </div>
                            </div>
                            <div class="locations_box">
                                <div class="controls">
                                    <div class="form-group">
                                        <label for="province" class="col control-label">City/Province<i
                                                class="red">*</i></label>
                                        <div class="col col-3 form-input">
                                            <select data-placeholder="Select a province" id="province" name="province"
                                                class="form-control map_form" required>
                                                <option value="" data-value="">Select a City/Province</option>
                                                <option data-en-title="Phnom Penh" value="32" data-value="phnom-penh"
                                                    selected>Phnom Penh</option>
                                                <option data-en-title="Preah Sihanouk" value="38"
                                                    data-value="preah-sihanouk">Preah Sihanouk</option>
                                                <option data-en-title="Kampong Cham" value="20"
                                                    data-value="kampong-cham">Kampong Cham</option>
                                                <option data-en-title="Siem Reap" value="37" data-value="siem-reap">Siem
                                                    Reap</option>
                                                <option data-en-title="Battambang" value="19" data-value="battambang">
                                                    Battambang</option>
                                                <option data-en-title="Kandal" value="25" data-value="kandal">Kandal
                                                </option>
                                                <option data-en-title="Banteay Meanchey" value="18"
                                                    data-value="banteay-meanchey">Banteay Meanchey</option>
                                                <option data-en-title="Kampong Chhnang" value="21"
                                                    data-value="kampong-chhnang">Kampong Chhnang</option>
                                                <option data-en-title="Kampong Speu" value="22"
                                                    data-value="kampong-speu">Kampong Speu</option>
                                                <option data-en-title="Kampong Thom" value="23"
                                                    data-value="kampong-thom">Kampong Thom</option>
                                                <option data-en-title="Kampot" value="24" data-value="kampot">Kampot
                                                </option>
                                                <option data-en-title="Kep" value="26" data-value="kep">Kep</option>
                                                <option data-en-title="Koh Kong" value="27" data-value="koh-kong">Koh
                                                    Kong</option>
                                                <option data-en-title="Kratie" value="28" data-value="kratie">Kratie
                                                </option>
                                                <option data-en-title="Mondulkiri" value="29" data-value="mondulkiri">
                                                    Mondulkiri</option>
                                                <option data-en-title="Oddar Meanchey" value="30"
                                                    data-value="oddar-meanchey">Otdar Meanchey</option>
                                                <option data-en-title="Pailin" value="31" data-value="pailin">Pailin
                                                </option>
                                                <option data-en-title="Preah Vihear" value="33"
                                                    data-value="preah-vihear">Preah Vihear</option>
                                                <option data-en-title="Prey Veng" value="34" data-value="prey-veng">Prey
                                                    Veng</option>
                                                <option data-en-title="Pursat" value="35" data-value="pursat">Pursat
                                                </option>
                                                <option data-en-title="Ratanakiri" value="36" data-value="ratanakiri">
                                                    Ratanakiri</option>
                                                <option data-en-title="Stung Treng" value="39" data-value="stung-treng">
                                                    Stung Treng</option>
                                                <option data-en-title="Svay Rieng" value="40" data-value="svay-rieng">
                                                    Svay Rieng</option>
                                                <option data-en-title="Takeo" value="41" data-value="takeo">Takeo
                                                </option>
                                                <option data-en-title="Tboung Khmum" value="44"
                                                    data-value="tboung-khmum">Tboung Khmum</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="district" class="col control-label">Khan/District <i
                                                class="red">*</i></label>
                                        <div class="col col-3 form-input">
                                            <select data-placeholder="Select a district" id="district" name="district"
                                                class="form-control map_form" required>
                                                <option value="" data-value="">Select a Khan/District</option>
                                                <option data-en-title=="Ruessei Kaev" value="1024"
                                                    data-value="ruessei-kaev" data-chained="phnom-penh"
                                                    class="phnom-penh">Ruessei Kaev</option>
                                                <option data-en-title=="Thala Barivat" value="1536"
                                                    data-value="thala-barivat" data-chained="stung-treng"
                                                    class="stung-treng">Thala Barivat</option>
                                                <option data-en-title=="Dambae" value="1792" data-value="dambae"
                                                    data-chained="tboung-khmum" class="tboung-khmum">Dambae</option>
                                                <option data-en-title=="Krong Kampong Cham" value="261"
                                                    data-value="krong-kampong-cham" data-chained="kampong-cham"
                                                    class="kampong-cham">Krong Kampong Cham</option>
                                                <option data-en-title=="Baray" value="519" data-value="baray"
                                                    data-chained="kampong-thom" class="kampong-thom">Baray</option>
                                                <option data-en-title=="Lvea Aem" value="775" data-value="lvea-aem"
                                                    data-chained="kandal" class="kandal">Lvea Aem</option>
                                                <option data-en-title=="Saensokh" value="1031" data-value="saensokh"
                                                    data-chained="phnom-penh" class="phnom-penh" selected>Saensokh
                                                </option>
                                                <option data-en-title=="Phnum Kravanh" value="1287"
                                                    data-value="phnum-kravanh" data-chained="pursat" class="pursat">
                                                    Phnum Kravanh</option>
                                                <option data-en-title=="Krouch Chhmar" value="1800"
                                                    data-value="krouch-chhmar" data-chained="tboung-khmum"
                                                    class="tboung-khmum">Krouch Chhmar</option>
                                                <option data-en-title=="Kampong Siem" value="266"
                                                    data-value="kampong-siem" data-chained="kampong-cham"
                                                    class="kampong-cham">Kampong Siem</option>
                                                <option data-en-title=="Por Senchey" value="1036"
                                                    data-value="por-senchey" data-chained="phnom-penh"
                                                    class="phnom-penh">Por Senchey</option>
                                                <option data-en-title=="Chantrea" value="1548" data-value="chantrea"
                                                    data-chained="svay-rieng" class="svay-rieng">Chantrea</option>
                                                <option data-en-title=="Krong Pursat" value="1295"
                                                    data-value="krong-pursat" data-chained="pursat" class="pursat">Krong
                                                    Pursat</option>
                                                <option data-en-title=="Kampong Rou" value="1555"
                                                    data-value="kampong-rou" data-chained="svay-rieng"
                                                    class="svay-rieng">Kampong Rou</option>
                                                <option data-en-title=="Memot" value="1813" data-value="memot"
                                                    data-chained="tboung-khmum" class="tboung-khmum">Memot</option>
                                                <option data-en-title=="Mukh Kampul" value="791"
                                                    data-value="mukh-kampul" data-chained="kandal" class="kandal">Mukh
                                                    Kampul</option>
                                                <option data-en-title=="Chrouy Changva" value="1047"
                                                    data-value="chrouy-changva" data-chained="phnom-penh"
                                                    class="phnom-penh">Chrouy Changva</option>
                                                <option data-en-title=="Veal Veaeng" value="1303"
                                                    data-value="veal-veaeng" data-chained="pursat" class="pursat">Veal
                                                    Veaeng</option>
                                                <option data-en-title=="Kang Meas" value="282" data-value="kang-meas"
                                                    data-chained="kampong-cham" class="kampong-cham">Kang Meas</option>
                                                <option data-en-title=="Kampong Svay" value="538"
                                                    data-value="kampong-svay" data-chained="kampong-thom"
                                                    class="kampong-thom">Kampong Svay</option>
                                                <option data-en-title=="Preaek Pnov" value="1053"
                                                    data-value="preaek-pnov" data-chained="phnom-penh"
                                                    class="phnom-penh">Preaek Pnov</option>
                                                <option data-en-title=="Andoung Meas" value="1309"
                                                    data-value="andoung-meas" data-chained="ratanakiri"
                                                    class="ratanakiri">Andoung Meas</option>
                                                <option data-en-title=="Angk Snuol" value="799" data-value="angk-snuol"
                                                    data-chained="kandal" class="kandal">Angk Snuol</option>
                                                <option data-en-title=="Rumduol" value="1567" data-value="rumduol"
                                                    data-chained="svay-rieng" class="svay-rieng">Rumduol</option>
                                                <option data-en-title=="Krong Ban Lung" value="1313"
                                                    data-value="krong-ban-lung" data-chained="ratanakiri"
                                                    class="ratanakiri">Krong Ban Lung</option>
                                                <option data-en-title=="Chbar Ampov" value="1059"
                                                    data-value="chbar-ampov" data-chained="phnom-penh"
                                                    class="phnom-penh">Chbar Ampov</option>
                                                <option data-en-title=="Ou Reang Ov" value="1828"
                                                    data-value="ou-reang-ov" data-chained="tboung-khmum"
                                                    class="tboung-khmum">Ou Reang Ov</option>
                                                <option data-en-title=="Bar Kaev" value="1317" data-value="bar-kaev"
                                                    data-chained="ratanakiri" class="ratanakiri">Bar Kaev</option>
                                                <option data-en-title=="Kaoh Soutin" value="294"
                                                    data-value="kaoh-soutin" data-chained="kampong-cham"
                                                    class="kampong-cham">Kaoh Soutin</option>
                                                <option data-en-title=="Krong Stueng Saen" value="550"
                                                    data-value="krong-stueng-saen" data-chained="kampong-thom"
                                                    class="kampong-thom">Krong Stueng Saen</option>
                                                <option data-en-title=="Popnhea Lueu" value="810"
                                                    data-value="popnhea-lueu" data-chained="kandal" class="kandal">
                                                    Popnhea Lueu</option>
                                                <option data-en-title=="Romeas Haek" value="1578"
                                                    data-value="romeas-haek" data-chained="svay-rieng"
                                                    class="svay-rieng">Romeas Haek</option>
                                                <option data-en-title=="Chey Saen" value="1068" data-value="chey-saen"
                                                    data-chained="preah-vihear" class="preah-vihear">Chey Saen</option>
                                                <option data-en-title=="Koun Mom" value="1324" data-value="koun-mom"
                                                    data-chained="ratanakiri" class="ratanakiri">Koun Mom</option>
                                                <option data-en-title=="Ponhea Kraek" value="1836"
                                                    data-value="ponhea-kraek" data-chained="tboung-khmum"
                                                    class="tboung-khmum">Ponhea Kraek</option>
                                                <option data-en-title=="Mongkol Borei" value="45"
                                                    data-value="mongkol-borei" data-chained="banteay-meanchey"
                                                    class="banteay-meanchey">Mongkol Borei</option>
                                                <option data-en-title=="Prey Chhor" value="303" data-value="prey-chhor"
                                                    data-chained="kampong-cham" class="kampong-cham">Prey Chhor</option>
                                                <option data-en-title=="Prasat Ballangk" value="559"
                                                    data-value="prasat-ballangk" data-chained="kampong-thom"
                                                    class="kampong-thom">Prasat Ballangk</option>
                                                <option data-en-title=="Chhaeb" value="1075" data-value="chhaeb"
                                                    data-chained="preah-vihear" class="preah-vihear">Chhaeb</option>
                                                <option data-en-title=="Lumphat" value="1331" data-value="lumphat"
                                                    data-chained="ratanakiri" class="ratanakiri">Lumphat</option>
                                                <option data-en-title=="Krong Suong" value="1845"
                                                    data-value="krong-suong" data-chained="tboung-khmum"
                                                    class="tboung-khmum">Krong Suong</option>
                                                <option data-en-title=="S'ang" value="822" data-value="sang"
                                                    data-chained="kandal" class="kandal">S'ang</option>
                                                <option data-en-title=="Prasat Sambour" value="567"
                                                    data-value="prasat-sambour" data-chained="kampong-thom"
                                                    class="kampong-thom">Prasat Sambour</option>
                                                <option data-en-title=="Tboung Khmum" value="1848"
                                                    data-value="tboung-khmum" data-chained="tboung-khmum"
                                                    class="tboung-khmum">Tboung Khmum</option>
                                                <option data-en-title=="Ou Chum" value="1338" data-value="ou-chum"
                                                    data-chained="ratanakiri" class="ratanakiri">Ou Chum</option>
                                                <option data-en-title=="Phnum Srok" value="59" data-value="phnum-srok"
                                                    data-chained="banteay-meanchey" class="banteay-meanchey">Phnum Srok
                                                </option>
                                                <option data-en-title=="Svay Chrum" value="1595" data-value="svay-chrum"
                                                    data-chained="svay-rieng" class="svay-rieng">Svay Chrum</option>
                                                <option data-en-title=="Choam Khsant" value="1084"
                                                    data-value="choam-khsant" data-chained="preah-vihear"
                                                    class="preah-vihear">Choam Khsant</option>
                                                <option data-en-title=="Sandan" value="573" data-value="sandan"
                                                    data-chained="kampong-thom" class="kampong-thom">Sandan</option>
                                                <option data-en-title=="Srei Santhor" value="319"
                                                    data-value="srei-santhor" data-chained="kampong-cham"
                                                    class="kampong-cham">Srei Santhor</option>
                                                <option data-en-title=="Preah Netr Preah" value="66"
                                                    data-value="preah-netr-preah" data-chained="banteay-meanchey"
                                                    class="banteay-meanchey">Preah Netr Preah</option>
                                                <option data-en-title=="Ou Ya Dav" value="1346" data-value="ou-ya-dav"
                                                    data-chained="ratanakiri" class="ratanakiri">Ou Ya Dav</option>
                                                <option data-en-title=="Kuleaen" value="1091" data-value="kuleaen"
                                                    data-chained="preah-vihear" class="preah-vihear">Kuleaen</option>
                                                <option data-en-title=="Santuk" value="583" data-value="santuk"
                                                    data-chained="kampong-thom" class="kampong-thom">Santuk</option>
                                                <option data-en-title=="Krong Ta Khmau" value="839"
                                                    data-value="krong-ta-khmau" data-chained="kandal" class="kandal">
                                                    Krong Ta Khmau</option>
                                                <option data-en-title=="Rovieng" value="1098" data-value="rovieng"
                                                    data-chained="preah-vihear" class="preah-vihear">Rovieng</option>
                                                <option data-en-title=="Ta Veaeng" value="1354" data-value="ta-veaeng"
                                                    data-chained="ratanakiri" class="ratanakiri">Ta Veaeng</option>
                                                <option data-en-title=="Ou Chrov" value="76" data-value="ou-chrov"
                                                    data-chained="banteay-meanchey" class="banteay-meanchey">Ou Chrov
                                                </option>
                                                <option data-en-title=="Krong Svay Rieng" value="1612"
                                                    data-value="krong-svay-rieng" data-chained="svay-rieng"
                                                    class="svay-rieng">Krong Svay Rieng</option>
                                                <option data-en-title=="Veun Sai" value="1357" data-value="veun-sai"
                                                    data-chained="ratanakiri" class="ratanakiri">Veun Sai</option>
                                                <option data-en-title=="Stueng Trang" value="334"
                                                    data-value="stueng-trang" data-chained="kampong-cham"
                                                    class="kampong-cham">Stueng Trang</option>
                                                <option data-en-title=="Botum Sakor" value="846"
                                                    data-value="botum-sakor" data-chained="koh-kong" class="koh-kong">
                                                    Botum Sakor</option>
                                                <option data-en-title=="Stoung" value="594" data-value="stoung"
                                                    data-chained="kampong-thom" class="kampong-thom">Stoung</option>
                                                <option data-en-title=="Kiri Sakor" value="851" data-value="kiri-sakor"
                                                    data-chained="koh-kong" class="koh-kong">Kiri Sakor</option>
                                                <option data-en-title=="Krong Serei Saophoan" value="84"
                                                    data-value="krong-serei-saophoan" data-chained="banteay-meanchey"
                                                    class="banteay-meanchey">Krong Serei Saophoan</option>
                                                <option data-en-title=="Svay Teab" value="1620" data-value="svay-teab"
                                                    data-chained="svay-rieng" class="svay-rieng">Svay Teab</option>
                                                <option data-en-title=="Koh Kong" value="855" data-value="koh-kong"
                                                    data-chained="koh-kong" class="koh-kong">Koh Kong</option>
                                                <option data-en-title=="Sangkum Thmei" value="1111"
                                                    data-value="sangkum-thmei" data-chained="preah-vihear"
                                                    class="preah-vihear">Sangkum Thmei</option>
                                                <option data-en-title=="Angkor Chum" value="1367"
                                                    data-value="angkor-chum" data-chained="siem-reap" class="siem-reap">
                                                    Angkor Chum</option>
                                                <option data-en-title=="Baribour" value="347" data-value="baribour"
                                                    data-chained="kampong-chhnang" class="kampong-chhnang">Baribour
                                                </option>
                                                <option data-en-title=="Thma Puok" value="92" data-value="thma-puok"
                                                    data-chained="banteay-meanchey" class="banteay-meanchey">Thma Puok
                                                </option>
                                                <option data-en-title=="Krong Khemarak Phoumin" value="860"
                                                    data-value="krong-khemarak-phoumin" data-chained="koh-kong"
                                                    class="koh-kong">Krong Khemarak Phoumin</option>
                                                <option data-en-title=="Tbaeng Mean Chey" value="1117"
                                                    data-value="tbaeng-mean-chey" data-chained="preah-vihear"
                                                    class="preah-vihear">Tbaeng Mean Chey</option>
                                                <option data-en-title=="Krong Bavet" value="1630"
                                                    data-value="krong-bavet" data-chained="svay-rieng"
                                                    class="svay-rieng">Krong Bavet</option>
                                                <option data-en-title=="Angkor Thum" value="1375"
                                                    data-value="angkor-thum" data-chained="siem-reap" class="siem-reap">
                                                    Angkor Thum</option>
                                                <option data-en-title=="Angkor Chey" value="608"
                                                    data-value="angkor-chey" data-chained="kampot" class="kampot">Angkor
                                                    Chey</option>
                                                <option data-en-title=="Mondol Seima" value="864"
                                                    data-value="mondol-seima" data-chained="koh-kong" class="koh-kong">
                                                    Mondol Seima</option>
                                                <option data-en-title=="Krong Preah Vihear" value="1122"
                                                    data-value="krong-preah-vihear" data-chained="preah-vihear"
                                                    class="preah-vihear">Krong Preah Vihear</option>
                                                <option data-en-title=="Svay Chek" value="99" data-value="svay-chek"
                                                    data-chained="banteay-meanchey" class="banteay-meanchey">Svay Chek
                                                </option>
                                                <option data-en-title=="Srae Ambel" value="868" data-value="srae-ambel"
                                                    data-chained="koh-kong" class="koh-kong">Srae Ambel</option>
                                                <option data-en-title=="Banteay Srei" value="1380"
                                                    data-value="banteay-srei" data-chained="siem-reap"
                                                    class="siem-reap">Banteay Srei</option>
                                                <option data-en-title=="Angkor Borei" value="1636"
                                                    data-value="angkor-borei" data-chained="takeo" class="takeo">Angkor
                                                    Borei</option>
                                                <option data-en-title=="Ba Phnum" value="1125" data-value="ba-phnum"
                                                    data-chained="prey-veng" class="prey-veng">Ba Phnum</option>
                                                <option data-en-title=="Chol Kiri" value="359" data-value="chol-kiri"
                                                    data-chained="kampong-chhnang" class="kampong-chhnang">Chol Kiri
                                                </option>
                                                <option data-en-title=="Thma Bang" value="875" data-value="thma-bang"
                                                    data-chained="koh-kong" class="koh-kong">Thma Bang</option>
                                                <option data-en-title=="Chi Kraeng" value="1387" data-value="chi-kraeng"
                                                    data-chained="siem-reap" class="siem-reap">Chi Kraeng</option>
                                                <option data-en-title=="Bati" value="1643" data-value="bati"
                                                    data-chained="takeo" class="takeo">Bati</option>
                                                <option data-en-title=="Malai" value="108" data-value="malai"
                                                    data-chained="banteay-meanchey" class="banteay-meanchey">Malai
                                                </option>
                                                <option data-en-title=="Banteay Meas" value="620"
                                                    data-value="banteay-meas" data-chained="kampot" class="kampot">
                                                    Banteay Meas</option>
                                                <option data-en-title=="Krong Kampong Chhnang" value="365"
                                                    data-value="krong-kampong-chhnang" data-chained="kampong-chhnang"
                                                    class="kampong-chhnang">Krong Kampong Chhnang</option>
                                                <option data-en-title=="Kamchay Mear" value="1135"
                                                    data-value="kamchay-mear" data-chained="prey-veng"
                                                    class="prey-veng">Kamchay Mear</option>
                                                <option data-en-title=="Kampong Leaeng" value="370"
                                                    data-value="kampong-leaeng" data-chained="kampong-chhnang"
                                                    class="kampong-chhnang">Kampong Leaeng</option>
                                                <option data-en-title=="Chhloung" value="882" data-value="chhloung"
                                                    data-chained="kratie" class="kratie">Chhloung</option>
                                                <option data-en-title=="Krong Paoy Paet" value="115"
                                                    data-value="krong-paoy-paet" data-chained="banteay-meanchey"
                                                    class="banteay-meanchey">Krong Paoy Paet</option>
                                                <option data-en-title=="Banan" value="118" data-value="banan"
                                                    data-chained="battambang" class="battambang">Banan</option>
                                                <option data-en-title=="Kampong Trabaek" value="1144"
                                                    data-value="kampong-trabaek" data-chained="prey-veng"
                                                    class="prey-veng">Kampong Trabaek</option>
                                                <option data-en-title=="Kralanh" value="1400" data-value="kralanh"
                                                    data-chained="siem-reap" class="siem-reap">Kralanh</option>
                                                <option data-en-title=="Krong Kracheh" value="891"
                                                    data-value="krong-kracheh" data-chained="kratie" class="kratie">
                                                    Krong Kracheh</option>
                                                <option data-en-title=="Borei Cholsar" value="1659"
                                                    data-value="borei-cholsar" data-chained="takeo" class="takeo">Borei
                                                    Cholsar</option>
                                                <option data-en-title=="Kampong Tralach" value="380"
                                                    data-value="kampong-tralach" data-chained="kampong-chhnang"
                                                    class="kampong-chhnang">Kampong Tralach</option>
                                                <option data-en-title=="Chhuk" value="636" data-value="chhuk"
                                                    data-chained="kampot" class="kampot">Chhuk</option>
                                                <option data-en-title=="Thma Koul" value="127" data-value="thma-koul"
                                                    data-chained="battambang" class="battambang">Thma Koul</option>
                                                <option data-en-title=="Preaek Prasab" value="897"
                                                    data-value="preaek-prasab" data-chained="kratie" class="kratie">
                                                    Preaek Prasab</option>
                                                <option data-en-title=="Kiri Vong" value="1665" data-value="kiri-vong"
                                                    data-chained="takeo" class="takeo">Kiri Vong</option>
                                                <option data-en-title=="Puok" value="1411" data-value="puok"
                                                    data-chained="siem-reap" class="siem-reap">Puok</option>
                                                <option data-en-title=="Kanhchriech" value="1158"
                                                    data-value="kanhchriech" data-chained="prey-veng" class="prey-veng">
                                                    Kanhchriech</option>
                                                <option data-en-title=="Rolea B'ier" value="391" data-value="rolea-bier"
                                                    data-chained="kampong-chhnang" class="kampong-chhnang">Rolea B'ier
                                                </option>
                                                <option data-en-title=="Krong Battambang" value="138"
                                                    data-value="krong-battambang" data-chained="battambang"
                                                    class="battambang">Krong Battambang</option>
                                                <option data-en-title=="Sambour" value="906" data-value="sambour"
                                                    data-chained="kratie" class="kratie">Sambour</option>
                                                <option data-en-title=="Chum Kiri" value="651" data-value="chum-kiri"
                                                    data-chained="kampot" class="kampot">Chum Kiri</option>
                                                <option data-en-title=="Kaoh Andaet" value="1678"
                                                    data-value="kaoh-andaet" data-chained="takeo" class="takeo">Kaoh
                                                    Andaet</option>
                                                <option data-en-title=="Me Sang" value="1167" data-value="me-sang"
                                                    data-chained="prey-veng" class="prey-veng">Me Sang</option>
                                                <option data-en-title=="Prasat Bakong" value="1426"
                                                    data-value="prasat-bakong" data-chained="siem-reap"
                                                    class="siem-reap">Prasat Bakong</option>
                                                <option data-en-title=="Dang Tong" value="659" data-value="dang-tong"
                                                    data-chained="kampot" class="kampot">Dang Tong</option>
                                                <option data-en-title=="Bavel" value="149" data-value="bavel"
                                                    data-chained="battambang" class="battambang">Bavel</option>
                                                <option data-en-title=="Sameakki Mean Chey" value="405"
                                                    data-value="sameakki-mean-chey" data-chained="kampong-chhnang"
                                                    class="kampong-chhnang">Sameakki Mean Chey</option>
                                                <option data-en-title=="Snuol" value="917" data-value="snuol"
                                                    data-chained="kratie" class="kratie">Snuol</option>
                                                <option data-en-title=="Prey Kabbas" value="1685"
                                                    data-value="prey-kabbas" data-chained="takeo" class="takeo">Prey
                                                    Kabbas</option>
                                                <option data-en-title=="Peam Chor" value="1176" data-value="peam-chor"
                                                    data-chained="prey-veng" class="prey-veng">Peam Chor</option>
                                                <option data-en-title=="Chitr Borie" value="923"
                                                    data-value="chitr-borie" data-chained="kratie" class="kratie">Chitr
                                                    Borie</option>
                                                <option data-en-title=="Krong Siem Reab" value="1435"
                                                    data-value="krong-siem-reab" data-chained="siem-reap"
                                                    class="siem-reap">Krong Siem Reab</option>
                                                <option data-en-title=="Aek Phnum" value="156" data-value="aek-phnum"
                                                    data-chained="battambang" class="battambang">Aek Phnum</option>
                                                <option data-en-title=="Kampong Trach" value="670"
                                                    data-value="kampong-trach" data-chained="kampot" class="kampot">
                                                    Kampong Trach</option>
                                                <option data-en-title=="Tuek Phos" value="415" data-value="tuek-phos"
                                                    data-chained="kampong-chhnang" class="kampong-chhnang">Tuek Phos
                                                </option>
                                                <option data-en-title=="Peam Ro" value="1187" data-value="peam-ro"
                                                    data-chained="prey-veng" class="prey-veng">Peam Ro</option>
                                                <option data-en-title=="Samraong" value="1699" data-value="samraong"
                                                    data-chained="takeo" class="takeo">Samraong</option>
                                                <option data-en-title=="Moung Ruessei" value="164"
                                                    data-value="moung-ruessei" data-chained="battambang"
                                                    class="battambang">Moung Ruessei</option>
                                                <option data-en-title=="Kaev Seima" value="934" data-value="kaev-seima"
                                                    data-chained="mondulkiri" class="mondulkiri">Kaev Seima</option>
                                                <option data-en-title=="Basedth" value="424" data-value="basedth"
                                                    data-chained="kampong-speu" class="kampong-speu">Basedth</option>
                                                <option data-en-title=="Soutr Nikom" value="1449"
                                                    data-value="soutr-nikom" data-chained="siem-reap" class="siem-reap">
                                                    Soutr Nikom</option>
                                                <option data-en-title=="Kaoh Nheaek" value="940"
                                                    data-value="kaoh-nheaek" data-chained="mondulkiri"
                                                    class="mondulkiri">Kaoh Nheaek</option>
                                                <option data-en-title=="Pea Reang" value="1196" data-value="pea-reang"
                                                    data-chained="prey-veng" class="prey-veng">Pea Reang</option>
                                                <option data-en-title=="Tuek Chhou" value="685" data-value="tuek-chhou"
                                                    data-chained="kampot" class="kampot">Tuek Chhou</option>
                                                <option data-en-title=="Rotonak Mondol" value="174"
                                                    data-value="rotonak-mondol" data-chained="battambang"
                                                    class="battambang">Rotonak Mondol</option>
                                                <option data-en-title=="Krong Doun Kaev" value="1711"
                                                    data-value="krong-doun-kaev" data-chained="takeo" class="takeo">
                                                    Krong Doun Kaev</option>
                                                <option data-en-title=="Sangkae" value="179" data-value="sangkae"
                                                    data-chained="battambang" class="battambang">Sangkae</option>
                                                <option data-en-title=="Ou Reang" value="947" data-value="ou-reang"
                                                    data-chained="mondulkiri" class="mondulkiri">Ou Reang</option>
                                                <option data-en-title=="Tram Kak" value="1715" data-value="tram-kak"
                                                    data-chained="takeo" class="takeo">Tram Kak</option>
                                                <option data-en-title=="Srei Snam" value="1460" data-value="srei-snam"
                                                    data-chained="siem-reap" class="siem-reap">Srei Snam</option>
                                                <option data-en-title=="Pech Chreada" value="950"
                                                    data-value="pech-chreada" data-chained="mondulkiri"
                                                    class="mondulkiri">Pech Chreada</option>
                                                <option data-en-title=="Krong Chbar Mon" value="440"
                                                    data-value="krong-chbar-mon" data-chained="kampong-speu"
                                                    class="kampong-speu">Krong Chbar Mon</option>
                                                <option data-en-title=="Preah Sdach" value="1208"
                                                    data-value="preah-sdach" data-chained="prey-veng" class="prey-veng">
                                                    Preah Sdach</option>
                                                <option data-en-title=="Krong Saen Monourom" value="955"
                                                    data-value="krong-saen-monourom" data-chained="mondulkiri"
                                                    class="mondulkiri">Krong Saen Monourom</option>
                                                <option data-en-title=="Svay Leu" value="1467" data-value="svay-leu"
                                                    data-chained="siem-reap" class="siem-reap">Svay Leu</option>
                                                <option data-en-title=="Samlout" value="190" data-value="samlout"
                                                    data-chained="battambang" class="battambang">Samlout</option>
                                                <option data-en-title=="Kong Pisei" value="446" data-value="kong-pisei"
                                                    data-chained="kampong-speu" class="kampong-speu">Kong Pisei</option>
                                                <option data-en-title=="Krong Kampot" value="702"
                                                    data-value="krong-kampot" data-chained="kampot" class="kampot">Krong
                                                    Kampot</option>
                                                <option data-en-title=="Chamkar Mon" value="960"
                                                    data-value="chamkar-mon" data-chained="phnom-penh"
                                                    class="phnom-penh">Chamkar Mon</option>
                                                <option data-en-title=="Varin" value="1473" data-value="varin"
                                                    data-chained="siem-reap" class="siem-reap">Varin</option>
                                                <option data-en-title=="Treang" value="1731" data-value="treang"
                                                    data-chained="takeo" class="takeo">Treang</option>
                                                <option data-en-title=="Kandal Stueng" value="708"
                                                    data-value="kandal-stueng" data-chained="kandal" class="kandal">
                                                    Kandal Stueng</option>
                                                <option data-en-title=="Krong Prey Veng" value="1220"
                                                    data-value="krong-prey-veng" data-chained="prey-veng"
                                                    class="prey-veng">Krong Prey Veng</option>
                                                <option data-en-title=="Sampov Lun" value="198" data-value="sampov-lun"
                                                    data-chained="battambang" class="battambang">Sampov Lun</option>
                                                <option data-en-title=="Krong Preah Sihanouk" value="1479"
                                                    data-value="krong-preah-sihanouk" data-chained="preah-sihanouk"
                                                    class="preah-sihanouk">Krong Preah Sihanouk</option>
                                                <option data-en-title=="Kampong Leav" value="1224"
                                                    data-value="kampong-leav" data-chained="prey-veng"
                                                    class="prey-veng">Kampong Leav</option>
                                                <option data-en-title=="Aoral" value="460" data-value="aoral"
                                                    data-chained="kampong-speu" class="kampong-speu">Aoral</option>
                                                <option data-en-title=="Phnom Proek" value="205"
                                                    data-value="phnom-proek" data-chained="battambang"
                                                    class="battambang">Phnom Proek</option>
                                                <option data-en-title=="Doun Penh" value="973" data-value="doun-penh"
                                                    data-chained="phnom-penh" class="phnom-penh">Doun Penh</option>
                                                <option data-en-title=="Prey Nob" value="1485" data-value="prey-nob"
                                                    data-chained="preah-sihanouk" class="preah-sihanouk">Prey Nob
                                                </option>
                                                <option data-en-title=="Sithor Kandal" value="1230"
                                                    data-value="sithor-kandal" data-chained="prey-veng"
                                                    class="prey-veng">Sithor Kandal</option>
                                                <option data-en-title=="Odongk" value="466" data-value="odongk"
                                                    data-chained="kampong-speu" class="kampong-speu">Odongk</option>
                                                <option data-en-title=="Anlong Veaeng" value="1746"
                                                    data-value="anlong-veaeng" data-chained="oddar-meanchey"
                                                    class="oddar-meanchey">Anlong Veaeng</option>
                                                <option data-en-title=="Kamrieng" value="211" data-value="kamrieng"
                                                    data-chained="battambang" class="battambang">Kamrieng</option>
                                                <option data-en-title=="Kien Svay" value="727" data-value="kien-svay"
                                                    data-chained="kandal" class="kandal">Kien Svay</option>
                                                <option data-en-title=="Banteay Ampil" value="1752"
                                                    data-value="banteay-ampil" data-chained="oddar-meanchey"
                                                    class="oddar-meanchey">Banteay Ampil</option>
                                                <option data-en-title=="Prampir Meakkakra" value="985"
                                                    data-value="prampir-meakkakra" data-chained="phnom-penh"
                                                    class="phnom-penh">Prampir Meakkakra</option>
                                                <option data-en-title=="Koas Krala" value="218" data-value="koas-krala"
                                                    data-chained="battambang" class="battambang">Koas Krala</option>
                                                <option data-en-title=="Svay Antor" value="1242" data-value="svay-antor"
                                                    data-chained="prey-veng" class="prey-veng">Svay Antor</option>
                                                <option data-en-title=="Stueng Hav" value="1500" data-value="stueng-hav"
                                                    data-chained="preah-sihanouk" class="preah-sihanouk">Stueng Hav
                                                </option>
                                                <option data-en-title=="Chong Kal" value="1757" data-value="chong-kal"
                                                    data-chained="oddar-meanchey" class="oddar-meanchey">Chong Kal
                                                </option>
                                                <option data-en-title=="Khsach Kandal" value="736"
                                                    data-value="khsach-kandal" data-chained="kandal" class="kandal">
                                                    Khsach Kandal</option>
                                                <option data-en-title=="Kampong Seila" value="1504"
                                                    data-value="kampong-seila" data-chained="preah-sihanouk"
                                                    class="preah-sihanouk">Kampong Seila</option>
                                                <option data-en-title=="Rukhak Kiri" value="225"
                                                    data-value="rukhak-kiri" data-chained="battambang"
                                                    class="battambang">Rukhak Kiri</option>
                                                <option data-en-title=="Phnum Sruoch" value="482"
                                                    data-value="phnum-sruoch" data-chained="kampong-speu"
                                                    class="kampong-speu">Phnum Sruoch</option>
                                                <option data-en-title=="Tuol Kouk" value="994" data-value="tuol-kouk"
                                                    data-chained="phnom-penh" class="phnom-penh">Tuol Kouk</option>
                                                <option data-en-title=="Krong Samraong" value="1762"
                                                    data-value="krong-samraong" data-chained="oddar-meanchey"
                                                    class="oddar-meanchey">Krong Samraong</option>
                                                <option data-en-title=="Batheay" value="228" data-value="batheay"
                                                    data-chained="kampong-cham" class="kampong-cham">Batheay</option>
                                                <option data-en-title=="Sesan" value="1509" data-value="sesan"
                                                    data-chained="stung-treng" class="stung-treng">Sesan</option>
                                                <option data-en-title=="Bakan" value="1254" data-value="bakan"
                                                    data-chained="pursat" class="pursat">Bakan</option>
                                                <option data-en-title=="Trapeang Prasat" value="1768"
                                                    data-value="trapeang-prasat" data-chained="oddar-meanchey"
                                                    class="oddar-meanchey">Trapeang Prasat</option>
                                                <option data-en-title=="Dangkao" value="1005" data-value="dangkao"
                                                    data-chained="phnom-penh" class="phnom-penh">Dangkao</option>
                                                <option data-en-title=="Siem Bouk" value="1517" data-value="siem-bouk"
                                                    data-chained="stung-treng" class="stung-treng">Siem Bouk</option>
                                                <option data-en-title=="Samraong Tong" value="495"
                                                    data-value="samraong-tong" data-chained="kampong-speu"
                                                    class="kampong-speu">Samraong Tong</option>
                                                <option data-en-title=="Damnak Chang'aeur" value="1775"
                                                    data-value="damnak-changaeur" data-chained="kep" class="kep">Damnak
                                                    Chang'aeur</option>
                                                <option data-en-title=="Chamkar Leu" value="241"
                                                    data-value="chamkar-leu" data-chained="kampong-cham"
                                                    class="kampong-cham">Chamkar Leu</option>
                                                <option data-en-title=="Kandieng" value="1265" data-value="kandieng"
                                                    data-chained="pursat" class="pursat">Kandieng</option>
                                                <option data-en-title=="Kaoh Thum" value="755" data-value="kaoh-thum"
                                                    data-chained="kandal" class="kandal">Kaoh Thum</option>
                                                <option data-en-title=="Krong Kaeb" value="1779" data-value="krong-kaeb"
                                                    data-chained="kep" class="kep">Krong Kaeb</option>
                                                <option data-en-title=="Siem Pang" value="1525" data-value="siem-pang"
                                                    data-chained="stung-treng" class="stung-treng">Siem Pang</option>
                                                <option data-en-title=="Krong Pailin" value="1782"
                                                    data-value="krong-pailin" data-chained="pailin" class="pailin">Krong
                                                    Pailin</option>
                                                <option data-en-title=="Cheung Prey" value="250"
                                                    data-value="cheung-prey" data-chained="kampong-cham"
                                                    class="kampong-cham">Cheung Prey</option>
                                                <option data-en-title=="Mean Chey" value="1019" data-value="mean-chey"
                                                    data-chained="phnom-penh" class="phnom-penh">Mean Chey</option>
                                                <option data-en-title=="Krakor" value="1275" data-value="krakor"
                                                    data-chained="pursat" class="pursat">Krakor</option>
                                                <option data-en-title=="Krong Stueng Traeng" value="1531"
                                                    data-value="krong-stueng-traeng" data-chained="stung-treng"
                                                    class="stung-treng">Krong Stueng Traeng</option>
                                                <option data-en-title=="Sala Krau" value="1787" data-value="sala-krau"
                                                    data-chained="pailin" class="pailin">Sala Krau</option>
                                                <option data-en-title=="Thpong" value="511" data-value="thpong"
                                                    data-chained="kampong-speu" class="kampong-speu">Thpong</option>
                                                <option data-en-title=="Leuk Daek" value="767" data-value="leuk-daek"
                                                    data-chained="kandal" class="kandal">Leuk Daek</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="commune" class="col control-label">Sangkat/Commune <i
                                                class="red">*</i></label>
                                        <div class="col col-3 form-input">
                                            <select data-placeholder="Select a commune" id="commune" name="commune"
                                                class="form-control map_form" required>
                                                <option value="" data-value="">Select a Sangkat/Commune</option>
                                                <option data-en-title=="Sampong Chey" value="256"
                                                    data-value="sampong-chey" data-chained="cheung-prey"
                                                    class="cheung-prey">Sampong Chey</option>
                                                <option data-en-title=="Amleang" value="512" data-value="amleang"
                                                    data-chained="thpong" class="thpong">Amleang</option>
                                                <option data-en-title=="Kampong Phnum" value="768"
                                                    data-value="kampong-phnum" data-chained="leuk-daek"
                                                    class="leuk-daek">Kampong Phnum</option>
                                                <option data-en-title=="Kampong Luong" value="1280"
                                                    data-value="kampong-luong" data-chained="krakor" class="krakor">
                                                    Kampong Luong</option>
                                                <option data-en-title=="Sdaeung Chey" value="257"
                                                    data-value="sdaeung-chey" data-chained="cheung-prey"
                                                    class="cheung-prey">Sdaeung Chey</option>
                                                <option data-en-title=="Monourom" value="513" data-value="monourom"
                                                    data-chained="thpong" class="thpong">Monourom</option>
                                                <option data-en-title=="K'am Samnar" value="769" data-value="kam-samnar"
                                                    data-chained="leuk-daek" class="leuk-daek">K'am Samnar</option>
                                                <option data-en-title=="Tuol Sangkae" value="1025"
                                                    data-value="tuol-sangkae" data-chained="ruessei-kaev"
                                                    class="ruessei-kaev">Tuol Sangkae</option>
                                                <option data-en-title=="Kampong Pou" value="1281"
                                                    data-value="kampong-pou" data-chained="krakor" class="krakor">
                                                    Kampong Pou</option>
                                                <option data-en-title=="Anlong Phe" value="1537" data-value="anlong-phe"
                                                    data-chained="thala-barivat" class="thala-barivat">Anlong Phe
                                                </option>
                                                <option data-en-title=="Chong Cheach" value="1793"
                                                    data-value="chong-cheach" data-chained="dambae" class="dambae">Chong
                                                    Cheach</option>
                                                <option data-en-title=="Soutip" value="258" data-value="soutip"
                                                    data-chained="cheung-prey" class="cheung-prey">Soutip</option>
                                                <option data-en-title=="Prambei Mum" value="514"
                                                    data-value="prambei-mum" data-chained="thpong" class="thpong">
                                                    Prambei Mum</option>
                                                <option data-en-title=="Khpob ateav" value="770"
                                                    data-value="khpob-ateav" data-chained="leuk-daek" class="leuk-daek">
                                                    Khpob ateav</option>
                                                <option data-en-title=="Svay Pak" value="1026" data-value="svay-pak"
                                                    data-chained="ruessei-kaev" class="ruessei-kaev">Svay Pak</option>
                                                <option data-en-title=="Kbal Trach" value="1282" data-value="kbal-trach"
                                                    data-chained="krakor" class="krakor">Kbal Trach</option>
                                                <option data-en-title=="Chamkar Leu" value="1538"
                                                    data-value="chamkar-leu" data-chained="thala-barivat"
                                                    class="thala-barivat">Chamkar Leu</option>
                                                <option data-en-title=="Dambae" value="1794" data-value="dambae"
                                                    data-chained="dambae" class="dambae">Dambae</option>
                                                <option data-en-title=="Srama" value="259" data-value="srama"
                                                    data-chained="cheung-prey" class="cheung-prey">Srama</option>
                                                <option data-en-title=="Rung Roeang" value="515"
                                                    data-value="rung-roeang" data-chained="thpong" class="thpong">Rung
                                                    Roeang</option>
                                                <option data-en-title=="Peam Reang" value="771" data-value="peam-reang"
                                                    data-chained="leuk-daek" class="leuk-daek">Peam Reang</option>
                                                <option data-en-title=="Kiloumaetr Lekh Prammuoy" value="1027"
                                                    data-value="kiloumaetr-lekh-prammuoy" data-chained="ruessei-kaev"
                                                    class="ruessei-kaev">Kiloumaetr Lekh Prammuoy</option>
                                                <option data-en-title=="Ou Sandan" value="1283" data-value="ou-sandan"
                                                    data-chained="krakor" class="krakor">Ou Sandan</option>
                                                <option data-en-title=="Kang Cham" value="1539" data-value="kang-cham"
                                                    data-chained="thala-barivat" class="thala-barivat">Kang Cham
                                                </option>
                                                <option data-en-title=="Kouk Srok" value="1795" data-value="kouk-srok"
                                                    data-chained="dambae" class="dambae">Kouk Srok</option>
                                                <option data-en-title=="Trapeang Kor" value="260"
                                                    data-value="trapeang-kor" data-chained="cheung-prey"
                                                    class="cheung-prey">Trapeang Kor</option>
                                                <option data-en-title=="Toap Mean" value="516" data-value="toap-mean"
                                                    data-chained="thpong" class="thpong">Toap Mean</option>
                                                <option data-en-title=="Preaek Dach" value="772"
                                                    data-value="preaek-dach" data-chained="leuk-daek" class="leuk-daek">
                                                    Preaek Dach</option>
                                                <option data-en-title=="Ruessei Kaev" value="1028"
                                                    data-value="ruessei-kaev" data-chained="ruessei-kaev"
                                                    class="ruessei-kaev">Ruessei Kaev</option>
                                                <option data-en-title=="Sna Ansa" value="1284" data-value="sna-ansa"
                                                    data-chained="krakor" class="krakor">Sna Ansa</option>
                                                <option data-en-title=="Kaoh Snaeng" value="1540"
                                                    data-value="kaoh-snaeng" data-chained="thala-barivat"
                                                    class="thala-barivat">Kaoh Snaeng</option>
                                                <option data-en-title=="Neang Teut" value="1796" data-value="neang-teut"
                                                    data-chained="dambae" class="dambae">Neang Teut</option>
                                                <option data-en-title=="Veal Pon" value="517" data-value="veal-pon"
                                                    data-chained="thpong" class="thpong">Veal Pon</option>
                                                <option data-en-title=="Preaek Tonloab" value="773"
                                                    data-value="preaek-tonloab" data-chained="leuk-daek"
                                                    class="leuk-daek">Preaek Tonloab</option>
                                                <option data-en-title=="Chrang Chamreh Muoy" value="1029"
                                                    data-value="chrang-chamreh-muoy" data-chained="ruessei-kaev"
                                                    class="ruessei-kaev">Chrang Chamreh Muoy</option>
                                                <option data-en-title=="Svay Sa" value="1285" data-value="svay-sa"
                                                    data-chained="krakor" class="krakor">Svay Sa</option>
                                                <option data-en-title=="Anlong Chrey" value="1541"
                                                    data-value="anlong-chrey" data-chained="thala-barivat"
                                                    class="thala-barivat">Anlong Chrey</option>
                                                <option data-en-title=="Seda" value="1797" data-value="seda"
                                                    data-chained="dambae" class="dambae">Seda</option>
                                                <option data-en-title=="Boeng Kok" value="262" data-value="boeng-kok"
                                                    data-chained="krong-kampong-cham" class="krong-kampong-cham">Boeng
                                                    Kok</option>
                                                <option data-en-title=="Yea Angk" value="518" data-value="yea-angk"
                                                    data-chained="thpong" class="thpong">Yea Angk</option>
                                                <option data-en-title=="Sandar" value="774" data-value="sandar"
                                                    data-chained="leuk-daek" class="leuk-daek">Sandar</option>
                                                <option data-en-title=="Chrang Chamreh Pir" value="1030"
                                                    data-value="chrang-chamreh-pir" data-chained="ruessei-kaev"
                                                    class="ruessei-kaev">Chrang Chamreh Pir</option>
                                                <option data-en-title=="Tnaot Chum" value="1286" data-value="tnaot-chum"
                                                    data-chained="krakor" class="krakor">Tnaot Chum</option>
                                                <option data-en-title=="Ou Rai" value="1542" data-value="ou-rai"
                                                    data-chained="thala-barivat" class="thala-barivat">Ou Rai</option>
                                                <option data-en-title=="Trapeang Pring" value="1798"
                                                    data-value="trapeang-pring" data-chained="dambae" class="dambae">
                                                    Trapeang Pring</option>
                                                <option data-en-title=="Kampong Cham" value="263"
                                                    data-value="kampong-cham" data-chained="krong-kampong-cham"
                                                    class="krong-kampong-cham">Kampong Cham</option>
                                                <option data-en-title=="Ou Svay" value="1543" data-value="ou-svay"
                                                    data-chained="thala-barivat" class="thala-barivat">Ou Svay</option>
                                                <option data-en-title=="Tuek Chrov" value="1799" data-value="tuek-chrov"
                                                    data-chained="dambae" class="dambae">Tuek Chrov</option>
                                                <option data-en-title=="Sambuor Meas" value="264"
                                                    data-value="sambuor-meas" data-chained="krong-kampong-cham"
                                                    class="krong-kampong-cham">Sambuor Meas</option>
                                                <option data-en-title=="Bak Sna" value="520" data-value="bak-sna"
                                                    data-chained="baray" class="baray">Bak Sna</option>
                                                <option data-en-title=="Akreiy Ksatr" value="776"
                                                    data-value="akreiy-ksatr" data-chained="lvea-aem" class="lvea-aem">
                                                    Akreiy Ksatr</option>
                                                <option data-en-title=="Krang Thnong" value="1032"
                                                    data-value="krang-thnong" data-chained="saensokh" class="saensokh">
                                                    Krang Thnong</option>
                                                <option data-en-title=="Bak Chenhchien" value="1288"
                                                    data-value="bak-chenhchien" data-chained="phnum-kravanh"
                                                    class="phnum-kravanh">Bak Chenhchien</option>
                                                <option data-en-title=="Preah Rumkel" value="1544"
                                                    data-value="preah-rumkel" data-chained="thala-barivat"
                                                    class="thala-barivat">Preah Rumkel</option>
                                                <option data-en-title=="Veal Vong" value="265" data-value="veal-vong"
                                                    data-chained="krong-kampong-cham" class="krong-kampong-cham">Veal
                                                    Vong</option>
                                                <option data-en-title=="Ballangk" value="521" data-value="ballangk"
                                                    data-chained="baray" class="baray">Ballangk</option>
                                                <option data-en-title=="Barong" value="777" data-value="barong"
                                                    data-chained="lvea-aem" class="lvea-aem">Barong</option>
                                                <option data-en-title=="Phnom Penh Thmei" value="1033"
                                                    data-value="phnom-penh-thmei" data-chained="saensokh"
                                                    class="saensokh">Phnom Penh Thmei</option>
                                                <option data-en-title=="Leach" value="1289" data-value="leach"
                                                    data-chained="phnum-kravanh" class="phnum-kravanh">Leach</option>
                                                <option data-en-title=="Sam'ang" value="1545" data-value="samang"
                                                    data-chained="thala-barivat" class="thala-barivat">Sam'ang</option>
                                                <option data-en-title=="Chhuk" value="1801" data-value="chhuk"
                                                    data-chained="krouch-chhmar" class="krouch-chhmar">Chhuk</option>
                                                <option data-en-title=="Baray" value="522" data-value="baray"
                                                    data-chained="baray" class="baray">Baray</option>
                                                <option data-en-title=="Boeng Krum" value="778" data-value="boeng-krum"
                                                    data-chained="lvea-aem" class="lvea-aem">Boeng Krum</option>
                                                <option data-en-title=="Tuek Thla" value="1034" data-value="tuek-thla"
                                                    data-chained="saensokh" class="saensokh" selected>Tuek Thla</option>
                                                <option data-en-title=="Phteah Rung" value="1290"
                                                    data-value="phteah-rung" data-chained="phnum-kravanh"
                                                    class="phnum-kravanh">Phteah Rung</option>
                                                <option data-en-title=="Srae Ruessei" value="1546"
                                                    data-value="srae-ruessei" data-chained="thala-barivat"
                                                    class="thala-barivat">Srae Ruessei</option>
                                                <option data-en-title=="Chumnik" value="1802" data-value="chumnik"
                                                    data-chained="krouch-chhmar" class="krouch-chhmar">Chumnik</option>
                                                <option data-en-title=="Ampil" value="267" data-value="ampil"
                                                    data-chained="kampong-siem" class="kampong-siem">Ampil</option>
                                                <option data-en-title=="Boeng" value="523" data-value="boeng"
                                                    data-chained="baray" class="baray">Boeng</option>
                                                <option data-en-title=="Kaoh Kaev" value="779" data-value="kaoh-kaev"
                                                    data-chained="lvea-aem" class="lvea-aem">Kaoh Kaev</option>
                                                <option data-en-title=="Khmuonh" value="1035" data-value="khmuonh"
                                                    data-chained="saensokh" class="saensokh">Khmuonh</option>
                                                <option data-en-title=="Prongil" value="1291" data-value="prongil"
                                                    data-chained="phnum-kravanh" class="phnum-kravanh">Prongil</option>
                                                <option data-en-title=="Thala" value="1547" data-value="thala"
                                                    data-chained="thala-barivat" class="thala-barivat">Thala</option>
                                                <option data-en-title=="Kampong Treas" value="1803"
                                                    data-value="kampong-treas" data-chained="krouch-chhmar"
                                                    class="krouch-chhmar">Kampong Treas</option>
                                                <option data-en-title=="Han Chey" value="268" data-value="han-chey"
                                                    data-chained="kampong-siem" class="kampong-siem">Han Chey</option>
                                                <option data-en-title=="Chaeung Daeung" value="524"
                                                    data-value="chaeung-daeung" data-chained="baray" class="baray">
                                                    Chaeung Daeung</option>
                                                <option data-en-title=="Kaoh Reah" value="780" data-value="kaoh-reah"
                                                    data-chained="lvea-aem" class="lvea-aem">Kaoh Reah</option>
                                                <option data-en-title=="Rokat" value="1292" data-value="rokat"
                                                    data-chained="phnum-kravanh" class="phnum-kravanh">Rokat</option>
                                                <option data-en-title=="Kaoh Pir" value="1804" data-value="kaoh-pir"
                                                    data-chained="krouch-chhmar" class="krouch-chhmar">Kaoh Pir</option>
                                                <option data-en-title=="Kien Chrey" value="269" data-value="kien-chrey"
                                                    data-chained="kampong-siem" class="kampong-siem">Kien Chrey</option>
                                                <option data-en-title=="Chraneang" value="525" data-value="chraneang"
                                                    data-chained="baray" class="baray">Chraneang</option>
                                                <option data-en-title=="Lvea Sa" value="781" data-value="lvea-sa"
                                                    data-chained="lvea-aem" class="lvea-aem">Lvea Sa</option>
                                                <option data-en-title=="Trapeang Krasang" value="1037"
                                                    data-value="trapeang-krasang" data-chained="por-senchey"
                                                    class="por-senchey">Trapeang Krasang</option>
                                                <option data-en-title=="Santreae" value="1293" data-value="santreae"
                                                    data-chained="phnum-kravanh" class="phnum-kravanh">Santreae</option>
                                                <option data-en-title=="Chantrea" value="1549" data-value="chantrea"
                                                    data-chained="chantrea" class="chantrea">Chantrea</option>
                                                <option data-en-title=="Krouch Chhmar" value="1805"
                                                    data-value="krouch-chhmar" data-chained="krouch-chhmar"
                                                    class="krouch-chhmar">Krouch Chhmar</option>
                                                <option data-en-title=="Kokor" value="270" data-value="kokor"
                                                    data-chained="kampong-siem" class="kampong-siem">Kokor</option>
                                                <option data-en-title=="Chhuk Khsach" value="526"
                                                    data-value="chhuk-khsach" data-chained="baray" class="baray">Chhuk
                                                    Khsach</option>
                                                <option data-en-title=="Peam Oknha Ong" value="782"
                                                    data-value="peam-oknha-ong" data-chained="lvea-aem"
                                                    class="lvea-aem">Peam Oknha Ong</option>
                                                <option data-en-title=="Phleung Chheh Roteh" value="1038"
                                                    data-value="phleung-chheh-roteh" data-chained="por-senchey"
                                                    class="por-senchey">Phleung Chheh Roteh</option>
                                                <option data-en-title=="Samraong" value="1294" data-value="samraong"
                                                    data-chained="phnum-kravanh" class="phnum-kravanh">Samraong</option>
                                                <option data-en-title=="Chres" value="1550" data-value="chres"
                                                    data-chained="chantrea" class="chantrea">Chres</option>
                                                <option data-en-title=="Peus Muoy" value="1806" data-value="peus-muoy"
                                                    data-chained="krouch-chhmar" class="krouch-chhmar">Peus Muoy
                                                </option>
                                                <option data-en-title=="Kaoh Mitt" value="271" data-value="kaoh-mitt"
                                                    data-chained="kampong-siem" class="kampong-siem">Kaoh Mitt</option>
                                                <option data-en-title=="Chong Doung" value="527"
                                                    data-value="chong-doung" data-chained="baray" class="baray">Chong
                                                    Doung</option>
                                                <option data-en-title=="Phum Thum" value="783" data-value="phum-thum"
                                                    data-chained="lvea-aem" class="lvea-aem">Phum Thum</option>
                                                <option data-en-title=="Chaom Chau" value="1039" data-value="chaom-chau"
                                                    data-chained="por-senchey" class="por-senchey">Chaom Chau</option>
                                                <option data-en-title=="Me Sa Thngak" value="1551"
                                                    data-value="me-sa-thngak" data-chained="chantrea" class="chantrea">
                                                    Me Sa Thngak</option>
                                                <option data-en-title=="Peus Pir" value="1807" data-value="peus-pir"
                                                    data-chained="krouch-chhmar" class="krouch-chhmar">Peus Pir</option>
                                                <option data-en-title=="Kaoh Roka" value="272" data-value="kaoh-roka"
                                                    data-chained="kampong-siem" class="kampong-siem">Kaoh Roka</option>
                                                <option data-en-title=="Chrolong" value="528" data-value="chrolong"
                                                    data-chained="baray" class="baray">Chrolong</option>
                                                <option data-en-title=="Preaek Kmeng" value="784"
                                                    data-value="preaek-kmeng" data-chained="lvea-aem" class="lvea-aem">
                                                    Preaek Kmeng</option>
                                                <option data-en-title=="Kakab" value="1040" data-value="kakab"
                                                    data-chained="por-senchey" class="por-senchey">Kakab</option>
                                                <option data-en-title=="Chamraeun Phal" value="1296"
                                                    data-value="chamraeun-phal" data-chained="krong-pursat"
                                                    class="krong-pursat">Chamraeun Phal</option>
                                                <option data-en-title=="Prey Kokir" value="1552" data-value="prey-kokir"
                                                    data-chained="chantrea" class="chantrea">Prey Kokir</option>
                                                <option data-en-title=="Preaek A Chi" value="1808"
                                                    data-value="preaek-a-chi" data-chained="krouch-chhmar"
                                                    class="krouch-chhmar">Preaek A Chi</option>
                                                <option data-en-title=="Kaoh Samraong" value="273"
                                                    data-value="kaoh-samraong" data-chained="kampong-siem"
                                                    class="kampong-siem">Kaoh Samraong</option>
                                                <option data-en-title=="Kokir Thum" value="529" data-value="kokir-thum"
                                                    data-chained="baray" class="baray">Kokir Thum</option>
                                                <option data-en-title=="Preaek Rey" value="785" data-value="preaek-rey"
                                                    data-chained="lvea-aem" class="lvea-aem">Preaek Rey</option>
                                                <option data-en-title=="Samraong Kraom" value="1041"
                                                    data-value="samraong-kraom" data-chained="por-senchey"
                                                    class="por-senchey">Samraong Kraom</option>
                                                <option data-en-title=="Lolok Sa" value="1297" data-value="lolok-sa"
                                                    data-chained="krong-pursat" class="krong-pursat">Lolok Sa</option>
                                                <option data-en-title=="Samraong" value="1553" data-value="samraong"
                                                    data-chained="chantrea" class="chantrea">Samraong</option>
                                                <option data-en-title=="Roka Khnaor" value="1809"
                                                    data-value="roka-khnaor" data-chained="krouch-chhmar"
                                                    class="krouch-chhmar">Roka Khnaor</option>
                                                <option data-en-title=="Kaoh Tontuem" value="274"
                                                    data-value="kaoh-tontuem" data-chained="kampong-siem"
                                                    class="kampong-siem">Kaoh Tontuem</option>
                                                <option data-en-title=="Krava" value="530" data-value="krava"
                                                    data-chained="baray" class="baray">Krava</option>
                                                <option data-en-title=="Preaek Ruessei" value="786"
                                                    data-value="preaek-ruessei" data-chained="lvea-aem"
                                                    class="lvea-aem">Preaek Ruessei</option>
                                                <option data-en-title=="Boeng Thum" value="1042" data-value="boeng-thum"
                                                    data-chained="por-senchey" class="por-senchey">Boeng Thum</option>
                                                <option data-en-title=="Phteah Prey" value="1298"
                                                    data-value="phteah-prey" data-chained="krong-pursat"
                                                    class="krong-pursat">Phteah Prey</option>
                                                <option data-en-title=="Tuol Sdei" value="1554" data-value="tuol-sdei"
                                                    data-chained="chantrea" class="chantrea">Tuol Sdei</option>
                                                <option data-en-title=="Svay Khleang" value="1810"
                                                    data-value="svay-khleang" data-chained="krouch-chhmar"
                                                    class="krouch-chhmar">Svay Khleang</option>
                                                <option data-en-title=="Krala" value="275" data-value="krala"
                                                    data-chained="kampong-siem" class="kampong-siem">Krala</option>
                                                <option data-en-title=="Andoung Pou" value="531"
                                                    data-value="andoung-pou" data-chained="baray" class="baray">Andoung
                                                    Pou</option>
                                                <option data-en-title=="Sambuor" value="787" data-value="sambuor"
                                                    data-chained="lvea-aem" class="lvea-aem">Sambuor</option>
                                                <option data-en-title=="Kamboul" value="1043" data-value="kamboul"
                                                    data-chained="por-senchey" class="por-senchey">Kamboul</option>
                                                <option data-en-title=="Prey Nhi" value="1299" data-value="prey-nhi"
                                                    data-chained="krong-pursat" class="krong-pursat">Prey Nhi</option>
                                                <option data-en-title=="Trea" value="1811" data-value="trea"
                                                    data-chained="krouch-chhmar" class="krouch-chhmar">Trea</option>
                                                <option data-en-title=="Ou Svay" value="276" data-value="ou-svay"
                                                    data-chained="kampong-siem" class="kampong-siem">Ou Svay</option>
                                                <option data-en-title=="Pongro" value="532" data-value="pongro"
                                                    data-chained="baray" class="baray">Pongro</option>
                                                <option data-en-title=="Sarikakaev" value="788" data-value="sarikakaev"
                                                    data-chained="lvea-aem" class="lvea-aem">Sarikakaev</option>
                                                <option data-en-title=="Kantaok" value="1044" data-value="kantaok"
                                                    data-chained="por-senchey" class="por-senchey">Kantaok</option>
                                                <option data-en-title=="Roleab" value="1300" data-value="roleab"
                                                    data-chained="krong-pursat" class="krong-pursat">Roleab</option>
                                                <option data-en-title=="Banteay Krang" value="1556"
                                                    data-value="banteay-krang" data-chained="kampong-rou"
                                                    class="kampong-rou">Banteay Krang</option>
                                                <option data-en-title=="Tuol Snuol" value="1812" data-value="tuol-snuol"
                                                    data-chained="krouch-chhmar" class="krouch-chhmar">Tuol Snuol
                                                </option>
                                                <option data-en-title=="Ro'ang" value="277" data-value="roang"
                                                    data-chained="kampong-siem" class="kampong-siem">Ro'ang</option>
                                                <option data-en-title=="Sou Young" value="533" data-value="sou-young"
                                                    data-chained="baray" class="baray">Sou Young</option>
                                                <option data-en-title=="Thma Kor" value="789" data-value="thma-kor"
                                                    data-chained="lvea-aem" class="lvea-aem">Thma Kor</option>
                                                <option data-en-title=="Ovlaok" value="1045" data-value="ovlaok"
                                                    data-chained="por-senchey" class="por-senchey">Ovlaok</option>
                                                <option data-en-title=="Svay At" value="1301" data-value="svay-at"
                                                    data-chained="krong-pursat" class="krong-pursat">Svay At</option>
                                                <option data-en-title=="Nhor" value="1557" data-value="nhor"
                                                    data-chained="kampong-rou" class="kampong-rou">Nhor</option>
                                                <option data-en-title=="Rumchek" value="278" data-value="rumchek"
                                                    data-chained="kampong-siem" class="kampong-siem">Rumchek</option>
                                                <option data-en-title=="Sralau" value="534" data-value="sralau"
                                                    data-chained="baray" class="baray">Sralau</option>
                                                <option data-en-title=="Tuek Khleang" value="790"
                                                    data-value="tuek-khleang" data-chained="lvea-aem" class="lvea-aem">
                                                    Tuek Khleang</option>
                                                <option data-en-title=="Snao" value="1046" data-value="snao"
                                                    data-chained="por-senchey" class="por-senchey">Snao</option>
                                                <option data-en-title=="Banteay Dei" value="1302"
                                                    data-value="banteay-dei" data-chained="krong-pursat"
                                                    class="krong-pursat">Banteay Dei</option>
                                                <option data-en-title=="Ksetr" value="1558" data-value="ksetr"
                                                    data-chained="kampong-rou" class="kampong-rou">Ksetr</option>
                                                <option data-en-title=="Chan Mul" value="1814" data-value="chan-mul"
                                                    data-chained="memot" class="memot">Chan Mul</option>
                                                <option data-en-title=="Srak" value="279" data-value="srak"
                                                    data-chained="kampong-siem" class="kampong-siem">Srak</option>
                                                <option data-en-title=="Svay Phleung" value="535"
                                                    data-value="svay-phleung" data-chained="baray" class="baray">Svay
                                                    Phleung</option>
                                                <option data-en-title=="Preah Ponlea" value="1559"
                                                    data-value="preah-ponlea" data-chained="kampong-rou"
                                                    class="kampong-rou">Preah Ponlea</option>
                                                <option data-en-title=="Choam" value="1815" data-value="choam"
                                                    data-chained="memot" class="memot">Choam</option>
                                                <option data-en-title=="Trean" value="280" data-value="trean"
                                                    data-chained="kampong-siem" class="kampong-siem">Trean</option>
                                                <option data-en-title=="Tnaot Chum" value="536" data-value="tnaot-chum"
                                                    data-chained="baray" class="baray">Tnaot Chum</option>
                                                <option data-en-title=="Preaek Anhchanh" value="792"
                                                    data-value="preaek-anhchanh" data-chained="mukh-kampul"
                                                    class="mukh-kampul">Preaek Anhchanh</option>
                                                <option data-en-title=="Chrouy Changva" value="1048"
                                                    data-value="chrouy-changva" data-chained="chrouy-changva"
                                                    class="chrouy-changva">Chrouy Changva</option>
                                                <option data-en-title=="Ou Saom" value="1304" data-value="ou-saom"
                                                    data-chained="veal-veaeng" class="veal-veaeng">Ou Saom</option>
                                                <option data-en-title=="Prey Thum" value="1560" data-value="prey-thum"
                                                    data-chained="kampong-rou" class="kampong-rou">Prey Thum</option>
                                                <option data-en-title=="Choam Kravien" value="1816"
                                                    data-value="choam-kravien" data-chained="memot" class="memot">Choam
                                                    Kravien</option>
                                                <option data-en-title=="Vihear Thum" value="281"
                                                    data-value="vihear-thum" data-chained="kampong-siem"
                                                    class="kampong-siem">Vihear Thum</option>
                                                <option data-en-title=="Treal" value="537" data-value="treal"
                                                    data-chained="baray" class="baray">Treal</option>
                                                <option data-en-title=="Preaek Dambang" value="793"
                                                    data-value="preaek-dambang" data-chained="mukh-kampul"
                                                    class="mukh-kampul">Preaek Dambang</option>
                                                <option data-en-title=="Preaek Lieb" value="1049"
                                                    data-value="preaek-lieb" data-chained="chrouy-changva"
                                                    class="chrouy-changva">Preaek Lieb</option>
                                                <option data-en-title=="Krapeu Pir" value="1305" data-value="krapeu-pir"
                                                    data-chained="veal-veaeng" class="veal-veaeng">Krapeu Pir</option>
                                                <option data-en-title=="Reach Montir" value="1561"
                                                    data-value="reach-montir" data-chained="kampong-rou"
                                                    class="kampong-rou">Reach Montir</option>
                                                <option data-en-title=="Choam Ta Mau" value="1817"
                                                    data-value="choam-ta-mau" data-chained="memot" class="memot">Choam
                                                    Ta Mau</option>
                                                <option data-en-title=="Roka Kaong Muoy" value="794"
                                                    data-value="roka-kaong-muoy" data-chained="mukh-kampul"
                                                    class="mukh-kampul">Roka Kaong Muoy</option>
                                                <option data-en-title=="Preaek Ta Sek" value="1050"
                                                    data-value="preaek-ta-sek" data-chained="chrouy-changva"
                                                    class="chrouy-changva">Preaek Ta Sek</option>
                                                <option data-en-title=="Anlong Reab" value="1306"
                                                    data-value="anlong-reab" data-chained="veal-veaeng"
                                                    class="veal-veaeng">Anlong Reab</option>
                                                <option data-en-title=="Samlei" value="1562" data-value="samlei"
                                                    data-chained="kampong-rou" class="kampong-rou">Samlei</option>
                                                <option data-en-title=="Dar" value="1818" data-value="dar"
                                                    data-chained="memot" class="memot">Dar</option>
                                                <option data-en-title=="Angkor Ban" value="283" data-value="angkor-ban"
                                                    data-chained="kang-meas" class="kang-meas">Angkor Ban</option>
                                                <option data-en-title=="Chey" value="539" data-value="chey"
                                                    data-chained="kampong-svay" class="kampong-svay">Chey</option>
                                                <option data-en-title=="Roka Kaong Pir" value="795"
                                                    data-value="roka-kaong-pir" data-chained="mukh-kampul"
                                                    class="mukh-kampul">Roka Kaong Pir</option>
                                                <option data-en-title=="Kaoh Dach" value="1051" data-value="kaoh-dach"
                                                    data-chained="chrouy-changva" class="chrouy-changva">Kaoh Dach
                                                </option>
                                                <option data-en-title=="Pramaoy" value="1307" data-value="pramaoy"
                                                    data-chained="veal-veaeng" class="veal-veaeng">Pramaoy</option>
                                                <option data-en-title=="Samyaong" value="1563" data-value="samyaong"
                                                    data-chained="kampong-rou" class="kampong-rou">Samyaong</option>
                                                <option data-en-title=="Kampoan" value="1819" data-value="kampoan"
                                                    data-chained="memot" class="memot">Kampoan</option>
                                                <option data-en-title=="Kang Ta Noeng" value="284"
                                                    data-value="kang-ta-noeng" data-chained="kang-meas"
                                                    class="kang-meas">Kang Ta Noeng</option>
                                                <option data-en-title=="Damrei Slab" value="540"
                                                    data-value="damrei-slab" data-chained="kampong-svay"
                                                    class="kampong-svay">Damrei Slab</option>
                                                <option data-en-title=="Ruessei Chrouy" value="796"
                                                    data-value="ruessei-chrouy" data-chained="mukh-kampul"
                                                    class="mukh-kampul">Ruessei Chrouy</option>
                                                <option data-en-title=="Bak Khaeng" value="1052" data-value="bak-khaeng"
                                                    data-chained="chrouy-changva" class="chrouy-changva">Bak Khaeng
                                                </option>
                                                <option data-en-title=="Thma Da" value="1308" data-value="thma-da"
                                                    data-chained="veal-veaeng" class="veal-veaeng">Thma Da</option>
                                                <option data-en-title=="Svay Ta Yean" value="1564"
                                                    data-value="svay-ta-yean" data-chained="kampong-rou"
                                                    class="kampong-rou">Svay Ta Yean</option>
                                                <option data-en-title=="Kokir" value="1820" data-value="kokir"
                                                    data-chained="memot" class="memot">Kokir</option>
                                                <option data-en-title=="Khchau" value="285" data-value="khchau"
                                                    data-chained="kang-meas" class="kang-meas">Khchau</option>
                                                <option data-en-title=="Kampong Kou" value="541"
                                                    data-value="kampong-kou" data-chained="kampong-svay"
                                                    class="kampong-svay">Kampong Kou</option>
                                                <option data-en-title=="Sambuor Meas" value="797"
                                                    data-value="sambuor-meas" data-chained="mukh-kampul"
                                                    class="mukh-kampul">Sambuor Meas</option>
                                                <option data-en-title=="Thmei" value="1565" data-value="thmei"
                                                    data-chained="kampong-rou" class="kampong-rou">Thmei</option>
                                                <option data-en-title=="Memong" value="1821" data-value="memong"
                                                    data-chained="memot" class="memot">Memong</option>
                                                <option data-en-title=="Peam Chi Kang" value="286"
                                                    data-value="peam-chi-kang" data-chained="kang-meas"
                                                    class="kang-meas">Peam Chi Kang</option>
                                                <option data-en-title=="Kampong Svay" value="542"
                                                    data-value="kampong-svay" data-chained="kampong-svay"
                                                    class="kampong-svay">Kampong Svay</option>
                                                <option data-en-title=="Svay Ampear" value="798"
                                                    data-value="svay-ampear" data-chained="mukh-kampul"
                                                    class="mukh-kampul">Svay Ampear</option>
                                                <option data-en-title=="Preaek Pnov" value="1054"
                                                    data-value="preaek-pnov" data-chained="preaek-pnov"
                                                    class="preaek-pnov">Preaek Pnov</option>
                                                <option data-en-title=="Malik" value="1310" data-value="malik"
                                                    data-chained="andoung-meas" class="andoung-meas">Malik</option>
                                                <option data-en-title=="Tnaot" value="1566" data-value="tnaot"
                                                    data-chained="kampong-rou" class="kampong-rou">Tnaot</option>
                                                <option data-en-title=="Memot" value="1822" data-value="memot"
                                                    data-chained="memot" class="memot">Memot</option>
                                                <option data-en-title=="Preaek Koy" value="287" data-value="preaek-koy"
                                                    data-chained="kang-meas" class="kang-meas">Preaek Koy</option>
                                                <option data-en-title=="Ni Pechr" value="543" data-value="ni-pechr"
                                                    data-chained="kampong-svay" class="kampong-svay">Ni Pechr</option>
                                                <option data-en-title=="Ponhea Pon" value="1055" data-value="ponhea-pon"
                                                    data-chained="preaek-pnov" class="preaek-pnov">Ponhea Pon</option>
                                                <option data-en-title=="Nhang" value="1311" data-value="nhang"
                                                    data-chained="andoung-meas" class="andoung-meas">Nhang</option>
                                                <option data-en-title=="Rumchek" value="1823" data-value="rumchek"
                                                    data-chained="memot" class="memot">Rumchek</option>
                                                <option data-en-title=="Preaek Krabau" value="288"
                                                    data-value="preaek-krabau" data-chained="kang-meas"
                                                    class="kang-meas">Preaek Krabau</option>
                                                <option data-en-title=="Phat Sanday" value="544"
                                                    data-value="phat-sanday" data-chained="kampong-svay"
                                                    class="kampong-svay">Phat Sanday</option>
                                                <option data-en-title=="Baek Chan" value="800" data-value="baek-chan"
                                                    data-chained="angk-snuol" class="angk-snuol">Baek Chan</option>
                                                <option data-en-title=="Samraong" value="1056" data-value="samraong"
                                                    data-chained="preaek-pnov" class="preaek-pnov">Samraong</option>
                                                <option data-en-title=="Ta Lav" value="1312" data-value="ta-lav"
                                                    data-chained="andoung-meas" class="andoung-meas">Ta Lav</option>
                                                <option data-en-title=="Bos Mon" value="1568" data-value="bos-mon"
                                                    data-chained="rumduol" class="rumduol">Bos Mon</option>
                                                <option data-en-title=="Rung" value="1824" data-value="rung"
                                                    data-chained="memot" class="memot">Rung</option>
                                                <option data-en-title=="Reay Pay" value="289" data-value="reay-pay"
                                                    data-chained="kang-meas" class="kang-meas">Reay Pay</option>
                                                <option data-en-title=="San Kor" value="545" data-value="san-kor"
                                                    data-chained="kampong-svay" class="kampong-svay">San Kor</option>
                                                <option data-en-title=="Chhak Chheu Neang" value="801"
                                                    data-value="chhak-chheu-neang" data-chained="angk-snuol"
                                                    class="angk-snuol">Chhak Chheu Neang</option>
                                                <option data-en-title=="Kouk Roka" value="1057" data-value="kouk-roka"
                                                    data-chained="preaek-pnov" class="preaek-pnov">Kouk Roka</option>
                                                <option data-en-title=="Thmea" value="1569" data-value="thmea"
                                                    data-chained="rumduol" class="rumduol">Thmea</option>
                                                <option data-en-title=="Tonlung" value="1825" data-value="tonlung"
                                                    data-chained="memot" class="memot">Tonlung</option>
                                                <option data-en-title=="Roka Ar" value="290" data-value="roka-ar"
                                                    data-chained="kang-meas" class="kang-meas">Roka Ar</option>
                                                <option data-en-title=="Tbaeng" value="546" data-value="tbaeng"
                                                    data-chained="kampong-svay" class="kampong-svay">Tbaeng</option>
                                                <option data-en-title=="Damnak Ampil" value="802"
                                                    data-value="damnak-ampil" data-chained="angk-snuol"
                                                    class="angk-snuol">Damnak Ampil</option>
                                                <option data-en-title=="Ponsang" value="1058" data-value="ponsang"
                                                    data-chained="preaek-pnov" class="preaek-pnov">Ponsang</option>
                                                <option data-en-title=="Kachanh" value="1314" data-value="kachanh"
                                                    data-chained="krong-ban-lung" class="krong-ban-lung">Kachanh
                                                </option>
                                                <option data-en-title=="Chak" value="1570" data-value="chak"
                                                    data-chained="rumduol" class="rumduol">Chak</option>
                                                <option data-en-title=="Tramung" value="1826" data-value="tramung"
                                                    data-chained="memot" class="memot">Tramung</option>
                                                <option data-en-title=="Roka Koy" value="291" data-value="roka-koy"
                                                    data-chained="kang-meas" class="kang-meas">Roka Koy</option>
                                                <option data-en-title=="Trapeang Ruessei" value="547"
                                                    data-value="trapeang-ruessei" data-chained="kampong-svay"
                                                    class="kampong-svay">Trapeang Ruessei</option>
                                                <option data-en-title=="Krang Mkak" value="803" data-value="krang-mkak"
                                                    data-chained="angk-snuol" class="angk-snuol">Krang Mkak</option>
                                                <option data-en-title=="Labansiek" value="1315" data-value="labansiek"
                                                    data-chained="krong-ban-lung" class="krong-ban-lung">Labansiek
                                                </option>
                                                <option data-en-title=="Chrung Popel" value="1571"
                                                    data-value="chrung-popel" data-chained="rumduol" class="rumduol">
                                                    Chrung Popel</option>
                                                <option data-en-title=="Treak" value="1827" data-value="treak"
                                                    data-chained="memot" class="memot">Treak</option>
                                                <option data-en-title=="Sdau" value="292" data-value="sdau"
                                                    data-chained="kang-meas" class="kang-meas">Sdau</option>
                                                <option data-en-title=="Kdei Doung" value="548" data-value="kdei-doung"
                                                    data-chained="kampong-svay" class="kampong-svay">Kdei Doung</option>
                                                <option data-en-title=="Lumhach" value="804" data-value="lumhach"
                                                    data-chained="angk-snuol" class="angk-snuol">Lumhach</option>
                                                <option data-en-title=="Chbar Ampov Muoy" value="1060"
                                                    data-value="chbar-ampov-muoy" data-chained="chbar-ampov"
                                                    class="chbar-ampov">Chbar Ampov Muoy</option>
                                                <option data-en-title=="Yeak Laom" value="1316" data-value="yeak-laom"
                                                    data-chained="krong-ban-lung" class="krong-ban-lung">Yeak Laom
                                                </option>
                                                <option data-en-title=="Kampong Ampil" value="1572"
                                                    data-value="kampong-ampil" data-chained="rumduol" class="rumduol">
                                                    Kampong Ampil</option>
                                                <option data-en-title=="Sour Kong" value="293" data-value="sour-kong"
                                                    data-chained="kang-meas" class="kang-meas">Sour Kong</option>
                                                <option data-en-title=="Prey Kuy" value="549" data-value="prey-kuy"
                                                    data-chained="kampong-svay" class="kampong-svay">Prey Kuy</option>
                                                <option data-en-title=="Mkak" value="805" data-value="mkak"
                                                    data-chained="angk-snuol" class="angk-snuol">Mkak</option>
                                                <option data-en-title=="Chbar Ampov Pir" value="1061"
                                                    data-value="chbar-ampov-pir" data-chained="chbar-ampov"
                                                    class="chbar-ampov">Chbar Ampov Pir</option>
                                                <option data-en-title=="Meun Chey" value="1573" data-value="meun-chey"
                                                    data-chained="rumduol" class="rumduol">Meun Chey</option>
                                                <option data-en-title=="Ampil Ta Pok" value="1829"
                                                    data-value="ampil-ta-pok" data-chained="ou-reang-ov"
                                                    class="ou-reang-ov">Ampil Ta Pok</option>
                                                <option data-en-title=="Peuk" value="806" data-value="peuk"
                                                    data-chained="angk-snuol" class="angk-snuol">Peuk</option>
                                                <option data-en-title=="Nirouth" value="1062" data-value="nirouth"
                                                    data-chained="chbar-ampov" class="chbar-ampov">Nirouth</option>
                                                <option data-en-title=="Kak" value="1318" data-value="kak"
                                                    data-chained="bar-kaev" class="bar-kaev">Kak</option>
                                                <option data-en-title=="Pong Tuek" value="1574" data-value="pong-tuek"
                                                    data-chained="rumduol" class="rumduol">Pong Tuek</option>
                                                <option data-en-title=="Chak" value="1830" data-value="chak"
                                                    data-chained="ou-reang-ov" class="ou-reang-ov">Chak</option>
                                                <option data-en-title=="Kampong Reab" value="295"
                                                    data-value="kampong-reab" data-chained="kaoh-soutin"
                                                    class="kaoh-soutin">Kampong Reab</option>
                                                <option data-en-title=="Damrei Choan Khla" value="551"
                                                    data-value="damrei-choan-khla" data-chained="krong-stueng-saen"
                                                    class="krong-stueng-saen">Damrei Choan Khla</option>
                                                <option data-en-title=="Prey Puoch" value="807" data-value="prey-puoch"
                                                    data-chained="angk-snuol" class="angk-snuol">Prey Puoch</option>
                                                <option data-en-title=="Preaek Pra" value="1063" data-value="preaek-pra"
                                                    data-chained="chbar-ampov" class="chbar-ampov">Preaek Pra</option>
                                                <option data-en-title=="Ke Chong" value="1319" data-value="ke-chong"
                                                    data-chained="bar-kaev" class="bar-kaev">Ke Chong</option>
                                                <option data-en-title=="Sangkae" value="1575" data-value="sangkae"
                                                    data-chained="rumduol" class="rumduol">Sangkae</option>
                                                <option data-en-title=="Damrel" value="1831" data-value="damrel"
                                                    data-chained="ou-reang-ov" class="ou-reang-ov">Damrel</option>
                                                <option data-en-title=="Kaoh Soutin" value="296"
                                                    data-value="kaoh-soutin" data-chained="kaoh-soutin"
                                                    class="kaoh-soutin">Kaoh Soutin</option>
                                                <option data-en-title=="Kampong Thum" value="552"
                                                    data-value="kampong-thum" data-chained="krong-stueng-saen"
                                                    class="krong-stueng-saen">Kampong Thum</option>
                                                <option data-en-title=="Samraong Leu" value="808"
                                                    data-value="samraong-leu" data-chained="angk-snuol"
                                                    class="angk-snuol">Samraong Leu</option>
                                                <option data-en-title=="Veal Sbov" value="1064" data-value="veal-sbov"
                                                    data-chained="chbar-ampov" class="chbar-ampov">Veal Sbov</option>
                                                <option data-en-title=="Laming" value="1320" data-value="laming"
                                                    data-chained="bar-kaev" class="bar-kaev">Laming</option>
                                                <option data-en-title=="Svay Chek" value="1576" data-value="svay-chek"
                                                    data-chained="rumduol" class="rumduol">Svay Chek</option>
                                                <option data-en-title=="Kong Chey" value="1832" data-value="kong-chey"
                                                    data-chained="ou-reang-ov" class="ou-reang-ov">Kong Chey</option>
                                                <option data-en-title=="Lve" value="297" data-value="lve"
                                                    data-chained="kaoh-soutin" class="kaoh-soutin">Lve</option>
                                                <option data-en-title=="Kampong Roteh" value="553"
                                                    data-value="kampong-roteh" data-chained="krong-stueng-saen"
                                                    class="krong-stueng-saen">Kampong Roteh</option>
                                                <option data-en-title=="Tuol Prech" value="809" data-value="tuol-prech"
                                                    data-chained="angk-snuol" class="angk-snuol">Tuol Prech</option>
                                                <option data-en-title=="Preaek Aeng" value="1065"
                                                    data-value="preaek-aeng" data-chained="chbar-ampov"
                                                    class="chbar-ampov">Preaek Aeng</option>
                                                <option data-en-title=="Lung Khung" value="1321" data-value="lung-khung"
                                                    data-chained="bar-kaev" class="bar-kaev">Lung Khung</option>
                                                <option data-en-title=="Thna Thnong" value="1577"
                                                    data-value="thna-thnong" data-chained="rumduol" class="rumduol">Thna
                                                    Thnong</option>
                                                <option data-en-title=="Mien" value="1833" data-value="mien"
                                                    data-chained="ou-reang-ov" class="ou-reang-ov">Mien</option>
                                                <option data-en-title=="Moha Leaph" value="298" data-value="moha-leaph"
                                                    data-chained="kaoh-soutin" class="kaoh-soutin">Moha Leaph</option>
                                                <option data-en-title=="Ou Kanthor" value="554" data-value="ou-kanthor"
                                                    data-chained="krong-stueng-saen" class="krong-stueng-saen">Ou
                                                    Kanthor</option>
                                                <option data-en-title=="Kbal Kaoh" value="1066" data-value="kbal-kaoh"
                                                    data-chained="chbar-ampov" class="chbar-ampov">Kbal Kaoh</option>
                                                <option data-en-title=="Seung" value="1322" data-value="seung"
                                                    data-chained="bar-kaev" class="bar-kaev">Seung</option>
                                                <option data-en-title=="Preah Theat" value="1834"
                                                    data-value="preah-theat" data-chained="ou-reang-ov"
                                                    class="ou-reang-ov">Preah Theat</option>
                                                <option data-en-title=="Moha Khnhoung" value="299"
                                                    data-value="moha-khnhoung" data-chained="kaoh-soutin"
                                                    class="kaoh-soutin">Moha Khnhoung</option>
                                                <option data-en-title=="Kampong Krabau" value="555"
                                                    data-value="kampong-krabau" data-chained="krong-stueng-saen"
                                                    class="krong-stueng-saen">Kampong Krabau</option>
                                                <option data-en-title=="Chhveang" value="811" data-value="chhveang"
                                                    data-chained="popnhea-lueu" class="popnhea-lueu">Chhveang</option>
                                                <option data-en-title=="Preaek Thmei" value="1067"
                                                    data-value="preaek-thmei" data-chained="chbar-ampov"
                                                    class="chbar-ampov">Preaek Thmei</option>
                                                <option data-en-title=="Ting Chak" value="1323" data-value="ting-chak"
                                                    data-chained="bar-kaev" class="bar-kaev">Ting Chak</option>
                                                <option data-en-title=="Ampil" value="1579" data-value="ampil"
                                                    data-chained="romeas-haek" class="romeas-haek">Ampil</option>
                                                <option data-en-title=="Tuol Sophi" value="1835" data-value="tuol-sophi"
                                                    data-chained="ou-reang-ov" class="ou-reang-ov">Tuol Sophi</option>
                                                <option data-en-title=="Peam Prathnuoh" value="300"
                                                    data-value="peam-prathnuoh" data-chained="kaoh-soutin"
                                                    class="kaoh-soutin">Peam Prathnuoh</option>
                                                <option data-en-title=="Prey Ta Hu" value="556" data-value="prey-ta-hu"
                                                    data-chained="krong-stueng-saen" class="krong-stueng-saen">Prey Ta
                                                    Hu</option>
                                                <option data-en-title=="Chrey Loas" value="812" data-value="chrey-loas"
                                                    data-chained="popnhea-lueu" class="popnhea-lueu">Chrey Loas</option>
                                                <option data-en-title=="Andoung Pou" value="1580"
                                                    data-value="andoung-pou" data-chained="romeas-haek"
                                                    class="romeas-haek">Andoung Pou</option>
                                                <option data-en-title=="Pongro" value="301" data-value="pongro"
                                                    data-chained="kaoh-soutin" class="kaoh-soutin">Pongro</option>
                                                <option data-en-title=="Achar Leak" value="557" data-value="achar-leak"
                                                    data-chained="krong-stueng-saen" class="krong-stueng-saen">Achar
                                                    Leak</option>
                                                <option data-en-title=="Kampong Luong" value="813"
                                                    data-value="kampong-luong" data-chained="popnhea-lueu"
                                                    class="popnhea-lueu">Kampong Luong</option>
                                                <option data-en-title=="S'ang" value="1069" data-value="sang"
                                                    data-chained="chey-saen" class="chey-saen">S'ang</option>
                                                <option data-en-title=="Serei Mongkol" value="1325"
                                                    data-value="serei-mongkol" data-chained="koun-mom" class="koun-mom">
                                                    Serei Mongkol</option>
                                                <option data-en-title=="Andoung Trabaek" value="1581"
                                                    data-value="andoung-trabaek" data-chained="romeas-haek"
                                                    class="romeas-haek">Andoung Trabaek</option>
                                                <option data-en-title=="Doun Tei" value="1837" data-value="doun-tei"
                                                    data-chained="ponhea-kraek" class="ponhea-kraek">Doun Tei</option>
                                                <option data-en-title=="Banteay Neang" value="46"
                                                    data-value="banteay-neang" data-chained="mongkol-borei"
                                                    class="mongkol-borei">Banteay Neang</option>
                                                <option data-en-title=="Preaek Ta Nong" value="302"
                                                    data-value="preaek-ta-nong" data-chained="kaoh-soutin"
                                                    class="kaoh-soutin">Preaek Ta Nong</option>
                                                <option data-en-title=="Srayov" value="558" data-value="srayov"
                                                    data-chained="krong-stueng-saen" class="krong-stueng-saen">Srayov
                                                </option>
                                                <option data-en-title=="Kampong Os" value="814" data-value="kampong-os"
                                                    data-chained="popnhea-lueu" class="popnhea-lueu">Kampong Os</option>
                                                <option data-en-title=="Tasu" value="1070" data-value="tasu"
                                                    data-chained="chey-saen" class="chey-saen">Tasu</option>
                                                <option data-en-title=="Srae Angkrong" value="1326"
                                                    data-value="srae-angkrong" data-chained="koun-mom" class="koun-mom">
                                                    Srae Angkrong</option>
                                                <option data-en-title=="Angk Prasrae" value="1582"
                                                    data-value="angk-prasrae" data-chained="romeas-haek"
                                                    class="romeas-haek">Angk Prasrae</option>
                                                <option data-en-title=="Kak" value="1838" data-value="kak"
                                                    data-chained="ponhea-kraek" class="ponhea-kraek">Kak</option>
                                                <option data-en-title=="Bat Trang" value="47" data-value="bat-trang"
                                                    data-chained="mongkol-borei" class="mongkol-borei">Bat Trang
                                                </option>
                                                <option data-en-title=="Kaoh Chen" value="815" data-value="kaoh-chen"
                                                    data-chained="popnhea-lueu" class="popnhea-lueu">Kaoh Chen</option>
                                                <option data-en-title=="Khyang" value="1071" data-value="khyang"
                                                    data-chained="chey-saen" class="chey-saen">Khyang</option>
                                                <option data-en-title=="Ta Ang" value="1327" data-value="ta-ang"
                                                    data-chained="koun-mom" class="koun-mom">Ta Ang</option>
                                                <option data-en-title=="Chantrei" value="1583" data-value="chantrei"
                                                    data-chained="romeas-haek" class="romeas-haek">Chantrei</option>
                                                <option data-en-title=="Kandaol Chrum" value="1839"
                                                    data-value="kandaol-chrum" data-chained="ponhea-kraek"
                                                    class="ponhea-kraek">Kandaol Chrum</option>
                                                <option data-en-title=="Chamnaom" value="48" data-value="chamnaom"
                                                    data-chained="mongkol-borei" class="mongkol-borei">Chamnaom</option>
                                                <option data-en-title=="Baray" value="304" data-value="baray"
                                                    data-chained="prey-chhor" class="prey-chhor">Baray</option>
                                                <option data-en-title=="Doung" value="560" data-value="doung"
                                                    data-chained="prasat-ballangk" class="prasat-ballangk">Doung
                                                </option>
                                                <option data-en-title=="Phnum Bat" value="816" data-value="phnum-bat"
                                                    data-chained="popnhea-lueu" class="popnhea-lueu">Phnum Bat</option>
                                                <option data-en-title=="Chrach" value="1072" data-value="chrach"
                                                    data-chained="chey-saen" class="chey-saen">Chrach</option>
                                                <option data-en-title=="Teun" value="1328" data-value="teun"
                                                    data-chained="koun-mom" class="koun-mom">Teun</option>
                                                <option data-en-title=="Chrey Thum" value="1584" data-value="chrey-thum"
                                                    data-chained="romeas-haek" class="romeas-haek">Chrey Thum</option>
                                                <option data-en-title=="Kaong Kang" value="1840" data-value="kaong-kang"
                                                    data-chained="ponhea-kraek" class="ponhea-kraek">Kaong Kang</option>
                                                <option data-en-title=="Kouk Ballangk" value="49"
                                                    data-value="kouk-ballangk" data-chained="mongkol-borei"
                                                    class="mongkol-borei">Kouk Ballangk</option>
                                                <option data-en-title=="Boeng Nay" value="305" data-value="boeng-nay"
                                                    data-chained="prey-chhor" class="prey-chhor">Boeng Nay</option>
                                                <option data-en-title=="Kraya" value="561" data-value="kraya"
                                                    data-chained="prasat-ballangk" class="prasat-ballangk">Kraya
                                                </option>
                                                <option data-en-title=="Ponhea Lueu" value="817"
                                                    data-value="ponhea-lueu" data-chained="popnhea-lueu"
                                                    class="popnhea-lueu">Ponhea Lueu</option>
                                                <option data-en-title=="Thmea" value="1073" data-value="thmea"
                                                    data-chained="chey-saen" class="chey-saen">Thmea</option>
                                                <option data-en-title=="Trapeang Chres" value="1329"
                                                    data-value="trapeang-chres" data-chained="koun-mom"
                                                    class="koun-mom">Trapeang Chres</option>
                                                <option data-en-title=="Doung" value="1585" data-value="doung"
                                                    data-chained="romeas-haek" class="romeas-haek">Doung</option>
                                                <option data-en-title=="Kraek" value="1841" data-value="kraek"
                                                    data-chained="ponhea-kraek" class="ponhea-kraek">Kraek</option>
                                                <option data-en-title=="Koy Maeng" value="50" data-value="koy-maeng"
                                                    data-chained="mongkol-borei" class="mongkol-borei">Koy Maeng
                                                </option>
                                                <option data-en-title=="Chrey Vien" value="306" data-value="chrey-vien"
                                                    data-chained="prey-chhor" class="prey-chhor">Chrey Vien</option>
                                                <option data-en-title=="Phan Nheum" value="562" data-value="phan-nheum"
                                                    data-chained="prasat-ballangk" class="prasat-ballangk">Phan Nheum
                                                </option>
                                                <option data-en-title=="Preaek Ta Teaen" value="818"
                                                    data-value="preaek-ta-teaen" data-chained="popnhea-lueu"
                                                    class="popnhea-lueu">Preaek Ta Teaen</option>
                                                <option data-en-title=="Putrea" value="1074" data-value="putrea"
                                                    data-chained="chey-saen" class="chey-saen">Putrea</option>
                                                <option data-en-title=="Trapeang Kraham" value="1330"
                                                    data-value="trapeang-kraham" data-chained="koun-mom"
                                                    class="koun-mom">Trapeang Kraham</option>
                                                <option data-en-title=="Kampong Trach" value="1586"
                                                    data-value="kampong-trach" data-chained="romeas-haek"
                                                    class="romeas-haek">Kampong Trach</option>
                                                <option data-en-title=="Popel" value="1842" data-value="popel"
                                                    data-chained="ponhea-kraek" class="ponhea-kraek">Popel</option>
                                                <option data-en-title=="Ou Prasat" value="51" data-value="ou-prasat"
                                                    data-chained="mongkol-borei" class="mongkol-borei">Ou Prasat
                                                </option>
                                                <option data-en-title=="Khvet Thum" value="307" data-value="khvet-thum"
                                                    data-chained="prey-chhor" class="prey-chhor">Khvet Thum</option>
                                                <option data-en-title=="Sa Kream" value="563" data-value="sa-kream"
                                                    data-chained="prasat-ballangk" class="prasat-ballangk">Sa Kream
                                                </option>
                                                <option data-en-title=="Phsar Daek" value="819" data-value="phsar-daek"
                                                    data-chained="popnhea-lueu" class="popnhea-lueu">Phsar Daek</option>
                                                <option data-en-title=="Kokir" value="1587" data-value="kokir"
                                                    data-chained="romeas-haek" class="romeas-haek">Kokir</option>
                                                <option data-en-title=="Trapeang Phlong" value="1843"
                                                    data-value="trapeang-phlong" data-chained="ponhea-kraek"
                                                    class="ponhea-kraek">Trapeang Phlong</option>
                                                <option data-en-title=="Phnum Touch" value="52" data-value="phnum-touch"
                                                    data-chained="mongkol-borei" class="mongkol-borei">Phnum Touch
                                                </option>
                                                <option data-en-title=="Kor" value="308" data-value="kor"
                                                    data-chained="prey-chhor" class="prey-chhor">Kor</option>
                                                <option data-en-title=="Sala Visai" value="564" data-value="sala-visai"
                                                    data-chained="prasat-ballangk" class="prasat-ballangk">Sala Visai
                                                </option>
                                                <option data-en-title=="Tumnob Thum" value="820"
                                                    data-value="tumnob-thum" data-chained="popnhea-lueu"
                                                    class="popnhea-lueu">Tumnob Thum</option>
                                                <option data-en-title=="Chhaeb Muoy" value="1076"
                                                    data-value="chhaeb-muoy" data-chained="chhaeb" class="chhaeb">Chhaeb
                                                    Muoy</option>
                                                <option data-en-title=="Chey Otdam" value="1332" data-value="chey-otdam"
                                                    data-chained="lumphat" class="lumphat">Chey Otdam</option>
                                                <option data-en-title=="Krasang" value="1588" data-value="krasang"
                                                    data-chained="romeas-haek" class="romeas-haek">Krasang</option>
                                                <option data-en-title=="Veal Mlu" value="1844" data-value="veal-mlu"
                                                    data-chained="ponhea-kraek" class="ponhea-kraek">Veal Mlu</option>
                                                <option data-en-title=="Rohat Tuek" value="53" data-value="rohat-tuek"
                                                    data-chained="mongkol-borei" class="mongkol-borei">Rohat Tuek
                                                </option>
                                                <option data-en-title=="Krouch" value="309" data-value="krouch"
                                                    data-chained="prey-chhor" class="prey-chhor">Krouch</option>
                                                <option data-en-title=="Sameakki" value="565" data-value="sameakki"
                                                    data-chained="prasat-ballangk" class="prasat-ballangk">Sameakki
                                                </option>
                                                <option data-en-title=="Vihear Luong" value="821"
                                                    data-value="vihear-luong" data-chained="popnhea-lueu"
                                                    class="popnhea-lueu">Vihear Luong</option>
                                                <option data-en-title=="Chhaeb Pir" value="1077" data-value="chhaeb-pir"
                                                    data-chained="chhaeb" class="chhaeb">Chhaeb Pir</option>
                                                <option data-en-title=="Ka Laeng" value="1333" data-value="ka-laeng"
                                                    data-chained="lumphat" class="lumphat">Ka Laeng</option>
                                                <option data-en-title=="Mukh Da" value="1589" data-value="mukh-da"
                                                    data-chained="romeas-haek" class="romeas-haek">Mukh Da</option>
                                                <option data-en-title=="Ruessei Kraok" value="54"
                                                    data-value="ruessei-kraok" data-chained="mongkol-borei"
                                                    class="mongkol-borei">Ruessei Kraok</option>
                                                <option data-en-title=="Lvea" value="310" data-value="lvea"
                                                    data-chained="prey-chhor" class="prey-chhor">Lvea</option>
                                                <option data-en-title=="Tuol Kreul" value="566" data-value="tuol-kreul"
                                                    data-chained="prasat-ballangk" class="prasat-ballangk">Tuol Kreul
                                                </option>
                                                <option data-en-title=="Sangkae Muoy" value="1078"
                                                    data-value="sangkae-muoy" data-chained="chhaeb" class="chhaeb">
                                                    Sangkae Muoy</option>
                                                <option data-en-title=="La Bang Muoy" value="1334"
                                                    data-value="la-bang-muoy" data-chained="lumphat" class="lumphat">La
                                                    Bang Muoy</option>
                                                <option data-en-title=="Mream" value="1590" data-value="mream"
                                                    data-chained="romeas-haek" class="romeas-haek">Mream</option>
                                                <option data-en-title=="Suong" value="1846" data-value="suong"
                                                    data-chained="krong-suong" class="krong-suong">Suong</option>
                                                <option data-en-title=="Sambuor" value="55" data-value="sambuor"
                                                    data-chained="mongkol-borei" class="mongkol-borei">Sambuor</option>
                                                <option data-en-title=="Mien" value="311" data-value="mien"
                                                    data-chained="prey-chhor" class="prey-chhor">Mien</option>
                                                <option data-en-title=="Khpob" value="823" data-value="khpob"
                                                    data-chained="sang" class="sang">Khpob</option>
                                                <option data-en-title=="Sangkae Pir" value="1079"
                                                    data-value="sangkae-pir" data-chained="chhaeb" class="chhaeb">
                                                    Sangkae Pir</option>
                                                <option data-en-title=="La Bang Pir" value="1335"
                                                    data-value="la-bang-pir" data-chained="lumphat" class="lumphat">La
                                                    Bang Pir</option>
                                                <option data-en-title=="Sambuor" value="1591" data-value="sambuor"
                                                    data-chained="romeas-haek" class="romeas-haek">Sambuor</option>
                                                <option data-en-title=="Vihear Luong" value="1847"
                                                    data-value="vihear-luong" data-chained="krong-suong"
                                                    class="krong-suong">Vihear Luong</option>
                                                <option data-en-title=="Soea" value="56" data-value="soea"
                                                    data-chained="mongkol-borei" class="mongkol-borei">Soea</option>
                                                <option data-en-title=="Prey Chhor" value="312" data-value="prey-chhor"
                                                    data-chained="prey-chhor" class="prey-chhor">Prey Chhor</option>
                                                <option data-en-title=="Chhuk" value="568" data-value="chhuk"
                                                    data-chained="prasat-sambour" class="prasat-sambour">Chhuk</option>
                                                <option data-en-title=="Kaoh Anlong Chen" value="824"
                                                    data-value="kaoh-anlong-chen" data-chained="sang" class="sang">Kaoh
                                                    Anlong Chen</option>
                                                <option data-en-title=="Mlu Prey Muoy" value="1080"
                                                    data-value="mlu-prey-muoy" data-chained="chhaeb" class="chhaeb">Mlu
                                                    Prey Muoy</option>
                                                <option data-en-title=="Pa Tang" value="1336" data-value="pa-tang"
                                                    data-chained="lumphat" class="lumphat">Pa Tang</option>
                                                <option data-en-title=="Sambatt Mean Chey" value="1592"
                                                    data-value="sambatt-mean-chey" data-chained="romeas-haek"
                                                    class="romeas-haek">Sambatt Mean Chey</option>
                                                <option data-en-title=="Srah Reang" value="57" data-value="srah-reang"
                                                    data-chained="mongkol-borei" class="mongkol-borei">Srah Reang
                                                </option>
                                                <option data-en-title=="Sour Saen" value="313" data-value="sour-saen"
                                                    data-chained="prey-chhor" class="prey-chhor">Sour Saen</option>
                                                <option data-en-title=="Koul" value="569" data-value="koul"
                                                    data-chained="prasat-sambour" class="prasat-sambour">Koul</option>
                                                <option data-en-title=="Kaoh Khael" value="825" data-value="kaoh-khael"
                                                    data-chained="sang" class="sang">Kaoh Khael</option>
                                                <option data-en-title=="Mlu Prey Pir" value="1081"
                                                    data-value="mlu-prey-pir" data-chained="chhaeb" class="chhaeb">Mlu
                                                    Prey Pir</option>
                                                <option data-en-title=="Seda" value="1337" data-value="seda"
                                                    data-chained="lumphat" class="lumphat">Seda</option>
                                                <option data-en-title=="Trapeang Sdau" value="1593"
                                                    data-value="trapeang-sdau" data-chained="romeas-haek"
                                                    class="romeas-haek">Trapeang Sdau</option>
                                                <option data-en-title=="Anhchaeum" value="1849" data-value="anhchaeum"
                                                    data-chained="tboung-khmum" class="tboung-khmum">Anhchaeum</option>
                                                <option data-en-title=="Ta Lam" value="58" data-value="ta-lam"
                                                    data-chained="mongkol-borei" class="mongkol-borei">Ta Lam</option>
                                                <option data-en-title=="Samraong" value="314" data-value="samraong"
                                                    data-chained="prey-chhor" class="prey-chhor">Samraong</option>
                                                <option data-en-title=="Sambour" value="570" data-value="sambour"
                                                    data-chained="prasat-sambour" class="prasat-sambour">Sambour
                                                </option>
                                                <option data-en-title=="Kaoh Khsach Tonlea" value="826"
                                                    data-value="kaoh-khsach-tonlea" data-chained="sang" class="sang">
                                                    Kaoh Khsach Tonlea</option>
                                                <option data-en-title=="Kampong Sralau Muoy" value="1082"
                                                    data-value="kampong-sralau-muoy" data-chained="chhaeb"
                                                    class="chhaeb">Kampong Sralau Muoy</option>
                                                <option data-en-title=="Tras" value="1594" data-value="tras"
                                                    data-chained="romeas-haek" class="romeas-haek">Tras</option>
                                                <option data-en-title=="Boeng Pruol" value="1850"
                                                    data-value="boeng-pruol" data-chained="tboung-khmum"
                                                    class="tboung-khmum">Boeng Pruol</option>
                                                <option data-en-title=="Srangae" value="315" data-value="srangae"
                                                    data-chained="prey-chhor" class="prey-chhor">Srangae</option>
                                                <option data-en-title=="Sraeung" value="571" data-value="sraeung"
                                                    data-chained="prasat-sambour" class="prasat-sambour">Sraeung
                                                </option>
                                                <option data-en-title=="Krang Yov" value="827" data-value="krang-yov"
                                                    data-chained="sang" class="sang">Krang Yov</option>
                                                <option data-en-title=="Kampong Sralau Pir" value="1083"
                                                    data-value="kampong-sralau-pir" data-chained="chhaeb"
                                                    class="chhaeb">Kampong Sralau Pir</option>
                                                <option data-en-title=="Cha Ung" value="1339" data-value="cha-ung"
                                                    data-chained="ou-chum" class="ou-chum">Cha Ung</option>
                                                <option data-en-title=="Chikor" value="1851" data-value="chikor"
                                                    data-chained="tboung-khmum" class="tboung-khmum">Chikor</option>
                                                <option data-en-title=="Nam Tau" value="60" data-value="nam-tau"
                                                    data-chained="phnum-srok" class="phnum-srok">Nam Tau</option>
                                                <option data-en-title=="Thma Pun" value="316" data-value="thma-pun"
                                                    data-chained="prey-chhor" class="prey-chhor">Thma Pun</option>
                                                <option data-en-title=="Tang Krasau" value="572"
                                                    data-value="tang-krasau" data-chained="prasat-sambour"
                                                    class="prasat-sambour">Tang Krasau</option>
                                                <option data-en-title=="Prasat" value="828" data-value="prasat"
                                                    data-chained="sang" class="sang">Prasat</option>
                                                <option data-en-title=="Pouy" value="1340" data-value="pouy"
                                                    data-chained="ou-chum" class="ou-chum">Pouy</option>
                                                <option data-en-title=="Angk Ta Sou" value="1596"
                                                    data-value="angk-ta-sou" data-chained="svay-chrum"
                                                    class="svay-chrum">Angk Ta Sou</option>
                                                <option data-en-title=="Chirou Muoy" value="1852"
                                                    data-value="chirou-muoy" data-chained="tboung-khmum"
                                                    class="tboung-khmum">Chirou Muoy</option>
                                                <option data-en-title=="Paoy Char" value="61" data-value="paoy-char"
                                                    data-chained="phnum-srok" class="phnum-srok">Paoy Char</option>
                                                <option data-en-title=="Tong Rong" value="317" data-value="tong-rong"
                                                    data-chained="prey-chhor" class="prey-chhor">Tong Rong</option>
                                                <option data-en-title=="Preaek Ambel" value="829"
                                                    data-value="preaek-ambel" data-chained="sang" class="sang">Preaek
                                                    Ambel</option>
                                                <option data-en-title=="Choam Khsant" value="1085"
                                                    data-value="choam-khsant" data-chained="choam-khsant"
                                                    class="choam-khsant">Choam Khsant</option>
                                                <option data-en-title=="Aekakpheap" value="1341" data-value="aekakpheap"
                                                    data-chained="ou-chum" class="ou-chum">Aekakpheap</option>
                                                <option data-en-title=="Basak" value="1597" data-value="basak"
                                                    data-chained="svay-chrum" class="svay-chrum">Basak</option>
                                                <option data-en-title=="Chirou Pir" value="1853" data-value="chirou-pir"
                                                    data-chained="tboung-khmum" class="tboung-khmum">Chirou Pir</option>
                                                <option data-en-title=="Ponley" value="62" data-value="ponley"
                                                    data-chained="phnum-srok" class="phnum-srok">Ponley</option>
                                                <option data-en-title=="Trapeang Preah" value="318"
                                                    data-value="trapeang-preah" data-chained="prey-chhor"
                                                    class="prey-chhor">Trapeang Preah</option>
                                                <option data-en-title=="Chheu Teal" value="574" data-value="chheu-teal"
                                                    data-chained="sandan" class="sandan">Chheu Teal</option>
                                                <option data-en-title=="Preaek Koy" value="830" data-value="preaek-koy"
                                                    data-chained="sang" class="sang">Preaek Koy</option>
                                                <option data-en-title=="Tuek Kraham" value="1086"
                                                    data-value="tuek-kraham" data-chained="choam-khsant"
                                                    class="choam-khsant">Tuek Kraham</option>
                                                <option data-en-title=="Kalai" value="1342" data-value="kalai"
                                                    data-chained="ou-chum" class="ou-chum">Kalai</option>
                                                <option data-en-title=="Chambak" value="1598" data-value="chambak"
                                                    data-chained="svay-chrum" class="svay-chrum">Chambak</option>
                                                <option data-en-title=="Chob" value="1854" data-value="chob"
                                                    data-chained="tboung-khmum" class="tboung-khmum">Chob</option>
                                                <option data-en-title=="Spean Sraeng" value="63"
                                                    data-value="spean-sraeng" data-chained="phnum-srok"
                                                    class="phnum-srok">Spean Sraeng</option>
                                                <option data-en-title=="Dang Kambet" value="575"
                                                    data-value="dang-kambet" data-chained="sandan" class="sandan">Dang
                                                    Kambet</option>
                                                <option data-en-title=="Roka Khpos" value="831" data-value="roka-khpos"
                                                    data-chained="sang" class="sang">Roka Khpos</option>
                                                <option data-en-title=="Pring Thum" value="1087" data-value="pring-thum"
                                                    data-chained="choam-khsant" class="choam-khsant">Pring Thum</option>
                                                <option data-en-title=="Ou Chum" value="1343" data-value="ou-chum"
                                                    data-chained="ou-chum" class="ou-chum">Ou Chum</option>
                                                <option data-en-title=="Chamlang" value="1599" data-value="chamlang"
                                                    data-chained="svay-chrum" class="svay-chrum">Chamlang</option>
                                                <option data-en-title=="Kor" value="1855" data-value="kor"
                                                    data-chained="tboung-khmum" class="tboung-khmum">Kor</option>
                                                <option data-en-title=="Srah Chik" value="64" data-value="srah-chik"
                                                    data-chained="phnum-srok" class="phnum-srok">Srah Chik</option>
                                                <option data-en-title=="Baray" value="320" data-value="baray"
                                                    data-chained="srei-santhor" class="srei-santhor">Baray</option>
                                                <option data-en-title=="Klaeng" value="576" data-value="klaeng"
                                                    data-chained="sandan" class="sandan">Klaeng</option>
                                                <option data-en-title=="S'ang Phnum" value="832" data-value="sang-phnum"
                                                    data-chained="sang" class="sang">S'ang Phnum</option>
                                                <option data-en-title=="Rumdaoh Srae" value="1088"
                                                    data-value="rumdaoh-srae" data-chained="choam-khsant"
                                                    class="choam-khsant">Rumdaoh Srae</option>
                                                <option data-en-title=="Sameakki" value="1344" data-value="sameakki"
                                                    data-chained="ou-chum" class="ou-chum">Sameakki</option>
                                                <option data-en-title=="Ta Suos" value="1600" data-value="ta-suos"
                                                    data-chained="svay-chrum" class="svay-chrum">Ta Suos</option>
                                                <option data-en-title=="Lngieng" value="1856" data-value="lngieng"
                                                    data-chained="tboung-khmum" class="tboung-khmum">Lngieng</option>
                                                <option data-en-title=="Phnum Dei" value="65" data-value="phnum-dei"
                                                    data-chained="phnum-srok" class="phnum-srok">Phnum Dei</option>
                                                <option data-en-title=="Chi Bal" value="321" data-value="chi-bal"
                                                    data-chained="srei-santhor" class="srei-santhor">Chi Bal</option>
                                                <option data-en-title=="Mean Ritth" value="577" data-value="mean-ritth"
                                                    data-chained="sandan" class="sandan">Mean Ritth</option>
                                                <option data-en-title=="Setbou" value="833" data-value="setbou"
                                                    data-chained="sang" class="sang">Setbou</option>
                                                <option data-en-title=="Yeang" value="1089" data-value="yeang"
                                                    data-chained="choam-khsant" class="choam-khsant">Yeang</option>
                                                <option data-en-title=="L'ak" value="1345" data-value="lak"
                                                    data-chained="ou-chum" class="ou-chum">L'ak</option>
                                                <option data-en-title=="Chheu Teal" value="1601" data-value="chheu-teal"
                                                    data-chained="svay-chrum" class="svay-chrum">Chheu Teal</option>
                                                <option data-en-title=="Moung Riev" value="1857" data-value="moung-riev"
                                                    data-chained="tboung-khmum" class="tboung-khmum">Moung Riev</option>
                                                <option data-en-title=="Khnar Sa" value="322" data-value="khnar-sa"
                                                    data-chained="srei-santhor" class="srei-santhor">Khnar Sa</option>
                                                <option data-en-title=="Mean Chey" value="578" data-value="mean-chey"
                                                    data-chained="sandan" class="sandan">Mean Chey</option>
                                                <option data-en-title=="Svay Prateal" value="834"
                                                    data-value="svay-prateal" data-chained="sang" class="sang">Svay
                                                    Prateal</option>
                                                <option data-en-title=="Kantuot" value="1090" data-value="kantuot"
                                                    data-chained="choam-khsant" class="choam-khsant">Kantuot</option>
                                                <option data-en-title=="Doun Sa" value="1602" data-value="doun-sa"
                                                    data-chained="svay-chrum" class="svay-chrum">Doun Sa</option>
                                                <option data-en-title=="Peam Chileang" value="1858"
                                                    data-value="peam-chileang" data-chained="tboung-khmum"
                                                    class="tboung-khmum">Peam Chileang</option>
                                                <option data-en-title=="Chhnuor Mean Chey" value="67"
                                                    data-value="chhnuor-mean-chey" data-chained="preah-netr-preah"
                                                    class="preah-netr-preah">Chhnuor Mean Chey</option>
                                                <option data-en-title=="Kaoh Andaet" value="323"
                                                    data-value="kaoh-andaet" data-chained="srei-santhor"
                                                    class="srei-santhor">Kaoh Andaet</option>
                                                <option data-en-title=="Ngan" value="579" data-value="ngan"
                                                    data-chained="sandan" class="sandan">Ngan</option>
                                                <option data-en-title=="Svay Rolum" value="835" data-value="svay-rolum"
                                                    data-chained="sang" class="sang">Svay Rolum</option>
                                                <option data-en-title=="Bar Kham" value="1347" data-value="bar-kham"
                                                    data-chained="ou-ya-dav" class="ou-ya-dav">Bar Kham</option>
                                                <option data-en-title=="Kouk Pring" value="1603" data-value="kouk-pring"
                                                    data-chained="svay-chrum" class="svay-chrum">Kouk Pring</option>
                                                <option data-en-title=="Roka Po Pram" value="1859"
                                                    data-value="roka-po-pram" data-chained="tboung-khmum"
                                                    class="tboung-khmum">Roka Po Pram</option>
                                                <option data-en-title=="Chob Veari" value="68" data-value="chob-veari"
                                                    data-chained="preah-netr-preah" class="preah-netr-preah">Chob Veari
                                                </option>
                                                <option data-en-title=="Mean Chey" value="324" data-value="mean-chey"
                                                    data-chained="srei-santhor" class="srei-santhor">Mean Chey</option>
                                                <option data-en-title=="Sandan" value="580" data-value="sandan"
                                                    data-chained="sandan" class="sandan">Sandan</option>
                                                <option data-en-title=="Ta Lon" value="836" data-value="ta-lon"
                                                    data-chained="sang" class="sang">Ta Lon</option>
                                                <option data-en-title=="Kuleaen Tboung" value="1092"
                                                    data-value="kuleaen-tboung" data-chained="kuleaen" class="kuleaen">
                                                    Kuleaen Tboung</option>
                                                <option data-en-title=="Lum Choar" value="1348" data-value="lum-choar"
                                                    data-chained="ou-ya-dav" class="ou-ya-dav">Lum Choar</option>
                                                <option data-en-title=="Kraol Kou" value="1604" data-value="kraol-kou"
                                                    data-chained="svay-chrum" class="svay-chrum">Kraol Kou</option>
                                                <option data-en-title=="Sralab" value="1860" data-value="sralab"
                                                    data-chained="tboung-khmum" class="tboung-khmum">Sralab</option>
                                                <option data-en-title=="Phnum Lieb" value="69" data-value="phnum-lieb"
                                                    data-chained="preah-netr-preah" class="preah-netr-preah">Phnum Lieb
                                                </option>
                                                <option data-en-title=="Pteah Kandal" value="325"
                                                    data-value="pteah-kandal" data-chained="srei-santhor"
                                                    class="srei-santhor">Pteah Kandal</option>
                                                <option data-en-title=="Sochet" value="581" data-value="sochet"
                                                    data-chained="sandan" class="sandan">Sochet</option>
                                                <option data-en-title=="Traeuy Sla" value="837" data-value="traeuy-sla"
                                                    data-chained="sang" class="sang">Traeuy Sla</option>
                                                <option data-en-title=="Kuleaen Cheung" value="1093"
                                                    data-value="kuleaen-cheung" data-chained="kuleaen" class="kuleaen">
                                                    Kuleaen Cheung</option>
                                                <option data-en-title=="Pak Nhai" value="1349" data-value="pak-nhai"
                                                    data-chained="ou-ya-dav" class="ou-ya-dav">Pak Nhai</option>
                                                <option data-en-title=="Kruos" value="1605" data-value="kruos"
                                                    data-chained="svay-chrum" class="svay-chrum">Kruos</option>
                                                <option data-en-title=="Thma Pechr" value="1861" data-value="thma-pechr"
                                                    data-chained="tboung-khmum" class="tboung-khmum">Thma Pechr</option>
                                                <option data-en-title=="Prasat" value="70" data-value="prasat"
                                                    data-chained="preah-netr-preah" class="preah-netr-preah">Prasat
                                                </option>
                                                <option data-en-title=="Pram Yam" value="326" data-value="pram-yam"
                                                    data-chained="srei-santhor" class="srei-santhor">Pram Yam</option>
                                                <option data-en-title=="Tum Ring" value="582" data-value="tum-ring"
                                                    data-chained="sandan" class="sandan">Tum Ring</option>
                                                <option data-en-title=="Tuek Vil" value="838" data-value="tuek-vil"
                                                    data-chained="sang" class="sang">Tuek Vil</option>
                                                <option data-en-title=="Thmei" value="1094" data-value="thmei"
                                                    data-chained="kuleaen" class="kuleaen">Thmei</option>
                                                <option data-en-title=="Pate" value="1350" data-value="pate"
                                                    data-chained="ou-ya-dav" class="ou-ya-dav">Pate</option>
                                                <option data-en-title=="Pouthi Reach" value="1606"
                                                    data-value="pouthi-reach" data-chained="svay-chrum"
                                                    class="svay-chrum">Pouthi Reach</option>
                                                <option data-en-title=="Tonle Bet" value="1862" data-value="tonle-bet"
                                                    data-chained="tboung-khmum" class="tboung-khmum">Tonle Bet</option>
                                                <option data-en-title=="Preah Netr Preah" value="71"
                                                    data-value="preah-netr-preah" data-chained="preah-netr-preah"
                                                    class="preah-netr-preah">Preah Netr Preah</option>
                                                <option data-en-title=="Preaek Dambouk" value="327"
                                                    data-value="preaek-dambouk" data-chained="srei-santhor"
                                                    class="srei-santhor">Preaek Dambouk</option>
                                                <option data-en-title=="Phnum Penh" value="1095" data-value="phnum-penh"
                                                    data-chained="kuleaen" class="kuleaen">Phnum Penh</option>
                                                <option data-en-title=="Sesant" value="1351" data-value="sesant"
                                                    data-chained="ou-ya-dav" class="ou-ya-dav">Sesant</option>
                                                <option data-en-title=="Svay Angk" value="1607" data-value="svay-angk"
                                                    data-chained="svay-chrum" class="svay-chrum">Svay Angk</option>
                                                <option data-en-title=="Rohal" value="72" data-value="rohal"
                                                    data-chained="preah-netr-preah" class="preah-netr-preah">Rohal
                                                </option>
                                                <option data-en-title=="Preaek Pou" value="328" data-value="preaek-pou"
                                                    data-chained="srei-santhor" class="srei-santhor">Preaek Pou</option>
                                                <option data-en-title=="Boeng Lvea" value="584" data-value="boeng-lvea"
                                                    data-chained="santuk" class="santuk">Boeng Lvea</option>
                                                <option data-en-title=="Ta Kdol" value="840" data-value="ta-kdol"
                                                    data-chained="krong-ta-khmau" class="krong-ta-khmau">Ta Kdol
                                                </option>
                                                <option data-en-title=="Phnum Tbaeng Pir" value="1096"
                                                    data-value="phnum-tbaeng-pir" data-chained="kuleaen"
                                                    class="kuleaen">Phnum Tbaeng Pir</option>
                                                <option data-en-title=="Saom Thum" value="1352" data-value="saom-thum"
                                                    data-chained="ou-ya-dav" class="ou-ya-dav">Saom Thum</option>
                                                <option data-en-title=="Svay Chrum" value="1608" data-value="svay-chrum"
                                                    data-chained="svay-chrum" class="svay-chrum">Svay Chrum</option>
                                                <option data-en-title=="Tean Kam" value="73" data-value="tean-kam"
                                                    data-chained="preah-netr-preah" class="preah-netr-preah">Tean Kam
                                                </option>
                                                <option data-en-title=="Preaek Rumdeng" value="329"
                                                    data-value="preaek-rumdeng" data-chained="srei-santhor"
                                                    class="srei-santhor">Preaek Rumdeng</option>
                                                <option data-en-title=="Chroab" value="585" data-value="chroab"
                                                    data-chained="santuk" class="santuk">Chroab</option>
                                                <option data-en-title=="Preaek Ruessei" value="841"
                                                    data-value="preaek-ruessei" data-chained="krong-ta-khmau"
                                                    class="krong-ta-khmau">Preaek Ruessei</option>
                                                <option data-en-title=="Srayang" value="1097" data-value="srayang"
                                                    data-chained="kuleaen" class="kuleaen">Srayang</option>
                                                <option data-en-title=="Ya Tung" value="1353" data-value="ya-tung"
                                                    data-chained="ou-ya-dav" class="ou-ya-dav">Ya Tung</option>
                                                <option data-en-title=="Svay Thum" value="1609" data-value="svay-thum"
                                                    data-chained="svay-chrum" class="svay-chrum">Svay Thum</option>
                                                <option data-en-title=="Tuek Chour" value="74" data-value="tuek-chour"
                                                    data-chained="preah-netr-preah" class="preah-netr-preah">Tuek Chour
                                                </option>
                                                <option data-en-title=="Ruessei Srok" value="330"
                                                    data-value="ruessei-srok" data-chained="srei-santhor"
                                                    class="srei-santhor">Ruessei Srok</option>
                                                <option data-en-title=="Kampong Thma" value="586"
                                                    data-value="kampong-thma" data-chained="santuk" class="santuk">
                                                    Kampong Thma</option>
                                                <option data-en-title=="Daeum Mien" value="842" data-value="daeum-mien"
                                                    data-chained="krong-ta-khmau" class="krong-ta-khmau">Daeum Mien
                                                </option>
                                                <option data-en-title=="Svay Yea" value="1610" data-value="svay-yea"
                                                    data-chained="svay-chrum" class="svay-chrum">Svay Yea</option>
                                                <option data-en-title=="Bos Sbov" value="75" data-value="bos-sbov"
                                                    data-chained="preah-netr-preah" class="preah-netr-preah">Bos Sbov
                                                </option>
                                                <option data-en-title=="Svay Pou" value="331" data-value="svay-pou"
                                                    data-chained="srei-santhor" class="srei-santhor">Svay Pou</option>
                                                <option data-en-title=="Kakaoh" value="587" data-value="kakaoh"
                                                    data-chained="santuk" class="santuk">Kakaoh</option>
                                                <option data-en-title=="Ta Khmau" value="843" data-value="ta-khmau"
                                                    data-chained="krong-ta-khmau" class="krong-ta-khmau">Ta Khmau
                                                </option>
                                                <option data-en-title=="Robieb" value="1099" data-value="robieb"
                                                    data-chained="rovieng" class="rovieng">Robieb</option>
                                                <option data-en-title=="Ta Veaeng Leu" value="1355"
                                                    data-value="ta-veaeng-leu" data-chained="ta-veaeng"
                                                    class="ta-veaeng">Ta Veaeng Leu</option>
                                                <option data-en-title=="Thlok" value="1611" data-value="thlok"
                                                    data-chained="svay-chrum" class="svay-chrum">Thlok</option>
                                                <option data-en-title=="Svay Sach Phnum" value="332"
                                                    data-value="svay-sach-phnum" data-chained="srei-santhor"
                                                    class="srei-santhor">Svay Sach Phnum</option>
                                                <option data-en-title=="Kraya" value="588" data-value="kraya"
                                                    data-chained="santuk" class="santuk">Kraya</option>
                                                <option data-en-title=="Preaek Hour" value="844"
                                                    data-value="preaek-hour" data-chained="krong-ta-khmau"
                                                    class="krong-ta-khmau">Preaek Hour</option>
                                                <option data-en-title=="Reaksmei" value="1100" data-value="reaksmei"
                                                    data-chained="rovieng" class="rovieng">Reaksmei</option>
                                                <option data-en-title=="Ta Veaeng Kraom" value="1356"
                                                    data-value="ta-veaeng-kraom" data-chained="ta-veaeng"
                                                    class="ta-veaeng">Ta Veaeng Kraom</option>
                                                <option data-en-title=="Changha" value="77" data-value="changha"
                                                    data-chained="ou-chrov" class="ou-chrov">Changha</option>
                                                <option data-en-title=="Tong Tralach" value="333"
                                                    data-value="tong-tralach" data-chained="srei-santhor"
                                                    class="srei-santhor">Tong Tralach</option>
                                                <option data-en-title=="Pnov" value="589" data-value="pnov"
                                                    data-chained="santuk" class="santuk">Pnov</option>
                                                <option data-en-title=="Kampong Samnanh" value="845"
                                                    data-value="kampong-samnanh" data-chained="krong-ta-khmau"
                                                    class="krong-ta-khmau">Kampong Samnanh</option>
                                                <option data-en-title=="Rohas" value="1101" data-value="rohas"
                                                    data-chained="rovieng" class="rovieng">Rohas</option>
                                                <option data-en-title=="Svay Rieng" value="1613" data-value="svay-rieng"
                                                    data-chained="krong-svay-rieng" class="krong-svay-rieng">Svay Rieng
                                                </option>
                                                <option data-en-title=="Koub" value="78" data-value="koub"
                                                    data-chained="ou-chrov" class="ou-chrov">Koub</option>
                                                <option data-en-title=="Prasat" value="590" data-value="prasat"
                                                    data-chained="santuk" class="santuk">Prasat</option>
                                                <option data-en-title=="Rung Roeang" value="1102"
                                                    data-value="rung-roeang" data-chained="rovieng" class="rovieng">Rung
                                                    Roeang</option>
                                                <option data-en-title=="Ban Pong" value="1358" data-value="ban-pong"
                                                    data-chained="veun-sai" class="veun-sai">Ban Pong</option>
                                                <option data-en-title=="Prey Chhlak" value="1614"
                                                    data-value="prey-chhlak" data-chained="krong-svay-rieng"
                                                    class="krong-svay-rieng">Prey Chhlak</option>
                                                <option data-en-title=="Kuttasat" value="79" data-value="kuttasat"
                                                    data-chained="ou-chrov" class="ou-chrov">Kuttasat</option>
                                                <option data-en-title=="Areaks Tnaot" value="335"
                                                    data-value="areaks-tnaot" data-chained="stueng-trang"
                                                    class="stueng-trang">Areaks Tnaot</option>
                                                <option data-en-title=="Tang Krasang" value="591"
                                                    data-value="tang-krasang" data-chained="santuk" class="santuk">Tang
                                                    Krasang</option>
                                                <option data-en-title=="Andoung Tuek" value="847"
                                                    data-value="andoung-tuek" data-chained="botum-sakor"
                                                    class="botum-sakor">Andoung Tuek</option>
                                                <option data-en-title=="Rik Reay" value="1103" data-value="rik-reay"
                                                    data-chained="rovieng" class="rovieng">Rik Reay</option>
                                                <option data-en-title=="Hat Pak" value="1359" data-value="hat-pak"
                                                    data-chained="veun-sai" class="veun-sai">Hat Pak</option>
                                                <option data-en-title=="Koy Trabaek" value="1615"
                                                    data-value="koy-trabaek" data-chained="krong-svay-rieng"
                                                    class="krong-svay-rieng">Koy Trabaek</option>
                                                <option data-en-title=="Samraong" value="80" data-value="samraong"
                                                    data-chained="ou-chrov" class="ou-chrov">Samraong</option>
                                                <option data-en-title=="Dang Kdar" value="336" data-value="dang-kdar"
                                                    data-chained="stueng-trang" class="stueng-trang">Dang Kdar</option>
                                                <option data-en-title=="Ti Pou" value="592" data-value="ti-pou"
                                                    data-chained="santuk" class="santuk">Ti Pou</option>
                                                <option data-en-title=="Kandaol" value="848" data-value="kandaol"
                                                    data-chained="botum-sakor" class="botum-sakor">Kandaol</option>
                                                <option data-en-title=="Ruos Rean" value="1104" data-value="ruos-rean"
                                                    data-chained="rovieng" class="rovieng">Ruos Rean</option>
                                                <option data-en-title=="Ka Choun" value="1360" data-value="ka-choun"
                                                    data-chained="veun-sai" class="veun-sai">Ka Choun</option>
                                                <option data-en-title=="Pou Ta Hao" value="1616" data-value="pou-ta-hao"
                                                    data-chained="krong-svay-rieng" class="krong-svay-rieng">Pou Ta Hao
                                                </option>
                                                <option data-en-title=="Souphi" value="81" data-value="souphi"
                                                    data-chained="ou-chrov" class="ou-chrov">Souphi</option>
                                                <option data-en-title=="Khpob Ta Nguon" value="337"
                                                    data-value="khpob-ta-nguon" data-chained="stueng-trang"
                                                    class="stueng-trang">Khpob Ta Nguon</option>
                                                <option data-en-title=="Tboung Krapeu" value="593"
                                                    data-value="tboung-krapeu" data-chained="santuk" class="santuk">
                                                    Tboung Krapeu</option>
                                                <option data-en-title=="Ta Nuon" value="849" data-value="ta-nuon"
                                                    data-chained="botum-sakor" class="botum-sakor">Ta Nuon</option>
                                                <option data-en-title=="Rotanak" value="1105" data-value="rotanak"
                                                    data-chained="rovieng" class="rovieng">Rotanak</option>
                                                <option data-en-title=="Kaoh Pang" value="1361" data-value="kaoh-pang"
                                                    data-chained="veun-sai" class="veun-sai">Kaoh Pang</option>
                                                <option data-en-title=="Chek" value="1617" data-value="chek"
                                                    data-chained="krong-svay-rieng" class="krong-svay-rieng">Chek
                                                </option>
                                                <option data-en-title=="Soeng" value="82" data-value="soeng"
                                                    data-chained="ou-chrov" class="ou-chrov">Soeng</option>
                                                <option data-en-title=="Me Sar Chrey" value="338"
                                                    data-value="me-sar-chrey" data-chained="stueng-trang"
                                                    class="stueng-trang">Me Sar Chrey</option>
                                                <option data-en-title=="Thma Sa" value="850" data-value="thma-sa"
                                                    data-chained="botum-sakor" class="botum-sakor">Thma Sa</option>
                                                <option data-en-title=="Rieb Roy" value="1106" data-value="rieb-roy"
                                                    data-chained="rovieng" class="rovieng">Rieb Roy</option>
                                                <option data-en-title=="Kaoh Peak" value="1362" data-value="kaoh-peak"
                                                    data-chained="veun-sai" class="veun-sai">Kaoh Peak</option>
                                                <option data-en-title=="Svay Toea" value="1618" data-value="svay-toea"
                                                    data-chained="krong-svay-rieng" class="krong-svay-rieng">Svay Toea
                                                </option>
                                                <option data-en-title=="Ou Bei Choan" value="83"
                                                    data-value="ou-bei-choan" data-chained="ou-chrov" class="ou-chrov">
                                                    Ou Bei Choan</option>
                                                <option data-en-title=="Ou Mlu" value="339" data-value="ou-mlu"
                                                    data-chained="stueng-trang" class="stueng-trang">Ou Mlu</option>
                                                <option data-en-title=="Banteay Stoung" value="595"
                                                    data-value="banteay-stoung" data-chained="stoung" class="stoung">
                                                    Banteay Stoung</option>
                                                <option data-en-title=="Raksa" value="1107" data-value="raksa"
                                                    data-chained="rovieng" class="rovieng">Raksa</option>
                                                <option data-en-title=="Kok Lak" value="1363" data-value="kok-lak"
                                                    data-chained="veun-sai" class="veun-sai">Kok Lak</option>
                                                <option data-en-title=="Sangkhoar" value="1619" data-value="sangkhoar"
                                                    data-chained="krong-svay-rieng" class="krong-svay-rieng">Sangkhoar
                                                </option>
                                                <option data-en-title=="Peam Kaoh Sna" value="340"
                                                    data-value="peam-kaoh-sna" data-chained="stueng-trang"
                                                    class="stueng-trang">Peam Kaoh Sna</option>
                                                <option data-en-title=="Chamnar Kraom" value="596"
                                                    data-value="chamnar-kraom" data-chained="stoung" class="stoung">
                                                    Chamnar Kraom</option>
                                                <option data-en-title=="Kaoh Sdach" value="852" data-value="kaoh-sdach"
                                                    data-chained="kiri-sakor" class="kiri-sakor">Kaoh Sdach</option>
                                                <option data-en-title=="Rumdaoh" value="1108" data-value="rumdaoh"
                                                    data-chained="rovieng" class="rovieng">Rumdaoh</option>
                                                <option data-en-title=="Pa Kalan" value="1364" data-value="pa-kalan"
                                                    data-chained="veun-sai" class="veun-sai">Pa Kalan</option>
                                                <option data-en-title=="Kampong Svay" value="85"
                                                    data-value="kampong-svay" data-chained="krong-serei-saophoan"
                                                    class="krong-serei-saophoan">Kampong Svay</option>
                                                <option data-en-title=="Preah Andoung" value="341"
                                                    data-value="preah-andoung" data-chained="stueng-trang"
                                                    class="stueng-trang">Preah Andoung</option>
                                                <option data-en-title=="Chamnar Leu" value="597"
                                                    data-value="chamnar-leu" data-chained="stoung" class="stoung">
                                                    Chamnar Leu</option>
                                                <option data-en-title=="Phnhi Meas" value="853" data-value="phnhi-meas"
                                                    data-chained="kiri-sakor" class="kiri-sakor">Phnhi Meas</option>
                                                <option data-en-title=="Romtom" value="1109" data-value="romtom"
                                                    data-chained="rovieng" class="rovieng">Romtom</option>
                                                <option data-en-title=="Phnum Kok" value="1365" data-value="phnum-kok"
                                                    data-chained="veun-sai" class="veun-sai">Phnum Kok</option>
                                                <option data-en-title=="Kokir Saom" value="1621" data-value="kokir-saom"
                                                    data-chained="svay-teab" class="svay-teab">Kokir Saom</option>
                                                <option data-en-title=="Kaoh Pong Satv" value="86"
                                                    data-value="kaoh-pong-satv" data-chained="krong-serei-saophoan"
                                                    class="krong-serei-saophoan">Kaoh Pong Satv</option>
                                                <option data-en-title=="Preaek Bak" value="342" data-value="preaek-bak"
                                                    data-chained="stueng-trang" class="stueng-trang">Preaek Bak</option>
                                                <option data-en-title=="Kampong Chen Cheung" value="598"
                                                    data-value="kampong-chen-cheung" data-chained="stoung"
                                                    class="stoung">Kampong Chen Cheung</option>
                                                <option data-en-title=="Preaek Khsach" value="854"
                                                    data-value="preaek-khsach" data-chained="kiri-sakor"
                                                    class="kiri-sakor">Preaek Khsach</option>
                                                <option data-en-title=="Romoniy" value="1110" data-value="romoniy"
                                                    data-chained="rovieng" class="rovieng">Romoniy</option>
                                                <option data-en-title=="Veun Sai" value="1366" data-value="veun-sai"
                                                    data-chained="veun-sai" class="veun-sai">Veun Sai</option>
                                                <option data-en-title=="Kandieng Reay" value="1622"
                                                    data-value="kandieng-reay" data-chained="svay-teab"
                                                    class="svay-teab">Kandieng Reay</option>
                                                <option data-en-title=="Mkak" value="87" data-value="mkak"
                                                    data-chained="krong-serei-saophoan" class="krong-serei-saophoan">
                                                    Mkak</option>
                                                <option data-en-title=="Preaek Kak" value="343" data-value="preaek-kak"
                                                    data-chained="stueng-trang" class="stueng-trang">Preaek Kak</option>
                                                <option data-en-title=="Kampong Chen Tboung" value="599"
                                                    data-value="kampong-chen-tboung" data-chained="stoung"
                                                    class="stoung">Kampong Chen Tboung</option>
                                                <option data-en-title=="Monourom" value="1623" data-value="monourom"
                                                    data-chained="svay-teab" class="svay-teab">Monourom</option>
                                                <option data-en-title=="Ou Ambel" value="88" data-value="ou-ambel"
                                                    data-chained="krong-serei-saophoan" class="krong-serei-saophoan">Ou
                                                    Ambel</option>
                                                <option data-en-title=="Soupheas" value="344" data-value="soupheas"
                                                    data-chained="stueng-trang" class="stueng-trang">Soupheas</option>
                                                <option data-en-title=="Msar Krang" value="600" data-value="msar-krang"
                                                    data-chained="stoung" class="stoung">Msar Krang</option>
                                                <option data-en-title=="Chrouy Pras" value="856"
                                                    data-value="chrouy-pras" data-chained="koh-kong" class="koh-kong">
                                                    Chrouy Pras</option>
                                                <option data-en-title=="Chamraeun" value="1112" data-value="chamraeun"
                                                    data-chained="sangkum-thmei" class="sangkum-thmei">Chamraeun
                                                </option>
                                                <option data-en-title=="Char Chhuk" value="1368" data-value="char-chhuk"
                                                    data-chained="angkor-chum" class="angkor-chum">Char Chhuk</option>
                                                <option data-en-title=="Popeaek" value="1624" data-value="popeaek"
                                                    data-chained="svay-teab" class="svay-teab">Popeaek</option>
                                                <option data-en-title=="Phniet" value="89" data-value="phniet"
                                                    data-chained="krong-serei-saophoan" class="krong-serei-saophoan">
                                                    Phniet</option>
                                                <option data-en-title=="Tuol Preah Khleang" value="345"
                                                    data-value="tuol-preah-khleang" data-chained="stueng-trang"
                                                    class="stueng-trang">Tuol Preah Khleang</option>
                                                <option data-en-title=="Peam Bang" value="601" data-value="peam-bang"
                                                    data-chained="stoung" class="stoung">Peam Bang</option>
                                                <option data-en-title=="Kaoh Kapi" value="857" data-value="kaoh-kapi"
                                                    data-chained="koh-kong" class="koh-kong">Kaoh Kapi</option>
                                                <option data-en-title=="Ro'ang" value="1113" data-value="roang"
                                                    data-chained="sangkum-thmei" class="sangkum-thmei">Ro'ang</option>
                                                <option data-en-title=="Doun Peaeng" value="1369"
                                                    data-value="doun-peaeng" data-chained="angkor-chum"
                                                    class="angkor-chum">Doun Peaeng</option>
                                                <option data-en-title=="Prey Ta Ei" value="1625" data-value="prey-ta-ei"
                                                    data-chained="svay-teab" class="svay-teab">Prey Ta Ei</option>
                                                <option data-en-title=="Preah Ponlea" value="90"
                                                    data-value="preah-ponlea" data-chained="krong-serei-saophoan"
                                                    class="krong-serei-saophoan">Preah Ponlea</option>
                                                <option data-en-title=="Tuol Sambuor" value="346"
                                                    data-value="tuol-sambuor" data-chained="stueng-trang"
                                                    class="stueng-trang">Tuol Sambuor</option>
                                                <option data-en-title=="Popok" value="602" data-value="popok"
                                                    data-chained="stoung" class="stoung">Popok</option>
                                                <option data-en-title=="Ta Tai Kraom" value="858"
                                                    data-value="ta-tai-kraom" data-chained="koh-kong" class="koh-kong">
                                                    Ta Tai Kraom</option>
                                                <option data-en-title=="Phnum Tbaeng Muoy" value="1114"
                                                    data-value="phnum-tbaeng-muoy" data-chained="sangkum-thmei"
                                                    class="sangkum-thmei">Phnum Tbaeng Muoy</option>
                                                <option data-en-title=="Kouk Doung" value="1370" data-value="kouk-doung"
                                                    data-chained="angkor-chum" class="angkor-chum">Kouk Doung</option>
                                                <option data-en-title=="Prasout" value="1626" data-value="prasout"
                                                    data-chained="svay-teab" class="svay-teab">Prasout</option>
                                                <option data-en-title=="Tuek Thla" value="91" data-value="tuek-thla"
                                                    data-chained="krong-serei-saophoan" class="krong-serei-saophoan">
                                                    Tuek Thla</option>
                                                <option data-en-title=="Pralay" value="603" data-value="pralay"
                                                    data-chained="stoung" class="stoung">Pralay</option>
                                                <option data-en-title=="Trapeang Rung" value="859"
                                                    data-value="trapeang-rung" data-chained="koh-kong" class="koh-kong">
                                                    Trapeang Rung</option>
                                                <option data-en-title=="Sdau" value="1115" data-value="sdau"
                                                    data-chained="sangkum-thmei" class="sangkum-thmei">Sdau</option>
                                                <option data-en-title=="Koul" value="1371" data-value="koul"
                                                    data-chained="angkor-chum" class="angkor-chum">Koul</option>
                                                <option data-en-title=="Romeang Thkaol" value="1627"
                                                    data-value="romeang-thkaol" data-chained="svay-teab"
                                                    class="svay-teab">Romeang Thkaol</option>
                                                <option data-en-title=="Anhchanh Rung" value="348"
                                                    data-value="anhchanh-rung" data-chained="baribour" class="baribour">
                                                    Anhchanh Rung</option>
                                                <option data-en-title=="Preah Damrei" value="604"
                                                    data-value="preah-damrei" data-chained="stoung" class="stoung">Preah
                                                    Damrei</option>
                                                <option data-en-title=="Ronak Ser" value="1116" data-value="ronak-ser"
                                                    data-chained="sangkum-thmei" class="sangkum-thmei">Ronak Ser
                                                </option>
                                                <option data-en-title=="Nokor Pheas" value="1372"
                                                    data-value="nokor-pheas" data-chained="angkor-chum"
                                                    class="angkor-chum">Nokor Pheas</option>
                                                <option data-en-title=="Sambuor" value="1628" data-value="sambuor"
                                                    data-chained="svay-teab" class="svay-teab">Sambuor</option>
                                                <option data-en-title=="Banteay Chhmar" value="93"
                                                    data-value="banteay-chhmar" data-chained="thma-puok"
                                                    class="thma-puok">Banteay Chhmar</option>
                                                <option data-en-title=="Chhnok Tru" value="349" data-value="chhnok-tru"
                                                    data-chained="baribour" class="baribour">Chhnok Tru</option>
                                                <option data-en-title=="Rung Roeang" value="605"
                                                    data-value="rung-roeang" data-chained="stoung" class="stoung">Rung
                                                    Roeang</option>
                                                <option data-en-title=="Smach Mean Chey" value="861"
                                                    data-value="smach-mean-chey" data-chained="krong-khemarak-phoumin"
                                                    class="krong-khemarak-phoumin">Smach Mean Chey</option>
                                                <option data-en-title=="Srae Khvav" value="1373" data-value="srae-khvav"
                                                    data-chained="angkor-chum" class="angkor-chum">Srae Khvav</option>
                                                <option data-en-title=="Svay Rumpea" value="1629"
                                                    data-value="svay-rumpea" data-chained="svay-teab" class="svay-teab">
                                                    Svay Rumpea</option>
                                                <option data-en-title=="Kouk Romiet" value="94" data-value="kouk-romiet"
                                                    data-chained="thma-puok" class="thma-puok">Kouk Romiet</option>
                                                <option data-en-title=="Chak" value="350" data-value="chak"
                                                    data-chained="baribour" class="baribour">Chak</option>
                                                <option data-en-title=="Samprouch" value="606" data-value="samprouch"
                                                    data-chained="stoung" class="stoung">Samprouch</option>
                                                <option data-en-title=="Dang Tong" value="862" data-value="dang-tong"
                                                    data-chained="krong-khemarak-phoumin"
                                                    class="krong-khemarak-phoumin">Dang Tong</option>
                                                <option data-en-title=="Chhean Mukh" value="1118"
                                                    data-value="chhean-mukh" data-chained="tbaeng-mean-chey"
                                                    class="tbaeng-mean-chey">Chhean Mukh</option>
                                                <option data-en-title=="Ta Saom" value="1374" data-value="ta-saom"
                                                    data-chained="angkor-chum" class="angkor-chum">Ta Saom</option>
                                                <option data-en-title=="Phum Thmei" value="95" data-value="phum-thmei"
                                                    data-chained="thma-puok" class="thma-puok">Phum Thmei</option>
                                                <option data-en-title=="Khon Rang" value="351" data-value="khon-rang"
                                                    data-chained="baribour" class="baribour">Khon Rang</option>
                                                <option data-en-title=="Trea" value="607" data-value="trea"
                                                    data-chained="stoung" class="stoung">Trea</option>
                                                <option data-en-title=="Stueng Veaeng" value="863"
                                                    data-value="stueng-veaeng" data-chained="krong-khemarak-phoumin"
                                                    class="krong-khemarak-phoumin">Stueng Veaeng</option>
                                                <option data-en-title=="Pou" value="1119" data-value="pou"
                                                    data-chained="tbaeng-mean-chey" class="tbaeng-mean-chey">Pou
                                                </option>
                                                <option data-en-title=="Bati" value="1631" data-value="bati"
                                                    data-chained="krong-bavet" class="krong-bavet">Bati</option>
                                                <option data-en-title=="Thma Puok" value="96" data-value="thma-puok"
                                                    data-chained="thma-puok" class="thma-puok">Thma Puok</option>
                                                <option data-en-title=="Kampong Preah Kokir" value="352"
                                                    data-value="kampong-preah-kokir" data-chained="baribour"
                                                    class="baribour">Kampong Preah Kokir</option>
                                                <option data-en-title=="Prame" value="1120" data-value="prame"
                                                    data-chained="tbaeng-mean-chey" class="tbaeng-mean-chey">Prame
                                                </option>
                                                <option data-en-title=="Chob Ta Trav" value="1376"
                                                    data-value="chob-ta-trav" data-chained="angkor-thum"
                                                    class="angkor-thum">Chob Ta Trav</option>
                                                <option data-en-title=="Bavet" value="1632" data-value="bavet"
                                                    data-chained="krong-bavet" class="krong-bavet">Bavet</option>
                                                <option data-en-title=="Kouk Kakthen" value="97"
                                                    data-value="kouk-kakthen" data-chained="thma-puok"
                                                    class="thma-puok">Kouk Kakthen</option>
                                                <option data-en-title=="Melum" value="353" data-value="melum"
                                                    data-chained="baribour" class="baribour">Melum</option>
                                                <option data-en-title=="Angk Phnum Touch" value="609"
                                                    data-value="angk-phnum-touch" data-chained="angkor-chey"
                                                    class="angkor-chey">Angk Phnum Touch</option>
                                                <option data-en-title=="Bak Khlang" value="865" data-value="bak-khlang"
                                                    data-chained="mondol-seima" class="mondol-seima">Bak Khlang</option>
                                                <option data-en-title=="Preah Khleang" value="1121"
                                                    data-value="preah-khleang" data-chained="tbaeng-mean-chey"
                                                    class="tbaeng-mean-chey">Preah Khleang</option>
                                                <option data-en-title=="Leang Dai" value="1377" data-value="leang-dai"
                                                    data-chained="angkor-thum" class="angkor-thum">Leang Dai</option>
                                                <option data-en-title=="Chrak Mtes" value="1633" data-value="chrak-mtes"
                                                    data-chained="krong-bavet" class="krong-bavet">Chrak Mtes</option>
                                                <option data-en-title=="Kumru" value="98" data-value="kumru"
                                                    data-chained="thma-puok" class="thma-puok">Kumru</option>
                                                <option data-en-title=="Phsar" value="354" data-value="phsar"
                                                    data-chained="baribour" class="baribour">Phsar</option>
                                                <option data-en-title=="Angkor Chey" value="610"
                                                    data-value="angkor-chey" data-chained="angkor-chey"
                                                    class="angkor-chey">Angkor Chey</option>
                                                <option data-en-title=="Peam Krasaob" value="866"
                                                    data-value="peam-krasaob" data-chained="mondol-seima"
                                                    class="mondol-seima">Peam Krasaob</option>
                                                <option data-en-title=="Peak Snaeng" value="1378"
                                                    data-value="peak-snaeng" data-chained="angkor-thum"
                                                    class="angkor-thum">Peak Snaeng</option>
                                                <option data-en-title=="Prasat" value="1634" data-value="prasat"
                                                    data-chained="krong-bavet" class="krong-bavet">Prasat</option>
                                                <option data-en-title=="Pech Changvar" value="355"
                                                    data-value="pech-changvar" data-chained="baribour" class="baribour">
                                                    Pech Changvar</option>
                                                <option data-en-title=="Champei" value="611" data-value="champei"
                                                    data-chained="angkor-chey" class="angkor-chey">Champei</option>
                                                <option data-en-title=="Tuol Kokir" value="867" data-value="tuol-kokir"
                                                    data-chained="mondol-seima" class="mondol-seima">Tuol Kokir</option>
                                                <option data-en-title=="Kampong Pranak" value="1123"
                                                    data-value="kampong-pranak" data-chained="krong-preah-vihear"
                                                    class="krong-preah-vihear">Kampong Pranak</option>
                                                <option data-en-title=="Svay Chek" value="1379" data-value="svay-chek"
                                                    data-chained="angkor-thum" class="angkor-thum">Svay Chek</option>
                                                <option data-en-title=="Prey Angkunh" value="1635"
                                                    data-value="prey-angkunh" data-chained="krong-bavet"
                                                    class="krong-bavet">Prey Angkunh</option>
                                                <option data-en-title=="Phkoam" value="100" data-value="phkoam"
                                                    data-chained="svay-chek" class="svay-chek">Phkoam</option>
                                                <option data-en-title=="Popel" value="356" data-value="popel"
                                                    data-chained="baribour" class="baribour">Popel</option>
                                                <option data-en-title=="Dambouk Khpos" value="612"
                                                    data-value="dambouk-khpos" data-chained="angkor-chey"
                                                    class="angkor-chey">Dambouk Khpos</option>
                                                <option data-en-title=="Pal Hal" value="1124" data-value="pal-hal"
                                                    data-chained="krong-preah-vihear" class="krong-preah-vihear">Pal Hal
                                                </option>
                                                <option data-en-title=="Sarongk" value="101" data-value="sarongk"
                                                    data-chained="svay-chek" class="svay-chek">Sarongk</option>
                                                <option data-en-title=="Ponley" value="357" data-value="ponley"
                                                    data-chained="baribour" class="baribour">Ponley</option>
                                                <option data-en-title=="Dan Koum" value="613" data-value="dan-koum"
                                                    data-chained="angkor-chey" class="angkor-chey">Dan Koum</option>
                                                <option data-en-title=="Boeng Preav" value="869"
                                                    data-value="boeng-preav" data-chained="srae-ambel"
                                                    class="srae-ambel">Boeng Preav</option>
                                                <option data-en-title=="Khnar Sanday" value="1381"
                                                    data-value="khnar-sanday" data-chained="banteay-srei"
                                                    class="banteay-srei">Khnar Sanday</option>
                                                <option data-en-title=="Angkor Borei" value="1637"
                                                    data-value="angkor-borei" data-chained="angkor-borei"
                                                    class="angkor-borei">Angkor Borei</option>
                                                <option data-en-title=="Sla Kram" value="102" data-value="sla-kram"
                                                    data-chained="svay-chek" class="svay-chek">Sla Kram</option>
                                                <option data-en-title=="Trapeang Chan" value="358"
                                                    data-value="trapeang-chan" data-chained="baribour" class="baribour">
                                                    Trapeang Chan</option>
                                                <option data-en-title=="Daeum Doung" value="614"
                                                    data-value="daeum-doung" data-chained="angkor-chey"
                                                    class="angkor-chey">Daeum Doung</option>
                                                <option data-en-title=="Chi Kha Kraom" value="870"
                                                    data-value="chi-kha-kraom" data-chained="srae-ambel"
                                                    class="srae-ambel">Chi Kha Kraom</option>
                                                <option data-en-title=="Boeng Preah" value="1126"
                                                    data-value="boeng-preah" data-chained="ba-phnum" class="ba-phnum">
                                                    Boeng Preah</option>
                                                <option data-en-title=="Khun Ream" value="1382" data-value="khun-ream"
                                                    data-chained="banteay-srei" class="banteay-srei">Khun Ream</option>
                                                <option data-en-title=="Ba Srae" value="1638" data-value="ba-srae"
                                                    data-chained="angkor-borei" class="angkor-borei">Ba Srae</option>
                                                <option data-en-title=="Svay Chek" value="103" data-value="svay-chek"
                                                    data-chained="svay-chek" class="svay-chek">Svay Chek</option>
                                                <option data-en-title=="Mroum" value="615" data-value="mroum"
                                                    data-chained="angkor-chey" class="angkor-chey">Mroum</option>
                                                <option data-en-title=="Chi Kha Leu" value="871"
                                                    data-value="chi-kha-leu" data-chained="srae-ambel"
                                                    class="srae-ambel">Chi Kha Leu</option>
                                                <option data-en-title=="Cheung Phnum" value="1127"
                                                    data-value="cheung-phnum" data-chained="ba-phnum" class="ba-phnum">
                                                    Cheung Phnum</option>
                                                <option data-en-title=="Preak Dak" value="1383" data-value="preak-dak"
                                                    data-chained="banteay-srei" class="banteay-srei">Preak Dak</option>
                                                <option data-en-title=="Kouk Thlok" value="1639" data-value="kouk-thlok"
                                                    data-chained="angkor-borei" class="angkor-borei">Kouk Thlok</option>
                                                <option data-en-title=="Ta Baen" value="104" data-value="ta-baen"
                                                    data-chained="svay-chek" class="svay-chek">Ta Baen</option>
                                                <option data-en-title=="Chol Sar" value="360" data-value="chol-sar"
                                                    data-chained="chol-kiri" class="chol-kiri">Chol Sar</option>
                                                <option data-en-title=="Phnum Kong" value="616" data-value="phnum-kong"
                                                    data-chained="angkor-chey" class="angkor-chey">Phnum Kong</option>
                                                <option data-en-title=="Chrouy Svay" value="872"
                                                    data-value="chrouy-svay" data-chained="srae-ambel"
                                                    class="srae-ambel">Chrouy Svay</option>
                                                <option data-en-title=="Chheu Kach" value="1128" data-value="chheu-kach"
                                                    data-chained="ba-phnum" class="ba-phnum">Chheu Kach</option>
                                                <option data-en-title=="Rumchek" value="1384" data-value="rumchek"
                                                    data-chained="banteay-srei" class="banteay-srei">Rumchek</option>
                                                <option data-en-title=="Ponley" value="1640" data-value="ponley"
                                                    data-chained="angkor-borei" class="angkor-borei">Ponley</option>
                                                <option data-en-title=="Ta Phou" value="105" data-value="ta-phou"
                                                    data-chained="svay-chek" class="svay-chek">Ta Phou</option>
                                                <option data-en-title=="Kaoh Thkov" value="361" data-value="kaoh-thkov"
                                                    data-chained="chol-kiri" class="chol-kiri">Kaoh Thkov</option>
                                                <option data-en-title=="Praphnum" value="617" data-value="praphnum"
                                                    data-chained="angkor-chey" class="angkor-chey">Praphnum</option>
                                                <option data-en-title=="Dang Peaeng" value="873"
                                                    data-value="dang-peaeng" data-chained="srae-ambel"
                                                    class="srae-ambel">Dang Peaeng</option>
                                                <option data-en-title=="Reaks Chey" value="1129" data-value="reaks-chey"
                                                    data-chained="ba-phnum" class="ba-phnum">Reaks Chey</option>
                                                <option data-en-title=="Run Ta Aek" value="1385" data-value="run-ta-aek"
                                                    data-chained="banteay-srei" class="banteay-srei">Run Ta Aek</option>
                                                <option data-en-title=="Preaek Phtoul" value="1641"
                                                    data-value="preaek-phtoul" data-chained="angkor-borei"
                                                    class="angkor-borei">Preaek Phtoul</option>
                                                <option data-en-title=="Treas" value="106" data-value="treas"
                                                    data-chained="svay-chek" class="svay-chek">Treas</option>
                                                <option data-en-title=="Kampong Os" value="362" data-value="kampong-os"
                                                    data-chained="chol-kiri" class="chol-kiri">Kampong Os</option>
                                                <option data-en-title=="Samlanh" value="618" data-value="samlanh"
                                                    data-chained="angkor-chey" class="angkor-chey">Samlanh</option>
                                                <option data-en-title=="Srae Ambel" value="874" data-value="srae-ambel"
                                                    data-chained="srae-ambel" class="srae-ambel">Srae Ambel</option>
                                                <option data-en-title=="Roung Damrei" value="1130"
                                                    data-value="roung-damrei" data-chained="ba-phnum" class="ba-phnum">
                                                    Roung Damrei</option>
                                                <option data-en-title=="Tbaeng" value="1386" data-value="tbaeng"
                                                    data-chained="banteay-srei" class="banteay-srei">Tbaeng</option>
                                                <option data-en-title=="Prey Phkoam" value="1642"
                                                    data-value="prey-phkoam" data-chained="angkor-borei"
                                                    class="angkor-borei">Prey Phkoam</option>
                                                <option data-en-title=="Roluos" value="107" data-value="roluos"
                                                    data-chained="svay-chek" class="svay-chek">Roluos</option>
                                                <option data-en-title=="Peam Chhkaok" value="363"
                                                    data-value="peam-chhkaok" data-chained="chol-kiri"
                                                    class="chol-kiri">Peam Chhkaok</option>
                                                <option data-en-title=="Tani" value="619" data-value="tani"
                                                    data-chained="angkor-chey" class="angkor-chey">Tani</option>
                                                <option data-en-title=="Sdau Kaong" value="1131" data-value="sdau-kaong"
                                                    data-chained="ba-phnum" class="ba-phnum">Sdau Kaong</option>
                                                <option data-en-title=="Prey Kri" value="364" data-value="prey-kri"
                                                    data-chained="chol-kiri" class="chol-kiri">Prey Kri</option>
                                                <option data-en-title=="Ta Tey Leu" value="876" data-value="ta-tey-leu"
                                                    data-chained="thma-bang" class="thma-bang">Ta Tey Leu</option>
                                                <option data-en-title=="Spueu Ka" value="1132" data-value="spueu-ka"
                                                    data-chained="ba-phnum" class="ba-phnum">Spueu Ka</option>
                                                <option data-en-title=="Anlong Samnar" value="1388"
                                                    data-value="anlong-samnar" data-chained="chi-kraeng"
                                                    class="chi-kraeng">Anlong Samnar</option>
                                                <option data-en-title=="Chambak" value="1644" data-value="chambak"
                                                    data-chained="bati" class="bati">Chambak</option>
                                                <option data-en-title=="Boeng Beng" value="109" data-value="boeng-beng"
                                                    data-chained="malai" class="malai">Boeng Beng</option>
                                                <option data-en-title=="Banteay Meas Khang Kaeut" value="621"
                                                    data-value="banteay-meas-khang-kaeut" data-chained="banteay-meas"
                                                    class="banteay-meas">Banteay Meas Khang Kaeut</option>
                                                <option data-en-title=="Pralay" value="877" data-value="pralay"
                                                    data-chained="thma-bang" class="thma-bang">Pralay</option>
                                                <option data-en-title=="Spueu Kha" value="1133" data-value="spueu-kha"
                                                    data-chained="ba-phnum" class="ba-phnum">Spueu Kha</option>
                                                <option data-en-title=="Chi Kraeng" value="1389" data-value="chi-kraeng"
                                                    data-chained="chi-kraeng" class="chi-kraeng">Chi Kraeng</option>
                                                <option data-en-title=="Champei" value="1645" data-value="champei"
                                                    data-chained="bati" class="bati">Champei</option>
                                                <option data-en-title=="Malai" value="110" data-value="malai"
                                                    data-chained="malai" class="malai">Malai</option>
                                                <option data-en-title=="Phsar Chhnang" value="366"
                                                    data-value="phsar-chhnang" data-chained="krong-kampong-chhnang"
                                                    class="krong-kampong-chhnang">Phsar Chhnang</option>
                                                <option data-en-title=="Banteay Meas Khang Lech" value="622"
                                                    data-value="banteay-meas-khang-lech" data-chained="banteay-meas"
                                                    class="banteay-meas">Banteay Meas Khang Lech</option>
                                                <option data-en-title=="Chumnoab" value="878" data-value="chumnoab"
                                                    data-chained="thma-bang" class="thma-bang">Chumnoab</option>
                                                <option data-en-title=="Theay" value="1134" data-value="theay"
                                                    data-chained="ba-phnum" class="ba-phnum">Theay</option>
                                                <option data-en-title=="Kampong Kdei" value="1390"
                                                    data-value="kampong-kdei" data-chained="chi-kraeng"
                                                    class="chi-kraeng">Kampong Kdei</option>
                                                <option data-en-title=="Doung" value="1646" data-value="doung"
                                                    data-chained="bati" class="bati">Doung</option>
                                                <option data-en-title=="Ou Sampor" value="111" data-value="ou-sampor"
                                                    data-chained="malai" class="malai">Ou Sampor</option>
                                                <option data-en-title=="Kampong Chhnang" value="367"
                                                    data-value="kampong-chhnang" data-chained="krong-kampong-chhnang"
                                                    class="krong-kampong-chhnang">Kampong Chhnang</option>
                                                <option data-en-title=="Prey Tonle" value="623" data-value="prey-tonle"
                                                    data-chained="banteay-meas" class="banteay-meas">Prey Tonle</option>
                                                <option data-en-title=="Ruessei Chrum" value="879"
                                                    data-value="ruessei-chrum" data-chained="thma-bang"
                                                    class="thma-bang">Ruessei Chrum</option>
                                                <option data-en-title=="Khvav" value="1391" data-value="khvav"
                                                    data-chained="chi-kraeng" class="chi-kraeng">Khvav</option>
                                                <option data-en-title=="Kandoeng" value="1647" data-value="kandoeng"
                                                    data-chained="bati" class="bati">Kandoeng</option>
                                                <option data-en-title=="Ou Sralau" value="112" data-value="ou-sralau"
                                                    data-chained="malai" class="malai">Ou Sralau</option>
                                                <option data-en-title=="Ph'er" value="368" data-value="pher"
                                                    data-chained="krong-kampong-chhnang" class="krong-kampong-chhnang">
                                                    Ph'er</option>
                                                <option data-en-title=="Samraong Kraom" value="624"
                                                    data-value="samraong-kraom" data-chained="banteay-meas"
                                                    class="banteay-meas">Samraong Kraom</option>
                                                <option data-en-title=="Chi Phat" value="880" data-value="chi-phat"
                                                    data-chained="thma-bang" class="thma-bang">Chi Phat</option>
                                                <option data-en-title=="Cheach" value="1136" data-value="cheach"
                                                    data-chained="kamchay-mear" class="kamchay-mear">Cheach</option>
                                                <option data-en-title=="Kouk Thlok Kraom" value="1392"
                                                    data-value="kouk-thlok-kraom" data-chained="chi-kraeng"
                                                    class="chi-kraeng">Kouk Thlok Kraom</option>
                                                <option data-en-title=="Komar Reachea" value="1648"
                                                    data-value="komar-reachea" data-chained="bati" class="bati">Komar
                                                    Reachea</option>
                                                <option data-en-title=="Tuol Pongro" value="113"
                                                    data-value="tuol-pongro" data-chained="malai" class="malai">Tuol
                                                    Pongro</option>
                                                <option data-en-title=="Khsam" value="369" data-value="khsam"
                                                    data-chained="krong-kampong-chhnang" class="krong-kampong-chhnang">
                                                    Khsam</option>
                                                <option data-en-title=="Samraong Leu" value="625"
                                                    data-value="samraong-leu" data-chained="banteay-meas"
                                                    class="banteay-meas">Samraong Leu</option>
                                                <option data-en-title=="Thma Doun Pov" value="881"
                                                    data-value="thma-doun-pov" data-chained="thma-bang"
                                                    class="thma-bang">Thma Doun Pov</option>
                                                <option data-en-title=="Doun Koeng" value="1137" data-value="doun-koeng"
                                                    data-chained="kamchay-mear" class="kamchay-mear">Doun Koeng</option>
                                                <option data-en-title=="Kouk Thlok Leu" value="1393"
                                                    data-value="kouk-thlok-leu" data-chained="chi-kraeng"
                                                    class="chi-kraeng">Kouk Thlok Leu</option>
                                                <option data-en-title=="Krang Leav" value="1649" data-value="krang-leav"
                                                    data-chained="bati" class="bati">Krang Leav</option>
                                                <option data-en-title=="Ta Kong" value="114" data-value="ta-kong"
                                                    data-chained="malai" class="malai">Ta Kong</option>
                                                <option data-en-title=="Sdach Kong Khang Cheung" value="626"
                                                    data-value="sdach-kong-khang-cheung" data-chained="banteay-meas"
                                                    class="banteay-meas">Sdach Kong Khang Cheung</option>
                                                <option data-en-title=="Kranhung" value="1138" data-value="kranhung"
                                                    data-chained="kamchay-mear" class="kamchay-mear">Kranhung</option>
                                                <option data-en-title=="Lveaeng Ruessei" value="1394"
                                                    data-value="lveaeng-ruessei" data-chained="chi-kraeng"
                                                    class="chi-kraeng">Lveaeng Ruessei</option>
                                                <option data-en-title=="Krang Thnong" value="1650"
                                                    data-value="krang-thnong" data-chained="bati" class="bati">Krang
                                                    Thnong</option>
                                                <option data-en-title=="Chranouk" value="371" data-value="chranouk"
                                                    data-chained="kampong-leaeng" class="kampong-leaeng">Chranouk
                                                </option>
                                                <option data-en-title=="Sdach Kong Khang Lech" value="627"
                                                    data-value="sdach-kong-khang-lech" data-chained="banteay-meas"
                                                    class="banteay-meas">Sdach Kong Khang Lech</option>
                                                <option data-en-title=="Chhloung" value="883" data-value="chhloung"
                                                    data-chained="chhloung" class="chhloung">Chhloung</option>
                                                <option data-en-title=="Krabau" value="1139" data-value="krabau"
                                                    data-chained="kamchay-mear" class="kamchay-mear">Krabau</option>
                                                <option data-en-title=="Pongro Kraom" value="1395"
                                                    data-value="pongro-kraom" data-chained="chi-kraeng"
                                                    class="chi-kraeng">Pongro Kraom</option>
                                                <option data-en-title=="Lumpong" value="1651" data-value="lumpong"
                                                    data-chained="bati" class="bati">Lumpong</option>
                                                <option data-en-title=="Nimitt" value="116" data-value="nimitt"
                                                    data-chained="krong-paoy-paet" class="krong-paoy-paet">Nimitt
                                                </option>
                                                <option data-en-title=="Dar" value="372" data-value="dar"
                                                    data-chained="kampong-leaeng" class="kampong-leaeng">Dar</option>
                                                <option data-en-title=="Sdach Kong Khang Tboung" value="628"
                                                    data-value="sdach-kong-khang-tboung" data-chained="banteay-meas"
                                                    class="banteay-meas">Sdach Kong Khang Tboung</option>
                                                <option data-en-title=="Damrei Phong" value="884"
                                                    data-value="damrei-phong" data-chained="chhloung" class="chhloung">
                                                    Damrei Phong</option>
                                                <option data-en-title=="Seang Khveang" value="1140"
                                                    data-value="seang-khveang" data-chained="kamchay-mear"
                                                    class="kamchay-mear">Seang Khveang</option>
                                                <option data-en-title=="Pongro Leu" value="1396" data-value="pongro-leu"
                                                    data-chained="chi-kraeng" class="chi-kraeng">Pongro Leu</option>
                                                <option data-en-title=="Pea Ream" value="1652" data-value="pea-ream"
                                                    data-chained="bati" class="bati">Pea Ream</option>
                                                <option data-en-title=="Paoy Paet" value="117" data-value="paoy-paet"
                                                    data-chained="krong-paoy-paet" class="krong-paoy-paet">Paoy Paet
                                                </option>
                                                <option data-en-title=="Kampong Hau" value="373"
                                                    data-value="kampong-hau" data-chained="kampong-leaeng"
                                                    class="kampong-leaeng">Kampong Hau</option>
                                                <option data-en-title=="Tnaot Chong Srang" value="629"
                                                    data-value="tnaot-chong-srang" data-chained="banteay-meas"
                                                    class="banteay-meas">Tnaot Chong Srang</option>
                                                <option data-en-title=="Han Chey" value="885" data-value="han-chey"
                                                    data-chained="chhloung" class="chhloung">Han Chey</option>
                                                <option data-en-title=="Smaong Khang Cheung" value="1141"
                                                    data-value="smaong-khang-cheung" data-chained="kamchay-mear"
                                                    class="kamchay-mear">Smaong Khang Cheung</option>
                                                <option data-en-title=="Ruessei Lok" value="1397"
                                                    data-value="ruessei-lok" data-chained="chi-kraeng"
                                                    class="chi-kraeng">Ruessei Lok</option>
                                                <option data-en-title=="Pot Sar" value="1653" data-value="pot-sar"
                                                    data-chained="bati" class="bati">Pot Sar</option>
                                                <option data-en-title=="Phlov Tuk" value="374" data-value="phlov-tuk"
                                                    data-chained="kampong-leaeng" class="kampong-leaeng">Phlov Tuk
                                                </option>
                                                <option data-en-title=="Trapeang Sala Khang Kaeut" value="630"
                                                    data-value="trapeang-sala-khang-kaeut" data-chained="banteay-meas"
                                                    class="banteay-meas">Trapeang Sala Khang Kaeut</option>
                                                <option data-en-title=="Kampong Damrei" value="886"
                                                    data-value="kampong-damrei" data-chained="chhloung"
                                                    class="chhloung">Kampong Damrei</option>
                                                <option data-en-title=="Smaong Khang Tboung" value="1142"
                                                    data-value="smaong-khang-tboung" data-chained="kamchay-mear"
                                                    class="kamchay-mear">Smaong Khang Tboung</option>
                                                <option data-en-title=="Sangvaeuy" value="1398" data-value="sangvaeuy"
                                                    data-chained="chi-kraeng" class="chi-kraeng">Sangvaeuy</option>
                                                <option data-en-title=="Souphi" value="1654" data-value="souphi"
                                                    data-chained="bati" class="bati">Souphi</option>
                                                <option data-en-title=="Kantueu Muoy" value="119"
                                                    data-value="kantueu-muoy" data-chained="banan" class="banan">Kantueu
                                                    Muoy</option>
                                                <option data-en-title=="Pou" value="375" data-value="pou"
                                                    data-chained="kampong-leaeng" class="kampong-leaeng">Pou</option>
                                                <option data-en-title=="Trapeang Sala Khang Lech" value="631"
                                                    data-value="trapeang-sala-khang-lech" data-chained="banteay-meas"
                                                    class="banteay-meas">Trapeang Sala Khang Lech</option>
                                                <option data-en-title=="Kanhchor" value="887" data-value="kanhchor"
                                                    data-chained="chhloung" class="chhloung">Kanhchor</option>
                                                <option data-en-title=="Trabaek" value="1143" data-value="trabaek"
                                                    data-chained="kamchay-mear" class="kamchay-mear">Trabaek</option>
                                                <option data-en-title=="Spean Tnaot" value="1399"
                                                    data-value="spean-tnaot" data-chained="chi-kraeng"
                                                    class="chi-kraeng">Spean Tnaot</option>
                                                <option data-en-title=="Tang Doung" value="1655" data-value="tang-doung"
                                                    data-chained="bati" class="bati">Tang Doung</option>
                                                <option data-en-title=="Kantueu Pir" value="120"
                                                    data-value="kantueu-pir" data-chained="banan" class="banan">Kantueu
                                                    Pir</option>
                                                <option data-en-title=="Pralay Meas" value="376"
                                                    data-value="pralay-meas" data-chained="kampong-leaeng"
                                                    class="kampong-leaeng">Pralay Meas</option>
                                                <option data-en-title=="Tuk Meas Khang Kaeut" value="632"
                                                    data-value="tuk-meas-khang-kaeut" data-chained="banteay-meas"
                                                    class="banteay-meas">Tuk Meas Khang Kaeut</option>
                                                <option data-en-title=="Khsach Andaet" value="888"
                                                    data-value="khsach-andaet" data-chained="chhloung" class="chhloung">
                                                    Khsach Andaet</option>
                                                <option data-en-title=="Tnaot" value="1656" data-value="tnaot"
                                                    data-chained="bati" class="bati">Tnaot</option>
                                                <option data-en-title=="Bay Damram" value="121" data-value="bay-damram"
                                                    data-chained="banan" class="banan">Bay Damram</option>
                                                <option data-en-title=="Samraong Saen" value="377"
                                                    data-value="samraong-saen" data-chained="kampong-leaeng"
                                                    class="kampong-leaeng">Samraong Saen</option>
                                                <option data-en-title=="Tuk Meas Khang Lech" value="633"
                                                    data-value="tuk-meas-khang-lech" data-chained="banteay-meas"
                                                    class="banteay-meas">Tuk Meas Khang Lech</option>
                                                <option data-en-title=="Pongro" value="889" data-value="pongro"
                                                    data-chained="chhloung" class="chhloung">Pongro</option>
                                                <option data-en-title=="Ansaong" value="1145" data-value="ansaong"
                                                    data-chained="kampong-trabaek" class="kampong-trabaek">Ansaong
                                                </option>
                                                <option data-en-title=="Chonloas Dai" value="1401"
                                                    data-value="chonloas-dai" data-chained="kralanh" class="kralanh">
                                                    Chonloas Dai</option>
                                                <option data-en-title=="Trapeang Krasang" value="1657"
                                                    data-value="trapeang-krasang" data-chained="bati" class="bati">
                                                    Trapeang Krasang</option>
                                                <option data-en-title=="Chheu Teal" value="122" data-value="chheu-teal"
                                                    data-chained="banan" class="banan">Chheu Teal</option>
                                                <option data-en-title=="Svay Rumpea" value="378"
                                                    data-value="svay-rumpea" data-chained="kampong-leaeng"
                                                    class="kampong-leaeng">Svay Rumpea</option>
                                                <option data-en-title=="Voat Angk Khang Cheung" value="634"
                                                    data-value="voat-angk-khang-cheung" data-chained="banteay-meas"
                                                    class="banteay-meas">Voat Angk Khang Cheung</option>
                                                <option data-en-title=="Preaek Saman" value="890"
                                                    data-value="preaek-saman" data-chained="chhloung" class="chhloung">
                                                    Preaek Saman</option>
                                                <option data-en-title=="Cham" value="1146" data-value="cham"
                                                    data-chained="kampong-trabaek" class="kampong-trabaek">Cham</option>
                                                <option data-en-title=="Kampong Thkov" value="1402"
                                                    data-value="kampong-thkov" data-chained="kralanh" class="kralanh">
                                                    Kampong Thkov</option>
                                                <option data-en-title=="Trapeang Sab" value="1658"
                                                    data-value="trapeang-sab" data-chained="bati" class="bati">Trapeang
                                                    Sab</option>
                                                <option data-en-title=="Chaeng Mean Chey" value="123"
                                                    data-value="chaeng-mean-chey" data-chained="banan" class="banan">
                                                    Chaeng Mean Chey</option>
                                                <option data-en-title=="Trangel" value="379" data-value="trangel"
                                                    data-chained="kampong-leaeng" class="kampong-leaeng">Trangel
                                                </option>
                                                <option data-en-title=="Voat Angk Khang Tboung" value="635"
                                                    data-value="voat-angk-khang-tboung" data-chained="banteay-meas"
                                                    class="banteay-meas">Voat Angk Khang Tboung</option>
                                                <option data-en-title=="Cheang Daek" value="1147"
                                                    data-value="cheang-daek" data-chained="kampong-trabaek"
                                                    class="kampong-trabaek">Cheang Daek</option>
                                                <option data-en-title=="Kralanh" value="1403" data-value="kralanh"
                                                    data-chained="kralanh" class="kralanh">Kralanh</option>
                                                <option data-en-title=="Phnum Sampov" value="124"
                                                    data-value="phnum-sampov" data-chained="banan" class="banan">Phnum
                                                    Sampov</option>
                                                <option data-en-title=="Kaoh Trong" value="892" data-value="kaoh-trong"
                                                    data-chained="krong-kracheh" class="krong-kracheh">Kaoh Trong
                                                </option>
                                                <option data-en-title=="Chrey" value="1148" data-value="chrey"
                                                    data-chained="kampong-trabaek" class="kampong-trabaek">Chrey
                                                </option>
                                                <option data-en-title=="Krouch Kor" value="1404" data-value="krouch-kor"
                                                    data-chained="kralanh" class="kralanh">Krouch Kor</option>
                                                <option data-en-title=="Bourei Cholsar" value="1660"
                                                    data-value="bourei-cholsar" data-chained="borei-cholsar"
                                                    class="borei-cholsar">Bourei Cholsar</option>
                                                <option data-en-title=="Snoeng" value="125" data-value="snoeng"
                                                    data-chained="banan" class="banan">Snoeng</option>
                                                <option data-en-title=="Ampil Tuek" value="381" data-value="ampil-tuek"
                                                    data-chained="kampong-tralach" class="kampong-tralach">Ampil Tuek
                                                </option>
                                                <option data-en-title=="Baniev" value="637" data-value="baniev"
                                                    data-chained="chhuk" class="chhuk">Baniev</option>
                                                <option data-en-title=="Krakor" value="893" data-value="krakor"
                                                    data-chained="krong-kracheh" class="krong-kracheh">Krakor</option>
                                                <option data-en-title=="Kansoam Ak" value="1149" data-value="kansoam-ak"
                                                    data-chained="kampong-trabaek" class="kampong-trabaek">Kansoam Ak
                                                </option>
                                                <option data-en-title=="Roung Kou" value="1405" data-value="roung-kou"
                                                    data-chained="kralanh" class="kralanh">Roung Kou</option>
                                                <option data-en-title=="Chey Chouk" value="1661" data-value="chey-chouk"
                                                    data-chained="borei-cholsar" class="borei-cholsar">Chey Chouk
                                                </option>
                                                <option data-en-title=="Ta Kream" value="126" data-value="ta-kream"
                                                    data-chained="banan" class="banan">Ta Kream</option>
                                                <option data-en-title=="Chhuk Sa" value="382" data-value="chhuk-sa"
                                                    data-chained="kampong-tralach" class="kampong-tralach">Chhuk Sa
                                                </option>
                                                <option data-en-title=="Ta Kaen" value="638" data-value="ta-kaen"
                                                    data-chained="chhuk" class="chhuk">Ta Kaen</option>
                                                <option data-en-title=="Kracheh" value="894" data-value="kracheh"
                                                    data-chained="krong-kracheh" class="krong-kracheh">Kracheh</option>
                                                <option data-en-title=="Kou Khchak" value="1150" data-value="kou-khchak"
                                                    data-chained="kampong-trabaek" class="kampong-trabaek">Kou Khchak
                                                </option>
                                                <option data-en-title=="Sambuor" value="1406" data-value="sambuor"
                                                    data-chained="kralanh" class="kralanh">Sambuor</option>
                                                <option data-en-title=="Doung Khpos" value="1662"
                                                    data-value="doung-khpos" data-chained="borei-cholsar"
                                                    class="borei-cholsar">Doung Khpos</option>
                                                <option data-en-title=="Chres" value="383" data-value="chres"
                                                    data-chained="kampong-tralach" class="kampong-tralach">Chres
                                                </option>
                                                <option data-en-title=="Boeng Nimol" value="639"
                                                    data-value="boeng-nimol" data-chained="chhuk" class="chhuk">Boeng
                                                    Nimol</option>
                                                <option data-en-title=="Ou Ruessei" value="895" data-value="ou-ruessei"
                                                    data-chained="krong-kracheh" class="krong-kracheh">Ou Ruessei
                                                </option>
                                                <option data-en-title=="Kampong Trabaek" value="1151"
                                                    data-value="kampong-trabaek" data-chained="kampong-trabaek"
                                                    class="kampong-trabaek">Kampong Trabaek</option>
                                                <option data-en-title=="Saen Sokh" value="1407" data-value="saen-sokh"
                                                    data-chained="kralanh" class="kralanh">Saen Sokh</option>
                                                <option data-en-title=="Kampong Krasang" value="1663"
                                                    data-value="kampong-krasang" data-chained="borei-cholsar"
                                                    class="borei-cholsar">Kampong Krasang</option>
                                                <option data-en-title=="Ta Pung" value="128" data-value="ta-pung"
                                                    data-chained="thma-koul" class="thma-koul">Ta Pung</option>
                                                <option data-en-title=="Kampong Tralach" value="384"
                                                    data-value="kampong-tralach" data-chained="kampong-tralach"
                                                    class="kampong-tralach">Kampong Tralach</option>
                                                <option data-en-title=="Chhuk" value="640" data-value="chhuk"
                                                    data-chained="chhuk" class="chhuk">Chhuk</option>
                                                <option data-en-title=="Roka Kandal" value="896"
                                                    data-value="roka-kandal" data-chained="krong-kracheh"
                                                    class="krong-kracheh">Roka Kandal</option>
                                                <option data-en-title=="Peam Montear" value="1152"
                                                    data-value="peam-montear" data-chained="kampong-trabaek"
                                                    class="kampong-trabaek">Peam Montear</option>
                                                <option data-en-title=="Snuol" value="1408" data-value="snuol"
                                                    data-chained="kralanh" class="kralanh">Snuol</option>
                                                <option data-en-title=="Kouk Pou" value="1664" data-value="kouk-pou"
                                                    data-chained="borei-cholsar" class="borei-cholsar">Kouk Pou</option>
                                                <option data-en-title=="Ta Meun" value="129" data-value="ta-meun"
                                                    data-chained="thma-koul" class="thma-koul">Ta Meun</option>
                                                <option data-en-title=="Longveaek" value="385" data-value="longveaek"
                                                    data-chained="kampong-tralach" class="kampong-tralach">Longveaek
                                                </option>
                                                <option data-en-title=="Doun Yay" value="641" data-value="doun-yay"
                                                    data-chained="chhuk" class="chhuk">Doun Yay</option>
                                                <option data-en-title=="Prasat" value="1153" data-value="prasat"
                                                    data-chained="kampong-trabaek" class="kampong-trabaek">Prasat
                                                </option>
                                                <option data-en-title=="Sranal" value="1409" data-value="sranal"
                                                    data-chained="kralanh" class="kralanh">Sranal</option>
                                                <option data-en-title=="Ou Ta Ki" value="130" data-value="ou-ta-ki"
                                                    data-chained="thma-koul" class="thma-koul">Ou Ta Ki</option>
                                                <option data-en-title=="Ou Ruessei" value="386" data-value="ou-ruessei"
                                                    data-chained="kampong-tralach" class="kampong-tralach">Ou Ruessei
                                                </option>
                                                <option data-en-title=="Krang Sbov" value="642" data-value="krang-sbov"
                                                    data-chained="chhuk" class="chhuk">Krang Sbov</option>
                                                <option data-en-title=="Chambak" value="898" data-value="chambak"
                                                    data-chained="preaek-prasab" class="preaek-prasab">Chambak</option>
                                                <option data-en-title=="Pratheat" value="1154" data-value="pratheat"
                                                    data-chained="kampong-trabaek" class="kampong-trabaek">Pratheat
                                                </option>
                                                <option data-en-title=="Ta an" value="1410" data-value="ta-an"
                                                    data-chained="kralanh" class="kralanh">Ta an</option>
                                                <option data-en-title=="Angk Prasat" value="1666"
                                                    data-value="angk-prasat" data-chained="kiri-vong" class="kiri-vong">
                                                    Angk Prasat</option>
                                                <option data-en-title=="Chrey" value="131" data-value="chrey"
                                                    data-chained="thma-koul" class="thma-koul">Chrey</option>
                                                <option data-en-title=="Peani" value="387" data-value="peani"
                                                    data-chained="kampong-tralach" class="kampong-tralach">Peani
                                                </option>
                                                <option data-en-title=="Krang Snay" value="643" data-value="krang-snay"
                                                    data-chained="chhuk" class="chhuk">Krang Snay</option>
                                                <option data-en-title=="Chrouy Banteay" value="899"
                                                    data-value="chrouy-banteay" data-chained="preaek-prasab"
                                                    class="preaek-prasab">Chrouy Banteay</option>
                                                <option data-en-title=="Prey Chhor" value="1155" data-value="prey-chhor"
                                                    data-chained="kampong-trabaek" class="kampong-trabaek">Prey Chhor
                                                </option>
                                                <option data-en-title=="Preah Bat Choan Chum" value="1667"
                                                    data-value="preah-bat-choan-chum" data-chained="kiri-vong"
                                                    class="kiri-vong">Preah Bat Choan Chum</option>
                                                <option data-en-title=="Anlong Run" value="132" data-value="anlong-run"
                                                    data-chained="thma-koul" class="thma-koul">Anlong Run</option>
                                                <option data-en-title=="Saeb" value="388" data-value="saeb"
                                                    data-chained="kampong-tralach" class="kampong-tralach">Saeb</option>
                                                <option data-en-title=="Lbaeuk" value="644" data-value="lbaeuk"
                                                    data-chained="chhuk" class="chhuk">Lbaeuk</option>
                                                <option data-en-title=="Kampong Kor" value="900"
                                                    data-value="kampong-kor" data-chained="preaek-prasab"
                                                    class="preaek-prasab">Kampong Kor</option>
                                                <option data-en-title=="Prey Poun" value="1156" data-value="prey-poun"
                                                    data-chained="kampong-trabaek" class="kampong-trabaek">Prey Poun
                                                </option>
                                                <option data-en-title=="Sasar Sdam" value="1412" data-value="sasar-sdam"
                                                    data-chained="puok" class="puok">Sasar Sdam</option>
                                                <option data-en-title=="Kamnab" value="1668" data-value="kamnab"
                                                    data-chained="kiri-vong" class="kiri-vong">Kamnab</option>
                                                <option data-en-title=="Chrouy Sdau" value="133"
                                                    data-value="chrouy-sdau" data-chained="thma-koul" class="thma-koul">
                                                    Chrouy Sdau</option>
                                                <option data-en-title=="Ta Ches" value="389" data-value="ta-ches"
                                                    data-chained="kampong-tralach" class="kampong-tralach">Ta Ches
                                                </option>
                                                <option data-en-title=="Trapeang Plang" value="645"
                                                    data-value="trapeang-plang" data-chained="chhuk" class="chhuk">
                                                    Trapeang Plang</option>
                                                <option data-en-title=="Kaoh Ta Suy" value="901"
                                                    data-value="kaoh-ta-suy" data-chained="preaek-prasab"
                                                    class="preaek-prasab">Kaoh Ta Suy</option>
                                                <option data-en-title=="Thkov" value="1157" data-value="thkov"
                                                    data-chained="kampong-trabaek" class="kampong-trabaek">Thkov
                                                </option>
                                                <option data-en-title=="Doun Kaev" value="1413" data-value="doun-kaev"
                                                    data-chained="puok" class="puok">Doun Kaev</option>
                                                <option data-en-title=="Kampeaeng" value="1669" data-value="kampeaeng"
                                                    data-chained="kiri-vong" class="kiri-vong">Kampeaeng</option>
                                                <option data-en-title=="Boeng Pring" value="134"
                                                    data-value="boeng-pring" data-chained="thma-koul" class="thma-koul">
                                                    Boeng Pring</option>
                                                <option data-en-title=="Thma Edth" value="390" data-value="thma-edth"
                                                    data-chained="kampong-tralach" class="kampong-tralach">Thma Edth
                                                </option>
                                                <option data-en-title=="Mean Chey" value="646" data-value="mean-chey"
                                                    data-chained="chhuk" class="chhuk">Mean Chey</option>
                                                <option data-en-title=="Preaek Prasab" value="902"
                                                    data-value="preaek-prasab" data-chained="preaek-prasab"
                                                    class="preaek-prasab">Preaek Prasab</option>
                                                <option data-en-title=="Kdei Run" value="1414" data-value="kdei-run"
                                                    data-chained="puok" class="puok">Kdei Run</option>
                                                <option data-en-title=="Kiri Chong Kaoh" value="1670"
                                                    data-value="kiri-chong-kaoh" data-chained="kiri-vong"
                                                    class="kiri-vong">Kiri Chong Kaoh</option>
                                                <option data-en-title=="Kouk Khmum" value="135" data-value="kouk-khmum"
                                                    data-chained="thma-koul" class="thma-koul">Kouk Khmum</option>
                                                <option data-en-title=="Nareay" value="647" data-value="nareay"
                                                    data-chained="chhuk" class="chhuk">Nareay</option>
                                                <option data-en-title=="Ruessei Kaev" value="903"
                                                    data-value="ruessei-kaev" data-chained="preaek-prasab"
                                                    class="preaek-prasab">Ruessei Kaev</option>
                                                <option data-en-title=="Chong Ampil" value="1159"
                                                    data-value="chong-ampil" data-chained="kanhchriech"
                                                    class="kanhchriech">Chong Ampil</option>
                                                <option data-en-title=="Kaev Poar" value="1415" data-value="kaev-poar"
                                                    data-chained="puok" class="puok">Kaev Poar</option>
                                                <option data-en-title=="Kouk Prech" value="1671" data-value="kouk-prech"
                                                    data-chained="kiri-vong" class="kiri-vong">Kouk Prech</option>
                                                <option data-en-title=="Bansay Traeng" value="136"
                                                    data-value="bansay-traeng" data-chained="thma-koul"
                                                    class="thma-koul">Bansay Traeng</option>
                                                <option data-en-title=="Andoung Snay" value="392"
                                                    data-value="andoung-snay" data-chained="rolea-bier"
                                                    class="rolea-bier">Andoung Snay</option>
                                                <option data-en-title=="Satv Pong" value="648" data-value="satv-pong"
                                                    data-chained="chhuk" class="chhuk">Satv Pong</option>
                                                <option data-en-title=="Saob" value="904" data-value="saob"
                                                    data-chained="preaek-prasab" class="preaek-prasab">Saob</option>
                                                <option data-en-title=="Kanhchriech" value="1160"
                                                    data-value="kanhchriech" data-chained="kanhchriech"
                                                    class="kanhchriech">Kanhchriech</option>
                                                <option data-en-title=="Khnat" value="1416" data-value="khnat"
                                                    data-chained="puok" class="puok">Khnat</option>
                                                <option data-en-title=="Phnum Den" value="1672" data-value="phnum-den"
                                                    data-chained="kiri-vong" class="kiri-vong">Phnum Den</option>
                                                <option data-en-title=="Rung Chrey" value="137" data-value="rung-chrey"
                                                    data-chained="thma-koul" class="thma-koul">Rung Chrey</option>
                                                <option data-en-title=="Banteay Preal" value="393"
                                                    data-value="banteay-preal" data-chained="rolea-bier"
                                                    class="rolea-bier">Banteay Preal</option>
                                                <option data-en-title=="Trapeang Bei" value="649"
                                                    data-value="trapeang-bei" data-chained="chhuk" class="chhuk">
                                                    Trapeang Bei</option>
                                                <option data-en-title=="Ta Mau" value="905" data-value="ta-mau"
                                                    data-chained="preaek-prasab" class="preaek-prasab">Ta Mau</option>
                                                <option data-en-title=="Kdoeang Reay" value="1161"
                                                    data-value="kdoeang-reay" data-chained="kanhchriech"
                                                    class="kanhchriech">Kdoeang Reay</option>
                                                <option data-en-title=="Lvea" value="1417" data-value="lvea"
                                                    data-chained="puok" class="puok">Lvea</option>
                                                <option data-en-title=="Prey Ampok" value="1673" data-value="prey-ampok"
                                                    data-chained="kiri-vong" class="kiri-vong">Prey Ampok</option>
                                                <option data-en-title=="Cheung Kreav" value="394"
                                                    data-value="cheung-kreav" data-chained="rolea-bier"
                                                    class="rolea-bier">Cheung Kreav</option>
                                                <option data-en-title=="Tramaeng" value="650" data-value="tramaeng"
                                                    data-chained="chhuk" class="chhuk">Tramaeng</option>
                                                <option data-en-title=="Kouk Kong Kaeut" value="1162"
                                                    data-value="kouk-kong-kaeut" data-chained="kanhchriech"
                                                    class="kanhchriech">Kouk Kong Kaeut</option>
                                                <option data-en-title=="Mukh Paen" value="1418" data-value="mukh-paen"
                                                    data-chained="puok" class="puok">Mukh Paen</option>
                                                <option data-en-title=="Prey Rumdeng" value="1674"
                                                    data-value="prey-rumdeng" data-chained="kiri-vong"
                                                    class="kiri-vong">Prey Rumdeng</option>
                                                <option data-en-title=="Tuol Ta Aek" value="139"
                                                    data-value="tuol-ta-aek" data-chained="krong-battambang"
                                                    class="krong-battambang">Tuol Ta Aek</option>
                                                <option data-en-title=="Chrey Bak" value="395" data-value="chrey-bak"
                                                    data-chained="rolea-bier" class="rolea-bier">Chrey Bak</option>
                                                <option data-en-title=="Boeng Char" value="907" data-value="boeng-char"
                                                    data-chained="sambour" class="sambour">Boeng Char</option>
                                                <option data-en-title=="Kouk Kong Lech" value="1163"
                                                    data-value="kouk-kong-lech" data-chained="kanhchriech"
                                                    class="kanhchriech">Kouk Kong Lech</option>
                                                <option data-en-title=="Pou Treay" value="1419" data-value="pou-treay"
                                                    data-chained="puok" class="puok">Pou Treay</option>
                                                <option data-en-title=="Ream Andaeuk" value="1675"
                                                    data-value="ream-andaeuk" data-chained="kiri-vong"
                                                    class="kiri-vong">Ream Andaeuk</option>
                                                <option data-en-title=="Preaek Preah Sdach" value="140"
                                                    data-value="preaek-preah-sdach" data-chained="krong-battambang"
                                                    class="krong-battambang">Preaek Preah Sdach</option>
                                                <option data-en-title=="Kouk Banteay" value="396"
                                                    data-value="kouk-banteay" data-chained="rolea-bier"
                                                    class="rolea-bier">Kouk Banteay</option>
                                                <option data-en-title=="Chres" value="652" data-value="chres"
                                                    data-chained="chum-kiri" class="chum-kiri">Chres</option>
                                                <option data-en-title=="Kampong Cham" value="908"
                                                    data-value="kampong-cham" data-chained="sambour" class="sambour">
                                                    Kampong Cham</option>
                                                <option data-en-title=="Preal" value="1164" data-value="preal"
                                                    data-chained="kanhchriech" class="kanhchriech">Preal</option>
                                                <option data-en-title=="Puok" value="1420" data-value="puok"
                                                    data-chained="puok" class="puok">Puok</option>
                                                <option data-en-title=="Saom" value="1676" data-value="saom"
                                                    data-chained="kiri-vong" class="kiri-vong">Saom</option>
                                                <option data-en-title=="Rotanak" value="141" data-value="rotanak"
                                                    data-chained="krong-battambang" class="krong-battambang">Rotanak
                                                </option>
                                                <option data-en-title=="Krang Leav" value="397" data-value="krang-leav"
                                                    data-chained="rolea-bier" class="rolea-bier">Krang Leav</option>
                                                <option data-en-title=="Chumpu Voan" value="653"
                                                    data-value="chumpu-voan" data-chained="chum-kiri" class="chum-kiri">
                                                    Chumpu Voan</option>
                                                <option data-en-title=="Kbal Damrei" value="909"
                                                    data-value="kbal-damrei" data-chained="sambour" class="sambour">Kbal
                                                    Damrei</option>
                                                <option data-en-title=="Thma Pun" value="1165" data-value="thma-pun"
                                                    data-chained="kanhchriech" class="kanhchriech">Thma Pun</option>
                                                <option data-en-title=="Prey Chruk" value="1421" data-value="prey-chruk"
                                                    data-chained="puok" class="puok">Prey Chruk</option>
                                                <option data-en-title=="Ta Ou" value="1677" data-value="ta-ou"
                                                    data-chained="kiri-vong" class="kiri-vong">Ta Ou</option>
                                                <option data-en-title=="Chamkar Samraong" value="142"
                                                    data-value="chamkar-samraong" data-chained="krong-battambang"
                                                    class="krong-battambang">Chamkar Samraong</option>
                                                <option data-en-title=="Pongro" value="398" data-value="pongro"
                                                    data-chained="rolea-bier" class="rolea-bier">Pongro</option>
                                                <option data-en-title=="Snay Anhchet" value="654"
                                                    data-value="snay-anhchet" data-chained="chum-kiri"
                                                    class="chum-kiri">Snay Anhchet</option>
                                                <option data-en-title=="Kaoh Khnhaer" value="910"
                                                    data-value="kaoh-khnhaer" data-chained="sambour" class="sambour">
                                                    Kaoh Khnhaer</option>
                                                <option data-en-title=="Tnaot" value="1166" data-value="tnaot"
                                                    data-chained="kanhchriech" class="kanhchriech">Tnaot</option>
                                                <option data-en-title=="Reul" value="1422" data-value="reul"
                                                    data-chained="puok" class="puok">Reul</option>
                                                <option data-en-title=="Sla Kaet" value="143" data-value="sla-kaet"
                                                    data-chained="krong-battambang" class="krong-battambang">Sla Kaet
                                                </option>
                                                <option data-en-title=="Prasneb" value="399" data-value="prasneb"
                                                    data-chained="rolea-bier" class="rolea-bier">Prasneb</option>
                                                <option data-en-title=="Srae Chaeng" value="655"
                                                    data-value="srae-chaeng" data-chained="chum-kiri" class="chum-kiri">
                                                    Srae Chaeng</option>
                                                <option data-en-title=="Ou Krieng" value="911" data-value="ou-krieng"
                                                    data-chained="sambour" class="sambour">Ou Krieng</option>
                                                <option data-en-title=="Samraong Yea" value="1423"
                                                    data-value="samraong-yea" data-chained="puok" class="puok">Samraong
                                                    Yea</option>
                                                <option data-en-title=="Krapum Chhuk" value="1679"
                                                    data-value="krapum-chhuk" data-chained="kaoh-andaet"
                                                    class="kaoh-andaet">Krapum Chhuk</option>
                                                <option data-en-title=="Kdol Doun Teav" value="144"
                                                    data-value="kdol-doun-teav" data-chained="krong-battambang"
                                                    class="krong-battambang">Kdol Doun Teav</option>
                                                <option data-en-title=="Prey Mul" value="400" data-value="prey-mul"
                                                    data-chained="rolea-bier" class="rolea-bier">Prey Mul</option>
                                                <option data-en-title=="Srae Knong" value="656" data-value="srae-knong"
                                                    data-chained="chum-kiri" class="chum-kiri">Srae Knong</option>
                                                <option data-en-title=="Roluos Mean Chey" value="912"
                                                    data-value="roluos-mean-chey" data-chained="sambour"
                                                    class="sambour">Roluos Mean Chey</option>
                                                <option data-en-title=="Angkor Sar" value="1168" data-value="angkor-sar"
                                                    data-chained="me-sang" class="me-sang">Angkor Sar</option>
                                                <option data-en-title=="Trei Nhoar" value="1424" data-value="trei-nhoar"
                                                    data-chained="puok" class="puok">Trei Nhoar</option>
                                                <option data-en-title=="Pech Sar" value="1680" data-value="pech-sar"
                                                    data-chained="kaoh-andaet" class="kaoh-andaet">Pech Sar</option>
                                                <option data-en-title=="Ou Mal" value="145" data-value="ou-mal"
                                                    data-chained="krong-battambang" class="krong-battambang">Ou Mal
                                                </option>
                                                <option data-en-title=="Rolea B'ier" value="401" data-value="rolea-bier"
                                                    data-chained="rolea-bier" class="rolea-bier">Rolea B'ier</option>
                                                <option data-en-title=="Srae Samraong" value="657"
                                                    data-value="srae-samraong" data-chained="chum-kiri"
                                                    class="chum-kiri">Srae Samraong</option>
                                                <option data-en-title=="Sambour" value="913" data-value="sambour"
                                                    data-chained="sambour" class="sambour">Sambour</option>
                                                <option data-en-title=="Chres" value="1169" data-value="chres"
                                                    data-chained="me-sang" class="me-sang">Chres</option>
                                                <option data-en-title=="Yeang" value="1425" data-value="yeang"
                                                    data-chained="puok" class="puok">Yeang</option>
                                                <option data-en-title=="Prey Khla" value="1681" data-value="prey-khla"
                                                    data-chained="kaoh-andaet" class="kaoh-andaet">Prey Khla</option>
                                                <option data-en-title=="Voat Kor" value="146" data-value="voat-kor"
                                                    data-chained="krong-battambang" class="krong-battambang">Voat Kor
                                                </option>
                                                <option data-en-title=="Srae Thmei" value="402" data-value="srae-thmei"
                                                    data-chained="rolea-bier" class="rolea-bier">Srae Thmei</option>
                                                <option data-en-title=="Trapeang Reang" value="658"
                                                    data-value="trapeang-reang" data-chained="chum-kiri"
                                                    class="chum-kiri">Trapeang Reang</option>
                                                <option data-en-title=="Sandan" value="914" data-value="sandan"
                                                    data-chained="sambour" class="sambour">Sandan</option>
                                                <option data-en-title=="Chi Phok" value="1170" data-value="chi-phok"
                                                    data-chained="me-sang" class="me-sang">Chi Phok</option>
                                                <option data-en-title=="Prey Yuthka" value="1682"
                                                    data-value="prey-yuthka" data-chained="kaoh-andaet"
                                                    class="kaoh-andaet">Prey Yuthka</option>
                                                <option data-en-title=="Ou Char" value="147" data-value="ou-char"
                                                    data-chained="krong-battambang" class="krong-battambang">Ou Char
                                                </option>
                                                <option data-en-title=="Svay Chrum" value="403" data-value="svay-chrum"
                                                    data-chained="rolea-bier" class="rolea-bier">Svay Chrum</option>
                                                <option data-en-title=="Srae Chis" value="915" data-value="srae-chis"
                                                    data-chained="sambour" class="sambour">Srae Chis</option>
                                                <option data-en-title=="Prey Khnes" value="1171" data-value="prey-khnes"
                                                    data-chained="me-sang" class="me-sang">Prey Khnes</option>
                                                <option data-en-title=="Bakong" value="1427" data-value="bakong"
                                                    data-chained="prasat-bakong" class="prasat-bakong">Bakong</option>
                                                <option data-en-title=="Romenh" value="1683" data-value="romenh"
                                                    data-chained="kaoh-andaet" class="kaoh-andaet">Romenh</option>
                                                <option data-en-title=="Svay Pao" value="148" data-value="svay-pao"
                                                    data-chained="krong-battambang" class="krong-battambang">Svay Pao
                                                </option>
                                                <option data-en-title=="Tuek Hout" value="404" data-value="tuek-hout"
                                                    data-chained="rolea-bier" class="rolea-bier">Tuek Hout</option>
                                                <option data-en-title=="Damnak Sokram" value="660"
                                                    data-value="damnak-sokram" data-chained="dang-tong"
                                                    class="dang-tong">Damnak Sokram</option>
                                                <option data-en-title=="Voadthonak" value="916" data-value="voadthonak"
                                                    data-chained="sambour" class="sambour">Voadthonak</option>
                                                <option data-en-title=="Prey Rumdeng" value="1172"
                                                    data-value="prey-rumdeng" data-chained="me-sang" class="me-sang">
                                                    Prey Rumdeng</option>
                                                <option data-en-title=="Ballangk" value="1428" data-value="ballangk"
                                                    data-chained="prasat-bakong" class="prasat-bakong">Ballangk</option>
                                                <option data-en-title=="Thlea Prachum" value="1684"
                                                    data-value="thlea-prachum" data-chained="kaoh-andaet"
                                                    class="kaoh-andaet">Thlea Prachum</option>
                                                <option data-en-title=="Dang Tong" value="661" data-value="dang-tong"
                                                    data-chained="dang-tong" class="dang-tong">Dang Tong</option>
                                                <option data-en-title=="Prey Totueng" value="1173"
                                                    data-value="prey-totueng" data-chained="me-sang" class="me-sang">
                                                    Prey Totueng</option>
                                                <option data-en-title=="Kampong Phluk" value="1429"
                                                    data-value="kampong-phluk" data-chained="prasat-bakong"
                                                    class="prasat-bakong">Kampong Phluk</option>
                                                <option data-en-title=="Bavel" value="150" data-value="bavel"
                                                    data-chained="bavel" class="bavel">Bavel</option>
                                                <option data-en-title=="Chhean Laeung" value="406"
                                                    data-value="chhean-laeung" data-chained="sameakki-mean-chey"
                                                    class="sameakki-mean-chey">Chhean Laeung</option>
                                                <option data-en-title=="Khcheay Khang Cheung" value="662"
                                                    data-value="khcheay-khang-cheung" data-chained="dang-tong"
                                                    class="dang-tong">Khcheay Khang Cheung</option>
                                                <option data-en-title=="Khsuem" value="918" data-value="khsuem"
                                                    data-chained="snuol" class="snuol">Khsuem</option>
                                                <option data-en-title=="Svay Chrum" value="1174" data-value="svay-chrum"
                                                    data-chained="me-sang" class="me-sang">Svay Chrum</option>
                                                <option data-en-title=="Kantreang" value="1430" data-value="kantreang"
                                                    data-chained="prasat-bakong" class="prasat-bakong">Kantreang
                                                </option>
                                                <option data-en-title=="Angkanh" value="1686" data-value="angkanh"
                                                    data-chained="prey-kabbas" class="prey-kabbas">Angkanh</option>
                                                <option data-en-title=="Khnach Romeas" value="151"
                                                    data-value="khnach-romeas" data-chained="bavel" class="bavel">Khnach
                                                    Romeas</option>
                                                <option data-en-title=="Khnar Chhmar" value="407"
                                                    data-value="khnar-chhmar" data-chained="sameakki-mean-chey"
                                                    class="sameakki-mean-chey">Khnar Chhmar</option>
                                                <option data-en-title=="Khcheay Khang Tboung" value="663"
                                                    data-value="khcheay-khang-tboung" data-chained="dang-tong"
                                                    class="dang-tong">Khcheay Khang Tboung</option>
                                                <option data-en-title=="Pir Thnu" value="919" data-value="pir-thnu"
                                                    data-chained="snuol" class="snuol">Pir Thnu</option>
                                                <option data-en-title=="Trapeang Srae" value="1175"
                                                    data-value="trapeang-srae" data-chained="me-sang" class="me-sang">
                                                    Trapeang Srae</option>
                                                <option data-en-title=="Kandaek" value="1431" data-value="kandaek"
                                                    data-chained="prasat-bakong" class="prasat-bakong">Kandaek</option>
                                                <option data-en-title=="Ban Kam" value="1687" data-value="ban-kam"
                                                    data-chained="prey-kabbas" class="prey-kabbas">Ban Kam</option>
                                                <option data-en-title=="Lvea" value="152" data-value="lvea"
                                                    data-chained="bavel" class="bavel">Lvea</option>
                                                <option data-en-title=="Krang Lvea" value="408" data-value="krang-lvea"
                                                    data-chained="sameakki-mean-chey" class="sameakki-mean-chey">Krang
                                                    Lvea</option>
                                                <option data-en-title=="Mean Ritth" value="664" data-value="mean-ritth"
                                                    data-chained="dang-tong" class="dang-tong">Mean Ritth</option>
                                                <option data-en-title=="Snuol" value="920" data-value="snuol"
                                                    data-chained="snuol" class="snuol">Snuol</option>
                                                <option data-en-title=="Mean Chey" value="1432" data-value="mean-chey"
                                                    data-chained="prasat-bakong" class="prasat-bakong">Mean Chey
                                                </option>
                                                <option data-en-title=="Champa" value="1688" data-value="champa"
                                                    data-chained="prey-kabbas" class="prey-kabbas">Champa</option>
                                                <option data-en-title=="Prey Khpos" value="153" data-value="prey-khpos"
                                                    data-chained="bavel" class="bavel">Prey Khpos</option>
                                                <option data-en-title=="Peam" value="409" data-value="peam"
                                                    data-chained="sameakki-mean-chey" class="sameakki-mean-chey">Peam
                                                </option>
                                                <option data-en-title=="Srae Chea Khang Cheung" value="665"
                                                    data-value="srae-chea-khang-cheung" data-chained="dang-tong"
                                                    class="dang-tong">Srae Chea Khang Cheung</option>
                                                <option data-en-title=="Srae Char" value="921" data-value="srae-char"
                                                    data-chained="snuol" class="snuol">Srae Char</option>
                                                <option data-en-title=="Angkor Angk" value="1177"
                                                    data-value="angkor-angk" data-chained="peam-chor" class="peam-chor">
                                                    Angkor Angk</option>
                                                <option data-en-title=="Roluos" value="1433" data-value="roluos"
                                                    data-chained="prasat-bakong" class="prasat-bakong">Roluos</option>
                                                <option data-en-title=="Char" value="1689" data-value="char"
                                                    data-chained="prey-kabbas" class="prey-kabbas">Char</option>
                                                <option data-en-title=="Ampil Pram Daeum" value="154"
                                                    data-value="ampil-pram-daeum" data-chained="bavel" class="bavel">
                                                    Ampil Pram Daeum</option>
                                                <option data-en-title=="Sedthei" value="410" data-value="sedthei"
                                                    data-chained="sameakki-mean-chey" class="sameakki-mean-chey">Sedthei
                                                </option>
                                                <option data-en-title=="Srae Chea Khang Tboung" value="666"
                                                    data-value="srae-chea-khang-tboung" data-chained="dang-tong"
                                                    class="dang-tong">Srae Chea Khang Tboung</option>
                                                <option data-en-title=="Svay Chreah" value="922"
                                                    data-value="svay-chreah" data-chained="snuol" class="snuol">Svay
                                                    Chreah</option>
                                                <option data-en-title=="Kampong Prasat" value="1178"
                                                    data-value="kampong-prasat" data-chained="peam-chor"
                                                    class="peam-chor">Kampong Prasat</option>
                                                <option data-en-title=="Trapeang Thum" value="1434"
                                                    data-value="trapeang-thum" data-chained="prasat-bakong"
                                                    class="prasat-bakong">Trapeang Thum</option>
                                                <option data-en-title=="Kampeaeng" value="1690" data-value="kampeaeng"
                                                    data-chained="prey-kabbas" class="prey-kabbas">Kampeaeng</option>
                                                <option data-en-title=="Kdol Ta Haen" value="155"
                                                    data-value="kdol-ta-haen" data-chained="bavel" class="bavel">Kdol Ta
                                                    Haen</option>
                                                <option data-en-title=="Svay" value="411" data-value="svay"
                                                    data-chained="sameakki-mean-chey" class="sameakki-mean-chey">Svay
                                                </option>
                                                <option data-en-title=="Totung" value="667" data-value="totung"
                                                    data-chained="dang-tong" class="dang-tong">Totung</option>
                                                <option data-en-title=="Kaoh Chek" value="1179" data-value="kaoh-chek"
                                                    data-chained="peam-chor" class="peam-chor">Kaoh Chek</option>
                                                <option data-en-title=="Kampong Reab" value="1691"
                                                    data-value="kampong-reab" data-chained="prey-kabbas"
                                                    class="prey-kabbas">Kampong Reab</option>
                                                <option data-en-title=="Svay Chuk" value="412" data-value="svay-chuk"
                                                    data-chained="sameakki-mean-chey" class="sameakki-mean-chey">Svay
                                                    Chuk</option>
                                                <option data-en-title=="Angk Romeas" value="668"
                                                    data-value="angk-romeas" data-chained="dang-tong" class="dang-tong">
                                                    Angk Romeas</option>
                                                <option data-en-title=="Bos Leav" value="924" data-value="bos-leav"
                                                    data-chained="chitr-borie" class="chitr-borie">Bos Leav</option>
                                                <option data-en-title=="Kaoh Roka" value="1180" data-value="kaoh-roka"
                                                    data-chained="peam-chor" class="peam-chor">Kaoh Roka</option>
                                                <option data-en-title=="Sla Kram" value="1436" data-value="sla-kram"
                                                    data-chained="krong-siem-reab" class="krong-siem-reab">Sla Kram
                                                </option>
                                                <option data-en-title=="Kdanh" value="1692" data-value="kdanh"
                                                    data-chained="prey-kabbas" class="prey-kabbas">Kdanh</option>
                                                <option data-en-title=="Preaek Norint" value="157"
                                                    data-value="preaek-norint" data-chained="aek-phnum"
                                                    class="aek-phnum">Preaek Norint</option>
                                                <option data-en-title=="Tbaeng Khpos" value="413"
                                                    data-value="tbaeng-khpos" data-chained="sameakki-mean-chey"
                                                    class="sameakki-mean-chey">Tbaeng Khpos</option>
                                                <option data-en-title=="L'ang" value="669" data-value="lang"
                                                    data-chained="dang-tong" class="dang-tong">L'ang</option>
                                                <option data-en-title=="Changkrang" value="925" data-value="changkrang"
                                                    data-chained="chitr-borie" class="chitr-borie">Changkrang</option>
                                                <option data-en-title=="Kaoh Sampov" value="1181"
                                                    data-value="kaoh-sampov" data-chained="peam-chor" class="peam-chor">
                                                    Kaoh Sampov</option>
                                                <option data-en-title=="Svay Dangkum" value="1437"
                                                    data-value="svay-dangkum" data-chained="krong-siem-reab"
                                                    class="krong-siem-reab">Svay Dangkum</option>
                                                <option data-en-title=="Pou Rumchak" value="1693"
                                                    data-value="pou-rumchak" data-chained="prey-kabbas"
                                                    class="prey-kabbas">Pou Rumchak</option>
                                                <option data-en-title=="Samraong Knong" value="158"
                                                    data-value="samraong-knong" data-chained="aek-phnum"
                                                    class="aek-phnum">Samraong Knong</option>
                                                <option data-en-title=="Thlok Vien" value="414" data-value="thlok-vien"
                                                    data-chained="sameakki-mean-chey" class="sameakki-mean-chey">Thlok
                                                    Vien</option>
                                                <option data-en-title=="Dar" value="926" data-value="dar"
                                                    data-chained="chitr-borie" class="chitr-borie">Dar</option>
                                                <option data-en-title=="Krang Ta Yang" value="1182"
                                                    data-value="krang-ta-yang" data-chained="peam-chor"
                                                    class="peam-chor">Krang Ta Yang</option>
                                                <option data-en-title=="Kouk Chak" value="1438" data-value="kouk-chak"
                                                    data-chained="krong-siem-reab" class="krong-siem-reab">Kouk Chak
                                                </option>
                                                <option data-en-title=="Prey Kabbas" value="1694"
                                                    data-value="prey-kabbas" data-chained="prey-kabbas"
                                                    class="prey-kabbas">Prey Kabbas</option>
                                                <option data-en-title=="Preaek Khpob" value="159"
                                                    data-value="preaek-khpob" data-chained="aek-phnum"
                                                    class="aek-phnum">Preaek Khpob</option>
                                                <option data-en-title=="Boeng Sala Khang Cheung" value="671"
                                                    data-value="boeng-sala-khang-cheung" data-chained="kampong-trach"
                                                    class="kampong-trach">Boeng Sala Khang Cheung</option>
                                                <option data-en-title=="Kantuot" value="927" data-value="kantuot"
                                                    data-chained="chitr-borie" class="chitr-borie">Kantuot</option>
                                                <option data-en-title=="Preaek Krabau" value="1183"
                                                    data-value="preaek-krabau" data-chained="peam-chor"
                                                    class="peam-chor">Preaek Krabau</option>
                                                <option data-en-title=="Sala Kamraeuk" value="1439"
                                                    data-value="sala-kamraeuk" data-chained="krong-siem-reab"
                                                    class="krong-siem-reab">Sala Kamraeuk</option>
                                                <option data-en-title=="Prey Lvea" value="1695" data-value="prey-lvea"
                                                    data-chained="prey-kabbas" class="prey-kabbas">Prey Lvea</option>
                                                <option data-en-title=="Preaek Luong" value="160"
                                                    data-value="preaek-luong" data-chained="aek-phnum"
                                                    class="aek-phnum">Preaek Luong</option>
                                                <option data-en-title=="Akphivoadth" value="416"
                                                    data-value="akphivoadth" data-chained="tuek-phos" class="tuek-phos">
                                                    Akphivoadth</option>
                                                <option data-en-title=="Boeng Sala Khang Tboung" value="672"
                                                    data-value="boeng-sala-khang-tboung" data-chained="kampong-trach"
                                                    class="kampong-trach">Boeng Sala Khang Tboung</option>
                                                <option data-en-title=="Kou Loab" value="928" data-value="kou-loab"
                                                    data-chained="chitr-borie" class="chitr-borie">Kou Loab</option>
                                                <option data-en-title=="Preaek Sambuor" value="1184"
                                                    data-value="preaek-sambuor" data-chained="peam-chor"
                                                    class="peam-chor">Preaek Sambuor</option>
                                                <option data-en-title=="Nokor Thum" value="1440" data-value="nokor-thum"
                                                    data-chained="krong-siem-reab" class="krong-siem-reab">Nokor Thum
                                                </option>
                                                <option data-en-title=="Prey Phdau" value="1696" data-value="prey-phdau"
                                                    data-chained="prey-kabbas" class="prey-kabbas">Prey Phdau</option>
                                                <option data-en-title=="Peam Aek" value="161" data-value="peam-aek"
                                                    data-chained="aek-phnum" class="aek-phnum">Peam Aek</option>
                                                <option data-en-title=="Chieb" value="417" data-value="chieb"
                                                    data-chained="tuek-phos" class="tuek-phos">Chieb</option>
                                                <option data-en-title=="Damnak Kantuot Khang Cheung" value="673"
                                                    data-value="damnak-kantuot-khang-cheung"
                                                    data-chained="kampong-trach" class="kampong-trach">Damnak Kantuot
                                                    Khang Cheung</option>
                                                <option data-en-title=="Kaoh Chraeng" value="929"
                                                    data-value="kaoh-chraeng" data-chained="chitr-borie"
                                                    class="chitr-borie">Kaoh Chraeng</option>
                                                <option data-en-title=="Ruessei Srok" value="1185"
                                                    data-value="ruessei-srok" data-chained="peam-chor"
                                                    class="peam-chor">Ruessei Srok</option>
                                                <option data-en-title=="Chreav" value="1441" data-value="chreav"
                                                    data-chained="krong-siem-reab" class="krong-siem-reab">Chreav
                                                </option>
                                                <option data-en-title=="Snao" value="1697" data-value="snao"
                                                    data-chained="prey-kabbas" class="prey-kabbas">Snao</option>
                                                <option data-en-title=="Prey Chas" value="162" data-value="prey-chas"
                                                    data-chained="aek-phnum" class="aek-phnum">Prey Chas</option>
                                                <option data-en-title=="Chaong Maong" value="418"
                                                    data-value="chaong-maong" data-chained="tuek-phos"
                                                    class="tuek-phos">Chaong Maong</option>
                                                <option data-en-title=="Damnak Kantuot Khang Tboung" value="674"
                                                    data-value="damnak-kantuot-khang-tboung"
                                                    data-chained="kampong-trach" class="kampong-trach">Damnak Kantuot
                                                    Khang Tboung</option>
                                                <option data-en-title=="Sambok" value="930" data-value="sambok"
                                                    data-chained="chitr-borie" class="chitr-borie">Sambok</option>
                                                <option data-en-title=="Svay Phluoh" value="1186"
                                                    data-value="svay-phluoh" data-chained="peam-chor" class="peam-chor">
                                                    Svay Phluoh</option>
                                                <option data-en-title=="Chong Knies" value="1442"
                                                    data-value="chong-knies" data-chained="krong-siem-reab"
                                                    class="krong-siem-reab">Chong Knies</option>
                                                <option data-en-title=="Tang Yab" value="1698" data-value="tang-yab"
                                                    data-chained="prey-kabbas" class="prey-kabbas">Tang Yab</option>
                                                <option data-en-title=="Kaoh Chiveang" value="163"
                                                    data-value="kaoh-chiveang" data-chained="aek-phnum"
                                                    class="aek-phnum">Kaoh Chiveang</option>
                                                <option data-en-title=="Kbal Tuek" value="419" data-value="kbal-tuek"
                                                    data-chained="tuek-phos" class="tuek-phos">Kbal Tuek</option>
                                                <option data-en-title=="Kampong Trach Khang Kaeut" value="675"
                                                    data-value="kampong-trach-khang-kaeut" data-chained="kampong-trach"
                                                    class="kampong-trach">Kampong Trach Khang Kaeut</option>
                                                <option data-en-title=="Thma Andaeuk" value="931"
                                                    data-value="thma-andaeuk" data-chained="chitr-borie"
                                                    class="chitr-borie">Thma Andaeuk</option>
                                                <option data-en-title=="Sambuor" value="1443" data-value="sambuor"
                                                    data-chained="krong-siem-reab" class="krong-siem-reab">Sambuor
                                                </option>
                                                <option data-en-title=="Khlong Popok" value="420"
                                                    data-value="khlong-popok" data-chained="tuek-phos"
                                                    class="tuek-phos">Khlong Popok</option>
                                                <option data-en-title=="Kampong Trach Khang Lech" value="676"
                                                    data-value="kampong-trach-khang-lech" data-chained="kampong-trach"
                                                    class="kampong-trach">Kampong Trach Khang Lech</option>
                                                <option data-en-title=="Thma Kreae" value="932" data-value="thma-kreae"
                                                    data-chained="chitr-borie" class="chitr-borie">Thma Kreae</option>
                                                <option data-en-title=="Ba Baong" value="1188" data-value="ba-baong"
                                                    data-chained="peam-ro" class="peam-ro">Ba Baong</option>
                                                <option data-en-title=="Siem Reab" value="1444" data-value="siem-reab"
                                                    data-chained="krong-siem-reab" class="krong-siem-reab">Siem Reab
                                                </option>
                                                <option data-en-title=="Boeng Tranh Khang Cheung" value="1700"
                                                    data-value="boeng-tranh-khang-cheung" data-chained="samraong"
                                                    class="samraong">Boeng Tranh Khang Cheung</option>
                                                <option data-en-title=="Moung" value="165" data-value="moung"
                                                    data-chained="moung-ruessei" class="moung-ruessei">Moung</option>
                                                <option data-en-title=="Krang Skear" value="421"
                                                    data-value="krang-skear" data-chained="tuek-phos" class="tuek-phos">
                                                    Krang Skear</option>
                                                <option data-en-title=="Kanthaor Khang Cheung" value="677"
                                                    data-value="kanthaor-khang-cheung" data-chained="kampong-trach"
                                                    class="kampong-trach">Kanthaor Khang Cheung</option>
                                                <option data-en-title=="Thmei" value="933" data-value="thmei"
                                                    data-chained="chitr-borie" class="chitr-borie">Thmei</option>
                                                <option data-en-title=="Banlich Prasat" value="1189"
                                                    data-value="banlich-prasat" data-chained="peam-ro" class="peam-ro">
                                                    Banlich Prasat</option>
                                                <option data-en-title=="Srangae" value="1445" data-value="srangae"
                                                    data-chained="krong-siem-reab" class="krong-siem-reab">Srangae
                                                </option>
                                                <option data-en-title=="Boeng Tranh Khang Tboung" value="1701"
                                                    data-value="boeng-tranh-khang-tboung" data-chained="samraong"
                                                    class="samraong">Boeng Tranh Khang Tboung</option>
                                                <option data-en-title=="Kear" value="166" data-value="kear"
                                                    data-chained="moung-ruessei" class="moung-ruessei">Kear</option>
                                                <option data-en-title=="Tang Krasang" value="422"
                                                    data-value="tang-krasang" data-chained="tuek-phos"
                                                    class="tuek-phos">Tang Krasang</option>
                                                <option data-en-title=="Kanthaor Khang kaeut" value="678"
                                                    data-value="kanthaor-khang-kaeut" data-chained="kampong-trach"
                                                    class="kampong-trach">Kanthaor Khang kaeut</option>
                                                <option data-en-title=="Neak Loeang" value="1190"
                                                    data-value="neak-loeang" data-chained="peam-ro" class="peam-ro">Neak
                                                    Loeang</option>
                                                <option data-en-title=="Ampil" value="1446" data-value="ampil"
                                                    data-chained="krong-siem-reab" class="krong-siem-reab">Ampil
                                                </option>
                                                <option data-en-title=="Cheung Kuon" value="1702"
                                                    data-value="cheung-kuon" data-chained="samraong" class="samraong">
                                                    Cheung Kuon</option>
                                                <option data-en-title=="Prey Svay" value="167" data-value="prey-svay"
                                                    data-chained="moung-ruessei" class="moung-ruessei">Prey Svay
                                                </option>
                                                <option data-en-title=="Tuol Khpos" value="423" data-value="tuol-khpos"
                                                    data-chained="tuek-phos" class="tuek-phos">Tuol Khpos</option>
                                                <option data-en-title=="Kanthaor Khang Lech" value="679"
                                                    data-value="kanthaor-khang-lech" data-chained="kampong-trach"
                                                    class="kampong-trach">Kanthaor Khang Lech</option>
                                                <option data-en-title=="Chong Phlah" value="935"
                                                    data-value="chong-phlah" data-chained="kaev-seima"
                                                    class="kaev-seima">Chong Phlah</option>
                                                <option data-en-title=="Peam Mean Chey" value="1191"
                                                    data-value="peam-mean-chey" data-chained="peam-ro" class="peam-ro">
                                                    Peam Mean Chey</option>
                                                <option data-en-title=="Krabei Riel" value="1447"
                                                    data-value="krabei-riel" data-chained="krong-siem-reab"
                                                    class="krong-siem-reab">Krabei Riel</option>
                                                <option data-en-title=="Chumreah Pen" value="1703"
                                                    data-value="chumreah-pen" data-chained="samraong" class="samraong">
                                                    Chumreah Pen</option>
                                                <option data-en-title=="Ruessei Krang" value="168"
                                                    data-value="ruessei-krang" data-chained="moung-ruessei"
                                                    class="moung-ruessei">Ruessei Krang</option>
                                                <option data-en-title=="Preaek Kroes" value="680"
                                                    data-value="preaek-kroes" data-chained="kampong-trach"
                                                    class="kampong-trach">Preaek Kroes</option>
                                                <option data-en-title=="Me Mang" value="936" data-value="me-mang"
                                                    data-chained="kaev-seima" class="kaev-seima">Me Mang</option>
                                                <option data-en-title=="Peam Ro" value="1192" data-value="peam-ro"
                                                    data-chained="peam-ro" class="peam-ro">Peam Ro</option>
                                                <option data-en-title=="Tuek Vil" value="1448" data-value="tuek-vil"
                                                    data-chained="krong-siem-reab" class="krong-siem-reab">Tuek Vil
                                                </option>
                                                <option data-en-title=="Khvav" value="1704" data-value="khvav"
                                                    data-chained="samraong" class="samraong">Khvav</option>
                                                <option data-en-title=="Chrey" value="169" data-value="chrey"
                                                    data-chained="moung-ruessei" class="moung-ruessei">Chrey</option>
                                                <option data-en-title=="Basedth" value="425" data-value="basedth"
                                                    data-chained="basedth" class="basedth">Basedth</option>
                                                <option data-en-title=="Ruessei Srok Khang Kaeut" value="681"
                                                    data-value="ruessei-srok-khang-kaeut" data-chained="kampong-trach"
                                                    class="kampong-trach">Ruessei Srok Khang Kaeut</option>
                                                <option data-en-title=="Srae Chhuk" value="937" data-value="srae-chhuk"
                                                    data-chained="kaev-seima" class="kaev-seima">Srae Chhuk</option>
                                                <option data-en-title=="Preaek Khsay Ka" value="1193"
                                                    data-value="preaek-khsay-ka" data-chained="peam-ro" class="peam-ro">
                                                    Preaek Khsay Ka</option>
                                                <option data-en-title=="Lumchang" value="1705" data-value="lumchang"
                                                    data-chained="samraong" class="samraong">Lumchang</option>
                                                <option data-en-title=="Ta Loas" value="170" data-value="ta-loas"
                                                    data-chained="moung-ruessei" class="moung-ruessei">Ta Loas</option>
                                                <option data-en-title=="Kat Phluk" value="426" data-value="kat-phluk"
                                                    data-chained="basedth" class="basedth">Kat Phluk</option>
                                                <option data-en-title=="Ruessei Srok Khang Lech" value="682"
                                                    data-value="ruessei-srok-khang-lech" data-chained="kampong-trach"
                                                    class="kampong-trach">Ruessei Srok Khang Lech</option>
                                                <option data-en-title=="Srae Khtum" value="938" data-value="srae-khtum"
                                                    data-chained="kaev-seima" class="kaev-seima">Srae Khtum</option>
                                                <option data-en-title=="Preaek Khsay Kha" value="1194"
                                                    data-value="preaek-khsay-kha" data-chained="peam-ro"
                                                    class="peam-ro">Preaek Khsay Kha</option>
                                                <option data-en-title=="Chan Sar" value="1450" data-value="chan-sar"
                                                    data-chained="soutr-nikom" class="soutr-nikom">Chan Sar</option>
                                                <option data-en-title=="Rovieng" value="1706" data-value="rovieng"
                                                    data-chained="samraong" class="samraong">Rovieng</option>
                                                <option data-en-title=="Kakaoh" value="171" data-value="kakaoh"
                                                    data-chained="moung-ruessei" class="moung-ruessei">Kakaoh</option>
                                                <option data-en-title=="Nitean" value="427" data-value="nitean"
                                                    data-chained="basedth" class="basedth">Nitean</option>
                                                <option data-en-title=="Svay Tong Khang Cheung" value="683"
                                                    data-value="svay-tong-khang-cheung" data-chained="kampong-trach"
                                                    class="kampong-trach">Svay Tong Khang Cheung</option>
                                                <option data-en-title=="Srae Preah" value="939" data-value="srae-preah"
                                                    data-chained="kaev-seima" class="kaev-seima">Srae Preah</option>
                                                <option data-en-title=="Prey Kandieng" value="1195"
                                                    data-value="prey-kandieng" data-chained="peam-ro" class="peam-ro">
                                                    Prey Kandieng</option>
                                                <option data-en-title=="Dam Daek" value="1451" data-value="dam-daek"
                                                    data-chained="soutr-nikom" class="soutr-nikom">Dam Daek</option>
                                                <option data-en-title=="Samraong" value="1707" data-value="samraong"
                                                    data-chained="samraong" class="samraong">Samraong</option>
                                                <option data-en-title=="Prey Touch" value="172" data-value="prey-touch"
                                                    data-chained="moung-ruessei" class="moung-ruessei">Prey Touch
                                                </option>
                                                <option data-en-title=="Pheakdei" value="428" data-value="pheakdei"
                                                    data-chained="basedth" class="basedth">Pheakdei</option>
                                                <option data-en-title=="Svay Tong Khang Tboung" value="684"
                                                    data-value="svay-tong-khang-tboung" data-chained="kampong-trach"
                                                    class="kampong-trach">Svay Tong Khang Tboung</option>
                                                <option data-en-title=="Dan Run" value="1452" data-value="dan-run"
                                                    data-chained="soutr-nikom" class="soutr-nikom">Dan Run</option>
                                                <option data-en-title=="Soeng" value="1708" data-value="soeng"
                                                    data-chained="samraong" class="samraong">Soeng</option>
                                                <option data-en-title=="Robas Mongkol" value="173"
                                                    data-value="robas-mongkol" data-chained="moung-ruessei"
                                                    class="moung-ruessei">Robas Mongkol</option>
                                                <option data-en-title=="Pheari Mean Chey" value="429"
                                                    data-value="pheari-mean-chey" data-chained="basedth"
                                                    class="basedth">Pheari Mean Chey</option>
                                                <option data-en-title=="Nang Khi Loek" value="941"
                                                    data-value="nang-khi-loek" data-chained="kaoh-nheaek"
                                                    class="kaoh-nheaek">Nang Khi Loek</option>
                                                <option data-en-title=="Kampong Popil" value="1197"
                                                    data-value="kampong-popil" data-chained="pea-reang"
                                                    class="pea-reang">Kampong Popil</option>
                                                <option data-en-title=="Kampong Khleang" value="1453"
                                                    data-value="kampong-khleang" data-chained="soutr-nikom"
                                                    class="soutr-nikom">Kampong Khleang</option>
                                                <option data-en-title=="Sla" value="1709" data-value="sla"
                                                    data-chained="samraong" class="samraong">Sla</option>
                                                <option data-en-title=="Phong" value="430" data-value="phong"
                                                    data-chained="basedth" class="basedth">Phong</option>
                                                <option data-en-title=="Boeng Tuk" value="686" data-value="boeng-tuk"
                                                    data-chained="tuek-chhou" class="tuek-chhou">Boeng Tuk</option>
                                                <option data-en-title=="Ou Buon Leu" value="942"
                                                    data-value="ou-buon-leu" data-chained="kaoh-nheaek"
                                                    class="kaoh-nheaek">Ou Buon Leu</option>
                                                <option data-en-title=="Kanhcham" value="1198" data-value="kanhcham"
                                                    data-chained="pea-reang" class="pea-reang">Kanhcham</option>
                                                <option data-en-title=="Kien Sangkae" value="1454"
                                                    data-value="kien-sangkae" data-chained="soutr-nikom"
                                                    class="soutr-nikom">Kien Sangkae</option>
                                                <option data-en-title=="Trea" value="1710" data-value="trea"
                                                    data-chained="samraong" class="samraong">Trea</option>
                                                <option data-en-title=="Sdau" value="175" data-value="sdau"
                                                    data-chained="rotonak-mondol" class="rotonak-mondol">Sdau</option>
                                                <option data-en-title=="Pou Angkrang" value="431"
                                                    data-value="pou-angkrang" data-chained="basedth" class="basedth">Pou
                                                    Angkrang</option>
                                                <option data-en-title=="Chum Kriel" value="687" data-value="chum-kriel"
                                                    data-chained="tuek-chhou" class="tuek-chhou">Chum Kriel</option>
                                                <option data-en-title=="Roya" value="943" data-value="roya"
                                                    data-chained="kaoh-nheaek" class="kaoh-nheaek">Roya</option>
                                                <option data-en-title=="Kampong Prang" value="1199"
                                                    data-value="kampong-prang" data-chained="pea-reang"
                                                    class="pea-reang">Kampong Prang</option>
                                                <option data-en-title=="Khchas" value="1455" data-value="khchas"
                                                    data-chained="soutr-nikom" class="soutr-nikom">Khchas</option>
                                                <option data-en-title=="Andaeuk Haeb" value="176"
                                                    data-value="andaeuk-haeb" data-chained="rotonak-mondol"
                                                    class="rotonak-mondol">Andaeuk Haeb</option>
                                                <option data-en-title=="Pou Chamraeun" value="432"
                                                    data-value="pou-chamraeun" data-chained="basedth" class="basedth">
                                                    Pou Chamraeun</option>
                                                <option data-en-title=="Kampong Kraeng" value="688"
                                                    data-value="kampong-kraeng" data-chained="tuek-chhou"
                                                    class="tuek-chhou">Kampong Kraeng</option>
                                                <option data-en-title=="Sokh Sant" value="944" data-value="sokh-sant"
                                                    data-chained="kaoh-nheaek" class="kaoh-nheaek">Sokh Sant</option>
                                                <option data-en-title=="Kampong Ruessei" value="1200"
                                                    data-value="kampong-ruessei" data-chained="pea-reang"
                                                    class="pea-reang">Kampong Ruessei</option>
                                                <option data-en-title=="Khnar Pou" value="1456" data-value="khnar-pou"
                                                    data-chained="soutr-nikom" class="soutr-nikom">Khnar Pou</option>
                                                <option data-en-title=="Baray" value="1712" data-value="baray"
                                                    data-chained="krong-doun-kaev" class="krong-doun-kaev">Baray
                                                </option>
                                                <option data-en-title=="Phlov Meas" value="177" data-value="phlov-meas"
                                                    data-chained="rotonak-mondol" class="rotonak-mondol">Phlov Meas
                                                </option>
                                                <option data-en-title=="Pou Mreal" value="433" data-value="pou-mreal"
                                                    data-chained="basedth" class="basedth">Pou Mreal</option>
                                                <option data-en-title=="Kampong Samraong" value="689"
                                                    data-value="kampong-samraong" data-chained="tuek-chhou"
                                                    class="tuek-chhou">Kampong Samraong</option>
                                                <option data-en-title=="Srae Huy" value="945" data-value="srae-huy"
                                                    data-chained="kaoh-nheaek" class="kaoh-nheaek">Srae Huy</option>
                                                <option data-en-title=="Mesa Prachan" value="1201"
                                                    data-value="mesa-prachan" data-chained="pea-reang"
                                                    class="pea-reang">Mesa Prachan</option>
                                                <option data-en-title=="Popel" value="1457" data-value="popel"
                                                    data-chained="soutr-nikom" class="soutr-nikom">Popel</option>
                                                <option data-en-title=="Roka Knong" value="1713" data-value="roka-knong"
                                                    data-chained="krong-doun-kaev" class="krong-doun-kaev">Roka Knong
                                                </option>
                                                <option data-en-title=="Traeng" value="178" data-value="traeng"
                                                    data-chained="rotonak-mondol" class="rotonak-mondol">Traeng</option>
                                                <option data-en-title=="Svay Chacheb" value="434"
                                                    data-value="svay-chacheb" data-chained="basedth" class="basedth">
                                                    Svay Chacheb</option>
                                                <option data-en-title=="Kandal" value="690" data-value="kandal"
                                                    data-chained="tuek-chhou" class="tuek-chhou">Kandal</option>
                                                <option data-en-title=="Srae Sangkom" value="946"
                                                    data-value="srae-sangkom" data-chained="kaoh-nheaek"
                                                    class="kaoh-nheaek">Srae Sangkom</option>
                                                <option data-en-title=="Preaek Ta Sar" value="1202"
                                                    data-value="preaek-ta-sar" data-chained="pea-reang"
                                                    class="pea-reang">Preaek Ta Sar</option>
                                                <option data-en-title=="Samraong" value="1458" data-value="samraong"
                                                    data-chained="soutr-nikom" class="soutr-nikom">Samraong</option>
                                                <option data-en-title=="Roka Krau" value="1714" data-value="roka-krau"
                                                    data-chained="krong-doun-kaev" class="krong-doun-kaev">Roka Krau
                                                </option>
                                                <option data-en-title=="Tuol Ampil" value="435" data-value="tuol-ampil"
                                                    data-chained="basedth" class="basedth">Tuol Ampil</option>
                                                <option data-en-title=="Kaoh Touch" value="691" data-value="kaoh-touch"
                                                    data-chained="tuek-chhou" class="tuek-chhou">Kaoh Touch</option>
                                                <option data-en-title=="Prey Pnov" value="1203" data-value="prey-pnov"
                                                    data-chained="pea-reang" class="pea-reang">Prey Pnov</option>
                                                <option data-en-title=="Ta Yaek" value="1459" data-value="ta-yaek"
                                                    data-chained="soutr-nikom" class="soutr-nikom">Ta Yaek</option>
                                                <option data-en-title=="Anlong Vil" value="180" data-value="anlong-vil"
                                                    data-chained="sangkae" class="sangkae">Anlong Vil</option>
                                                <option data-en-title=="Tuol Sala" value="436" data-value="tuol-sala"
                                                    data-chained="basedth" class="basedth">Tuol Sala</option>
                                                <option data-en-title=="Koun Satv" value="692" data-value="koun-satv"
                                                    data-chained="tuek-chhou" class="tuek-chhou">Koun Satv</option>
                                                <option data-en-title=="Dak Dam" value="948" data-value="dak-dam"
                                                    data-chained="ou-reang" class="ou-reang">Dak Dam</option>
                                                <option data-en-title=="Prey Sniet" value="1204" data-value="prey-sniet"
                                                    data-chained="pea-reang" class="pea-reang">Prey Sniet</option>
                                                <option data-en-title=="Angk Ta Saom" value="1716"
                                                    data-value="angk-ta-saom" data-chained="tram-kak" class="tram-kak">
                                                    Angk Ta Saom</option>
                                                <option data-en-title=="Norea" value="181" data-value="norea"
                                                    data-chained="sangkae" class="sangkae">Norea</option>
                                                <option data-en-title=="Kak" value="437" data-value="kak"
                                                    data-chained="basedth" class="basedth">Kak</option>
                                                <option data-en-title=="Meakprang" value="693" data-value="meakprang"
                                                    data-chained="tuek-chhou" class="tuek-chhou">Meakprang</option>
                                                <option data-en-title=="Saen Monourom" value="949"
                                                    data-value="saen-monourom" data-chained="ou-reang" class="ou-reang">
                                                    Saen Monourom</option>
                                                <option data-en-title=="Prey Sralet" value="1205"
                                                    data-value="prey-sralet" data-chained="pea-reang" class="pea-reang">
                                                    Prey Sralet</option>
                                                <option data-en-title=="Chrouy Neang Nguon" value="1461"
                                                    data-value="chrouy-neang-nguon" data-chained="srei-snam"
                                                    class="srei-snam">Chrouy Neang Nguon</option>
                                                <option data-en-title=="Cheang Tong" value="1717"
                                                    data-value="cheang-tong" data-chained="tram-kak" class="tram-kak">
                                                    Cheang Tong</option>
                                                <option data-en-title=="Ta Pon" value="182" data-value="ta-pon"
                                                    data-chained="sangkae" class="sangkae">Ta Pon</option>
                                                <option data-en-title=="Svay Rumpea" value="438"
                                                    data-value="svay-rumpea" data-chained="basedth" class="basedth">Svay
                                                    Rumpea</option>
                                                <option data-en-title=="Preaek Tnaot" value="694"
                                                    data-value="preaek-tnaot" data-chained="tuek-chhou"
                                                    class="tuek-chhou">Preaek Tnaot</option>
                                                <option data-en-title=="Reab" value="1206" data-value="reab"
                                                    data-chained="pea-reang" class="pea-reang">Reab</option>
                                                <option data-en-title=="Klang Hay" value="1462" data-value="klang-hay"
                                                    data-chained="srei-snam" class="srei-snam">Klang Hay</option>
                                                <option data-en-title=="Kus" value="1718" data-value="kus"
                                                    data-chained="tram-kak" class="tram-kak">Kus</option>
                                                <option data-en-title=="Roka" value="183" data-value="roka"
                                                    data-chained="sangkae" class="sangkae">Roka</option>
                                                <option data-en-title=="Preah Khae" value="439" data-value="preah-khae"
                                                    data-chained="basedth" class="basedth">Preah Khae</option>
                                                <option data-en-title=="Prey Khmum" value="695" data-value="prey-khmum"
                                                    data-chained="tuek-chhou" class="tuek-chhou">Prey Khmum</option>
                                                <option data-en-title=="Krang Teh" value="951" data-value="krang-teh"
                                                    data-chained="pech-chreada" class="pech-chreada">Krang Teh</option>
                                                <option data-en-title=="Roka" value="1207" data-value="roka"
                                                    data-chained="pea-reang" class="pea-reang">Roka</option>
                                                <option data-en-title=="Tram Sasar" value="1463" data-value="tram-sasar"
                                                    data-chained="srei-snam" class="srei-snam">Tram Sasar</option>
                                                <option data-en-title=="Leay Bour" value="1719" data-value="leay-bour"
                                                    data-chained="tram-kak" class="tram-kak">Leay Bour</option>
                                                <option data-en-title=="Kampong Preah" value="184"
                                                    data-value="kampong-preah" data-chained="sangkae" class="sangkae">
                                                    Kampong Preah</option>
                                                <option data-en-title=="Prey Thnang" value="696"
                                                    data-value="prey-thnang" data-chained="tuek-chhou"
                                                    class="tuek-chhou">Prey Thnang</option>
                                                <option data-en-title=="Bu Chri" value="952" data-value="bu-chri"
                                                    data-chained="pech-chreada" class="pech-chreada">Bu Chri</option>
                                                <option data-en-title=="Moung" value="1464" data-value="moung"
                                                    data-chained="srei-snam" class="srei-snam">Moung</option>
                                                <option data-en-title=="Nhaeng Nhang" value="1720"
                                                    data-value="nhaeng-nhang" data-chained="tram-kak" class="tram-kak">
                                                    Nhaeng Nhang</option>
                                                <option data-en-title=="Kampong Pring" value="185"
                                                    data-value="kampong-pring" data-chained="sangkae" class="sangkae">
                                                    Kampong Pring</option>
                                                <option data-en-title=="Chbar Mon" value="441" data-value="chbar-mon"
                                                    data-chained="krong-chbar-mon" class="krong-chbar-mon">Chbar Mon
                                                </option>
                                                <option data-en-title=="Stueng Kaev" value="697"
                                                    data-value="stueng-kaev" data-chained="tuek-chhou"
                                                    class="tuek-chhou">Stueng Kaev</option>
                                                <option data-en-title=="Srae Ampum" value="953" data-value="srae-ampum"
                                                    data-chained="pech-chreada" class="pech-chreada">Srae Ampum</option>
                                                <option data-en-title=="Angkor Reach" value="1209"
                                                    data-value="angkor-reach" data-chained="preah-sdach"
                                                    class="preah-sdach">Angkor Reach</option>
                                                <option data-en-title=="Prei" value="1465" data-value="prei"
                                                    data-chained="srei-snam" class="srei-snam">Prei</option>
                                                <option data-en-title=="Ou Saray" value="1721" data-value="ou-saray"
                                                    data-chained="tram-kak" class="tram-kak">Ou Saray</option>
                                                <option data-en-title=="Reang Kesei" value="186"
                                                    data-value="reang-kesei" data-chained="sangkae" class="sangkae">
                                                    Reang Kesei</option>
                                                <option data-en-title=="Kandaol Dom" value="442"
                                                    data-value="kandaol-dom" data-chained="krong-chbar-mon"
                                                    class="krong-chbar-mon">Kandaol Dom</option>
                                                <option data-en-title=="Thmei" value="698" data-value="thmei"
                                                    data-chained="tuek-chhou" class="tuek-chhou">Thmei</option>
                                                <option data-en-title=="Bu Sra" value="954" data-value="bu-sra"
                                                    data-chained="pech-chreada" class="pech-chreada">Bu Sra</option>
                                                <option data-en-title=="Banteay Chakrei" value="1210"
                                                    data-value="banteay-chakrei" data-chained="preah-sdach"
                                                    class="preah-sdach">Banteay Chakrei</option>
                                                <option data-en-title=="Slaeng Spean" value="1466"
                                                    data-value="slaeng-spean" data-chained="srei-snam"
                                                    class="srei-snam">Slaeng Spean</option>
                                                <option data-en-title=="Trapeang Kranhung" value="1722"
                                                    data-value="trapeang-kranhung" data-chained="tram-kak"
                                                    class="tram-kak">Trapeang Kranhung</option>
                                                <option data-en-title=="Ou Dambang Muoy" value="187"
                                                    data-value="ou-dambang-muoy" data-chained="sangkae" class="sangkae">
                                                    Ou Dambang Muoy</option>
                                                <option data-en-title=="Roka Thum" value="443" data-value="roka-thum"
                                                    data-chained="krong-chbar-mon" class="krong-chbar-mon">Roka Thum
                                                </option>
                                                <option data-en-title=="Trapeang Pring" value="699"
                                                    data-value="trapeang-pring" data-chained="tuek-chhou"
                                                    class="tuek-chhou">Trapeang Pring</option>
                                                <option data-en-title=="Boeng Daol" value="1211" data-value="boeng-daol"
                                                    data-chained="preah-sdach" class="preah-sdach">Boeng Daol</option>
                                                <option data-en-title=="Otdam Souriya" value="1723"
                                                    data-value="otdam-souriya" data-chained="tram-kak" class="tram-kak">
                                                    Otdam Souriya</option>
                                                <option data-en-title=="Ou Dambang Pir" value="188"
                                                    data-value="ou-dambang-pir" data-chained="sangkae" class="sangkae">
                                                    Ou Dambang Pir</option>
                                                <option data-en-title=="Sopoar Tep" value="444" data-value="sopoar-tep"
                                                    data-chained="krong-chbar-mon" class="krong-chbar-mon">Sopoar Tep
                                                </option>
                                                <option data-en-title=="Trapeang Sangkae" value="700"
                                                    data-value="trapeang-sangkae" data-chained="tuek-chhou"
                                                    class="tuek-chhou">Trapeang Sangkae</option>
                                                <option data-en-title=="Monourom" value="956" data-value="monourom"
                                                    data-chained="krong-saen-monourom" class="krong-saen-monourom">
                                                    Monourom</option>
                                                <option data-en-title=="Chey Kampok" value="1212"
                                                    data-value="chey-kampok" data-chained="preah-sdach"
                                                    class="preah-sdach">Chey Kampok</option>
                                                <option data-en-title=="Boeng Mealea" value="1468"
                                                    data-value="boeng-mealea" data-chained="svay-leu" class="svay-leu">
                                                    Boeng Mealea</option>
                                                <option data-en-title=="Popel" value="1724" data-value="popel"
                                                    data-chained="tram-kak" class="tram-kak">Popel</option>
                                                <option data-en-title=="Voat Ta Muem" value="189"
                                                    data-value="voat-ta-muem" data-chained="sangkae" class="sangkae">
                                                    Voat Ta Muem</option>
                                                <option data-en-title=="Svay Kravan" value="445"
                                                    data-value="svay-kravan" data-chained="krong-chbar-mon"
                                                    class="krong-chbar-mon">Svay Kravan</option>
                                                <option data-en-title=="Trapeang Thum" value="701"
                                                    data-value="trapeang-thum" data-chained="tuek-chhou"
                                                    class="tuek-chhou">Trapeang Thum</option>
                                                <option data-en-title=="Sokh Dom" value="957" data-value="sokh-dom"
                                                    data-chained="krong-saen-monourom" class="krong-saen-monourom">Sokh
                                                    Dom</option>
                                                <option data-en-title=="Kampong Soeng" value="1213"
                                                    data-value="kampong-soeng" data-chained="preah-sdach"
                                                    class="preah-sdach">Kampong Soeng</option>
                                                <option data-en-title=="Kantuot" value="1469" data-value="kantuot"
                                                    data-chained="svay-leu" class="svay-leu">Kantuot</option>
                                                <option data-en-title=="Samraong" value="1725" data-value="samraong"
                                                    data-chained="tram-kak" class="tram-kak">Samraong</option>
                                                <option data-en-title=="Spean Mean Chey" value="958"
                                                    data-value="spean-mean-chey" data-chained="krong-saen-monourom"
                                                    class="krong-saen-monourom">Spean Mean Chey</option>
                                                <option data-en-title=="Krang Svay" value="1214" data-value="krang-svay"
                                                    data-chained="preah-sdach" class="preah-sdach">Krang Svay</option>
                                                <option data-en-title=="Khnang Phnum" value="1470"
                                                    data-value="khnang-phnum" data-chained="svay-leu" class="svay-leu">
                                                    Khnang Phnum</option>
                                                <option data-en-title=="Srae Ronoung" value="1726"
                                                    data-value="srae-ronoung" data-chained="tram-kak" class="tram-kak">
                                                    Srae Ronoung</option>
                                                <option data-en-title=="Ta Taok" value="191" data-value="ta-taok"
                                                    data-chained="samlout" class="samlout">Ta Taok</option>
                                                <option data-en-title=="Angk Popel" value="447" data-value="angk-popel"
                                                    data-chained="kong-pisei" class="kong-pisei">Angk Popel</option>
                                                <option data-en-title=="Kampong Kandal" value="703"
                                                    data-value="kampong-kandal" data-chained="krong-kampot"
                                                    class="krong-kampot">Kampong Kandal</option>
                                                <option data-en-title=="Romonea" value="959" data-value="romonea"
                                                    data-chained="krong-saen-monourom" class="krong-saen-monourom">
                                                    Romonea</option>
                                                <option data-en-title=="Lvea" value="1215" data-value="lvea"
                                                    data-chained="preah-sdach" class="preah-sdach">Lvea</option>
                                                <option data-en-title=="Svay Leu" value="1471" data-value="svay-leu"
                                                    data-chained="svay-leu" class="svay-leu">Svay Leu</option>
                                                <option data-en-title=="Ta Phem" value="1727" data-value="ta-phem"
                                                    data-chained="tram-kak" class="tram-kak">Ta Phem</option>
                                                <option data-en-title=="Kampong Lpov" value="192"
                                                    data-value="kampong-lpov" data-chained="samlout" class="samlout">
                                                    Kampong Lpov</option>
                                                <option data-en-title=="Chongruk" value="448" data-value="chongruk"
                                                    data-chained="kong-pisei" class="kong-pisei">Chongruk</option>
                                                <option data-en-title=="Krang Ampil" value="704"
                                                    data-value="krang-ampil" data-chained="krong-kampot"
                                                    class="krong-kampot">Krang Ampil</option>
                                                <option data-en-title=="Preah Sdach" value="1216"
                                                    data-value="preah-sdach" data-chained="preah-sdach"
                                                    class="preah-sdach">Preah Sdach</option>
                                                <option data-en-title=="Ta Siem" value="1472" data-value="ta-siem"
                                                    data-chained="svay-leu" class="svay-leu">Ta Siem</option>
                                                <option data-en-title=="Tram Kak" value="1728" data-value="tram-kak"
                                                    data-chained="tram-kak" class="tram-kak">Tram Kak</option>
                                                <option data-en-title=="Ou Samrel" value="193" data-value="ou-samrel"
                                                    data-chained="samlout" class="samlout">Ou Samrel</option>
                                                <option data-en-title=="Moha Ruessei" value="449"
                                                    data-value="moha-ruessei" data-chained="kong-pisei"
                                                    class="kong-pisei">Moha Ruessei</option>
                                                <option data-en-title=="Kampong Bay" value="705"
                                                    data-value="kampong-bay" data-chained="krong-kampot"
                                                    class="krong-kampot">Kampong Bay</option>
                                                <option data-en-title=="Tonle Basak" value="961"
                                                    data-value="tonle-basak" data-chained="chamkar-mon"
                                                    class="chamkar-mon">Tonle Basak</option>
                                                <option data-en-title=="Reathor" value="1217" data-value="reathor"
                                                    data-chained="preah-sdach" class="preah-sdach">Reathor</option>
                                                <option data-en-title=="Trapeang Thum Khang Cheung" value="1729"
                                                    data-value="trapeang-thum-khang-cheung" data-chained="tram-kak"
                                                    class="tram-kak">Trapeang Thum Khang Cheung</option>
                                                <option data-en-title=="Sung" value="194" data-value="sung"
                                                    data-chained="samlout" class="samlout">Sung</option>
                                                <option data-en-title=="Pechr Muni" value="450" data-value="pechr-muni"
                                                    data-chained="kong-pisei" class="kong-pisei">Pechr Muni</option>
                                                <option data-en-title=="Andoung Khmaer" value="706"
                                                    data-value="andoung-khmaer" data-chained="krong-kampot"
                                                    class="krong-kampot">Andoung Khmaer</option>
                                                <option data-en-title=="Boeng Keng Kang Muoy" value="962"
                                                    data-value="boeng-keng-kang-muoy" data-chained="chamkar-mon"
                                                    class="chamkar-mon">Boeng Keng Kang Muoy</option>
                                                <option data-en-title=="Rumchek" value="1218" data-value="rumchek"
                                                    data-chained="preah-sdach" class="preah-sdach">Rumchek</option>
                                                <option data-en-title=="Prasat" value="1474" data-value="prasat"
                                                    data-chained="varin" class="varin">Prasat</option>
                                                <option data-en-title=="Trapeang Thum Khang Tboung" value="1730"
                                                    data-value="trapeang-thum-khang-tboung" data-chained="tram-kak"
                                                    class="tram-kak">Trapeang Thum Khang Tboung</option>
                                                <option data-en-title=="Samlout" value="195" data-value="samlout"
                                                    data-chained="samlout" class="samlout">Samlout</option>
                                                <option data-en-title=="Preah Nipean" value="451"
                                                    data-value="preah-nipean" data-chained="kong-pisei"
                                                    class="kong-pisei">Preah Nipean</option>
                                                <option data-en-title=="Traeuy Kaoh" value="707"
                                                    data-value="traeuy-kaoh" data-chained="krong-kampot"
                                                    class="krong-kampot">Traeuy Kaoh</option>
                                                <option data-en-title=="Boeng Keng Kang Pir" value="963"
                                                    data-value="boeng-keng-kang-pir" data-chained="chamkar-mon"
                                                    class="chamkar-mon">Boeng Keng Kang Pir</option>
                                                <option data-en-title=="Sena Reach Otdam" value="1219"
                                                    data-value="sena-reach-otdam" data-chained="preah-sdach"
                                                    class="preah-sdach">Sena Reach Otdam</option>
                                                <option data-en-title=="Lvea Krang" value="1475" data-value="lvea-krang"
                                                    data-chained="varin" class="varin">Lvea Krang</option>
                                                <option data-en-title=="Mean Chey" value="196" data-value="mean-chey"
                                                    data-chained="samlout" class="samlout">Mean Chey</option>
                                                <option data-en-title=="Prey Nheat" value="452" data-value="prey-nheat"
                                                    data-chained="kong-pisei" class="kong-pisei">Prey Nheat</option>
                                                <option data-en-title=="Boeng Keng Kang Bei" value="964"
                                                    data-value="boeng-keng-kang-bei" data-chained="chamkar-mon"
                                                    class="chamkar-mon">Boeng Keng Kang Bei</option>
                                                <option data-en-title=="Srae Nouy" value="1476" data-value="srae-nouy"
                                                    data-chained="varin" class="varin">Srae Nouy</option>
                                                <option data-en-title=="Angkanh" value="1732" data-value="angkanh"
                                                    data-chained="treang" class="treang">Angkanh</option>
                                                <option data-en-title=="Ta Sanh" value="197" data-value="ta-sanh"
                                                    data-chained="samlout" class="samlout">Ta Sanh</option>
                                                <option data-en-title=="Prey Vihear" value="453"
                                                    data-value="prey-vihear" data-chained="kong-pisei"
                                                    class="kong-pisei">Prey Vihear</option>
                                                <option data-en-title=="Ampov Prey" value="709" data-value="ampov-prey"
                                                    data-chained="kandal-stueng" class="kandal-stueng">Ampov Prey
                                                </option>
                                                <option data-en-title=="Oulampik" value="965" data-value="oulampik"
                                                    data-chained="chamkar-mon" class="chamkar-mon">Oulampik</option>
                                                <option data-en-title=="Baray" value="1221" data-value="baray"
                                                    data-chained="krong-prey-veng" class="krong-prey-veng">Baray
                                                </option>
                                                <option data-en-title=="Svay Sa" value="1477" data-value="svay-sa"
                                                    data-chained="varin" class="varin">Svay Sa</option>
                                                <option data-en-title=="Angk Khnaor" value="1733"
                                                    data-value="angk-khnaor" data-chained="treang" class="treang">Angk
                                                    Khnaor</option>
                                                <option data-en-title=="Roka Kaoh" value="454" data-value="roka-kaoh"
                                                    data-chained="kong-pisei" class="kong-pisei">Roka Kaoh</option>
                                                <option data-en-title=="Anlong Romiet" value="710"
                                                    data-value="anlong-romiet" data-chained="kandal-stueng"
                                                    class="kandal-stueng">Anlong Romiet</option>
                                                <option data-en-title=="Tuol Svay Prey Muoy" value="966"
                                                    data-value="tuol-svay-prey-muoy" data-chained="chamkar-mon"
                                                    class="chamkar-mon">Tuol Svay Prey Muoy</option>
                                                <option data-en-title=="Cheung Tuek" value="1222"
                                                    data-value="cheung-tuek" data-chained="krong-prey-veng"
                                                    class="krong-prey-veng">Cheung Tuek</option>
                                                <option data-en-title=="Varin" value="1478" data-value="varin"
                                                    data-chained="varin" class="varin">Varin</option>
                                                <option data-en-title=="Chi Khmar" value="1734" data-value="chi-khmar"
                                                    data-chained="treang" class="treang">Chi Khmar</option>
                                                <option data-en-title=="Sampov Lun" value="199" data-value="sampov-lun"
                                                    data-chained="sampov-lun" class="sampov-lun">Sampov Lun</option>
                                                <option data-en-title=="Sdok" value="455" data-value="sdok"
                                                    data-chained="kong-pisei" class="kong-pisei">Sdok</option>
                                                <option data-en-title=="Barku" value="711" data-value="barku"
                                                    data-chained="kandal-stueng" class="kandal-stueng">Barku</option>
                                                <option data-en-title=="Tuol Svay Prey Pir" value="967"
                                                    data-value="tuol-svay-prey-pir" data-chained="chamkar-mon"
                                                    class="chamkar-mon">Tuol Svay Prey Pir</option>
                                                <option data-en-title=="Kampong Leav" value="1223"
                                                    data-value="kampong-leav" data-chained="krong-prey-veng"
                                                    class="krong-prey-veng">Kampong Leav</option>
                                                <option data-en-title=="Khvav" value="1735" data-value="khvav"
                                                    data-chained="treang" class="treang">Khvav</option>
                                                <option data-en-title=="Angkor Ban" value="200" data-value="angkor-ban"
                                                    data-chained="sampov-lun" class="sampov-lun">Angkor Ban</option>
                                                <option data-en-title=="Snam Krapeu" value="456"
                                                    data-value="snam-krapeu" data-chained="kong-pisei"
                                                    class="kong-pisei">Snam Krapeu</option>
                                                <option data-en-title=="Boeng Khyang" value="712"
                                                    data-value="boeng-khyang" data-chained="kandal-stueng"
                                                    class="kandal-stueng">Boeng Khyang</option>
                                                <option data-en-title=="Tumnob Tuek" value="968"
                                                    data-value="tumnob-tuek" data-chained="chamkar-mon"
                                                    class="chamkar-mon">Tumnob Tuek</option>
                                                <option data-en-title=="Sangkat Muoy" value="1480"
                                                    data-value="sangkat-muoy" data-chained="krong-preah-sihanouk"
                                                    class="krong-preah-sihanouk">Sangkat Muoy</option>
                                                <option data-en-title=="Prambei Mom" value="1736"
                                                    data-value="prambei-mom" data-chained="treang" class="treang">
                                                    Prambei Mom</option>
                                                <option data-en-title=="Ta Sda" value="201" data-value="ta-sda"
                                                    data-chained="sampov-lun" class="sampov-lun">Ta Sda</option>
                                                <option data-en-title=="Srang" value="457" data-value="srang"
                                                    data-chained="kong-pisei" class="kong-pisei">Srang</option>
                                                <option data-en-title=="Cheung Kaeub" value="713"
                                                    data-value="cheung-kaeub" data-chained="kandal-stueng"
                                                    class="kandal-stueng">Cheung Kaeub</option>
                                                <option data-en-title=="Tuol Tumpung Pir" value="969"
                                                    data-value="tuol-tumpung-pir" data-chained="chamkar-mon"
                                                    class="chamkar-mon">Tuol Tumpung Pir</option>
                                                <option data-en-title=="Pou Rieng" value="1225" data-value="pou-rieng"
                                                    data-chained="kampong-leav" class="kampong-leav">Pou Rieng</option>
                                                <option data-en-title=="Sangkat Pir" value="1481"
                                                    data-value="sangkat-pir" data-chained="krong-preah-sihanouk"
                                                    class="krong-preah-sihanouk">Sangkat Pir</option>
                                                <option data-en-title=="Angk Kaev" value="1737" data-value="angk-kaev"
                                                    data-chained="treang" class="treang">Angk Kaev</option>
                                                <option data-en-title=="Santepheap" value="202" data-value="santepheap"
                                                    data-chained="sampov-lun" class="sampov-lun">Santepheap</option>
                                                <option data-en-title=="Tuek L'ak" value="458" data-value="tuek-lak"
                                                    data-chained="kong-pisei" class="kong-pisei">Tuek L'ak</option>
                                                <option data-en-title=="Daeum Rues" value="714" data-value="daeum-rues"
                                                    data-chained="kandal-stueng" class="kandal-stueng">Daeum Rues
                                                </option>
                                                <option data-en-title=="Tuol Tumpung Muoy" value="970"
                                                    data-value="tuol-tumpung-muoy" data-chained="chamkar-mon"
                                                    class="chamkar-mon">Tuol Tumpung Muoy</option>
                                                <option data-en-title=="Preaek Anteah" value="1226"
                                                    data-value="preaek-anteah" data-chained="kampong-leav"
                                                    class="kampong-leav">Preaek Anteah</option>
                                                <option data-en-title=="Sangkat Bei" value="1482"
                                                    data-value="sangkat-bei" data-chained="krong-preah-sihanouk"
                                                    class="krong-preah-sihanouk">Sangkat Bei</option>
                                                <option data-en-title=="Prey Sloek" value="1738" data-value="prey-sloek"
                                                    data-chained="treang" class="treang">Prey Sloek</option>
                                                <option data-en-title=="Serei Mean Chey" value="203"
                                                    data-value="serei-mean-chey" data-chained="sampov-lun"
                                                    class="sampov-lun">Serei Mean Chey</option>
                                                <option data-en-title=="Veal" value="459" data-value="veal"
                                                    data-chained="kong-pisei" class="kong-pisei">Veal</option>
                                                <option data-en-title=="Kandaok" value="715" data-value="kandaok"
                                                    data-chained="kandal-stueng" class="kandal-stueng">Kandaok</option>
                                                <option data-en-title=="Boeng Trabaek" value="971"
                                                    data-value="boeng-trabaek" data-chained="chamkar-mon"
                                                    class="chamkar-mon">Boeng Trabaek</option>
                                                <option data-en-title=="Preaek Chrey" value="1227"
                                                    data-value="preaek-chrey" data-chained="kampong-leav"
                                                    class="kampong-leav">Preaek Chrey</option>
                                                <option data-en-title=="Sangkat Buon" value="1483"
                                                    data-value="sangkat-buon" data-chained="krong-preah-sihanouk"
                                                    class="krong-preah-sihanouk">Sangkat Buon</option>
                                                <option data-en-title=="Roneam" value="1739" data-value="roneam"
                                                    data-chained="treang" class="treang">Roneam</option>
                                                <option data-en-title=="Chrey Seima" value="204"
                                                    data-value="chrey-seima" data-chained="sampov-lun"
                                                    class="sampov-lun">Chrey Seima</option>
                                                <option data-en-title=="Thmei" value="716" data-value="thmei"
                                                    data-chained="kandal-stueng" class="kandal-stueng">Thmei</option>
                                                <option data-en-title=="Phsar Daeum Thkov" value="972"
                                                    data-value="phsar-daeum-thkov" data-chained="chamkar-mon"
                                                    class="chamkar-mon">Phsar Daeum Thkov</option>
                                                <option data-en-title=="Prey Kanlaong" value="1228"
                                                    data-value="prey-kanlaong" data-chained="kampong-leav"
                                                    class="kampong-leav">Prey Kanlaong</option>
                                                <option data-en-title=="Kaoh Rung" value="1484" data-value="kaoh-rung"
                                                    data-chained="krong-preah-sihanouk" class="krong-preah-sihanouk">
                                                    Kaoh Rung</option>
                                                <option data-en-title=="Sambuor" value="1740" data-value="sambuor"
                                                    data-chained="treang" class="treang">Sambuor</option>
                                                <option data-en-title=="Haong Samnam" value="461"
                                                    data-value="haong-samnam" data-chained="aoral" class="aoral">Haong
                                                    Samnam</option>
                                                <option data-en-title=="Kouk Trab" value="717" data-value="kouk-trab"
                                                    data-chained="kandal-stueng" class="kandal-stueng">Kouk Trab
                                                </option>
                                                <option data-en-title=="Ta Kao" value="1229" data-value="ta-kao"
                                                    data-chained="kampong-leav" class="kampong-leav">Ta Kao</option>
                                                <option data-en-title=="Sanlung" value="1741" data-value="sanlung"
                                                    data-chained="treang" class="treang">Sanlung</option>
                                                <option data-en-title=="Phnom Proek" value="206"
                                                    data-value="phnom-proek" data-chained="phnom-proek"
                                                    class="phnom-proek">Phnom Proek</option>
                                                <option data-en-title=="Reaksmei Sameakki" value="462"
                                                    data-value="reaksmei-sameakki" data-chained="aoral" class="aoral">
                                                    Reaksmei Sameakki</option>
                                                <option data-en-title=="Preah Putth" value="718"
                                                    data-value="preah-putth" data-chained="kandal-stueng"
                                                    class="kandal-stueng">Preah Putth</option>
                                                <option data-en-title=="Phsar Thmei Muoy" value="974"
                                                    data-value="phsar-thmei-muoy" data-chained="doun-penh"
                                                    class="doun-penh">Phsar Thmei Muoy</option>
                                                <option data-en-title=="Andoung Thma" value="1486"
                                                    data-value="andoung-thma" data-chained="prey-nob" class="prey-nob">
                                                    Andoung Thma</option>
                                                <option data-en-title=="Smaong" value="1742" data-value="smaong"
                                                    data-chained="treang" class="treang">Smaong</option>
                                                <option data-en-title=="Pech Chenda" value="207"
                                                    data-value="pech-chenda" data-chained="phnom-proek"
                                                    class="phnom-proek">Pech Chenda</option>
                                                <option data-en-title=="Trapeang Chour" value="463"
                                                    data-value="trapeang-chour" data-chained="aoral" class="aoral">
                                                    Trapeang Chour</option>
                                                <option data-en-title=="Preaek Roka" value="719"
                                                    data-value="preaek-roka" data-chained="kandal-stueng"
                                                    class="kandal-stueng">Preaek Roka</option>
                                                <option data-en-title=="Phsar Thmei Pir" value="975"
                                                    data-value="phsar-thmei-pir" data-chained="doun-penh"
                                                    class="doun-penh">Phsar Thmei Pir</option>
                                                <option data-en-title=="Ampil Krau" value="1231" data-value="ampil-krau"
                                                    data-chained="sithor-kandal" class="sithor-kandal">Ampil Krau
                                                </option>
                                                <option data-en-title=="Boeng Ta Prum" value="1487"
                                                    data-value="boeng-ta-prum" data-chained="prey-nob" class="prey-nob">
                                                    Boeng Ta Prum</option>
                                                <option data-en-title=="Srangae" value="1743" data-value="srangae"
                                                    data-chained="treang" class="treang">Srangae</option>
                                                <option data-en-title=="Chak Krey" value="208" data-value="chak-krey"
                                                    data-chained="phnom-proek" class="phnom-proek">Chak Krey</option>
                                                <option data-en-title=="Sangkae Satob" value="464"
                                                    data-value="sangkae-satob" data-chained="aoral" class="aoral">
                                                    Sangkae Satob</option>
                                                <option data-en-title=="Preaek Slaeng" value="720"
                                                    data-value="preaek-slaeng" data-chained="kandal-stueng"
                                                    class="kandal-stueng">Preaek Slaeng</option>
                                                <option data-en-title=="Phsar Thmei Bei" value="976"
                                                    data-value="phsar-thmei-bei" data-chained="doun-penh"
                                                    class="doun-penh">Phsar Thmei Bei</option>
                                                <option data-en-title=="Chrey Khmum" value="1232"
                                                    data-value="chrey-khmum" data-chained="sithor-kandal"
                                                    class="sithor-kandal">Chrey Khmum</option>
                                                <option data-en-title=="Bet Trang" value="1488" data-value="bet-trang"
                                                    data-chained="prey-nob" class="prey-nob">Bet Trang</option>
                                                <option data-en-title=="Thlok" value="1744" data-value="thlok"
                                                    data-chained="treang" class="treang">Thlok</option>
                                                <option data-en-title=="Barang Thleak" value="209"
                                                    data-value="barang-thleak" data-chained="phnom-proek"
                                                    class="phnom-proek">Barang Thleak</option>
                                                <option data-en-title=="Ta Sal" value="465" data-value="ta-sal"
                                                    data-chained="aoral" class="aoral">Ta Sal</option>
                                                <option data-en-title=="Roka" value="721" data-value="roka"
                                                    data-chained="kandal-stueng" class="kandal-stueng">Roka</option>
                                                <option data-en-title=="Boeng Reang" value="977"
                                                    data-value="boeng-reang" data-chained="doun-penh" class="doun-penh">
                                                    Boeng Reang</option>
                                                <option data-en-title=="Lve" value="1233" data-value="lve"
                                                    data-chained="sithor-kandal" class="sithor-kandal">Lve</option>
                                                <option data-en-title=="Cheung Kou" value="1489" data-value="cheung-kou"
                                                    data-chained="prey-nob" class="prey-nob">Cheung Kou</option>
                                                <option data-en-title=="Tralach" value="1745" data-value="tralach"
                                                    data-chained="treang" class="treang">Tralach</option>
                                                <option data-en-title=="Ou Rumduol" value="210" data-value="ou-rumduol"
                                                    data-chained="phnom-proek" class="phnom-proek">Ou Rumduol</option>
                                                <option data-en-title=="Roleang Kaen" value="722"
                                                    data-value="roleang-kaen" data-chained="kandal-stueng"
                                                    class="kandal-stueng">Roleang Kaen</option>
                                                <option data-en-title=="Phsar Kandal Muoy" value="978"
                                                    data-value="phsar-kandal-muoy" data-chained="doun-penh"
                                                    class="doun-penh">Phsar Kandal Muoy</option>
                                                <option data-en-title=="Pnov Ti Muoy" value="1234"
                                                    data-value="pnov-ti-muoy" data-chained="sithor-kandal"
                                                    class="sithor-kandal">Pnov Ti Muoy</option>
                                                <option data-en-title=="Ou Chrov" value="1490" data-value="ou-chrov"
                                                    data-chained="prey-nob" class="prey-nob">Ou Chrov</option>
                                                <option data-en-title=="Chant Saen" value="467" data-value="chant-saen"
                                                    data-chained="odongk" class="odongk">Chant Saen</option>
                                                <option data-en-title=="Siem Reab" value="723" data-value="siem-reab"
                                                    data-chained="kandal-stueng" class="kandal-stueng">Siem Reab
                                                </option>
                                                <option data-en-title=="Phsar Kandal Pir" value="979"
                                                    data-value="phsar-kandal-pir" data-chained="doun-penh"
                                                    class="doun-penh">Phsar Kandal Pir</option>
                                                <option data-en-title=="Pnov Ti Pir" value="1235"
                                                    data-value="pnov-ti-pir" data-chained="sithor-kandal"
                                                    class="sithor-kandal">Pnov Ti Pir</option>
                                                <option data-en-title=="Ou Oknha Heng" value="1491"
                                                    data-value="ou-oknha-heng" data-chained="prey-nob" class="prey-nob">
                                                    Ou Oknha Heng</option>
                                                <option data-en-title=="Anlong Veaeng" value="1747"
                                                    data-value="anlong-veaeng" data-chained="anlong-veaeng"
                                                    class="anlong-veaeng">Anlong Veaeng</option>
                                                <option data-en-title=="Kamrieng" value="212" data-value="kamrieng"
                                                    data-chained="kamrieng" class="kamrieng">Kamrieng</option>
                                                <option data-en-title=="Cheung Roas" value="468"
                                                    data-value="cheung-roas" data-chained="odongk" class="odongk">Cheung
                                                    Roas</option>
                                                <option data-en-title=="Tbaeng" value="724" data-value="tbaeng"
                                                    data-chained="kandal-stueng" class="kandal-stueng">Tbaeng</option>
                                                <option data-en-title=="Chakto Mukh" value="980"
                                                    data-value="chakto-mukh" data-chained="doun-penh" class="doun-penh">
                                                    Chakto Mukh</option>
                                                <option data-en-title=="Pou Ti" value="1236" data-value="pou-ti"
                                                    data-chained="sithor-kandal" class="sithor-kandal">Pou Ti</option>
                                                <option data-en-title=="Prey Nob" value="1492" data-value="prey-nob"
                                                    data-chained="prey-nob" class="prey-nob">Prey Nob</option>
                                                <option data-en-title=="Trapeang Tav" value="1748"
                                                    data-value="trapeang-tav" data-chained="anlong-veaeng"
                                                    class="anlong-veaeng">Trapeang Tav</option>
                                                <option data-en-title=="Boeng Reang" value="213"
                                                    data-value="boeng-reang" data-chained="kamrieng" class="kamrieng">
                                                    Boeng Reang</option>
                                                <option data-en-title=="Chumpu Proeks" value="469"
                                                    data-value="chumpu-proeks" data-chained="odongk" class="odongk">
                                                    Chumpu Proeks</option>
                                                <option data-en-title=="Trapeang Veaeng" value="725"
                                                    data-value="trapeang-veaeng" data-chained="kandal-stueng"
                                                    class="kandal-stueng">Trapeang Veaeng</option>
                                                <option data-en-title=="Chey Chumneah" value="981"
                                                    data-value="chey-chumneah" data-chained="doun-penh"
                                                    class="doun-penh">Chey Chumneah</option>
                                                <option data-en-title=="Preaek Changkran" value="1237"
                                                    data-value="preaek-changkran" data-chained="sithor-kandal"
                                                    class="sithor-kandal">Preaek Changkran</option>
                                                <option data-en-title=="Ream" value="1493" data-value="ream"
                                                    data-chained="prey-nob" class="prey-nob">Ream</option>
                                                <option data-en-title=="Trapeang Prei" value="1749"
                                                    data-value="trapeang-prei" data-chained="anlong-veaeng"
                                                    class="anlong-veaeng">Trapeang Prei</option>
                                                <option data-en-title=="Ou Da" value="214" data-value="ou-da"
                                                    data-chained="kamrieng" class="kamrieng">Ou Da</option>
                                                <option data-en-title=="Khsem Khsan" value="470"
                                                    data-value="khsem-khsan" data-chained="odongk" class="odongk">Khsem
                                                    Khsan</option>
                                                <option data-en-title=="Trea" value="726" data-value="trea"
                                                    data-chained="kandal-stueng" class="kandal-stueng">Trea</option>
                                                <option data-en-title=="Phsar Chas" value="982" data-value="phsar-chas"
                                                    data-chained="doun-penh" class="doun-penh">Phsar Chas</option>
                                                <option data-en-title=="Prey Daeum Thnoeng" value="1238"
                                                    data-value="prey-daeum-thnoeng" data-chained="sithor-kandal"
                                                    class="sithor-kandal">Prey Daeum Thnoeng</option>
                                                <option data-en-title=="Sameakki" value="1494" data-value="sameakki"
                                                    data-chained="prey-nob" class="prey-nob">Sameakki</option>
                                                <option data-en-title=="Thlat" value="1750" data-value="thlat"
                                                    data-chained="anlong-veaeng" class="anlong-veaeng">Thlat</option>
                                                <option data-en-title=="Trang" value="215" data-value="trang"
                                                    data-chained="kamrieng" class="kamrieng">Trang</option>
                                                <option data-en-title=="Krang Chek" value="471" data-value="krang-chek"
                                                    data-chained="odongk" class="odongk">Krang Chek</option>
                                                <option data-en-title=="Srah Chak" value="983" data-value="srah-chak"
                                                    data-chained="doun-penh" class="doun-penh">Srah Chak</option>
                                                <option data-en-title=="Prey Tueng" value="1239" data-value="prey-tueng"
                                                    data-chained="sithor-kandal" class="sithor-kandal">Prey Tueng
                                                </option>
                                                <option data-en-title=="Samrong" value="1495" data-value="samrong"
                                                    data-chained="prey-nob" class="prey-nob">Samrong</option>
                                                <option data-en-title=="Lumtong" value="1751" data-value="lumtong"
                                                    data-chained="anlong-veaeng" class="anlong-veaeng">Lumtong</option>
                                                <option data-en-title=="Ta Saen" value="216" data-value="ta-saen"
                                                    data-chained="kamrieng" class="kamrieng">Ta Saen</option>
                                                <option data-en-title=="Mean Chey" value="472" data-value="mean-chey"
                                                    data-chained="odongk" class="odongk">Mean Chey</option>
                                                <option data-en-title=="Banteay Daek" value="728"
                                                    data-value="banteay-daek" data-chained="kien-svay"
                                                    class="kien-svay">Banteay Daek</option>
                                                <option data-en-title=="Voat Phnum" value="984" data-value="voat-phnum"
                                                    data-chained="doun-penh" class="doun-penh">Voat Phnum</option>
                                                <option data-en-title=="Rumlech" value="1240" data-value="rumlech"
                                                    data-chained="sithor-kandal" class="sithor-kandal">Rumlech</option>
                                                <option data-en-title=="Tuek L'ak" value="1496" data-value="tuek-lak"
                                                    data-chained="prey-nob" class="prey-nob">Tuek L'ak</option>
                                                <option data-en-title=="Ta Krei" value="217" data-value="ta-krei"
                                                    data-chained="kamrieng" class="kamrieng">Ta Krei</option>
                                                <option data-en-title=="Preah Srae" value="473" data-value="preah-srae"
                                                    data-chained="odongk" class="odongk">Preah Srae</option>
                                                <option data-en-title=="Chheu Teal" value="729" data-value="chheu-teal"
                                                    data-chained="kien-svay" class="kien-svay">Chheu Teal</option>
                                                <option data-en-title=="Ruessei Sanh" value="1241"
                                                    data-value="ruessei-sanh" data-chained="sithor-kandal"
                                                    class="sithor-kandal">Ruessei Sanh</option>
                                                <option data-en-title=="Tuek Thla" value="1497" data-value="tuek-thla"
                                                    data-chained="prey-nob" class="prey-nob">Tuek Thla</option>
                                                <option data-en-title=="Ampil" value="1753" data-value="ampil"
                                                    data-chained="banteay-ampil" class="banteay-ampil">Ampil</option>
                                                <option data-en-title=="Prey Krasang" value="474"
                                                    data-value="prey-krasang" data-chained="odongk" class="odongk">Prey
                                                    Krasang</option>
                                                <option data-en-title=="Dei Edth" value="730" data-value="dei-edth"
                                                    data-chained="kien-svay" class="kien-svay">Dei Edth</option>
                                                <option data-en-title=="Ou Ruessei Muoy" value="986"
                                                    data-value="ou-ruessei-muoy" data-chained="prampir-meakkakra"
                                                    class="prampir-meakkakra">Ou Ruessei Muoy</option>
                                                <option data-en-title=="Tuol Toetueng" value="1498"
                                                    data-value="tuol-toetueng" data-chained="prey-nob" class="prey-nob">
                                                    Tuol Toetueng</option>
                                                <option data-en-title=="Beng" value="1754" data-value="beng"
                                                    data-chained="banteay-ampil" class="banteay-ampil">Beng</option>
                                                <option data-en-title=="Thipakdei" value="219" data-value="thipakdei"
                                                    data-chained="koas-krala" class="koas-krala">Thipakdei</option>
                                                <option data-en-title=="Trach Tong" value="475" data-value="trach-tong"
                                                    data-chained="odongk" class="odongk">Trach Tong</option>
                                                <option data-en-title=="Kampong Svay" value="731"
                                                    data-value="kampong-svay" data-chained="kien-svay"
                                                    class="kien-svay">Kampong Svay</option>
                                                <option data-en-title=="Ou Ruessei Pir" value="987"
                                                    data-value="ou-ruessei-pir" data-chained="prampir-meakkakra"
                                                    class="prampir-meakkakra">Ou Ruessei Pir</option>
                                                <option data-en-title=="Angkor Tret" value="1243"
                                                    data-value="angkor-tret" data-chained="svay-antor"
                                                    class="svay-antor">Angkor Tret</option>
                                                <option data-en-title=="Veal Renh" value="1499" data-value="veal-renh"
                                                    data-chained="prey-nob" class="prey-nob">Veal Renh</option>
                                                <option data-en-title=="Kouk Khpos" value="1755" data-value="kouk-khpos"
                                                    data-chained="banteay-ampil" class="banteay-ampil">Kouk Khpos
                                                </option>
                                                <option data-en-title=="Koas Krala" value="220" data-value="koas-krala"
                                                    data-chained="koas-krala" class="koas-krala">Koas Krala</option>
                                                <option data-en-title=="Veal Pung" value="476" data-value="veal-pung"
                                                    data-chained="odongk" class="odongk">Veal Pung</option>
                                                <option data-en-title=="Kokir" value="732" data-value="kokir"
                                                    data-chained="kien-svay" class="kien-svay">Kokir</option>
                                                <option data-en-title=="Ou Ruessei Bei" value="988"
                                                    data-value="ou-ruessei-bei" data-chained="prampir-meakkakra"
                                                    class="prampir-meakkakra">Ou Ruessei Bei</option>
                                                <option data-en-title=="Chea Khlang" value="1244"
                                                    data-value="chea-khlang" data-chained="svay-antor"
                                                    class="svay-antor">Chea Khlang</option>
                                                <option data-en-title=="Kouk Mon" value="1756" data-value="kouk-mon"
                                                    data-chained="banteay-ampil" class="banteay-ampil">Kouk Mon</option>
                                                <option data-en-title=="Hab" value="221" data-value="hab"
                                                    data-chained="koas-krala" class="koas-krala">Hab</option>
                                                <option data-en-title=="Veang Chas" value="477" data-value="veang-chas"
                                                    data-chained="odongk" class="odongk">Veang Chas</option>
                                                <option data-en-title=="Kokir Thum" value="733" data-value="kokir-thum"
                                                    data-chained="kien-svay" class="kien-svay">Kokir Thum</option>
                                                <option data-en-title=="Ou Ruessei Buon" value="989"
                                                    data-value="ou-ruessei-buon" data-chained="prampir-meakkakra"
                                                    class="prampir-meakkakra">Ou Ruessei Buon</option>
                                                <option data-en-title=="Chrey" value="1245" data-value="chrey"
                                                    data-chained="svay-antor" class="svay-antor">Chrey</option>
                                                <option data-en-title=="Kampenh" value="1501" data-value="kampenh"
                                                    data-chained="stueng-hav" class="stueng-hav">Kampenh</option>
                                                <option data-en-title=="Preah Phos" value="222" data-value="preah-phos"
                                                    data-chained="koas-krala" class="koas-krala">Preah Phos</option>
                                                <option data-en-title=="Yutth Sameakki" value="478"
                                                    data-value="yutth-sameakki" data-chained="odongk" class="odongk">
                                                    Yutth Sameakki</option>
                                                <option data-en-title=="Phum Thum" value="734" data-value="phum-thum"
                                                    data-chained="kien-svay" class="kien-svay">Phum Thum</option>
                                                <option data-en-title=="Monourom" value="990" data-value="monourom"
                                                    data-chained="prampir-meakkakra" class="prampir-meakkakra">Monourom
                                                </option>
                                                <option data-en-title=="Damrei Puon" value="1246"
                                                    data-value="damrei-puon" data-chained="svay-antor"
                                                    class="svay-antor">Damrei Puon</option>
                                                <option data-en-title=="Ou Treh" value="1502" data-value="ou-treh"
                                                    data-chained="stueng-hav" class="stueng-hav">Ou Treh</option>
                                                <option data-en-title=="Cheung Tien" value="1758"
                                                    data-value="cheung-tien" data-chained="chong-kal" class="chong-kal">
                                                    Cheung Tien</option>
                                                <option data-en-title=="Doun Ba" value="223" data-value="doun-ba"
                                                    data-chained="koas-krala" class="koas-krala">Doun Ba</option>
                                                <option data-en-title=="Damnak Reang" value="479"
                                                    data-value="damnak-reang" data-chained="odongk" class="odongk">
                                                    Damnak Reang</option>
                                                <option data-en-title=="Samraong Thum" value="735"
                                                    data-value="samraong-thum" data-chained="kien-svay"
                                                    class="kien-svay">Samraong Thum</option>
                                                <option data-en-title=="Mittakpheap" value="991"
                                                    data-value="mittakpheap" data-chained="prampir-meakkakra"
                                                    class="prampir-meakkakra">Mittakpheap</option>
                                                <option data-en-title=="Me Bon" value="1247" data-value="me-bon"
                                                    data-chained="svay-antor" class="svay-antor">Me Bon</option>
                                                <option data-en-title=="Tumnob Rolok" value="1503"
                                                    data-value="tumnob-rolok" data-chained="stueng-hav"
                                                    class="stueng-hav">Tumnob Rolok</option>
                                                <option data-en-title=="Chong Kal" value="1759" data-value="chong-kal"
                                                    data-chained="chong-kal" class="chong-kal">Chong Kal</option>
                                                <option data-en-title=="Chhnal Mean" value="224"
                                                    data-value="chhnal-mean" data-chained="koas-krala"
                                                    class="koas-krala">Chhnal Mean</option>
                                                <option data-en-title=="Peang Lvea" value="480" data-value="peang-lvea"
                                                    data-chained="odongk" class="odongk">Peang Lvea</option>
                                                <option data-en-title=="Veal Vong" value="992" data-value="veal-vong"
                                                    data-chained="prampir-meakkakra" class="prampir-meakkakra">Veal Vong
                                                </option>
                                                <option data-en-title=="Pean Roung" value="1248" data-value="pean-roung"
                                                    data-chained="svay-antor" class="svay-antor">Pean Roung</option>
                                                <option data-en-title=="Krasang" value="1760" data-value="krasang"
                                                    data-chained="chong-kal" class="chong-kal">Krasang</option>
                                                <option data-en-title=="Phnum Touch" value="481"
                                                    data-value="phnum-touch" data-chained="odongk" class="odongk">Phnum
                                                    Touch</option>
                                                <option data-en-title=="Bak Dav" value="737" data-value="bak-dav"
                                                    data-chained="khsach-kandal" class="khsach-kandal">Bak Dav</option>
                                                <option data-en-title=="Boeng Prolit" value="993"
                                                    data-value="boeng-prolit" data-chained="prampir-meakkakra"
                                                    class="prampir-meakkakra">Boeng Prolit</option>
                                                <option data-en-title=="Popueus" value="1249" data-value="popueus"
                                                    data-chained="svay-antor" class="svay-antor">Popueus</option>
                                                <option data-en-title=="Chamkar Luong" value="1505"
                                                    data-value="chamkar-luong" data-chained="kampong-seila"
                                                    class="kampong-seila">Chamkar Luong</option>
                                                <option data-en-title=="Pongro" value="1761" data-value="pongro"
                                                    data-chained="chong-kal" class="chong-kal">Pongro</option>
                                                <option data-en-title=="Preaek Chik" value="226"
                                                    data-value="preaek-chik" data-chained="rukhak-kiri"
                                                    class="rukhak-kiri">Preaek Chik</option>
                                                <option data-en-title=="Chey Thum" value="738" data-value="chey-thum"
                                                    data-chained="khsach-kandal" class="khsach-kandal">Chey Thum
                                                </option>
                                                <option data-en-title=="Prey Khla" value="1250" data-value="prey-khla"
                                                    data-chained="svay-antor" class="svay-antor">Prey Khla</option>
                                                <option data-en-title=="Kampong Seila" value="1506"
                                                    data-value="kampong-seila" data-chained="kampong-seila"
                                                    class="kampong-seila">Kampong Seila</option>
                                                <option data-en-title=="Prey Tralach" value="227"
                                                    data-value="prey-tralach" data-chained="rukhak-kiri"
                                                    class="rukhak-kiri">Prey Tralach</option>
                                                <option data-en-title=="Chambak" value="483" data-value="chambak"
                                                    data-chained="phnum-sruoch" class="phnum-sruoch">Chambak</option>
                                                <option data-en-title=="Kampong Chamlang" value="739"
                                                    data-value="kampong-chamlang" data-chained="khsach-kandal"
                                                    class="khsach-kandal">Kampong Chamlang</option>
                                                <option data-en-title=="Phsar Depou Muoy" value="995"
                                                    data-value="phsar-depou-muoy" data-chained="tuol-kouk"
                                                    class="tuol-kouk">Phsar Depou Muoy</option>
                                                <option data-en-title=="Samraong" value="1251" data-value="samraong"
                                                    data-chained="svay-antor" class="svay-antor">Samraong</option>
                                                <option data-en-title=="Ou Bak Roteh" value="1507"
                                                    data-value="ou-bak-roteh" data-chained="kampong-seila"
                                                    class="kampong-seila">Ou Bak Roteh</option>
                                                <option data-en-title=="Bansay Reak" value="1763"
                                                    data-value="bansay-reak" data-chained="krong-samraong"
                                                    class="krong-samraong">Bansay Reak</option>
                                                <option data-en-title=="Choam Sangkae" value="484"
                                                    data-value="choam-sangkae" data-chained="phnum-sruoch"
                                                    class="phnum-sruoch">Choam Sangkae</option>
                                                <option data-en-title=="Kaoh Chouram" value="740"
                                                    data-value="kaoh-chouram" data-chained="khsach-kandal"
                                                    class="khsach-kandal">Kaoh Chouram</option>
                                                <option data-en-title=="Phsar Depou Pir" value="996"
                                                    data-value="phsar-depou-pir" data-chained="tuol-kouk"
                                                    class="tuol-kouk">Phsar Depou Pir</option>
                                                <option data-en-title=="Svay Antor" value="1252" data-value="svay-antor"
                                                    data-chained="svay-antor" class="svay-antor">Svay Antor</option>
                                                <option data-en-title=="Stueng Chhay" value="1508"
                                                    data-value="stueng-chhay" data-chained="kampong-seila"
                                                    class="kampong-seila">Stueng Chhay</option>
                                                <option data-en-title=="Bos Sbov" value="1764" data-value="bos-sbov"
                                                    data-chained="krong-samraong" class="krong-samraong">Bos Sbov
                                                </option>
                                                <option data-en-title=="Batheay" value="229" data-value="batheay"
                                                    data-chained="batheay" class="batheay">Batheay</option>
                                                <option data-en-title=="Dambouk Rung" value="485"
                                                    data-value="dambouk-rung" data-chained="phnum-sruoch"
                                                    class="phnum-sruoch">Dambouk Rung</option>
                                                <option data-en-title=="Kaoh Oknha Tei" value="741"
                                                    data-value="kaoh-oknha-tei" data-chained="khsach-kandal"
                                                    class="khsach-kandal">Kaoh Oknha Tei</option>
                                                <option data-en-title=="Phsar Depou Bei" value="997"
                                                    data-value="phsar-depou-bei" data-chained="tuol-kouk"
                                                    class="tuol-kouk">Phsar Depou Bei</option>
                                                <option data-en-title=="Tuek Thla" value="1253" data-value="tuek-thla"
                                                    data-chained="svay-antor" class="svay-antor">Tuek Thla</option>
                                                <option data-en-title=="Kriel" value="1765" data-value="kriel"
                                                    data-chained="krong-samraong" class="krong-samraong">Kriel</option>
                                                <option data-en-title=="Chbar Ampov" value="230"
                                                    data-value="chbar-ampov" data-chained="batheay" class="batheay">
                                                    Chbar Ampov</option>
                                                <option data-en-title=="Kiri Voan" value="486" data-value="kiri-voan"
                                                    data-chained="phnum-sruoch" class="phnum-sruoch">Kiri Voan</option>
                                                <option data-en-title=="Preah Prasab" value="742"
                                                    data-value="preah-prasab" data-chained="khsach-kandal"
                                                    class="khsach-kandal">Preah Prasab</option>
                                                <option data-en-title=="Tuek L'ak Muoy" value="998"
                                                    data-value="tuek-lak-muoy" data-chained="tuol-kouk"
                                                    class="tuol-kouk">Tuek L'ak Muoy</option>
                                                <option data-en-title=="Kampun" value="1510" data-value="kampun"
                                                    data-chained="sesan" class="sesan">Kampun</option>
                                                <option data-en-title=="Samraong" value="1766" data-value="samraong"
                                                    data-chained="krong-samraong" class="krong-samraong">Samraong
                                                </option>
                                                <option data-en-title=="Chealea" value="231" data-value="chealea"
                                                    data-chained="batheay" class="batheay">Chealea</option>
                                                <option data-en-title=="Krang Dei Vay" value="487"
                                                    data-value="krang-dei-vay" data-chained="phnum-sruoch"
                                                    class="phnum-sruoch">Krang Dei Vay</option>
                                                <option data-en-title=="Preaek Ampil" value="743"
                                                    data-value="preaek-ampil" data-chained="khsach-kandal"
                                                    class="khsach-kandal">Preaek Ampil</option>
                                                <option data-en-title=="Tuek L'ak Pir" value="999"
                                                    data-value="tuek-lak-pir" data-chained="tuol-kouk"
                                                    class="tuol-kouk">Tuek L'ak Pir</option>
                                                <option data-en-title=="Boeng Bat Kandaol" value="1255"
                                                    data-value="boeng-bat-kandaol" data-chained="bakan" class="bakan">
                                                    Boeng Bat Kandaol</option>
                                                <option data-en-title=="Kbal Romeas" value="1511"
                                                    data-value="kbal-romeas" data-chained="sesan" class="sesan">Kbal
                                                    Romeas</option>
                                                <option data-en-title=="Ou Smach" value="1767" data-value="ou-smach"
                                                    data-chained="krong-samraong" class="krong-samraong">Ou Smach
                                                </option>
                                                <option data-en-title=="Cheung Prey" value="232"
                                                    data-value="cheung-prey" data-chained="batheay" class="batheay">
                                                    Cheung Prey</option>
                                                <option data-en-title=="Moha Sang" value="488" data-value="moha-sang"
                                                    data-chained="phnum-sruoch" class="phnum-sruoch">Moha Sang</option>
                                                <option data-en-title=="Preaek Luong" value="744"
                                                    data-value="preaek-luong" data-chained="khsach-kandal"
                                                    class="khsach-kandal">Preaek Luong</option>
                                                <option data-en-title=="Tuek L'ak Bei" value="1000"
                                                    data-value="tuek-lak-bei" data-chained="tuol-kouk"
                                                    class="tuol-kouk">Tuek L'ak Bei</option>
                                                <option data-en-title=="Boeng Khnar" value="1256"
                                                    data-value="boeng-khnar" data-chained="bakan" class="bakan">Boeng
                                                    Khnar</option>
                                                <option data-en-title=="Phluk" value="1512" data-value="phluk"
                                                    data-chained="sesan" class="sesan">Phluk</option>
                                                <option data-en-title=="Me Pring" value="233" data-value="me-pring"
                                                    data-chained="batheay" class="batheay">Me Pring</option>
                                                <option data-en-title=="Ou" value="489" data-value="ou"
                                                    data-chained="phnum-sruoch" class="phnum-sruoch">Ou</option>
                                                <option data-en-title=="Preaek Ta Kov" value="745"
                                                    data-value="preaek-ta-kov" data-chained="khsach-kandal"
                                                    class="khsach-kandal">Preaek Ta Kov</option>
                                                <option data-en-title=="Boeng Kak Muoy" value="1001"
                                                    data-value="boeng-kak-muoy" data-chained="tuol-kouk"
                                                    class="tuol-kouk">Boeng Kak Muoy</option>
                                                <option data-en-title=="Khnar Totueng" value="1257"
                                                    data-value="khnar-totueng" data-chained="bakan" class="bakan">Khnar
                                                    Totueng</option>
                                                <option data-en-title=="Samkhuoy" value="1513" data-value="samkhuoy"
                                                    data-chained="sesan" class="sesan">Samkhuoy</option>
                                                <option data-en-title=="Bak Anlung" value="1769" data-value="bak-anlung"
                                                    data-chained="trapeang-prasat" class="trapeang-prasat">Bak Anlung
                                                </option>
                                                <option data-en-title=="Ph'av" value="234" data-value="phav"
                                                    data-chained="batheay" class="batheay">Ph'av</option>
                                                <option data-en-title=="Prey Rumduol" value="490"
                                                    data-value="prey-rumduol" data-chained="phnum-sruoch"
                                                    class="phnum-sruoch">Prey Rumduol</option>
                                                <option data-en-title=="Preaek Ta Meak" value="746"
                                                    data-value="preaek-ta-meak" data-chained="khsach-kandal"
                                                    class="khsach-kandal">Preaek Ta Meak</option>
                                                <option data-en-title=="Boeng Kak Pir" value="1002"
                                                    data-value="boeng-kak-pir" data-chained="tuol-kouk"
                                                    class="tuol-kouk">Boeng Kak Pir</option>
                                                <option data-en-title=="Me Tuek" value="1258" data-value="me-tuek"
                                                    data-chained="bakan" class="bakan">Me Tuek</option>
                                                <option data-en-title=="Sdau" value="1514" data-value="sdau"
                                                    data-chained="sesan" class="sesan">Sdau</option>
                                                <option data-en-title=="Ph'av" value="1770" data-value="phav"
                                                    data-chained="trapeang-prasat" class="trapeang-prasat">Ph'av
                                                </option>
                                                <option data-en-title=="Sambour" value="235" data-value="sambour"
                                                    data-chained="batheay" class="batheay">Sambour</option>
                                                <option data-en-title=="Prey Kmeng" value="491" data-value="prey-kmeng"
                                                    data-chained="phnum-sruoch" class="phnum-sruoch">Prey Kmeng</option>
                                                <option data-en-title=="Puk Ruessei" value="747"
                                                    data-value="puk-ruessei" data-chained="khsach-kandal"
                                                    class="khsach-kandal">Puk Ruessei</option>
                                                <option data-en-title=="Phsar Daeum Kor" value="1003"
                                                    data-value="phsar-daeum-kor" data-chained="tuol-kouk"
                                                    class="tuol-kouk">Phsar Daeum Kor</option>
                                                <option data-en-title=="Ou Ta Paong" value="1259"
                                                    data-value="ou-ta-paong" data-chained="bakan" class="bakan">Ou Ta
                                                    Paong</option>
                                                <option data-en-title=="Srae Kor" value="1515" data-value="srae-kor"
                                                    data-chained="sesan" class="sesan">Srae Kor</option>
                                                <option data-en-title=="Ou Svay" value="1771" data-value="ou-svay"
                                                    data-chained="trapeang-prasat" class="trapeang-prasat">Ou Svay
                                                </option>
                                                <option data-en-title=="Sandaek" value="236" data-value="sandaek"
                                                    data-chained="batheay" class="batheay">Sandaek</option>
                                                <option data-en-title=="Tang Samraong" value="492"
                                                    data-value="tang-samraong" data-chained="phnum-sruoch"
                                                    class="phnum-sruoch">Tang Samraong</option>
                                                <option data-en-title=="Roka Chonlueng" value="748"
                                                    data-value="roka-chonlueng" data-chained="khsach-kandal"
                                                    class="khsach-kandal">Roka Chonlueng</option>
                                                <option data-en-title=="Boeng Salang" value="1004"
                                                    data-value="boeng-salang" data-chained="tuol-kouk"
                                                    class="tuol-kouk">Boeng Salang</option>
                                                <option data-en-title=="Rumlech" value="1260" data-value="rumlech"
                                                    data-chained="bakan" class="bakan">Rumlech</option>
                                                <option data-en-title=="Ta Lat" value="1516" data-value="ta-lat"
                                                    data-chained="sesan" class="sesan">Ta Lat</option>
                                                <option data-en-title=="Preah Pralay" value="1772"
                                                    data-value="preah-pralay" data-chained="trapeang-prasat"
                                                    class="trapeang-prasat">Preah Pralay</option>
                                                <option data-en-title=="Tang Krang" value="237" data-value="tang-krang"
                                                    data-chained="batheay" class="batheay">Tang Krang</option>
                                                <option data-en-title=="Tang Sya" value="493" data-value="tang-sya"
                                                    data-chained="phnum-sruoch" class="phnum-sruoch">Tang Sya</option>
                                                <option data-en-title=="Sanlung" value="749" data-value="sanlung"
                                                    data-chained="khsach-kandal" class="khsach-kandal">Sanlung</option>
                                                <option data-en-title=="Snam Preah" value="1261" data-value="snam-preah"
                                                    data-chained="bakan" class="bakan">Snam Preah</option>
                                                <option data-en-title=="Tumnob Dach" value="1773"
                                                    data-value="tumnob-dach" data-chained="trapeang-prasat"
                                                    class="trapeang-prasat">Tumnob Dach</option>
                                                <option data-en-title=="Tang Krasang" value="238"
                                                    data-value="tang-krasang" data-chained="batheay" class="batheay">
                                                    Tang Krasang</option>
                                                <option data-en-title=="Traeng Trayueng" value="494"
                                                    data-value="traeng-trayueng" data-chained="phnum-sruoch"
                                                    class="phnum-sruoch">Traeng Trayueng</option>
                                                <option data-en-title=="Sithor" value="750" data-value="sithor"
                                                    data-chained="khsach-kandal" class="khsach-kandal">Sithor</option>
                                                <option data-en-title=="Dangkao" value="1006" data-value="dangkao"
                                                    data-chained="dangkao" class="dangkao">Dangkao</option>
                                                <option data-en-title=="Svay Doun Kaev" value="1262"
                                                    data-value="svay-doun-kaev" data-chained="bakan" class="bakan">Svay
                                                    Doun Kaev</option>
                                                <option data-en-title=="Kaoh Preah" value="1518" data-value="kaoh-preah"
                                                    data-chained="siem-bouk" class="siem-bouk">Kaoh Preah</option>
                                                <option data-en-title=="Trapeang Prasat" value="1774"
                                                    data-value="trapeang-prasat" data-chained="trapeang-prasat"
                                                    class="trapeang-prasat">Trapeang Prasat</option>
                                                <option data-en-title=="Trab" value="239" data-value="trab"
                                                    data-chained="batheay" class="batheay">Trab</option>
                                                <option data-en-title=="Svay Chrum" value="751" data-value="svay-chrum"
                                                    data-chained="khsach-kandal" class="khsach-kandal">Svay Chrum
                                                </option>
                                                <option data-en-title=="Pong Tuek" value="1007" data-value="pong-tuek"
                                                    data-chained="dangkao" class="dangkao">Pong Tuek</option>
                                                <option data-en-title=="Ta Lou" value="1263" data-value="ta-lou"
                                                    data-chained="bakan" class="bakan">Ta Lou</option>
                                                <option data-en-title=="Kaoh Sampeay" value="1519"
                                                    data-value="kaoh-sampeay" data-chained="siem-bouk"
                                                    class="siem-bouk">Kaoh Sampeay</option>
                                                <option data-en-title=="Tumnob" value="240" data-value="tumnob"
                                                    data-chained="batheay" class="batheay">Tumnob</option>
                                                <option data-en-title=="Roleang Chak" value="496"
                                                    data-value="roleang-chak" data-chained="samraong-tong"
                                                    class="samraong-tong">Roleang Chak</option>
                                                <option data-en-title=="Svay Romiet" value="752"
                                                    data-value="svay-romiet" data-chained="khsach-kandal"
                                                    class="khsach-kandal">Svay Romiet</option>
                                                <option data-en-title=="Prey Veaeng" value="1008"
                                                    data-value="prey-veaeng" data-chained="dangkao" class="dangkao">Prey
                                                    Veaeng</option>
                                                <option data-en-title=="Trapeang Chong" value="1264"
                                                    data-value="trapeang-chong" data-chained="bakan" class="bakan">
                                                    Trapeang Chong</option>
                                                <option data-en-title=="Kaoh Sralau" value="1520"
                                                    data-value="kaoh-sralau" data-chained="siem-bouk" class="siem-bouk">
                                                    Kaoh Sralau</option>
                                                <option data-en-title=="Angkaol" value="1776" data-value="angkaol"
                                                    data-chained="damnak-changaeur" class="damnak-changaeur">Angkaol
                                                </option>
                                                <option data-en-title=="Kahaeng" value="497" data-value="kahaeng"
                                                    data-chained="samraong-tong" class="samraong-tong">Kahaeng</option>
                                                <option data-en-title=="Ta Aek" value="753" data-value="ta-aek"
                                                    data-chained="khsach-kandal" class="khsach-kandal">Ta Aek</option>
                                                <option data-en-title=="Prey Sa" value="1009" data-value="prey-sa"
                                                    data-chained="dangkao" class="dangkao">Prey Sa</option>
                                                <option data-en-title=="Ou Mreah" value="1521" data-value="ou-mreah"
                                                    data-chained="siem-bouk" class="siem-bouk">Ou Mreah</option>
                                                <option data-en-title=="Ou Krasar" value="1777" data-value="ou-krasar"
                                                    data-chained="damnak-changaeur" class="damnak-changaeur">Ou Krasar
                                                </option>
                                                <option data-en-title=="Bos Khnaor" value="242" data-value="bos-khnaor"
                                                    data-chained="chamkar-leu" class="chamkar-leu">Bos Khnaor</option>
                                                <option data-en-title=="Khtum Krang" value="498"
                                                    data-value="khtum-krang" data-chained="samraong-tong"
                                                    class="samraong-tong">Khtum Krang</option>
                                                <option data-en-title=="Vihear Suork" value="754"
                                                    data-value="vihear-suork" data-chained="khsach-kandal"
                                                    class="khsach-kandal">Vihear Suork</option>
                                                <option data-en-title=="Krang Pongro" value="1010"
                                                    data-value="krang-pongro" data-chained="dangkao" class="dangkao">
                                                    Krang Pongro</option>
                                                <option data-en-title=="Anlong Vil" value="1266" data-value="anlong-vil"
                                                    data-chained="kandieng" class="kandieng">Anlong Vil</option>
                                                <option data-en-title=="Ou Ruessei Kandal" value="1522"
                                                    data-value="ou-ruessei-kandal" data-chained="siem-bouk"
                                                    class="siem-bouk">Ou Ruessei Kandal</option>
                                                <option data-en-title=="Pong Tuek" value="1778" data-value="pong-tuek"
                                                    data-chained="damnak-changaeur" class="damnak-changaeur">Pong Tuek
                                                </option>
                                                <option data-en-title=="Chamkar Andoung" value="243"
                                                    data-value="chamkar-andoung" data-chained="chamkar-leu"
                                                    class="chamkar-leu">Chamkar Andoung</option>
                                                <option data-en-title=="Krang Ampil" value="499"
                                                    data-value="krang-ampil" data-chained="samraong-tong"
                                                    class="samraong-tong">Krang Ampil</option>
                                                <option data-en-title=="Prateah Lang" value="1011"
                                                    data-value="prateah-lang" data-chained="dangkao" class="dangkao">
                                                    Prateah Lang</option>
                                                <option data-en-title=="Kandieng" value="1267" data-value="kandieng"
                                                    data-chained="kandieng" class="kandieng">Kandieng</option>
                                                <option data-en-title=="Siem Bouk" value="1523" data-value="siem-bouk"
                                                    data-chained="siem-bouk" class="siem-bouk">Siem Bouk</option>
                                                <option data-en-title=="Cheyyou" value="244" data-value="cheyyou"
                                                    data-chained="chamkar-leu" class="chamkar-leu">Cheyyou</option>
                                                <option data-en-title=="Pneay" value="500" data-value="pneay"
                                                    data-chained="samraong-tong" class="samraong-tong">Pneay</option>
                                                <option data-en-title=="Chheu Khmau" value="756"
                                                    data-value="chheu-khmau" data-chained="kaoh-thum" class="kaoh-thum">
                                                    Chheu Khmau</option>
                                                <option data-en-title=="Sak Sampov" value="1012" data-value="sak-sampov"
                                                    data-chained="dangkao" class="dangkao">Sak Sampov</option>
                                                <option data-en-title=="Kanhchor" value="1268" data-value="kanhchor"
                                                    data-chained="kandieng" class="kandieng">Kanhchor</option>
                                                <option data-en-title=="Srae Krasang" value="1524"
                                                    data-value="srae-krasang" data-chained="siem-bouk"
                                                    class="siem-bouk">Srae Krasang</option>
                                                <option data-en-title=="Kaeb" value="1780" data-value="kaeb"
                                                    data-chained="krong-kaeb" class="krong-kaeb">Kaeb</option>
                                                <option data-en-title=="Lvea Leu" value="245" data-value="lvea-leu"
                                                    data-chained="chamkar-leu" class="chamkar-leu">Lvea Leu</option>
                                                <option data-en-title=="Roleang Kreul" value="501"
                                                    data-value="roleang-kreul" data-chained="samraong-tong"
                                                    class="samraong-tong">Roleang Kreul</option>
                                                <option data-en-title=="Chrouy Ta Kaev" value="757"
                                                    data-value="chrouy-ta-kaev" data-chained="kaoh-thum"
                                                    class="kaoh-thum">Chrouy Ta Kaev</option>
                                                <option data-en-title=="Cheung Aek" value="1013" data-value="cheung-aek"
                                                    data-chained="dangkao" class="dangkao">Cheung Aek</option>
                                                <option data-en-title=="Reang Til" value="1269" data-value="reang-til"
                                                    data-chained="kandieng" class="kandieng">Reang Til</option>
                                                <option data-en-title=="Prey Thum" value="1781" data-value="prey-thum"
                                                    data-chained="krong-kaeb" class="krong-kaeb">Prey Thum</option>
                                                <option data-en-title=="Spueu" value="246" data-value="spueu"
                                                    data-chained="chamkar-leu" class="chamkar-leu">Spueu</option>
                                                <option data-en-title=="Samraong Tong" value="502"
                                                    data-value="samraong-tong" data-chained="samraong-tong"
                                                    class="samraong-tong">Samraong Tong</option>
                                                <option data-en-title=="Kampong Kong" value="758"
                                                    data-value="kampong-kong" data-chained="kaoh-thum"
                                                    class="kaoh-thum">Kampong Kong</option>
                                                <option data-en-title=="Kong Noy" value="1014" data-value="kong-noy"
                                                    data-chained="dangkao" class="dangkao">Kong Noy</option>
                                                <option data-en-title=="Srae Sdok" value="1270" data-value="srae-sdok"
                                                    data-chained="kandieng" class="kandieng">Srae Sdok</option>
                                                <option data-en-title=="Preaek Meas" value="1526"
                                                    data-value="preaek-meas" data-chained="siem-pang" class="siem-pang">
                                                    Preaek Meas</option>
                                                <option data-en-title=="Svay Teab" value="247" data-value="svay-teab"
                                                    data-chained="chamkar-leu" class="chamkar-leu">Svay Teab</option>
                                                <option data-en-title=="Sambour" value="503" data-value="sambour"
                                                    data-chained="samraong-tong" class="samraong-tong">Sambour</option>
                                                <option data-en-title=="Kaoh Thum Ka" value="759"
                                                    data-value="kaoh-thum-ka" data-chained="kaoh-thum"
                                                    class="kaoh-thum">Kaoh Thum Ka</option>
                                                <option data-en-title=="Preaek Kampis" value="1015"
                                                    data-value="preaek-kampis" data-chained="dangkao" class="dangkao">
                                                    Preaek Kampis</option>
                                                <option data-en-title=="Svay Luong" value="1271" data-value="svay-luong"
                                                    data-chained="kandieng" class="kandieng">Svay Luong</option>
                                                <option data-en-title=="Sekong" value="1527" data-value="sekong"
                                                    data-chained="siem-pang" class="siem-pang">Sekong</option>
                                                <option data-en-title=="Pailin" value="1783" data-value="pailin"
                                                    data-chained="krong-pailin" class="krong-pailin">Pailin</option>
                                                <option data-en-title=="Ta Ong" value="248" data-value="ta-ong"
                                                    data-chained="chamkar-leu" class="chamkar-leu">Ta Ong</option>
                                                <option data-en-title=="Saen Dei" value="504" data-value="saen-dei"
                                                    data-chained="samraong-tong" class="samraong-tong">Saen Dei</option>
                                                <option data-en-title=="Kaoh Thum Kha" value="760"
                                                    data-value="kaoh-thum-kha" data-chained="kaoh-thum"
                                                    class="kaoh-thum">Kaoh Thum Kha</option>
                                                <option data-en-title=="Roluos" value="1016" data-value="roluos"
                                                    data-chained="dangkao" class="dangkao">Roluos</option>
                                                <option data-en-title=="Sya" value="1272" data-value="sya"
                                                    data-chained="kandieng" class="kandieng">Sya</option>
                                                <option data-en-title=="Santepheap" value="1528" data-value="santepheap"
                                                    data-chained="siem-pang" class="siem-pang">Santepheap</option>
                                                <option data-en-title=="Ou Tavau" value="1784" data-value="ou-tavau"
                                                    data-chained="krong-pailin" class="krong-pailin">Ou Tavau</option>
                                                <option data-en-title=="Ta Prok" value="249" data-value="ta-prok"
                                                    data-chained="chamkar-leu" class="chamkar-leu">Ta Prok</option>
                                                <option data-en-title=="Skuh" value="505" data-value="skuh"
                                                    data-chained="samraong-tong" class="samraong-tong">Skuh</option>
                                                <option data-en-title=="Leuk Daek" value="761" data-value="leuk-daek"
                                                    data-chained="kaoh-thum" class="kaoh-thum">Leuk Daek</option>
                                                <option data-en-title=="Spean Thma" value="1017" data-value="spean-thma"
                                                    data-chained="dangkao" class="dangkao">Spean Thma</option>
                                                <option data-en-title=="Veal" value="1273" data-value="veal"
                                                    data-chained="kandieng" class="kandieng">Veal</option>
                                                <option data-en-title=="Srae Sambour" value="1529"
                                                    data-value="srae-sambour" data-chained="siem-pang"
                                                    class="siem-pang">Srae Sambour</option>
                                                <option data-en-title=="Tuol Lvea" value="1785" data-value="tuol-lvea"
                                                    data-chained="krong-pailin" class="krong-pailin">Tuol Lvea</option>
                                                <option data-en-title=="Tang Krouch" value="506"
                                                    data-value="tang-krouch" data-chained="samraong-tong"
                                                    class="samraong-tong">Tang Krouch</option>
                                                <option data-en-title=="Pouthi Ban" value="762" data-value="pouthi-ban"
                                                    data-chained="kaoh-thum" class="kaoh-thum">Pouthi Ban</option>
                                                <option data-en-title=="Tien" value="1018" data-value="tien"
                                                    data-chained="dangkao" class="dangkao">Tien</option>
                                                <option data-en-title=="Kaoh Chum" value="1274" data-value="kaoh-chum"
                                                    data-chained="kandieng" class="kandieng">Kaoh Chum</option>
                                                <option data-en-title=="Thma Kaev" value="1530" data-value="thma-kaev"
                                                    data-chained="siem-pang" class="siem-pang">Thma Kaev</option>
                                                <option data-en-title=="Ba Yakha" value="1786" data-value="ba-yakha"
                                                    data-chained="krong-pailin" class="krong-pailin">Ba Yakha</option>
                                                <option data-en-title=="Khnaor Dambang" value="251"
                                                    data-value="khnaor-dambang" data-chained="cheung-prey"
                                                    class="cheung-prey">Khnaor Dambang</option>
                                                <option data-en-title=="Thommoda Ar" value="507"
                                                    data-value="thommoda-ar" data-chained="samraong-tong"
                                                    class="samraong-tong">Thommoda Ar</option>
                                                <option data-en-title=="Preaek Chrey" value="763"
                                                    data-value="preaek-chrey" data-chained="kaoh-thum"
                                                    class="kaoh-thum">Preaek Chrey</option>
                                                <option data-en-title=="Kouk Rovieng" value="252"
                                                    data-value="kouk-rovieng" data-chained="cheung-prey"
                                                    class="cheung-prey">Kouk Rovieng</option>
                                                <option data-en-title=="Trapeang Kong" value="508"
                                                    data-value="trapeang-kong" data-chained="samraong-tong"
                                                    class="samraong-tong">Trapeang Kong</option>
                                                <option data-en-title=="Preaek Sdei" value="764"
                                                    data-value="preaek-sdei" data-chained="kaoh-thum" class="kaoh-thum">
                                                    Preaek Sdei</option>
                                                <option data-en-title=="Stueng Mean Chey" value="1020"
                                                    data-value="stueng-mean-chey" data-chained="mean-chey"
                                                    class="mean-chey">Stueng Mean Chey</option>
                                                <option data-en-title=="Anlong Tnaot" value="1276"
                                                    data-value="anlong-tnaot" data-chained="krakor" class="krakor">
                                                    Anlong Tnaot</option>
                                                <option data-en-title=="Stueng Traeng" value="1532"
                                                    data-value="stueng-traeng" data-chained="krong-stueng-traeng"
                                                    class="krong-stueng-traeng">Stueng Traeng</option>
                                                <option data-en-title=="Sala Krau" value="1788" data-value="sala-krau"
                                                    data-chained="sala-krau" class="sala-krau">Sala Krau</option>
                                                <option data-en-title=="Phdau Chum" value="253" data-value="phdau-chum"
                                                    data-chained="cheung-prey" class="cheung-prey">Phdau Chum</option>
                                                <option data-en-title=="Tumpoar Meas" value="509"
                                                    data-value="tumpoar-meas" data-chained="samraong-tong"
                                                    class="samraong-tong">Tumpoar Meas</option>
                                                <option data-en-title=="Preaek Thmei" value="765"
                                                    data-value="preaek-thmei" data-chained="kaoh-thum"
                                                    class="kaoh-thum">Preaek Thmei</option>
                                                <option data-en-title=="Boeng Tumpun" value="1021"
                                                    data-value="boeng-tumpun" data-chained="mean-chey"
                                                    class="mean-chey">Boeng Tumpun</option>
                                                <option data-en-title=="Ansa Chambak" value="1277"
                                                    data-value="ansa-chambak" data-chained="krakor" class="krakor">Ansa
                                                    Chambak</option>
                                                <option data-en-title=="Sarh Ruessei" value="1533"
                                                    data-value="sarh-ruessei" data-chained="krong-stueng-traeng"
                                                    class="krong-stueng-traeng">Sarh Ruessei</option>
                                                <option data-en-title=="Stueng Trang" value="1789"
                                                    data-value="stueng-trang" data-chained="sala-krau"
                                                    class="sala-krau">Stueng Trang</option>
                                                <option data-en-title=="Prey Char" value="254" data-value="prey-char"
                                                    data-chained="cheung-prey" class="cheung-prey">Prey Char</option>
                                                <option data-en-title=="Voa Sa" value="510" data-value="voa-sa"
                                                    data-chained="samraong-tong" class="samraong-tong">Voa Sa</option>
                                                <option data-en-title=="Sampov Lun" value="766" data-value="sampov-lun"
                                                    data-chained="kaoh-thum" class="kaoh-thum">Sampov Lun</option>
                                                <option data-en-title=="Chak Angrae Leu" value="1022"
                                                    data-value="chak-angrae-leu" data-chained="mean-chey"
                                                    class="mean-chey">Chak Angrae Leu</option>
                                                <option data-en-title=="Boeng Kantuot" value="1278"
                                                    data-value="boeng-kantuot" data-chained="krakor" class="krakor">
                                                    Boeng Kantuot</option>
                                                <option data-en-title=="Preah Bat" value="1534" data-value="preah-bat"
                                                    data-chained="krong-stueng-traeng" class="krong-stueng-traeng">Preah
                                                    Bat</option>
                                                <option data-en-title=="Stueng Kach" value="1790"
                                                    data-value="stueng-kach" data-chained="sala-krau" class="sala-krau">
                                                    Stueng Kach</option>
                                                <option data-en-title=="Pring Chrum" value="255"
                                                    data-value="pring-chrum" data-chained="cheung-prey"
                                                    class="cheung-prey">Pring Chrum</option>
                                                <option data-en-title=="Chak Angrae Kraom" value="1023"
                                                    data-value="chak-angrae-kraom" data-chained="mean-chey"
                                                    class="mean-chey">Chak Angrae Kraom</option>
                                                <option data-en-title=="Chheu Tom" value="1279" data-value="chheu-tom"
                                                    data-chained="krakor" class="krakor">Chheu Tom</option>
                                                <option data-en-title=="Sameakki" value="1535" data-value="sameakki"
                                                    data-chained="krong-stueng-traeng" class="krong-stueng-traeng">
                                                    Sameakki</option>
                                                <option data-en-title=="Ou Andoung" value="1791" data-value="ou-andoung"
                                                    data-chained="sala-krau" class="sala-krau">Ou Andoung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        $('document').ready(function(){

                                                                                           $("#district").chained("#province");

                                                                                           $("#commune").chained("#district");

                                        });
                                    </script>
                                    <div class="form-group">
                                        <label for="address" class="col control-label">Location Details<i
                                                class="red">*</i></label>
                                        <div class="col col-8 form-input">
                                            <textarea name="address" id="address" class="form-control"
                                                required>aaa</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="map_view col-12">
                                        <div class="map_box " id="ad_map">
                                            <div id="map"></div>
                                            <a id="find_location" href="#"><span class="icon icon-my-location"></span>
                                                Find My Location</a>
                                            <span id="map_loading" class="loading"></span>
                                        </div>
                                        <input type="hidden" id="map_lat" name="map_lat" value="11.54487290000000">
                                        <input type="hidden" id="map_lng" name="map_lng" value="104.89216680000001">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col col-8">
                                    <label class="save_contact">
                                        <div class="custom-control custom-checkbox ">
                                            <input type="checkbox" class="custom-control-input" id="save_contact"
                                                value="1" name="save_contact">
                                            <div class="custom-control-label" for="save_contact">Save contact
                                                information (<i>Name, Phone, Location, Address</i>) for the next ads.
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group submit_box">
                                <div class="col-sm-offset-2 col col-3 btn_submit">
                                    <input type="submit" name="save_ad" value="Submit"
                                        class="btn btn-lg btnsavead btn-warning btn-block" />
                                </div>
                            </div>
                        </form>
                        <div class="posting_rule">
                            <span class="rule_title"><i class="icon-warning"></i> Posting Rule</span>
                            <ul>
                                <li>No posting of same ad or similar ad to multiple categories and inappropriate
                                    category</li>
                                <li>No posting of false, inaccurate, misleading, defamatory content</li>
                                <li>You must honestly and accurately describe the item for which you are posting an ad.
                                </li>
                                <li>khmer24.com assumes no responsibility for the accuracy of any advertisements posted
                                    on the site</li>
                            </ul>
                            <div>
                                <a target="_blank" href="https://www.khmer24.com/en/posting-rule.html">More rules...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" value="https://www.khmer24.com/" id="base_url" />
            <input type="hidden" value="https://www.khmer24.com/khmer24-crm-18/template/" id="template_path" />
            <script type="text/javascript">
                $(document).ready(function(){
                 var csrf = $('#csrf').val();
                 var counter=1;
                 var image=[];
                 var limit = 8;
                 var max_size = 10;
                 var base_url = document.getElementById('base_url').value;
                 var maxRes = 1000000;
                 var multi_uploader = new plupload.Uploader({
                     runtimes : 'html5,flash,silverlight,html4',
                     browse_button: ["browse-1","browse-2","browse-3","browse-4","browse-5","browse-6","browse-7","browse-8"],
                     url: base_url+'upload/do_upload.html',
                     max_file_size : max_size+'mb',
                     unique_names : true,
                     chunk_size: '1mb',
                     resize : {width : 1500, height : 1400, quality : 90, crop: false},
                     filters : {
                         mime_types :[
                         {title : "Image files", extensions : "jpg,gif,png,jpeg"}
                         ],
                         check_image_size: 100
                     },
                     drop_element : 'multi-upload',
                     flash_swf_url : 'https://www.khmer24.com/khmer24-crm-18/template/plugin/plupload-2.1.8/Moxie.swf',
                     silverlight_xap_url : 'https://www.khmer24.com/khmer24-crm-18/template/plugin/plupload-2.1.8/Moxie.xap'
                 });

                 multi_uploader.init();

                 multi_uploader.bind('FilesAdded', function(up, files) {

                     $('#multi-upload').removeClass('drag-over');
                     var i = counter;
                     var j = 1;
                     plupload.each(files, function(file) {
                         if(i>limit) {
                             multi_uploader.files.splice(j-1);
                         } else {
                             for (k = j; k <= limit; k++) {
                                 if( image['item-'+k] == undefined || image['item-'+k]=='' ) {
                                     image['item-'+k] = 'loading';
                                     $('#item-'+k).append('<div class="loading"></div>');
                                     $('#item-'+k).find('a.btn-browse').hide();
                                     break;
                                 }
                             }
                         }
                         i++;
                         j++;
                     });
                     if(counter>limit) {
                         $('#console').append('<div class="error alert alert-danger">Cannot upload more image. <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                         multi_uploader.stop();
                     } else {
                         multi_uploader.start();
                     }

                 });

                 multi_uploader.bind('BeforeUpload', function (up, file) {
                     up.settings.multipart_params = {'csrf_test_name': csrf}
                 });

                 multi_uploader.bind('UploadProgress', function(up, file) {
                     $('#multi-upload').removeClass('drag-over');
                     for (k = 1; k <= limit; k++) {
                         if(image['item-'+k]== undefined || image['item-'+k]=='' || image['item-'+k]=='loading') {
                             if($('#item-'+k).find('div.loading').length == 0) {
                                 $('#item-'+k).append('<div class="loading"></div>');
                                 $('#item-'+k).find('a.btn-browse').hide();
                             }
                             if($('#item-'+k).find('div.upload_percent').length != 0) {
                                 $('#item-'+k).find('div.percent').css( "width", file.percent+'%');
                             } else {
                                 $('#item-'+k).append('<div class="upload_percent"><div class="percent" style="width:'+file.percent+'%"></div></div>');
                             }
                             break;
                         }
                     }


                 });

                 multi_uploader.bind('Error', function(up, err) {
                     $('#multi-upload').removeClass('drag-over');
                     var f_size = (err.file.origSize/1024)/1024;
                     var message = '';
                     if(err.message) {
                         if(err.file.type != "image/png" && err.file.type != "image/jpg" && err.file.type != "image/jpeg" && err.file.type != "image/gif") {
                             message = 'The <strong>'+err.file.name+'</strong> wrong extension.';
                         } else {
                             message = err.message;
                         }
                         $('#console').append('<div class="error alert alert-danger">'+message+' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                     }
                     multi_uploader.refresh();

                 });

                 multi_uploader.bind('UploadComplete', function(upldr, file) {
                     multi_uploader.splice();
                     $('.list-image').find('.upload_percent').remove();
                     $('.list-image').find('.loading').remove();
                     for (k = 1; k <= limit; k++) {
                         if(image['item-'+k] == 'loading') {
                             image['item-'+k] = '';
                         }
                         if(image['item-'+k] == undefined || image['item-'+k] == '') {
                             $('body').find('div#item-'+k).find('a.btn-browse').show();
                         }
                     }

                     multi_uploader.refresh();

                 });

                 multi_uploader.bind('FileUploaded', function(upldr, file, object) {
                     var myData;
                     try {
                         myData = eval(object.response);
                     } catch(err) {
                         myData = eval('(' + object.response + ')');
                     }
                     if(myData.status=='success') {

                         for (k = 1; k <= limit; k++) {
                             if(image['item-'+k]==undefined || image['item-'+k]=='loading' || image['item-'+k]=='') {
                                 $('#item-'+k).append('<div class="img"><a href="javascript:;" class="delete remove" data-img="'+myData.image+'">Delete</a><a href="javascript:;" class="image_rotate" data-img="'+myData.image+'">Rotate</a><div class="img-view"><img class="img-contain" src="'+base_url+'tmp/'+myData.thumb+'"><input name="pl_file['+k+']" type="hidden" value="'+myData.image+'" style="display:none"></div></div>');
                                 $('#item-'+k).find('.loading').remove();
                                 $('#item-'+k).find('.upload_percent').remove();
                                 image['item-'+k] = myData.image;
                                 break;
                             }
                         }

                         if(counter>=limit) {
                             multi_uploader.disableBrowse(true);
                             multi_uploader.stop();
                             multi_uploader.splice();
                         }
                         counter++;
                     } else {
                         $('#console').append('<div class="error alert alert-danger">'+myData.info+' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                         multi_uploader.splice();
                         for (k = 1; k <= limit; k++) {
                             if(image['item-'+k] == undefined || image['item-'+k] == '' ) {
                                 $('body').find('div#item-'+k).find('a.btn-browse').show();
                             }
                         }
                     }
                     $('#multi-upload').removeClass('drag-over');
                     $('#current_uploads').html(counter-1);
                     multi_uploader.refresh();
                 });

                 plupload.addFileFilter('check_image_size', function(minRes, file, cb) {

                     var self = this, img = new o.Image();

                     function finalize(result) {

                         var msg = "Please upload image at less "+minRes+"px width and "+minRes+"px height.";
                         if(img.width > 6500 || img.height > 6500) {
                             msg = "Image <strong>"+img.name+"</strong> too big.";
                         }

                         // cleanup
                         img.destroy();
                         img = null;

                         // if rule has been violated in one way or another, trigger an error
                         if (!result) {
                             self.trigger('Error', {
                                 code : plupload.IMAGE_DIMENSIONS_ERROR,
                                 message : msg,
                                 file : file
                             });
                         }

                         cb(result);

                     }


                     if(file.type!="image/gif") {
                         img.onload = function() {
                         // check if resolution cap is not exceeded
                         finalize((img.width > minRes && img.height > minRes) && (img.width < 6500 && img.height < 6500));
                     };

                     img.onerror = function() {
                         finalize(false);
                     };

                     img.load(file.getSource());
                 } else {
                     finalize(1);
                 }
             });

                 $('body').on('click','.remove',function(e){
                     e.preventDefault();
                     var btn = $(this);
                     var btn_id = btn.closest('div.item').attr('id');
                     var img = $(this).attr('data-img');
                     $('#console').html('');

                     $('#'+btn_id).find('div.img').remove();
                     $('#'+btn_id).find('div.loading').remove();
                     $('#'+btn_id).find('div.upload_percent').remove();
                     $('#'+btn_id).find('a.btn-browse').show();

                     if(img) {
                         image[btn_id] = '';
                         counter--;
                         if(counter<=limit) {
                             multi_uploader.disableBrowse(false);
                         }

                         $.post(base_url+'upload/delete-image.html',{'image':img, 'csrf_test_name':csrf},function(data){
                             if(data.csrf) {
                                 set_csrf(data.csrf);
                             }
                         });
                     }

                     for (k = 1; k <= limit; k++) {

                         if(image['item-'+k] == undefined || image['item-'+k]=='') {
                             $('#item-'+k).find('a.btn-browse').show();
                         } else {
                             // j++;
                         }
                     }
                     $('#current_uploads').html(counter-1);
                     multi_uploader.refresh();
                 });


                 $('body').on('click','.remove_uploaded',function(e){
                     e.preventDefault();
                     var btn = $(this);
                     var btn_id = btn.closest('div.item').attr('id');
                     var img = $(this).attr('data-img');
                     var id = btn.attr('data-ad');
                     if(img) {

                         $('#'+btn_id).find('div.img').remove();
                         $('#'+btn_id).find('div.loading').remove();
                         $('#'+btn_id).find('div.upload_percent').remove();
                         $('#'+btn_id).find('a.btn-browse').show();
                         image[btn_id] = '';
                         counter--;
                         if(counter<=limit) {
                             multi_uploader.disableBrowse(false);
                         }
                         multi_uploader.refresh();
                     }
                 });


                 $('body').on('click','.image_rotate',function(e){
                     e.preventDefault();
                     var btn = $(this);
                     var btn_id = btn.closest('div.item').attr('id');
                     var img = $(this).attr('data-img');
                     btn.closest('div.item').find('div.img-view').hide();
                     btn.closest('div.item').find('a.image_rotate').hide();
                     btn.closest('div.item').find('a.remove').hide();
                     btn.closest('div.item').append('<div class="loading"></div>');
                     $.post(base_url+'upload/image-rotate.html',{'image':img, 'csrf_test_name':csrf},function(data){
                         btn.closest('div.item').find('div.img-view').show();
                         btn.closest('div.item').find('a.image_rotate').show();
                         btn.closest('div.item').find('a.remove').show();
                         if(data.status=='success') {
                             var d = new Date();
                             $('#'+btn_id).find('img').attr('src',data.thumb+"?"+d.getTime());
                         } else {
                             $('#console').append('<div class="error alert alert-danger">'+data.in+'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
                         }
                         $('#'+btn_id).find('div.loading').remove();
                         if(data.csrf) {
                             set_csrf(data.csrf);
                         }
                     },'json');
                 });

                 $('body').on('click','#console .remove',function(e){
                     var msg = $(this);
                     msg.closest('div.error').slideUp(function(){
                         msg.closest('div.error').remove();
                     });
                 });

                 var timer;
                 $('#multi-upload').bind('dragover', function(){
                     $(this).addClass('drag-over');
                     $('#multi-upload').find('div.error').remove();
                 });

                 $('#multi-upload').bind('dragleave mouseleave', function(){
                     var t = 300;
                     clearTimeout(timer);
                     timer = setTimeout( function() { removeDragDrop(); },t);
                 });

                 function removeDragDrop() {
                     $('#multi-upload').removeClass('drag-over');
                 }

                 function set_csrf(csrf) {
                     csrf = csrf;
                     $('input[name="csrf_test_name"]').val(csrf);
                 }   $('#csrf').val(csrf);

                 function check_file() {
                     $('input.pl_file_uploaded').each(function(index){
                         image['item-'+(index+1)] = $(this).val();
                     });
                     counter = $('input.pl_file_uploaded').length+1;
                 }
                 check_file();

                 $('.btn-close-modal').click(function(e){
                     e.preventDefault();
                     $('#account-question').modal('hide');
                 });




         $(".number").keypress(function(evt) {
                 if (evt.keyCode != 8) {
                     var theEvent = evt || window.event;
                     var key = theEvent.keyCode || theEvent.which;
                     key = String.fromCharCode(key);
                     var regex = /[0-9]|\./;
                     if (!regex.test(key)) {
                         theEvent.returnValue = false;
                         if (theEvent.preventDefault)
                             theEvent.preventDefault();
                     }
                 }
             });
             $('.phone a').click(function(e) {
                 e.preventDefault();
                 // $(this).closest('div').addClass('d-none');
                 // $(this).closest('div').find('input').val('');
                 if($(this).attr('data-id') == 'add') {
                     if($( "body" ).find('div.phone-2').hasClass( "d-none" )) {
                         $('.phone-2').removeClass('d-none');
                     } else {
                         $('.phone-3').removeClass('d-none');
                         $('a.add_phone').addClass('d-none');
                     }
                 } else {
                     if ($(this).attr('data-id') == 'phone-2') {
                         if($('input[name="phone-3"]').val()) {
                             $('input[name="phone-2"]').val($('input[name="phone-3"]').val());
                             $('input[name="phone-3"]').val('');
                         } else {
                             if($('input[name="phone-2"]').val()) {
                                 $('input[name="phone-2"]').val('');
                             } else {
                                 if(!$('input[name="phone-2"]').val()) {
                                     $('.phone-2').addClass('d-none');
                                 }
                                 $('.phone-3').addClass('d-none');
                                 $('a.add_phone').removeClass('d-none');
                             }

                         }
                     }

                     if ($(this).attr('data-id') == 'phone-3') {
                         if($('input[name="phone-3"]').val()) {
                             $('input[name="phone-3"]').val('');
                         } else {
                             $('a.add_phone').removeClass('d-none');
                             $('.phone-3').addClass('d-none');
                             $('input[name="phone-3"]').val('');
                         }
                     }
                 }
             });
             $('.phone input').on('keypress keyup focus change', function() {
                 if ($(this).val()) {
                     var input_name = $(this).attr('name');
                     if (input_name == 'phone-1') {
                         $('.phone-2').removeClass('d-none');
                     }
                     if (input_name == 'phone-2') {
                         $('.phone-3').removeClass('d-none');
                     }
                 }
             });






             });



            </script>
        </div>
    </section>
    <a href="#totop" id="totop"><i class="icon-up"></i></a>
    <footer>
        <div class="my-container">
            <div class="row">
                <div class="col">
                    <h5>Follow Khmer24</h5>
                    <ul class="list-unstyled has-icon">
                        <li><a href="https://khmer24.page.link/facebook" target="_blank" rel="nofollow"><span
                                    class="icon icon-facebook"></span> Facebook</a></li>
                        <li><a href="https://khmer24.page.link/youtube" target="_blank" rel="nofollow"><span
                                    class="icon icon-youtube"></span> YouTube</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Customer Service</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.khmer24.com/en/contact.html" title="Contact Us">Contact Us</a></li>
                        <li><a href="https://www.khmer24.com/en/membership.html">Membership</a></li>
                        <li><a href="https://www.khmer24.com/en/promote-ad.html">Promote Ad</a></li>
                        <li><a href="https://www.khmer24.com/en/privacy-policy.html" title="Privacy Policy">Private
                                Policy</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Useful Information</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.khmer24.com/en/safety-tips.html">Safety Tip</a></li>
                        <li><a href="https://www.khmer24.com/en/posting-rule.html">Ad Posting Rule</a></li>
                    </ul>
                </div>
                <div class="col">
                    <h5>Download khmer24 app for FREE</h5>
                    <div class="row app-link">
                        <div class="col-6 text-right">
                            <a href="https://khmer24.page.link/app" target="_blank" rel="nofollow">
                                <img class="img-fluid icon-qr"
                                    src="https://www.khmer24.com/khmer24-crm-18/template/img/khmer24-qr-code.png">
                            </a>
                        </div>
                        <div class="col-6 text-left">
                            <div class="mt-2">
                                <a href="https://khmer24.page.link/ios" target="_blank" rel="nofollow">
                                    <img class="img-fluid icon-app"
                                        src="https://www.khmer24.com/khmer24-crm-18/template/img/appstore.png">
                                </a>
                            </div>
                            <div class="mt-3">
                                <a href="https://khmer24.page.link/android" target="_blank" rel="nofollow">
                                    <img class="img-fluid icon-app"
                                        src="https://www.khmer24.com/khmer24-crm-18/template/img/playstore.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="copy-right text-center p-2 m-0">Copyright ©2015 <a href="https://www.khmer24.com/en/">KHMER24</a>
            (Cambodia). All rights reserved.</p>
    </footer>
    {{-- <div class="fix-feedback">
 <a href="https://www.khmer24.com/en/feedback" class="btn btn-primary btn-sm">Feedback</a>
 </div> --}}
</body>

</html>
