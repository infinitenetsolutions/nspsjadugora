<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Netaji Subhas Public School - Special Academic Enviroment</title>
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
		                    <h1 class="page-title">Special Academic Enviroment</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.php">Home</a>
		                        </li>
		                        <li>Special Academic Enviroment</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->
		
		<!-- About Us Start -->
        <div id="rs-about-2" class="rs-about-2 sec-spacer">
            <div class="container">
                
                
                
                <div class="row rs-vertical-bottom">
                    <div class="col-lg-7 col-md-12">
                        <div class="sec-title mb-30">
                            <h2>Special Academic Enviroment</h2>      
                            
                        </div>
                         <?php         
			include 'include/config.php';
 			$sel = "SELECT * from tbl_academic where  `status` = '".md5("visible")."'";
 		
			$run=mysqli_query($dbcon,$sel);
			while($result=mysqli_fetch_assoc($run)){
			     
			?>    
                
                        <p class="mobile-mb-50">
                          <?php echo $result['academic_description']; ?>    
                         </p>
    
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="about-img rs-image-effect-shine">
                            <img src="admin/images/academic/<?php echo $result['academic_image'] ?>" alt="img02" style=" margin-left: 123px;  margin-bottom: 156px;" >
                        </div>
                    </div>
                    
                     <?php } ?>
                </div>
                
                
               
            </div>
        </div>
        <!-- About Us End -->




		

       
		
       
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
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
		 <!-- main js -->
        <script src="js/main.js"></script>
    </body>


</html>