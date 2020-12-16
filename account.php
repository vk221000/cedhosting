<?php
include "headercommon.php";
if (isset($_SESSION['admin'])){
    header('location:admin/');
}
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
            header('Location:verificationpage.php');
            // echo "<script>alert('signup completed please verify your email and/or phone no. to get access.');</script>";
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
<?php include_once "commonnav.php";?>
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
            var regPassword=/^(?!.* )(?=.*\d)(?=.*[a-zA-Z]).{8,16}$/;
            var regMobile=/^(0)?[1-9]{1}[0-9]{9}$/;
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
            else if (!isNaN(answer)) {
                alert("please enter valid answers i.e, only digits are not allowed");
                return false;
            }
            return true;
        }
        // function mobileCheck(mobile){
        //     var temp=0;
        //     for (i=0;i<mobile.length;i++) {
        //         if (mobile[1]==mobile[i]) {
        //             temp+=1;
        //         }
        //     }
        //     if (temp>=5) {
        //         return false;
        //     }
        //     else {
        //         return true;
        //     }
        // }
    </script>
<!-- registration -->
</div>
<!-- login -->
<?php
require_once "footer.php";
?>