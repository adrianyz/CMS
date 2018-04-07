<?php
require_once('phpscripts/config.php');
  //confirm_logged_in();
require_once('phpscripts/connect.php');
if(isset($_SESSION['user_id'])){
$user_id = $_SESSION['user_id'];
$previousTime = "SELECT user_date FROM tbl_user WHERE user_id = '{$user_id}'";
$timeToPass = mysqli_query($link, $previousTime);
$theTime = "";
if(mysqli_num_rows($timeToPass)){
  $founduser = mysqli_fetch_array($timeToPass, MYSQLI_ASSOC);
  $theTime = $_SESSION['user_date'];}}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Merriweather:300,400,700" rel="stylesheet">
    <title>Admin Panel</title>
 </head>
 <body>
<div class="greeting">
  <?php
  // generate different greeting base on current time
  date_default_timezone_set('America/Toronto');

  $currentTime = date('H:i:s');
  $theUser = $_SESSION['user_name'];

  if ( $currentTime >= "04:00:00" && $currentTime <= "11:00:00" ) {
      echo "<p>Morning, {$theUser}! <br> Have you had your daily survival juice yet?</p>" ;
  } else if ( $currentTime >= "12:00:00" && $currentTime <= "18:00:00" ) {
      echo "<p>Hey, {$theUser}! <br> It's almost there, stay awake!</p>";
  } else if ( $currentTime >= "19:00:00" || $currentTime <= "03:00:00" ) {
      echo "<p>Good Evening, {$theUser}! <br> Go watch some Schitt's Creek!</p>";
  }
  ?>

  <div class="loginTime">
    <?php
    echo "<p>Last time you were here: <span style=\"color:orangered\">" . $theTime . "</span></p>";
    ?>
  </div>
  
    <h2><?php echo $_SESSION['user_name']; ?></h2>

  <div  class="someBtns">
    <ul>
      <li><a href="admin_createuser.php">Create User</a></li>
      <li><a href="admin_edituser.php">Edit User</a></li>
      <li><a href="admin_deleteuser.php">Delete User</a></li><br>
      <li><a href="admin_addmovie.php">Add Movie</a></li>
      <li><a href="admin_selectEdit.php">Edit Movie</a></li>
      <li><a href="admin_deleteMovie.php">Delete Movie</a></li><br>
      <li><a href="phpscripts/caller.php?caller_id=logout">Sign Out</a></li>
    </ul>
</div>

</div>
 </body>
 </html>
