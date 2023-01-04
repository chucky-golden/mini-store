<?php
  session_start();
  $total = $_SESSION['total'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Summer - payment</title>
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
        </ul>
        

        <div class="open_nav view">
          <button  onclick="openNav()"> <span class="fa fa-bars"></span> </button>
        </div>

        <div id="myNav" class="overlay view">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="color: #bfbfbf;">×</a>
          <div class="overlay-content">
            <div class="list">
              <li><a href="index.php" class="active"> HOME </a></li>
              <li><a href="shop.php"> SHOP</a></li>
              <li><a href="contact.php"> CONTACT </a></li>
            </div>
          </div>
        </div>

        
      </div>
    </nav>

 
 <div class="container confirm">
 	<h3>Confirm order and pay</h3>
 	<p>Please make payment and the items purchased will be shipped to the address provided below</p>
 	<form action="includes/save.php" method="POST">
  <div class="form-group">
      <?php
      if (isset($_GET['error'])) {?>
        <div class="alert alert-danger"><?=urldecode($_GET['error'])?></div>
      <?php }elseif(isset($_GET['success'])){?>
        <div class="alert alert-success"><?=urldecode($_GET['success'])?></div>
       <?php } ?>
    </div>
 		<div class="bill">
 			<h4>PAYMENT DETAILS</h4>
 			<input type="text" name="name" placeholder="Name on card" required="required">
 			<input type="text" id="card" name="cardnum" placeholder="Card number" required="required" required="required">
 			<input type="text" name="exp" placeholder="Expiry" required="required">
 			<input type="text" name="cvv" placeholder="CVV" required="required"> <br> <br>
      <input type="hidden" name="amount" value="<?php echo number_format($total)?>">
 			<h4>BILLING ADDRESS</h4>
 			<input type="text" name="sa" placeholder="Street address" required="required">
 			<input type="text" name="ct" placeholder="City" required="required">
 			<input type="text" name="st" placeholder="State" required="required">
 			<input type="text" name="zp" placeholder="Zip code" required="required">
 		</div>

 		<div class="fl"> <b>$ <?php echo number_format($total)?></b> <button type="submit" name="submit">Pay Now</button> </div><br><br>
    <p>click <a href="index.php">Here</a> to go back home</p>

 	</form>
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
<script type="text/javascript" src="js/card.js"></script>

</body>
</html>