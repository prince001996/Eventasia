<?php
$ename=$_POST['ename'];
$edate=$_POST['edate'];
$etime=$_POST['etime'];
$eloc=$_POST['eloc'];

$link = mysqli_connect("localhost", "root", "", "eventasia");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT EID,PRICE,NO_OF_TICKETS FROM  EVENTS NAME=$ename";
 
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                $eid = $row['eid'];
                $price = $row['price'];
                $no_of_tickets = $row['no_of_tickets'];
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
  
   <title>Eventasia | Buy Tickets</title>
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
	
    <link rel="stylesheet" type="text/css" href="assets/css/test.css">  
    

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
                  <span><i class="icon-phone"></i> (+91) 8884591578</span>
                  <span><i class="icon-envelope"></i><a>eventasia18@gmail.com</a></span>
              </div>
              <!-- Quick Contacts End -->
            </div>
          </div>
      </div>
      <!-- Roof area End -->

      <!-- Nav Menu Section Start -->
      <div class="navigation-menu">
        <nav class="navbar navbar-default navbar-event" role="navigation" data-spy="affix" data-offset-top="20">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header col-md-2">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand"><img src="assets/img/logo1.png" alt=""></a>
            </div>

            
          </div><!-- /container -->	

         

        </nav>
      </div>
      <!-- Nav Menu Section End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Page Header Start -->
    <div class="page-header">      
      <div class="container" style="margin-top:20px;"> 
        <div class="page-header-inner">         
          <ol class="breadcrumb wow fadeInDown" data-wow-delay="300ms">
            <li><a href="#">Home</a></li>
			<li><a href="events.html">Events</a></li>
            <li class="page">Book Ticket</li>
          </ol>
          <h1 class="page-title wow fadeInRight" data-wow-delay="300ms">
            Book Tickets
          </h1>
        </div>
      </div>
    </div>
    <!-- Page Header End-->

	
	<div class="demo">
    <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover" style="margin-top:45px">
                <thead style ="font-size:25px">
                    <tr>
                        <th>Event</th>
                        <th>Tickets</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" > <img class="media-object" src="assets/img/movies/dance-2.jpg" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a><?php echo"$ename" ?></a></h4>
                                
                                <span>Available: </span><span class="text-success"><strong><?php echo"$no_of_tickets" ?></strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="number" class="form-control" id="nt" value="">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo"$price" ?></strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?php echo"$price*nt.value" ?></strong></td>
                        
                    </tr>
                    
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Conveyance Fee </h5></td>
                        <td class="text-right"><h5><strong>____</strong></h5></td>
                    </tr>
					<tr>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>GST 15%</h5></td>
                        <td class="text-right"><h5><strong>____</strong></h5></td>
                    </tr>
                    <tr>	
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>____</strong></h3></td>
                    </tr>
					<tr>
					
                        <td>   </td>
                        <td>   </td>
                        <td>
                        </td>
                        <td>
                        <button type="button" class="btn btn-success" style="margin-top: 14px;">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

    <!-- Footer Section Start -->   
    <footer class="section">  
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <h3><img src="assets/img/footer-logo.png" alt=""></h3>
            
          </div>
                   
        </div>
      </div>      
    </footer>  
    <!-- Footer Section End -->  

    <!-- Copytight Start -->
    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="copyright-text text-center">
             ©Designed and Developed by 
              <a rel="nofollow" href="http://graygrids.com">
                Prince the great
              </a>
            </p>
          </div>
        </div>
      </div>
    </section> 
    <!-- Copytight End -->   

    <!-- Go to Top Link -->
    <a href="#header-wrap" class="back-to-top">
    <i class="icon-arrow-up"></i>
    </a>

    
  </body>
</html>