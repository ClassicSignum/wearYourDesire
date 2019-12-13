<?php
// $session = mt_rand(1,999);
?>
<?php
session_start();
if(!isset($_SESSION['login-email'])){
  header('location: ../index.php');
}
else{
  if($_SESSION['usertypes']!="Customer"){
      header('location: ../index.php');
  }
}
include_once('../../db/db.php');
$con=getConnection();
$loginMail=$_SESSION['login-email'];


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/customer/customerStyle.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/slick.css">
    <!-- <link rel="stylesheet" href="../../css/animate.css"> -->
    <link rel="stylesheet" href="../../css/floatmessage.css">
    <!-- <link rel="stylesheet" href="../../css/Chart.min.css"> -->


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
                            <a class="" href="">Home <span class="sr-only">(current)</span></a>
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

     <!-- carousel part starts -->
  <section class="carousel-part">

        <div class="items">
          <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../../images/index/img-1.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>GOOD QUALITY SHERWANIS</h5>
                    <p>VARIOUS DESIGN TO MAKE YOU LOOK GORGIAS</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../../images/index/img-2.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Suits & Tuxedos</h5>
                    <p>SUIT UP & BE LEGEND...WAIT FOR IT...DARY</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../../images/index/img-3.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Dress up</h5>
                    <p>BE THE COOLEST </p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
    
      </section>
      <!-- carousel part ends -->
    
      <!--  choose part starts -->
      <section class="choose-part">
    
        <div class="items">
          <div class="container">
            <h1 class=" text-center">Really looking forward to the next
              <span class=" fontp">
                event <br>
              </span>
              but what to
              <span class=" fontp">
                choose
              </span>
            </h1>
          </div>
        </div>
    
      </section>
      <!--  choose part ends -->
    
      <!-- products part starts -->
      <section class="products-part">
    
        <div class="items">
          <div class="container-fluid">
    
            <div class="row">
              <div class="col-md-3">
                <div class="products">
                  <img src="../../images/index/suits.png" alt="">
                  <div class="products-overlay">
                    <a href="../suitsAndTuxedos/suitsAndTuxedos.php"><i class="fas fa-link"></i></a>
    
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="products">
                  <img src="../../images/index/sherwanis.png" alt="">
                  <div class="products-overlay">
                    <a href="../sherwanis/sherwanis.php"><i class="fas fa-link"></i></a>
                  </div>
    
                </div>
              </div>
              <div class="col-md-3">
                <div class="products">
                  <img src="../../images/index/shirts.png" alt="">
                  <div class="products-overlay">
                    <a href="../shirts/shirts.php"><i class="fas fa-link"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="products">
                  <img src="../../images/index/shoes.png" alt="">
                  <div class="products-overlay">
                    <a href="../shoes/shoes.php"><i class="fas fa-link"></i></a>
                  </div>
    
                </div>
              </div>
            </div>
    
          </div>
        </div>
    
      </section>
      <!-- products part ends -->
    
      <!-- howitworks part starts -->
    
      <section class="howitworks-part text-center">
        <h1>“The site that’s revolutionizing the menswear <br> rental market”</h1>
        <div class="items">
          <div class="container">
            <div class="row">
              <div class="col-md-4 text-center">
                <a href=""><i class="fas fa-retweet"></i></a>
                <h3>Rent</h3>
                <h5 class=" text-wrap">
                  liked our suits, shoes, sherwanis or shirts?
                  You can rent one to two items.However,
                  we only offer free shipping for orders over $95.
                </h5>
              </div>
              <div class="col-md-4 text-center">
                <a href=""><i class="fas fa-shopping-cart"></i></a>
                <h3>Buy</h3>
                <h5 class=" text-wrap">
                  We offer our products for sale!
                  Want to keep a rental that's currently in your possession,
                  you can keep it that too for an additional cost.
                </h5>
              </div>
              <div class="col-md-4 text-center">
                <a href=""><i class="fas fa-exchange-alt"></i></a>
                <h3>Return</h3>
                <h5 class=" text-wrap">
                  Pack everything in the original delivery box
                  and peel off the shipping label
                  to reveal the prepaid return label underneath.
                </h5>
              </div>
            </div>
          </div>
        </div>
      </section>
    
      <!-- howitworks part ends -->
    
    
      <!-- our partners part starts -->
      <section class="partners-part text-center">
    
        <h1>OUR BRAND PARTNERS</h1>
    
        <i class="fas fa-chevron-left prev"></i>
        <i class="fas fa-chevron-right next"></i>
        <div class="container">
          <div class="center">
            <div class="box">
              <img src="../../images/index/partners-1.png" alt="">
            </div>
            <div class="box">
              <img src="../../images/index/partners-2.png" alt="">
            </div>
            <div class="box">
              <img src="../../images/index/partners-3.png" alt="">
            </div>
            <div class="box">
              <img src="../../images/index/partners-4.png" alt="">
            </div>
            <div class="box">
              <img src="../../images/index/partners-5.png" alt="">
            </div>
            <div class="box">
              <img src="../../images/index/partners-6.png" alt="">
            </div>
          </div>
        </div>
    
      </section>
      <!-- our partners part ends -->
    
    
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
    
         
          </ul>
          <div class="footer">
            <div class="text-box" contenteditable="true" disabled="true"></div>
            <button id="sendMessage1">send</button>
          </div>
        </div>
      </div>
      <!-- floating message part ends -->
      <script src="../../js/jquery-3.4.1.min.js"></script>


      <script type="text/javascript">
		jQuery(function($){
			// Websocket
			var websocket_server = new WebSocket("ws://localhost:8080/");
			websocket_server.onopen = function(e) {
				websocket_server.send(
					JSON.stringify({
						'type':'socket'
						
					})
				);
			};
			websocket_server.onerror = function(e) {
				// Errorhandling
			}
			websocket_server.onmessage = function(e)
			{
				var json = JSON.parse(e.data);
				switch(json.type) {
					case 'chat':
          // $('.messages').append("<li class='other'>"+json.msg+"</li>");
          $('.messages').append(json.msg);
						break;
				}
			}
		
					$('#sendMessage1').click(function(){
            var chat_msg = $('.text-box').text();
					websocket_server.send(
						JSON.stringify({
							'type':'chat',
							'chat_msg':chat_msg
						})
					);
					$('.text-box').text('');
          });
				// }
		
		});
		</script>





    
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/slick.min.js"></script>
    <script src="../../js/floatmessage.js"></script>
    <!-- <script src="../../js/Chart.min.js"></script> -->



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


        $('.account, .account-menu').mouseenter(function () {
            $('.account-menu').fadeIn();
        });
        $('.account').mouseleave(function () {
            $('.account-menu').fadeOut();
        });



    </script>

    <script>
       $('.center').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      autoplay:true,
      autoplaySpeed:1500,
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
        ///////////
        
    </script>

</body>

</html>