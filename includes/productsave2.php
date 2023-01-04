<?php

require_once('connection.php');
require_once('functions.php');
$error = array();

$image_allow = array('jpg', 'jpeg', 'png','gif');

$itemname = $_POST['itemname2'];
$itemamount = $_POST['itemamount2'];
$itemquantity = $_POST['itemquantity2'];
$category = "men";
if(empty($error)){

        trim($itemname);
        trim($itemamount);
        trim($itemquantity);

        $itemname = trimData($_POST['itemname2']);
        $itemamount = trimData($_POST['itemamount2']);
        $itemquantity = trimData($_POST['itemquantity2']);


        $itemname = mysqli_real_escape_string($connect, $itemname);
        $itemamount = mysqli_real_escape_string($connect, $itemamount);
        $itemquantity = mysqli_real_escape_string($connect, $itemquantity);


        if(isset($_FILES) && !empty($_FILES)) {
		    if($_FILES['shop2']['name'] != "") {		      	

		      	$fileName = $_FILES['shop2']['name'];

				$fileType = $_FILES['shop2']['type'];

				$fileTmp = $_FILES['shop2']['tmp_name'];

				$fileExt = explode('.', $fileName);
				$fileActualExt = strtolower(end($fileExt));

				$pic = uniqid('',true).'.'.$fileActualExt;

				$location = "image/".$pic;

			    // filename to insert into database
			    $filename = $_FILES['shop2']['name'];

			    if (in_array($fileActualExt, $image_allow)) {            
                    compressImage($fileTmp,"500",100,$location);            
                   	$main_date =  date("Y-m-d h:i:sa");
					$sql = "INSERT INTO products(name,image,price,category,quantity)VALUES('$itemname', '$pic', '$itemamount', '$category', '$itemquantity')";
					$result = mysqli_query($connect, $sql);

                }

		    }
		        
		}


}

?>