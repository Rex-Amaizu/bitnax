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
    User Profile | Biitrada
  </title>
  <link href="https://fonts.googleapis.com/css?family=Bitter:400,700" rel="stylesheet">
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>
<?php
include('../../../constants.php');
$userDataRespString = $_SESSION[$USER_DATA];
$userDataObj = json_decode($userDataRespString,true);
$profile_name = $userDataObj['data']['user_information']['full_name'];
$profile_phone = $userDataObj['data']['user_information']['phone'];
$referral_id = $userDataObj['data']['user_information']['referral_id'];
$country = $userDataObj['data']['user_information']['country'];
?>



<?php
include('../../../constants.php');
$walletDataRespString = $_SESSION[$FETCH_DATA];
$walletDataObj = json_decode($walletDataRespString,true);
$investor_id = $walletDataObj['data']['wallet_information']['investor_id'];
$investor_email = $walletDataObj['data']['wallet_information']['investor_email'];
$ledger_bal = $walletDataObj['data']['wallet_information']['ledger_bal'];
$available_bal = $walletDataObj['data']['wallet_information']['available_bal'];
$profile_id = $walletDataObj['data']['wallet_information']['investor_id'];
$profile_email = $walletDataObj['data']['wallet_information']['investor_email'];
$btcaddress = $walletDataObj['data']['wallet_information']['btc_address'];
$ethaddress = $walletDataObj['data']['wallet_information']['eth_address'];
$bchaddress = $walletDataObj['data']['wallet_information']['bch_address'];
?>
<body class="">
  
   
    
     
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              
              <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] ); ?>" method="post">
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Investor ID</label>
                        <p><?php echo $profile_id; ?></p>
                        
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Email address</label>
                          <p><?php echo $investor_email;?></p>
                       
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Full Name</label>
                        <p><?php echo $profile_name;?></p>
                      </div>
                    </div>
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" size="20" name="phone" placeholder=<?php echo $profile_phone;?>>
                      </div>
                    </div>
                    
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Bitcoin Address</label>
                        <input type="text" class="form-control" size="50" name="btc" placeholder=<?php echo $btcaddress;?>>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Ethereum Address</label>
                        <input type="text" class="form-control" size="50" name="eth" placeholder=<?php echo $ethaddress;?>>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Bitcoin Cash Address</label>
                        <input type="text" class="form-control" size="50" name="bch" placeholder=<?php echo $bchaddress;?>>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    
                    <div class="col-md-4 px-md-1">
                      <div class="form-group">
                        <label>Country</label>
                        <p><?php echo $country;?></p>
                      </div>
                    </div>
                    <div class="col-md-4 pl-md-1">
                      <div class="form-group">
                        <label>Referral ID</label>
                        <p><?php echo $referral_id;?></p>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>Note</label>
                        <p>For security of your funds, you can only Update your phone number and wallet addresses. Any other change to your profile should be communicated to support@bittrada.com.</p>
                      </div>
                    </div>
                  </div>
                
              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-fill btn-primary" name="save">Save</button>
              </div>
            </div>
          </div>
          </form>
          
      
  
  

     <?php
if (isset($_POST["save"])){

//assigning the email variable
$user_email = $investor_email;

//validating phone
if (empty($_POST["phone"])) {
  
  $phone = $profile_phone;
}else{

  $phone = $_POST["phone"];
}

//validating btc_address
if (empty($_POST["btc"])) {
  
  $btc = $btcaddress;
}else{

  $btc = $_POST["btc"];
}

//validating eth_address
if (empty($_POST["eth"])) {
  
  $eth = $ethaddress;
}else{

  $eth = $_POST["eth"];
}

//validating bch_address
if (empty($_POST["bch"])) {
  
  $bch = $bchaddress;
}else{

  $bch = $_POST["bch"];
}
  // echo $phone;
  // echo $btc;
  // echo $eth;
  // echo $bch;
// calling the function to make the API call
updateProfile($user_email,$phone,$btc,$eth,$bch);

}

// function convertImgToBase(){
// $data = base64_encode(file_get_contents( $_FILES["pic"]["tmp_name"] ));
// return $data;
// }
function updateProfile($user_email,$phone,$btc,$eth,$bch){
  include('../../../constants.php');
  $url = $BASE_URL."/userprofile/";
  $body = '{
    "email": "'.$user_email.'",
    "phone": "'.$phone.'",
      "btc_address": "'.$btc.'",
      "eth_address": "'.$eth.'",
      "bch_address": "'.$bch.'"
    }';
 echo "body is ".$body;
// echo $url;

//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $body);

//So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

//execute post
$result = curl_exec($ch);
var_dump($result);

$status = json_decode($result,true);
//echo $status;
//var_dump($status);
if(!$status["status"]){
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>'; 
}else{
echo '<script language="javascript">';
echo 'alert("'.$status["message"].'")';
echo '</script>'; 

  
}

}


?>
</body>

</html>