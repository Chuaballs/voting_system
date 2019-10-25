<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/checkaccount.php';
$checkaccount = new checkaccount();
$checkaccount ->  checkadmin();
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
<div class="jumbotron mb-0"style="background-image: url('resource\img\logo.jpg'); background-size: 100%;">


      <div class="body">
      <div class="container mt-5 puff-in-center">
          <div class="card-body" style="max-width: 100rem;height:31.4rem;">
            <div class="card text-white bg-secondary  mb-5" style=" margin-left: 10rem;max-width: 50rem;height:60vh;">

              <div class="card-body">
                <h5 class="card-title my-5">Admin Fucntions</h5></br>
                  <button type="submit" onclick="window.location.href = 'admin_view_score.php'" name="" class="btn btn-primary btn-lg btn-block">View Scores</button>
                  <button type="submit" onclick="window.location.href = 'admin_register_voter.php'" name="" class="btn btn-primary btn-lg btn-block">Add Voters</button>
                  <button type="submit" onclick="window.location.href = 'admin_register_candidate.php'" name="" class="btn btn-primary btn-lg btn-block">Add Candidates</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <footer id="sticky-footer" class="py-1 mt--2 bg-dark text-white-50  slide-in-right">
        <div class="container text-center">
          <div class="row">
            <div class="col col-sm-5 text-left">
              <small>Made by Ludwig Cartel, Duane Corea, Robin Santos, Ralph Ramirez</small>
            </div>

          </div>
        </div>
      </footer>
</div>

    </body>

    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/bootstrap-select.min.js"></script>
</body>
</html>