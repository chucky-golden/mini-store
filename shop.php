<?php
 require_once('includes/connection.php');
 session_start()
?>
<!DOCTYPE html>
<html>
<head>
	<title>Summer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/shop.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
</head>shop

<body>
	<nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"> <img src="img/logo.png" class="img-responsive"> </a>
        </div>
        <ul class="navbar-nav menu set">
          <li><a href="index.php"> HOME </a></li>
          <li><a href="shop.php" class="active"> SHOP</a></li>
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


		<div class="left">
			<ul class="cat">
			  <h4>CATEGORIES</h4>
			  <li class="active"> <a data-toggle="pill" href="#home">Women</a> </li>
			  <li> <a data-toggle="pill" href="#men">Men</a> </li>
			  <li> <a data-toggle="pill" href="#kid">Kids</a> </li>
			  <li> <a data-toggle="pill" href="#cos">Cosmetics</a> </li>
			  <li> <a data-toggle="pill" href="#menu1"> <span class="fa fa-shopping-cart"></span> </a> </li>
		   	  <li> <a href="products.php">Update</a></li>
			</ul>
		</div>

		<div class="right">
			
			<div class="tab-content">
			  	<div id="home" class="tab-pane fade in active">
			    	<div class="container">
						<h2 class="text-center">Women Fashion</h2>
						<?php
							$query = "SELECT * FROM products WHERE category = 'women' ORDER BY id ASC";
							$result = mysqli_query($connect, $query);
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
									$itemid = $row["id"];
									$image = $row["image"];
									$name = $row["name"];
									$price = $row["price"];
									$quantity = $row["quantity"];
								?>
							<div class="col-sm-4 images">
								<form action="" id="form-upload-file">
									<div align="center">
										<img src="includes/image/<?php echo $image;?>" style="width: 100%; height: 200px;">
										<h4><?php echo $name;?></h4>		
										<?php
											if($quantity == 0){ ?>
											<h4 class="text-danger">$ <?php echo $price;?></h4>
											<button disabled="" style="color: white;" class="btn btn-success">Out Of Stock</button>
										<?php } else{ ?>				
										<h4 class="text-danger">$ <?php echo $price;?></h4>
										<input type="number" name="quantity" id="<?php echo $itemid; ?>quantity1" class="form-control" value="1">
										<input type="hidden" name="name" id="<?php echo $itemid; ?>name1" value="<?php echo $name;?>">		
										<input type="hidden" name="price" id="<?php echo $itemid; ?>price1" value="<?php echo $price;?>">
										<button style="color: white;" class="btn btn-success" id="action_button1" data-action="add" data-id="<?php echo $itemid; ?>">Add To Cart</button>
										<?php } ?>
									</div>
								</form>
							</div>
							<?php	
							   }
						    }

					    ?>
					</div>
				</div>



				<div id="men" class="tab-pane fade in">
			    	<div class="container">
						<h2 class="text-center">Men Fashion</h2>
						<?php
							$query = "SELECT * FROM products WHERE category = 'men' ORDER BY id ASC";
							$result = mysqli_query($connect, $query);
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
									$itemid = $row["id"];
									$image = $row["image"];
									$name = $row["name"];
									$price = $row["price"];
									$quantity = $row["quantity"];
								?>
							<div class="col-sm-4 images">
								<form action="" id="form-upload-file">
									<div align="center">
										<img src="includes/image/<?php echo $image;?>" style="width: 100%; height: 200px;">
										<h4><?php echo $name;?></h4>							
										<?php
											if($quantity == 0){ ?>
											<h4 class="text-danger">$ <?php echo $price;?></h4>
											<button disabled="" style="color: white;" class="btn btn-success">Out Of Stock</button>
										<?php } else{ ?>				
										<h4 class="text-danger">$ <?php echo $price;?></h4>
										<input type="number" name="quantity" id="<?php echo $itemid; ?>quantity2" class="form-control" value="1">
										<input type="hidden" name="name" id="<?php echo $itemid; ?>name2" value="<?php echo $name;?>">		
										<input type="hidden" name="price" id="<?php echo $itemid; ?>price2" value="<?php echo $price;?>">
										<button style="color: white;" class="btn btn-success" id="action_button2" data-action="add" data-id="<?php echo $itemid; ?>">Add To Cart</button>
										<?php } ?>
									</div>
								</form>
							</div>
							<?php	
							   }
						    }

					    ?>
					</div>
				</div>




				<div id="kid" class="tab-pane fade in">
			    	<div class="container">
						<h2 class="text-center">For Kids</h2>
						<?php
							$query = "SELECT * FROM products WHERE category = 'kids' ORDER BY id ASC";
							$result = mysqli_query($connect, $query);
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
									$itemid = $row["id"];
									$image = $row["image"];
									$name = $row["name"];
									$price = $row["price"];
									$quantity = $row["quantity"];
								?>
							<div class="col-sm-4 images">
								<form action="" id="form-upload-file">
									<div align="center">
										<img src="includes/image/<?php echo $image;?>" style="width: 100%; height: 200px;">
										<h4><?php echo $name;?></h4>							
										<?php
											if($quantity == 0){ ?>
											<h4 class="text-danger">$ <?php echo $price;?></h4>
											<button disabled="" style="color: white;" class="btn btn-success">Out Of Stock</button>
										<?php } else{ ?>				
										<h4 class="text-danger">$ <?php echo $price;?></h4>
										<input type="number" name="quantity" id="<?php echo $itemid; ?>quantity3" class="form-control" value="1">
										<input type="hidden" name="name" id="<?php echo $itemid; ?>name3" value="<?php echo $name;?>">		
										<input type="hidden" name="price" id="<?php echo $itemid; ?>price3" value="<?php echo $price;?>">
										<button style="color: white;" class="btn btn-success" id="action_button3" data-action="add" data-id="<?php echo $itemid; ?>">Add To Cart</button>
										<?php } ?>
									</div>
								</form>
							</div>
							<?php	
							   }
						    }

					    ?>
					</div>
				</div>


				<div id="cos" class="tab-pane fade in">
			    	<div class="container">
						<h2 class="text-center">Cosmetics</h2>
						<?php
							$query = "SELECT * FROM products WHERE category = 'cosmetics' ORDER BY id ASC";
							$result = mysqli_query($connect, $query);
							if (mysqli_num_rows($result) > 0) {
								while ($row = mysqli_fetch_assoc($result)) {
									$itemid = $row["id"];
									$image = $row["image"];
									$name = $row["name"];
									$price = $row["price"];
									$quantity = $row["quantity"];
								?>
							<div class="col-sm-4 images">
								<form action="" id="form-upload-file">
									<div align="center">
										<img src="includes/image/<?php echo $image;?>" style="width: 100%; height: 200px;">
										<h4><?php echo $name;?></h4>							
										<?php
											if($quantity == 0){ ?>
											<h4 class="text-danger">$ <?php echo $price;?></h4>
											<button disabled="" style="color: white;" class="btn btn-success">Out Of Stock</button>
										<?php } else{ ?>				
										<h4 class="text-danger">$ <?php echo $price;?></h4>
										<input type="number" name="quantity" id="<?php echo $itemid; ?>quantity4" class="form-control" value="1">
										<input type="hidden" name="name" id="<?php echo $itemid; ?>name4" value="<?php echo $name;?>">		
										<input type="hidden" name="price" id="<?php echo $itemid; ?>price4" value="<?php echo $price;?>">
										<button style="color: white;" class="btn btn-success" id="action_button4" data-action="add" data-id="<?php echo $itemid; ?>">Add To Cart</button>
										<?php } ?>
									</div>
								</form>
							</div>
							<?php	
							   }
						    }

					    ?>
					</div>
				</div>


		 		<div id="menu1" class="container tab-pane fade">
				<div style="clear: both;"></div>
				<br>
				<h1 class="text-center">Order Details</h1>
					<div class="table-responsive" id="done">
						<table class="table table-bordered">
							<tr>
								<th width="40">Item Name</th>
								<th width="10">Quantity</th>
								<th width="20">Price</th>
								<th width="15">Total</th>
								<th width="5">Action</th>
							</tr>
							<?php
								if (!empty($_SESSION["shopping_cart"])) {
									//store total of item price
									$total = 0;
									foreach ($_SESSION["shopping_cart"] as $keys => $values) {
									?>
									<tr>
										<td><?php echo $values["item_name"]; ?></td>
										<td><?php echo $values["item_quantity"]; ?></td>
										<td>$ <?php echo $values["item_price"]; ?></td>
										<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
										<td><button class="btn btn-danger" id="action_button" data-action="delete" data-id="<?php echo $values["item_id"]; ?>">Remove</button></td>
									</tr>
									<?php
										$total = $total + ($values["item_quantity"] * $values["item_price"]);
										$_SESSION['total'] = $total;
									   }
									?>
									<tr>
										<td colspan="3" align="right">Total</td>
										<td align="right">$ <?php echo number_format($total, 2); ?></td>
										<td>
											<?php
            									if(isset($_SESSION['id'])){ ?>
										<button onclick="return(window.location.href='popup.php')" class="btn btn-success">checkout</button>
											<?php }else { ?>
											<a href="login.php">Login</a>
											<?php } ?>
										</td>
									</tr>
								<?php

								}
							?>
						</table>
					</div>
				</div>
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
<script>
	$(document).on('click', '#action_button1', function(e){
		e.preventDefault();

		var itemid = $(this).data('id');
		var action = $(this).data('action');
		var itemname = $('#' + itemid + 'name1').val();
		var itemquantity = $('#' + itemid + 'quantity1').val();
		var itemprice = $('#' + itemid + 'price1').val();

      	var formData = new FormData();

      	formData.append('itemname', itemname);
      	formData.append('itemquantity', itemquantity);
      	formData.append('itemprice', itemprice);
      	formData.append('itemid', itemid);
      	formData.append('action', action);

        $.ajax({
            url: 'savetocart.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success:function(data)
            {
    		  $('#done').load("shop.php #done > *");
            }
        })
    });
</script>
<script>
	$(document).on('click', '#action_button2', function(e){
		e.preventDefault();

		var itemid = $(this).data('id');
		var action = $(this).data('action');
		var itemname = $('#' + itemid + 'name2').val();
		var itemquantity = $('#' + itemid + 'quantity2').val();
		var itemprice = $('#' + itemid + 'price2').val();

      	var formData = new FormData();

      	formData.append('itemname', itemname);
      	formData.append('itemquantity', itemquantity);
      	formData.append('itemprice', itemprice);
      	formData.append('itemid', itemid);
      	formData.append('action', action);

        $.ajax({
            url: 'savetocart.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success:function(data)
            {
    		  $('#done').load("shop.php #done > *");
            }
        })
    });
</script>
<script>
	$(document).on('click', '#action_button3', function(e){
		e.preventDefault();

		var itemid = $(this).data('id');
		var action = $(this).data('action');
		var itemname = $('#' + itemid + 'name3').val();
		var itemquantity = $('#' + itemid + 'quantity3').val();
		var itemprice = $('#' + itemid + 'price3').val();

      	var formData = new FormData();

      	formData.append('itemname', itemname);
      	formData.append('itemquantity', itemquantity);
      	formData.append('itemprice', itemprice);
      	formData.append('itemid', itemid);
      	formData.append('action', action);

        $.ajax({
            url: 'savetocart.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success:function(data)
            {
    		  $('#done').load("shop.php #done > *");
            }
        })
    });
</script>
<script>
	$(document).on('click', '#action_button4', function(e){
		e.preventDefault();

		var itemid = $(this).data('id');
		var action = $(this).data('action');
		var itemname = $('#' + itemid + 'name4').val();
		var itemquantity = $('#' + itemid + 'quantity4').val();
		var itemprice = $('#' + itemid + 'price4').val();

      	var formData = new FormData();

      	formData.append('itemname', itemname);
      	formData.append('itemquantity', itemquantity);
      	formData.append('itemprice', itemprice);
      	formData.append('itemid', itemid);
      	formData.append('action', action);

        $.ajax({
            url: 'savetocart.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success:function(data)
            {
    		  $('#done').load("shop.php #done > *");
            }
        })
    });
</script> -->
<script>
	$(document).on('click', '#action_button', function(e){
		e.preventDefault();

		var itemid = $(this).data('id');
		var action = $(this).data('action');

      	var formData = new FormData();

      	formData.append('itemid', itemid);
      	formData.append('action', action);
      
        $.ajax({
            url: 'savetocart.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success:function(data)
            {
    		  $('#done').load("shop.php #done > *");
            }
        });
    });
</script>
</body>
</html>