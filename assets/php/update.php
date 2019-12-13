<?php
include_once ('../db/db.php');
if (isset($_REQUEST['update'])) {

    $firstname = trim($_POST['first-name']);
    $lastname = trim($_POST['last-name']);
    $email = trim($_POST['email']);
    $address = trim($_POST['address']);
    $phoneno = trim($_POST['phoneno']);
    $pass = trim($_POST['password']);
    $confirmPass = trim($_POST['confirm-password']);

    $link="0";

    $con = getConnection();
    $sql = "select * from user_table where email='$email'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        $userinfo = mysqli_fetch_array($result);
    }

    if($userinfo['usertype']=="Advertiser"){
        $link="../views/advertiser/advertiseProfile.php";
    }
    else if($userinfo['usertype']=="Supplier"){
        $link="../views/supplier/supplierProfile.php";
    }
    else if($userinfo['usertype']=="Customer"){
        $link="../views/customer/customerProfile.php";
    }
    else{
        $link="../views/admin/adminProfile.php";
    }


    if ($pass != "") {
        if (strlen($pass) < 7) {
            echo "  <script>
            location.href='$link';
            alert('Use at least six characters and one number!');

            </script>";
        }
        else if (!preg_match('#[0-9]#', $pass)) {

            echo "  <script>
            location.href='$link';
            alert('Use at least six characters and one number!');
            </script>";

        }
        else if ($pass != $confirmPass) {

            echo "  <script>
            location.href='$link';
            alert('Re-type password');
            </script>";

        }
        else {
            $conn = getConnection();
            $sql = "update user_table set firstname='{$firstname}',lastname='{$lastname}',address='{$address}',phoneno='{$phoneno}',password='{$pass}' where email='{$email}'  ";
            if (mysqli_query($conn, $sql)) {
                echo "  <script>
                location.href='$link';

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
    }
    else {

        $conn = getConnection();
        $sql = "update user_table set firstname='{$firstname}',lastname='{$lastname}',address='{$address}',phoneno='{$phoneno}' where email='{$email}'  ";
        if (mysqli_query($conn, $sql)) {
            echo "  <script>
            location.href='$link';

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

}

?>
