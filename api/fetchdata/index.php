<?php

include ('walletdata.php');
include ('transactiondata.php');

$_POST = json_decode(file_get_contents('php://input'), true);
if ($_SERVER['REQUEST_METHOD'] != 'GET') {
     // The request is using the POST method

		$dataResponseArray = array("msg"=>"Please use get request");
	$parentResponseArray = array("status"=>false, "message"=>"Server request is not get", "data"=>$dataResponseArray);
	echo json_encode($parentResponseArray);

}else{


$email = $_GET['email'];
$transactionArray = [];
$walletArray = [];


$walletdata = new walletDataClass();
$walletResult = $walletdata->pullWalletData($email);
 if($walletResult == null){
echo json_encode(array("status"=> false,"message"=>"Wallet Not Fetched","data"=>array("msg"=>"Failed")));
}else {
$transactiondata = new transactionDataClass();

$transactionResult = $transactiondata->pullTransactionData($email);
    $walletArray = $walletResult;
    $transactionArray = $transactionResult;

    $dataResponseArray = array("wallet_information"=>$walletArray, "transaction_details" =>$transactionArray);

    $parentResponseArray = array("status"=>"Successful", "message"=>"Full Wallet and Transaction Data", "data"=>$dataResponseArray);

	echo json_encode($parentResponseArray);
}
// echo json_encode($transactionResult);
// if($userResult["status"]){
// 	$dataResponseArray = array("msg"=>"User Data");
// 	$parentResponseArray = array("status"=>true, "data"=>$dataResponseArray, "id"=>$id, "account_number"=>$account_number, "first_name"=>$first_name, "last_name"=>$last_name, "dob"=>$dob, "email"=>$email, "dp_url"=>$dp_url, "gender"=>$gender, "address"=>$address, "city"=>$city, "zip"=>$zip, "state"=>$state, "country"=>$country);
	
// 	echo json_encode($parentResponseArray);

// }else{

// 	$dataResponseArray = array("msg"=>"Failed");
// 	$parentResponseArray = array("status"=>false, "message"=>"User data not found", "data"=>$dataResponseArray);
	
// 	echo json_encode($parentResponseArray);
// }


}
?>