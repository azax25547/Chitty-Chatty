<?php
 include_once 'db.php';

  if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['pass1']);
    $cnfPw = mysqli_real_escape_string($conn,$_POST['pass2']);


    $sql = "select * from registration where pemail = '$email'";
    $res = mysqli_query($conn,$sql);
    $resCheck = mysqli_num_rows($res);
    if(($resCheck !== 1)){
        header("Location:../forgot.php?EmailNotRegisterd");
        exit();
    }else {
        if($password !== $cnfPw){
            header("Location:../forgot.php?PasswordMismatch");
            exit();
           }else{
             $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
             $sql = "update registration set pwd = '$hashedPwd' where pemail = '$email'";
             mysqli_query($conn,$sql);
             header("Location:../forgot.php?PasswordChangedSuccessfully");
             exit();
           }
    }
  }else{
    header("Location:../forgot.php?error");
    exit();
   }

?>