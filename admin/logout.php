<?php 


include "include/start.php";
include "config.php";

$users=loaddata('users');
$users[$_SESSION['UserData']['Id']]['last_login']=date('H:i d-m-y');
savedata($users,'users');

session_destroy(); /* Destroy started session */
header("location:login.php");
exit;
?>
