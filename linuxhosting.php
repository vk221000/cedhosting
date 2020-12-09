<?php
include "headercommon.php";
?>
<link rel="stylesheet" href="css/swipebox.css">
			<script src="js/jquery.swipebox.min.js"></script> 
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
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
								<li><a href="services.php">Services</a></li>
								<li class="dropdown active">
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
<!---singleblog--->
<div class="content">
	<div class="linux-section">
		<div class="container">
			<div class="linux-grids">
				<div class="col-md-8 linux-grid">
				<h2>Linux Hosting</h2>
				<ul>
					<li><span>Unlimited </span> Domains, Disk Space, Bandwidth and Email Addresses</li>
					<li><span>99.9% uptime </span> with dedicated 24/7 technical support</li>
					<li><span>Powered by </span> CloudLinux, cPanel (demo), Apache, MySQL, PHP, Ruby & more</li>
					<li><span>Launch  </span> your business with Rs. 2000* Google AdWords Credit *</li>
					<li><span>30 day </span> Money Back Guarantee</li>
				</ul>
					<a href="#">view plans</a>
				</div>
				<div class="col-md-4 linux-grid1">
					<img src="images/linux.png" class="img-responsive" alt=""/>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="tab-prices">
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">IN Hosting</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">US Hosting</a></li>
					</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						<div class="linux-prices">
							<div class="col-md-3 linux-price">
								<div class="linux-top">
								<h4>Standard</h4>
								</div>
								<div class="linux-bottom">
									<h5>$279 <span class="month">per month</span></h5>
									<h6>Single Domain</h6>
									<ul>
									<li><strong>Unlimited</strong> Disk Space</li>
									<li><strong>Unlimited</strong> Data Transfer</li>
									<li><strong>Unlimited</strong> Email Accounts</li>
									<li><strong>Includes </strong>  Global CDN</li>
									<li><strong>High Performance</strong>  Servers</li>
									<li><strong>location</strong> : <img src="images/india.png"></li>
									</ul>
								</div>
								<a href="#">buy now</a>
							</div>
							<div class="col-md-3 linux-price">
								<div class="linux-top">
								<h4>Advanced</h4>
								</div>
								<div class="linux-bottom">
									<h5>$279 <span class="month">per month</span></h5>
									<h6>2 Domain</h6>
									<ul>
									<li><strong>Unlimited</strong> Disk Space</li>
									<li><strong>Unlimited</strong> Data Transfer</li>
									<li><strong>Unlimited</strong> Email Accounts</li>
									<li><strong>Includes </strong>  Global CDN</li>
									<li><strong>High Performance</strong>  Servers</li>
									<li><strong>location</strong> : <img src="images/india.png"></li>
									</ul>
								</div>
								<a href="#">buy now</a>
							</div>
							<div class="col-md-3 linux-price">
								<div class="linux-top">
								<h4>Business</h4>
								</div>
								<div class="linux-bottom">
									<h5>$279 <span class="month">per month</span></h5>
									<h6>3 Domain</h6>
									<ul>
									<li><strong>Unlimited</strong> Disk Space</li>
									<li><strong>Unlimited</strong> Data Transfer</li>
									<li><strong>Unlimited</strong> Email Accounts</li>
									<li><strong>Includes </strong>  Global CDN</li>
									<li><strong>High Performance</strong>  Servers</li>
									<li><strong>location</strong> : <img src="images/india.png"></li>
									</ul>
								</div>
								<a href="#">buy now</a>
							</div>
							<div class="col-md-3 linux-price">
								<div class="linux-top">
								<h4>Pro</h4>
								</div>
								<div class="linux-bottom">
									<h5>$259 <span class="month">per month</span></h5>
									<h6>Unlimited Domains</h6>
									<ul>
									<li><strong>Unlimited</strong> Disk Space</li>
									<li><strong>Unlimited</strong> Data Transfer</li>
									<li><strong>Unlimited</strong> Email Accounts</li>
									<li><strong>Includes </strong>  Global CDN</li>
									<li><strong>High Performance</strong>  Servers</li>
									<li><strong>location</strong> : <img src="images/india.png"></li>
									</ul>
								</div>
								<a href="#">buy now</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						<div class="linux-prices">
							<div class="col-md-3 linux-price">
								<div class="linux-top us-top">
								<h4>Standard</h4>
								</div>
								<div class="linux-bottom us-bottom">
									<h5>$259 <span class="month">per month</span></h5>
									<h6>Single Domain</h6>
									<ul>
									<li><strong>Unlimited</strong> Disk Space</li>
									<li><strong>Unlimited</strong> Data Transfer</li>
									<li><strong>Unlimited</strong> Email Accounts</li>
									<li><strong>Includes </strong>  Global CDN</li>
									<li><strong>High Performance</strong>  Servers</li>
									<li><strong>location</strong> : <img src="images/us.png"></li>
									</ul>
								</div>
								<a href="#" class="us-button">buy now</a>
							</div>
							<div class="col-md-3 linux-price">
								<div class="linux-top us-top">
								<h4>Advanced</h4>
								</div>
								<div class="linux-bottom us-bottom">
									<h5>$359 <span class="month">per month</span></h5>
									<h6>2 Domains</h6>
									<ul>
									<li><strong>Unlimited</strong> Disk Space</li>
									<li><strong>Unlimited</strong> Data Transfer</li>
									<li><strong>Unlimited</strong> Email Accounts</li>
									<li><strong>Includes </strong>  Global CDN</li>
									<li><strong>High Performance</strong>  Servers</li>
									<li><strong>location</strong> : <img src="images/us.png"></li>
									</ul>
								</div>
								<a href="#" class="us-button">buy now</a>
							</div>
							<div class="col-md-3 linux-price">
								<div class="linux-top us-top">
								<h4>Business</h4>
								</div>
								<div class="linux-bottom us-bottom">
									<h5>$539 <span class="month">per month</span></h5>
									<h6>3 Domains</h6>
									<ul>
									<li><strong>Unlimited</strong> Disk Space</li>
									<li><strong>Unlimited</strong> Data Transfer</li>
									<li><strong>Unlimited</strong> Email Accounts</li>
									<li><strong>Includes </strong>  Global CDN</li>
									<li><strong>High Performance</strong>  Servers</li>
									<li><strong>location</strong> : <img src="images/us.png"></li>
									</ul>
								</div>
								<a href="#" class="us-button">buy now</a>
							</div>
							<div class="col-md-3 linux-price">
								<div class="linux-top us-top">
								<h4>Pro</h4>
								</div>
								<div class="linux-bottom us-bottom">
									<h5>$639 <span class="month">per month</span></h5>
									<h6>Unlimited Domains</h6>
									<ul>
									<li><strong>Unlimited</strong> Disk Space</li>
									<li><strong>Unlimited</strong> Data Transfer</li>
									<li><strong>Unlimited</strong> Email Accounts</li>
									<li><strong>Includes </strong>  Global CDN</li>
									<li><strong>High Performance</strong>  Servers</li>
									<li><strong>location</strong> : <img src="images/us.png"></li>
									</ul>
								</div>
								<a href="#" class="us-button">buy now</a>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- clients -->
<div class="clients">
	<div class="container">
		<h3>Some of our satisfied clients include...</h3>
		<ul>
			<li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
			<li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
			<li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
			<li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
			<li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
			<li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
		</ul>
	</div>
</div>
<!-- clients -->
	<div class="whatdo">
		<div class="container">
			<h3>Linux Features</h3>
			<div class="what-grids">
				<div class="col-md-4 what-grid">
					<div class="what-left">
					<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
					</div>
					<div class="what-right">
						<h4>Expert Web Design</h4>
						<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 what-grid">
					<div class="what-left">
					<i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
					</div>
					<div class="what-right">
						<h4>Expert Web Design</h4>
						<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 what-grid">
					<div class="what-left">
					<i class="glyphicon glyphicon-stats" aria-hidden="true"></i>
					</div>
					<div class="what-right">
						<h4>Expert Web Design</h4>
						<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="what-grids">
				<div class="col-md-4 what-grid">
					<div class="what-left">
					<i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i>
					</div>
					<div class="what-right">
						<h4>Expert Web Design</h4>
						<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 what-grid">
					<div class="what-left">
					<i class="glyphicon glyphicon-move" aria-hidden="true"></i>
					</div>
					<div class="what-right">
						<h4>Expert Web Design</h4>
						<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 what-grid">
					<div class="what-left">
					<i class="glyphicon glyphicon-screenshot" aria-hidden="true"></i>
					</div>
					<div class="what-right">
						<h4>Expert Web Design</h4>
						<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>

</div>
<?php
include "footer.php";
?>