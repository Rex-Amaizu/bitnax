<?php
class updateAdminProfileClass{

function updateAdminProfile($email,$btc_address,$eth_address,$bch_address,$usdt_address){
include('../../db.php');

//updating wallet addresses
$sql = "UPDATE wallet SET btc_address = '$btc_address', eth_address = '$eth_address', bch_address = '$bch_address', usdt_address = '$usdt_address' WHERE investor_email = '$email'";

if ($conn->query($sql) === TRUE){

return array("status"=>true,"message"=>"Admin Profile Updated!");	
}else{

return array("status"=>false,"message"=>"Admin Profile Update Failed!!: Contact Hackofiz");
}




}
//end of function
}
//end of class
?>