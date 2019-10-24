<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/checkaccount.php';
$checkaccount = new checkaccount();
$checkaccount ->  checkuser();
if (isset($_POST['change'])) {
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/changepass.php';
$changepassword = new changepass($_POST['confirmpass'],$_POST['newpass']);
$changepassword ->changepassword();
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
  <form method="POST">
        	

            <div class="form-group row">
             <label for="password" class="col-md-4 col-form-label text-md-right">Old Password</label>
              <div class="col-md-7">
                <input id="password" type="password" class="form-control " name="confirmpass" required autocomplete="new-password">
              </div>
            </div>

            <div class="form-group row">
              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">New Password</label>
                <div class="col-md-7">
                  <input id="password-confirm" type="password" class="form-control" name="newpass" required autocomplete="new-password">
                </div>
              </div>

            <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-5">
                <a href="index.php">
                  <button type="submit" name="change"class="btn btn-primary">
                  Change
                  </button>
                  <a href="user_homepage.php">
                  Back
                </a>
                </a>
              </div>
           </div>

        </form>
</body>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/bootstrap-select.min.js"></script>
</body>
</html>
