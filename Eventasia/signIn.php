<?php
$eid = $_POST['eid'];
$nt = $_POST['nt'];

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Eventasia | SignIn</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >    
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons.css"> 
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" > 
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">   
    
    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/default.css" media="screen" /> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Roof area Starts -->
      <div id="roof" class="hidden-xs">
          <div class="container">
            <div class="col-md-6 col-sm-6">
              <div class="info-bar-address">
                 <i class="icon-location-pin"></i> Bengaluru, Karnataka, India
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
              <!-- Quick Contacts Starts -->
              <div class="quick-contacts">
                  <span><i class="icon-phone"></i> (91) 8884591578</span>
                  <span><i class="icon-envelope"></i><a>eventasia18@gmail.com</a></span>
              </div>
              <!-- Quick Contacts End -->
            </div>
          </div>
      </div>
      <!-- Roof area End -->

      <!-- Nav Menu Section Start -->
      <div class="navigation-menu">
        <nav class="navbar navbar-default navbar-event" >
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-md-2">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" ><img src="assets/img/logo1.png" alt=""></a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar" style=" margin-right: 1px; margin-top: 25px;margin-bottom: 25px; line-height: 40px;">
              
            </div><!-- /navbar-collapse -->
          </div><!-- /container -->
        </nav>
      </div>
      <!-- Nav Menu Section End -->

    </header>
    <!-- Header Area wrapper End -->
	
	 <!-- Page Header Start -->
    <div class="page-header">      
      <div class="container"> 
        <div class="page-header-inner">         
          
          <h1 class="page-title wow fadeInRight" data-wow-delay="300ms">
            Sign-In
          </h1>
        </div>
      </div>
    </div>
    <!-- Page Header End-->   
	
	<!-- Subscribe Section Start -->
    <section id="subscribe-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="content">
              <h5>Please sign in to book tickets</h5>
              <div class="subscribe-box">
                <form name="sign-in" method ="post" action="signIn1.php" class="subscribe-form">
                  <input type="email" name ="email" id="email"class="form-control" placeholder="Enter Your Email" required>
				  <input type="password" name="pass" id="pass"class="form-control" placeholder="Enter Your Password" required>
				  <input  type = "hidden" name="eid" id="eid" value="<?php echo $eid?>">
					<input type="hidden" name="nt" id="nt" value="<?php echo $nt ?>">
						
				  <div class="col-sm-12">
					<input type="submit" class="btn btn-warning" value="Sign In"</div>
				</div>
                </form>
              </div>
            </div>
			</div>
        </div>
      </div>
    </section>
    <!-- Subscribe Section End -->
	

    <!-- Footer Section Start -->   
    <footer class="section">  
      <div class="container">
        <div class="navbar-header col-md-2">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" ><img src="assets/img/logo1.png" alt=""></a>
            </div>
            
            <div class="collapse navbar-collapse" id="navbar" style=" margin-right: 1px; margin-top: 25px;margin-bottom: 25px; line-height: 40px;">
              
            </div>
      </div>      
    </footer>  
    <!-- Footer Section End -->  
   
    </div>
    <!-- Main contetn End -->

    
    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    <i class="icon-arrow-up"></i>
    </a>

     

    <!-- jQuery Load -->    
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Countdown Js -->
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- Smooth scroll JS -->   
    <script src="assets/js/smooth-scroll.js"></script>        
    <!-- Wow Scroll -->
    <script src="assets/js/wow.js"></script>
    <!-- Owl carousel -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Slicknav js -->
    <script src="assets/js/jquery.slicknav.js"></script>
    <!--  Nivo lightbox Js -->
    <script src="assets/js/nivo-lightbox.js"></script>   
    <!-- Contact Form Scripts -->
    <script src="assets/js/form-validator.min.js"></script>  
    <script src="assets/js/contact-form-script.js"></script>    
 
    <!-- All Js plugin -->
    <script src="assets/js/main.js"></script> 
    <!-- Map JS -->
    <script type="text/javascript" src="assets/js/jquery.mapit.min.js"></script>
    <script src="assets/js/initializers.js"></script>

  </body>
</html>