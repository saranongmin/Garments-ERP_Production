<?php 
		session_start();
					if($_SESSION['signin']=="Sign In"){
	$db = mysqli_connect('localhost','root','','production')
		or die('Error connecting to MySQL server.');
		
	if (isset($_GET['edit'])) {

    	$id = $_GET['edit'];

		$sql=mysqli_query($db,"SELECT * FROM batch_info WHERE id='".$id."' ");

			if ($row=$sql->fetch_assoc()) {
				
		  $no = $row['batch_no'];
		  $Gsm = $row['gsm']; 
		  $Size =$row['size'];
		  $Color =$row['color'];
		  $Collar =$row['collar'];
		  $Curf =$row['curf'];
		  $Taken_Date =$row['merch_taken_date'];
		  $Deadline =$row['deadline_date'];
		  $id=$row['id'];
			}

	}
	
	if (isset($_POST['update'])) {

		$no = $_POST['batch_no'];
		$Gsm = $_POST['gsm'];
		$Size =$_POST['size'];
		$Color =$_POST['color'];
		$Collar =$_POST['collar'];
		$Curf =$_POST['curf'];
		$Taken_Date =$_POST['merch_taken_date'];
		$Deadline =$_POST['deadline_date'];
		$id=$_POST['id'];
	
	$sql="UPDATE batch_info SET batch_no='".$no."',gsm='".$Gsm."', 
	size='".$Size."' ,color='".$Color."' ,collar='".$Collar."', 
	curf='".$Curf."', merch_taken_date='".$Taken_Date."' ,
	deadline_date='".$Deadline."' where id='".$id."'   ";

		if (mysqli_query($db,$sql)) {

			echo '<script type="text/javascript">alert("Information Update successfully")</script>';

			header("refresh:0; url=batch_info_view.php") ;
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
		<title>Batch Information</title>

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
								Batch Information				
							</h1>	
							<p class="text-white link-nav"><a href="projects.html">Production </a> 
							<span class="lnr lnr-arrow-right"></span>  <a href="fabric.html">Fabric </a>
							<span class="lnr lnr-arrow-right"></span>  <a href="batch_info.php">Batch Information </a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->
			
	<section class="home-about-area section-gap" id="about">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						
						<div class="col-lg-4 col-md-12 home-about-right relative">
							<form class="form-wrap" method ="POST" action="batch_info_edit.php">
								<h4 class="text-white pb-20"><center>Batch Information</center></h4>
								<input type="hidden" name="id" value="<?php echo $id ?>" >
								<input type="text" class="form-control" placeholder="Batch No" name="batch_no" value="<?php echo $no ?>" >
								
								<h4>GSM:</h4>
								<select name="gsm">
									<option>--Select--</option>
						<option value="Thin" <?php if($Gsm=='Thin') echo "selected='selected'"; ?> >Thin</option>
						<option value="Squat" <?php if($Gsm=='Squat') echo "selected='selected'"; ?>>Squat</option>
		
									   </select>
									   
									   
									  
									 <h4>Size:</h4>
									  <select name ="size">
				         <option>--Select--</option>
						<option value="S" <?php if($Size=='S') echo "selected='selected'"; ?> >S</option>
						<option value="M" <?php if($Size=='M') echo "selected='selected'"; ?>>M</option>
						<option value="L" <?php if($Size=='L') echo "selected='selected'"; ?> >L</option>
						<option value="XL" <?php if($Size=='XL') echo "selected='selected'"; ?>>XL</option>
									</select><br>
									
									
								<input type="text" class="form-control" placeholder="Color:" name ="color" value="<?php echo $Color ?>">
								 <h4> Collar:</h4>
								 <label class="container" for ="yes">Yes
								 <input type="radio"  name="collar" value="yes"  id="yes" <?php echo($Gsm=='yes')?'checked':'' ?> >
							        <span class="checkmark"></span>
								 
					            </label>
					          <label class="container">No
                                 <input type="radio"  name="collar" value="no"  id="no" <?php echo($Gsm=='no')?'checked':'' ?> >
							<span class="checkmark"></span>
								 
								 
								 </label>
								 
								 
								 <h4>Curf:</h4>
								 <label class="container" for ="yes">Yes
								 <input type="radio"  name="curf" value="yes"  id="yes" <?php echo($Curf=='yes')?'checked':'' ?> >
							<span class="checkmark"></span>
								 </label>
								  <label class="container" for ="no">No
                                 <input type="radio"  name="curf" value="no"  id="no" <?php echo($Curf=='no')?'checked':'' ?> >
							 <span class="checkmark"></span>
								 </label>
								 
								<input type="date" class="form-control" 
								placeholder="Taken Date from Merchandising" name="merch_taken_date" value="<?php echo $Taken_Date ?>" size="35" >
								<input type="date" class="form-control" placeholder="Deadline Date" name ="deadline_date" value="<?php echo$Deadline ?>" size="35">
							
                                  <button type="submit" name="update">Update</button>
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