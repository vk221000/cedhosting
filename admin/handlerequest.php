<?php
require_once "tbl_product.php";
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
if (isset($_GET['showproducts'])) {
    $data=$product->showProductsBYCategory();
    if ($data!=false) {
        print_r(json_encode($data));
    }
}
if (isset($_POST['manageproductbycategory'])) {
    $id=$_POST['id'];
    $action=$_POST['action'];
    $data=$product->manageProductBYCategory($id, $action);
    if ($data=="true") {
        echo json_encode("true");
    } elseif ($data=="false") {
        echo json_encode("false");
    } elseif ($data!="true" && $data!="false") {
        print_r(json_encode($data));
    }
}
if (isset($_POST['productupdate'])) {
    $id=$_POST['id'];
    $productcategory=$_POST['productcategory'];
    $productname=$_POST['productname'];
    $pageurl=$_POST['pageurl'];
    $monthlyprice=$_POST['monthlyprice'];
    $annualprice=$_POST['annualprice'];
    $sku=$_POST['sku'];
    $webspace=$_POST['webspace'];
    $bandwidth=$_POST['bandwidth'];
    $freedomain=$_POST['freedomain'];
    $languagetechnology=$_POST['languagetechnology'];
    $mailbox=$_POST['mailbox'];
    $data=$product->productUpdate($id, $productcategory, $productname, $pageurl, $monthlyprice, $annualprice, $sku, $webspace, $bandwidth, $freedomain, $languagetechnology, $mailbox);
    if ($data=="true") {
        echo json_encode("true");
    } else {
        echo json_encode("false");
    }
}
if (isset($_POST['manageproductsbycategory'])) {
    $id=$_POST['id'];
    $action=$_POST['action'];
    $data=$product->manageProductsBYCategory($id, $action);
    if ($data=="true") {
        echo json_encode("true");
    } elseif ($data=="false") {
        echo json_encode("false");
    } elseif ($data!="true" && $data!="false") {
        print_r(json_encode($data));
    }
}
if (isset($_POST['updatecategory'])) {
    $id=$_POST['id'];
    $productname=$_POST['productname'];
    $link=$_POST['link'];
    $availability=$_POST['availability'];
    $data=$product->updateProductByCategory($productname, $link, $availability, $id);
    if ($data) {
        echo true;
    } else {
        echo false;
    }
}
?>