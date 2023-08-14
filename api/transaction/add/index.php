<?php
include('addclass.php');

$_POST = json_decode(file_get_contents('php://input'), true);
if ($_SERVER['REQUEST_METHOD'] != 'GET') {
     // The request is using the POST method

		$dataResponseArray = array("msg"=>"Please use get request");
	$parentResponseArray = array("status"=>false, "message"=>"Server request is not get", "data"=>$dataResponseArray);
	echo json_encode($parentResponseArray);

}else{

	$email = $_GET['email'];

$addclass = new AddClass();

$userResult = $addclass->updateROI($email);

if($userResult){
	$dataResponseArray = array("msg"=>"New ROI Added");
	$parentResponseArray = array("status"=>true, "message"=>$userResult['message'], "data"=>$dataResponseArray);
	
	echo json_encode($parentResponseArray);

}else{
	$dataResponseArray = array("msg"=>"Update Failed");
	$parentResponseArray = array("status"=>false, "message"=>$userResult['message'], "data"=>$dataResponseArray);
	
	echo json_encode($parentResponseArray);
} 

}


?>