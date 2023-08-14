<?php
include ('../../encryptdecrypt.php');

class LoginClass{

function checkUserAndLogin($email, $passwrd){

include ('../../db.php');
$passkey = "firstfullsite";
$encryptDecrypt = new EncryptDecrypt($passwrd);
$passFromDB = "";

$sql = "SELECT * FROM register WHERE email ='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0 ) {

while($row = $result->fetch_assoc()) {

	$passFromDB = $row['password'];
	//echo $passFromDB;
	//echo "\r\n";
	$decryptedpass = $encryptDecrypt->decrypt($passFromDB, $passkey);
	//echo $decryptedpass;
	//echo "\r\n";
	$encryptedToken = $encryptDecrypt->encrypt($email, $passkey);
	//echo $encryptedToken;
	if($decryptedpass == $passwrd) {

		$dataResponseArray = array("msg"=>"User exists in data base","token"=>$encryptedToken);
	$parentResponseArray = array("status"=>true, "message"=>"User Exists", "data"=>$dataResponseArray);
return $parentResponseArray;

	}
}
  	$dataResponseArray = array("msg"=>"Incorrect Email or Password");
	$parentResponseArray = array("status"=>false, "message"=>"Incorrect Email or Password", "data"=>$dataResponseArray);
return $parentResponseArray;

}
 	$dataResponseArray = array("msg"=>"Incorrect Email or Password");
	$parentResponseArray = array("status"=>false, "message"=>"Incorrect Email or Password", "data"=>$dataResponseArray);
return $parentResponseArray;


}
}
?>