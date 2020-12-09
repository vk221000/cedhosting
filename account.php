<?php
include "headercommon.php";
include "tbl_user.php";
$success="";
$error="";
$user=new tbl_user();
if (isset($_POST['submit'])){
	$name=trim($_POST['name']);
	$email=trim($_POST['email']);
	$mobile=trim($_POST['mobile']);
	$security_question=trim($_POST['securityquestion']);
	$answer=trim($_POST['answer']);
	$password=trim($_POST['password']);
	$password=md5($password);
	$duplicate=$user->duplicateDetails($email,$mobile);
	if ($duplicate){
		$error="email or mobile number already exists you can login using login credentials";
	}
	else {
		$data=$user->userSignup($name,$email,$mobile,$security_question,$answer,$password);
		if ($data!=false){
			$success="sign up completed";
			echo "<script>alert('signup completed please verify your email and/or phone no. to get access.');</script>";
		}
	}
}
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
									echo '<li class="active"><a href="login.php">Login</a></li>';
								}
								?>
							</ul>	  
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	<!---header--->
<!---login--->
<div class="content">
<!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register">
				<form action="account.php" method="post" onsubmit="return(validateForm());"> 
					<div class="register-top-grid">
					<h3>personal information</h3>
						<h5 class="error-msg">* mandatory fields</h5>
						<div>
							<span>Name<label>*</label></span>
							<input type="text" name="name" id="name" required> 
						</div>
						<div>
							<span>Email Address<label>*</label></span>
							<input type="email" name="email" id="email" required> 
						</div>
						<div>
							<span>Security Question<label>*</label></span>
							<select id="security-question" name="securityquestion"> 
								<option value="Please select security question">Please select security question</option>
								<option value="What was your childhood nickname?">What was your childhood nickname?</option>
								<option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
								<option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
								<option value="What was your dream job as a child?">What was your dream job as a child?</option>
								<option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
							</select>
						</div>
						<div>
							<span>Mobile  (minimum 10 digits required)<label>*</label></span>
							<input type="number" name="mobile" id="mobile" required> 
						</div>
						<div id="answer-signup">
							<span>ANSWER<label>*</label></span>
							<input type="text" name="answer" id="answer"> 
						</div>
						<div class="clearfix"> </div>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
						</a>
						</div>
						<div class="register-bottom-grid">
							<h3>login information</h3>
								<div>
								<span>Password<label>*</label></span>
								<input type="password" name="password" id="password" required>
								<span id="error-password"> (Password should be atleast one upper case one lower case (min-8 characters))</span>
								</div>
								<div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" name="repassword" id="repassword" required>
								</div>
						</div>
				<div class="clearfix"> </div>
				<div class="register-but">
						<input type="submit" value="submit" name="submit">
						<div><?php echo(isset($success)) ? $success:''?></div>
						<div class="error-msg"><?php echo(isset($error)) ? $error:''?></div>
						<div class="clearfix"> </div>
					</form>
				</div>
			</div>
			</div>
	</div>
	<script>
		$('#security-question').click(function(){
			var value=$(this).val();
			if (value!="Please select security question")
			{
				$('#answer-signup').show();
			}
			else{
				$('#answer-signup').hide();
			}
		});
		$('#password').focus(function(){
			$('#error-password').show().fadeOut(7000);
		});
		function validateForm(){
			var name=($('#name').val()).trim();
			var email=($('#email').val()).trim();
			var mobile=($('#mobile').val()).trim();
			var security_question=($('#security-question').val()).trim();
			var answer=($('#answer').val()).trim();
			var password=($('#password').val()).trim();
			var repassword=($('#repassword').val()).trim();
			var regName=/^([a-zA-Z]+\s?)*$/;
			var regPassword=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[#?!@$%^&*-])\S{8,16}$/;
			var regMobile=/^(0)?[1-9]{1}[0-9]{9}$/;
			// var regEmail=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
			var regEmail=/^[a-zA-Z0-9.-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;
			if (name=="" || email=="" || mobile=="" || security_question=="" || answer=="" || password=="" || repassword=="") {
				alert("all fields are mandatory including security question and answer kindly choose one question and answer that!");
				return false;
			}
			else if (!(name.match(regName))){
				alert("Please enter valid name");
				return false;
			}
			else if (!(password.match(regPassword))) {
				alert("password criteria does not matched");
				return false;
			}
			else if (!(email.match(regEmail))) {
				alert("email criteria doesn't match");
				return false;
			}
			else if (!(mobile.match(regMobile))) {
				alert("Please enter valid mobile number");
				return false;
			}
			else if (password!=repassword) {
				alert("please enter same password and repassword");
				return false;
			}
			return true;
		}
	</script>
<!-- registration -->
</div>
<!-- login -->
<?php
include "footer.php";
?>