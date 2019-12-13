<?php
session_start();
include_once('../db/db.php');

if(isset($_REQUEST['submit'])){

    $email=trim($_REQUEST['email']);
    
    $conn = getConnection();
    $sql = "select * from user_table where email='$email'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count>0){
        $row= mysqli_fetch_assoc($result);
    }
    if($row['status']=='permitted'){
        $sql = "update user_table set status='restricted' where  email='{$email}' ";
        if (mysqli_query($conn, $sql)) {
            echo "  <script>
            location.href='../views/admin/admin.php';

        alert('updated');
        </script>";
        }
        else {
            echo "  <script>
            

        alert('Not updated!');
        </script>";
        }
    }
    else{
        $sql = "update user_table set status='permitted' where  email='{$email}' ";
        if (mysqli_query($conn, $sql)) {
            echo "  <script>
            location.href='../views/admin/admin.php';

        alert('updated');
        </script>";
        }
        else {
            echo "  <script>
            location.href='../views/admin/admin.php';

        alert('Not updated!');
        </script>";
        }
    }
}
else{
    if(isset($_REQUEST['delete'])){
    $email=trim($_REQUEST['email']);
    $conn = getConnection();
    $sql = "delete from user_table where email='$email'";
    $result = mysqli_query($conn, $sql);
    
   
        echo "  <script>
            location.href='../views/admin/admin.php';

        alert('Successfully deleted');
        </script>";
    

    }
}



?>