<?php
class topUpClass{

function confirmTopUp($email,$amount,$status_type){
include ('../../../db.php');
$ledgerbal = "";
$act_bal = "";
$roi = "";
$plan = "";
$client_id = "";
$bronze = "bronze";
$silver = "silver";
$gold = "gold";
$diamond = "diamond";


	//fetching the required data from the database table
$sql = "SELECT * FROM wallet WHERE investor_email = '$email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){

$ledgerbal = $row['ledger_bal'];
$client_id = $row['investor_id'];
$roi = $row['available_bal'];

}

$totalbal = ($ledgerbal + $amount);
$act_bal = ($totalbal + $available_bal);

if ($totalbal < 10000) {

$plan = $bronze;
}elseif ($totalbal >= 10000 AND ($totalbal < 20000)) {

$plan = $silver;
}elseif ($totalbal >= 20000 AND ($totalbal < 30000)) {

$plan = $gold;
}elseif ($totalbal >= 30000) {

$plan = $diamond;
}


//Updating new balance and new plan
//updating new ROI
$sql = "UPDATE wallet SET ledger_bal = '$totalbal', plan = '$plan', act_bal = '$act_bal' WHERE investor_email = '$email'";

//checking if new details updated
if ($conn->query($sql) === TRUE){
//response if new details updated successfully
$sql = "INSERT INTO transactions (client_id, client_email, amount, status)
VALUES ('$client_id', '$email', '$amount', '$status_type')";

//checking if transaction details inserted
if ($conn->query($sql) === TRUE){

	return array("status"=>true,"message"=>"Top Up updated successfully!");

}else{

	return array("status"=>false,"message"=>"Top Up update Failed at transactions!");

}
}else{
//response if new details update fails
return array("status"=>false,"message"=>"Top Up update Failed!");
} 


//end of function confirmTopUp	
}





//end of class	
}



?>