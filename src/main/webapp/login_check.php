<?php 
session_start();
include('db.php'); 

 $email = $_POST['email'];
  $pswd = $_POST['password'];

   $sql = "SELECT * FROM users WHERE email='".$email."' AND password = '".$pswd."'";
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($res);

  if(!empty($row)) { 
      
      if($row['role_id'] == '1'){

        $_SESSION['id'] = $row['role_id'];
        $_SESSION['s_id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
       header('Location:add_hospital.php');

      }else if($row['role_id'] == '2'){ 
       
       header("Location:profile.php");
        $_SESSION['s_id'] = $row['id'];
        $_SESSION['id'] = $row['role_id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['blood_group'] = $row['blood_group'];
     
       

  }
}else { ?>
     <script type="text/javascript">
         window.location.href = "login.php";
         alert("Please Provide Valid Details");
     </script>

<?php   }
  

?>