<?php
if(!isset($_SESSION)) { session_start(); }
include('config.php');  
include('function.php');


if(!isset( $_SESSION['admin_role']) ){

    if(isset($_POST['username']) && isset($_POST['password'])){
    $username=input_secure($_POST['username']);
$password=input_secure($_POST['password']);

$ency_password=sha1(md5($password));//عملية تشفير لكلمة السر


$slg_qury=mysqli_query($connection,"SELECT * from user where username= '".$username."' and password='".$ency_password."'and pvalid='1'  ");
$user_num=mysqli_num_rows($slg_qury);

if($user_num > 0){
    $_SESSION['admin_role']=1;
    ?>
           <script language="javascript">window.location.href="dashboard.php";</script>
  <?php
}
else{
    ?>
           <script language="javascript">window.location.href="index.php?error_msg=1";</script>
  <?php
}
    }else{
        ?>
           <script language="javascript">window.location.href="index.php";</script>
  <?php
    }


}else{
   


/*
$username=input_secure($_POST['username']);
$password=input_secure($_POST['password']);

$slg_qury=mysqli_query($connection,"SELECT * from user where username= '".$username."' and password='".$password."'and pvalid='1'  ");
$user_num=mysqli_num_rows($slg_qury);

if($user_num > 0){
    $_SESSION['admin_role']=1;
}
else{
    ?>
           <script language="javascript">window.location.href="index.php?error_msg=1";</script>
  <?php
}

die();
*/



/* $username=input_secure($_POST['username']);//هيك طريقتي وطريقة المهندس غلط
$password=input_secure($_POST['password']);

$ency_password=sha1(md5($password));


$slg_qury=mysqli_query($connection,"SELECT * from user where username= '".$username."' and password='".$ency_password."'and pvalid='1'  ");
$user_num=mysqli_num_rows($slg_qury);

if($user_num > 0){

*/
$breadcrumb_array = array(
    "لوحة التحكم");
 include('header.php'); 
?>
<!--begin::Dashboard-->
Welcome
<!--end::Dashboard-->
<?php 
$widget_page = true;
include('footer.php');

/*}else{
    ?>
    <script language="javascript">window.location.href="index.php?error_msg=1";</script>
<?php

}*/
}
?>