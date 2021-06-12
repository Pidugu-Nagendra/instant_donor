<?php 
ob_start();
session_start();
include 'db.php';
   /* date_default_timezone_set('Asia/Kolkata');
	$timestamp = date("Y-m-d H:i:s"); 
	$ip_server = $_SERVER['SERVER_ADDR']; 
        $sql ="UPDATE  user_logs SET `logout_time`='$timestamp' where id='".$_SESSION['logid']."' ";
        $res =mysqli_query($conn,$sql);*/
session_destroy();   
session_unset($_SESSION['id']); 
   
header('Location:index.html');

 ?>