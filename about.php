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
					<li class="current"><a href="#" title="">About</a></li>
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
    
   <section id="bricks">

   	<div class="row narrow">
        
        <div class="col-twelve tab-full">
        
            <div class="row half-bottom">
            
                <div class="col-six tab-full">
                    <img src="images/shutterbug.jpg"/>
                </div>
                
                <div class="col-six">
                    <h2 class="text-center">About IEEE SCT SB</h2>
                    <p class="drop-cap">About</p>
                    
                </div>
                
            </div>
            
            <div class="row half-bottom">
            
                <div class="col-twelve">

		    	<h3 class="text-center">Success in Numbers</h3>

		      <ul class="stats-tabs text-center">
                  <li><a href="#"><span class="count">4</span> <em>Societies</em></a></li>
                  <li><a href="#"><span class="count">567</span> <em>Members</em></a></li>
                  <li><a href="#"><span class="count">56</span> <em>Volunteers</em></a></li>
                  <li><a href="#"><span class="count">40</span> <em>Events</em></a></li>
                  <li><a href="#"><span class="count">8</span> <em>Succesfull years</em></a></li>
				</ul>	      		

		   </div>
                
            </div>
            
            <div class="row">
            
                <div class="col-twelve">
                
                    <h3 class="text-center">EXECOM 2017</h3>
                    <div class="row execom-row">
                        
                        <?php 
                            $query="SELECT * FROM `execom`";
                            $result=mysqli_query($con,$query);
                            while ($row=mysqli_fetch_array($result)){
                        ?>
                        
                        <div class="card col-three tab-full text-center">
                            <img src="<?php echo $row['image'] ?>" alt="Avatar" style="width:100%">
                            <div class="container">
                                <h4><b><?php echo $row['name'] ?></b></h4> 
                                <p><?php echo $row['position'] ?></p> 
                            </div>
                            <div class="soc-link">
                                <a href="<?php echo $row['facebook_url'] ?>" style="color: #3b5998">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="<?php echo $row['linkedin_url'] ?>" style="color: #007bb6">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>  
                
                        <?php } ?>
                        
                    </div>
                        
                </div>
                
            </div>
            
        </div>
        
   	</div> <!-- end row -->

   </section> <!-- end bricks -->

   
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

</body>

</html>