<?php
include ('depositclass.php');


$_POST = json_decode(file_get_contents('php://input'), true);
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
     // The request is using the POST method

		$dataResponseArray = array("msg"=>"Please use post request");
	$parentResponseArray = array("status"=>false, "message"=>"Server request is not post", "data"=>$dataResponseArray);
	echo json_encode($parentResponseArray);

}else{

	$amt = $_POST['amt'];
	$plan = $_POST['plan'];
	$paymtd = $_POST['paymtd'];
	$email = $_POST['email'];
	

	$depositclass = new depositClass();
	$userResult = $depositclass->confirmToken($email,$paymtd,$plan,$amt);


	if($userResult['status']) {

	echo json_encode($userResult);
	exit();
}
}
?>