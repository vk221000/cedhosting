<?php
if (isset($_GET['id'])) {
    $id=$_GET['id'];
    include_once 'admin/tbl_product.php';
    $product=new tbl_product();
    $heading=$product->getPageHeading($id);
    $datacon=$product->getCatPageData($id);
    if ($heading==false || $datacon==false) {
        header("location:index.php");
    }
    $html1=$heading['html'];
} else {
    header('Location:index.php');
}
require_once "headercommon.php";
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
<?php require_once "commonnav.php";?>
<!---singleblog--->
<div class="content">
    <div class="linux-section">
        <div class="container">
            <div class="linux-grids">
                <div class="col-md-8 linux-grid">
                <h2><?php echo $heading['prod_name'] ?></h2>
                <ul>
                    <?php echo $html1?>
                </ul>
                    <a href="#myTab">view plans</a>
                </div>
                <div class="col-md-4 linux-grid1">
                    <?php
                    $patternarray=array("/window/i", "/word/i", "/cms/i", "/linux/i", "/mac/i");
                    $temp=true;
                    foreach ($patternarray as $val) {
                        if (preg_match($val, $heading['prod_name'])) {
                            $temp=false;
                            $str=str_replace("/", "", $val);
                            $strfinal=rtrim($str, "i");
                            echo '<img src="images/'.$strfinal.'.png" class="img-responsive" alt=""/>';
                            break;
                        }
                    }
                    if ($temp==true) {
                        echo '<img src="images/window.png" class="img-responsive" alt=""/>';
                    }
                    ?>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="tab-prices">
        <div class="container ">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <div id="myTabContent" class="tab-content justify-content-center">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="linux-prices" id="myTab">
                            <?php
                            $html="";
                            for ($i=0;$i<count($datacon);$i++) {
                                $html.='<div class="col-md-3 linux-price">
                                    <div class="linux-top">
                                    <h4>Standard</h4>
                                    </div>
                                    <div class="linux-bottom">
                                        <h5>₹'.$datacon[$i]["mon_price"].' <span class="month">per Month</span></h5>
                                        <h5>₹'.$datacon[$i]["annual_price"].' <span class="month">per Annum</span></h5>
                                        <h6>Single Domain</h6>
                                        <ul>
                                        <li><strong>'.$datacon[$i]["webspace"].'GB </strong> Web Space</li>
                                        <li><strong>'.$datacon[$i]["bandwidth"].'GB </strong>Bandwidth</li>
                                        <li><strong>'.$datacon[$i]["mailbox"].' </strong> Mailbox</li>
                                        <li><strong>'.$datacon[$i]["freedomain"].' </strong> Free Domain</li>
                                        <li><strong>'.$datacon[$i]["languagetechnology"].' </strong> Language/Technology</li>
                                        <li><strong>High Performance</strong>  Servers</li>
                                        <li><strong>location</strong> : <img src="images/india.png"></li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0)" data-id='.$datacon[$i]["prod_id"].' id="addtocart">buy now</a>
                                </div>';
                            }
                            print_r($html);
                            ?>
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
    <script>
        $('#myTab').on('click','#addtocart',function(){
            var prod_id=$(this).data('id');
            $.ajax({
                url: 'admin/handlerequest.php',
                method: 'post',
                data: {
                    prodid: prod_id,
                    addtocart: true
                },
                success: function(msg){
                    $(location).attr('href','cart.php');
                },
                error: function(){
                    alert("error in fetching product");
                }
            });
        });
    </script>

</div>
<?php
include "footer.php";
?>