<?php
include 'header1.php';

if(isset($_SESSION['user_id'])){
    // echo "welcome ". ucwords($_SESSION['user_name']);
    ?>
      
        <div class="msgbox w3-padding-32">
        <div class="name-center"></div>
        <div class="msgarea w3-margin-large">

            <?php
            include_once 'includes/db.php';
            $sql = "select * from posts";
            $res = mysqli_query($conn,$sql);
            $resCheck = mysqli_num_rows($res);

            if($resCheck > 0){ 
                while($row = mysqli_fetch_assoc($res)){
                    echo "". $row['pname']." :: ". $row['pmsg']." -- ".$row['date']. "<br>";
                    echo "<br>";
                }
            }else{
                //echo
            }
            ?>

        </div>
        <div class="w3-padding-large">    
            <form class="form-group" action="includes/sendMsg.php" method="POST">
              <textarea class="form-control" name="text" cols="30" rows="2"></textarea>
              <input type="submit" name="submit" class="w3-button w3-teal w3-padding-16" value="Send">
            </form>
            <button class="w3-button w3-red" onclick="document.querySelector('.msgarea').innerHTML = ''">Clear Chat</button>
        </div>
        </div>



    <?php
}
elseif(session_destroy() == true){
    
    echo "Log In again";
}

?>







