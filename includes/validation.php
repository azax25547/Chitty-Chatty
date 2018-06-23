<?php 

session_start();

if(isset($_POST['submit'])){
    include 'db.php';

    $u_id = mysqli_real_escape_string($conn,$_POST['name']);
    $u_pass = mysqli_real_escape_string($conn,$_POST['pass']);

    if(empty($u_id) || empty($u_pass)){
        header("Location: ../index.php?LogIn=emptyValues");
        exit();
    }else{
        $sql = "select * from registration where puser = '$u_id' or pemail = '$u_id'";
        $result = mysqli_query($conn,$sql);
        $resCheck = mysqli_num_rows($result);
        if($resCheck < 1){
            header("Location: ../index.php?LogIn=NotRegistered");
            exit();
        }else{
            if($row = mysqli_fetch_assoc($result)){
                //matching the password
                $dehash = password_verify($u_pass,$row['pwd']);
                if($dehash == false){
                    header("Location: ../index.php?LogIn=error");
                    exit();
                }elseif($dehash == true){
                    //log In user 
                    $_SESSION['user_id'] = $row['puser'];
                    $_SESSION['user_name'] = $row['pname'];
                    $name = trim($_SESSION['user_id']);
                    $name = str_replace("%27","",$name);
                    $_SESSION['u_email'] = $row['pemail'];
                    $_SESSION['u_desc'] = $row['pdesc'];
                    $_SESSION['u_num'] = $row['pnum'];
                    $_SESSION['u_image'] = $row['image'];
                     header("Location:../profile.php?uid='$name'");
                }
            }
        }
    }
}else{
    header("Location: ../index.php?LogIn=error");
    exit();
}

?>