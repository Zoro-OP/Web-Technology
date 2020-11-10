<!DOCTYPE html>

<?php
 session_start();
 if (!isset($_SESSION["logged_in"] ))
 {

    header("Location: ../html_files/login.php");

 }
 if ($_SESSION["logged_in"]!=true && isset($_SESSION["logged_in"] ))
 {
   header("Location: ../html_files/login.php");
 }


?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Welcome  <?php echo $_SESSION["username"]; ?></h1>
  </body>
</html>