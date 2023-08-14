<?php
include ('confirminvestclass.php');

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
	$plan = $_POST['plan'];

$confirminvestmentclass = new confirmInvestment($investor_email,$amount,$status_type,$plan);

$userResult = $confirminvestmentclass->checkInvestor();

if($userResult){
	$dataResponseArray = array("msg"=>"Investment");
	$parentResponseArray = array("status"=>$userResult['status'], "message"=>$userResult['message'], "data"=>$dataResponseArray);
	
	echo json_encode($parentResponseArray);

}else{
	$dataResponseArray = array("msg"=>"Try Again");
	$parentResponseArray = array("status"=>false, "message"=>$userResult['message'], "data"=>$dataResponseArray);
	
	echo json_encode($parentResponseArray);
}

}

?>