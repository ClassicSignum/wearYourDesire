<?php
session_start();
include_once('../db/db.php');


$helptext=$_POST['helpbox'];
// print($helptext);
$con = getConnection();
$sql = "select * from how_it_works where title='$helptext'";
$result = mysqli_query($con, $sql);
$count = mysqli_num_rows($result);
if($count>0)
{
    $helpinfo=mysqli_fetch_array($result);
    $myfile = fopen('user.txt', 'w');
    fwrite($myfile, $helpinfo['description']);
    fclose($myfile);

   

   
}


?>