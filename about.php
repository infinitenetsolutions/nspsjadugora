<!DOCTYPE html>
<html lang="zxx">
    
<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 06:07:51 GMT -->
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Netaji Subhas Public School - About</title>
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
		                    <h1 class="page-title">About Us</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="#">Home</a>
		                        </li>
		                        <li>About Us</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->
		
		<!-- History Start -->
        <div class="rs-history sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 rs-vertical-bottom mobile-mb-50">
                    	<a href="#">
							<img src="images/about/history.jpg" alt="History Image"/>
                    	</a>
                    </div>
                    <div class="col-lg-6 col-md-12">
		                <div class="abt-title">
		                    <h2>ABOUT US</h2>
		                </div>
		                
		                 <?php         
			include 'include/config.php';
 			$sel = "SELECT * from tbl_about where `about_id` = '1' && `status` = '".md5("visible")."'";
 		
			$run=mysqli_query($dbcon,$sel);
			while($result=mysqli_fetch_assoc($run)){
			     //   echo $result["about_information"];
			    	$aboutInformations  = json_decode($result["about_information"]);
			   
			?>    
                    	<div class="about-desc">
                			<p><?php echo htmlspecialchars_decode($aboutInformations->description); ?></p>


                        <!--    <div id="accordion" class="rs-accordion-style1">-->
                           
                        <!--    <div class="card">-->
                        <!--        <div class="card-header" id="headingTwo">-->
                        <!--            <h3 class="acdn-title collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
                        <!--                READ MORE-->
                        <!--            </h3>-->
                        <!--        </div>-->
                        <!--        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">-->
                        <!--            <div class="card-body">-->
                        <!--               The managing committee of the school has committed to tread on the path of progress to enable the students of this school to constantly improve and better equip, to effcetively confront the examinations and challenges of life. This school is having well experienced and qualified faculty members. It provides equal opportunities to all students without any discrimination. It also develops selfconfidence, honesty, humility and moral responsibility amongst students in a congenial atmosphere. "Strive succeed Survie" are the three elements of character required by the present generation in the highly competitive scenario of the world. Education provides us a practical assistance to strive and to emerge as human beings endowed with intellect and wisdom that can curve a niche for themselves and thus succeed in their lives. Meaningful education which imparts the timeless values and redefines the existing in ever changing scenario, paves way for survival. Swami "We must have education which is life building, man making character building and assimilating fine ideas." Netaji Subhas Public School as a pioneering institution, has emulated the great visionary's vision and has endeavored to provided the students with the same. The school has let flow the stream of mankind into the outstretched hands of the world, who is ever ready to lead with the values like truthfulness, compassion, self-control and perseverance which help them to realise their dreams..-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                         
                        <!--</div>-->


                			
                    	</div>
                    	
                    		<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- History End -->

        <!-- Mission Start -->
        <div class="rs-mission sec-color sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mobile-mb-50">
		                <div class="abt-title">
		                    <h2>OUR MISSION</h2>
		                </div>
		                 <?php
			include 'include/config.php';
 			$sel = "SELECT * from tbl_mission  where `mission_id` = '1' && `status` = '".md5("visible")."'";
 		
			$run=mysqli_query($dbcon,$sel);
			while($result=mysqli_fetch_assoc($run)){
			    	$missionInformations  = json_decode($result["mission_information"]);
			    
			   
			?>    
		                
                    	<div class="about-desc">
                			<p>	<?php echo htmlspecialchars_decode($missionInformations->description); ?>

</p>
                    	</div>
                    	 <?php } ?>
                    	
                    	
                    </div>
                    <div class="col-lg-6 col-md-12">
                    	<div class="row">
                    		<div class="col-md-6 mobile-mb-30">
                    			<a href="#">
									<!--<img src="images/about/mission1.jpg" alt="Mission Image"/>-->
		                    	</a> 
                    		</div>
                    		<div class="col-md-6">
		                    	<a href="#">
									<img src="images/about/mission2.jpg" alt="Mission Image"/>
		                    	</a>                 			
                    		</div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mission End -->

        <!-- Vision Start -->
        <div class="rs-vision sec-spacer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mobile-mb-50">
                        <div class="vision-img rs-animation-hover">
							<img src="images/about/vision.jpg" alt="img02"/>
							<a class="popup-youtube rs-animation-fade" href="https://www.youtube.com/watch?v=3f9CAMoj3Ec" title="Video Icon">
							</a>
							<div class="overly-border"></div>
						</div>
                    </div>
                    <div class="col-lg-6 col-md-12">
		                <div class="abt-title">
		                    <h2>OUR VISION</h2>
		                </div>
		                
		                
		                 <?php
			include 'include/config.php';
 			$sel = "SELECT * from tbl_vision  where `vision_id` = '1' && `status` = '".md5("visible")."'";
 		
			$run=mysqli_query($dbcon,$sel);
			while($result=mysqli_fetch_assoc($run)){
			    	$visionInformations  = json_decode($result["vision_information"]);
			    
			   
			?>    
						    
                    	<div class="vision-desc">
                			<p>	<?php echo htmlspecialchars_decode($visionInformations->description); ?>

</p>
                    	</div>
                    	<?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vision End -->


        <!-- Calltoaction Start -->
        <div id="rs-calltoaction" class="rs-calltoaction sec-spacer bg4">
            <div class="container">
                <div class="rs-cta-inner text-center">
                    <div class="sec-title mb-50 text-center">
                        <h2 class="white-color">Our Aims and Objective</h2>  
                        
                        
                          <?php
                    include 'include/config.php';
                    $sel = "SELECT * from tbl_aims  where `aim_id` = '1' && `status` = '".md5("visible")."'";
                    
                    $run=mysqli_query($dbcon,$sel);
                    while($result=mysqli_fetch_assoc($run)){
                    // $aimInformations  = json_decode($result["aim_description"]);
			    
			   
			?>    
                        <p class="white-color"></p>
                        
                        <?php echo $result['aim_description']; ?></p>
                        
                        <?php } ?>
                    </div>
				   
				</div>
            </div>
        </div>
        <!-- Calltoaction End -->

		

       
		
        <!-- Partner Start -->
        <div id="rs-partner" class="rs-partner pt-70 pb-70">
            <div class="container">
                <div class="sec-title mb-50">
                    <h2>GALLERY</h2>      
                    
                </div>
                <div class="rs-carousel owl-carousel" data-loop="true" data-items="5" data-margin="80" data-autoplay="true" data-autoplay-timeout="5000" data-smart-speed="2000" data-dots="false" data-nav="false" data-nav-speed="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-md-device="5" data-md-device-nav="false" data-md-device-dots="false">
                    <div class="partner-item">
                        <a href="gallery.php"><img src="images/gallery/1.jpg" alt="Gallery Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="gallery.php"><img src="images/gallery/1.jpg" alt="Gallery Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="gallery.php"><img src="images/gallery/1.jpg" alt="Gallery Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="gallery.php"><img src="images/gallery/1.jpg" alt="Gallery Image"></a>
                    </div>
                    <div class="partner-item">
                        <a href="gallery.php"><img src="images/gallery/1.jpg" alt="Gallery Image"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Partner End -->
       
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

<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Apr 2020 06:17:37 GMT -->
</html>