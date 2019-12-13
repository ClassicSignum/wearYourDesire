<?php
session_start();
include_once('../db/db.php');
$loginEmail=$_SESSION['login-email'];
if(isset($_REQUEST['submit'])){

    $productTitle=trim($_REQUEST['product-title']);
    $productPrice=trim($_REQUEST['product-price']);
    $productRent=trim($_REQUEST['product-rent']);
    $productDetails=trim($_REQUEST['product-details']);
    $productDesc=trim($_REQUEST['product-desc']);
    $productSize=trim($_REQUEST['product-size']);
    $advertisermail=trim($_REQUEST['advertiser-mail']);

             $conn = getConnection();
            $sql = "update supplier_product set productprice='{$productPrice}',productrent='{$productRent}',productdetails='{$productDetails}',productdesc='{$productDesc}',productsize='{$productSize}',suppliermail='{$loginEmail}' where advertisermail='{$advertisermail}' and producttitle='{$productTitle}' ";
            if (mysqli_query($conn, $sql)) {
                echo "  <script>
                location.href='../views/supplier/supplier.php';

            alert('updated');
            </script>";
            }
            else {
                echo "  <script>
                location.href='$link';

            alert('Not updated!');
            </script>";
            }

}
else{
    if(isset($_REQUEST['remove'])){
        $productTitle=trim($_REQUEST['product-title']);
        $conn = getConnection();
        $sql = "delete from supplier_product where producttitle='$productTitle'";
        $result = mysqli_query($conn, $sql);
        
       
            echo "  <script>
                location.href='../views/supplier/supplier.php';
    
            alert('Successfully deleted');
            </script>";
    }

}


?>