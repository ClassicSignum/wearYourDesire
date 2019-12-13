<?php
session_start();
include_once('../../db/db.php');

$loginEmail=$_SESSION['login-email'];

$con = getConnection();
$sql = "select * from user_table where email='$loginEmail'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $userinfo=mysqli_fetch_array($result);
}




?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/customer/customerProfile.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/animate.css">



    <title>Customer!Wear Your Desire</title>
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
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active pr-4">
                            <a class="" href="customer.php">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="dhover1 nav-item dropdown pr-4 pb-0">
                            <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                our collection
                            </a>
                            <div class="dropdown-menu bg-dark dmenu1" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="../suitsAndTuxedos/suitsAndTuxedos.php">SUITS &
                                    TUXEDOS</a>
                                <a class="dropdown-item" href="../shirts/shirts.php">SHIRTS</a>
                                <a class="dropdown-item" href="../sherwanis/sherwanis.php">SHERWANIS</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../shoes/shoes.php">SHOES</a>
                            </div>
                        </li>
                       
                        <li class="nav-item pr-4">
                            <a class="" href="howitworks.php">how it works <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        

                        <li class="nav-item pr-4">
                            <a class="" href="help.php">help <span class="sr-only">(current)</span></a>
                        </li>


                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        
                        <li class="account nav-item dropdown pr-4 pb-0">
                                <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-circle"></i>
                                     Account
                                </a>
                                <div class="dropdown-menu bg-dark account-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="customerProfile.php">My info</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="customerCart.php">My cart</a>
                                    
                                </div>
                            </li>
                        <a href="" class="bell mr-4">
                            <i class="fas fa-bell"></i>
                        </a>

                        <a href="../../php/logout.php" role="button" class="btn btn-outline-success mr-4">Log out</a>
                    </form>
                </div>
            </nav>
        </div>
    </header>

    <!-- header part starts -->

    <!-- myinfo part starts -->
    <section class="myinfo-part">

      <div class="container">
          <form action="../../php/update.php" method="POST">
              <div class="form-group">
                <label class="wow slideInLeft" for="exampleFormControlInput1">First Name</label>
                <input type="text" name="first-name" value="<?php echo $userinfo['firstname']; ?>" class="form-control wow slideInRight" id="exampleFormControlInput1">
                
                
                <label class="wow slideInLeft" for="exampleFormControlInput1">Last Name</label>
                <input type="text" name="last-name" value="<?php echo $userinfo['lastname']; ?>" class="form-control wow slideInRight" id="exampleFormControlInput1">
                
                
                
                <label class="wow slideInLeft" for="exampleFormControlInput1">Email address</label>
                <input type="Email" name="email" value="<?php echo $userinfo['email']; ?>" class="form-control wow slideInRight" id="exampleFormControlInput1">
                
                
                
                <label class="wow slideInLeft" for="exampleFormControlInput1">House Address</label>
                <input type="text" name="address" value="<?php echo $userinfo['address']; ?>" class="form-control wow slideInRight" id="exampleFormControlInput1">
                
                
                <label class="wow slideInLeft" for="exampleFormControlInput1">Phone No:</label>
                <input type="number" name="phoneno" value="<?php echo $userinfo['phoneno']; ?>" class="form-control wow slideInRight" id="exampleFormControlInput1">

                <label class="wow slideInLeft" for="exampleFormControlInput1">Current Password</label>
                <input type="text" value="<?php echo $userinfo['password']; ?>" class="form-control wow slideInRight" id="exampleFormControlInput1">

                <label class="wow slideInLeft" for="exampleFormControlInput1">Create Password</label>
                <input type="text" name="password" class="form-control wow slideInRight" id="exampleFormControlInput1">
                

                <label class="wow slideInLeft" for="exampleFormControlInput1">Confirm Password</label>
                <input type="text" name="confirm-password" class="form-control wow slideInRight" id="exampleFormControlInput1">
                
                <input type="submit" name="update" class="mt-4 wow slideInRight btn btn-outline-secondary" value="Update">
                
              </div>
              
      </form>
      </div>

    </section>
    <!-- myinfo part ends -->

    




    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/wow.js"></script>
    <!-- <script src="../../js/Chart.min.js"></script> -->

    <script>

var wow = new WOW();
  wow.init();

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


        $('.account, .account-menu').mouseenter(function () {
            $('.account-menu').fadeIn();
        });
        $('.account').mouseleave(function () {
            $('.account-menu').fadeOut();
        });



    </script>

    

</body>

</html>