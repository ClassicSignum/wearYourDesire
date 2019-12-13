<?php
session_start();
include_once('../../db/db.php');
if(isset($_REQUEST['submit'])){

    $productTitle=trim($_REQUEST['product-title']);
    $loginEmail=$_SESSION['login-email'];
   
$con = getConnection();
$sql = "select * from supplier_product where producttitle='$productTitle'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $productinfo=mysqli_fetch_array($result);
}
}
else{

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
    <link rel="stylesheet" href="../../css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/slick.css"> -->
    <!-- <link rel="stylesheet" href="../../css/animate.css"> -->
    <link rel="stylesheet" href="../../css/floatmessage.css">
   


    <title>Supplier!Wear Your Desire</title>
</head>

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
                        <a href="../../php/logout.php" role="button" class="btn btn-outline-success mr-4">Log out</a>
                    </form>
                </div>
            </nav>
        </div>
    </header>

    <!-- header part starts -->

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

                       
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="items2 mt-4">
                        <form action="../../php/supplierProductUpdate.php" method="post">
                            <div class="form-group">

                                <label for="exampleInputEmail1">Product title</label>
                                <input type="text" value="<?php echo $productinfo['producttitle']; ?>" readonly name="product-title" class="form-control" placeholder="Enter title">

                                <label for="exampleInputEmail1">Product price</label>
                                <input type="number" value="<?php echo $productinfo['productprice']; ?>" name="product-price" class="form-control" placeholder="Enter price">

                                <label for="exampleInputEmail1">Product rent price</label>
                                <input type="number" value="<?php echo $productinfo['productrent']; ?>" name="product-rent" class="form-control" placeholder="Enter rent price">

                                <label for="exampleInputEmail1">Advertiser email</label>
                                <input type="text" value="<?php echo $productinfo['advertisermail']; ?>" name="advertiser-mail" readonly class="form-control">

                                <label for="exampleInputEmail1">Product details</label>
                                <input type="text" value="<?php echo $productinfo['productdetails']; ?>" name="product-details" class="form-control" placeholder="Enter title">

                                <label for="exampleInputEmail1">Product description</label>
                                <input type="text" value="<?php echo $productinfo['productdesc']; ?>" name="product-desc" class="form-control" placeholder="Enter title">

                                <label for="exampleInputEmail1">Product size</label>
                                <input type="text" value="<?php echo $productinfo['productsize']; ?>" name="product-size" class="form-control" placeholder="Enter title">

                            
                                <input type="submit" name="submit" class="mt-4 btn btn-outline-secondary" value="Update">
                                <input type="submit" name="remove" class="mt-4 btn btn-warning ml-4" value="Remove this product">

                            
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- advertise dash part ends -->


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

  

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="../js/slick.min.js"></script> -->
 

    <script>

        $("#btnLogin").click(function (event) {

            //Fetch form to apply custom Bootstrap validation
            var form = $("#formLogin")

            if (form[0].checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.addClass('was-validated');
        });

        $('.dhover1, .dmenu1').mouseenter(function () {
            $('.dmenu1').fadeIn();
        });
        $('.dhover1').mouseleave(function () {
            $('.dmenu1').fadeOut();
        });
        // $('.dmenu1').hover(function(){
        //   $('.dmenu1').show();
        // });



        $('.dhover2, .dmenu2').mouseenter(function () {
            $('.dmenu2').fadeIn();
        });
        $('.dhover2').mouseleave(function () {
            $('.dmenu2').fadeOut();
        });



    </script>

   
</body>

</html>