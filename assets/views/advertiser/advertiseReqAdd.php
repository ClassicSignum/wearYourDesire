<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/advertise/advertiseReqAddStyle.css">
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
                <div class="col-md-10">
                    <div class="items2 mt-4">
                        <form action="../../php/advertiseReqAdd.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">



                                <label for="exampleInputEmail1">Product Type</label>
                                <select class="form-control" name="product-type" id="exampleFormControlSelect1">
                                    <option>Shirt</option>
                                    <option>Sherwani</option>
                                    <option>Suits & Tuxedo</option>
                                    <option>Shoe</option>
                                </select>

                                <label for="exampleInputEmail1">Product title</label>
                                <input type="text" name="product-title" class="form-control" placeholder="Enter title">

                                <label for="exampleInputEmail1">Product supplier</label>
                                <input type="text" name="product-supplier" class="form-control" placeholder="Enter supplier">

                                <label for="exampleInputEmail1">Product price</label>
                                <input type="number" name="product-price" class="form-control" placeholder="Enter price">

                                <label for="exampleInputEmail1">Product rent price</label>
                                <input type="number" name="product-rent" class="form-control" placeholder="Enter rent price">

                                
                                

                                <label for="exampleFormControlFile1">Add photo here</label>
                                <input type="file" name="product-pic" class="form-control-file" id="exampleFormControlFile1">
                            
                                <input type="submit" name="submit" class="mt-4 btn btn-outline-secondary" value="Send request">

                            
                            
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