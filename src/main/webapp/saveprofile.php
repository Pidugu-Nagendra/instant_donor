<?php 
ob_start();
session_start();




include('db.php');
    
     

        // print_r($_POST);
        date_default_timezone_set('Asia/Kolkata');
        $timestamp = date("d/m/Y H:i:s", time());
        // echo $timestamp; 
        // print_r($_POST); die;
        $name = $_POST['name'];  
        $email = $_POST['email'];  
        $phone = $_POST['phone'];  
        $address = $_POST['address'];  
        $blood_group = $_POST['blood_group'];  
        $password = $_POST['password'];  
        $act = $_POST['act'];  
       
               $sql = "UPDATE  users SET  name = '".$name."',email ='".$email."',password ='".$password."' ,phone ='".$phone."' ,blood_group = '".$blood_group."',address = '".$address."' ,dat = '".$timestamp."' , active = '".$act."' WHERE id = '".$_SESSION['s_id']."'";
              
              $res = mysqli_query($conn,$sql);
              if($res){ 

                 
                      header("Location:profile.php");
       
        $_SESSION['name'] = $name;
        $_SESSION['blood_group'] = $blood_group; ?>                  
                     
           <?php
              }else{ ?>
                  <script>
                      var ss=window.location.href = "profile.php";
                      //alert("Your Not Registered");
                  </script>


          <?php   } 
        

       
?>