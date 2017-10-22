<?php 
$endTime = 60; //*60*1;// 1 ora ///     24*30; // 30 days
session_set_cookie_params($endTime);
session_start();
$sess_id = session_id(); 
header("Cache-control: private");
if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}

include ("functions/serialize.php");
?>
