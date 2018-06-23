<?php 
  session_start();
  $username = $_SESSION['user_name'];
include_once 'includes/db.php';
$cmt = $_POST['postname'];
$query = "INSERT INTO post (id,username,body) VALUES ('','$username','$cmt')";
mysqli_query($conn,$query);
echo $cmt;
?>