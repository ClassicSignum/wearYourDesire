<?php
include_once('../db/db.php');
if(isset($_REQUEST['submit'])){

    $usermail=$_REQUEST['email'];
    $usertype=$_REQUEST['user-type'];
    $paid=$_REQUEST['paid'];
    $month=$_REQUEST['month'];


    $sql = "insert into service_charge (usermail,usertype,paid,paidmonth) values('$usermail','$usertype','$paid','$month')";
    $con = getConnection();


    if(mysqli_query($con,$sql)){
        header('location: ../views/admin/adminCharge.php');
        echo mysqli_error($con);
    }
    else{
        // header('location: ../../views/help.html');
    }
}


?>