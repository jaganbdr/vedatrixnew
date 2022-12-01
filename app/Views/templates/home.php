<?= $this->extend('templates/base') ?>

<?= $this->section('content') ?>

<!-- banner -->
<div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
      <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>

      </ol>
      <div class="carousel-inner">
         <div class="carousel-item active">
            <img class="first-slide" src="images/banner.jpg" alt="First slide">
            <div class="container">
               <div class="carousel-caption relative">
                  <h1> <span>We Provide</span> Web Services</h1>
                  <a href="#contact">Contact Us</a>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <img class="second-slide" src="images/banner.jpg" alt="Second slide">
            <div class="container">
               <div class="carousel-caption relative">
                  <h1> <span>We Provide</span> Digital Marketing</h1>
                  <a href="#contact">Contact Us</a>
               </div>
            </div>
         </div>
         <div class="carousel-item">
            <img class="third-slide" src="images/banner.jpg" alt="Third slide">
            <div class="container">
               <div class="carousel-caption relative">
                  <h1> <span>We Provide</span> Content Services</h1>
                  <a href="#contact">Contact Us</a>
               </div>
            </div>
         </div>


      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>
   <!-- end banner -->
   <!-- about -->
   <div id="about" class="about">
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2>Web Development & Desiging</h2>
                  <span></span>
                  <p>We have wide-ranging web development skills blended with the top quality essence of expertise. vedatrix is one of the Creative Web Designing Company in Bidar with specialized web designers</p>
                  <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
               </div>
            </div>
            <div class="col-md-5">
               <div class="about_img">
                  <figure><img src="images/about_img.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end about -->
   <!-- mobile -->
   <div id="mobile" class="mobile">
      <div class="container">
         <div class="row d_flex">
            <div class="col-md-5">
               <div class="mobile_img">
                  <figure><img src="images/mobile.png" alt="#" /></figure>
               </div>
            </div>
            <div class="col-md-7">
               <div class="titlepage">
                  <h2>Digital Marketing</h2>
                  <span></span>
                  <p>We provide Digital Marketing Services for all kind of businesses to improve their online presence & traffic </p>
                  <a class="read_more">Read More <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end mobile -->
   <!-- clients -->
   <div class="clients">
      <div class="container">
         <div class="row">
            <div class="col-md-6 offset-md-3">
               <div class="titlepage">
                  <h2>What our clients say</h2>
                  <span></span>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="clients_box">
                  <p>Highly satisfied with the commitment they have given to finish the design with in the timeline. Team has shown new ways to improve my website visibility & dynamism. Hence efficiency of my business enhanced to a great extent. Many thanks for your hard work. Best wishes to Spark Infosys team to reach great heights in near future.</p>
               </div>
               <div class="jonu">
                  <img src="images/cross_img.png" alt="#" />
                  <h3>Pratap G V</h3>
                  <strong>(sure there isn't)</strong>
                  <a class="read_more" href="#">Get A Quote</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end clients -->



<?= $this->endSection() ?>

