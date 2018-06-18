<?php
include_once 'header_all.php';

?>


<style>

    .forgot{
        padding:1em;
        margin: 0 20%;
    }
</style>
    <center>
        <h3>Forgot Password</h3>
        <h5>Don't Panic. Its Easy... Just few steps</h5>
    </center>

<div class="forgot">
    <form action="includes/pwChange.php" method="post">
    <div class="form-group">
      <label for=""></label>
      <input type="text"
        class="form-control" name="email" placeholder="Email Address">
      
    </div>
    <div class='form-group'>
      <label for=''></label>
      <input type='password'
        class='form-control' name='pass1'  placeholder='New Password'>
      
    </div>
    <div class='form-group'>
      <label for=''></label>
      <input type='password'
        class='form-control' name='pass2'  placeholder='Confirm Password'>
      
    </div>
    <center><input type='submit' class='btn btn-default' value='Submit' name='submit'></center>
</form>
    
    
</div>

<?php
include_once 'footer.php';
?>
