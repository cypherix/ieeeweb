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
	         <a href="#">IEEE SCT SB</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					<li class="current"><a href="#" title="">Home</a></li>									
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
    
            <div class="brick entry featured-grid animate-this">
         		<div class="entry-content">
         			<div id="featured-post-slider" class="flexslider">
			   			<ul class="slides">
                            
                            <?php 
                                $query="SELECT * FROM `featured` sort ORDER BY `date` DESC";
                                $result=mysqli_query($con,$query);
                                while ($row1=mysqli_fetch_array($result)){
                            ?>
                            
				   			<li>
				   				<div class="featured-post-slide">

						   			<div class="post-background" style="background-image:url('<?php echo $row1['image'];?>');"></div>

								   	<div class="overlay"></div>			   		

								   	<div class="post-content">
								   		<ul class="entry-meta">
												<li><?php echo $row1['date'];?></li> 
												<li><a href="societies/societies.php?tag=<?php echo $row1['tag'];?>" ><?php echo $row1['tag'];?></a></li>
											</ul>	

								   		<h1 class="slide-title"><a href="single.php?id=<?php echo $row1['feature_id'];?>" title=""><?php echo $row1['Heading'];?></a></h1> 
								   	</div> 				   					  
				   			
				   				</div>
				   			</li> <!-- /slide -->

				   			<?php } ?>
				   		</ul> <!-- end slides -->
				   	</div> <!-- end featured-post-slider -->        			
         		</div> <!-- end entry content -->         		
         	</div>
    
    
    
   <!-- masonry
   ================================================== -->
   <section id="bricks">
       <h2 class="add-bottom text-center">Latest Posts</h2>
   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>

             <?php
                $query="SELECT * FROM `events` sort ORDER BY `date` DESC LIMIT 10";
                $result=mysqli_query($con,$query);
                while ($row=mysqli_fetch_array($result)){
                
             ?>
         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="single.php?id=<?php echo $row['event_id'];?>" class="thumb-link">
	                  <img src="<?php echo $row['image'];?>" alt="building">             
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				<a href="societies/societies.php?tag=<?php echo $row['tag'] ?>"><?php echo $row['tag'] ?></a>            				
               			</span>			
               		</div>
                    <p><?php echo $row['date'] ?></p>
               		<h1 class="entry-title"><a href="single.php?id=<?php echo $row['event_id'] ?>"><?php echo $row['event_name'];?></a></h1>
               		
               	</div>
						<div class="entry-excerpt">
							<?php 
                                if(strlen($row['description'])<=150)
                                {
                                    echo $row['description'];
                                }
                                else
                                {
                                    $y=substr($row['description'],0,150) . '...';
                                    echo $y;
                                } ?>
                                <a style="color:#000" href="single.php?id=<?php echo $row['event_id'] ?>">[Read More]</a>
						</div>
               </div>

        		</article> <!-- end article -->
            <?php } ?>
         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->
       <center><a href="events.php?tag=" class="button see-all">See All</a></center>
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