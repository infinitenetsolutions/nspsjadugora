<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Netaji Subhas Public School - News & Events</title>
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
		                    <h1 class="page-title">NEWS AND EVENTS</h1>
		                    <ul>
		                        <li>
		                            <a class="active" href="index.php">Home</a>
		                        </li>
		                        <li>NEWS AND EVENTS</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- Breadcrumbs End -->
		
		
<!-- Events Start -->
        <div class="rs-events-2 sec-spacer">
            <div class="container">
                <div class="row space-bt30">
                    
                    <?php         
			include 'include/config.php';
 			$sel = "SELECT * from  tbl_news where  `status` = '".md5("visible")."'";
 		
			$run=mysqli_query($dbcon,$sel);
			while($result=mysqli_fetch_assoc($run)){
			    
			    //$date = <?php echo $result['news_date']; 
               
			     
			   
			?>    
                    
                    
                    <div class="col-lg-6 col-md-12">
                        <div class="event-item">
                            <div class="row rs-vertical-middle">
                                <div class="col-md-6">
                                    <div class="event-img">
                                        <img src="admin/images/news/<?php echo $result['news_image']; ?>" alt="events Images" />
                                        <a class="image-link" href="#" title="">
                                            <i class="fa fa-link"></i>
                                        </a>
                                    </div>                              
                                </div>
                                <div class="col-md-6">
                                    <div class="event-content">
                                        <div class="event-meta">
                                            <div class="event-date">
                                                <i class="fa fa-calendar"></i>
                                                <span><?php //echo date('F d Y', strtotime($date)); ?><?php echo $result['news_date']; ?></span>
                                            </div>
                                            <!--<div class="event-time">-->
                                            <!--    <i class="fa fa-clock-o"></i>-->
                                            <!--    <span>12.30AM-05.30PM</span>-->
                                            <!--</div>-->
                                        </div>
                                        <h3 class="event-title"><a href="#"><?php echo $result['name']; ?></a></h3>
                                        <div class="event-location">
                                            <!--<i class="fa fa-map-marker"></i>-->
                                            <span></span>
                                        </div>
                                        <div class="event-desc">
                                            <p>
                                                <!--There are many variations of passag of Lorem Ipsum available, but the majority have suffered.-->
                                            </p>
                                        </div>
                                       <!--  <div class="event-btn">
                                            <a href="events-details.html">Join Event</a>
                                        </div> -->
                                    </div>                          
                                </div>
                            </div>                          
                        </div>
                    </div>
                    <?php } ?>
                    
                    
                    <!--<div class="col-lg-6 col-md-12">-->
                    <!--    <div class="event-item">-->
                    <!--        <div class="row rs-vertical-middle">-->
                    <!--            <div class="col-md-6">-->
                    <!--                <div class="event-img">-->
                    <!--                    <img src="images/events/5.jpg" alt="events Images" />-->
                    <!--                    <a class="image-link" href="images/events/kids1.html" title="University Tour 2018">-->
                    <!--                        <i class="fa fa-link"></i>-->
                    <!--                    </a>-->
                    <!--                </div>                              -->
                    <!--            </div>-->
                    <!--            <div class="col-md-6">-->
                    <!--                <div class="event-content">-->
                    <!--                    <div class="event-meta">-->
                    <!--                        <div class="event-date">-->
                    <!--                            <i class="fa fa-calendar"></i>-->
                    <!--                            <span>28 June 2017</span>-->
                    <!--                        </div>-->
                    <!--                        <div class="event-time">-->
                    <!--                            <i class="fa fa-clock-o"></i>-->
                    <!--                            <span>12.30AM-05.30PM</span>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                    <h3 class="event-title"><a href="events-details.html">Freshers Day reception <br>ceremony 2017</a></h3>-->
                    <!--                    <div class="event-location">-->
                    <!--                        <i class="fa fa-map-marker"></i>-->
                    <!--                        <span>Venue A, Main Campus</span>-->
                    <!--                    </div>-->
                    <!--                    <div class="event-desc">-->
                    <!--                        <p>-->
                    <!--                            There are many variations of passag of Lorem Ipsum available, but the majority have suffered.-->
                    <!--                        </p>-->
                    <!--                    </div>-->
                                       <!--  <div class="event-btn">
                    <!--                        <a href="events-details.html">Join Event</a>-->
                    <!--                    </div> -->
                    <!--                </div>                          -->
                    <!--            </div>-->
                    <!--        </div>                          -->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
               
            <!--     <nav aria-label="Page navigation example" class="mt-50">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled"><a class="page-link fa fa-angle-left" href="#" tabindex="-1"></a></li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link dotted" href="#">...</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link fa fa-angle-right" href="#"></a></li>
                    </ul>
                </nav> -->
            </div>
        </div>
        <!-- Events End -->


		

       
		
       
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