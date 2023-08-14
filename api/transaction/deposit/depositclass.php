<?php
class depositClass{

 function confirmToken($email,$paymtd,$plan,$amt){

include ('../../../db.php');
include('../../../encryptdecrypt.php');
$passkey = "firstfullsite";
$topup = "topup";
$ledgerbal = "";



$sql = "SELECT * FROM register WHERE email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows == 0){
echo json_encode(array("status"=> false,"code"=>401,"message"=>"UnAUthorized token","data"=>array("msg"=>"Unauthorized")));

}elseif ($amt[0] == '-') {

	echo json_encode(array("status"=> false,"code"=>401,"message"=>"You cannot deposit a negative","data"=>array("msg"=>"Unauthorized")));
exit();
}elseif ($plan == $topup) {

	//fetching the required data from the database table
$sql = "SELECT * FROM wallet WHERE investor_email = '$email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){

$ledgerbal = $row['ledger_bal'];

}

if ($ledgerbal == 0) {
	
echo json_encode(array("status"=> false,"code"=>401,"message"=>"Top up is for existing investors: Choose another plan","data"=>array("msg"=>"Wrong Plan Selected")));

}else{

$this->checkDeposit($paymtd,$plan,$amt);
}

}else{

$this->checkDeposit($paymtd,$plan,$amt);

}
//echo $email;

}
//End of confirm token function.

//start of fucntion checkDeposit
function checkDeposit($paymtd,$plan,$amt){



$bronze = "bronze";
$silver = "silver";
$gold = "gold";
$diamond = "diamond";
$topup = "topup";
//echo $plan;
//echo "\r\n";
//echo $amt;
if ($plan == $bronze && ($amt >= 100) AND ($amt < 10000)){

$this->getWallet($paymtd,$amt);
}elseif($plan == $silver && ($amt >= 10000) AND ($amt < 20000)){

$this->getWallet($paymtd,$amt);
}elseif($plan == $gold && ($amt >= 20000) AND ($amt < 30000)){

$this->getWallet($paymtd,$amt);
}elseif($plan == $diamond && ($amt >=30000)){

$this->getWallet($paymtd,$amt);
}elseif ($plan == $topup && ($amt >=1000)) {
	
$this->getWallet($paymtd,$amt);
}elseif ($plan == $topup && ($amt < 100)) {
	
echo json_encode(array("status"=> false,"code"=>401,"message"=>"You Cannot top up less than 100 usd.","data"=>array("msg"=>"Invalid Amount")));
}else{

echo json_encode(array("status"=> false,"code"=>401,"message"=>"The amount chosen is not valid for this plan; choose another plan.","data"=>array("msg"=>"Invalid Amount")));

}
}
//end of fucntion checkDeposit

//start of fucntion getWallet
function getWallet($paymtd,$amt){
include ('../../../db.php');

$bitcoin 		= "btc";
$ethereum 		= "eth";
$bitcoin_cash 	= "bch";
$usdt 	        = "usdt";
$other_alts 	= "oa";
$perfect_money 	= "pm";
$admin_id 		= "admin001";
$investor_id 	= "";
$investor_email = "";
$btc_address 	= "";
$eth_address 	= "";
$bch_address 	= "";
$usdt_address 	= "";

$sql = "SELECT * FROM wallet WHERE investor_id = '$admin_id'";
$result = $conn->query($sql);

while($row = mysqli_fetch_assoc($result)){

	$investor_id 	= $row["investor_id"];
	$investor_email = $row["investor_email"];
	$btc_address 	= $row["btc_address"];
	$eth_address 	= $row["eth_address"];
	$bch_address 	= $row["bch_address"];
	$usdt_address 	= $row["usdt_address"];
}


if ($paymtd === $bitcoin) {
//echo "\r\n";
//echo "tis is d payment method".$paymtd;
//echo "\r\n";
//echo "tis is d stated method".$bitcoin;
//echo "\r\n";
//echo "right here";
echo json_encode(array("status"=> true,"code"=>200,"data"=>array("msg"=>"Transfer \"&dollar;".$amt."\" worth of bitcoin to this address: " .$btc_address, "payt"=>$btc_address)));


}elseif ($paymtd == $ethereum) {

	echo json_encode(array("status"=> true,"code"=>200,"data"=>array("msg"=>"Transfer \"&dollar;".$amt."\" worth of ethereum to this address: " .$eth_address, "payt"=>$eth_address)));


}elseif ($paymtd == $bitcoin_cash) {

	echo json_encode(array("status"=> true,"code"=>200,"data"=>array("msg"=>"Transfer \"&dollar;".$amt."\" worth of bitcoin cash to this address: " .$bch_address, "payt"=>$bch_address)));

}elseif ($paymtd == $usdt) {

	echo json_encode(array("status"=> true,"code"=>200,"data"=>array("msg"=>"Transfer \"&dollar;".$amt."\" worth of usdt to this address: " .$usdt_address, "payt"=>$usdt_address)));
	
}elseif ($paymtd == $other_alts) {

	echo json_encode(array("status"=> true,"code"=>200,"data"=>array("msg"=>"Contact support@bittrada.com for the address of your preferred Alt")));


}elseif ($paymtd == $perfect_money) {

	echo json_encode(array("status"=> true,"code"=>200,"data"=>array("msg"=>"Contact support@bittrada.com for Perfect Money Details")));

}else{

	echo json_encode(array("status"=> false,"code"=>401,"data"=>array("msg"=>"Please choose a valid payment method")));
}



}
//end of fucntion getWallet

}
?>