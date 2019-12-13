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


$sql = "select * from supplier_product where status='pending'";
$result = mysqli_query($con, $sql);
$pending = mysqli_num_rows($result);


?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/admin/adminStyle.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/all.min.css">

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/wow.js"></script>


    <title>Profile!Wear Your Desire</title>
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
                    
                    <form class="form-inline my-2 my-lg-0">
                    <script>

$(document).ready(function() {
    
    if(<?=$pending?>>0){

       $( '<a href="#notifyModal" data-toggle="modal" class="bellnotify mr-4">'+
            '<i class="fas fa-bell wow jello" data-wow-iteration="90" data-wow-duration="1s"></i>'+
            '<span class="badge badge-light wow heartBeat " data-wow-duration="3s"'+
                'data-wow-iteration="90"><?= $pending ?></span>"' ).appendTo(".collapse form");     
    }
    else{

        $( '<a href="#notifyModal" data-toggle="modal" class="bell mr-4">'+
            '<i class="fas fa-bell" data-wow-iteration="90" data-wow-duration="1s"></i>').appendTo(".collapse form"); 

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

    <!-- admin dash part starts -->
    <section class="admin-dash-part">

        <div class=" container-fluid">

            <div class="row">
                <div class="col-md-2">
                    <div class="items text-center">

                        <img src="../../images/admin/admin.png" alt="">
                        <h3>Admin</h3>

                        <div class="row btns">
                            <div class="col-md-3">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="admin.php">Home</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="adminProfile.php">My Info</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="adminCustomerInfo.php">Customer Info</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-user-friends"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="adminSupplierInfo.php">Supplier Info</a>
                            </div>
                        </div>
                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="adminAdvertiserInfo.php">Advertiser Info</a>
                            </div>
                        </div>
                        <div class="row btns">

                            <div class="col-md-3">
                            <i class="far fa-list-alt"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="adminSupplierProduct.php">Products</a>
                            </div>
                        </div>
                        <div class="row btns">

                            <div class="col-md-3">
                            <i class="fas fa-file-invoice-dollar"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="adminCharge.php">Finance Info</a>
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-md-10">
                    <div class="items2 mt-4 text-center">
                    <form action="../../php/adminSupplierProdUpdate.php" method="post">
                            <div class="form-group">

                                <label for="exampleInputEmail1">Supplier email</label>
                                <input type="text" readonly value="<?php echo $productinfo['suppliermail']; ?>"  name="supplier-email" class="form-control" placeholder="Enter title">

                                <label for="exampleInputEmail1">Advertiser email</label>
                                <input type="text" readonly value="<?php echo $productinfo['advertisermail']; ?>" name="advertiser-email" class="form-control" >

                                <label for="exampleInputEmail1">Brand name</label>
                                <input type="text"  value="<?php echo $productinfo['brandname']; ?>" name="brandname" class="form-control" >

                                <label for="exampleInputEmail1">Product type</label>
                                <input type="text" value="<?php echo $productinfo['producttype']; ?>" name="product-type"  class="form-control">

                                <label for="exampleInputEmail1">Product title</label>
                                <input type="text" readonly value="<?php echo $productinfo['producttitle']; ?>" name="product-title" class="form-control" placeholder="Enter title">

                                
                                <label for="exampleInputEmail1">Product price</label>
                                <input type="number" value="<?php echo $productinfo['productprice']; ?>" name="product-price" class="form-control" placeholder="Enter title">

                                <label for="exampleInputEmail1">Product rent</label>
                                <input type="number" value="<?php echo $productinfo['productrent']; ?>" name="product-rent" class="form-control" placeholder="Enter title">

                                <label for="exampleInputEmail1">Product details</label>
                                <input type="text" value="<?php echo $productinfo['productdetails']; ?>" name="product-details" class="form-control" placeholder="Enter title">



                                <label for="exampleInputEmail1">Product size</label>
                                <input type="text" value="<?php echo $productinfo['productsize']; ?>" name="product-size" class="form-control" placeholder="Enter title">

                                <label for="exampleInputEmail1">Product status</label>
                                <!-- <input type="text" value="<?php echo $productinfo['status']; ?>" name="product-status" class="form-control" placeholder="Enter title"> -->
                                <?php
                                    if($productinfo['status']=='pending'){
                                        echo '
                                        <select class="form-control" name="product-status" id="exampleFormControlSelect1">
                                                <option selected >pending</option>
                                                <option>permitted</option>
                                         </select>
                                        ';
                                    }
                                    else{
                                        echo '
                                        <select class="form-control" name="product-status" id="exampleFormControlSelect1">
                                                <option >pending</option>
                                                <option selected >permitted</option>
                                         </select>
                                        ';
                                    }
                                ?>
                                
                                

                                <input type="submit" name="submit" class="mt-4 btn btn-outline-secondary" value="Update">
                                <input type="submit" name="remove" class="mt-4 btn btn-warning ml-3" value="Remove this product">

                            
                            
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- admin dash part ends -->

     <!-- notification part starts -->


  <div id="notifyModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Notification</h3>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
            <h2>Total <?=$pending?> pending products</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- notification part ends -->





    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/wow.js"></script>

    <script>

var wow = new WOW();
  wow.init();

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