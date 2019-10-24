<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/login.php';
session_start();
if (isset($_POST['login'])) {
$login = new login($_POST['username'],$_POST['password']);
$login -> login();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voting System</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

</head>
<body>
  <form  action="" method="post">
    <input type="text" name="username" placeholder="username" value="">
      <input type="password" name="password" placeholder="password" value="">
        <input type="submit" name="login"  value="Login">
  </form>
</body>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/bootstrap-select.min.js"></script>
</body>
</html>
