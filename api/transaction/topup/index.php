<?php
include ('topupclass.php');

$_POST = json_decode(file_get_contents('php://input'), true);
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
     // The request is using the POST method

		$dataResponseArray = array("msg"=>"Please use post request");
	$parentResponseArray = array("status"=>false, "message"=>"Server request is not post", "data"=>$dataResponseArray);
	echo json_encode($parentResponseArray);

}else{

	$email = $_POST['email'];
$amount = $_POST['amount'];
$status = $_POST['status'];

$topupclass = new topUpClass();

$userResult = $topupclass->confirmTopUp($email,$amount,$status);

if($userResult){
	$dataResponseArray = array("msg"=>"Top Up");
	$parentResponseArray = array("status"=>$userResult['status'], "message"=>$userResult['message'], "data"=>$dataResponseArray);
	
	echo json_encode($parentResponseArray);

}else{
	$dataResponseArray = array("msg"=>"Top Up");
	$parentResponseArray = array("status"=>false, "message"=>$userResult['message'], "data"=>$dataResponseArray);
	
	echo json_encode($parentResponseArray);
}


}



?>