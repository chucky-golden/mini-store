<!DOCTYPE html>
<html>
<head>
	<title>Summer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="bg-style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
</head>

<body>


    <div class="container" style="margin-top: 10%;">
    <div class="col-md-6 col-md-push-3">
      <h3>Password Reset</h3>
      <form action="includes/passwordreset.php" method="POST">
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control">
          <input type="hidden" value="<?php echo $_GET['email'] ?>" name="email" style="display: none;">
        </div>
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" name="con_password" class="form-control">
        </div>
        <div class="form-group">
          <button name="submit">Submit</button>
        </div>
        <div class="form-group">
          <?php if(isset($_GET['error'])) {?>
          <div class="alert alert-danger">
            <?=urldecode($_GET['error'])?>
          </div>
          <?php } elseif(isset($_GET['success'])) { ?>
          <div class="alert alert-success">
            <?=urldecode($_GET['success'])?>
          </div>
          <?php } ?>
        </div>
      </form>
      <p>click <a href="register.php">Here</a> to go back Home</p>
    </div>
  </div>










<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>