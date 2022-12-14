<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>vedatrix</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- font awesome-->
   <script src="https://kit.fontawesome.com/3cf3331188.js" crossorigin="anonymous"></script>
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <!--My jquery-->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="myjq.js"></script>

</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <!--<div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>-->
   <!-- end loader -->
   <!-- header -->

   <header>
      <!-- header inner -->
      <div class="header">
         <div class="container-fluid">

            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo">
                           <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                  <div class="header_information">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="<?=base_url()?>/"><i class="fa-solid fa-house"></i> Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="<?=base_url()?>/about"><i class="fa-solid fa-user-minus"></i> About Us</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="ourwork.html"><i class="fa-solid fa-gears"></i> Services</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html"><i class="fa-solid fa-address-book"></i> Contact Us</a>
                              </li>
                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    More
                                 </a>
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Link 1</a>
                                    <a class="dropdown-item" href="#">Link 2</a>
                                    <a class="dropdown-item" href="#">Link 3</a>
                                 </div>
                              </li>
                           </ul>
                           <div class="sign_btn"><a href="#"><i class="fa-solid fa-phone"></i> +91 9901568368</a></div>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->
   <?= $this->renderSection('content') ?>
   <!--  contact -->
   <div id="contact" class="contact">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Request A call back</h2>
                  
               </div>
            </div>
            <div class="col-md-6 offset-md-3">
               <form id="request" class="main_form" url="<?=base_url()?>/contact">
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contactus" placeholder="Full Name" type="text" name="name" required="true" id="fname">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Phone Number" type="number" name="phone" required="true" id="fnumber">
                     </div>
                     <div class="col-md-12">
                        <input class="contactus" placeholder="Email" type="email" name="email" required="true" id="femail" >
                     </div>
                     <div class="col-md-12">
                        <textarea class="contactus" type="text" Message="Name" name="msg" required="true" placeholder="message" id="fmsg"></textarea>
                     </div>
                     <div class="col-sm-12">
                        <input id="sub_btn" type="submit" class="send_btn"></input>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   <!-- end contact -->



   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row border-top">
               <div class="col-md-6 padding_bottom1   ">
                  <h3><i class="fa-solid fa-envelope-circle-check"></i> Subscribe Now</h3>
                  <form class="footer_form">
                     <input class="enter" placeholder="Enter your email" type="type" name="Enter your email">
                     <button class="submit">submit</button>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="row">
                     <div class="col-md-5 offset-md-1 padding_bottom1">
                        <h3><i class="fa-solid fa-square-up-right"></i> Links</h3>
                        <ul class="cont">
                           <li><i class="fa-solid fa-caret-right"></i><a href="" style="color:grey;"> Home</a></li>
                           <li><i class="fa-solid fa-caret-right"></i><a href="" style="color:grey;"> Home</a></li>
                           <li><i class="fa-solid fa-caret-right"></i><a href="" style="color:grey;"> Home</a></li>
                           <li><i class="fa-solid fa-caret-right"></i><a href="" style="color:grey;"> Home</a></li>
                        </ul>

                     </div>
                     <div class="col-md-5 offset-md-1">
                        <h3><i class="fa-solid fa-address-book"></i> Contact us</h3>
                        <ul class="cont">
                           <li>Aditya enclave Opp. New bus stand Bidar</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>?? 2019 All Rights Reserved. <a href="https://html.design/"> www.vedatrix.xyz</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>

   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>