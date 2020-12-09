<?php
include "headercommon.php";
?>
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
								<h1><a href="index.php"><img src="images/logo.png" alt="" width="80" height="80"></a></h1>
							</div>
						</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
								<li><a href="about.php">About</a></li>
								<li class="active"><a href="services.php">Services</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
									<ul class="dropdown-menu">
										<li><a href="linuxhosting.php">Linux hosting</a></li>
										<li><a href="wordpresshosting.php">WordPress Hosting</a></li>
										<li><a href="windowshosting.php">Windows Hosting</a></li>
										<li><a href="cmshosting.php">CMS Hosting</a></li>
									</ul>			
								</li>
								<li><a href="pricing.php">Pricing</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="#" id="fa-fa-font-size"><i class="fa fa-shopping-cart"></i></a></li>
								<?php
								if (isset($_SESSION['user'])) {
									echo '<li><a href="logout.php">Logout</a></li>';
								}
								else {
									echo '<li><a href="login.php">Login</a></li>';
								}
								?>
							</ul>	  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	<!---header--->
<!--services--->
<div class="content">
	<div class="brilliant-section">
		<div class="container">
			<h2>services</h2>
			<div class="brilliant-grids">
				<div class="col-md-4 brilliant-grid">
					<div class="brilliant-left">
					<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
					</div>
					<div class="brilliant-right">
						<h4>Expert Web Design</h4>
						<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 brilliant-grid">
					<div class="brilliant-left">
					<i class="glyphicon glyphicon-cloud" aria-hidden="true"></i>
					</div>
					<div class="brilliant-right">
						<h4>ftp services</h4>
						<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 brilliant-grid">
					<div class="brilliant-left">
					<i class="glyphicon glyphicon-signal" aria-hidden="true"></i>
					</div>
					<div class="brilliant-right">
						<h4>Support Service</h4>
						<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="brilliant-grids">
				<div class="col-md-4 brilliant-grid">
					<div class="brilliant-left">
					<i class="glyphicon glyphicon-globe" aria-hidden="true"></i>
					</div>
					<div class="brilliant-right">
						<h4>multi domain</h4>
						<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 brilliant-grid">
					<div class="brilliant-left">
					<i class="glyphicon glyphicon-link" aria-hidden="true"></i>
					</div>
					<div class="brilliant-right">
						<h4>Link Building</h4>
						<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 brilliant-grid">
					<div class="brilliant-left">
					<i class="glyphicon glyphicon-phone" aria-hidden="true"></i>
					</div>
					<div class="brilliant-right">
						<h4>Mobile Optimization</h4>
						<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--services--->
	<!---features--->
	<div class="feature-section">
		<div class="container">
			<h3>shared package features:</h3>
			<div class="feature-grids">
				<div class="col-md-6 feature-grid">
					<h4>Suspendisse sollicitudin velit sed leo</h4>
					<div class="feat1">
						<img src="images/s1.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="feat2">
					<p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris.…</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 feature-grid">
					<h4>Donec in velit vel ipsum auctor pulvinar</h4>
					<div class="feat1">
						<img src="images/s2.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="feat2">
					<p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris.…</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="feature-grids">
				<div class="col-md-6 feature-grid">
					<h4>Ut pharetra augue nec augue</h4>
					<div class="feat1">
						<img src="images/s3.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="feat2">
					<p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris.…</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-6 feature-grid">
					<h4>Donec porta diam eu massa</h4>
					<div class="feat1">
						<img src="images/s4.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="feat2">
					<p>Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris.…</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!---features--->
	<!---services-prices--->
	<div class="services-prices">
		<div class="container">
			<div class="servicesprices-grids">
				<div class="col-md-4 servicesprices-grid">
					<div class="services-price">
						<div class="Consulting">
						<h4>Consulting Services</h4>
						</div>
						<p>Bulum iaculis lacinia est. Proin dictum elemntum velit fusce euismod consequat ante lorem ipsum dolomet consectetuer</p>
						<ul>
							<li>Online Business Consulting</li>
							<li>Marketing Consulting</li>
							<li>Startup Consulting</li>
							<li>Change Management</li>
							<li>International Business</li>
							<li>Product Design</li>
							<li>Skin Care Business</li>
						</ul>
						<a href="#" class="button2">get started</a>
					</div>
				</div>
				<div class="col-md-4 servicesprices-grid">
					<div class="services-price">
						<div class="Consulting">
						<h4>Marketing Services</h4>
						</div>
						<p>Bulum iaculis lacinia est. Proin dictum elemntum velit fusce euismod consequat ante lorem ipsum dolomet consectetuer</p>
						<ul>
							<li>Search Engine Optimization</li>
							<li>Social Media Marketing</li>
							<li>Paid Advertising</li>
							<li>Content Marketing</li>
							<li>Video Marketing</li>
							<li>Conversion Optimization</li>
							<li>Infographics</li>
						</ul>
						<a href="#" class="button2">get started</a>
					</div>
				</div>
				<div class="col-md-4 servicesprices-grid">
					<div class="services-price">
						<div class="Consulting">
						<h4>Design & Development</h4>
						</div>
						<p>Bulum iaculis lacinia est. Proin dictum elemntum velit fusce euismod consequat ante lorem ipsum dolomet consectetuer</p>
						<ul>
							<li>Website Design</li>
							<li>Graphic Design</li>
							<li>Storefronts & Commerce</li>
							<li>Small Business Websites</li>
							<li>Management Systems</li>
							<li>Application Customization</li>
							<li>Server  Configuration</li>
						</ul>
						<a href="#" class="button2">get started</a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!---services-prices--->
</div>	
<?php
include "footer.php";
?>