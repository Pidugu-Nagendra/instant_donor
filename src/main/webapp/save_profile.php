<?php 
ob_start();
session_start();
include('db.php');

        
        date_default_timezone_set('Asia/Kolkata');
        $timestamp = date("d/m/Y H:i:s", time());
       
        $name = $_POST['name'];  
        $email = $_POST['email'];  
        $password = $_POST['password'];  
        $phone = $_POST['phone'];  
        $qualif = $_POST['qualif'];  
       

        
          
              
                $sql = "UPDATE users  SET name = '".$name."' ,email = '".$email."' ,password = '".$password."',phone = '".$phone."' ,qualif = '".$qualif."' ,dat = '".$timestamp."' WHERE id = '".$_SESSION['s_id']."'";
              // echo $sql; die();
              $res = mysqli_query($conn,$sql);
        
              if($res){
                  $_SESSION['name'] = $name;
                   $_SESSION['qualif'] = $qualif;
                  header("Location:profile.php");
        
              }else{ 
                 header("Location:profile.php");
                }

        
       
?>