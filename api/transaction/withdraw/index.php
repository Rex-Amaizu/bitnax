<?php
include('withdrawalclass.php');

$_POST = json_decode(file_get_contents('php://input'), true);
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
     // The request is using the POST method

		$dataResponseArray = array("msg"=>"Please use post request");
	$parentResponseArray = array("status"=>false, "message"=>"Server request is not post", "data"=>$dataResponseArray);
	echo json_encode($parentResponseArray);

}else{

	$investor_email = $_POST['investor_email'];
	$amount = $_POST['amount'];
	$status_type = $_POST['status_type'];

$withdrawalclass = new withdrawalClass();

$userResult = $withdrawalclass->updateWithdrawal($investor_email,$amount,$status_type);

if($userResult){
	$dataResponseArray = array("msg"=>"Withdrawal");
	$parentResponseArray = array("status"=>$userResult['status'], "message"=>$userResult['message'], "data"=>$dataResponseArray);
	
	echo json_encode($parentResponseArray);

}else{
	$dataResponseArray = array("msg"=>"Update Failed");
	$parentResponseArray = array("status"=>$userResult['status'], "message"=>$userResult['message'], "data"=>$dataResponseArray);
	
	echo json_encode($parentResponseArray);
} 

}


?>