<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/tstyle.css">
    <script src="js/jquery-3.6.0.js"></script>
    <!-- <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/aos/dist/aos.css">

    <script src="bower_components/aos/dist/aos.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script> -->
    
     <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
    </script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
    </script>
   
   
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


<style>
  body{
      font-family: 'Roboto', sans-serif;
  }
</style>


</head>

<body>


 <!-- ---------------TESTIMONIAL-5------------ -->


<!-- TESTIMONIALS -->
<section class="testimonials">
	<div class="container">

      <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-12 col-xl-12">
          <div id="customers-testimonials" class="owl-carousel ">

            <!--TESTIMONIAL 1 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/10.png">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">EMILIANO AQUILANI</div>
            </div>
            <!--END OF TESTIMONIAL 1 -->
            <!-- TESTIMONIAL 2 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/5.png">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">ANNA ITURBE</div>
            </div>
           <!-- -END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">LARA ATKINSON</div>
            </div>
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">IAN OWEN</div>
            </div>
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="http://themes.audemedia.com/html/goodgrowth/images/testimonial3.jpg" alt="">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">MICHAEL TEDDY</div>
            </div> -->
            <!--END OF TESTIMONIAL 5 -->
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- END OF TESTIMONIALS -->







<script>

jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 5000,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 3
		              }
		            }
		        });
        	});


    </script> 
     
</body>

</html>