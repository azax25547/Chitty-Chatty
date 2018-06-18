<?php  
session_start();

if(isset($_POST['submit'])){
    include_once 'db.php';
    
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $num = mysqli_real_escape_string($conn,$_POST['num']);
    $desc = mysqli_real_escape_string($conn,$_POST['desc']);
    $email = $_SESSION['u_email'];
    if(empty($name) || empty($num) || empty($desc)){
        header("Location: ../profile.php?LogIn=emptyValues");
        exit();
    }else{
        $q = "update registration set pname = '$name', pdesc = '$desc', pnum = '$num' where pemail = '$email'";
       $res= mysqli_query($conn,$q);   
       $row = mysqli_fetch_assoc($res);
       $_SESSION['pro_name'] = $row['pname'];
       $_SESSION['pro_num'] = $row['pnum'];
       $_SESSION['pro_desc'] = $row['pdesc'];
       header("Location:../profile.php?success");
        exit();
        }
    


}else{
    header("Location:../profile.php?error");
    exit();
}