<?php
session_start();
include_once('../db/db.php');

    // $firstName=trim($_REQUEST['first_name']);
    // $lastName=trim($_REQUEST['last_name']);
    // $email=trim($_REQUEST['email']);
    // $userType=trim($_REQUEST['user_type']);
    // $address=trim($_REQUEST['address']);
    // $phoneNo=trim($_REQUEST['phoneNo']);
    // $password=trim($_REQUEST['password']);
    // header('location: ../../views/help.html');

    $firstName=$_POST['first_name'];
    $lastName=$_POST['last_name'];
    $email=$_POST['email'];
    $userType=$_POST['user_type'];
    $address=$_POST['address'];
    $phoneNo=$_POST['phoneNo'];
    $password=$_POST['password'];

    $sql = "insert into user_table (firstname,lastname,email,usertype,address,phoneno,password,status) values('$firstName','$lastName','$email','$userType','$address','$phoneNo','$password','permitted')";
    $con = getConnection();


    if(mysqli_query($con,$sql)){
        header('location: ../views/index.php');
        // echo "solved";
    }
    else{
        // header('location: ../../views/help.html');
    }






?>