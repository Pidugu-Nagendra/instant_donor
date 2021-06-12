<?php 
ob_start();
session_start();
include('db.php');

        
        date_default_timezone_set('Asia/Kolkata');
        $timestamp = date("d/m/Y H:i:s", time());
        // echo $timestamp; 
        // print_r($_POST); die;
        $qualif = $_POST['qualif'];  
        
       
        
         
              $sql1 = "INSERT INTO qualification (`qualif`) VALUES('$qualif')";
              // echo $sql; die();
              $res1 = mysqli_query($conn,$sql1);
              
              if($res1){ ?>

                  <script>
                      var ss=window.location.href = "add_qualification.php";
                      //alert("Loan Added successfully");
                  </script>
                     
           <?php
              }else{ ?>
                  <script>
                      var ss=window.location.href = "add_qualification.php";
                      //alert("Please Try Again");
                  </script>

          <?php   }

        
       
?>