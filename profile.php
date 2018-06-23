

<?php
include 'header1.php';

if(isset($_SESSION['user_name'])){
   
     echo "
    <div id=usr_data>
    <div id=users>
    <br><div id=usr-data>"."<img class='img-thumbnail' src='assets/images/".$_SESSION['u_image']."' width=256 height=256 ><br>" .ucwords($_SESSION['user_name'])."<br>". $_SESSION['u_email']."<br>". $_SESSION['u_num']."<br>". $_SESSION['u_desc']."<br></div></div>

    <div class='edit'>
<div class='form-group'>
    <center><h3>Update Your Profile</h3></center>
    <hr>
  <form action='includes/edit-profile.php' method='post'>
  <input type='text' class='form-control' name='name' id='name'  placeholder='Your name'><br>
  <input type='number' class='form-control' name='num' id='num'  placeholder='Your Number'><br>
  <textarea name='desc' cols='30' rows='10' id='desc' placeholder='Write down about Yourself!!!'></textarea><br>
  <input type='submit' id='submit' class='btn btn-primary' value='Update' name='submit'>
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







