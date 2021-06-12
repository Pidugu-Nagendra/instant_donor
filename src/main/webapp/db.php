<?php 

$conn = mysqli_connect("localhost","root","","blood_donation");

if(! $conn)
{
	echo "<script>alert('Connection Error') </script>";
}

 ?>