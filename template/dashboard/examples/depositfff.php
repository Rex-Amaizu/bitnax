<?php
// Start the session
session_start();
?>
<!--
=========================================================
* * Black Dashboard - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/black-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)


* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Black Dashboard by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!--  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
<!--   <link rel="stylesheet" href="css/bootstrap.min.css"> -->
<!-- <script src="js/jquery-3.5.1.min.js"></script> -->
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script> -->
<!-- <script src="js/bootstrap.min.js"> -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script> -->

</script>
<!-- <script>
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
</script> -->
  <style>
  #example_form fieldset {
    width: 200px;
    padding: 3px 10px 10px 10px;
    margin-left: auto;
    margin-right: auto;

}
.zindex {
  z-index: 1000;
}
#example_form input {
    width: 250px;
    margin-left: auto;
    margin-right: auto;
}
#example_form input[type=submit] {
    margin-top: 3px;
    margin-left: auto;
    margin-right: auto;
    width: auto;
}

/* The Modal (background) */
/**/

/* Modal Content */


/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


  </style>
</head>
<?php
include('../../../constants.php');
$userDataRespString = $_SESSION[$USER_DATA];
$userDataObj = json_decode($userDataRespString,true);

?>
<body class="">
  
       <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Subscribe our Newsletter</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p>
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email Address">
                    </div>
                    <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
       
          
            <div class="card card-chart">
              
               
              <div align="center">
               <form action="#" method="post" id="example_form">
                    <legend>Choose an investment plan and amount to invest then click on deposit</legend>
       
    <fieldset>
   
        
        <label for="investment_plans">Choose Plan</label>
       <select name="plan">
    <option value="" disabled selected>Select an investment plan</option>
    <option value="bronze">Bronze($1000 - $9999)</option>
    <option value="silver">Silver($10000 - $19999)</option>
    <option value="gold">Gold($20000 - $29999)</option>
    <option value="diamond">Diamond($30000 - unlimited)</option>
</select><br>
       
        <label for="investment_amount">Amount $USD</label>
        <input type="number" size="20" name="amt" id="amount" /><br>

<label for="payment_method">Choose Plan</label>
       <select name="paymtd">
    <option value="" disabled selected>payment method</option>
    <option value="btc">Bitcoin</option>
    <option value="eth">Ethereum</option>
    <option value="bch">Bitcoin Cash</option>
    <option value="pm">Perfect Money</option>
    <option value="oa">Other Alts</option>
</select>
        <br>
        
        <button type="submit" class="btn btn-light btn-sm" >Deposit</button>
       

       
    </fieldset>
  </form>
</div>
</div>
 

   <?php

if (isset($_POST["paymtd"]) && isset($_POST["amt"]) && isset($_POST["plan"])){
  
  $payment_method = $_POST["paymtd"];
  $investment_plan = $_POST["plan"];
  $amount = $_POST["amt"];
  $email = $userDataObj['data']['user_information']['email'];
  $token = $userDataObj['data']['user_information']['token'];
//echo $email;
//echo "\r\n";
//echo $token;
runTransfer($email,$token,$payment_method,$investment_plan,$amount);
  }


function runTransfer($email,$token,$payment_method,$investment_plan,$amount){
  
  include('../../../constants.php');
  $url = $BASE_URL."/transaction/deposit/?email=".$email;
  $body = '{
      "paymtd": "'.$payment_method.'",
      "plan": "'.$investment_plan.'",
      "amt": "'.$amount.'"
    }';
//echo $body;
$ch = curl_init($url);
//echo $url;
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$authorization = "Authorization: ".$token;
curl_setopt($ch, CURLOPT_HTTPHEADER, array( $authorization ));
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);

//execute
$userDataResponse = curl_exec($ch);

//close the connection, release resources used
curl_close($ch);
//var_dump($result);
$status = json_decode($userDataResponse,true);
//var_dump($status);
//echo "\r\n";
//echo ($status['data']['msg']);




if(!$status["status"]){
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>';
exit(); 
}

  $_SESSION[$TRANSFER_DATA] = $status;
  $_SESSION["depositsuccessful"] = true;
  $transferdataresponse = $_SESSION[$TRANSFER_DATA];
  $userTransferObj = $transferdataresponse;
  echo $userTransferObj['code'];
  echo "\r\n";
 // $successmsg = $status['code'];
  //echo $successmsg;
  //echo '<script language="javascript">';
  //echo 'alert("'.$successmsg.'")';
  //echo '</script>';

//$errorMessage = $successmsg;
//echo '<script language="javascript">';
//echo 'alert("'.$errorMessage.'")';
//echo '</script>';


  



}
?>


<!-- <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script> -->

 <?php if (isset($_SESSION["depositsuccessful"])):?>
  <script> 
$('#myModal').modal('show');

</script>
    
<?php unset($_SESSION['depositsuccessful']); endif;?>
<!-- 
<<?php
//if (isset($_SESSION[$TRANSFER_DATA]));{
//echo '<script language="javascript">';
//echo 'alert("session set")';
//}
?>
<script>
  $(window).load(function(){        
   $('#myModal').modal('show');
    }); 
</script>
<?php
//unset($_SESSION[$TRANSFER_DATA]);

?> -->


</body>

</html>