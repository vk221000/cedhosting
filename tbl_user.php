<?php
/**
 * The file doc comment
 * php version 7.2.10
 * 
 * @category Class
 * @package  Package
 * @author   Original Author <author@example.com>
 * @license  https://www.cedcoss.com cedcoss 
 * @link     link
 */
require_once "admin/Dbcon.php";
/**
 * Template Class Doc Comment
 * 
 * Template Class
 * 
 * @category Template_Class
 * @package  Template_Class
 * @author   Arjun <author@domain.com>
 * @license  https://www.cedcoss.com cedcoss
 * @link     http://localhost/
 */
class tbl_user
{
    public $conn;
    /**
     * Constructor
     *                                  
     * @return Constructor()
     */
    public function __construct()
    {
        $dbcon=new Dbcon();
        $this->conn=$dbcon->createConnection();
    }
    /**
     * Product Description Addition
     *                 
     * @param email    $email       
     * @param password $password               
     * 
     * @return productUpdate()
     */
    public function userLogin($email, $password)
    {
        $sql="SELECT * FROM `tbl_user` WHERE `email`='$email' 
        AND `password`='$password'";
        $data=$this->conn->query($sql);
        if ($data->num_rows>0) {
            $row=$data->fetch_assoc();
            if ($row['is_admin']==0 && $row['active']==1) {
                $_SESSION['user']=array($row['email'],$row['id']);
                header('Location:index.php');
            } elseif ($row['is_admin']==1 && $row['active']==1) {
                $_SESSION['admin']=array($row['id'],$row['email'],$row['name']);
                header('Location:admin/');
            } else {
                return $row;
            }
        }
        return false;
    } 
    /**
     * Product Description Addition
     *                 
     * @param email  $email       
     * @param mobile $mobile               
     * 
     * @return productUpdate()
     */
    public function duplicateDetails($email,$mobile) {
        $sql="SELECT * FROM `tbl_user`";
        $data=$this->conn->query($sql);
        if ($data->num_rows>0) {
            while ($row=$data->fetch_assoc()) {
                if ($row['email']==$email || $row['mobile']==$mobile) {
                    return true;
                }
            }
            return false;
        }
        return false;
    }
    /**
     * User Signup
     * 
     * @param name             $name                
     * @param email            $email  
     * @param mobile           $mobile           comment
     * @param securityquestion $securityquestion 
     * @param answer           $answer           comment
     * @param password         $password               
     * 
     * @return userSignup();
     */
    public function userSignup($name, $email, $mobile, $securityquestion, $answer, $password)
    {
        $sql="INSERT INTO `tbl_user` (`email`,`name`,`mobile`,`email_approved`,
        `phone_approved`,`active`,`is_admin`,`sign_up_date`,`password`,
        `security_question`,`security_answer`)
        VALUES ('$email','$name','$mobile','0','0','0','0',NOW(),
        '$password','$securityquestion','$answer')";
        if ($this->conn->query($sql)) {
            return true;
        }
        return false;
    }
    
    public function verifyEmail($email) {
        $sql="UPDATE `tbl_user` SET `active` = '1',`email_approved`='1' WHERE `email` = '$email'";
        $data=$this->conn->query($sql);
        return true;
    }
    
    public function verifyPhone($phone) {
        $sql="UPDATE `tbl_user` SET `active` = '1',`phone_approved`='1' WHERE `mobile` = '$phone'";
        $data=$this->conn->query($sql);
        return true;
    }
}
?>