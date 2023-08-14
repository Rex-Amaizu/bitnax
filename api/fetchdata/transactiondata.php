<?php

class transactionDataClass{

function pullTransactionData($email){
include ('../../db.php');
include_once('../../encryptdecrypt.php');
$parentArray = [];


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

$decryptedToken = $encryptDecrypt->decrypt($token, 'firstfullsite');

$sql = "SELECT * FROM transactions WHERE client_email = '$decryptedToken'";
$result = $conn->query($sql);
if ($result->num_rows == 0){
echo json_encode(array("status"=> false,"code"=>401,"message"=>"UnAUthorized token","data"=>array("msg"=>"Unauthorized")));

exit();
}
$sql = "SELECT * FROM transactions WHERE client_email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
while($row = mysqli_fetch_assoc($result)) {
		//$id = $row['id'];
		// printf ("%s (%s)\n", $row["id"], $row["first_name"], $row["last_name"], $row["dob"], $row["email"], $row["phone"], $row["dp_url"], $row["gender"], $row["address"], $row["city"], $row["state"], $row["zip"], $row["country"]);
        $parentArray[] = $row;
        
       // $array = $row;
  

}

return $parentArray;
}
}

}

?>