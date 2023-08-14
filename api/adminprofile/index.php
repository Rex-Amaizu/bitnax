<?php
include ('updateadminclass.php');

$_POST = json_decode(file_get_contents('php://input'), true);
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
     // The request is using the POST method

		$dataResponseArray = array("msg"=>"Please use post request");
	$parentResponseArray = array("status"=>false, "message"=>"Server request is not post", "data"=>$dataResponseArray);
	echo json_encode($parentResponseArray);

}else{


	$email = $_POST['email'];
	$btc_address = $_POST['btc_address'];
	$eth_address = $_POST['eth_address'];
	$bch_address = $_POST['bch_address'];
	$usdt_address = $_POST['usdt_address'];

$updateprofileclass = new updateAdminProfileClass();

$userResult = $updateprofileclass->updateAdminProfile($email,$btc_address,$eth_address,$bch_address,$usdt_address);

if($userResult){
	$dataResponseArray = array("msg"=>"Profile Update");
	$parentResponseArray = array("status"=>$userResult['status'], "message"=>$userResult['message'], "data"=>$dataResponseArray);
	
	echo json_encode($parentResponseArray);

}else{
	$dataResponseArray = array("msg"=>"Failed");
	$parentResponseArray = array("status"=>$userResult['status'], "message"=>$userResult['message'], "data"=>$dataResponseArray);
	
	echo json_encode($parentResponseArray);
}

}

?>