<?php
session_start();
include_once('../db/db.php');
$loginMail=$_SESSION['login-email'];
if(isset($_REQUEST['cancel'])){
    $prodtitle=trim($_REQUEST['product-title']);
    $prodsize=trim($_REQUEST['product-size']);
}
$conn = getConnection();
$sql = "update customer_cart set rent_buy='',paid='',paidby='',receivingdate='' ,status='canceled' where  customermail='{$loginMail}' and producttitle='{$prodtitle}' and productsize='{$prodsize}'";
if (mysqli_query($conn, $sql)) {
    $_SESSION['cancel-order']="true";
    echo "  <script>
    location.href='../views/customer/customerCart.php';

</script>";
}
else {
    echo "  <script>
    location.href='$link';

alert('Not updated!');
</script>";
}



?>