<?php
session_start();
include_once('../db/db.php');


    $otherMsg=trim($_POST['other_msg']);
    $loginMail=trim($_POST['login_mail']);
    $tomsg=trim($_POST['to_msg']);

$sql = "insert into message (fromms,toms,msg) values('$loginMail','$tomsg','$otherMsg')";
$con = getConnection();


if(mysqli_query($con,$sql)){
    // header('location: ../views/admin/adminCharge.php');
    // echo mysqli_error($con);
}
else{
    echo mysqli_error($con);
    // header('location: ../../views/help.php');
}

?>