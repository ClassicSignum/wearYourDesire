<html>
        <link rel="stylesheet" href="../../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../css/materializeCopy.css">
        <link rel="stylesheet" href="../../../css/shoes/selectedShoe/selectedShoe.css">
        <link rel="stylesheet" href="../../../css/all.min.css">
        <script src="../../../js/jquery-3.4.1.min.js"></script>
        <script src="../../../js/popper.min.js"></script>
        <script src="../../../js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="jquery-confirm.min.css">
        <script src="jquery-confirm.min.js"></script>
</html>

<?php
session_start();
include_once('../db/db.php');
$loginEmail=$_SESSION['login-email'];
if(isset($_REQUEST['submit'])){

    
    
    $productTitle=trim($_REQUEST['product-title']);
    $productPrice=trim($_REQUEST['product-price']);
    $productRent=trim($_REQUEST['product-rent']);
    $productDetails=trim($_REQUEST['product-details']);
    
    $productSize=trim($_REQUEST['product-size']);
    $advertisermail=trim($_REQUEST['advertiser-email']);
    $suppliermail=trim($_REQUEST['supplier-email']);
    $status=trim($_REQUEST['product-status']);

             $conn = getConnection();
            $sql = "update supplier_product set productprice='{$productPrice}',productrent='{$productRent}',productdetails='{$productDetails}',status='{$status}',productsize='{$productSize}',suppliermail='{$suppliermail}',advertisermail='{$advertisermail}' where  producttitle='{$productTitle}' ";
            if (mysqli_query($conn, $sql)) {
                echo "  <script>
                location.href='../views/admin/adminSupplierProduct.php';

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
                location.href='../views/admin/adminSupplierProduct.php';
    
            alert('Successfully deleted');
            </script>";
    }

}


?>