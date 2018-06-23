<?php 

    include_once 'header1.php';

    include_once 'includes/db.php';
      if($_SERVER['REQUEST_METHOD'] == 'POST' ){
          $sql = "select * from registration";
          $res = mysqli_query($conn,$sql);
          $resCheck = mysqli_num_rows($res);

          if($resCheck > 0){
              while($row = mysqli_fetch_assoc($res)){
                  echo "<div id=users>";
                  echo "<img src='assets/images/".$row['image']."' width=128 height=128 alt='img not uploaded'><br>"."<b>".$row['pname']."</b>";
                  echo "<br>";
                  echo "</div>";
              }
          }
      }
    ?>