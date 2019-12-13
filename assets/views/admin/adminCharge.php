<?php
session_start();
include_once('../../db/db.php');

$loginEmail=$_SESSION['login-email'];
if(strlen($loginEmail)<5){
    header('location: ../index.php');
}

$con = getConnection();
$sql = "select * from user_table where email='$loginEmail'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $userinfo=mysqli_fetch_array($result);
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
                    <div class="items2 text-center">

                    <a href="#signupModal" role="button" class="btn btn-outline-success mt-3 mb-2" data-toggle="modal">ADD USER</a>


                            <table class="table table-hover wow flipInX table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">User email</th>
                                            <th scope="col">User type</th>
                                            <th scope="col">Paid</th>
                                            <th scope="col">Paid month</th>
                                            
                                            <th scope="col">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                        $con = getConnection();
                        $sql="select SUM(paid) as 'all' from service_charge";
                        $res = mysqli_query($con,$sql);
                        $cou = mysqli_num_rows($res);
                        if($cou>0)
                        {
                            $info=mysqli_fetch_array($res);
                        }
                       
                        $sql = "select * from service_charge";
                        $result = mysqli_query($con, $sql);
                        $count = 0;
                        while($row= mysqli_fetch_assoc($result)){
                            $count++;
                            $mail=$row['usermail'];
                            ////////
                            $sql = "select * from user_table where email='$mail'";
                            $result2 = mysqli_query($con, $sql);
                            $count2 = mysqli_num_rows($result2);
                            if($count2>0)
                            {
                                $userinfo=mysqli_fetch_array($result2);
                            }
                            //////
                            if($userinfo['status']=='permitted'){
                                $btn='success';
                            }
                            else{
                                $btn='danger';
                            }
                            echo '
                            <form action="adminServiceUpdate.php" method="post" >
                            <input type="hidden" name="user-mail" value="'.$row['usermail'].'">
                            <input type="hidden" name="paid-month" value="'.$row['paidmonth'].'">
                            <tr>
                            <th scope="row">'.$count.'</th>
                            <td>'.$row['usermail'].'</td>
                            <td>'.$row['usertype'].'</td>
                            <td>'.$row['paid'].'</td>
                            <td>'.$row['paidmonth'].'</td>
                            
                           
                            
                            <td> 
                            <input type="submit" class="btn btn-warning" name="delete" value="delete this">
                            <input type="submit" class="btn btn-info" name="update" value="update">
                            
                            </td>
                            </tr>
                            </form> 
                            ';
                        }
                                   ?>
                                    </tbody>
                                </table>
                            
                    </div>
                    <h4 class="offset-2"> Total Service Charge Paid  : <?= $info['all'] ?></h4>
                </div>
            </div>

        </div>

    </section>
    <!-- admin dash part ends -->

    <!-- sign up part starts -->


  <div class="modal fade " tabindex="-1" role="dialog" aria-hidden="true" id="signupModal">
    <div class=" modal-dialog">
      <div class=" modal-content">

        <div class="modal-header">
          <h3>Service charge info</h3>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form id="reg_form" action="../../php/adminAddService.php" method="post">
           

            <div class="form-group">
              <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
              <div class="invalid-feedback">Oops, you missed email address</div>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">User type</label>
              <select class="form-control user_type" name="user-type" id="exampleFormControlSelect1">
              
              
                <option>Advertiser</option>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="paid" id="paid" class="form-control input-sm" placeholder="paid amount">
              <div class="invalid-feedback">Oops, you missed address</div>
            </div>

            <div class="form-group">
                    <label for="exampleFormControlSelect1">Month</label>
                    <select class="form-control user_type" name="month" id="exampleFormControlSelect1">
                    
                      <option>January</option>
                      <option>February</option>
                      <option>March</option>
                      <option>April</option>
                      <option>May</option>
                      <option>June</option>
                      <option>July</option>
                      <option>August</option>
                      <option>September</option>
                      <option>October</option>
                      <option>November</option>
                      <option>December</option>
                    </select>
            </div>

           

            <input type="submit" value="submit" name="submit" class="btn btn-info btn-block submit">

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- service charge part ends -->

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