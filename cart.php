<?php 
require_once "headercommon.php";
require_once "commonnav.php";

?>
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush" id="showProduct">
                <thead class="thead-light">
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Monthly Price</th>
                        <th>Annual Price</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                </table>
            </div>
            <a href="javascript:void(0)" id="checkoutbutton">Checkout</a>
            </div>
        </div>
    </div>
</div>
<script>
$('#showProduct').DataTable( {
    "ajax": "admin/handlerequest.php?cartdata=1"
}); 
$('#showProduct').on('click','#deletecartproduct',function(){
    var id=$(this).data('id');
    $.ajax({
        url: 'admin/handlerequest.php',
        method: 'post',
        data: {
            prodid: id,
            deletecartproduct: true
        },success: function(msg){
            location.reload();
        },
        error: function(){
            alert("cart product deletion error");
        }
    });
});
$('#checkoutbutton').click(function(){
    $.ajax({
        url: "admin/handlerequest.php",
        method: "post",
        data: {
            checkout: true
        },
        success: function(msg){
            if (msg=="refer to login page") {
                $(location).attr('href','login.php');
            } else {
                alert(msg);
            }
        },
        error: function(){
            alert("error in checkout");
        }
    });
});
</script>
<?php
require_once "footer.php";
?>