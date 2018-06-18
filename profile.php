<?php
include 'header1.php';

if(isset($_SESSION['user_id'])){
   
     echo "
    <div id=usr_data>
    <div id=users>
    <img src='assets/images/user.png' alt='user'> <br>". ucwords($_SESSION['user_name'])."<br>". $_SESSION['u_email'].
    "<br></div>

    <div class='edit'>
<div class='form-group'>
    <center><h3>Update Your Profile</h3></center>
    <hr>
  <form action='includes/edit-profile.php' method='post'>
  <input type='text' class='form-control' name='name'  placeholder='Your name'><br>
  <input type='number' class='form-control' name='num'  placeholder='Your Number'><br>
  <textarea name='desc' cols='30' rows='10' placeholder='Write down about Yourself!!!'></textarea><br>
  <input type='submit' class='btn btn-primary' value='Update' name='submit'>
  </form>
</div>
    </div>
    
    </div>";
    ?>
    <?php
}
elseif(session_destroy() == true){
    
    echo "Log In again";
}


?>







