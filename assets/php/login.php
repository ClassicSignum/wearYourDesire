<?php

session_start();
include_once('../db/db.php');

if(isset($_REQUEST['submit']))
	{
        $email=trim($_REQUEST['email']);
        $pass=trim($_REQUEST['password']);

       

        $con = getConnection();
        $sql = "select * from user_table where email='".$email."' and password='".$pass."' ";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        
        $count = mysqli_num_rows($result);
        // mysqli_close($con);

        if($count > 0 ){ // email and password correct

            //now check for restriction
            

            if($row['status']=='restricted'){  // restriction true
                $_SESSION['account-restricted']=true;
                $_SESSION['wrong-pass']=false;
                header('location: ../views/index.php');
            }

            else{

    
            $_SESSION['login-email']=$email;

            

            if(!empty($_POST['remember'])){
                setcookie("rememberemail",$email,time()+3600,'/');
                // print($_COOKIE['rememberemail']);
                setcookie("rememberpass",$pass,time()+3600,'/');

            }
            else{

                if(isset($_COOKIE['rememberemail'])){
                    setcookie("rememberemail","",time()-300,'/');
                    setcookie("rememberpass","",time()-300,'/');
                }

            }

            // $_SESSION['name'] = "abc";
            if($row['usertype']=='Customer'){
                $_SESSION['usertypes']=$row['usertype'];
                header('location: ../views/customer/customer.php');
            }
           else if($row['usertype']=='Supplier'){
            $_SESSION['usertypes']=$row['usertype'];
                header('location: ../views/supplier/supplier.php');
            }
           else if($row['usertype']=='Advertiser'){
            $_SESSION['usertypes']=$row['usertype'];
                header('location: ../views/advertiser/advertise.php');
            }
            else{
                $_SESSION['usertypes']=$row['usertype'];
                header('location: ../views/admin/admin.php');

            }

            
            $_SESSION['wrong-pass']=false;
            $_SESSION['account-restricted']=false;
        }
        }
        else{
            $_SESSION['account-restricted']=false;
            $_SESSION['wrong-pass']=true;
            header('location: ../views/index.php');
            
        }


    }
    else{
        header('location: ../views/index.php');
    }


?>