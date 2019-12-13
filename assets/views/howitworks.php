<?php
include_once('../db/db.php');
$con = getConnection();
$sql = "select * from how_it_works";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/howitworks.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/slick.css"> -->
    <link rel="stylesheet" href="../css/floatmessage.css">


    <title>Wear Your Desire!</title>
</head>



<body>

    <!-- header part starts -->

    <header class="header-part">
        <div class="items container-fluid bg-dark">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="../images/index/icon.png" height="50" width="60" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active pr-4">
                            <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="dhover1 nav-item dropdown pr-4 pb-0">
                            <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                our collection
                            </a>
                            <div class="dropdown-menu bg-dark dmenu1" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="suitsAndTuxedos/suitsAndTuxedos.php">SUITS & TUXEDOS</a>
                                <a class="dropdown-item" href="shirts/shirts.php">SHIRTS</a>
                                <a class="dropdown-item" href="sherwanis/sherwanis.php">SHERWANIS</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="shoes/shoes.php">SHOES</a>
                            </div>
                        </li>
                        
                        <li class="nav-item pr-4">
                            <a class="" href="howitworks.php">how it works <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item pr-4">
                            <a class="" href="help.php">help <span class="sr-only">(current)</span></a>
                        </li>


                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
                        <!-- <button class="btn btn-outline-success my-2 my-sm-0 mr-4" type="submit">Sign in</button> -->
                        <a href="#loginModal" role="button" class="btn btn-outline-success mr-4"
                            data-toggle="modal">Login</a>
                        <a href="#signupModal" role="button" class="btn btn-outline-success mr-4"
                            data-toggle="modal">Sign up</a>
                        <!-- <button class="btn btn-outline-success my-2 my-sm-0" data-target="#reg-form" type="submit">Sign up</button> -->
                    </form>
                </div>
            </nav>
        </div>
    </header>

    <!-- header part starts -->

    <!-- collapse part starts -->
    <section class="collapse-part">
        <div class=" container-fluid  text-center">
            <h1 class=" text-black-50 wow lightSpeedIn">THE WEAR YOUR DESIRE <BR></BR> INFORMATION SECTION HERE</h1>
            <div class="row">
                <div class="col-md-5 wow slideInLeft text-black-50 offset-1">
                    <div class="accordion mt-4 mb-4" id="accordionExample">

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        
                                        <?php  $sql = "select * from how_it_works where id=1";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?> <i class="fas fa-arrow-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                <?php  $sql = "select * from how_it_works where id=1";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <?php  $sql = "select * from how_it_works where id=2";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?>  <i class="fas fa-arrow-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                <?php  $sql = "select * from how_it_works where id=2";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <?php  $sql = "select * from how_it_works where id=3";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?> 
                                        <i class="fas fa-arrow-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                <?php  $sql = "select * from how_it_works where id=3";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-md-5 wow slideInRight">
                    <div class="accordion mt-4 mb-4" id="accordionExample2">
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                        <?php  $sql = "select * from how_it_works where id=4";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?>  <i class="fas fa-arrow-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample2">
                                <div class="card-body">
                                   <?php  $sql = "select * from how_it_works where id=4";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <?php  $sql = "select * from how_it_works where id=5";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?>  <i
                                            class="fas fa-arrow-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExample2">
                                <div class="card-body">
                                    <?php  $sql = "select * from how_it_works where id=5";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        <?php  $sql = "select * from how_it_works where id=6";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?>  <i
                                            class="fas fa-arrow-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordionExample2">
                                <div class="card-body">
                                    <?php  $sql = "select * from how_it_works where id=6";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow slideInUp">
                <div class="col-md-5 text-black-50 offset-1">
                    <div class="accordion mt-4 mb-4" id="accordionExample3">

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                        <?php  $sql = "select * from how_it_works where id=7";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?>  <i class="fas fa-arrow-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseSeven" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample3">
                                <div class="card-body">
                                    <?php  $sql = "select * from how_it_works where id=7";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseEight" aria-expanded="false" aria-controls="collapseTwo">
                                        <?php  $sql = "select * from how_it_works where id=8";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?> <i class="fas fa-arrow-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseEight" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample3">
                                <div class="card-body">
                                    <?php  $sql = "select * from how_it_works where id=8";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseNine" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <?php  $sql = "select * from how_it_works where id=9";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?>  <i
                                            class="fas fa-arrow-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseNine" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample3">
                                <div class="card-body">
                                    <?php  $sql = "select * from how_it_works where id=9";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                
                <div class="col-md-5">
                    <div class="accordion mt-4 mb-4" id="accordionExample4">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseTen" aria-expanded="true" aria-controls="collapseOne">
                                        <?php  $sql = "select * from how_it_works where id=10";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?> 
                                        <i class="fas fa-arrow-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseTen" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample4">
                                <div class="card-body">
                                    <?php  $sql = "select * from how_it_works where id=10";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseElev" aria-expanded="false" aria-controls="collapseTwo">
                                        <?php  $sql = "select * from how_it_works where id=11";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?> 
                                         <i class="fas fa-arrow-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseElev" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample4">
                                <div class="card-body">
                                    <?php  $sql = "select * from how_it_works where id=11";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwel" aria-expanded="false" aria-controls="collapseThree">
                                        <?php  $sql = "select * from how_it_works where id=12";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?> 
                                        <i   class="fas fa-arrow-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwel" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample4">
                                <div class="card-body">
                                    <?php  $sql = "select * from how_it_works where id=12";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-5 text-black-50 offset-1">
                    <div class="accordion mt-4 mb-4" id="accordionExample5">

                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseThir" aria-expanded="true" aria-controls="collapseSeven">
                                        <?php  $sql = "select * from how_it_works where id=13";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?> 
                                        <i class="fas fa-arrow-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseThir" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample5">
                                <div class="card-body">
                                    <?php  $sql = "select * from how_it_works where id=13";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFourt" aria-expanded="false" aria-controls="collapseTwo">
                                        <?php  $sql = "select * from how_it_works where id=14";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?> 
                                        <i class="fas fa-arrow-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFourt" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample5">
                                <div class="card-body">
                                   <?php  $sql = "select * from how_it_works where id=14";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFift" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <?php  $sql = "select * from how_it_works where id=15";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?> 
                                         <i     class="fas fa-arrow-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFift" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample5">
                                <div class="card-body">
                                    <?php  $sql = "select * from how_it_works where id=15";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                
                <div class="col-md-5">
                    <div class="accordion mt-4 mb-4" id="accordionExample6">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseSixt" aria-expanded="true" aria-controls="collapseOne">
                                        <?php  $sql = "select * from how_it_works where id=16";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?> 
                                         <i class="fas fa-arrow-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseSixt" class="collapse" aria-labelledby="headingOne"
                                data-parent="#accordionExample6">
                                <div class="card-body">
                                    <?php  $sql = "select * from how_it_works where id=16";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseSevent" aria-expanded="false" aria-controls="collapseTwo">
                                        <?php  $sql = "select * from how_it_works where id=17";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?> 
                                         <i     class="fas fa-arrow-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSevent" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample6">
                                <div class="card-body">
                                   <?php  $sql = "select * from how_it_works where id=17";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseEightt" aria-expanded="false" aria-controls="collapseThree">
                                        <?php  $sql = "select * from how_it_works where id=18";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['title'].''; ?> 
                                        <i      class="fas fa-arrow-down ml-auto"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseEightt" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample6">
                                <div class="card-body">
                                    <?php  $sql = "select * from how_it_works where id=18";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $allinfo=mysqli_fetch_array($result);
}  
echo ''.$allinfo['description'].''; ?> 
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- collapse part ends -->


    <!-- footer part starts -->
    <section class="footer-part">
        <div class="container">
            <div class="items text-center">
                <img src="../images/index/icon.png" alt="">
                <div class="info">
                    <div class="row">
                        <div class="col-md-7 text-white">
                            <h4>More Info</h4>
                            <h6>RENTAL AGREEMENT</h6>
                            <br>
                            <h6>RETURN POLICY</h6>
                            <H4>Follow Us</H4>
                            <div class="icons">
                                <i class="fab fa-instagram"></i>
                                <i class="fab fa-facebook"></i>
                                <i class="fab fa-twitter"></i>
                                <i class="fab fa-google-plus"></i>
                            </div>
                        </div>
                        <div class="col-md-5 text-white">
                            <h4>Have Any Question ?</h4>
                            <h6>VISIT HELP CENTER</h6>
                            <br>
                            <h6>CONTACT US</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer part ends -->



    <!-- login part starts -->


  <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Login</h3>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form class="form"  action="../php/login.php" method="POST">
            <div class="form-group">

              <label for="uname1">Email address</label>
              <input type="text" class="form-control form-control-lg" name="email" id="uname1" value="<?php if(isset($_COOKIE['rememberemail'])) {echo $_COOKIE['rememberemail'];} ?>" >
              <div class="invalid-feedback">Oops, you missed this one.</div>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control form-control-lg" id="pwd1" name="password" value="<?php if(isset($_COOKIE['rememberpass'])) {echo $_COOKIE['rememberpass'];} ?>">

              <div class="invalid-feedback">Enter your password too!</div>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" name="remember" class="custom-control-input" id="rememberMe" <?php if(isset($_COOKIE['rememberemail'])) { ?> checked <?php } ?> >
              <label class="custom-control-label" for="rememberMe">Remember me on this computer</label>
            </div>
            <div class="form-group py-4">
              <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
              <input type="submit" name="submit" value="login" class="btn btn-success btn-lg float-right" id="btnLogin"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- login part ends -->


    <!-- sign up part starts -->

    <!-- <div class="container" id="reg-form">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4"> -->
    <div class="modal fade " tabindex="-1" role="dialog" aria-hidden="true" id="signupModal">
        <div class=" modal-dialog">
            <div class=" modal-content">

                <div class="modal-header">
                    <h3>Registration</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" novalidate="">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" class="form-control input-sm"
                                        placeholder="First Name">
                                    <div class="invalid-feedback">Oops, you missed first name</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-sm"
                                        placeholder="Last Name">
                                    <div class="invalid-feedback">Oops, you missed last name</div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm"
                                placeholder="Email Address">
                            <div class="invalid-feedback">Oops, you missed email address</div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">User type</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Customer</option>
                                <option>Supplier</option>
                                <option>Advertiser</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" name="address" class="form-control input-sm" placeholder="Address">
                            <div class="invalid-feedback">Oops, you missed address</div>
                        </div>

                        <div class="form-group">
                            <input type="number" name="phoneNo" class="form-control input-sm" placeholder="Phone no">
                            <div class="invalid-feedback">Oops, you missed phone number</div>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm"
                                        placeholder="Password">
                                    <div class="invalid-feedback">You must create a password</div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control input-sm" placeholder="Confirm Password">
                                    <div class="invalid-feedback">Confirm your password</div>
                                </div>
                            </div>
                        </div>

                        <input type="submit" value="Register" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- </div>
            </div>
          </div> -->
    <!-- sign up part ends -->









    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/floatmessage.js"></script>
    <script src="../js/wow.js"></script>

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

        $('.center').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            prevArrow: $('.prev'),
            nextArrow: $('.next'),
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });

    </script>

</body>

</html>