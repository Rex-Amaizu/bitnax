<?php
include ('loginclass.php');

$_POST = json_decode(file_get_contents('php://input'), true);
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
     // The request is using the POST method

		$dataResponseArray = array("msg"=>"Please use post request");
	$parentResponseArray = array("status"=>false, "message"=>"Server request is not post", "data"=>$dataResponseArray);
	echo json_encode($parentResponseArray);

}else{

	$email = $_POST['email'];
$password = $_POST['password'];

$loginClass = new loginClass();

$userResult = $loginClass->checkUserAndLogin($email,$password);

if($userResult['status']) {

	echo json_encode($userResult);
}else{

	echo json_encode($userResult);
	
}

}



?>