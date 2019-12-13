<?php
session_start();
include_once('../db/db.php');
$loginEmail=$_SESSION['login-email'];
if(strlen($loginEmail)<5){
    header('location: ../index.php');
}
if(isset($_REQUEST['submit'])){
    $productType=trim($_POST['product-type']);
    $productTitle=trim($_POST['product-title']);
    $productSupplier=trim($_POST['product-supplier']);
    $productPrice=trim($_POST['product-price']);
    $productRent=trim($_POST['product-rent']);
    //$productPic=trim($_REQUEST['product-pic']);
    $productPic=$productType.$productTitle;
    $productSupplier=strtoupper($productSupplier);



    if($productType =='' || $productTitle =='' || $productSupplier =='' || $productPrice =='' || $productRent =='' || $productPic ==''){
        echo "  <script>
                location.href='../views/advertiser/advertiseReqAdd.html';
                alert('rtgrg');
                </script>";

    }
    else{
        $desc='../images/productpic/'.$productPic.'.jpg';
        $productPic=$productPic.'.jpg';
        
        $sql = "insert into request_add (advertisermail,producttype,producttitle,productsupplier,productprice,productrent,productpic) values('$loginEmail','$productType','$productTitle','$productSupplier','$productPrice','$productRent','$productPic')";
        $con = getConnection();

        if($_FILES['product-pic']['size']>10){
            move_uploaded_file($_FILES['product-pic']['tmp_name'], $desc);
                
        }

        

        

        if(mysqli_query($con, $sql)){

            echo "  <script>
                location.href='../views/advertiser/advertiseReqAdd.php';
                alert('Request Sent');
                </script>";


        }else{
    
            // echo("Error description: " . mysqli_error($con));
            
            
            header('location: ../views/advertiser/advertiseReqAdd.php');
            echo 'database problem';
        }

        $sql = "insert into supplier_product (suppliermail,brandname,productpic,producttype,producttitle,advertisermail,productprice,productrent,productdetails,productdesc,productsize,status) values('','$productSupplier','$productPic','$productType','$productTitle','$loginEmail','$productPrice','$productRent','','','','pending')";
        $con = getConnection();

        if(mysqli_query($con, $sql)){

            echo "  <script>
                location.href='../views/advertiser/advertiseReqAdd.php';
                
                </script>";


        }else{
    
            // echo("Error description: " . mysqli_error($con));
            
            
            header('location: ../views/advertiser/advertiseReqAdd.php');
            echo 'database problem';
        }


        


    }
}
else{
    header('location: ../../../views/advertiser/advertise.php');
}

?>