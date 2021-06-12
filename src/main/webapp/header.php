<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <title></title>
  <link rel="stylesheet" href="assets/css/vendor.bundle.css">
  <link rel="stylesheet" href="assets/css/app.bundle.css">
  <link rel="stylesheet" href="assets/css/theme-a.css">
  <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
  <script src="assets/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.min.js"></script>
      <script language="Javascript" type="text/javascript">

        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }

    </script>
</head>
<?php 

function get_username($id){
  include 'db.php';
   $sql = "SELECT * FROM users WHERE  user_id='".$id."' " ;
  $res = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($res);
  return $row['fname'];
}

?>