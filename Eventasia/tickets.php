<?php
$eid=$_POST['eid'];
$nt=$_POST['nt'];
$uid=$_POST['uid'];

$link = mysqli_connect("localhost", "root", "", "eventasia");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql1 = "SELECT * FROM  EVENTS WHERE EID='".$eid."'";

$sql2 = "SELECT * FROM  USERS WHERE UID='".$uid."'";

if($result = mysqli_query($link, $sql1)){
    if(mysqli_num_rows($result) > 0){
        if($row = mysqli_fetch_array($result)){
				$ename = $row['NAME'];
				$edate = $row['DATE'];
				$etime = $row['TIME'];
				$eloc = $row['LOCATION'];
                $price = $row['PRICE'];
        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
if($result = mysqli_query($link, $sql2)){
    if(mysqli_num_rows($result) > 0){
        if($row = mysqli_fetch_array($result)){
                $fname = $row['FNAME'];
				$lname = $row['LNAME'];
                $email = $row['EMAIL'];
        }
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title>Eventasia | Ticket</title>

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

    
	 
      <div class="navigation-menu">
          <div class="container">
            
            <div class="navbar-header col-md-2">
              
              <a class="container"><img src="assets/img/logo1.png" alt=""></a>
            </div>
	       </div>
	  
	  
	  
	  
  
  
  
  
  
	
	<section id="subscribe-section">
      <div class="container">
	  <h1 class="page-title wow fadeInRight" data-wow-delay="300ms" align="center">
            TICKET
		</h1>
        <div class="row">
          <div class="col-md-12">
            <div class="content">
              <div class="subscribe-box">
                <form class="subscribe-form" action="signup.php" method="post">
                  <input type="text" readonly name="name" id="name" placeholder="" class="form-control last" value="<?php echo 'NAME : '.$fname.' '.$lname; ?>">
				  <input type="text" readonly name="email"  id="email"placeholder="" class="form-control last" value="<?php echo 'EMAIL : '.$email; ?>">
				   <input type="text" readonly name="notickets" id="notickets" placeholder="" class="form-control last" value="<?php echo'work in progress'; ?>">
				   <input type="text" readonly name="name" id="name" placeholder="" class="form-control last" value="<?php echo 'EVENT NAME : '.$ename; ?>">
				   <input type="text" readonly name="location" id="location" placeholder="" class="form-control last" value="<?php echo 'EVENT LOCATION: '.$eloc; ?>">
				   <input type="text" readonly name="date" id="date" placeholder="" class="form-control last" value="<?php echo 'EVENT DATE : '.$edate; ?>">
				   <input type="text" readonly name="timing" id="timing" placeholder="" class="form-control last" value="<?php echo 'EVENT TIME : '.$etime; ?>">
                 
			 
				</form>
              </div>
            </div>
          </div>
        </div>
		
      </div>
    </section>
    <!-- Subscribe Section End -->

	
	
	
	<div class="navigation-menu">
          <div class="container">
            
            <div class="navbar-header col-md-2">
              
              <a class="container"><img src="assets/img/logo1.png" alt=""></a>
            </div>
	       </div>
	  
   
	
	
	
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



    </header>
    <!-- Header Area wrapper End -->
	
 

     

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