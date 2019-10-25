<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/checkaccount.php';
$checkaccount = new checkaccount();
$checkaccount ->  checkuser();
if (isset($_POST['logout'])) {
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/logout.php';
$logout = new logout();
$logout -> logouts();
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
  <nav class="navbar navbar-dark bg-white shadow-sm slide-in-left">

      <img src="resource\img\logo.png" height="70" class="d-inline-block align-top"
        alt="mdb logo"><h3 class="ib">
    </a>
    <div class="d-flex align-items-end flex-column" >


      <form action="" method="post"class="d-flex align-items-end flex-column" >
        <button type="submit" name="logout" class="btn btn-secondary btn-lg btn-block">Logout</button>
      </form>

    </div>
  </nav>
  <a href="user_vote">Vote</a></br>
  <a href="user_changepass">Change Password</a></br>
  <form action="" method="post">
            <input type="submit" name="logout" value="logout">
  </form>
</body>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/bootstrap-select.min.js"></script>
</body>
</html>
