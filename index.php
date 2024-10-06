
<?php
require 'connection.php';

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){


 $name= $_POST['name'];
 $email= $_POST['email'];
 $message= $_POST['message'];
 

$sqlQuery= "INSERT INTO user (name,email,message)
 VALUES ('$name','$email','$message')" ;

if($con->query($sqlQuery)==TRUE){
    
}
else{
    echo 'data  not inserted';
}

}
else{
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/indexstyle.css">
    <link rel="stylesheet" href="css/tstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- for Testimonial -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css"> -->

    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
    </script>
    <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
    </script>


    


  
</head>
<body>


<!-- --------------DESIGN-4_NAVBAR------------ -->
<div class="container-fluid">
<div class="row">
<nav class="navbar navbar-expand-lg navbar-light fixed-top ">
  <div class="container-fluid">
     <ul class="menu cf"><li><a class="navbar-brand fw-bold ms-3 text-white text-center" href="index.html">
      4TA
    </a></li></ul>
     <button class="navbar-toggler cf" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#34495e">
      <span class="navbar-toggler-icon"></span>
     </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <ul class="menu cf">
             <li><a href="index.html">HOME</a></li>
             <li><a href="#about-boxes">ABOUT</a>
              <ul class="submenu">
                <li><a href="#team">Our Team</a></li>
                <!-- <li><a href="gallery.html">Gallery</a></li> -->
              </ul>
            </li>
             <li><a href="#featured-services">SERVICES</a>
               <ul class="submenu">
                 
                 <li><a href="#featured-services">Web Templates</a></li>
                 <li><a href="#featured-services">Graphic Designs</a></li>
                 <li><a href="#featured-services">Cloud Services</a></li>
                 <li><a href="#featured-services">SEO</a></li>
                 <li><a href="#featured-services">Digital Marketing</a></li>
               </ul>
             </li>
             <li><a href="#portfolio">PROJECTS</a>
               <ul class="submenu">
                 <li><a href="#portfolio">project-1</a></li>
                 <li><a href="#portfolio">project-2</a></li>
                 <li><a href="#portfolio">project-3</a></li>
                 
               </ul>	
             </li>
             <li><a href="#contact">CONTACT</a></li>
           </ul> 
         </div>
      </div>
      </div>
      </nav>
    </div>
 
  <div class="row">
 <div class="container-fluid headerr ">
     <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">  
    <!-- <div class="carousel-indicators circle">
           <button type="button" data-bs-target="#carouselExampleIndicators"  class="active owl_btn" aria-current="true" aria-label="slide 1"><span></span></button>
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
           <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>  -->
        <div class="carousel-inner">
           <div class="carousel-item  active">
             <img src="images/slider1.webp" class="d-block w-100 imges" alt="...">
           </div>
           <div class="carousel-item ">
             <img src="images/slider.webp" class="d-block w-100 imges" alt="...">
           </div>
           <!-- <div class="carousel-item ">
            <img src="images/slider6.webp" class="d-block w-100 imges" alt="...">
          </div> -->
          <div class="carousel-item ">
            <img src="images/h_7.jpg" class="d-block w-100 imges" alt="...">
          </div>
          <div class="carousel-item ">
            <img src="images/h_8.webp" class="d-block w-100 imges" alt="...">
          </div> 
        </div>
     </div>
 </div>
</div>


 <!-- ======= About Boxes Section ======= -->
 <section id="about-boxes" class="about-boxes">
  <div class="container" data-aos="fade-up">

    <div class="row">
      <div class="col-lg-4 col-12 col-md-4 d-flex " data-aos="fade-up" data-aos-delay="300">
        <div class="card">
          <img src="images/vision1.jpg" class="card-img-top" alt="...">
          <div class="card-icon">
            <i class="fa fa-envelope"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="">Our Vision</a></h5>
            <p class="card-text"> One Stop Destination for all web design needs that will 
              enable you to be in sync with the latest technologies. We want to be your
                 one-stop shop for everything related to digital marketing and web design. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12 col-md-4 d-flex " data-aos="fade-up" data-aos-delay="100">
        <div class="card">
          <img src="images/mission.jpg" class="card-img-top" alt="..." >
          <div class="card-icon">
            <i class="fa fa-envelope"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="">Our Mission</a></h5>
            <p class="card-text text-justify">Our mission is to provide our customers with the best service and products,
                completing the transaction with a sense of delight and loyalty.we are team of having a long-term experience in web design and web development .
                 </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12 col-md-4 d-flex " data-aos="fade-up" data-aos-delay="200">
        <div class="card">
          <img src="images/plan.jpg" class="card-img-top" alt="...">
          <div class="card-icon">
            <i class="fa fa-envelope"></i>
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="">Our Plan</a></h5>
            <p class="card-text">Our plan is to provide all you need related to fore technology
               that will make your way of life easier by building sites apps and softwares that not only
               look great, but also function well and are easy to use.  </p>
          </div>
        </div>
      </div>
      
    </div>

  </div>
</section>

<div class="container">

</div>
<!-- End About Boxes Section -->

 <!-- ======= Team Section ======= -->
 <section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2 class="text-center mt-5 mb-3">Team</h2>
      <p class="text-dark text-center mb-5">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">

      <div class="col-lg-4 col-12 col-md-4">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="pic"><img src="images/ayesha1.PNG" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Ayesha Bashir</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href="mailto:abc@gmail.com"><i class="fa fa-google"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-instagram"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <div class="pic"><img src="images/muzammil1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>M.Muzammil</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href="mailto:abc@gmail.com"><i class="fa fa-google"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-instagram"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-12 col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <div class="pic"><img src="images/awais1.jpg" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Awais Hussain</h4>
            <span>CTO</span>
            <div class="social">
              <a href="mailto:abc@gmail.com"><i class="fa fa-google"></i></a>
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-instagram"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>
<!-- End Team Section -->
<!-- ----------------gallery----------- -->



<!-- Gallery -->




 <!-- ======= Featured Services Section ======= -->


 <!-- ---------------TESTIMONIAL-4 using for Services section------------- -->

<div class="container">
  <div class="row service-text" >
    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
      <h3 class="mt-5">Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
      <p class=" text-dark">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua.
      </p>
      <ul >
        <li><i class="fa fa-angle-double-right"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
        <li><i class="fa fa-angle-double-right"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
        <li><i class="fa fa-angle-double-right"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
      </ul>
      <p class="text-dark">
        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
        culpa qui officia deserunt mollit anim id est laborum
      </p>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 text-center">
      <img src="images/service2.avif" alt="" class="img-fluid mt-5">
    </div>
  </div>
  
</div>



 <div class="container my-5  justify-content-center">
  <div class=" row justify-content-center ">
    <div class="section-title" id="featured-services">
      <h2 class="text-center  mb-3">SERVICES</h2>
      <p class="text-dark text-center ">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>
      <div class="col-lg-4 col-12 col-md-4  mt-3 ">
          <div class="card service_card mt-3 ">
              <div class="layer"></div>
              <div class="content">
                  <div class="card-body text-center pb-3 ">
                      <div class="row  justify-content-center">
                          <div class="col text-center justify-content-center ">
                            <div class="d-flex flex-lg-row flex-column-reverse no-gutters justify-content-center">
                              <div class="col pr-lg-5"><img class=" img-1 mr-lg-5 " src="images/sw.webp" ></div>
                          </div>
                          <h4 class=" mb-3">Software Development</h4>
                             <p class="bold text-center px-md-3 ">
                              Software development is the process of computer programming, documenting, 
                              testing, and bug fixing and also include research, new development, prototyping, modification,
                                  reuse, re-engineering and maintenance
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-lg-4 col-12 col-md-4  mt-3 ">
        <div class="card service_card mt-3 ">
            <div class="layer"></div>
            <div class="content">
                <div class="card-body text-center pb-3 ">
                    <div class="row  justify-content-center">
                        <div class="col text-center justify-content-center ">
                          <div class="d-flex flex-lg-row flex-column-reverse no-gutters justify-content-center">
                            <div class="col"><img class=" img-1 " src="images/web dev.jpg" id="imag1"></div>
                        </div>
                        <h4 class="mb-3">Web Development</h4>
                        <p class="bold text-center px-md-3">
                        Web Development is the process of computer programming, documenting, 
                              testing, and bug fixing and also include research, new development, prototyping, modification,
                                  reuse, re-engineering and maintenance
                              </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-12 col-md-4  mt-3 ">
      <div class="card service_card mt-3 ">
          <div class="layer"></div>
          <div class="content">
              <div class="card-body text-center pb-3 ">
                  <div class="row  justify-content-center">
                      <div class="col text-center justify-content-center ">
                        <div class="d-flex flex-lg-row flex-column-reverse no-gutters justify-content-center">
                          <div class="col pr-lg-5"><img class=" img-1 mr-lg-5 " src="images/cloud.jpg" ></div>
                      </div>
                      <h4 class=" mb-3">Cloud Services</h4>
                      <p class="bold text-center px-md-3">
                      Cloud copmuting is the process of computer programming, documenting, 
                              testing, and bug fixing and also include research, new development, prototyping, modification,
                                  reuse, re-engineering and maintenance
                              </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<div class=" row justify-content-center ">
  <div class="col-lg-4 col-12 col-md-4  mt-3 ">
      <div class="card service_card mt-3 ">
          <div class="layer"></div>
          <div class="content">
              <div class="card-body text-center pb-3 ">
                  <div class="row  justify-content-center">
                      <div class="col text-center justify-content-center ">
                        <div class="d-flex flex-lg-row flex-column-reverse no-gutters justify-content-center">
                          <div class="col pr-lg-5"><img class=" img-1 mr-lg-5 " src="images/seo.webp" ></div>
                      </div>
                      <h4 class=" mb-3">SEO</h4>
                      <p class="bold text-center px-md-3">
                      SEO is the process of computer programming, documenting, 
                              testing, and bug fixing and also include research, new development, prototyping, modification,
                                  reuse, re-engineering and maintenance
                              </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-4 col-12 col-md-4  mt-3 ">
    <div class="card service_card mt-3 ">
        <div class="layer"></div>
        <div class="content">
            <div class="card-body text-center pb-3 ">
                <div class="row  justify-content-center">
                    <div class="col text-center justify-content-center ">
                      <div class="d-flex flex-lg-row flex-column-reverse no-gutters justify-content-center">
                        <div class="col"><img class=" img-1 " src="images/dm.jpg" ></div>
                    </div>
                    <h4 class=" mb-3">Digital Marketing</h4>
                    <p class="bold text-center px-md-3">
                            Digital Marketing is the process of computer programming, documenting, 
                              testing, and bug fixing and also include research, prototyping, modification,
                                  reuse, re-engineering and maintenance
                              </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-lg-4 col-12 col-md-4  mt-3 ">
  <div class="card service_card mt-3 ">
      <div class="layer"></div>
      <div class="content">
          <div class="card-body text-center pb-3 ">
              <div class="row  justify-content-center">
                  <div class="col text-center justify-content-center ">
                    <div class="d-flex flex-lg-row flex-column-reverse no-gutters justify-content-center">
                      <div class="col pr-lg-5"><img class=" img-1 mr-lg-5 " src="images/gd.jpg" ></div>
                  </div>
                  <h4 class=" mb-3">Graphic Designing</h4>
                  <p class="bold text-center px-md-3">
                            Graphic Designing is the process of computer programming, documenting, 
                              testing, and bug fixing and also include research, prototyping, modification,
                                  reuse, re-engineering and maintenance
                              </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>
</div>




<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2 class="text-center  mb-3">Portfolio</h2>
      <p class="text-dark text-center mb-5"> Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    
    </header>

   

    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="images/w1.webp" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>project-1</h4>
            <p>Application</p>
            <div class="portfolio-links">
              <a href="images/w1.webp" data-gallery="portfolioGallery" class="portfokio-lightbox" title="More Details"><i class="fa fa-image"></i></a>
             
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item #filter-web">
        <div class="portfolio-wrap">
          <img src="images/w2.webp" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>project-1</h4>
            <p>Web Design</p>
            <div class="portfolio-links">
              <a href="#" data-gallery="portfolioGallery" class="portfokio-lightbox" title="More Details"><i class="fa fa-image"></i></a>
              
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="images/w3_r.webp" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>project-2</h4>
            <p>Application</p>
            <div class="portfolio-links">
              <a href="#" data-gallery="portfolioGallery" class="portfokio-lightbox" title="More Details"><i class="fa fa-image"></i></a>
              
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="images/w4.webp" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>project-2</h4>
            <p>WEB Design</p>
            <div class="portfolio-links">
              <a href="#" data-gallery="portfolioGallery" class="portfokio-lightbox" title="More Details"><i class="fa fa-image"></i></a>
             
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item #filter-web">
        <div class="portfolio-wrap">
          <img src="images/w5_r.webp" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>project-3</h4>
            <p>Application</p>
            <div class="portfolio-links">
              <a href="#" data-gallery="portfolioGallery" class="portfokio-lightbox" title="More Details"><i class="ffa fa-image"></i></a>
              
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="images/w6_r.webp" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>project-3</h4>
            <p>Web Design</p>
            <div class="portfolio-links">
              <a href="#" data-gallery="portfolioGallery" class="portfokio-lightbox" title="More Details"><i class="fa fa-image"></i></a>
              
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="images/w7.webp" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>project-4</h4>
            <p>Application</p>
            <div class="portfolio-links">
              <a href="#" data-gallery="portfolioGallery" class="portfokio-lightbox"title="More Details" ><i class="fa fa-image"></i></a>
             
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="images/w8.webp" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>project-4</h4>
            <p>Web Design</p>
            <div class="portfolio-links">
              <a href="#" data-gallery="portfolioGallery" class="portfokio-lightbox" title="More Details"><i class="fa fa-image"></i></a>
              
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item #filter-web">
        <div class="portfolio-wrap">
          <img src="images/w9.webp" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>project-5</h4>
            <p>Application</p>
            <div class="portfolio-links">
              <a href="#" data-gallery="portfolioGallery" class="portfokio-lightbox" title="More Details"><i class="fa fa-image"></i></a>
              
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- End Portfolio Section -->


<!--  
<div class="container-fluid">
  <div class="row text-center">
     <div class="col-md-4">
      <h1>Happy Clients</h1>
      
      <div id="counter">
       
      </div>
     </div>
     <div class="col-md-4">
         <h1>Projects</h1>
            <div id="counter1">
            </div>
     </div>
     <div class="col-md-4">
      <h1>Reviews</h1>
      
      <div id="counter2">
        
      </div>
     </div> 

  </div>

</div>







<!-- our skill set 

<div class="container-fluid">
  <div class="row">
<div class="col-md-6">
<img src="images/11.png">
</div>
<div class="col-md-6">
  <div class="div1">
    <div id="myProgress">
      <div id="myBar"></div>
    </div>
    <div class="div1">
      <div id="myProgressbar">
        <div id="myBarr"></div>
      </div>
    
    <br>
    
    
   
    
</div>
</div>
  </div>

</div>

<script>
  var i = 0;
  function move() {
    if (i == 0) {
      i = 1;
      var elem = document.getElementById("myBar");
      var width = 1;
      var id = setInterval(frame, 10);
      function frame() {
        if (width >= 90) {
          clearInterval(id);
          i = 0;
        } else {
          width++;
          elem.style.width = width + "%";
        }
      }
    }
  }
  move();

  function move() {
    if (j == 0) {
      j = 1;
      var elemm = document.getElementById("myBarr");
      var width1 = 1;
      var idd = setInterval(frame, 10);
      function frame() {
        if (width1 >= 90) {
          clearInterval(idd);
          j = 0;
        } else {
          width1++;
          elemm.style.width1 = width1 + "%";
        }
      }
    }
  }
  </script>
-->





 

<!-- <div class="container">
<div  class="row mt-3 ">
  <h2 class="text-center mt-3 mb-5">Reviews</h2>
  
</div>
</div>

<!-- ---------------TESTIMONIAL------------- 

<section class="testimonials">
	<div class="container">
     <div class="row">
        <div class="col-sm-12 ">
          <div id="customers-testimonials" class="owl-carousel ">

            <!--TESTIMONIAL 1
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/t1.jpg">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name"> ANNA ITURBE</div>
            </div>
            
            <!-- TESTIMONIAL 2 
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="images/t2.jpg">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">EMILIANO AQUILANI</div>
            </div>
           
            <!--TESTIMONIAL 3 
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="t3.jpg">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name"> IAN OWEN</div>
            </div>
           
            <!--TESTIMONIAL 4 
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="t4.jpg">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">LARA ATKINSON</div>
            </div>
           
            <!--TESTIMONIAL 5 
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="t5.jpg">
                <p>Dramatically maintain clicks-and-mortar solutions without functional solutions. Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate.</p>
              </div>
              <div class="testimonial-name">MICHAEL TEDDY</div>
            </div> 
            <!--END OF TESTIMONIAL 5 
          </div>
        </div>
      </div>
      </div>
    </section>
    <!-- END OF TESTIMONIALS 
 -->




<!-- <div class="demo">
        <div class="row">
           <div class="col-md-8">
               <div id="testimonial-slider" class="owl-carousel">
                   <div class="testimonial">
                       <div class="pic">
                           <img src="images/1.png">
                       </div>
                       <h3 class="title">Williamson</h3>
                       <span class="post">Web Developer</span>
                       <p class="description">
                       Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                       A accusantium ad asperiores at atque culpa dolores eaque fugiat
                       hic illo ipsam ipsum minima modi necessitatibus nemo officia, 
                       omnis perferendis placeat sit vitae, consectetur adipisicing elit ipsam.
                       </p>
                   </div>
                  <div class="testimonial">
                       <div class="pic">
                           <img src="images/2.png">
                      </div>
                      <h3 class="title">Kristina</h3>
                      <span class="post">Web Designer</span>
                      <p class="description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                          A accusantium ad asperiores at atque culpa dolores eaque fugiat
                          hic illo ipsam ipsum minima modi necessitatibus nemo officia, 
                          omnis perferendis placeat sit vitae, consectetur adipisicing elit ipsam.
                      </p>
                  </div>
                  <div class="testimonial">
                       <div class="pic">
                           <img src="images/3.png">
                       </div>
                       <h3 class="title">Kristina</h3>
                       <span class="post">Web Designer</span>
                       <p class="description">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                          A accusantium ad asperiores at atque culpa dolores eaque fugiat
                          hic illo ipsam ipsum minima modi necessitatibus nemo officia, 
                          omnis perferendis placeat sit vitae, consectetur adipisicing elit ipsam.
                      </p>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div> -->

  
<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2 class="text-center mt-5  mb-3" >Blog</h2>
      <p class="text-dark text-center mb-5">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      
    </header>

    <div class="row mb-5">

      <div class="col-lg-4">
        <div class="post-box">
          <div class="post-img"><img src="images/blog1.avif" class="img-fluid bg-img hover-zoom" alt=""></div>
          <span class="post-date">Tue, January 15</span>
          <h6 class="post-title">  We'll share everything we know about
             the latest trends, SEO, the best web designers, and so much more.</h6>
          <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="post-box">
          <div class="post-img"><img src="images/blog.webp" class="img-fluid" alt=""></div>
          <span class="post-date">Fri, March 28</span>
          <h3 class="post-title">
            We're here to help you reach more customers, increase your revenue, and improve your business.</h3>
          <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="post-box">
          <div class="post-img"><img src="images/blog3.webp" class="img-fluid" alt=""></div>
          <span class="post-date">Mon, April 11</span>
          <h3 class="post-title"> We will help you create a stunning website, while adding value to
             your organization. We are ready to offer you a full-scale strategic consulting, </h3>
          <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
      </div>

    </div>

  </div>

</section><!-- End Recent Blog Posts Section -->



<!-- section for support team nd form --------contact form------->
<section>
<div class="curve_upper">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 100 1440 150">
    <path fill="#fff" fill-opacity="1" d="M0,224L1440,128L1440,0L0,0Z"></path>
  </svg>
</div>
<div class="curve_lower">
  <div class="container-fluid" id="image" >
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2 class="text-white text-center  mb-5">Contact</h2>
      <p class="text-white"></p>
    </div>

    <div class="row">

      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13613.270778011974!2d74.3644677682851!3d31.46044580574509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919066888d233a7%3A0x907b9a4ede569120!2sPunjab%20Co-Operative%20Housing%20Society%2C%20Lahore%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1653633100330!5m2!1sen!2s" width="380" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div class="address mt-5">
            <i >
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
              </svg>
            </i>
            <h4>Location:</h4>
            <p>Ghazi Road Shoukat town</p>
          </div>

          <div class="email">
            <i class="fa fa-envelope"></i>
            <h4>Email:</h4>
            <p>info@example.com</p>
          </div>

          <div class="phone">
            <i class="fa fa-phone"></i>
            <h4>Call:</h4>
            <p>+1 5589 55488 55s</p>
          </div>

          
        </div>

      </div>

      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="index.php" method="POST" role="form" class="php-email-form">
          <div class="row">
            <div class="form-group ">
              <label for="name">Your Name</label>
              <div class="input-icons">
                <i class="icon ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 20 26">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                </i>
                <input class="form-control input-field" name="name" type="text" placeholder="Enter your Email here">
            </div>
            </div>
            <div class="form-group">
              <label for="name">Your Email</label>
              <div class="input-icons">
                <i class="icon ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 20 26">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                  </svg>
                </i>
                <input class="form-control input-field" type="text" name="email"placeholder="Enter your Email here">
            </div>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="10" required></textarea>
          </div>
          
          <div class="row align-items-center justify-content-center ">
            <ul class="menu cf butn"><li><a><input type="submit" value="Send Message" class="bg-transparent text-white no-border"></a></li></ul>
          </div>
        </form>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

    <!-- <div class="row">
        <h1 class="display-1 text-center text-white mb-3">contact us</h1>
        <p class="text-center text-white mb-5">we will be happy to help you.if you have any query please don contact us</p>
        </div>
    <div class="row">
        <div class="col-md-6">
            <h2 class="display-3 text-white ps-2 P-5" >Our Team is here<br> to help you</h2>
            <p class="ps-2 text-white text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, optio quis perspiciatis eius quod soluta fugit aspernatur placeat! Modi quos accusamus in quis nulla et sapiente ut magnam perspiciatis veritatis.</p>
        </div>
        <div class="col-md-6">
            <form class="form">
                <div class="mb-3">
                      <div class="input-icons">
                        <i class="icon ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                              </svg>
                        </i>
                        <input class="input-field text-white bg-transparent" type="text" placeholder="Enter your Name">
                    </div>
                </div>
                <div class="mb-3">
                      <div class="input-icons">
                        <i class="icon icon1 fa fa-envelope"></i>
                        <input class="input-field  text-white bg-transparent" type="text" placeholder="Enter your E_mail">
                     </div>
                </div>
                <div class="mb-3">
                      <textarea class="form-control  text-white bg-transparent" placeholder="Leave your message here...." rows="5"></textarea>
                 </div>
                 <div class="text-center">
                    <button type="button" class="btn btn1 mt-2 text-white input-field" >Send Message</button>
                 </div>
           </form> 
        </div>
     </div>    -->
    </div>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1410 230">
    <path fill="#fff" fill-opacity="1" d="M0,224L1440,128L1440,320L0,320Z"></path>
  </svg>
</div>
</section>
<!-- Section_End -->
<!-- -----------footer----------- -->
<footer>
  <div class="container-fluid footer-img">
  <div class="row footer-row">
    <div class="col-md-4  pt-5">

      <address>
       <h3 >4TA</h3>
       <p class="text-dark">Address: Ghazi Road Shoukat Town </p>
       <p class="text-dark">Email: 4ta@gmail.com </p>
       <p class="text-dark">Phone: 92-300-12345678 </p>
      </address> 

      <div class=" px-5 d-inline">
        <div class="icon-group">
         <a href="#"><i class="fa fa-twitter icons ms-3 me-2 fs-3"></i></a>
          <a href="#"><i class="fa fa-facebook icons me-2 fs-3"></i></a>
          <a href="#"><i class="fa fa-pinterest icons me-2 fs-3"></i></a>
          <a href="#"><i class="fa fa-instagram icons me-2 fs-3"></i></a>
          <a href="#"><i class="fa fa-rss icons fs-3"></i></a>
        </div>
      </div>

    </div>
    <div class="col-md-3 pt-5 pe-2">
      <!-- <P class="text-white" >JOIN OUR NEWSLETTER</P>
      <div class="input-group">
        <input type="email" class="form-control">
        <input class=" btn sbtn" type="button" value="SUBMIT"> 
      </div> -->
      <div >
        <h4 >Quick Access </h4>
      <a href="#" class="d-block"><i class="fa fa-angle-double-right me-2 mt-2 lh-lg"></i>HOME </a>
      <a href="#" class="d-block"><i class="fa fa-angle-double-right me-2 lh-lg"></i>ABOUT</a>
      <a href="#" class="d-block"><i class="fa fa-angle-double-right me-2"></i>SERVICES</a>
      <a href="#" class="d-block"><i class="fa fa-angle-double-right me-2 lh-lg"></i>PORTFOLIO</a>
      <a href="#" class="d-block"><i class="fa fa-angle-double-right me-2"></i>OUR TEAM</a>
      <a href="#" class="d-block"><i class="fa fa-angle-double-right me-2 lh-lg"></i>GALLERY</a>
      <a href="#" class="d-block"><i class="fa fa-angle-double-right me-2"></i>CONTACT</a>
       </div>

     </div>
     <div class="col-md-3  pt-5">
      <div >
        <h4 >SERVICES </h4>
      <a href="#" class="d-block"><i class="fa fa-angle-double-right me-2 mt-2 lh-lg"></i>WEB DEVELOPMENT </a>
      <a href="#" class="d-block"><i class="fa fa-angle-double-right me-2 lh-lg"></i>APP DEVLOPMENT</a>
      <a href="#" class="d-block"><i class="fa fa-angle-double-right me-2"></i>WEB DESIGNS</a>
      <a href="#" class="d-block"><i class="fa fa-angle-double-right me-2 lh-lg"></i>DIGITAL MARKETING</a>
      <a href="#" class="d-block"><i class="fa fa-angle-double-right me-2"></i>SEO</a>
     
       </div>

     </div>
     <div class="col-md-2  pt-5">
      <div >
        <h4 >SUPPORT</h4>
      <a href="#" class=" d-block"><i class="fa fa-angle-double-right  me-2 mt-2 lh-lg"></i>SUPPORT REQUEST </a>
      <a href="#" class=" d-block"><i class="fa fa-angle-double-right  me-2"></i>CONTACT US</a>
       </div>

     </div>
  </div>
  <hr>
  <div class="row ">
    <div class="text-center  mb-3"><span style="color:#e74c3c">copyright &copy; </span>All Rights Reserved by 2022</div>
    
  </div>
</div>
</footer>
     

  
  
  



</div>


<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>


<script>

$(document).ready(function(){
  /* testiminail---------*/
  // $("#testimonial-slider").owlCarousel({
  //     items:1,
  //     itemsDesktop:[1000,1],
  //     itemsDesktopSmall:[979,1],
  //     itemsTablet:[768,1],
  //     pagination:true,
  //     transitionStyle:"backSlide",
  //     autoPlay:true
  // });

// for testimonial 5
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



  // for counter------

        // let counts=setInterval(updated);
        // let upto=0;
        // function updated(){
        //   var count= document.getElementById("counter");
        //   count.innerHTML=++upto;
        //   if(upto===700)
        //   {
        //     clearInterval(counts);
        //   }
        // }

        

       
          

/*
* Back to top button
*/
let backtotop = select('.back-to-top')
if (backtotop) {
 const toggleBacktotop = () => {
   if (window.scrollY > 100) {
     backtotop.classList.add('active')
   } else {
     backtotop.classList.remove('active')
   }
 }
 window.addEventListener('load', toggleBacktotop)
 onscroll(document, toggleBacktotop)
}

/*
   * Animation on scroll
   
window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: true
    });
  });
  */

 
 


});










</script>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

