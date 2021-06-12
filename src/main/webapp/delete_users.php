<?php 
ob_start();
session_start();
include('db.php');

        
        date_default_timezone_set('Asia/Kolkata');
        $timestamp = date("d/m/Y H:i:s", time());
       
        
        
       
              $sql1 = "DELETE FROM users WHERE id = '".$_GET['id']."'";
              $res1 = mysqli_query($conn,$sql1);
              
              if($res1){ ?>

                  <script>
                      var ss=window.location.href = "view_users.php";
                      //alert("Loan Added successfully");
                  </script>
                     
           <?php
              }else{ ?>
                  <script>
                      var ss=window.location.href = "view_users.php";
                      //alert("Please Try Again");
                  </script>

          <?php   }

        
       
?>