<?php
	require_once('connection.php');
	session_start();
	if(isset($_SESSION['id'])){
		$id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $res = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($res);
    $email = $row['email'];
    $fullname = $row['fullname'];
    $address = $row['address'];
    $state = $row['state'];
    $phone = $row['phone'];
	}
  $server = $_SERVER['PHP_SELF'];
  $newserver = explode('/', $server);
  $nextserver = end($newserver);
  
  $pagetitle = "";
  switch($nextserver){
    case 'index.php':
      $pagetitle = 'Home';
      break;
    case 'contact.php':
      $pagetitle = 'Contact';
      break;
    case 'shop.php':
      $pagetitle = 'Shop';
      break;
  }
  echo $pagetitle;
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo $pagetitle; ?></title>
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
          <li><a href="index.php" class=" 
          <?php
            if ($pagetitle == 'Home') {
              echo 'active';
            }
          ?>"
          > HOME </a></li>
          <li><a href="shop.php" class=" 
          <?php
            if ($pagetitle == 'Shop') {
              echo 'active';
            }
          ?>"

          > SHOP</a></li>
          <li><a href="contact.php"  class=" 
          <?php
            if ($pagetitle == 'Contact') {
              echo 'active';
            }
          ?>"

          > CONTACT </a></li>
          <?php
            if(isset($_SESSION['id'])){ ?>
          <li><a href="includes/logout.php"> LOGOUT </a></li>          
          <?php }else { ?>
          <li><a href="login.php"> LOGIN </a></li>
          <?php } ?>
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
              <?php
                if(isset($_SESSION['id'])){ ?>
              <li><a href="includes/logout.php"> LOGOUT </a></li>         
              <?php } else { ?>
              <li><a href="login.php"> LOGIN </a></li>
              <?php } ?>
            </div>
          </div>
        </div>

        
      </div>
    </nav>