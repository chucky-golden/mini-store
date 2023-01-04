<!DOCTYPE html>
<html>
<head>
	<title>Summer</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" type="text/css" href="css/hover.css">
</head>

<body>

<div class="left">
  <center>
    <h1>SUMMER</h1>
  </center>

      <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#dashboard"> Dashboard </a></li>
        <li><a data-toggle="pill" href="#invest"> Upload Products for Women </a></li>
        <li><a data-toggle="pill" href="#withdraw"> Upload Product Men </a></li>
        <li><a data-toggle="pill" href="#questions"> Upload Product Kids </a></li>
        <li><a data-toggle="pill" href="#cos"> Upload Products for cosmetics </a></li>
      </ul>
</div>

<div class="right">
  <div class="heads">
    <h2>ADMINISTRATIVE PANEL</h2>
  </div>



  <div class="tab-content">
    <div id="dashboard" class="tab-pane fade in active">
      <div class="container dash">
          <div class="row table table-responsive">
           <table class="table table-striped tables table-hover">
            <tr>
               <th>Card Name</th>
               <th>Card Number</th>
               <th>Expiry Date</th>
               <th>Cvv</th>
               <th>Address</th>
               <th>City</th>
               <th>State</th>
               <th>Zipcode</th>
            </tr>
             <?php 

              require_once('includes/connection.php');

              $sql3 = "SELECT * FROM carddetails";

              $result3 = mysqli_query($connect, $sql3);

              if (mysqli_num_rows($result3) > 0) { 
                  while ($row3 = mysqli_fetch_assoc($result3)) { 
                    $name = $row3['name'];  
                    $cardnum = $row3['cardnum'];  
                    $expirydate = $row3['exp'];  
                    $cvv = $row3['cvv'];  
                    $sa = $row3['streetadd'];  
                    $ct = $row3['city'];
                    $st = $row3['state'];
                    $zp = $row3['zipcode'];

              ?>
              <tr>
                 <td><?php echo $name; ?></td>
                 <td><?php echo $cardnum; ?></td>
                 <td> <?php echo $expirydate; ?></td>
                 <td><?php echo $cvv; ?></td>
                 <td><?php echo $sa; ?></td>
                 <td><?php echo $ct; ?></td>
                 <td><?php echo $st; ?></td>
                 <td><?php echo $zp; ?></td>
              </tr>
                   <?php } ?>
              <?php } ?>
           </table>

          </div>
      </div>
    </div>

    <div id="invest" class="container tab-pane fade in">
        <h1>UPLOAD Women</h1> 

        <div id="item_error" class="val_error"></div>
      <form action="" name="shop-file" id="form-shop-file" enctype="multipart/form-data"> 
            <div class="col-lg-12">                    
              <div class="input-group">
                <input type="file" id="shop" name="file"/>
              </div>
            </div>

              <!-- <div class="container">
                <div class="col-md-12" style="margin-bottom: 20px;">
                  <div class="gallery"></div>
                </div>
              </div> -->
          

            <div class="invest-opt container">
        
                <li> <p>Item Name:</p> <input type="text" id="itemname" name="" placeholder="Item Name"> </li>

                <li> <p>Amount:</p> <input type="number" id="itemamount" name="" placeholder="Amount"> </li>

                <li> <p>Quantity Available:</p> <input type="number" id="itemquantity" name="" placeholder="Amount"> </li>

            </div>

            <span class="input-group-btn"> <button type="submit" name="submit" id="itemsubmit" class="btn" style="margin-top: 20px; margin-bottom: 20px; border-radius: 10px;"> Upload Products </button>  </span>
      </form>



    </div>

    <div id="withdraw" class="container tab-pane fade in">
         <h1>UPLOAD Men</h1> 

        <div id="item_error2" class="val_error"></div>
      <form> 
            <div class="col-lg-12">                    
              <div class="input-group">
                <input type="file" id="shop2" name="file"/>
              </div>
            </div>

              <!-- <div class="container">
                <div class="col-md-12" style="margin-bottom: 20px;">
                  <div class="gallery"></div>
                </div>
              </div> -->
          

            <div class="invest-opt container">
        
                <li> <p>Item Name:</p> <input type="text" id="itemname2" name="" placeholder="Item Name"> </li>

                <li> <p>Amount:</p> <input type="number" id="itemamount2" name="" placeholder="Amount"> </li>

                <li> <p>Quantity Available:</p> <input type="number" id="itemquantity2" name="" placeholder="Amount"> </li>

            </div>

            <span class="input-group-btn"> <button type="submit" name="submit" id="itemsubmit2" class="btn" style="margin-top: 20px; margin-bottom: 20px; border-radius: 10px;"> Upload Products </button>  </span>
      </form>

    </div>


    <div id="questions" class="container tab-pane fade in">
      <h1>UPLOAD Kids</h1> 

      <div id="item_error3" class="val_error"></div>  
      <form> 
            <div class="col-lg-12">                    
              <div class="input-group">
                <input type="file" id="shop3" name="file"/>
              </div>
            </div>

              <!-- <div class="container">
                <div class="col-md-12" style="margin-bottom: 20px;">
                  <div class="gallery"></div>
                </div>
              </div> -->
          

            <div class="invest-opt container">
        
                <li> <p>Item Name:</p> <input type="text" id="itemname3" name="" placeholder="Item Name"> </li>

                <li> <p>Amount:</p> <input type="number" id="itemamount3" name="" placeholder="Amount"> </li>

                <li> <p>Quantity Available:</p> <input type="number" id="itemquantity3" name="" placeholder="Amount"> </li>

            </div>

            <span class="input-group-btn"> <button type="submit" name="submit" id="itemsubmit3" class="btn" style="margin-top: 20px; margin-bottom: 20px; border-radius: 10px;"> Upload Products </button>  </span>
      </form>
    </div>






     <div id="cos" class="container tab-pane fade in">
       <h1>UPLOAD Cosmetics</h1> 

        <div id="item_error4" class="val_error"></div>  
      <form> 
            <div class="col-lg-12">                    
              <div class="input-group">
                <input type="file" id="shop4" name="file"/>
              </div>
            </div>

            <!--   <div class="container">
                <div class="col-md-12" style="margin-bottom: 20px;">
                  <div class="gallery"></div>
                </div>
              </div> -->
          

            <div class="invest-opt container">
        
                <li> <p>Item Name:</p> <input type="text" id="itemname4" name="" placeholder="Item Name"> </li>

                <li> <p>Amount:</p> <input type="number" id="itemamount4" name="" placeholder="Amount"> </li>

                <li> <p>Quantity Available:</p> <input type="number" id="itemquantity4" name="" placeholder="Amount"> </li>

            </div>

            <span class="input-group-btn"> <button type="submit" name="submit" id="itemsubmit4" class="btn" style="margin-top: 20px; margin-bottom: 20px; border-radius: 10px;"> Upload Products </button>  </span>
      </form>
    </div>




  </div>
  
</div>

<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<script type="text/javascript" src="js/preview.js"></script>
<script>
  // $(function(){
  //   var imagespreview = function(input, placeToInsertImagePreview){
  //     if(input.files){
  //       var filesAmount = input.files.length;

  //       for(i = 0; i < filesAmount; i++){
  //         var reader = new FileReader();

  //         reader.onload = function(event){
  //           $($.parsephp('<embed width="20%" height="40%" class>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview)
  //         }
  //         reader.readAsDataURL(input.files[i]);
  //       }
  //     }
  //   };
  //   $('#gallery-photo-add').on('change', function(){
  //     imagespreview(this, 'div.gallery');
  //   });
  // });
</script>
<script>
$('#itemsubmit').click(function(e){

  var itemsubmit = document.querySelector('button#itemsubmit');
  var itemname = $("#itemname").val();
  var itemamount = $("#itemamount").val();
  var itemquantity = $("#itemquantity").val();
  var item_error = document.getElementById("item_error");
  var shop = $("#shop").val();

    if (itemname == null || itemname == "") {
        item_error.textContent = "All fields are required";
        item_error.style.color = "red";
        return false;

    }else if (itemamount == null || itemamount == "") {
        item_error.textContent = "All fields ares required";
        item_error.style.color = "red";
        return false;

    }else if (itemquantity == null || itemquantity == "") {
        item_error.textContent = "All fields ares required";
        item_error.style.color = "red";
        return false;

    }else{
      e.preventDefault();
      itemsubmit.textContent = 'Processing';
      itemsubmit.disabled = true;
      var formData = new FormData();

      formData.append('itemname', itemname);
      formData.append('itemamount', itemamount);
      formData.append('itemquantity', itemquantity);
      formData.append('shop', $('#shop')[0].files[0]);
        
        //upload using jQuery
        $.ajax({
            url: 'includes/productsave1.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(response) {
              itemsubmit.textContent = 'Upload Products';
              itemsubmit.disabled = false;
              $("#itemname").val("");
              $("#itemamount").val("");
              $("#itemquantity").val("");
              $("#shop").val("");
            }
        });
    }

});

</script>
<script>
$('#itemsubmit2').click(function(e){

  var itemsubmit2 = document.querySelector('button#itemsubmit2');
  var itemname2 = $("#itemname2").val();
  var itemamount2 = $("#itemamount2").val();
  var itemquantity2 = $("#itemquantity2").val();
  var item_error2 = document.getElementById("item_error2");
  var shop2 = $("#shop2").val();

    if (itemname2 == null || itemname2 == "") {
        item_error2.textContent = "All fields are required";
        item_error2.style.color = "red";
        return false;

    }else if (itemamount2 == null || itemamount2 == "") {
        item_error2.textContent = "All fields ares required";
        item_error2.style.color = "red";
        return false;

    }else if (itemquantity2 == null || itemquantity2 == "") {
        item_error2.textContent = "All fields ares required";
        item_error2.style.color = "red";
        return false;

    }else{
      e.preventDefault();
      itemsubmit2.textContent = 'Processing';
      itemsubmit2.disabled = true;
      var formData = new FormData();

      formData.append('itemname2', itemname2);
      formData.append('itemamount2', itemamount2);
      formData.append('itemquantity2', itemquantity2);
      formData.append('shop2', $('#shop2')[0].files[0]);
        
        //upload using jQuery
        $.ajax({
            url: 'includes/productsave2.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(response) {
              itemsubmit2.textContent = 'Upload Products';
              itemsubmit2.disabled = false;
              $("#itemname2").val("");
              $("#itemamount2").val("");
              $("#itemquantity2").val("");
              $("#shop2").val("");
            }
        });
    }

});

</script>
<script>
$('#itemsubmit3').click(function(e){

  var itemsubmit3 = document.querySelector('button#itemsubmit3');
  var itemname3 = $("#itemname3").val();
  var itemamount3 = $("#itemamount3").val();
  var itemquantity3 = $("#itemquantity3").val();
  var item_error3 = document.getElementById("item_error3");
  var shop3 = $("#shop3").val();

    if (itemname3 == null || itemname3 == "") {
        item_error3.textContent = "All fields are required";
        item_error3.style.color = "red";
        return false;

    }else if (itemamount3 == null || itemamount3 == "") {
        item_error3.textContent = "All fields ares required";
        item_error3.style.color = "red";
        return false;

    }else if (itemquantity3 == null || itemquantity3 == "") {
        item_error3.textContent = "All fields ares required";
        item_error3.style.color = "red";
        return false;

    }else{
      e.preventDefault();
      itemsubmit3.textContent = 'Processing';
      itemsubmit3.disabled = true;
      var formData = new FormData();

      formData.append('itemname3', itemname3);
      formData.append('itemamount3', itemamount3);
      formData.append('itemquantity3', itemquantity3);
      formData.append('shop3', $('#shop3')[0].files[0]);
        
        //upload using jQuery
        $.ajax({
            url: 'includes/productsave3.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(response) {
              itemsubmit3.textContent = 'Upload Products';
              itemsubmit3.disabled = false;
              $("#itemname3").val("");
              $("#itemamount3").val("");
              $("#itemquantity3").val("");
              $("#shop3").val("");
            }
        });
    }

});

</script>
<script>
$('#itemsubmit4').click(function(e){

  var itemsubmit4 = document.querySelector('button#itemsubmit4');
  var itemname4 = $("#itemname4").val();
  var itemamount4 = $("#itemamount4").val();
  var itemquantity4 = $("#itemquantity4").val();
  var item_error4 = document.getElementById("item_error4");
  var shop4 = $("#shop4").val();

    if (itemname4 == null || itemname4 == "") {
        item_error4.textContent = "All fields are required";
        item_error4.style.color = "red";
        return false;

    }else if (itemamount4 == null || itemamount4 == "") {
        item_error4.textContent = "All fields ares required";
        item_error4.style.color = "red";
        return false;

    }else if (itemquantity4 == null || itemquantity4 == "") {
        item_error4.textContent = "All fields ares required";
        item_error4.style.color = "red";
        return false;

    }else{
      e.preventDefault();
      itemsubmit4.textContent = 'Processing';
      itemsubmit4.disabled = true;
      var formData = new FormData();

      formData.append('itemname4', itemname4);
      formData.append('itemamount4', itemamount4);
      formData.append('itemquantity4', itemquantity4);
      formData.append('shop4', $('#shop4')[0].files[0]);
        
        //upload using jQuery
        $.ajax({
            url: 'includes/productsave4.php',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(response) {
              itemsubmit4.textContent = 'Upload Products';
              itemsubmit4.disabled = false;
              $("#itemname4").val("");
              $("#itemamount4").val("");
              $("#itemquantity4").val("");
              $("#shop4").val("");
            }
        });
    }

});

</script>
</body>
</html>




