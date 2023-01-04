<?php
	session_start();
	$current_user = $_SESSION['id'];
	require_once('connection.php');
  	require_once('functions.php');

  	$error = array();
  	if (isset($_POST['submit'])) {
	    $name = isset($_POST['name'])?trim($_POST['name']):'';
	    $cardnum = isset($_POST['cardnum'])?trim($_POST['cardnum']):'';
	    $exp = isset($_POST['exp'])?trim($_POST['exp']):'';
	    $cvv = isset($_POST['cvv'])?trim($_POST['cvv']):'';
	    $sa = isset($_POST['sa'])?trim($_POST['sa']):'';
	    $ct = isset($_POST['ct'])?trim($_POST['ct']):'';
	    $st = isset($_POST['st'])?trim($_POST['st']):'';
	    $zp = isset($_POST['zp'])?trim($_POST['zp']):'';
	    $amount = $_POST['amount'];

	    if ($name == "" || $cardnum == "" || $exp == "" || $cvv == "" || $sa == "" || $ct == "" || $st == "" || $zp == "") {
	      $error[] = urlencode("All fields are required");
	    }else{
	      $name = trimData($_POST['name']);
	      $cardnum = trimData($_POST['cardnum']);
	      $exp = trimData($_POST['exp']);
	      $cvv = trimData($_POST['cvv']);
	      $sa = trimData($_POST['sa']);
	      $ct = trimData($_POST['ct']);
	      $st = trimData($_POST['st']);
	      $zp = trimData($_POST['zp']);
	    }

	    if (empty($error)) {
	      $name = mysql_prep($connect, $name);
	      $cardnum = mysql_prep($connect, $cardnum);
	      $exp = mysql_prep($connect, $exp);
	      $cvv = mysql_prep($connect, $cvv);
	      $sa = mysql_prep($connect, $sa);
	      $ct = mysql_prep($connect, $ct);
	      $st = mysql_prep($connect, $st);
	      $zp = mysql_prep($connect, $zp);
	      
	      $sql = "INSERT INTO carddetails(user_id,name,cardnum,exp,cvv,streetadd,city,state,zipcode)VALUES('$current_user','$name','$cardnum','$exp','$cvv','$sa','$ct','$st','$zp')";
          $result = mysqli_query($connect, $sql);

          if($result){  
          	$success = "order placed";
            header('location: ../popup.php?success='.$success);
          }else{
            $failed = "transfer failed";
         	header("location: ../popup.php?error=".$failed);
          }


		}else{
		    header("location: ../popup.php?error=".join($error, urlencode('<br>')));
		}
	}
?>