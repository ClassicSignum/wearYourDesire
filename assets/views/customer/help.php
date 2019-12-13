<?php

session_start();

$myfile = fopen('../../php/user.txt', 'r');
			$data = fread($myfile, filesize('../../php/user.txt'));
      // $helpdesc = explode('|', $data);
      
    
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <link rel="stylesheet" href="../../css/help.css">
  <!-- <link rel="stylesheet" href="../css/help.scss"> -->
  <link rel="stylesheet" href="../../css/all.min.css">
  <link rel="stylesheet" href="../../css/slick.css">
  <link rel="stylesheet" href="../../css/floatmessage.css">
  <link rel="stylesheet" href="../../css/jquery-ui.css">



  <title>Wear Your Desire!</title>
</head>

<body>

  <!-- header part starts -->

  <header class="header-part">
    <div class="items container-fluid bg-dark">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
          <img src="../../images/index/icon.png" height="50" width="60" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active pr-4">
              <a class="" href="customer.php">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="dhover1 nav-item dropdown pr-4 pb-0">
              <a class=" dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                our collection
              </a>
              <div class="dropdown-menu bg-dark dmenu1" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../suitsAndTuxedos/suitsAndTuxedos.php">SUITS & TUXEDOS</a>
                <a class="dropdown-item" href="../shirts/shirts.php">SHIRTS</a>
                <a class="dropdown-item" href="../sherwanis/sherwanis.php">SHERWANIS</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../shoes/shoes.php">SHOES</a>
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

  <!-- secound part starts -->
  <section class="secound-part">

    <div class="container text-center">
      <h3>The Wear Your Desire Help Center</h3>
      <h4>Have Any Queation? Search Here..</h4>
    </div>

  </section>
  <!-- secound part ends -->

  <!-- input box starts -->
  <section class="input-b">
    <div class="container">
      <div class="input-group mb-3">
        <!-- <input type="text" class="form-control fas" placeholder="&#61442; Seach" aria-label="Recipient's username"
          aria-describedby="button-addon2"> -->
          <div class="ui-widget input-b text-center">
            <label for="tags">Search: </label>
            <input type="text" name="helo-text" id="tags">
            <br>
            <br>
        <div class="input-group-append">
          <button class="btn search-btn btn-outline-secondary" type="button"  >Search</button>
        </div>
        
      </div>
    </div>
  </section>
  <!-- input box ends -->

  <!-- search items -->
  <section class="search-item">
    <div class="container text-center">
      <?php

echo $data;

$myfile = fopen('../../php/user.txt', 'w');
    fwrite($myfile, " ");
    fclose($myfile);


?>
    </div>
  </section>

  </div>
  <!-- search items -->



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

  <!-- login part starts -->


  <div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Login</h3>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
            <div class="form-group">

              <label for="uname1">Email address</label>
              <input type="text" class="form-control form-control-lg" name="uname1" id="uname1" required="">
              <div class="invalid-feedback">Oops, you missed this one.</div>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control form-control-lg" id="pwd1" required=""
                autocomplete="new-password">
              <div class="invalid-feedback">Enter your password too!</div>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="rememberMe">
              <label class="custom-control-label" for="rememberMe">Remember me on this computer</label>
            </div>
            <div class="form-group py-4">
              <button class="btn btn-outline-secondary btn-lg" data-dismiss="modal" aria-hidden="true">Cancel</button>
              <button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
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
              <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
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









  <script src="../../js/jquery-3.4.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
  <script src="../../js/slick.min.js"></script>
  <script src="../../js/floatmessage.js"></script>
  <script src="../../js/jquery-ui.js"></script>

  <script>
 $(document).ready(function () {

$( function() {

    var availableTags = [

      <?php
      include_once('../../db/db.php');
       $con = getConnection();
       $sql = "select * from how_it_works";
       $result = mysqli_query($con, $sql);
       $total = mysqli_num_rows($result);
       $count = 0;
       while($row= mysqli_fetch_assoc($result)){
        $count++;
        if($count==$total){
          
          echo '"'.$row['title'].'"';
        }
        else{

          echo '"'.$row['title'].''.'",';
        }
        
      // "Java",
      // "JavaScript"

       }

      ?>
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  } );


   $('.search-btn').click(function(e){
    e.preventDefault(e);
     values=$('#tags').val();
      
      $.ajax({
              url: '../../php/help.php',
              type: 'POST',
              dataType:'json',
              data: {'helpbox' : values},
              success: function (response) {
               alert(response);
               
                
              },
              error: function (err) {
                console.log(err);
              }
            });

          
                location.reload();


            
                
   });
 });
    //////////////////////////////////

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

    $('.account, .account-menu').mouseenter(function () {
            $('.account-menu').fadeIn();
        });
        $('.account').mouseleave(function () {
            $('.account-menu').fadeOut();
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