<?php
class UserDataClass{

public $array = [];

function fetchUserData($email){

include ('../../db.php');
include('../../encryptdecrypt.php');
$passkey = "firstfullsite";


if(!array_key_exists("Authorization",getallheaders())){
echo json_encode(array("status"=> false,"code"=>401,"message"=>"UnAUthorized","data"=>array("msg"=>"Unauthorized")));
exit();

}

$token = getallheaders()["Authorization"];

if(getallheaders()["Authorization"] == ""){
echo json_encode(array("status"=> false,"code"=>401,"message"=>"UnAUthorized","data"=>array("msg"=>"Unauthorized")));
exit();

}

$encryptDecrypt = new EncryptDecrypt($token);
//echo $token;
//echo "\r\n";
//$maintoken = substr($token, 7);
//echo $maintoken;
//echo "\r\n";
$decryptedToken = $encryptDecrypt->decrypt($token, $passkey);
//echo $decryptedToken;

$sql = "SELECT * FROM register WHERE email = '$decryptedToken'";
$result = $conn->query($sql);
if ($result->num_rows == 0){
echo json_encode(array("status"=> false,"code"=>401,"message"=>"UnAUthorized token","data"=>array("msg"=>"Unauthorized")));

exit();
}



$sql = "SELECT * FROM register WHERE email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ) {

while($row = mysqli_fetch_assoc($result)) {
    
        $this->array["first_name"] = $row["first_name"];
        $this->array["last_name"] = $row["last_name"];
        $this->array["email"] = $row["email"];
        $this->array["phone"] = $row["phone"];
        $this->array["referral_id"] = $row["referral_id"];
        $this->array["country"] = $row["country"];
        $this->array["token"] = $token;
       // $array = $row;
  }
return $this->array;

}else{

  return null;
}


}
}
?>