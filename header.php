<?php
session_start();
$actual_link = $_SERVER["PHP_SELF"];
$hosting_urls=array('/cedhosting/linuxhosting.php','/cedhosting/wordpresshosting.php','/cedhosting/windowshosting.php','/cedhosting/cmshosting.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!---fonts-->
<!--script-->
<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<!--lightboxfiles-->
<script type="text/javascript">
	$(function() {
	$('.team a').Chocolat();
	});
</script>	
<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
						<script type="text/javascript">
							$(function() {
								$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
							});
						</script>						
<!--script-->
<!-- custom css -->
<link rel="stylesheet" href="css/customcss.css">
<!-- custom css -->
<!-- fa fa cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- fa fa cdn -->
<!-- jquery cdn -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- jquery cdn -->
</head>
<body>
<!---header--->
<div class="header">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<i class="sr-only">Toggle navigation</i>
						<i class="icon-bar"></i>
						<i class="icon-bar"></i>
						<i class="icon-bar"></i>
					</button>				  
					<div class="navbar-brand">
						<h1><a href="index.php"><span class="logo-color-left">Ced</span><span class="logo-color-right">Hosting</span></a></h1>
					</div>
				</div>

	<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class=<?php echo ($actual_link=='/cedhosting/index.php')? "active" : "" ?>><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
						<li class=<?php echo ($actual_link=='/cedhosting/about.php')? "active" : "" ?>><a href="about.php">About</a></li>
						<li class=<?php echo ($actual_link=='/cedhosting/services.php')? "active" : "" ?>><a href="services.php">Services</a></li>
						<li class="dropdown<?php echo (in_array($actual_link,$hosting_urls)) ? " active" : ""?>" >
							<a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" >Hosting<i class="caret"></i></a>
							<ul class="dropdown-menu" >
								<li ><a href="linuxhosting.php">Linux hosting</a></li>
								<li ><a href="wordpresshosting.php">WordPress Hosting</a></li>
								<li ><a href="windowshosting.php">Windows Hosting</a></li>
								<li ><a href="cmshosting.php">CMS Hosting</a></li>
							</ul>			
						</li>
						<li class=<?php echo ($actual_link=='/cedhosting/pricing.php')? "active" : "" ?>><a href="pricing.php">Pricing</a></li>
						<li class=<?php echo ($actual_link=='/cedhosting/blog.php')? "active" : "" ?>><a href="blog.php">Blog</a></li>
						<li class=<?php echo ($actual_link=='/cedhosting/contact.php')? "active" : "" ?>><a href="contact.php">Contact</a></li>
						<li><a href="#" id="fa-fa-font-size"><i class="fa fa-shopping-cart"></i></a></li>
						<?php
						if (isset($_SESSION['user'])) {
							echo '<li><a href="logout.php">Logout</a></li>';
						}
						else {
							$active_link=($actual_link=="/cedhosting/login.php" ? "active" : "");
							echo '<li class='.$active_link.'><a href="login.php">Login</a></li>';
						}
						?>
					</ul>	
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
</div>
<!---header--->