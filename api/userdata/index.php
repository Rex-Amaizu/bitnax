<?php
include ('userdataclass.php');

$_POST = json_decode(file_get_contents('php://input'), true);
if ($_SERVER['REQUEST_METHOD'] != 'GET') {
     // The request is using the POST method

		$dataResponseArray = array("msg"=>"Please use get request");
	$parentResponseArray = array("status"=>false, "message"=>"Server request is not get", "data"=>$dataResponseArray);
	echo json_encode($parentResponseArray);

}else{

	$email = $_GET['email'];
	$userArray = [];

	$userdata = new UserDataClass();
	$userResult = $userdata->fetchUserData($email);

	if($userResult == null){
echo json_encode(array("status"=> false,"message"=>"User does not exist","data"=>array("msg"=>"No user found")));
}else{

	$userArray = $userResult;


    $dataResponseArray = array("user_information"=>$userArray);

    $parentResponseArray = array("status"=>"Successful", "message"=>"Full User Data", "data"=>$dataResponseArray);

	echo json_encode($parentResponseArray);

}

}


?>