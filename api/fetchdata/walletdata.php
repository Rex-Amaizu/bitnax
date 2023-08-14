<?php

class walletDataClass{

public $array = [];
function pullWalletData($email){
include ('../../db.php');
include_once('../../encryptdecrypt.php');



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


$sql = "SELECT * FROM wallet WHERE investor_email = '$decryptedToken'";
$result = $conn->query($sql);
if ($result->num_rows == 0){
echo json_encode(array("status"=> false,"code"=>401,"message"=>"UnAUthorized token","data"=>array("msg"=>"Unauthorized")));

exit();
}

$sql = "SELECT * FROM wallet WHERE investor_email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0){
while($row = mysqli_fetch_assoc($result)) {
        //$id = $row['id'];
        // printf ("%s (%s)\n", $row["id"], $row["first_name"], $row["last_name"], $row["dob"], $row["email"], $row["phone"], $row["dp_url"], $row["gender"], $row["address"], $row["city"], $row["state"], $row["zip"], $row["country"]);
        $this->array["investor_id"] = $row["investor_id"];
        $this->array["investor_email"] = $row["investor_email"];
        $this->array["btc_address"] = $row["btc_address"];
        $this->array["eth_address"] = $row["eth_address"];
        $this->array["bch_address"] = $row["bch_address"];
        $this->array["usdt_address"] = $row["usdt_address"];
        $this->array["ledger_bal"] = $row["ledger_bal"];
        $this->array["available_bal"] = $row["available_bal"];
        $this->array["act_bal"] = $row["act_bal"];
        $this->array["reg_date"] = $row["reg_date"];
       // $array = $row;
  

}

return $this->array;



}else{


    return null;
 }

}

}

?>