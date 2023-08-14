<?php
class withdrawalClass{

function updateWithdrawal($investor_email,$amount,$status_type){
include('../../../db.php');
$available_bal = "";
$new_available_bal = "";
$ledger_bal = "";
$act_bal = "";
$investor_id = "";
$withdrawn = "";
$amount_withdrawn = "";

$sql = "SELECT * FROM wallet WHERE investor_email  = '$investor_email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

$available_bal = $row['available_bal'];
$investor_id = $row['investor_id'];
$withdrawn = $row['withdrawn'];
$ledger_bal = $row['ledger_bal'];

  }

  if($amount > $available_bal){
  	return array("status"=>false,"message"=>"Insufficient Balance!");
exit();
  }

if ($amount[0] == '-'){

return array("status"=>false,"message"=>"You Cannot withdraw A Negative Amount");
exit();
}
//calculating withdrawn new_roi
$amount_withdrawn = ($withdrawn + $amount);
//calculating new_roi
$new_available_bal = ($available_bal - $amount);
//calculating new act_bal
$act_bal = ($ledger_bal + $new_available_bal);
//updating new available_balance
$sql = "UPDATE wallet SET withdrawn='$amount_withdrawn', act_bal='$act_bal', available_bal='$new_available_bal' WHERE investor_email='$investor_email'";
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