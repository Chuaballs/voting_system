<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrar Portal</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

</head>
<body>

              <div class="form-group row">
               <label for="text" class="col-md-4 col-form-label text-md-right">username</label>
                <div class="col-md-7">
                  <input id="username" type="text" class="form-control " name="username" required autocomplete="username">
                </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right"> Password</label>
                  <div class="col-md-7">
                    <input id="password-confirm" type="password" class="form-control" name="password" required autocomplete="new-password">
                  </div>
                </div>
                <button type="submit" name="change"class="btn btn-primary">
                Change
                </button>
</body>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/bootstrap-select.min.js"></script>
</body>
</html>
