<?php
if(isset($_POST['submit'])){
    session_start();

    include_once 'db.php';
    $msg = $_POST['text'];
    $name = $_SESSION['user_name'];

    $sql = "insert into posts(pname,pmsg) values('$name','$msg')";
  mysqli_query($conn,$sql);

    header("Location:../chat.php");
}else{
    
    header("Location:../chat.php");
    exit();
}
