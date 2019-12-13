<?php
session_start();
if(!isset($_SESSION['login-email'])){
    $_SESSION['no-mail']="false";
    header('location: ../shirts.php');
    
    
    
}
else{
    $productTitle=trim($_REQUEST['product-title']);
}

include_once('../../../db/db.php');

$con = getConnection();
$sql = "select * from supplier_product where producttitle='$productTitle'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $prodinfo=mysqli_fetch_array($result);
}




?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/materializeCopy.css">
    <link rel="stylesheet" href="../../../css/shoes/selectedShoe/selectedShoe.css">
    <link rel="stylesheet" href="../../../css/all.min.css">

    <title>Shoes!</title>
</head>

<body>

    <!-- header part starts -->

  <header class="header-part">
      <div class="items container-fluid bg-dark">
          <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="#">
                  <img src="../../../images/index/icon.png" height="50" width="60" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav m-auto">
                      <li class="nav-item active pr-4">
                          <a class="" href="../../customer/customer.php">Home <span class="sr-only">(current)</span></a>
                      </li>

                      <li class="dhover1 nav-item dropdown pr-4 pb-0">
                          <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              our collection
                          </a>
                          <div class="dropdown-menu bg-dark dmenu1" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="../../suitsAndTuxedos/suitsAndTuxedos.php">SUITS &
                                  TUXEDOS</a>
                              <a class="dropdown-item" href="../shirts.php">SHIRTS</a>
                              <a class="dropdown-item" href="../../sherwanis/sherwanis.php">SHERWANIS</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="../../shoes/shoes.php">SHOES</a>
                          </div>
                      </li>
                     
                      <li class="nav-item pr-4">
                          <a class="" href="../../customer/howitworks.php">how it works <span
                                  class="sr-only">(current)</span></a>
                      </li>
                      

                      <li class="nav-item pr-4">
                          <a class="" href="../../customer/help.php">help <span class="sr-only">(current)</span></a>
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
                                  <a class="dropdown-item" href="../../customer/customerProfile.php">My info</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="../../customer/customerCart.php">My cart</a>
                                  
                              </div>
                          </li>
                      <a href="" class="bell mr-4">
                          <i class="fas fa-bell"></i>
                      </a>

                      <a href="../../../php/logout.php" role="button" class="btn btn-outline-success mr-4">Log out</a>
                  </form>
              </div>
          </nav>
      </div>
  </header>

  <!-- header part ends -->

    <!-- product part starts -->

    <section class="product-part">

        <div class="container text-center">
            <h3>I am looking for..</h3>
            <h5><?php  echo $productTitle  ?></h5>
            <div class="row">
                <div class="col-md-7">
                <img src="../../../images/productpic/<?=$prodinfo['productpic'] ?>" alt="">
                </div>
                <div class="col-md-5">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header"><i class="fas fa-info-circle"></i>Details  <i class="fas fa-arrow-down ml-auto"></i></div>
                            <div class="collapsible-body"><span><?=$prodinfo['productdetails']?></span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="fas fa-file-alt"></i>Description  <i class="fas fa-arrow-down ml-auto"></i></div>
                            <div class="collapsible-body"><span><?=$prodinfo['productdesc']?></span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="fas fa-expand-arrows-alt"></i>Size  <i class="fas fa-arrow-down ml-auto"></i></div>
                            <div class="collapsible-body"><span><?=$prodinfo['productsize']?></span></div>
                        </li>
                        <li>
                            <div class="collapsible-header"><i class="fas fa-at"></i>Supplier <i
                                    class="fas fa-arrow-down ml-auto"></i></div>
                            <div class="collapsible-body"><span><?=$prodinfo['suppliermail']?></span></div>
                        </li>
                    </ul>
                </div>
            </div>



            <div class="rent-buy">
                <!-- <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-secondary">
                    Rent this for <?=$prodinfo['productrent'] ?>
                </button> -->
                <?php
                if(strlen($prodinfo['productrent'])<3){
                    //    $btnType="submit"; 
                       $btnType="hidden"; 
                       
                    }
                    else{
                        $btnType="submit"; 
                        
                }

                ?>
                <input type="<?=$btnType ?>" data-toggle="modal" data-target="#exampleModal" value="Rent this for <?= $prodinfo['productrent'] ?> " class="btn btn-outline-secondary">
                    

                <br>
                <br>
                <input type="submit" data-toggle="modal" data-target="#exampleModal2" value="Buy this for <?= $prodinfo['productprice'] ?> " class="btn btn-outline-info">

                <!-- <button type="button" data-toggle="modal" data-target="#exampleModal2" class="btn btn-outline-info">
                    Buy this for <?=$prodinfo['productprice']?>
                </button> -->


            </div>
        </div>

    </section>

    <!-- product part ends -->

     <!-- rent this modal starts   -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               
                <div class="modal-body">
                <form action="../../../php/customerCart.php" method="post">
                       <input type="hidden" name="product-rent" value="<?=$prodinfo['productrent'] ?>">
                       <input type="hidden" name="product-title" value="<?=$prodinfo['producttitle'] ?>">
                       <input type="hidden" name="supplier-mail" value="<?=$prodinfo['suppliermail'] ?>">
                       <input type="hidden" name="productpic" value="<?=$prodinfo['productpic'] ?>">

                        <label class=" font-weight-bold" for="">Preferred size:</label>
                        <select class="form-control" name="product-size" id="exampleFormControlSelect1">
                        <?php
                                $prodsize=$prodinfo['productsize'];
                                $prodsize=explode(",",$prodsize);
                                for($x=0 ; $x<sizeof($prodsize) ; $x++){
                                    echo '<option>'.$prodsize[$x].'</option>';
                                }                                 

                                ?>
                        </select>
                        <br>
                        <label class=" font-weight-bold" for="">Available payment policy:</label>
                        <select class="form-control" name="payment-policy" id="exampleFormControlSelect1">
                                <option>Cash-on-delivery</option>
                                <option>B-kash</option>
                                <option>Rocket</option>
                                <option>Nogod</option>
                        </select>
                        <input type="submit" class="btn btn-outline-secondary mt-3" name="rent" value="Rent this now">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- rent this modal ends   -->

    <!-- buy this modal starts   -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
               
                <div class="modal-body">
                <form action="../../../php/customerCart.php" method="post">
                    <input type="hidden" name="product-price" value="<?=$prodinfo['productprice'] ?>">
                       <input type="hidden" name="product-title" value="<?=$prodinfo['producttitle'] ?>">
                       <input type="hidden" name="supplier-mail" value="<?=$prodinfo['suppliermail'] ?>">
                       <input type="hidden" name="productpic" value="<?=$prodinfo['productpic'] ?>">
                        <label class=" font-weight-bold" for="">Preferred size:</label>
                        <select class="form-control" name="product-size" id="exampleFormControlSelect1">
                        <?php
                                $prodsize=$prodinfo['productsize'];
                                $prodsize=explode(",",$prodsize);
                                for($x=0 ; $x<sizeof($prodsize) ; $x++){
                                    echo '<option>'.$prodsize[$x].'</option>';
                                }                                 

                                ?>
                        </select>
                        <br>
                        <label class=" font-weight-bold" for="">Available payment policy:</label>
                        <select class="form-control" name="payment-policy" id="exampleFormControlSelect1">
                                <option>Cash-on-delivery</option>
                                <option>B-kash</option>
                                <option>Rocket</option>
                                <option>Nogod</option>
                        </select>
                        <input type="submit" class="btn btn-outline-secondary mt-3" name="buy" value="Buy this now">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    <!-- buy this modal ends   -->

    

    <!-- footer part starts -->
    <section class="footer-part">
        <div class="container">
            <div class="items text-center">
                <img src="../../images/index/icon.png" alt="">
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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="../../../js/jquery-3.4.1.min.js"></script>
    <script src="../../../js/popper.min.js"></script>
    <script src="../../../js/bootstrap.min.js"></script>
    <script src="../../../js/materialize.min.js"></script>

    <script>

$('.account, .account-menu').mouseenter(function () {
            $('.account-menu').fadeIn();
        });
        $('.account').mouseleave(function () {
            $('.account-menu').fadeOut();
        });

        /////

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

        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.collapsible');
            var instances = M.Collapsible.init(elems, options);
        });

        // Or with jQuery

        $(document).ready(function () {
            $('.collapsible').collapsible();
        });

    </script>

</body>

</html>