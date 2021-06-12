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
       

        
          
              
              $sql = "INSERT INTO users (role_id,name,email,password,phone,blood_group,address,dat) VALUES ('2','".$name."','".$email."','".$password."','".$phone."','".$blood_group."','".$address."','".$timestamp."')";
              
              $res = mysqli_query($conn,$sql);
              if($res){ ?>

                  <script>
                      var ss=window.location.href = "login.php";
                      alert("Your Registered successfully . Now You can Login");
                  </script>
                     
           <?php
              }else{ ?>
                  <script>
                      var ss=window.location.href = "register.php";
                      alert("Your Not Registered");
                  </script>


          <?php   } 
        

       
?>