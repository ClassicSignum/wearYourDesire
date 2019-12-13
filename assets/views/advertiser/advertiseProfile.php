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
    <link rel="stylesheet" href="../../css/advertise/advertiseStyle.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/slick.css"> -->
    <!-- <link rel="stylesheet" href="../../css/animate.css"> -->
    <link rel="stylesheet" href="../../css/floatmessage.css">



    <title>Advertise!Wear Your Desire</title>
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

    <!-- advertise dash part starts -->
    <section class="admin-dash-part">

        <div class=" container-fluid">

            <div class="row">
                <div class="col-md-2">
                    <div class="items text-center">

                        <img src="../../images/admin/advertiser.png" alt="">

                        <div class="row btns">
                            <div class="col-md-3">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="advertise.php">Home</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="advertiseProfile.php">My Info</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-ad"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="advertiseReqAdd.php">Request an add</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 text-center">
                    <div class="items2 mt-4">
                    <form action="../../php/update.php" method="POST">
                                    <div class="form-group">
                                      <label for="exampleFormControlInput1">First Name</label>
                                      <input type="text" name="first-name" value="<?php echo $userinfo['firstname']; ?>" class="form-control first-name" id="exampleFormControlInput1">
                                      
                                      
                                      <label for="exampleFormControlInput1">Last Name</label>
                                      <input type="text" name="last-name" value="<?php echo $userinfo['lastname']; ?>" class="form-control last-name" id="exampleFormControlInput1">
                                      
                                      
                                      
                                      <label for="exampleFormControlInput1">Email address</label>
                                      <input type="Email" name="email" readonly value="<?php echo $userinfo['email']; ?>" class="form-control email" id="exampleFormControlInput1">
                                      
                                      
                                      
                                      <label for="exampleFormControlInput1">House Address</label>
                                      <input type="text" name="address" value="<?php echo $userinfo['address']; ?>" class="form-control address" id="exampleFormControlInput1">
                                      
                                      
                                      <label for="exampleFormControlInput1">Phone No:</label>
                                      <input type="number" name="phoneno" value="<?php echo $userinfo['phoneno']; ?>" class="form-control phoneno" id="exampleFormControlInput1">

                                      <label for="exampleFormControlInput1">Current Password</label>
                                      <input type="text"  value="<?php echo $userinfo['password']; ?>" class="form-control " id="exampleFormControlInput1">

                                      <label for="exampleFormControlInput1">Create Password</label>
                                      <input type="text" name="password" class="form-control password" id="exampleFormControlInput1">
                                      

                                      <label for="exampleFormControlInput1">Confirm Password</label>
                                      <input type="text" name="confirm-password" class="form-control confirm-password" id="exampleFormControlInput1">
                                      
                                      <input type="submit"  name="update" class="mt-4 btn btn-outline-secondary" value="Update">
                                      
                                    </div>
                                    
                            </form>


                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- advertise dash part ends -->

    <!-- floating message part starts -->
    <div class="floating-chat">
        <i class="fas fa-comments"></i>
        <div class="chat">
            <div class="header">
                <span class="title">
                    what's on your mind?
                </span>
                <button>
                    <i class="fas fa-times-circle"></i>
                </button>

            </div>
            <ul class="messages">

                <!-- <li class="self">......... -___-</li> -->
                <li class="self">Hello!</li>
            </ul>
            <div class="footer">
                <div class="text-box" contenteditable="true" disabled="true"></div>
                <button id="sendMessage">send</button>
            </div>
        </div>
    </div>
    <!-- floating message part ends -->





    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="../js/slick.min.js"></script> -->
    <script src="../../js/floatmessage.js"></script>
    <script src="../../js/Chart.min.js"></script>

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