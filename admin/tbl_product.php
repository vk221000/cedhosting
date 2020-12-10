<?php
include_once "Dbcon.php";
class tbl_product{
    public $conn;
    public function __construct(){
        $dbcon=new Dbcon();
        $this->conn=$dbcon->createConnection();
    }
    public function getMainCategory(){
        $sql="SELECT * FROM `tbl_product` WHERE `id`='1' AND `prod_parent_id`='1'";
        $data=$this->conn->query($sql);
        if ($data->num_rows>0){
            $arr=array();
            while($row=$data->fetch_assoc()){
                $arr[]=$row;
            }
            return $arr;
        }
        return false;
    }
    public function insertProductBYCategory($productname,$link){
        $sql="INSERT INTO `tbl_product` (`prod_parent_id`,`prod_name`,`link`,`prod_available`,`prod_launch_date`) 
        VALUES ('1','$productname','$link','1',NOW())";
        $data=$this->conn->query($sql);
        if($data){
            return $data;
        }
        return false;
    }
    public function showProductBYCategory(){
        $sql="SELECT * FROM `tbl_product` WHERE `id`!='1'";
        $data=$this->conn->query($sql);
        if ($data->num_rows>0){
            $arr['data']=array();
            while($row=$data->fetch_assoc()){
                if ($row['prod_available']=='1') {
                    $available="available";
                }
                else {
                    $available="unavailable";
                }
                $arr['data'][]=array($row['id'],$row['prod_parent_id'],$row['prod_name'],$row['link'],$available,$row['prod_launch_date'],"<a href='javascript:void(0)' class='btn btn-outline-info' data-id='".$row['id']."' id='edit-product-by-category' data-toggle='modal' data-target='#exampleModalSignUp'>Edit</a> <a href='javascript:void(0)' class='btn btn-outline-danger' data-id='".$row['id']."' id='delete-product-by-category'>Delete</a>");
            }
            return $arr;
        }
        return false;
    }
    public function manageProductBYCategory($id, $action) {
        if ($action=='edit') {
            $sql="SELECT * FROM `tbl_product` WHERE `id`='$id'";
            $data=$this->conn->query($sql);
            if ($data->num_rows>0) {
                while ($row=$data->fetch_assoc()) {
                    return $row;
                }
            }
            return false;
        }
        if ($action=="delete") {
            $sql="DELETE FROM `tbl_product` WHERE `id`='$id'";
            $this->conn->query($sql);
            return true;
        }
    }
    public function getSubCategoryNav(){
        $sql="SELECT * FROM `tbl_product` WHERE `id`!='1'";
        $data=$this->conn->query($sql);
        if ($data->num_rows>0){
            $arr=array();
            while($row=$data->fetch_assoc()){
               $arr[]=$row;
            }
            return $arr;
        }
        return false;
    }

}
?>