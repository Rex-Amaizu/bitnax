<?php
class withdrawalClass{

function updateWithdrawal($investor_email,$amount,$status_type){
include('../../../db.php');
$investor_id = "";
$ledger_bal = "";
$new_ledger_bal = "";
$act_bal = "";
$roi = "";

$sql = "SELECT * FROM wallet WHERE investor_email  = '$investor_email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

$ledger_bal = $row['ledger_bal'];
$investor_id = $row['investor_id'];
$roi = $row['available_bal'];

  }

  if($amount > $ledger_bal){
  	return array("status"=>false,"message"=>"Insufficient Balance!");
exit();
  }

if ($amount[0] == '-'){

return array("status"=>false,"message"=>"You Cannot withdraw A Negative Amount");
exit();
}
//calculating new_ledger_bal
$new_ledger_bal = ($ledger_bal - $amount);
//calculating new_act_bal
$act_bal = ($new_ledger_bal + $roi);
//updating new available_balance
$sql = "UPDATE wallet SET ledger_bal='$new_ledger_bal', act_bal='$act_bal' WHERE investor_email='$investor_email'";
//checking if updated successfully
if ($conn->query($sql) === TRUE){

//action if withdrawal updated
	$sql = "INSERT INTO transactions (client_id, client_email, amount, status)
VALUES ('$investor_id', '$investor_email', '$amount', '$status_type')";
//checking if transactions details is updated successfully
if ($conn->query($sql) === TRUE){

//response if inserting transaction details successful
return array("status"=>true,"message"=>"Withdrawal And Transaction Details Updated!");
}else{
//response if inserting transaction details fails
return array("status"=>false,"message"=>"Transaction Update Failed!");
}
}else{

	return array("status"=>false,"message"=>"New Roi Not Updated!");
}


}
}
?>