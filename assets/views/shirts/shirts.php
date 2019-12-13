
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/shirts/shirts.css">
  <!-- <link rel="stylesheet" href="../../css/shirts/shirts.scss"> -->
  <link rel="stylesheet" href="../../css/materializeZoomPic.css">
  <link rel="stylesheet" href="../../css/animate.css">
  <link rel="stylesheet" href="../../css/all.min.css">
  <!-- <link rel="stylesheet" href="../../css/slick.css"> -->
  <!-- <link rel="stylesheet" href="../css/floatmessage.css"> -->
  <script src="../../js/jquery-3.4.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../../css/jquery-confirm.min.css">
    <script src="../../js/jquery-confirm.min.js"></script>


  <title>Wear Your Desire!</title>
</head>

<?php
include_once('../../db/db.php');
session_start();
if(!isset($_SESSION['no-mail'])){
  $_SESSION['no-mail']="true";
}
if($_SESSION['no-mail']=="true"){
     
    
}
else{
    echo '
    <script>
    $.alert({
     title: "Alert!",
     content: "Login first",
 });
    </script>
    '; 
    $_SESSION['no-mail']="true";
  

}


?>

<body>

  <!-- header part starts -->
  <?php
 if(isset($_SESSION['login-email'])){
  echo '

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
                          <a class="" href="../customer/howitworks.php">how it works <span
                                  class="sr-only">(current)</span></a>
                      </li>
                      

                      <li class="nav-item pr-4">
                          <a class="" href="../customer/help.php">help <span class="sr-only">(current)</span></a>
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
                                  <a class="dropdown-item" href="../customer/customerProfile.php">My info</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="../customer/customerCart.php">My cart</a>
                                  
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

  ';
 }
 else{
   echo '
   <header class="header-part">
    <div class="items container-fluid bg-dark">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="../index.php">
          <img class="wow rotateIn"src="../../images/index/icon.png" data-wow-duration="3s" data-wow-iteration="40" height="50" width="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active pr-4">
              <a class="" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="dhover1 nav-item dropdown pr-4 pb-0">
              <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                our collection
              </a>
              <div class="dropdown-menu bg-dark dmenu1" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../suitsAndTuxedos.php">SUITS & TUXEDOS</a>
                <a class="dropdown-item" href="">SHIRTS</a>
                <a class="dropdown-item" href="../sherwanis/sherwanis.php">SHERWANIS</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../shoes/shoes.php">SHOES</a>
              </div>
            </li>
            <li class="nav-item pr-4">
              <a class="" href="../howitworks.php">how it works <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item pr-4">
              <a class="" href="../help.php">help <span class="sr-only">(current)</span></a>
            </li>


          </ul>
          <form class="form-inline my-2 my-lg-0">
            <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
            <!-- <button class="btn btn-outline-success my-2 my-sm-0 mr-4" type="submit">Sign in</button> -->
           

               
             
                  <a href="#loginModal" role="button" class="btn btn-outline-success mr-4" data-toggle="modal">Login</a>
                  <a href="#signupModal" role="button" class="btn btn-outline-success mr-4" data-toggle="modal">Sign up</a>    
               
            <!-- <button class="btn btn-outline-success my-2 my-sm-0" data-target="#reg-form" type="submit">Sign up</button> -->
          </form>
        </div>
      </nav>
    </div>
  </header>

  ';
}


?>
<!-- header part end -->

<!-- banner part starts -->
<section class="banner-part">

  <div class="mycontainer">
      <div class="wow slideInLeft">
          <div class="items">
              <h1>Shirts</h1>
              <h2>Classic and slim fit shirts in both modern and timeless styles</h2>
          </div>
      </div>
  </div>

</section>
<!-- banner part ends -->

  <!-- gallery part starts -->

  <section class="gallery-part">

    <div class="container">
        <div class="items">
            <div class="row mt-2 mb-5">
            <?php
            $con = getConnection();
            $sql = "select * from supplier_product where producttype='Shirt' and status='permitted'";
            $result = mysqli_query($con, $sql);
            $count = 0;
            while($row= mysqli_fetch_assoc($result)){

              echo '
          <div class="col-md-4">
            <div class="cards">
              <form action="selectedShirts/selectedShirts.php" method="post">
              <input type="hidden" name="product-title" value="'.$row['producttitle'].'">
                <div class="card" style="width: 18rem;">
                    <img class="materialboxed" src="../../images/productpic/'.$row['productpic'].'" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-uppercase">'.$row['producttitle'].'</h5>
                      <p class="card-text">Rent '.$row['productrent'].' & Buy '.$row['productprice'].'</p>
                      
                      <input type="submit" class="btn btn-primary" name="view" value="View this">
              </form>
                </div>
              </div>
            </div>
          </div>
          ';
          $count++;
          if($count % 3==0){
            echo '
            </div>
            <div class="row mt-2 mb-5">
            ';
          }
      }
      ?>
              
        </div>
    </div>

  </section>

  <!-- gallery part ends -->

  

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


  

  <!-- login part starts -->


 <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Login</h3>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form class="form"  action="../../php/login.php" method="POST">
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


  <div class="modal fade " tabindex="-1" role="dialog" aria-hidden="true" id="signupModal">
    <div class=" modal-dialog">
      <div class=" modal-content">

        <div class="modal-header">
          <h3>Registration</h3>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form id="reg_form">
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
              <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
              <div class="invalid-feedback">Oops, you missed email address</div>
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">User type</label>
              <select class="form-control user_type" name="user_type" id="exampleFormControlSelect1">
                <option>Customer</option>
                <option>Supplier</option>
                <option>Advertiser</option>
              </select>
            </div>

            <div class="form-group">
              <input type="text" name="address" id="address" class="form-control input-sm" placeholder="Address">
              <div class="invalid-feedback">Oops, you missed address</div>
            </div>

            <div class="form-group">
              <input type="number" name="phoneNo" id="phoneNo" class="form-control input-sm" placeholder="Phone no">
              <div class="invalid-feedback">Oops, you missed phone number</div>
            </div>

            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="password" id="password" class="form-control input-sm" placeholder="Password">
                  <div class="invalid-feedback">You must create a password</div>
                  <small>at least six characters and one digit</small>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="password_confirmation" id="password_confirmation"
                    class="form-control input-sm" placeholder="Confirm Password">
                  <div class="invalid-feedback">Confirm your password</div>
                </div>
              </div>
            </div>

            <input type="submit" value="Register" class="btn btn-info btn-block submit">

          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- sign up part ends -->
          
          
          
          
          
          



 
  <script src="../../js/wow.js"></script>
  <script src="../../js/scrollspy.js"></script>
  <script src="../../js/materialize.min.js"></script>
  <!-- <script src="../js/slick.min.js"></script>
  <script src="../js/floatmessage.js"></script> -->

  <script>

$('.account, .account-menu').mouseenter(function () {
            $('.account-menu').fadeIn();
        });
        $('.account').mouseleave(function () {
            $('.account-menu').fadeOut();
        });
        ////


$(document).ready(function () {
      $('.submit').click(function (e) {
        e.preventDefault();

        $firstName = $('#first_name').val();
        $lastName = $('#last_name').val();
        $email = $('#email').val();
        $userType = $('.user_type').val();
        $address = $('#address').val();
        $phoneNo = $('#phoneNo').val();
        $pass = $('#password').val();
        $confirmPass = $('#password_confirmation').val();

        if ($firstName == "" || $lastName == "" || $email == "" || $address == "" || $userType == "" || $phoneNo == "" || $pass == "") {
          alert('invalid input:fill up all the information');
        }
        else {
          if ($firstName.includes(" ") || $lastName.includes(" ") || $email.includes(" ") || $userType.includes(" ") || $phoneNo.includes(" ") || $pass.includes(" ") ) {
          alert("invalid input:don't use any space");
          }
          else if($pass.length<7){
            alert("Use at least six characters and one number!");

          }
         else if (!/[a-zA-Z]/.test($pass)) {
            alert("Use at least six characters and one number!");
            
          }
         else if (!/\d/.test($pass)) {
            alert("Use at least six characters and one number!");

          }
          else if ($pass !== $confirmPass) {
            alert("Re-type password ");

          }
          else {
            var request;
            //  var $form = $('#reg_form');
            // $dataa = 'first_name' + $firstName + '&last_name' + $lastName + '&user_type' + $userType + '&email' + $email + '&address' + $address + '&phoneNo' + $phoneNo + '&password' + $pass;
            // $dataa = 'first_name' + $firstName + '&last_name' + $lastName;


            $.ajax({
              url: '../../php/registration.php',
              type: 'POST',
              data: { first_name: $firstName, last_name: $lastName, user_type: $userType, email: $email, address: $address, phoneNo: $phoneNo, password: $pass },
              success: function (response) {
                //var data = JSON.parse(response);
                alert("completed");
                window.open('?', '_self');
              },
              error: function (err) {
                alert("error");
              }
            });


          }

        }

      });

    });

    ////***



    WOW.prototype.addBox = function(element) {
    this.boxes.push(element);
  };

  // Init WOW.js and get instance
  var wow = new WOW();
  wow.init();

  // Attach scrollSpy to .wow elements for detect view exit events,
  // then reset elements and add again for animation
  $('.wow').on('scrollSpy:exit', function() {
    $(this).css({
      'visibility': 'hidden',
      'animation-name': 'none'
    }).removeClass('animated');
    wow.addBox(this);
  }).scrollSpy();



    /////***

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

    $(document).ready(function(){
    $('.materialboxed').materialbox();
  });

    
  </script>

</body>

</html>