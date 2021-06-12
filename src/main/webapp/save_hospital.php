<?php 
ob_start();
session_start();
include('db.php');

        
        date_default_timezone_set('Asia/Kolkata');
        $timestamp = date("d/m/Y H:i:s", time());
        // echo $timestamp; 
        // print_r($_POST); die;
        $h_name = $_POST['h_name'];  
        $h_email = $_POST['h_email'];  
        $h_phone = $_POST['h_phone'];  
        $h_add = $_POST['h_add'];  
        $h_desc = $_POST['h_desc'];  
          
        
       
              $sql1 = "INSERT INTO hospitals (h_name,h_email,h_phone,h_add,h_desc,dat) VALUES ('".$h_name."','".$h_email."','".$h_phone."','".$h_add."','".$h_desc."','".$timestamp."')";
              $res1 = mysqli_query($conn,$sql1);
              
              if($res1){ ?>

                  <script>
                      var ss=window.location.href = "add_hospital.php";
                      //alert("Loan Added successfully");
                  </script>
                     
           <?php
              }else{ ?>
                  <script>
                      var ss=window.location.href = "add_hospital.php";
                      //alert("Please Try Again");
                  </script>

          <?php   }

        
       
?>