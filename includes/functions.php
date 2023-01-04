<?php
	function trimData($data){
		$data = htmlspecialchars($data);
		$data = trim($data);
		$data = stripcslashes($data);

		return $data;
	}

	function sanitizer($sanitize){
		$newsanitizer = filter_var_array($sanitize, FILTER_SANITIZE_STRING);
		
		return $newsanitizer;
	}

	function password_encrypt($pass){
		$new_pass = sha1(md5(sha1(md5($pass))));

		return $new_pass;
	}

	function mysql_prep($connect, $string){
		$escape_string = mysqli_real_escape_string($connect, $string);

		return $escape_string;
	}

	function compressImage($file,$resolution,$quality,$location){

    if (file_exists($file)) {
      $imageInfo = getimagesize($file);
      $imageFormat = $imageInfo['mime'];

     switch ($imageFormat) {
       case 'image/jpeg':
         $original_image = imagecreatefromjpeg($file);
         break;
       case 'image/png':
         $original_image = imagecreatefrompng($file);
         break;
       case 'image/gif':
         $original_image = imagecreatefromgif($file);
         break;

       default:
        $original_image = imagecreatefromjpeg($file);
         break;
     }
     $original_width = imagesx($original_image);
     $original_height = imagesy($original_image);

     $ratio = $resolution/$original_width;
     $new_width = $resolution;
     $new_height = $original_height * $ratio;

     if ($new_height > $resolution) {
     $ratio = $resolution/$new_height;
     $new_height = $resolution;
     $new_width = $new_width * $ratio;
     }

     $new_image = imagecreatetruecolor($new_width, $new_height);

     imagecopyresampled($new_image,$original_image, 0, 0, 0, 0, $new_width, $new_height, $original_width, $original_height);

     imagejpeg($new_image,$location,$quality);
    
    }
   
  }






?>