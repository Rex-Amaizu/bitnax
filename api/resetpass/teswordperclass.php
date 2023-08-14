<?php
include ('../../encryptdecrypt.php');

class ResetClass{

private $passd = "";
private $email = "";
private $dgst = "";


public function __construct($passd,$email,$dgst){

$this->passd = $passd;
$this->email = $email;
$this->dgst = $dgst;


}


//start of function resetpass
function resetPass(){
include('../../db.php');
$passkey = "firstfullsite";
$encryptDecrypt = new EncryptDecrypt($this->passd);
$encryptedpass = $encryptDecrypt->encrypt($this->passd, $passkey);
$investor_id = "";

$sql = "SELECT * FROM register WHERE email = '$this->email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){

$forgetpass_code = $row['forgetpass_code'];

}

if ($forgetpass_code == $this->dgst) {


//updating new password
$sql = "UPDATE register SET password = '$encryptedpass' WHERE email = '$this->email'";


//checking if new password updated
if ($conn->query($sql) === TRUE){
//response if new password updated successfully
return array("status"=>true,"message"=>"New Password updated successfully!");
}else{
//response if new password update fails
return array("status"=>false,"message"=>"New Password update Failed!");
} 

}else{

	return array("status"=>false,"message"=>"Invalid Request: Password Reset Failed!");

}


//end of fuction resetPass
}



//end of class	
}



?>