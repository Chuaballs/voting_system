<?php
session_start();
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/votestatus.php';
  $votestatus = new votestatus();
  $votestatus ->  checkstat();
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/checkaccount.php';
  $checkaccount = new checkaccount();
  $checkaccount ->  checkuser();
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/view.php';
  $view = new view;
  if (isset($_POST['submit'])) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/vote.php';
    $vote = new vote($_POST['president'],$_POST['vicepresident'],$_POST['secretary'],$_POST['treasurer'],$_POST['auditor']);
    $vote->checkpres();
    $vote->checkvice();
    $vote->checksec();
    $vote->checktre();
    $vote->checkaud();
    $vote->votedone();
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
    <form class="" action="" method="post">
      <div class="pres">
           <div class='container-fluid pt-4'>
           <div class='row justify-content-center'>
              <div class='col-md-6'>
               <div class='card zoom' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
              -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
              -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
               <div class='card-header text-white bg-white'><h2 style='color:#d75093'>President</h2></div>
               <div class='card-body'>
                 <div class='col-md-12'>
     </div>
     </div>
        <?php   $view -> viewp(); ?>
         </div>
       </div>
       </div>
       </div>
       </div>
      </div>
      <div class="vpres">
         <div class='container-fluid pt-4'>
 <div class='row justify-content-center'>
  <div class='col-md-6'>
 <div class='card zoom' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
 <div class='card-header text-white bg-white'><h2 style='color:#d75093'>Vice-President</h2></div>
 <div class='card-body'>
 <div class='col-md-12'>

     </div>
     </div>
<?php     $view -> viewvp(); ?>
 </div>
 </div>
 </div>
 </div>
 </div>
      </div>
      <div class="sec">
         <div class='container-fluid pt-4'>
 <div class='row justify-content-center'>
  <div class='col-md-6'>
 <div class='card zoom' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
 <div class='card-header text-white bg-white'><h2 style='color:#d75093'>Secretary</h2></div>
 <div class='card-body'>
 <div class='col-md-12'>

     </div>
     </div>
<?php    $view -> views(); ?>
 </div>
 </div>
 </div>
 </div>
 </div>
      </div>
      <div class="tre">
         <div class='container-fluid pt-4'>
 <div class='row justify-content-center'>
  <div class='col-md-6'>
 <div class='card zoom' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
 <div class='card-header text-white bg-white'><h2 style='color:#d75093'>Treasurer</h2></div>
 <div class='card-body'>
 <div class='col-md-12'>

     </div>
     </div>
<?php   $view -> viewt();?>
 </div>
 </div>
 </div>
 </div>
 </div>
      </div>
      <div class="aud">
         <div class='container-fluid pt-4'>
 <div class='row justify-content-center'>
  <div class='col-md-6'>
 <div class='card zoom' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
 <div class='card-header text-white bg-white'><h2 style='color:#d75093'>Auditor</h2></div>
 <div class='card-body'>
 <div class='col-md-12'>

     </div>
     </div>
<?php  $view -> viewa(); ?>
 </div>
 </div>
 </div>
 </div>
 </div>
      </div>
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/bootstrap-select.min.js"></script>
</body>
</html>
