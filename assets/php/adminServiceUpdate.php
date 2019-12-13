<?php
include_once('../db/db.php');
if(isset($_REQUEST['submit'])){
    $prevmail=trim($_REQUEST['prevmail']);
    $prevmonth=trim($_REQUEST['prevmonth']);

    $usermail=$_REQUEST['email'];
    $usertype=$_REQUEST['user-type'];
    $paid=$_REQUEST['paid'];
    $month=$_REQUEST['month'];

    $con = getConnection();
    $sql = "update service_charge set usermail='$usermail',usertype='$usertype',paid='$paid' , paidmonth='$month' where  usermail='{$prevmail}' and paidmonth='{$prevmonth}' ";
        if (mysqli_query($con, $sql)) {
            header('location: ../views/admin/adminCharge.php');            
        }

}

?>