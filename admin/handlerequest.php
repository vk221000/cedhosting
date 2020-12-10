<?php
include "tbl_product.php";
$product=new tbl_product();
if (isset($_POST['productadd'])) {
    $productname=$_POST['productname'];
    $link=$_POST['link'];
    $data=$product->insertProductBYCategory($productname, $link);
    echo true;
}
if (isset($_GET['showproduct'])) {
    $data=$product->showProductBYCategory();
    if ($data!=false) {
        print_r(json_encode($data));
    }
}
if (isset($_POST['manageproductbycategory'])) {
    $id=$_POST['id'];
    $action=$_POST['action'];
    $data=$product->manageProductBYCategory($id, $action);
    if ($data=="true") {
        echo "true";
    } elseif ($data=="false") {
        echo "false";
    } elseif ($data!="true" && $data!="false") {
        print_r($data);
    }
}
?>