<!DOCTYPE html>

<?php 
	session_start();
					if($_SESSION['signin']=="Sign In"){
	 if (isset($_POST['insert']))
			{ 
          $no = $_POST['batch_no'];
		  $Taken_Date_Fabric = $_POST ['taken_date_fabric'];
          $date = $_POST['prepared_Date']; 

			$db = mysqli_connect('localhost','root','','production')
				or die('Error connecting to MySQL server.');
	 
			$sql = "INSERT INTO garments_info (batch_no, taken_date_fabric,prepared_Date)
                      VALUES ('$no', '$Taken_Date_Fabric', '$date')";
	 
	 
		if(mysqli_query($db, $sql)){

			echo '<script type="text/javascript">alert("Records inserted successfully.")</script>';
			header("refresh:3; url=Garments_info.php");
		
		} else{

			echo "ERROR: Could not able to execute" ;

		}

	 
	}
 ?> 
	<html lang="zxx" class="no-js">
<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Garments Information</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">	
			<link rel="stylesheet" href="css/hexagons.min.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		
<body>
 <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
				  				<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
				  				</ul>
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
				  				<a href="tel:+880 012 3654 896">+880 1717316637</a>
				  				<a href="mailto:shajninislamshorna@gamil.com">shajninislamshorna@gmail.com</a>				
				  				<a href="mailto:sara.nongmin@gamil.com">sara.nongmin@gmail.com</a>				
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" width="50" height="40" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.html">Home</a></li>
				          <li><a href="Garments.html">Garments</a></li>
				          <li><a href="fabric.html">Fabric</a></li>
				   		  <li><a href="contact.html">Contact</a></li>
						  <li><a href="logout1.php">Logout</a></li>
					</ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->
			  
			  <!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Garments Information				
							</h1>	
							<p class="text-white link-nav"><a href="projects.html">Production </a> 
							<span class="lnr lnr-arrow-right"></span>  <a href="Garments.html">Garments </a>
							<span class="lnr lnr-arrow-right"></span>  <a href="Garments_info.php">Garments Information </a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			
	<section class="home-about-area section-gap" id="about">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						
						<div class="col-lg-4 col-md-12 home-about-right relative">
							<form class="form-wrap" method ="post"  action="Garments_info.php">
								<h4 class="text-white pb-20"><center>Garments Information</center></h4>
								<input type="text" class="form-control" name ="batch_no" placeholder="Batch No:">
								
								 
								<input type="text" class="form-control" name ="taken_date_fabric"placeholder="Taken Date from Fabric:">
								<input type="text" class="form-control" name ="prepared_Date" placeholder="Prepared Date:">
								 <button type="submit" name="insert" class="primary-btn">Insert</button>
								  	<p align="right" ><a href='Garments_info_view.php'>
									<img border="0" alt="pdf" src="img/view.png" width="40" height="40">
									</a>
									</p>
								
							</form>
						</div>
					</div>
				</div>	
			</section>
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									mod tempor incididunt ut labore dolore magna aliqua.
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->
		
		</body>	
				</html>
				<?php
		
			}
					else{
						header("Location: logout2.php");
					}
		
		?>