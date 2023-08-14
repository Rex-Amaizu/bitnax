<?php
class updateUserProfileClass{

function updateUserProfile($email,$phone,$btc_address,$eth_address,$bch_address, $usdt_address){
include('../../db.php');

//updating phone number on register table
$sql = "UPDATE register SET phone = '$phone' WHERE email = '$email'";

if ($conn->query($sql) === TRUE){

//updating wallet addresses
$sql = "UPDATE wallet SET btc_address = '$btc_address', eth_address = '$eth_address', bch_address = '$bch_address', usdt_address = '$usdt_address' WHERE investor_email = '$email'";

if ($conn->query($sql) === TRUE){

return array("status"=>true,"message"=>"User Profile Updated!");	
}else{

return array("status"=>false,"message"=>"User Profile Update Failed!!: Contact Support@bittrada.com");
}
}else{
//response if referrer_new_balance not updated successfully
return array("status"=>false,"message"=>"User Profile Update Failed!: Contact Support@bittrada.com");
}



}
//end of function
}
//end of class
?>