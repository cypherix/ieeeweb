<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>IEEE SB | SCT College Of Engineering</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/swiper.min.css">
        

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<link rel="icon" href="favicon.png" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="./">IEEE SCT SB</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					<li><a href="./" title="">Home</a></li>									
					<li><a href="about.php" title="">About</a></li>
					<li><a href="societies" title="">Societies</a></li>
					<li><a href="achivements.php" title="">Achivements</a></li>	
					<li><a href="contact.php" title="">Contact</a></li>										
				</ul>
			</nav> <!-- end main-nav-wrap -->

			<div class="search-wrap">
				
				<form role="search" method="get" class="search-form" action="search.php">
					<label>
						<span class="hide-content">Search for:</span>
						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="key" title="Search for:" autocomplete="off">
					</label>
					<input type="submit" class="search-submit" value="Search">
				</form>

				<a href="#" id="close-search" class="close-btn">Close</a>

			</div> <!-- end search wrap -->	

			<div class="triggers">
				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
				<a class="menu-toggle" href="#"><span>Menu</span></a>
			</div> <!-- end triggers -->	
   		
   	</div>     		
   	
   </header> <!-- end header -->
    
    <?php
        $con=mysqli_connect('localhost','root','root','ieee');
        mysqli_select_db($con,"ieee");
    ?>

       <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

            <?php 
                $id=$_GET['id'];
                $query="SELECT * FROM `events` WHERE `event_id`='$id'";
                $result=mysqli_query($con,$query);
                while ($row=mysqli_fetch_array($result)){
            ?>
            
   			<article class="format-gallery">  

                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo $row['image'] ?>">
                        </div>
                            <?php
                                $query="SELECT * FROM `image_table` WHERE `event_id`='$id'";
                                $result1=mysqli_query($con,$query);
                                while ($row2=mysqli_fetch_array($result1)){
                            ?>
                            <div class="swiper-slide">
                                <img src="<?php echo $row2['image']; ?>"> 
                            </div>
                            <?php } ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
                
				<div class="primary-content">

                    <h1 class="page-title"><?php echo $row['event_name'] ?></h1>	

					<ul class="entry-meta">
						<li class="date"><?php echo $row['date'] ?></li>						
						<li class="cat"><a href="societies/societies.php?tag=<?php echo $row['tag'] ?>"><?php echo $row['tag'] ?></a></li>			
					</ul>						

                    <?php echo $row['description'] ?>
                        
				</div> <!-- end entry-primary -->	
				
            </article>
   		       <?php } ?>

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->

   </section> <!-- end content -->



    <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            
                <center><img src="images/IEEE%20Logo%20Black.png"/></center>
		      </div>

	      	<div class="col-two tab-1-3 mob-1-2 site-links">

	      		<h4>Site Links</h4>

	      		<ul>
	      			<li><a href="#">About</a></li>
						<li><a href="#">Groups</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Achievments</a></li>
						<li><a href="#">Contact</a></li>
					</ul>

	      	</div> <!-- end site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Social</h4>

	      		<ul>
                    <li><a href="#">Facebook</a></li>
				</ul>
	      	           	
	      	</div> <!-- end social links --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">

	      		<h4>Adress</h4>

	      		<p>SCT, TVM-18</p>
                
            </div>

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->
   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/jquery.appear.js"></script>
   <script src="js/main.js"></script>
   <script src="js/swiper.min.js"></script>
   <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        autoHeight: true, //enable auto height
        autoplay: 2500,
        autoplayDisableOnInteraction: false,
    });
    </script>

</body>

</html>