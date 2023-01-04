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
	<nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"> <img src="img/logo.png" class="img-responsive"> </a>
        </div>
        <ul class="navbar-nav menu set">
          <li><a href="index.php"> HOME </a></li>
          <li><a href="shop.php"> SHOP</a></li>
          <li><a href="contact.php"> CONTACT </a></li>
          <li><a href="login.php" class="active"> LOGIN </a></li>
        </ul>
        

        <div class="open_nav view">
          <button  onclick="openNav()"> <span class="fa fa-bars"></span> </button>
        </div>

        <div id="myNav" class="overlay view">php
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color: #bfbfbf;">×</a>
          <div class="overlay-content">
            <div class="list">
              <li><a href="index.php" class="active"> HOME </a></li>
              <li><a href="shop.php"> SHOP</a></li>
              <li><a href="contact.php"> CONTACT </a></li>
              <li><a href="login.php"> LOGIN </a></li>
            </div>
          </div>
        </div>

        
      </div>
    </nav>

    <div class="container" style="margin-top: 10%;">
    <div class="col-md-6 col-md-push-3">
      <h3>User Registration</h3>
      <form action="includes/registersub.php" method="POST">
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
          <label>Fullname</label>
          <input type="text" name="fullname" class="form-control">
        </div>
        <div class="form-group">
          <label>State</label>
          <input type="text" name="state" class="form-control">
        </div>
        <div class="form-group">
          <label>Contact Address</label>
          <input type="text" name="address" class="form-control">
        </div>
        <div class="form-group">
          <label>Phone No.</label>
          <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control">
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
      <p>already a member, click <a href="login.php">Here</a> to Login</p>
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