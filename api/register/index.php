<?php
include ('registerclass.php');
$_POST = json_decode(file_get_contents('php://input'), true);
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
     // The request is using the POST method

		$dataResponseArray = array("msg"=>"Please use post request");
	$parentResponseArray = array("status"=>false, "message"=>"Server request is not post", "data"=>$dataResponseArray);
	echo json_encode($parentResponseArray);

}else{

$phone = $_POST['phone'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$referral_id = $_POST['referral_id'];
$country = $_POST['country'];

if($phone == "" || $first_name == "" || $last_name == "" || $email == "" || $password == "" || $country == ""){
	$dataResponseArray = array("msg"=>"Empty field(s)");
	$parentResponseArray = array("status"=>false, "message"=>"Please fill in all details", "data"=>$dataResponseArray);
	echo json_encode($parentResponseArray);
return;
}

$registerClass = new RegisterClass($phone,$first_name,$last_name,$email,$password,$referral_id,$country);

$userResult = $registerClass->checkUser();

if($userResult){
	$dataResponseArray = array("msg"=>"Success, You can proceed to login");
	$parentResponseArray = array("status"=>$userResult['status'], "message"=>$userResult['message'], "data"=>$dataResponseArray);
	
	echo json_encode($parentResponseArray);

}else{
	$dataResponseArray = array("msg"=>"Registration Failed");
	$parentResponseArray = array("status"=>$userResult['status'], "message"=>$userResult['message'], "data"=>$dataResponseArray);
	
	echo json_encode($parentResponseArray);
}
}
?>