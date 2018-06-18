<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
      <title>Chitty Chatty - log in or sign up</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="shorcut icon" href="http://www.mericar.com/chat_logo.png">
    
    </head>
<style>
.msgarea{
  background:#dfcffc;
  box-shadow:0 0 12px 0 #333;
  width:100%;
  height:250px;
  overflow:scroll;
  padding:1em;
}textarea{
      resize: none;
      margin-bottom:10px;
  }
  #usr_data{
    display:grid;
    grid-template-columns:1fr 1fr;
  }
  #users{
    padding:1em;
      margin:1em;
  }
  .edit{
   margin:1em;
  }
</style>
    <body>
  
    <!--Navbar-->
  <nav class="navbar navbar-light bg-dark sticky-top" id="nava">
      <a class="navbar-brand" href="#"><h2>Chitty Chatty</h2></a> 
    
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0" style="display:flex; flex-direction:row;">
            <li class="nav-item mx-2">
            
            <form class="form-inline" action="profile.php" method="POST">
              <button class="btn btn-alert" name="submit" type="submit"><i class="fa fa-home"></i></button>
          </form></li>
            <li class="nav-item mx-2">
            <form class="form-group" action="users.php" method="POST">
              <button class="btn btn-alert" name="submit" type="submit">Users</button>
          </form> 
            </li>
            <li class="nav-item mx-2">
            <form class="form-group" action="chat.php" method="POST">
              <button class="btn btn-alert" name="submit" type="submit">Chat</button>
          </form> 
            </li>
          <li class="nav-item mx-2">
          <form class="form-inline " action="includes/logout.php" method="POST">
              <button class="btn btn-alert" name="submit" type="submit">Log Out</button>
          </form> 
          </li>
        </ul>
     
         
  </nav>

