
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/customer/customerCart.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/animate.css">

    <script src="../../js/jquery-3.4.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../../css/jquery-confirm.min.css">
    <script src="../../js/jquery-confirm.min.js"></script>

    <?php
session_start();
$loginMail=$_SESSION['login-email'];
if(!isset($_SESSION['cancel-order'])){
    $_SESSION['cancel-order']="false";
}
else{
    if($_SESSION['cancel-order']=="true"){
        echo '
    <script>
    $.alert({
     title: "Order!",
     content: "Cancelled succesfully",
 });
    </script>
    '; 
    $_SESSION['cancel-order']="false";
  
    }
}



?>



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
                            <a class="" href="../customer/customer.php">Home <span class="sr-only">(current)</span></a>
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

    <!-- mycart part starts -->
    <section class="mycart-part">
        <div class="items">

                <table class="table text-white  wow lightSpeedIn">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Product</th>
                            <th scope="col">Product title</th>
                            <th scope="col">Size</th>
                            <th scope="col">Order type(buy/rent)</th>
                            <th scope="col">Receving date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once('../../db/db.php');
                             $con = getConnection();
                             $sql = "select * from customer_cart where customermail='$loginMail'";
                             $result = mysqli_query($con, $sql);
                             $count = 0;
                             while($row= mysqli_fetch_assoc($result)){
                                 $count++;
                                 $title=$row['producttitle'];
                                $sql = "select * from supplier_product where producttitle='$title'";
                                $resultt = mysqli_query($con, $sql);
                                $countt = mysqli_num_rows($result);
                                
                                if($countt>0)
                                {
                                    $prodinfo=mysqli_fetch_array($resultt);
                                    if($row['status']=="completed" || $row['status']=="returned"){
                                        $btnType="hidden";
                                    }
                                    else{
                                        $btnType="submit";
                                    }
                                }
                                echo '
                                
                                <tr>
                                <form action="../../php/customerCartCancel.php" method="post">
                                    <input type="hidden" name="product-title" value="'.$row['producttitle'].'">
                                    
                                    <input type="hidden" name="product-size" value="'.$row['productsize'].'">
                                    
                                    <th scope="row">'.$count.'</th>
                                    <td>
                                        <img src="../../images/productpic/'.$prodinfo['productpic'].'" alt="">
                                    </td>
                                    <td>'.$row['producttitle'].'</td>
                                    <td>'.$row['productsize'].'</td>
                                    <td>'.$row['rent_buy'].'</td>
                                    <td>'.$row['receivingdate'].'</td>
                                    <td>'.$row['status'].'</td>
                                    <td>
                                    
                                     <input type="'.$btnType.'" class="btn btn-warning" name="cancel" value="cancel order"></td>
                                </form>
                                </tr>
                                ';
                             }
                        ?>
                        
                        </tbody>
                      </table>
            
        </div>
    </section>
    <!-- mycart part ends -->

    

    




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