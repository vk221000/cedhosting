<?php
include_once "Dbcon.php";
class tbl_user{
    public $conn;
    public function __construct(){
        $dbcon=new Dbcon();
        $this->conn=$dbcon->createConnection();
    }
    public function userLogin($email,$password){
        $sql="SELECT * FROM `tbl_user` WHERE `email`='$email' AND `password`='$password'";
        $data=$this->conn->query($sql);
        if ($data->num_rows>0){
            $row=$data->fetch_assoc();
		    if($row['is_admin']==0) {
                $_SESSION['user']=array($row['email'],$row['id']);
			    header('Location:index.php');
            }
            else{
                return false;
            }
        }
        return false;
    } 
    public function duplicateDetails($email,$mobile) {
        $sql="SELECT * FROM `tbl_user`";
        $data=$this->conn->query($sql);
        if ($data->num_rows) {
            while($row=$data->fetch_assoc()) {
                if ($row['email']==$email || $row['mobile']=$mobile) {
                    return true;
                }
            }
            return false;
        }
        return false;
    }
    public function userSignup($name,$email,$mobile,$securityquestion,$answer,$password){
        $sql="INSERT INTO `tbl_user` (`email`,`name`,`mobile`,`email_approved`,`phone_approved`,`active`,`is_admin`,`sign_up_date`,`password`,`security_question`,`security_answer`)
        VALUES ('$email','$name','$mobile','0','0','0','0',NOW(),'$password','$securityquestion','$answer')";
        if($this->conn->query($sql)) {
            return true;
        }
        return false;
    }
}
?>