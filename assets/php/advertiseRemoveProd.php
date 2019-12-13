<?php
include_once('../db/db.php');
if(isset($_REQUEST['remove'])){
    $productTitle=$_REQUEST['product-title'];
    $conn = getConnection();
    $sql = "delete from request_add where producttitle='$productTitle'";
    $result = mysqli_query($conn, $sql);
    
   
        echo "  <script>
            location.href='../views/advertiser/advertise.php';

        alert('Successfully deleted');
        </script>";
}
else{
    
}


?>