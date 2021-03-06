<?php  

if(isset($_POST['submit'])){
    
    include_once 'db.php';

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $user = mysqli_real_escape_string($conn,$_POST['user']);
    $num = mysqli_real_escape_string($conn,$_POST['num']);
    $pass = mysqli_real_escape_string($conn,$_POST['pass']);
   
    $desc = "";
    

//Validation and Sanitization goes here
    if(empty($name) || empty($email) || empty($user) || empty($pass) ){
        header("Location: ../index.php?SignUp=blankValues");
        exit();
    }else{
        if(!(preg_match("/^[a-zA-Z ]*$/",$name))){
            header("Location: ../index.php?SignUp=nameOnlyContainWords&Space");
            exit();
        }else{
            if(!(filter_var($email,FILTER_VALIDATE_EMAIL))){
                header("Location: ../index.php?SignUp=invalidEmailEntry");
            exit();
            }else{
                $sql = "select * from registration where puser = '$user'";
                $result = mysqli_query($conn,$sql);
                $resCheck = mysqli_num_rows($result);
                if($resCheck > 0){
                    header("Location: ../index.php?SignUp=USERTAKEN");
            exit(); 
                }else{
                    $hashed = password_hash($pass,PASSWORD_DEFAULT);
                
                    //insert database here
                    $image = $_FILES['file']['name'];
                    $imageSize = $_FILES['file']['size'];
                    $imageErr = $_FILES['file']['error'];
                    $imageType = $_FILES['file']['type'];

                    $imageExt = explode(".",$image);
                    $imageActExt = strtolower(end($imageExt));


                    $allowedFiles = array("jpeg","jpg","png");

                    if(in_array($imageActExt,$allowedFiles)){
                        if($imageErr === 0){
                            if($imageSize < 500000000){
                                $newImageName = uniqid("",true).".".$imageActExt;
                                $target = "../assets/images/".$newImageName;
                                move_uploaded_file($_FILES['file']['tmp_name'],$target);
                                $q = "insert into registration(pname,pemail,puser,pwd,pdesc,pnum,image)  values('$name','$email','$user','$hashed','$desc','$num','$newImageName');";
                                mysqli_query($conn,$q);
                                header("Location: ../index.php?SignUp=SUCCESS");
                                exit();
                            }else{
                                header("Location: ../index.php?SignUp=FileSizeBig");
                                exit();
                            }
                        }else{
                            header("Location: ../index.php?SignUp=ThereIsErrorInUpload");
                            exit();
                        }
                    }else{
                        header("Location: ../index.php?SignUp=YouAreUploadingWrongFile");
                        exit();
                    }
                    

                }
            }
        }
    }
}else{
    header("Location: ../index.php?SignUp=invalidEntry");
    exit();
}
?>
