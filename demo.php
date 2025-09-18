<!--?php
   if (isset($_GET['utm_source'])) { $utm_source = $_GET['utm_source'];}
   else { $utm_source = ''; }
   
   if (isset($_GET['utm_medium'])) { $utm_medium = $_GET['utm_medium']; }
   else { $utm_medium = ''; }
   
   if (isset($_GET['utm_campaign'])) { $utm_campaign = $_GET['utm_campaign']; }
   else { $utm_campaign = ''; }
   
   if (isset($_GET['utm_term'])) { $utm_term = $_GET['utm_term']; }
   else { $utm_term = ''; }
   
   if (isset($_GET['keyword'])) { $keyword = $_GET['keyword']; }
   else { $keyword = ''; }
   
   if (isset($_GET['matchtype'])) { $matchtype = $_GET['matchtype']; }
   else { $matchtype = ''; }
   
   if (isset($_GET['device'])) { $device = $_GET['device']; }
   else { $device = ''; }
   
   if (isset($_GET['SRD_val'])) { $SRD_val = $_GET['SRD_val']; }
   else { $SRD_val = ''; }
   
   // if (isset($_GET['fullurl'])) { $fullurl = $_GET['fullurl']; }
   // else { $fullurl = ''; }
   
   
   $fullurl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
   
   ?--><!DOCTYPE html><html lang="en"><head>
      <title>PRANATHI KIARA</title>
      <!--?php include 'includes/toplinks.php' ?-->
<style>
	.ul-home li{
	list-style: disc;
	list-style-position: inside;
	}
	.project-video{
	height: 545px;
	}
	@media (max-width: 786px){
	.project-video{
	height: 300px;
	}
	}
	/*.service-info-2 h3 {*/
	/*font-size: 22px;*/
	/*position: relative;*/
	/*margin: 0 0 10px 0;*/
	/*font-weight: 500;*/
	/*text-transform: capitalize;*/
	/*}*/
	.service-info-2 h3 {
	font-size: 16px;
	position: relative;
	margin: 0 0 10px 0;
	font-weight: 600;
	text-transform: capitalize;
	}
	
	
	
	.banner .carousel-control-next, .carousel-control-prev{
	left: 50px !important;
	}
	.list-group-item {
	background-color: #deb055;
	color: white;
	font-weight: 600;
	text-transform: capitalize;
	}
	label {
	text-transform: capitalize;
	}
 /* styling for arrows on the banner starts here*/

.carousel-control-next, .carousel-control-prev {
    position: absolute;
    top: 50%; 
    transform: translateY(-50%); 
    width: 65px; 
    height: 65px;
    line-height: 65px;
    z-index: 100;
    background: rgba(21, 21, 21, 0.2); 
    color: #fff;
    opacity: 1;
    border-radius: 50%; 
    text-align: center; 
}
.carousel-control-prev {
    left: 10px; 
}
.carousel-control-next {
    right: 10px; 
}
.carousel-control-prev,
.carousel-control-next {
    opacity: 1 !important;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    width: 40px;
    height: 40px;
}
/*for select fields dropdown input fields*/
select {
    -webkit-appearance: listbox!important;
}
/* styling for arrows on the banner ends here*/
      </style>
      <!-- Google tag (gtag.js) --> <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-HBNZR88WEL"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-HBNZR88WEL'); </script>
   </head>
   <body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M6VV7ZC"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      <div class="wrapper">
         <!--?php include 'includes/header.php' ?-->
         <div id="sliderSection" class="carousel slide mt-3" data-bs-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active" data-bs-interval="4000">
                  <picture><source srcset="img/320w/mv-banner1_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="img/640w/mv-banner1_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="img/1024w/mv-banner1_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="img/1920w/mv-banner1_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block d-md-none" src="img/mv-banner1.webp" style="margin-top: 70px;" alt="" loading="lazy" decoding="async"></picture>
                  <picture><source srcset="img/320w/banner1_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="img/640w/banner1_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="img/1024w/banner1_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="img/1920w/banner1_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-none d-md-block" src="img/banner1.webp" style="margin-top: 50px;" alt="" loading="lazy" decoding="async"></picture>
               </div>
               <div class="carousel-item" data-bs-interval="4000">
                  <picture><source srcset="img/320w/mv-banner2_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="img/640w/mv-banner2_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="img/1024w/mv-banner2_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="img/1920w/mv-banner2_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block d-md-none" src="img/mv-banner2.webp" style="margin-top: 70px;" alt="" loading="lazy" decoding="async"></picture>
                  <picture><source srcset="img/320w/banner2_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="img/640w/banner2_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="img/1024w/banner2_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="img/1920w/banner2_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-none d-md-block" src="img/banner2.webp" style="margin-top: 50px;" alt="" loading="lazy" decoding="async"></picture>
               </div>
               <div class="carousel-item" data-bs-interval="4000">
                  <picture><source srcset="img/320w/banner2-mobile_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="img/640w/banner2-mobile_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="img/1024w/banner2-mobile_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="img/1920w/banner2-mobile_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block d-md-none" src="img/banner2-mobile.webp" style="margin-top: 70px;" alt="" loading="lazy" decoding="async"></picture>
                  <picture><source srcset="img/320w/banner2-web_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="img/640w/banner2-web_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="img/1024w/banner2-web_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="img/1920w/banner2-web_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-none d-md-block" src="img/banner2-web.webp" style="margin-top: 50px;" alt="" loading="lazy" decoding="async"></picture>
               </div>
            </div>
            <button class="carousel-control-next" type="button" data-bs-target="#sliderSection" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
            <button class="carousel-control-prev" type="button" data-bs-target="#sliderSection" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
         </div>



         <section class="mt-5 ">
            <div class="container">
               
               <div class="row">
                   <div class="col-12">
                       <p style="text-align: justify;"><b>Pranathi Constructions</b> is a leading real estate developer in Hyderabad, stands for trusted and quality living. With over 12 years of experience and 7 successful residential projects, we continue to shape premium living spaces in Tellapur. We deliver thoughtfully designed homes that blend aesthetics with functionality. With a proven legacy of excellence, timely project delivery, and a strong focus on customer satisfaction, the company has earned a reputation for creating value-driven residential communities that stand the test of time. Each project by Pranathi Constructions reflects a commitment to superior construction quality, modern design, and long-term liveability.</p>
                   </div>
                  <div class="col-12 col-md-6">
                     <iframe title="YouTube video player" src="https://www.youtube.com/embed/MSuIb8ap8q4" width="100%" class="project-video" frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                  </div>
                  <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                      
                     
                     <div class="main-title mt3 text-center">
                         <p>About</p>
                         <h1>Project</h1>
                  
                  
               </div>
                     <p style="text-align: justify;"><b>Pranathi Kiara</b> is an exceptional residential offering set in the heart of Tellapur, ideal for those seeking luxury, comfort, and connectivity. This modern residential development features spacious 3 BHK flats for sale in Tellapur, designed to meet the lifestyle needs of urban families.</p>
                     <p>Located within a thoughtfully designed gated community in Tellapur, the project stands out with its expansive central courtyard, lush greenery, and no ground-level residential units ensuring privacy, serenity and clean air flow across the project.</p>
                     <p>Connectivity is one of Pranathi Kiara’s strongest advantages. It is:</p>
                     <ul class="ul-home">
                        <li>Just 20–25 minutes to Madhapur.</li>
                        <li>20 minutes to Gachibowli and</li>
                        <li>Around 18–22 minutes to Kondapur.</li>
                        <li>Via smooth arterial roads and the Outer Ring Road (ORR).</li>
                     </ul>
                     <p>With close access to major IT hubs, international schools, hospitals, and recreational spots, Pranathi Kiara is positioned for both a relaxed lifestyle and high investment potential.</p>
                  </div>
               </div>
            </div>
         </section>
         <div id="projectHighlights" class="highlights-sec services-3 bg-grea-3">
            <div class="container">
               <div class="row mb-3">
                  <div class="col-lg-12 align-self-center wow fadeInLeft delay-04s">
                     <div class="text">
                        <div class="main-title mt3 text-center">
                           <p>Our Expertise</p>
                           <h1>Project Highlights</h1>
                        </div>
                        <p>Set sail to the future in Hyderabad! Tellapur to the inside of the ORR is a coveted location. Within its green stretches rises the amazing Kiara – a plush gated community of apartments spread over 3 stunning blocks. Come home to love and warmth. Shift your focus to the Western corridor of Hyderabad for a new future. Get ready for all things extraordinary at Kiara, brings brightness and sunshine to everyday life. Not everyone is like you. Not every destination will be as thoughtful and as love! Not every home can be a Kiara.</p>
                     </div>
                  </div>
               </div>
               <div class="row wow fadeInRight delay-04s">
                  <!--<div class="col-12 col-md-4">-->
                  <!--   <div class="service-info-2">-->
                  <!--      <div class="icon">-->
                  <!--         <img src="images/icons/project-overview/land-1.png" alt="Project Overview icon">-->
                  <!--      </div>-->
                  <!--      <div class="service-info-2-ditels">-->
                  <!--         <h3><a href="#">Project Name: Pranathi Kiara</a></h3>-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div class="col-12 col-md-4">
                     <div class="service-info-2">
                        <div class="icon">
                           <picture><source srcset="images/icons/project-overview/320w/towers-1_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/icons/project-overview/640w/towers-1_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/icons/project-overview/1024w/towers-1_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/icons/project-overview/1920w/towers-1_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/icons/project-overview/towers-1.webp" alt="Configuration: 2.5 &amp; 3 BHK Flats " loading="lazy" decoding="async" width="64" height="64"></picture>
                        </div>
                        <div class="service-info-2-ditels">
                           <h3><a href="#">Configuration: 2.5 &amp; 3 BHK Flats </a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-4">
                     <div class="service-info-2">
                        <div class="icon">
                           <picture><source srcset="images/icons/project-overview/320w/flats-1_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/icons/project-overview/640w/flats-1_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/icons/project-overview/1024w/flats-1_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/icons/project-overview/1920w/flats-1_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/icons/project-overview/flats-1.webp" alt="Land Area: 3.30 Acres" loading="lazy" decoding="async" width="64" height="64"></picture>
                        </div>
                        <div class="service-info-2-ditels">
                           <h3><a href="#">Land Area: 3.30 Acres</a></h3>
                        </div>
                     </div>
                  </div>
                  
                  <div class="col-12 col-md-4">
                     <div class="service-info-2">
                        <div class="icon">
                           <picture><source srcset="images/icons/project-overview/320w/3bhk-1_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/icons/project-overview/640w/3bhk-1_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/icons/project-overview/1024w/3bhk-1_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/icons/project-overview/1920w/3bhk-1_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/icons/project-overview/3bhk-1.webp" alt="100% Vastu-Compliant Layouts" loading="lazy" decoding="async" width="64" height="64"></picture>
                        </div>
                        <div class="service-info-2-ditels">
                           <h3><a href="#">100% Vastu-Compliant Layouts</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-4">
                     <div class="service-info-2">
                        <div class="icon">
                           <picture><source srcset="images/icons/project-overview/320w/clubhouse-1_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/icons/project-overview/640w/clubhouse-1_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/icons/project-overview/1024w/clubhouse-1_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/icons/project-overview/1920w/clubhouse-1_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/icons/project-overview/clubhouse-1.webp" alt="Towers: 3 | Floors: G+15 | Total Units: 360" loading="lazy" decoding="async" width="64" height="64"></picture>
                        </div>
                        <div class="service-info-2-ditels">
                           <h3><a href="#">Towers: 3 | Floors: G+15 | Total Units: 360</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-4">
                     <div class="service-info-2">
                        <div class="icon">
                           <picture><source srcset="images/icons/project-overview/320w/club-House_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/icons/project-overview/640w/club-House_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/icons/project-overview/1024w/club-House_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/icons/project-overview/1920w/club-House_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/icons/project-overview/club-House.webp" alt="Six-Floor Clubhouse with 20+ Amenities" loading="lazy" decoding="async" width="64" height="64"></picture>
                        </div>
                        <div class="service-info-2-ditels">
                           <h3><a href="#">Six-Floor Clubhouse with 20+ Amenities</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-4">
                     <div class="service-info-2">
                        <div class="icon">
                           <picture><source srcset="images/icons/project-overview/320w/park_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/icons/project-overview/640w/park_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/icons/project-overview/1024w/park_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/icons/project-overview/1920w/park_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/icons/project-overview/park.webp" alt="70% Open Space | No Flats on Ground Floor" loading="lazy" decoding="async" width="64" height="64"></picture>
                        </div>
                        <div class="service-info-2-ditels">
                           <h3><a href="#">70% Open Space | No Flats on Ground Floor</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-4">
                     <div class="service-info-2">
                        <div class="icon">
                           <picture><source srcset="images/icons/project-overview/320w/court-yard_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/icons/project-overview/640w/court-yard_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/icons/project-overview/1024w/court-yard_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/icons/project-overview/1920w/court-yard_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/icons/project-overview/court-yard.webp" alt="Premium Central Courtyard (25,000 sq. ft.)" loading="lazy" decoding="async" width="64" height="64"></picture>
                        </div>
                        <div class="service-info-2-ditels">
                           <h3><a href="#">Premium Central Courtyard (25,000 sq. ft.)</a></h3>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-4">
                     <div class="service-info-2">
                        <div class="icon">
                           <picture><source srcset="images/icons/project-overview/320w/no-car_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/icons/project-overview/640w/no-car_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/icons/project-overview/1024w/no-car_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/icons/project-overview/1920w/no-car_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/icons/project-overview/no-car.webp" alt="Zero Vehicle Moment on Ground Floor" loading="lazy" decoding="async" width="64" height="64"></picture>
                        </div>
                        <div class="service-info-2-ditels">
                           <h3><a href="#">Zero Vehicle Moment on Ground Floor</a></h3>
                        </div>
                     </div>
                  </div>
                  <p>From top-quality fittings to eco-conscious infrastructure, the project is built to deliver long-lasting value and lifestyle ease for families and professionals alike.</p>
               </div>
            </div>
         </div>
         <div id="amenitiesSection" class="featured-properties content-area slide-box-2">
            <div class="container">
               <div class="main-title-4">
                  <h1>Amenities <span> Features</span></h1>
                  <p class="text-right">Discover the extraordinary amenities available at our luxury apartments, designed to elevate your living experience to new heights. We believe in providing a lifestyle of utmost comfort, convenience, and indulgence. Explore the exceptional range of amenities that await you</p>
               </div>
            </div>
            <div class="amenities-slider slide-container">
               <div class="wrapper">
                  <div class="card">
                     <div class="cardImage">
                        <div class="property-box">
                           <div class="property-thumbnail">
                              <a href="javascript:void(0);" class="property-img">
                                 <div class="property-overflow">
                                    <picture><source srcset="images/amenities/320w/Amphitheater-min_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/amenities/640w/Amphitheater-min_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/amenities/1024w/Amphitheater-min_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/amenities/1920w/Amphitheater-min_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block w-100" src="images/amenities/Amphitheater-min.webp" alt="properties" loading="lazy" decoding="async" width="1080" height="1080"></picture>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wrapper">
                  <div class="card">
                     <div class="cardImage">
                        <div class="property-box">
                           <div class="property-thumbnail">
                              <a href="javascript:void(0);" class="property-img">
                                 <div class="property-overflow">
                                    <picture><source srcset="images/amenities/320w/Court_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/amenities/640w/Court_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/amenities/1024w/Court_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/amenities/1920w/Court_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block w-100" src="images/amenities/Court.webp" alt="properties" loading="lazy" decoding="async" width="1080" height="1080"></picture>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wrapper">
                  <div class="card">
                     <div class="cardImage">
                        <div class="property-box">
                           <div class="property-thumbnail">
                              <a href="javascript:void(0);" class="property-img">
                                 <div class="property-overflow">
                                    <picture><source srcset="images/amenities/320w/Club-house-view-1_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/amenities/640w/Club-house-view-1_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/amenities/1024w/Club-house-view-1_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/amenities/1920w/Club-house-view-1_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block w-100" src="images/amenities/Club-house-view-1.webp" alt="properties" loading="lazy" decoding="async" width="1080" height="1080"></picture>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wrapper">
                  <div class="card">
                     <div class="cardImage">
                        <div class="property-box">
                           <div class="property-thumbnail">
                              <a href="javascript:void(0);" class="property-img">
                                 <div class="property-overflow">
                                    <picture><source srcset="images/amenities/320w/Electric-Car_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/amenities/640w/Electric-Car_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/amenities/1024w/Electric-Car_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/amenities/1920w/Electric-Car_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block w-100" src="images/amenities/Electric-Car.webp" alt="properties" loading="lazy" decoding="async" width="1080" height="1080"></picture>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wrapper">
                  <div class="card">
                     <div class="cardImage">
                        <div class="property-box">
                           <div class="property-thumbnail">
                              <a href="javascript:void(0);" class="property-img">
                                 <div class="property-overflow">
                                    <picture><source srcset="images/amenities/320w/Gym_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/amenities/640w/Gym_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/amenities/1024w/Gym_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/amenities/1920w/Gym_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block w-100" src="images/amenities/Gym.webp" alt="properties" loading="lazy" decoding="async" width="1080" height="1080"></picture>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wrapper">
                  <div class="card">
                     <div class="cardImage">
                        <div class="property-box">
                           <div class="property-thumbnail">
                              <a href="javascript:void(0);" class="property-img">
                                 <div class="property-overflow">
                                    <picture><source srcset="images/amenities/320w/Hall_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/amenities/640w/Hall_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/amenities/1024w/Hall_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/amenities/1920w/Hall_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block w-100" src="images/amenities/Hall.webp" alt="properties" loading="lazy" decoding="async" width="1080" height="1080"></picture>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wrapper">
                  <div class="card">
                     <div class="cardImage">
                        <div class="property-box">
                           <div class="property-thumbnail">
                              <a href="javascript:void(0);" class="property-img">
                                 <div class="property-overflow">
                                    <picture><source srcset="images/amenities/320w/Lobby_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/amenities/640w/Lobby_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/amenities/1024w/Lobby_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/amenities/1920w/Lobby_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block w-100" src="images/amenities/Lobby.webp" alt="properties" loading="lazy" decoding="async" width="1080" height="1080"></picture>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wrapper">
                  <div class="card">
                     <div class="cardImage">
                        <div class="property-box">
                           <div class="property-thumbnail">
                              <a href="javascript:void(0);" class="property-img">
                                 <div class="property-overflow">
                                    <picture><source srcset="images/amenities/320w/Party-lawn_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/amenities/640w/Party-lawn_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/amenities/1024w/Party-lawn_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/amenities/1920w/Party-lawn_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block w-100" src="images/amenities/Party-lawn.webp" alt="properties" loading="lazy" decoding="async" width="1080" height="1080"></picture>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wrapper">
                  <div class="card">
                     <div class="cardImage">
                        <div class="property-box">
                           <div class="property-thumbnail">
                              <a href="javascript:void(0);" class="property-img">
                                 <div class="property-overflow">
                                    <picture><source srcset="images/amenities/320w/Pool_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/amenities/640w/Pool_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/amenities/1024w/Pool_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/amenities/1920w/Pool_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block w-100" src="images/amenities/Pool.webp" alt="properties" loading="lazy" decoding="async" width="1080" height="1080"></picture>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="wrapper">
                  <div class="card">
                     <div class="cardImage">
                        <div class="property-box">
                           <div class="property-thumbnail">
                              <a href="javascript:void(0);" class="property-img">
                                 <div class="property-overflow">
                                    <picture><source srcset="images/amenities/320w/Supermarket_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/amenities/640w/Supermarket_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/amenities/1024w/Supermarket_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/amenities/1920w/Supermarket_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="d-block w-100" src="images/amenities/Supermarket.webp" alt="properties" loading="lazy" decoding="async" width="1080" height="1080"></picture>
                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="projectPlan" class="plan-sec services-2 content-area-11 content-area-11-custom  bg-grea-3">
            <div class="container">
               <div class="main-title-4"></div>
               <nav>
                  <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                      <button class="nav-link active mb-2" id="nav-project-tab" data-bs-toggle="tab" data-bs-target="#nav-project" type="button" role="tab" aria-controls="nav-project" aria-selected="true">Project Plan</button>
                     <button class="nav-link mb-2" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Master Plan</button>
                     <button class="nav-link mb-2" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Floor Plan</button>
                     <button class="nav-link mb-2" id="locationPlanButton" data-bs-toggle="tab" data-bs-target="#locationPlan" type="button" role="tab" aria-controls="locationPlan" aria-selected="false">Location Plan</button>
                  </div>
               </nav>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-project" role="tabpanel" aria-labelledby="nav-project-tab">
                  <div class="container">
                     <div class="row">
                        
                        <div class="col-12 col-md-12 mt-4">
                           <p class="para-custom">The primary layout of Pranathi Kiara is thoughtfully  designed  to enhance privacy, ventilation, and greenery. Homes are positioned to minimise shared walls and to optimise natural light throughout the day.</p>
                           <p class="para-custom">Each of the 3 towers is placed to maximize open views while maintaining walkable access to amenities and clubhouse zones. Being part of a gated community in Tellapur, the project offers a well-balanced lifestyle, calm residential living with quick access to nearby business hubs.</p>
                            <p class="para-custom">If you're looking for 3 BHK flats for sale in Tellapur that offer  design efficiency, peace, and strong connectivity this is your ideal choice.</p>

                        </div>
                     </div>
                  </div>
               </div>
                <!---->
               <div class="tab-pane fade show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-12">
                           <div class="mas-img popular-places-photo">
                              <a data-fancybox="gallery1" href="images/projects/master.jpg">
                              <picture><source srcset="images/projects/320w/master-min_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/projects/640w/master-min_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/projects/1024w/master-min_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/projects/1920w/master-min_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="img-fluid big" src="images/projects/master-min.webp" alt="popular-places" loading="lazy" decoding="async" width="1949" height="1299"></picture></a>
                           </div>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="mas-img popular-places-photo">
                              <a data-fancybox="gallery1" href="images/projects/master-plan-img-2.jpg">
                              <picture><source srcset="images/projects/320w/master-plan-img-2_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/projects/640w/master-plan-img-2_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/projects/1024w/master-plan-img-2_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/projects/1920w/master-plan-img-2_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="img-fluid big" src="images/projects/master-plan-img-2.webp" alt="popular-places" loading="lazy" decoding="async" width="2560" height="1716"></picture></a>
                           </div>
                        </div>
                        <div class="col-12 col-md-6">
                           <div class="mas-img popular-places-photo">
                              <a data-fancybox="gallery1" href="images/projects/master-plan-img-3.jpg">
                              <picture><source srcset="images/projects/320w/master-plan-img-3_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/projects/640w/master-plan-img-3_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/projects/1024w/master-plan-img-3_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/projects/1920w/master-plan-img-3_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="img-fluid big" src="images/projects/master-plan-img-3.webp" alt="popular-places" loading="lazy" decoding="async" width="2560" height="1722"></picture></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <div class="container">
                     <div class="row">
                        <div class="col-sm-6">
                           <div class="mas-img">
                              <a data-fancybox="gallery1" href="images/plans/Floor-plan-01.webp">
                              <picture><source srcset="images/plans/320w/Floor-plan-01_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/plans/640w/Floor-plan-01_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/plans/1024w/Floor-plan-01_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/plans/1920w/Floor-plan-01_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/plans/Floor-plan-01.webp" alt="" loading="lazy" decoding="async" width="2560" height="1629"></picture></a>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="mas-img">
                              <a data-fancybox="gallery1" href="images/plans/Floor-plan2-1.webp">
                              <picture><source srcset="images/plans/320w/Floor-plan2-1_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/plans/640w/Floor-plan2-1_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/plans/1024w/Floor-plan2-1_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/plans/1920w/Floor-plan2-1_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/plans/Floor-plan2-1.webp" alt="" loading="lazy" decoding="async" width="2560" height="1629"></picture></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade show" id="locationPlan" role="tabpanel" aria-labelledby="locationPlanButton">
                  <div class="container">
                     <div class="row mt-4">
                        <div class="col-sm-6">
                           <div class="mas-img popular-places-photo">
                              <a data-fancybox="gallery1" href="images/projects/location-plan.jpg">
                              <picture><source srcset="images/projects/320w/location-plan_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/projects/640w/location-plan_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/projects/1024w/location-plan_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/projects/1920w/location-plan_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img class="img-fluid big" src="images/projects/location-plan.webp" alt="popular-places" loading="lazy" decoding="async" width="2560" height="1585"></picture></a>
                           </div>
                        </div>
                        <div class="col-sm-6 align-item-center">
                            <p class="para-custom">Pranathi Kiara enjoys a strategic location in the fast-emerging Tellapur neighbourhood, offering both tranquillity and urban connectivity.</p>
                            <ul class="list-custom">
                                <li><b>Outer Ring Road (ORR): 10 mins</b></li>
                                <li><b>Financial District: 15–18 mins</b></li>
                                <li><b>Gachibowli: 20 mins</b></li>
                                <li><b>Madhapur: 25 mins</b></li>
                                <li><b>Kondapur: 22 mins</b></li>
                                <li><b>Top Schools within (5–25 mins): Samashti International, Oakridge, Gaudium, DPS</b></li>
                                <li><b>Major IT Hubs (18–30 mins): Infosys, Wipro, TCS, WaveRock</b></li>
                                <li><b>Reputed Hospitals (10–20 mins): AIG, Continental, Apollo</b></li>
                               
                            </ul>
                            <p class="para-custom">This is an ideal destination for families looking for 3 BHK flats in Tellapur with quick access to Hyderabad’s key tech and education zones.</p>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <section class="mt-5">
            <div class="container">
               <div class="row">
                  <div class="main-title-4">
                     <h1>Kiara's <span>Near By Locations</span> </h1>
                  </div>
                  <div class="col-12 col-md-4 mb-3">
                     <div class="card">
                        <div class="card-header bg-near-by-location">Nearest Schools</div>
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item">Meru International School</li>
                           <li class="list-group-item">Samasthi International School</li>
                           <li class="list-group-item">The Gaudium School</li>
                           <li class="list-group-item">Manthan International School</li>
                           <li class="list-group-item">Chirec international School</li>
                           <li class="list-group-item">Future Kids School</li>
                           <li class="list-group-item">Oakridge International School</li>
                           <li class="list-group-item">DPS, Khajaguda</li>
                           <li class="list-group-item">Glendale International School</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-12 col-md-4 mb-3">
                     <div class="card">
                        <div class="card-header bg-near-by-location">Nearest Offices</div>
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item">CA Technologies</li>
                           <li class="list-group-item">Hitachi Consulting</li>
                           <li class="list-group-item">Kapil Tower</li>
                           <li class="list-group-item">Waverock</li>
                           <li class="list-group-item">Wipro</li>
                           <li class="list-group-item">ICICI Bank</li>
                           <li class="list-group-item">TCS Synergy Park</li>
                           <li class="list-group-item">Infosys</li>
                           <li class="list-group-item">Polaris</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-12 col-md-4 mb-3">
                     <div class="card">
                        <div class="card-header bg-near-by-location"> Nearest Hospitals </div>
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item">Citizen Hospital</li>
                           <li class="list-group-item">ESI Hospital</li>
                           <li class="list-group-item">Archana Hospital</li>
                           <li class="list-group-item">Pranaam Hospital</li>
                           <li class="list-group-item">AIG Hospital</li>
                           <li class="list-group-item">Care Hospital</li>
                           <li class="list-group-item">Continental Hospital</li>
                           <li class="list-group-item">Sunshine Hospital</li>
                           <li class="list-group-item">Apollo Hospital</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="projectSpecifications" class="Kiara-Specification">
            <div class="main-title-4">
               <h1>Kiara <span>Specifications</span> </h1>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="accordion-items wow fadeInUp" data-wow-duration="3000">
                        <div class="accordion-heading">STRUCTURE</div>
                        <div class="accordion-content">
                           <ul>
                              <li>RCC framed structure to withstand wind &amp; seismic loads.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading">SUPER STRUCTURE</div>
                        <div class="accordion-content">
                           <ul>
                              <li>9” external and 4” internal walls.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading">PLASTERING</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Internal Walls: Ceiling: Double-coat cement plaster with smooth finishing..</li>
                              <li> External: Double-coat cement plastering.</li>
                              <li> Flooring: 600mm x 600mm Double charge vitrified flooring of CERA / Aparna or
                                 equivalent make.
                              </li>
                           </ul>
                        </div>
                        <div class="accordion-heading">DOORS</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Main Door: BT wood frame with veneered flush door shutter with melamine
                                 polishing.
                              </li>
                              <li> Internal Doors: MT wood frame with flush shutter.</li>
                              <li> Windows: UPVC windows with clear glass &amp; provision for mosquito mesh of make
                                 NCL VEKA / wintech or equivalent make.
                              </li>
                           </ul>
                        </div>
                        <div class="accordion-heading">PAINTING</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Internal walls and ceiling: Water-proof putty finish with two coats of tractor
                                 emulsion paint of Asian paints over a coat of primer.
                              </li>
                              <li> External: Texture or putty finish with 2 coats of exterior emulsion paint of
                                 Asian paints.
                              </li>
                           </ul>
                        </div>
                        <div class="accordion-heading">STAIRCASE / CORRIDOR</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Combination of granite / vitrified tiles as per architectural design.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading">UTILITY</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Anti-skid tiles of standard make.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading">KITCHEN</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Provision for water purifier, hob &amp; chimney separate water lines for
                                 municipal water (HMWSSB) and underground water connection.
                              </li>
                              <li> Please Note: Kitchen platform, sink, are all in client’s scope as per their
                                 modular kitchen design and will not be provided by the builder.
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="accordion-items wow fadeInUp" data-wow-duration="3000">
                        <div class="accordion-heading">TOILETS</div>
                        <div class="accordion-content">
                           <ul>
                              <li>All sanitary fixtures are Cera or equivalent make. EWC in all toilets.</li>
                              <li> All CP fitting are chrome-plated of Jaquar / Cera or equivalent make.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading">DADOING</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Kitchen: Glazed tiles dado up to 2’ height above kitchen platform.</li>
                              <li>Toilets: Glazed tiles of standard make up to door height.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading">RAILING</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Standard Steel railing for staircases.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading">ELECTRICAL</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Concealed copper wiring of finolex, polycab or lapp make and modular switches of
                                 legrand / schneider.
                              </li>
                              <li> Power outlets for air conditioners in all bedrooms.</li>
                              <li> Power outlets for geysers and exhaust fans in all bathrooms.</li>
                              <li>Power plug for cooking range chimney, refrigerator, mixer/grinders in kitchen.</li>
                              <li> Power plug for washing machine in utility area.</li>
                              <li> Three-phase power supply for each unit with individual meter boards.</li>
                              <li> Miniature Circuit Breakers (MCB) of Legrand / Siemens or reputed make for each
                                 distribution board.
                              </li>
                           </ul>
                        </div>
                        <div class="accordion-heading">LIFTS</div>
                        <div class="accordion-content">
                           <ul>
                              <li>6-Passenger lift KONE / Johnson or equivalent.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading">SECURITY</div>
                        <div class="accordion-content">
                           <ul>
                              <li>CCTV surveillance in common areas.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading">GENERATOR</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Generator will be provided for all common services (1 KVA Backup for All
                                 Flats).
                              </li>
                           </ul>
                        </div>
                        <div class="accordion-heading">NOTE</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Windows, Shelves, chajjas, lofts, arches or any kind of modifications /
                                 alterations are not allowed.
                              </li>
                              <li> Flat will be handed over for woodwork / interiors after receiving 100% payment
                                 only,
                              </li>
                              <li> GST, Registration and other applicable taxes as per Govt. norms</li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
         <section id="projectGallery" class="gallery-section">
            <div class="main-title-4">
               <h1>KIARA <span>Gallery</span> </h1>
               <p>Let the visuals speak for themselves. Explore your future home through our immersive gallery, showcasing every detail that sets Pranathi Kiara apart.</p>
            </div>
            <div class="row">
               <ul class="gallery-slider ">
                  <li><a data-fancybox="grp" href="images/gallery/b1.webp"><picture><source srcset="images/gallery/320w/b1_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b1_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b1_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b1_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b1.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b2.webp"><picture><source srcset="images/gallery/320w/b2_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b2_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b2_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b2_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b2.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b3.webp"><picture><source srcset="images/gallery/320w/b3_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b3_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b3_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b3_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b3.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b4.webp"><picture><source srcset="images/gallery/320w/b4_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b4_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b4_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b4_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b4.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b5.webp"><picture><source srcset="images/gallery/320w/b5_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b5_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b5_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b5_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b5.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b6.webp"><picture><source srcset="images/gallery/320w/b6_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b6_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b6_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b6_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b6.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b7.webp"><picture><source srcset="images/gallery/320w/b7_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b7_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b7_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b7_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b7.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b8.webp"><picture><source srcset="images/gallery/320w/b8_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b8_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b8_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b8_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b8.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b9.webp"><picture><source srcset="images/gallery/320w/b9_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b9_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b9_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b9_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b9.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b10.webp"><picture><source srcset="images/gallery/320w/b10_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b10_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b10_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b10_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b10.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b11.webp"><picture><source srcset="images/gallery/320w/b11_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b11_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b11_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b11_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b11.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b12.webp"><picture><source srcset="images/gallery/320w/b12_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b12_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b12_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b12_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b12.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b13.webp"><picture><source srcset="images/gallery/320w/b13_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b13_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b13_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b13_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b13.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b14.webp"><picture><source srcset="images/gallery/320w/b14_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b14_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b14_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b14_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b14.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b15.webp"><picture><source srcset="images/gallery/320w/b15_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b15_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b15_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b15_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b15.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b16.webp"><picture><source srcset="images/gallery/320w/b16_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b16_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b16_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b16_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b16.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b17.webp"><picture><source srcset="images/gallery/320w/b17_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b17_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b17_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b17_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b17.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b18.webp"><picture><source srcset="images/gallery/320w/b18_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b18_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b18_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b18_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b18.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b19.webp"><picture><source srcset="images/gallery/320w/b19_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b19_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b19_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b19_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b19.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b20.webp"><picture><source srcset="images/gallery/320w/b20_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b20_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b20_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b20_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b20.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b21.webp"><picture><source srcset="images/gallery/320w/b21_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b21_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b21_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b21_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b21.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b22.webp"><picture><source srcset="images/gallery/320w/b22_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b22_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b22_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b22_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b22.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b23.webp"><picture><source srcset="images/gallery/320w/b23_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b23_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b23_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b23_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b23.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b24.webp"><picture><source srcset="images/gallery/320w/b24_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b24_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b24_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b24_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b24.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b25.webp"><picture><source srcset="images/gallery/320w/b25_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b25_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b25_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b25_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b25.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b26.webp"><picture><source srcset="images/gallery/320w/b26_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b26_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b26_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b26_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b26.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
                  <li><a data-fancybox="grp" href="images/gallery/b27.webp"><picture><source srcset="images/gallery/320w/b27_320w.webp" media="(max-width: 320px)" type="image/webp"><source srcset="images/gallery/640w/b27_640w.webp" media="(max-width: 640px)" type="image/webp"><source srcset="images/gallery/1024w/b27_1024w.webp" media="(max-width: 1024px)" type="image/webp"><source srcset="images/gallery/1920w/b27_1920w.webp" media="(max-width: 1920px)" type="image/webp"><img src="images/gallery/b27.webp" alt="" loading="lazy" decoding="async" width="1024" height="853"></picture></a></li>
               </ul>
            </div>
         </section>
         
         <section id="projectFaq" class="Kiara-Specification">
            <div class="main-title-4">
               <h1>FAQs</h1>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="accordion-items wow fadeInUp" data-wow-duration="3000">
                        <div class="accordion-heading" style="font-size:14px;">Where is Pranathi Kiara located?</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Pranathi Kiara is located in Tellapur, a fast-developing suburb in Hyderabad’s western corridor, just minutes from the ORR, Gachibowli, Kondapur and Madhapur.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading" style="font-size:14px;">What types of flats are available at Pranathi Kiara?</div>
                        <div class="accordion-content">
                           <ul>
                              <li>The project offers 2.5 &amp; 3 BHK flats in Tellapur, ranging between 1865 and 2035 sq. ft.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading" style="font-size:14px;">What is the possession date for Pranathi Kiara?</div>
                        <div class="accordion-content">
                           <ul>
                              <li>The expected possession date is December 2025, as per the approved RERA timeline.
                              </li>
                           </ul>
                        </div>
                        <div class="accordion-heading" style="font-size:14px;">How far is Pranathi Kiara from major IT hubs like Gachibowli and Madhapur?</div>
                        <div class="accordion-content">
                           <ul>
                              <li>For professionals looking for 3 BHK flats near Gachibowli, the commute is around 20 minutes. The project is also just 25 minutes from Madhapur and about 22 minutes from Kondapur.
                              </li>
                           </ul>
                        </div>
                        <div class="accordion-heading" style="font-size:14px;">Are the apartments Vastu-compliant?</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Yes, all homes at Pranathi Kiara are 100% Vastu-compliant to promote harmony and well-being.
                              </li>
                           </ul>
                        </div>
                        
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="accordion-items wow fadeInUp" data-wow-duration="3000">
                        <div class="accordion-heading" style="font-size:14px;">What amenities are available in this gated community in Tellapur?</div>
                        <div class="accordion-content">
                           <ul>
                              <li>The gated community includes a 25,000 sq. ft. clubhouse, infinity pool, yoga and gym areas, supermarket, EV charging, party hall, indoor games, and more.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading" style="font-size:14px;">What is the size range of 3 BHK flats in Pranathi Kiara?</div>
                        <div class="accordion-content">
                           <ul>
                              <li>The flats range from 1865 sq. ft. to 2035 sq. ft., offering spacious layouts and modern interiors.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading" style="font-size:14px;">Why is Tellapur an excellent investment for 3 BHK apartments?</div>
                        <div class="accordion-content">
                           <ul>
                              <li>With its rapid development, proximity to the ORR, and access to IT zones, Tellapur is now one of the most promising areas for premium residential investments.</li>
                           </ul>
                        </div>
                        <div class="accordion-heading" style="font-size:14px;">Why is Tellapur a popular location for 3 BHK apartments?</div>
                        <div class="accordion-content">
                           <ul>
                              <li>It offers the perfect balance between peaceful residential living and connectivity to commercial hubs. It is ideal for working professionals and families.
                              </li>
                           </ul>
                        </div>
                        <div class="accordion-heading" style="font-size:14px;">What are the location highlights of Pranathi Kiara in Tellapur?</div>
                        <div class="accordion-content">
                           <ul>
                              <li>Its strategic location near the ORR, Financial District, Gachibowli, and top schools makes it ideal for those seeking both comfort and convenience.</li>
                           </ul>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </section>         
         
         <section class="gallery-section">
            <div class="main-title-4">
               <h1>Contact <span> Us</span> </h1>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-12 col-md-6 youtubee">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15223.926764083455!2d78.2626313!3d17.4605904!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcbed4561e447e7%3A0x5c4bf81810ab2c0!2sPRANATHI%20KIARA!5e0!3m2!1sen!2sin!4v1684320571876!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                  <div id="contactUs" class="col-12 col-md-6">
                     <form class="pp-3" action="https://mrcreativedemo.com/DontDelete/pranathi-lp/mail.php" method="POST" id="homeFormBtn">
                        <div class="form-group py-2 position-relative">
                           <!--<label>Name <span class="text-danger">*</span> </label>-->
                           <i data-feather="user" class="fea icon-sm icons"></i>
                           <input pattern="[a-zA-z ]+" title="Enter valid Name, Max characters allowed are 30" type="text" class="form-control" name="name" value="" placeholder="Your name" required="">
                        </div>
                        <div class="form-group py-2 position-relative">
                           <!--<label>Email ID <span class="text-danger">*</span> </label>-->
                           <i data-feather="mail" class="fea icon-sm icons"></i>
                           <input type="email" title="Enter a valid Email ID" class="form-control" name="email" value="" placeholder="Email address" required="">
                        </div>
                        <div class="form-group py-2 ">
                           <!--<label>Mobile no <span class="text-danger">*</span> </label>-->
                           <div class="row">
                              <div class="col-md-3">
                                 <select name="countryCode" class="form-control">
                                    <option data-countrycode="IN" value="+91" selected="">India (+91)</option>
                                    <optgroup label="Other countries">
                                       <option data-countrycode="DZ" value="+213">Algeria (+213)</option>
                                       <option data-countrycode="AD" value="+376">Andorra (+376)</option>
                                       <option data-countrycode="AO" value="+244">Angola (+244)</option>
                                       <option data-countrycode="AI" value="+1264">Anguilla (+1264)</option>
                                       <option data-countrycode="AG" value="+1268">Antigua &amp; Barbuda (+1268)</option>
                                       <option data-countrycode="AR" value="+54">Argentina (+54)</option>
                                       <option data-countrycode="AM" value="+374">Armenia (+374)</option>
                                       <option data-countrycode="AW" value="+297">Aruba (+297)</option>
                                       <option data-countrycode="AU" value="+61">Australia (+61)</option>
                                       <option data-countrycode="AT" value="+43">Austria (+43)</option>
                                       <option data-countrycode="AZ" value="+994">Azerbaijan (+994)</option>
                                       <option data-countrycode="BS" value="+1242">Bahamas (+1242)</option>
                                       <option data-countrycode="BH" value="+973">Bahrain (+973)</option>
                                       <option data-countrycode="BD" value="+880">Bangladesh (+880)</option>
                                       <option data-countrycode="BB" value="+1246">Barbados (+1246)</option>
                                       <option data-countrycode="BY" value="+375">Belarus (+375)</option>
                                       <option data-countrycode="BE" value="+32">Belgium (+32)</option>
                                       <option data-countrycode="BZ" value="+501">Belize (+501)</option>
                                       <option data-countrycode="BJ" value="+229">Benin (+229)</option>
                                       <option data-countrycode="BM" value="+1441">Bermuda (+1441)</option>
                                       <option data-countrycode="BT" value="+975">Bhutan (+975)</option>
                                       <option data-countrycode="BO" value="+591">Bolivia (+591)</option>
                                       <option data-countrycode="BA" value="+387">Bosnia Herzegovina (+387)</option>
                                       <option data-countrycode="BW" value="+267">Botswana (+267)</option>
                                       <option data-countrycode="BR" value="+55">Brazil (+55)</option>
                                       <option data-countrycode="BN" value="+673">Brunei (+673)</option>
                                       <option data-countrycode="BG" value="+359">Bulgaria (+359)</option>
                                       <option data-countrycode="BF" value="+226">Burkina Faso (+226)</option>
                                       <option data-countrycode="BI" value="+257">Burundi (+257)</option>
                                       <option data-countrycode="KH" value="+855">Cambodia (+855)</option>
                                       <option data-countrycode="CM" value="+237">Cameroon (+237)</option>
                                       <option data-countrycode="CA" value="+1">Canada (+1)</option>
                                       <option data-countrycode="CV" value="+238">Cape Verde Islands (+238)</option>
                                       <option data-countrycode="KY" value="+1345">Cayman Islands (+1345)</option>
                                       <option data-countrycode="CF" value="+236">Central African Republic (+236)</option>
                                       <option data-countrycode="CL" value="+56">Chile (+56)</option>
                                       <option data-countrycode="CN" value="+86">China (+86)</option>
                                       <option data-countrycode="CO" value="+57">Colombia (+57)</option>
                                       <option data-countrycode="KM" value="+269">Comoros (+269)</option>
                                       <option data-countrycode="CG" value="+242">Congo (+242)</option>
                                       <option data-countrycode="CK" value="+682">Cook Islands (+682)</option>
                                       <option data-countrycode="CR" value="+506">Costa Rica (+506)</option>
                                       <option data-countrycode="HR" value="+385">Croatia (+385)</option>
                                       <option data-countrycode="CU" value="+53">Cuba (+53)</option>
                                       <option data-countrycode="CY" value="+90392">Cyprus North (+90392)</option>
                                       <option data-countrycode="CY" value="+357">Cyprus South (+357)</option>
                                       <option data-countrycode="CZ" value="+42">Czech Republic (+42)</option>
                                       <option data-countrycode="DK" value="+45">Denmark (+45)</option>
                                       <option data-countrycode="DJ" value="+253">Djibouti (+253)</option>
                                       <option data-countrycode="DM" value="+1809">Dominica (+1809)</option>
                                       <option data-countrycode="DO" value="+1809">Dominican Republic (+1809)</option>
                                       <option data-countrycode="EC" value="+593">Ecuador (+593)</option>
                                       <option data-countrycode="EG" value="+20">Egypt (+20)</option>
                                       <option data-countrycode="SV" value="+503">El Salvador (+503)</option>
                                       <option data-countrycode="GQ" value="+240">Equatorial Guinea (+240)</option>
                                       <option data-countrycode="ER" value="+291">Eritrea (+291)</option>
                                       <option data-countrycode="EE" value="+372">Estonia (+372)</option>
                                       <option data-countrycode="ET" value="+251">Ethiopia (+251)</option>
                                       <option data-countrycode="FK" value="+500">Falkland Islands (+500)</option>
                                       <option data-countrycode="FO" value="+298">Faroe Islands (+298)</option>
                                       <option data-countrycode="FJ" value="+679">Fiji (+679)</option>
                                       <option data-countrycode="FI" value="+358">Finland (+358)</option>
                                       <option data-countrycode="FR" value="+33">France (+33)</option>
                                       <option data-countrycode="GF" value="+594">French Guiana (+594)</option>
                                       <option data-countrycode="PF" value="+689">French Polynesia (+689)</option>
                                       <option data-countrycode="GA" value="+241">Gabon (+241)</option>
                                       <option data-countrycode="GM" value="+220">Gambia (+220)</option>
                                       <option data-countrycode="GE" value="+7880">Georgia (+7880)</option>
                                       <option data-countrycode="DE" value="+49">Germany (+49)</option>
                                       <option data-countrycode="GH" value="+233">Ghana (+233)</option>
                                       <option data-countrycode="GI" value="+350">Gibraltar (+350)</option>
                                       <option data-countrycode="GR" value="+30">Greece (+30)</option>
                                       <option data-countrycode="GL" value="+299">Greenland (+299)</option>
                                       <option data-countrycode="GD" value="+1473">Grenada (+1473)</option>
                                       <option data-countrycode="GP" value="+590">Guadeloupe (+590)</option>
                                       <option data-countrycode="GU" value="+671">Guam (+671)</option>
                                       <option data-countrycode="GT" value="+502">Guatemala (+502)</option>
                                       <option data-countrycode="GN" value="+224">Guinea (+224)</option>
                                       <option data-countrycode="GW" value="+245">Guinea - Bissau (+245)</option>
                                       <option data-countrycode="GY" value="+592">Guyana (+592)</option>
                                       <option data-countrycode="HT" value="+509">Haiti (+509)</option>
                                       <option data-countrycode="HN" value="+504">Honduras (+504)</option>
                                       <option data-countrycode="HK" value="+852">Hong Kong (+852)</option>
                                       <option data-countrycode="HU" value="+36">Hungary (+36)</option>
                                       <option data-countrycode="IS" value="+354">Iceland (+354)</option>
                                       <option data-countrycode="IN" value="+91">India (+91)</option>
                                       <option data-countrycode="ID" value="+62">Indonesia (+62)</option>
                                       <option data-countrycode="IR" value="+98">Iran (+98)</option>
                                       <option data-countrycode="IQ" value="+964">Iraq (+964)</option>
                                       <option data-countrycode="IE" value="+353">Ireland (+353)</option>
                                       <option data-countrycode="IL" value="+972">Israel (+972)</option>
                                       <option data-countrycode="IT" value="+39">Italy (+39)</option>
                                       <option data-countrycode="JM" value="+1876">Jamaica (+1876)</option>
                                       <option data-countrycode="JP" value="+81">Japan (+81)</option>
                                       <option data-countrycode="JO" value="+962">Jordan (+962)</option>
                                       <option data-countrycode="KZ" value="+7">Kazakhstan (+7)</option>
                                       <option data-countrycode="KE" value="+254">Kenya (+254)</option>
                                       <option data-countrycode="KI" value="+686">Kiribati (+686)</option>
                                       <option data-countrycode="KP" value="+850">Korea North (+850)</option>
                                       <option data-countrycode="KR" value="+82">Korea South (+82)</option>
                                       <option data-countrycode="KW" value="+965">Kuwait (+965)</option>
                                       <option data-countrycode="KG" value="+996">Kyrgyzstan (+996)</option>
                                       <option data-countrycode="LA" value="+856">Laos (+856)</option>
                                       <option data-countrycode="LV" value="+371">Latvia (+371)</option>
                                       <option data-countrycode="LB" value="+961">Lebanon (+961)</option>
                                       <option data-countrycode="LS" value="+266">Lesotho (+266)</option>
                                       <option data-countrycode="LR" value="+231">Liberia (+231)</option>
                                       <option data-countrycode="LY" value="+218">Libya (+218)</option>
                                       <option data-countrycode="LI" value="+417">Liechtenstein (+417)</option>
                                       <option data-countrycode="LT" value="+370">Lithuania (+370)</option>
                                       <option data-countrycode="LU" value="+352">Luxembourg (+352)</option>
                                       <option data-countrycode="MO" value="+853">Macao (+853)</option>
                                       <option data-countrycode="MK" value="+389">Macedonia (+389)</option>
                                       <option data-countrycode="MG" value="+261">Madagascar (+261)</option>
                                       <option data-countrycode="MW" value="+265">Malawi (+265)</option>
                                       <option data-countrycode="MY" value="+60">Malaysia (+60)</option>
                                       <option data-countrycode="MV" value="+960">Maldives (+960)</option>
                                       <option data-countrycode="ML" value="+223">Mali (+223)</option>
                                       <option data-countrycode="MT" value="+356">Malta (+356)</option>
                                       <option data-countrycode="MH" value="+692">Marshall Islands (+692)</option>
                                       <option data-countrycode="MQ" value="+596">Martinique (+596)</option>
                                       <option data-countrycode="MR" value="+222">Mauritania (+222)</option>
                                       <option data-countrycode="YT" value="+269">Mayotte (+269)</option>
                                       <option data-countrycode="MX" value="+52">Mexico (+52)</option>
                                       <option data-countrycode="FM" value="+691">Micronesia (+691)</option>
                                       <option data-countrycode="MD" value="+373">Moldova (+373)</option>
                                       <option data-countrycode="MC" value="+377">Monaco (+377)</option>
                                       <option data-countrycode="MN" value="+976">Mongolia (+976)</option>
                                       <option data-countrycode="MS" value="+1664">Montserrat (+1664)</option>
                                       <option data-countrycode="MA" value="+212">Morocco (+212)</option>
                                       <option data-countrycode="MZ" value="+258">Mozambique (+258)</option>
                                       <option data-countrycode="MN" value="+95">Myanmar (+95)</option>
                                       <option data-countrycode="NA" value="+264">Namibia (+264)</option>
                                       <option data-countrycode="NR" value="+674">Nauru (+674)</option>
                                       <option data-countrycode="NP" value="+977">Nepal (+977)</option>
                                       <option data-countrycode="NL" value="+31">Netherlands (+31)</option>
                                       <option data-countrycode="NC" value="+687">New Caledonia (+687)</option>
                                       <option data-countrycode="NZ" value="+64">New Zealand (+64)</option>
                                       <option data-countrycode="NI" value="+505">Nicaragua (+505)</option>
                                       <option data-countrycode="NE" value="+227">Niger (+227)</option>
                                       <option data-countrycode="NG" value="+234">Nigeria (+234)</option>
                                       <option data-countrycode="NU" value="+683">Niue (+683)</option>
                                       <option data-countrycode="NF" value="+672">Norfolk Islands (+672)</option>
                                       <option data-countrycode="NP" value="+670">Northern Marianas (+670)</option>
                                       <option data-countrycode="NO" value="+47">Norway (+47)</option>
                                       <option data-countrycode="OM" value="+968">Oman (+968)</option>
                                       <option data-countrycode="PW" value="+680">Palau (+680)</option>
                                       <option data-countrycode="PA" value="+507">Panama (+507)</option>
                                       <option data-countrycode="PG" value="+675">Papua New Guinea (+675)</option>
                                       <option data-countrycode="PY" value="+595">Paraguay (+595)</option>
                                       <option data-countrycode="PE" value="+51">Peru (+51)</option>
                                       <option data-countrycode="PH" value="+63">Philippines (+63)</option>
                                       <option data-countrycode="PL" value="+48">Poland (+48)</option>
                                       <option data-countrycode="PT" value="+351">Portugal (+351)</option>
                                       <option data-countrycode="PR" value="+1787">Puerto Rico (+1787)</option>
                                       <option data-countrycode="QA" value="+974">Qatar (+974)</option>
                                       <option data-countrycode="RE" value="+262">Reunion (+262)</option>
                                       <option data-countrycode="RO" value="+40">Romania (+40)</option>
                                       <option data-countrycode="RU" value="+7">Russia (+7)</option>
                                       <option data-countrycode="RW" value="+250">Rwanda (+250)</option>
                                       <option data-countrycode="SM" value="+378">San Marino (+378)</option>
                                       <option data-countrycode="ST" value="+239">Sao Tome &amp; Principe (+239)</option>
                                       <option data-countrycode="SA" value="+966">Saudi Arabia (+966)</option>
                                       <option data-countrycode="SN" value="+221">Senegal (+221)</option>
                                       <option data-countrycode="CS" value="+381">Serbia (+381)</option>
                                       <option data-countrycode="SC" value="+248">Seychelles (+248)</option>
                                       <option data-countrycode="SL" value="+232">Sierra Leone (+232)</option>
                                       <option data-countrycode="SG" value="+65">Singapore (+65)</option>
                                       <option data-countrycode="SK" value="+421">Slovak Republic (+421)</option>
                                       <option data-countrycode="SI" value="+386">Slovenia (+386)</option>
                                       <option data-countrycode="SB" value="+677">Solomon Islands (+677)</option>
                                       <option data-countrycode="SO" value="+252">Somalia (+252)</option>
                                       <option data-countrycode="ZA" value="+27">South Africa (+27)</option>
                                       <option data-countrycode="ES" value="+34">Spain (+34)</option>
                                       <option data-countrycode="LK" value="+94">Sri Lanka (+94)</option>
                                       <option data-countrycode="SH" value="+290">St. Helena (+290)</option>
                                       <option data-countrycode="KN" value="+1869">St. Kitts (+1869)</option>
                                       <option data-countrycode="SC" value="+1758">St. Lucia (+1758)</option>
                                       <option data-countrycode="SD" value="+249">Sudan (+249)</option>
                                       <option data-countrycode="SR" value="+597">Suriname (+597)</option>
                                       <option data-countrycode="SZ" value="+268">Swaziland (+268)</option>
                                       <option data-countrycode="SE" value="+46">Sweden (+46)</option>
                                       <option data-countrycode="CH" value="+41">Switzerland (+41)</option>
                                       <option data-countrycode="SI" value="+963">Syria (+963)</option>
                                       <option data-countrycode="TW" value="+886">Taiwan (+886)</option>
                                       <option data-countrycode="TJ" value="+7">Tajikstan (+7)</option>
                                       <option data-countrycode="TH" value="+66">Thailand (+66)</option>
                                       <option data-countrycode="TG" value="+228">Togo (+228)</option>
                                       <option data-countrycode="TO" value="+676">Tonga (+676)</option>
                                       <option data-countrycode="TT" value="+1868">Trinidad &amp; Tobago (+1868)</option>
                                       <option data-countrycode="TN" value="+216">Tunisia (+216)</option>
                                       <option data-countrycode="TR" value="+90">Turkey (+90)</option>
                                       <option data-countrycode="TM" value="+7">Turkmenistan (+7)</option>
                                       <option data-countrycode="TM" value="+993">Turkmenistan (+993)</option>
                                       <option data-countrycode="TC" value="+1649">Turks &amp; Caicos Islands (+1649)</option>
                                       <option data-countrycode="TV" value="+688">Tuvalu (+688)</option>
                                       <option data-countrycode="UG" value="+256">Uganda (+256)</option>
                                       <option data-countrycode="GB" value="+44">UK (+44)</option>
                                       <option data-countrycode="UA" value="+380">Ukraine (+380)</option>
                                       <option data-countrycode="AE" value="+971">United Arab Emirates (+971)</option>
                                       <option data-countrycode="UY" value="+598">Uruguay (+598)</option>
                                       <option data-countrycode="US" value="+1">USA (+1)</option>
                                       <option data-countrycode="UZ" value="+7">Uzbekistan (+7)</option>
                                       <option data-countrycode="VU" value="+678">Vanuatu (+678)</option>
                                       <option data-countrycode="VA" value="+379">Vatican City (+379)</option>
                                       <option data-countrycode="VE" value="+58">Venezuela (+58)</option>
                                       <option data-countrycode="VN" value="+84">Vietnam (+84)</option>
                                       <option data-countrycode="VG" value="+84">Virgin Islands - British (+1284)</option>
                                       <option data-countrycode="VI" value="+84">Virgin Islands - US (+1340)</option>
                                       <option data-countrycode="WF" value="+681">Wallis &amp; Futuna (+681)</option>
                                       <option data-countrycode="YE" value="+969">Yemen (North)(+969)</option>
                                       <option data-countrycode="YE" value="+967">Yemen (South)(+967)</option>
                                       <option data-countrycode="ZM" value="+260">Zambia (+260)</option>
                                       <option data-countrycode="ZW" value="+263">Zimbabwe (+263)</option>
                                    </optgroup>
                                 </select>
                              </div>
                              <div class="col-md-9">
                                 <input type="tel" class="form-control" name="phone" value="" placeholder="Phone" required="" pattern="[6-9]{1}[0-9]{9}" title="Enter Valid 10 digits Mobile Number" minlength="10" maxlength="12">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <select name="location" class="form-control mt-2" required="">
                              <option value="">Are you interested in buying 3BHK property in Tellapur?</option>
                              <option value="Yes">Yes</option>
                              <option value="No">No</option>
                           </select>
                            
                           <!--<select name="flattype" class="form-control" required>-->
                           <!--   <option value="">Are you interested in buying a 3BHK apartment starting from 1.25 crores?</option>-->
                           <!--   <option value="Yes">Yes</option>-->
                           <!--   <option value="No">No</option>-->
                           <!--</select>-->
                           
                           <br>  
                           <select name="budget" class="form-control" required="">
                              <option value="">Select your preferred flat type and preferred Budget?</option>
                              <option value="3BHK | 1865 SFT | Price@1.33 Cr*">3BHK | 1865 SFT | Price@1.33 Cr*</option>
                              <option value="3BHK | 1915 SFT | Price@1.36 Cr*">3BHK | 1915 SFT | Price@1.36 Cr*</option>
                              <option value="3BHK | 1965 SFT | Price@1.39 Cr*">3BHK | 1965 SFT | Price@1.39 Cr*</option>
                              <option value="3BHK | 2035 SFT | Price@1.44 Cr*">3BHK | 2035 SFT | Price@1.44 Cr*</option>
                           </select>
                           
                        </div>
                        <div class="form-group">
                           <input type="hidden" name="utm_source" value="<?php echo $utm_source ?>">
                           <input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>">
                           <input type="hidden" name="utm_campaign" value="<?php echo $utm_campaign ?>">
                           <input type="hidden" name="utm_term" value="<?php echo $utm_term ?>">
                           <input type="hidden" name="keyword" value="<?php echo $keyword ?>">
                           <input type="hidden" name="matchtype" value="<?php echo $matchtype ?>">
                           <input type="hidden" name="device" value="<?php echo $device ?>">
                           <input type="hidden" name="SRD_val" value="<?php echo $SRD_val ?>">
                           <input type="hidden" name="fullurl" value="<?php echo $fullurl ?>">
                        </div>
                        <div class="button-box d-flex justify-content-start">
                           <button type="submit" onclick="disableBtn()" class="btn enqbtn text-white">
                           <span id="staticEnquireNowSpinner" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                           <span id="homeenquiryformButton">Submit Now</span>
                           </button>
                        </div>
                        <input type="hidden" name="token" id="token" value="">
                     </form>
                  </div>
               </div>
            </div>
         </section>
<script>
    let homeFormBtnEl = document.getElementById('homeFormBtn');
    homeFormBtnEl.addEventListener("submit", function() {
        let homeenquiryformButtonEl = document.getElementById('homeenquiryformButton');
        homeenquiryformButtonEl.textContent = "Submitting....";
    });
</script>
<script>
  const myCarousel = document.querySelector('#sliderSection');
  const carousel = new bootstrap.Carousel(myCarousel, {
    interval: 5000, // 5 seconds
    ride: 'carousel',
    wrap: true 
  });
</script>

         
         <div class="clearfix"></div>
         <!--?php include 'includes/footer.php' ?-->
         <!--?php include 'includes/bottom-links.php' ?-->
      </div>
      <script src="https://www.kenyt.ai/botapp/ChatbotUI/dist/js/bot-loader.js" type="text/javascript" data-bot="25624986"></script>
   
</body></html>