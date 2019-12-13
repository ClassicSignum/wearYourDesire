<?php
session_start();
include_once('../db/db.php');
if(isset($_REQUEST['completed'])){

    $suppliermail=trim($_REQUEST['supplier-mail']);
    $customermail=trim($_REQUEST['customer-mail']);
    $title=trim($_REQUEST['product-title']);
    $id=trim($_REQUEST['product-id']);

    $con=getConnection();
    $sql = "update customer_cart set status='completed' where  producttitle='{$title}' and suppliermail='{$suppliermail}' and customermail='{$customermail}' and id='{$id}' ";
   
    if (mysqli_query($con, $sql)) {
        $_SESSION['sell-complete']="true";
        header('location: ../views/supplier/supplierSell.php');
    }

}
else if(isset($_REQUEST['returned'])){

    $suppliermail=trim($_REQUEST['supplier-mail']);
    $customermail=trim($_REQUEST['customer-mail']);
    $title=trim($_REQUEST['product-title']);
    $id=trim($_REQUEST['product-id']);

    $con=getConnection();
    $sql = "update customer_cart set status='returned' where  producttitle='{$title}' and suppliermail='{$suppliermail}' and customermail='{$customermail}' and id='{$id}' ";
   
    if (mysqli_query($con, $sql)) {
        $_SESSION['sell-complete']="true";
        header('location: ../views/supplier/supplierSell.php');
    }

}
else {

}


?>