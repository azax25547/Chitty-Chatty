<?php include_once 'header1.php'; ?>
<div class="container"  style="margin-top:20px;">
    <div class="form-group">
      <form name="frm" >
      
      <textarea type="text" class="form-control" name="cmt" id="cmt" cols="30" rows="3" placeholder='Why So Empty!! Please Post Something'></textarea><br>
      <input class="btn btn-primary" type="button"  onclick="get();" value="Post">
      
      </form>
    </div>

    <br>
    <br>
<!--Here the post data will be visible-->
    <div id="post-data">
    <?php
    include_once 'includes/db.php';
    $q = "SELECT * FROM post";
    
    $res = mysqli_query($conn,$q);
    $resCheck = mysqli_num_rows($res);
    if($resCheck > 0){
        while($row = mysqli_fetch_assoc($res)){
            echo $row['username']."<br>".$row['body']."<br><hr>";
        }
    }
    ?>
    </div>
</div>
   
<script>
  function get(){
      var input = $("#cmt");
      var inputVal = input.val();

      $.post('postPage.php',{postname:inputVal},function(data){
        $("#post-data").prepend("<?php echo $_SESSION['user_name'].'<br>'; ?>"+data+"<br><hr>");
      })
    
  }

  
      </script>
<?php 
include_once 'footer.php'; ?>
