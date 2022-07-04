<?php
    //error_reporting(E_ALL);
  include ("include/config.php");



  if(isset($_POST['submit']))



       {
	
	

         $date = date('Y-m-d H:i:s');

        $first_name=$_POST['first_name']; 
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        
         //$visible = md5("visible");
        

    $sql="insert into  tbl_enquiry (first_name,last_name,email,subject,message,create_date)values('$first_name','$last_name','$email','$subject','$message','$date')";
    $query=mysqli_query($dbcon,$sql);
    
    if($sql)
    {
    
    
    echo "<script>
    

    window.location.replace = 'contact.php';
    </script>";
    
    }
    


// if ($_REQUEST['first_name'] != '' && $_REQUEST['first_name'] != NULL 
//             && $_REQUEST['last_name'] != '' && $_REQUEST['last_name'] != NULL
 
//             && $_REQUEST['email'] != '' && $_REQUEST['email'] != NULL
//             && $_REQUEST['subject'] != '' && $_REQUEST['subject'] != NULL
//             && $_REQUEST['message'] != '' && $_REQUEST['message'] != NULL
           

			
// //            && $_REQUEST['program'] != '' && $_REQUEST['program'] != NULL && isset($_REQUEST['send'])
//     ) {
//         //send email
//         $email = $_REQUEST['email'];
//         $subject = 'Enquiry from ' . $_REQUEST['first_name']. ' ' . $_REQUEST['last_name']
// //                . '| Regarding ' . $_REQUEST['subject']
//         ;
//         $message1 = "Name : " . $_REQUEST['first_name']. ' ' .$_REQUEST['last_name']
                   

//                 . "\r\n Email : " . $_REQUEST['email']
// 				. "\r\n Subject : " . $_REQUEST['subject']
//                 . "\r\n Message : " . $_REQUEST['message']
                
                
                  
//         $message1 = wordwrap($message1, 70, "\r\n");
//         //mail("info@nsuniv.ac.in", $subject, $message1);
//         mail("rinki.premlata@gmail.com", $subject, $message1);
    

  
//     }
  
 } 


?>




<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Netaji Subhas Public School | Contact</title>
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <!-- Css Section Start -->
        <?php require_once("include/css.php"); ?>
    <!-- Css Section End -->
    
    </head>
    <body class="home2">
        <!--Preloader area start here-->
        <div class="book_preload">
            <div class="book">
                <div class="book__page"></div>
                <div class="book__page"></div>
                <div class="book__page"></div>
            </div>
        </div>
        <!--Preloader area end here-->
        
        	  <!--Header start-->
        <?php require_once("include/header.php"); ?>
        <!--Header end-->
		
      
		
		<!-- Breadcrumbs Start -->
		<div class="rs-breadcrumbs bg7 breadcrumbs-overlay">
		    <div class="breadcrumbs-inner">
		        <div class="container">
		            <div class="row">
		                <div class="col-md-12 text-center">
		                    <h1 class="page-title">Contact</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.php">Home</a>
		                        </li>
		                        <li>Contact</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div><!-- .breadcrumbs-inner end -->
		</div>
		<!-- Breadcrumbs End -->
		
		<!-- Contact Section Start -->
		<div class="contact-page-section sec-spacer">
        	<div class="container">
        	
        		

        		<div class="contact-comment-section">
        			<h3>CONTACT US</h3>
                    <!--<div id="form-messages"></div>-->
					<form method="post">
							<div class="row">                                      
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>First Name*</label>
										<input name="first_name" id="first_name" class="form-control" type="text" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Last Name*</label>
										<input name="last_name" id="last_name" class="form-control" type="text" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Email*</label>
										<input name="email" id="email" class="form-control" type="email" required>
									</div>
								</div>
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Subject *</label>
										<input name="subject" id="subject" class="form-control" type="text" required>
									</div>
								</div>
							</div>
							<div class="row"> 
								<div class="col-md-12 col-sm-12">    
									<div class="form-group">
										<label>Message *</label>
										<textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
									</div>
								</div>
							</div>							        
							<div class="form-group mb-0">
								<input class="btn-send" name="submit" type="submit" value="Submit Now">
							</div>
							   
					</form>						
        		</div>
                <br>
                <div id="googleMap"></div>
        	</div>
        </div>
        <!-- Contact Section End -->     
    
       
        <!-- Footer Start -->
       <?php
       include 'footer.php';
       ?>
        <!-- Footer End -->

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        
        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true" class="fa fa-close"></span>
	        </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="eg: Computer Technology" type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->
        

        <!-- modernizr js -->
        <script src="js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="js/jquery.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- slick.min js -->
        <script src="js/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- counter top js -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <!-- magnific popup -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- rsmenu js -->
        <script src="js/rsmenu-main.js"></script>
		<!-- contact js -->
        <script src="js/contact.form.js"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- google map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgC6ZapXdUzFdeQOFhdm_wucwlDMMQ8CQ"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
    </body>

</html>