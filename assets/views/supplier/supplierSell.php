<?php
session_start();
if(!isset($_SESSION['login-email'])){
    header('location: ../index.php');
}
else{
    if($_SESSION['usertypes']!="Supplier"){
        header('location: ../index.php');
    }
}

include_once('../../db/db.php');

$loginEmail=$_SESSION['login-email'];

$con = getConnection();
$sql = "select * from user_table where email='$loginEmail'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $admininfo=mysqli_fetch_array($result);
}
$brandname=$admininfo['brandname'];
/////
$con = getConnection();
$sql = "select * from request_add where productsupplier='$brandname'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $productDetails=mysqli_fetch_array($result);
}



$sql = "select * from supplier_product where brandname='$brandname' and status='pending'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $productDetails=mysqli_fetch_array($result);
}
$pending=$count;

//in cart status
$sql = "select * from customer_cart where suppliermail='$loginEmail' and status='pending'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $productDetails=mysqli_fetch_array($result);
}
$cartpending=$count;

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/advertise/advertiseStyle.css">
    <!-- <link rel="stylesheet" href="../../css/advertise/advertiseStyle.scss"> -->
    <link rel="stylesheet" href="../../css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/slick.css"> -->
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/floatmessage.css">
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/jquery-confirm.min.css">
    <script src="../../js/jquery-confirm.min.js"></script>
    <script src="../../js/wow.js"></script>



    <title>Supplier!Wear Your Desire</title>
</head>

<?php

include_once('../../db/db.php');
$loginEmail=$_SESSION['login-email'];
if(!isset($_SESSION['sell-complete'])){
    $_SESSION['sell-complete']="false";
}
else{
    if($_SESSION['sell-complete']=="true"){
        echo '
        <script>
        $.alert({
         title: "Sell!",
         content: "Completed",
     });
        </script>
        '; 
    }
    $_SESSION['sell-complete']="false";
}

$con = getConnection();
$sql = "select * from customer_cart where suppliermail='$loginEmail'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $sellinfo=mysqli_fetch_array($result);
}

?>

<body>

    <!-- header part starts -->

    <header class="header-part">
        <div class="items container-fluid bg-dark">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="../../images/index/icon.png" height="50" width="60" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <form class="form-inline my-lg-0">
                        

                    <script>

$(document).ready(function() {
    
    if(<?=$pending?>>0 || <?=$cartpending?>>0){

       $( '<a href="#notifyModal" data-toggle="modal" class="bellnotify mr-4">'+
            '<i class="fas fa-bell wow jello" data-wow-iteration="90" data-wow-duration="1s"></i>'+
            '<span class="badge badge-light wow heartBeat " data-wow-duration="3s"'+
                'data-wow-iteration="90"><?= $pending+$cartpending ?></span>"' ).appendTo("form");     
    }
    else{

        $( '<a href="#notifyModal" data-toggle="modal" class="bell mr-4">'+
            '<i class="fas fa-bell" data-wow-iteration="90" data-wow-duration="1s"></i>').appendTo("form"); 

    }

});

</script>

                           
                        </a>
                        <a href="../../php/logout.php" role="button" class="btn btn-outline-success mr-4">Log out</a>
                    </form>
                </div>
            </nav>
        </div>
    </header>

    <!-- header part ends -->

    <!-- advertise dash part starts -->
    <section class="admin-dash-part">

        <div class=" container-fluid">

            <div class="row">
                <div class="col-md-2">
                    <div class="items text-center">

                        <img src="../../images/admin/supplier.png" alt="">

                        <div class="row btns">
                            <div class="col-md-3">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="supplier.php">Home</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="supplierProfile.php">My Info</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fab fa-sellsy"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="supplierSell.php">Sell history</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="items2 mt-4">

                        <table class="table text-white table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Rent_Buy</th>
                                    <th scope="col">Paid</th>
                                    <th scope="col">Paid by</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            $con = getConnection();
                            $sql = "select * from customer_cart where suppliermail='$loginEmail'";
                            $result = mysqli_query($con, $sql);
                            $count = 0;
                while($row= mysqli_fetch_assoc($result)){
                        $count++;
                       
                        // $title=$row['producttitle'];
                        // $sql = "select * from supplier_product where producttitle='$title'";
                        // $resultt = mysqli_query($con, $sql);
                        // $countt = mysqli_num_rows($resultt);
                        
                        if($count>0)
                        {
                            // $prodinfo=mysqli_fetch_array($resultt);
                            if($row['status']=="canceled"){
                                $btnType="hidden";
                            }
                            else{
                                $btnType="submit";
                            }
                        }
                        echo '
                        <form action="../../php/supplierSellCompleted.php" method="post">
                        <input type="hidden" name="supplier-mail" value="'.$loginEmail.'">
                        <input type="hidden" name="customer-mail" value="'.$row['customermail'].'">
                        <input type="hidden" name="product-title" value="'.$row['producttitle'].'">
                        <input type="hidden" name="product-id" value="'.$row['id'].'">
                            <tr>
                                <th scope="row">'.$count.'</th>
                                <td><img src="../../images/productpic/'.$row['pictures'].'" alt=""></td>
                                <td>'.$row['producttitle'].'</td>
                                <td>'.$row['customermail'].'</td>
                                <td>'.$row['productsize'].'</td>
                                <td>'.$row['rent_buy'].'</td>
                                <td>'.$row['paid'].'</td>
                                <td>'.$row['paidby'].'</td>
                                <td>'.$row['status'].'</td>
                                <td>
                                <input type="'.$btnType.'" class="btn btn-success" name="completed" value="completed">
                                <br>
                                <br>
                                <input type="'.$btnType.'" class="btn btn-warning" name="returned" value="returned">
                                </td>
                            </tr>
                        </form>
                        ';
                }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- advertiser dash part ends -->



    <!-- notification part starts -->


  <div id="notifyModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Notification</h3>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body border-top">
            <h4>You have <?=$pending?> pending products</h4>
            <br>
            <h4>You have <?=$cartpending?> sell pending products</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- notification part ends -->


</body>


<script>
    var wow = new WOW();
    wow.init();

</script>

</html>