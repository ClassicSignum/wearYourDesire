<?php
session_start();
if(!isset($_SESSION['login-email'])){
    header('location: ../index.php');
}
else{
    if($_SESSION['usertypes']!="Supplier"){
        header('location: ../index.php');
    }
}

include_once('../../db/db.php');

$loginEmail=$_SESSION['login-email'];

$con = getConnection();
$sql = "select * from user_table where email='$loginEmail'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $admininfo=mysqli_fetch_array($result);
}
$brandname=$admininfo['brandname'];
/////
$con = getConnection();
$sql = "select * from request_add where productsupplier='$brandname'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $productDetails=mysqli_fetch_array($result);
}



$sql = "select * from supplier_product where brandname='$brandname' and status='pending'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $productDetails=mysqli_fetch_array($result);
}
$pending=$count;


//in cart status
$sql = "select * from customer_cart where suppliermail='$loginEmail' and status='pending'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $productDetails=mysqli_fetch_array($result);
}
$cartpending=$count;

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
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/floatmessage.css">
    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/wow.js"></script>
   


    <title>Supplier!Wear Your Desire</title>
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
                    <script>

$(document).ready(function() {
    
    if(<?=$pending?>>0 || <?=$cartpending?>>0){

       $( '<a href="#notifyModal" data-toggle="modal" class="bellnotify mr-4">'+
            '<i class="fas fa-bell wow jello" data-wow-iteration="90" data-wow-duration="1s"></i>'+
            '<span class="badge badge-light wow heartBeat " data-wow-duration="3s"'+
                'data-wow-iteration="90"><?= $pending+$cartpending ?></span>"' ).appendTo("form");     
    }
    else{

        $( '<a href="#notifyModal" data-toggle="modal" class="bell mr-4">'+
            '<i class="fas fa-bell" data-wow-iteration="90" data-wow-duration="1s"></i>').appendTo("form"); 

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

    <!-- advertise dash part starts -->
    <section class="admin-dash-part">

        <div class=" container-fluid">

            <div class="row">
                <div class="col-md-2">
                    <div class="items text-center">

                        <img src="../../images/admin/supplier.png" alt="">

                        <div class="row btns">
                            <div class="col-md-3">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="supplier.php">Home</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="supplierProfile.php">My Info</a>
                            </div>
                        </div>

                        <div class="row btns">

                            <div class="col-md-3">
                                <i class="fab fa-sellsy"></i>
                            </div>
                            <div class="col-md-9 text-center">
                                <a href="supplierSell.php">Sell history</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="items2 mt-4">
                        <table class="table text-white table-dark">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Product</th>
                                <th scope="col">Title</th>
                                <th scope="col">Advertiser</th>
                                <th scope="col">Price</th>
                                <th scope="col">Rent price</th>
                                <th scope="col">Details</th>
                                <th scope="col">Description</th>
                                <th scope="col">Available size</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                                
                              </tr>
                            </thead>
                            <tbody>
                                <?php  // php starts

$conn = getConnection();
$sql = "select * from supplier_product where brandname='$brandname'";
$result = mysqli_query($conn, $sql);
$count=0;
while($row = mysqli_fetch_assoc($result)){
    $count++;
    // $_SESSION['product-title']=$row['producttitle'];
                    echo '
                        <form method="post" action="supplierProduct.php">
                        <input type="hidden" name="product-title"  value=" '.$row['producttitle'].'  ">
                              <tr>
                                <th scope="row">'.$count.'</th>
                                <td>
                                    <img src="../../images/productpic/'.$row['productpic'].'   " alt="">
                                </td>
                                <td>'.$row['producttitle'].'</td>
                                <td>'.$row['advertisermail'].'</td>
                                <td>'.$row['productprice'].'</td>
                                <td>'.$row['productrent'].'</td>
                                <td>'.$row['productdetails'].'</td>
                                <td>'.$row['productdesc'].'</td>
                                <td>'.$row['productsize'].'</td>
                                <td>'.$row['status'].'</td>
                                <td>
                                    <input type="submit" name="submit" class=" btn btn-outline-success" value="Update">

                                </td>
                                
                            </tr>
                            </form>
                            ';
                           
                            
}
                     //php ends         ?>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- advertise dash part ends -->

    <!-- notification part starts -->


  <div id="notifyModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Notification</h3>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body border-top">
            <h4>You have <?=$pending?> pending products</h4>
            <br>
            <h4>You have <?=$cartpending?> sell pending products</h4>
        </div>
      </div>
    </div>
  </div>
  <!-- notification part ends -->


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
            <!-- <li class="self">Hello!</li> -->
           
          
        </ul>
          <div class="footer">
            <div class="text-box" contenteditable="true" disabled="true"></div>
            <button id="sendMessage1">send</button>
          </div>
        </div>
      </div>
      <!-- floating message part ends -->





  


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

            // chat_msg="you "+chat_msg;
					websocket_server.send(
						JSON.stringify({
							'type':'chat',
							'chat_msg':chat_msg
						})
					);
					// $(this).val('');
                    $('.text-box').text('');
          });
		
		});
		</script>


    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="../js/slick.min.js"></script> -->
    <script src="../../js/floatmessage.js"></script>
    <script src="../../js/Chart.min.js"></script>

    <script>

        
        var wow = new WOW();
    wow.init();



        $('.dhover2, .dmenu2').mouseenter(function () {
            $('.dmenu2').fadeIn();
        });
        $('.dhover2').mouseleave(function () {
            $('.dmenu2').fadeOut();
        });



    </script>

    
</body>

</html>