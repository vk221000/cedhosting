<?php
include "headercommon.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '/home/cedcoss/vendor/autoload.php';
if (isset($_POST['emailsubmit'])) {
    $otp = rand(1000,9999);
    $_SESSION['otp']=$otp;
    $mail = new PHPMailer();
    try {
        $mail->isSMTP(true);
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'cedcossarjun1023@gmail.com';
        $mail->Password = 'Cedcoss@1023';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setfrom('cedcossarjun1023@gmail.com', 'CedHosting');
        $mail->addAddress($email);
        $mail->addAddress($email, $name);

        $mail->isHTML(true);
        $mail->Subject = 'Account Verification';
        $mail->Body = 'Hi User,Here is your otp for account verification: '.$otp;
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
        // header('location: verification.php?email=' . $email);
    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
if (isset($_POST['mobilesubmit'])) {
    /**mobile otp */
    $fields = array(
        "sender_id" => "FSTSMS",
        "message" => "This is Test message" . $otp,
        "language" => "english",
        "route" => "p",
        "numbers" => "$mobile",
    );
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode($fields),
        CURLOPT_HTTPHEADER => array(
        "authorization: oJPvrNweydA1Kc4VkQG2pCTE8jb5q7UBZgWYtixDfhnM9sH6aSUkDYyuxdinW9cgoAaz8XFlNJ1vHLpM",
        "accept: */*",
        "cache-control: no-cache",
        "content-type: application/json"
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
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
<?php include_once "commonnav.php";?>
<!---login--->
<div class="content">
	<div class="main-1">
		<div class="container">
			<div class="login-page">
				<div class="account_grid">
					<div class="col-md-6 login-right">
                    <h3>Verify Email</h3>
						<form>
							<div>
							<span>Email Address<label>*</label></span>
							<input type="text" id="email" name="email" required> 
							</div>
                            <input type="submit" value="Get OTP" id="email-submit" name="emailsubmit">
							<div>
                            </div>
                            <div>
                                <span>Enter OTP<label>*</label></span>
                                <input type="text" name="emailotp" id="emailotp" required> 
                            </div>
							<input type="submit" value="Verify OTP" id="verifyemailotp" name="verifyemailotp">
						</form>
						<div class="error-msg"><?php echo(isset($error))? $error: "" ?></div>
					</div>
					<div class="col-md-6 login-right">
						<h3>Verify Mobile Number</h3>
						<form>
							<div>
							<span>Mobile Number<label>*</label></span>
							<input type="text" id="mobile" name="mobile" required> 
							</div>
                            <input type="submit" value="Get OTP" id="mobile-submit" name="mobilesubmit">
							<div>
                            </div>
                            <div>
                                <span>Enter OTP<label>*</label></span>
                                <input type="text" name="mobileotp" id="mobileotp" required> 
                            </div>
							<input type="submit" value="Verify OTP" id="verifymobileotp" name="verifymobileotp">
						</form>
						<div class="error-msg"><?php echo(isset($error))? $error: "" ?></div>
					</div>	
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- login -->
<script>
    $('#email-submit').click(function(){
        var email=$('#email').val();
        alert(email);
    });
    $('#verifyemailotp').click(function(){
        var emailotp=$('#emailotp').val();
        alert(emailotp);
    });
    $('#mobile-submit').click(function(){
        var mobile=$('#mobile').val();
        alert(mobile);
    });
    $('#verifymobileotp').click(function(){
        var mobileotp=$('#mobileotp').val();
        alert(mobileotp);
    });
</script>
<?php
include "footer.php";
?>