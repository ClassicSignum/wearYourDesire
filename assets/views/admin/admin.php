<?php
// $session = mt_rand(1,999);
?>
<?php
session_start();
if(!isset($_SESSION['login-email'])){
    header('location: ../index.php');
}
else{
    if($_SESSION['usertypes']!="Admin"){
        header('location: ../index.php');
    }
}

include_once('../../db/db.php');

$con = getConnection();
$sql = "select * from user_table where usertype='Customer'";
$result = mysqli_query($con, $sql);
$countCustomer = mysqli_num_rows($result);

$sql = "select * from user_table where usertype='Supplier'";
$result = mysqli_query($con, $sql);
$countSupplier = mysqli_num_rows($result);

$sql = "select * from user_table where usertype='Advertiser'";
$result = mysqli_query($con, $sql);
$countAddvertiser = mysqli_num_rows($result);

////
$sql = "select * from supplier_product where producttype='Shirt'";
$result = mysqli_query($con, $sql);
$countShirt = mysqli_num_rows($result);

$sql = "select * from supplier_product where producttype='Sherwani'";
$result = mysqli_query($con, $sql);
$countSherwani = mysqli_num_rows($result);

$sql = "select * from supplier_product where producttype='Suits & Tuxedo'";
$result = mysqli_query($con, $sql);
$countSuit = mysqli_num_rows($result);


$sql = "select * from supplier_product where producttype='Shoe'";
$result = mysqli_query($con, $sql);
$countShoe = mysqli_num_rows($result);

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
    <!-- <link rel="stylesheet" href="../../css/admin/adminStyle.scss"> -->
    <link rel="stylesheet" href="../../css/all.min.css">
    <!-- <link rel="stylesheet" href="../css/slick.css"> -->
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/floatmessage.css">
    <link rel="stylesheet" href="../../css/Chart.min.css">

    <script src="../../js/jquery-3.4.1.min.js"></script>

    <script src="../../js/wow.js"></script>


    <title>Admin!Wear Your Desire</title>
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
                                                    'data-wow-iteration="90"><?= $pending ?></span>"' ).appendTo("form");     
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
                    <div class="items2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="users">
                                    <canvas id="myUser"></canvas>
                                    <p>Graph of users</p>

                                </div>
                            </div>
                            <div class="col-md-6">

                                <canvas id="myProduct"></canvas>
                                <p>Chart of products</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- admin dash part ends -->

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

    <script>
        var ctx = document.getElementById('myUser').getContext('2d');
        var myUser = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Customers', 'Suppliers', 'Advertisers'],
                datasets: [{
                    label: 'User Catagory',
                    data: [<?php echo $countCustomer ?>, <?php echo $countSupplier ?>, <?php echo $countAddvertiser ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                },
                animation: {

                    easing: 'easeOutBounce',

                }
            
            }
        });


        ///////////
        var myPie = document.getElementById('myProduct').getContext('2d');
        var myProduct = new Chart(myPie, {
            type: 'pie',
            data: {
                labels: ['Suits & Tuxedos', 'Shirts', 'Sherwanis', 'Shoes'],
                datasets: [{
                    label: 'Product Catagory',
                    data: [<?php echo $countSuit ?>, <?php echo $countShirt ?>,<?php echo $countSherwani ?>, <?php echo $countShoe ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(45, 202, 31, 0.2)'

                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(45, 202, 31, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                animation: {

                    easing: 'easeOutBounce',

                }
                
            }
        });
    </script>

</body>

</html>