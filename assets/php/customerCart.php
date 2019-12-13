<?php
session_start();
include_once('../db/db.php');
$loginMail=$_SESSION['login-email'];
if(isset($_REQUEST['rent'])){
    $prodtitle=trim($_REQUEST['product-title']);
    $suppliermail=trim($_REQUEST['supplier-mail']);
    $prodsize=trim($_REQUEST['product-size']);
    $prodpayment=trim($_REQUEST['payment-policy']);
    $prodrent=trim($_REQUEST['product-rent']);
    $date=date("d-m-Y", strtotime("+2 day"));
    $pic=trim($_REQUEST['productpic']);

    $con = getConnection();
    $sql = "insert into customer_cart (customermail,suppliermail,producttitle,productsize,rent_buy,paid,paidby,receivingdate,pictures,status) values('$loginMail','$suppliermail','$prodtitle','$prodsize','rent','$prodrent','$prodpayment','$date','$pic','pending')";


    if(mysqli_query($con,$sql)){
        header('location: ../views/customer/customerCart.php');
        // echo "solved";
    }
    else{
        // header('location: ../../views/help.html');
        echo("Error description: " . mysqli_error($con));
        header('location: ../views/help.php');
    }
}
else if(isset($_REQUEST['buy'])){
    $prodtitle=trim($_REQUEST['product-title']);
    $suppliermail=trim($_REQUEST['supplier-mail']);
    $prodsize=trim($_REQUEST['product-size']);
    $prodpayment=trim($_REQUEST['payment-policy']);
    $prodprice=trim($_REQUEST['product-price']);
    $date=date("d-m-Y", strtotime("+2 day"));
    $pic=trim($_REQUEST['productpic']);

    $sql = "insert into customer_cart (customermail,suppliermail,producttitle,productsize,rent_buy,paid,paidby,receivingdate,pictures,status) values('$loginMail','$suppliermail','$prodtitle','$prodsize','buy','$prodprice','$prodpayment','$date','$pic','pending')";
    $con = getConnection();


    if(mysqli_query($con,$sql)){
        header('location: ../views/customer/customerCart.php');
        // echo "solved";
    }
    else{
        // header('location: ../../views/help.html');
    }
}
else{
    
}


?>