<!DOCTYPE html>
<html lang="zxx">
    

<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Netaji Subhas Public School - School staff</title>
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
		                    <h1 class="page-title">Our School Staff</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.php">Home</a>
		                        </li>
		                        <li>Our School Staff</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->
		
		
<!-- Team Start -->
        <div id="rs-team-2" class="rs-team-2 team-all pt-100 pb-70">
            <div class="container">
                <div class="row">
                    
            <?php         
			include 'include/config.php';
 			$sel = "SELECT * from  tbl_staff where  `status` = '".md5("visible")."'";
 		
			$run=mysqli_query($dbcon,$sel);
			while($result=mysqli_fetch_assoc($run)){
			     
			   
			?>    
                    
                    
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <div class="team-item">
                            <div class="team-img">
                                <a href="#"><img src="admin/images/team/<?php echo $result['staff_image']; ?>" alt="" /></a>
                                <!--<div class="social-icon">-->
                                <!--    <a href="#"><i class="fa fa-facebook"></i></a>-->
                                <!--    <a href="#"><i class="fa fa-twitter"></i></a>-->
                                <!--    <a href="#"><i class="fa fa-google-plus"></i></a>-->
                                <!--    <a href="#"><i class="fa fa-linkedin"></i></a>-->
                                <!--</div>-->
                            </div>
                            <div class="team-body">
                                <a href="#"><h3 class="name"><?php echo $result['staff_name']; ?></h3></a>
                                <span class="designation">Science</span>
                            </div>
                        </div>                      
                    </div>
                    
                    <?php } ?>
                <!--    <div class="col-lg-3 col-md-6 col-xs-6">-->
                <!--        <div class="team-item">-->
                <!--            <div class="team-img">-->
                <!--                <a href="#"><img src="images/teachers/1.jpg" alt="" /></a>-->
                <!--                <div class="social-icon">-->
                <!--                    <a href="#"><i class="fa fa-facebook"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-linkedin"></i></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="team-body">-->
                <!--                <a href="teachers-single.html"><h3 class="name">Mahabub Alam</h3></a>-->
                <!--                <span class="designation">Business Studies</span>-->
                <!--            </div>-->
                <!--        </div>                      -->
                <!--    </div>-->
                <!--    <div class="col-lg-3 col-md-6 col-xs-6">-->
                <!--        <div class="team-item">-->
                <!--            <div class="team-img">-->
                <!--                <a href="#"><img src="images/teachers/1.jpg" alt="" /></a>-->
                <!--                <div class="social-icon">-->
                <!--                    <a href="#"><i class="fa fa-facebook"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-linkedin"></i></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="team-body">-->
                <!--                <a href="teachers-single.html"><h3 class="name">Jesika Helan</h3></a>-->
                <!--                <span class="designation">Arts</span>-->
                <!--            </div>-->
                <!--        </div>                      -->
                <!--    </div>-->
                <!--    <div class="col-lg-3 col-md-6 col-xs-6">-->
                <!--        <div class="team-item">-->
                <!--            <div class="team-img">-->
                <!--                <a href="#"><img src="images/teachers/1.jpg" alt="" /></a>-->
                <!--                <div class="social-icon">-->
                <!--                    <a href="#"><i class="fa fa-facebook"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-linkedin"></i></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="team-body">-->
                <!--                <a href="teachers-single.html"><h3 class="name">Deluar Khan</h3></a>-->
                <!--                <span class="designation">Diploma</span>-->
                <!--            </div>-->
                <!--        </div>                      -->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="row">-->
                <!--    <div class="col-lg-3 col-md-6 col-xs-6">-->
                <!--        <div class="team-item">-->
                <!--            <div class="team-img">-->
                <!--                <a href="#"><img src="images/teachers/1.jpg" alt="" /></a>-->
                <!--                <div class="social-icon">-->
                <!--                    <a href="#"><i class="fa fa-facebook"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-linkedin"></i></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="team-body">-->
                <!--                <a href="teachers-single.html"><h3 class="name">Alex Hilfisher</h3></a>-->
                <!--                <span class="designation">Science</span>-->
                <!--            </div>-->
                <!--        </div>                      -->
                <!--    </div>-->
                <!--    <div class="col-lg-3 col-md-6 col-xs-6">-->
                <!--        <div class="team-item">-->
                <!--            <div class="team-img">-->
                <!--                <a href="#"><img src="images/teachers/1.jpg" alt="" /></a>-->
                <!--                <div class="social-icon">-->
                <!--                    <a href="#"><i class="fa fa-facebook"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-linkedin"></i></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="team-body">-->
                <!--                <a href="teachers-single.html"><h3 class="name">Naila Naime</h3></a>-->
                <!--                <span class="designation">Business Studies</span>-->
                <!--            </div>-->
                <!--        </div>                      -->
                <!--    </div>-->
                <!--    <div class="col-lg-3 col-md-6 col-xs-6">-->
                <!--        <div class="team-item">-->
                <!--            <div class="team-img">-->
                <!--                <a href="#"><img src="images/teachers/1.jpg" alt="" /></a>-->
                <!--                <div class="social-icon">-->
                <!--                    <a href="#"><i class="fa fa-facebook"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-linkedin"></i></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="team-body">-->
                <!--                <a href="teachers-single.html"><h3 class="name">Shoykot Hassan</h3></a>-->
                <!--                <span class="designation">Arts</span>-->
                <!--            </div>-->
                <!--        </div>                      -->
                <!--    </div>-->
                <!--    <div class="col-lg-3 col-md-6 col-xs-6">-->
                <!--        <div class="team-item">-->
                <!--            <div class="team-img">-->
                <!--                <a href="#"><img src="images/teachers/1.jpg" alt="" /></a>-->
                <!--                <div class="social-icon">-->
                <!--                    <a href="#"><i class="fa fa-facebook"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-linkedin"></i></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="team-body">-->
                <!--                <a href="teachers-single.html"><h3 class="name">Eyamin Hossain</h3></a>-->
                <!--                <span class="designation">Diploma</span>-->
                <!--            </div>-->
                <!--        </div>                      -->
                <!--    </div>-->
                <!--</div>-->
                <!--<div class="row">   -->
                <!--    <div class="col-lg-3 col-md-6 col-xs-6">-->
                <!--        <div class="team-item">-->
                <!--            <div class="team-img">-->
                <!--                <a href="#"><img src="images/teachers/1.jpg" alt="" /></a>-->
                <!--                <div class="social-icon">-->
                <!--                    <a href="#"><i class="fa fa-facebook"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-linkedin"></i></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="team-body">-->
                <!--                <a href="teachers-single.html"><h3 class="name">Nuhan Freddy</h3></a>-->
                <!--                <span class="designation">Science</span>-->
                <!--            </div>-->
                <!--        </div>                      -->
                <!--    </div>-->
                <!--    <div class="col-lg-3 col-md-6 col-xs-6">-->
                <!--        <div class="team-item">-->
                <!--            <div class="team-img">-->
                <!--                <a href="#"><img src="images/teachers/1.jpg" alt="" /></a>-->
                <!--                <div class="social-icon">-->
                <!--                    <a href="#"><i class="fa fa-facebook"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-linkedin"></i></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="team-body">-->
                <!--                <a href="teachers-single.html"><h3 class="name">Istiak Hossain</h3></a>-->
                <!--                <span class="designation">Business Studies</span>-->
                <!--            </div>-->
                <!--        </div>                      -->
                <!--    </div>-->
                <!--    <div class="col-lg-3 col-md-6 col-xs-6">-->
                <!--        <div class="team-item">-->
                <!--            <div class="team-img">-->
                <!--                <a href="#"><img src="images/teachers/1.jpg" alt="" /></a>-->
                <!--                <div class="social-icon">-->
                <!--                    <a href="#"><i class="fa fa-facebook"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
                <!--                    <a href="#"><i class="fa fa-linkedin"></i></a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <div class="team-body">-->
                <!--                <a href="teachers-single.html"><h3 class="name">Rhusda D’suza</h3></a>-->
                <!--                <span class="designation">Arts</span>-->
                <!--            </div>-->
                <!--        </div>                      -->
                <!--    </div>-->
                    <!--<div class="col-lg-3 col-md-6 col-xs-6">-->
                    <!--    <div class="team-item">-->
                    <!--        <div class="team-img">-->
                    <!--            <a href="#"><img src="images/teachers/1.jpg" alt="" /></a>-->
                    <!--            <div class="social-icon">-->
                    <!--                <a href="#"><i class="fa fa-facebook"></i></a>-->
                    <!--                <a href="#"><i class="fa fa-twitter"></i></a>-->
                    <!--                <a href="#"><i class="fa fa-google-plus"></i></a>-->
                    <!--                <a href="#"><i class="fa fa-linkedin"></i></a>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="team-body">-->
                    <!--            <a href="teachers-single.html"><h3 class="name">Masud Rana</h3></a>-->
                    <!--            <span class="designation">Diploma</span>-->
                    <!--        </div>-->
                    <!--    </div>                      -->
                    <!--</div>-->
                </div>
            </div>
        </div>
        <!-- Team End -->




		

       
		
       
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