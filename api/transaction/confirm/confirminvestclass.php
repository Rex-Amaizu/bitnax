<?php

class confirmInvestment{

private $investor_email = "";
private $amount = "";
private $status_type = "";
private $plan = "";

public function __construct($investor_email,$amount,$status_type,$plan){

$this->investor_email = $investor_email;
$this->amount = $amount;
$this->status_type = $status_type;
$this->plan = $plan;

}


//updating referrer bonus
function updateReferrerBonus(){
include('../../../db.php');
$referral_id = "";
$referrer_balance = "";
$referral_bonus = "";
$referrer_new_balance = "";
$act_bal = "";
$roi = "";

//getting the referral ID
$sql = "SELECT * FROM register WHERE email  = '$this->investor_email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

$referral_id = $row['referral_id'];

  }

//checking if there is a referral ID
if (empty($referral_id)) {
	return array("status"=>true,"message"=>"New Investment Details Updated; No referrer found!");
exit();
}


//getting the referrer balance
$sql = "SELECT * FROM wallet WHERE investor_id  = '$referral_id'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

$referrer_balance = $row['ledger_bal'];
$roi = $row['available_bal'];

  }

//calculating the referral_bonus

$referral_bonus = ($this->amount * 0.05);

//calculating referrer's new balance
$referrer_new_balance = ($referrer_balance + $referral_bonus); 
$act_bal = ($referrer_new_balance + $roi); 

//updating referrer new balance
$sql = "UPDATE wallet SET ledger_bal = '$referrer_new_balance', act_bal = '$act_bal' WHERE investor_id = '$referral_id'";

if ($conn->query($sql) === TRUE){

//response if referrer_new_balance updated successfully
return array("status"=>true,"message"=>"New Investment Updated and Referrer New Balance Updated!");
}else{
//response if referrer_new_balance not updated successfully
return array("status"=>false,"message"=>"Referrer New Balance Update Failed!");
}

}
//end of fucntion updateReferrerBonus



//generating new Investor ID and inserting all details for new user
function generateIDandUpdateNewDetails(){
include('../../../db.php');
$date = date('Y-m-d H:i:s');
$withdrawn = "0";

//generating ID
$charactersacn = '0123456789MBACDEF';
 $client_id = '';
 $max = strlen($charactersacn) - 1;
 for ($i = 0; $i < 8; $i++) {
      $client_id .= $charactersacn[mt_rand(0, $max)];
}
//confirming if generated ID already exist
$sql = "SELECT * FROM wallet WHERE investor_id = '$client_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0 ){

  return $this->generateIDandUpdateNewDetails();
}
//Updating investor details for wallet
$sql = "UPDATE wallet SET investor_id = '$client_id', plan = '$this->plan', ledger_bal = '$this->amount', act_bal = '$this->amount', investment_date = '$date', withdrawn = '$withdrawn' WHERE investor_email = '$this->investor_email'";

//checking if updating wallet has successful
if ($conn->query($sql) === TRUE) {
  
$sql = "INSERT INTO transactions (client_id, client_email, amount, status)
VALUES ('$client_id', '$this->investor_email', '$this->amount', '$this->status_type')";

//checking if transactions details has updated successfully
if ($conn->query($sql) === TRUE){

//response if inserting transaction details successful
return $this->updateReferrerBonus();
}else{
//response if inserting transaction details fails
return array("status"=>false,"message"=>"Transaction Update Failed!");
}

} else {
//response if updating wallet failed
echo "Error: " . $sql . "<br>" . $conn->error;
return array("status"=>false,"message"=>"Updating Wallet Failed!");
  
}

//end curly bracket for function generateIDandInsertFreshDetails
}
//end of function generateIDandUpdateNewDetails.


//updating balance for existing investor
function updateWalletAndInsertTransactions(){
include('../../../db.php');
$balance = "";
$new_balance = "";
$existing_id = "";
$roi = "";
$act_bal = "";

$sql = "SELECT * FROM wallet WHERE investor_email  = '$this->investor_email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()) {

$balance = $row['ledger_bal'];
$existing_id = $row['investor_id'];
$roi = $row['available_bal'];

  }
//calculating new balance
$new_balance = ($balance + $this->amount);
$act_bal = ($new_balance + $roi);
//echo $new_balance;
//updating wallet new balance
$sql = "UPDATE wallet SET ledger_bal='$new_balance', act_bal='$act_bal' WHERE investor_email='$this->investor_email'";

//checking if balance updated
if ($conn->query($sql) === TRUE) {
//inserting into transactions	
  $sql = "INSERT INTO transactions (client_id, client_email, amount, status)
VALUES ('$existing_id', '$this->investor_email', '$this->amount', '$this->status_type')";

//checking if transaction details updated
if ($conn->query($sql) === TRUE){
//response if transaction details updated successfully
return $this->updateReferrerBonus();
}else
//response if transaction details fails
return array("status"=>false,"message"=>"Existing Investor Transaction Update Failed!");
} else {
//response if wallet not updated successfully
return array("status"=>false,"message"=>"Updating Balance Failed!");
  //echo "Error updating record: " . $conn->error;
}


}
//end of updateWalletAndInsertTransactions.

//checking if it's a new user
function checkInvestor(){
include('../../../db.php');
$checkbalance = "";

$sql = "SELECT * FROM wallet WHERE investor_email = '$this->investor_email'";
$result = $conn->query($sql);
if($result->num_rows == 0){

return array("status"=>false,"message"=>"Invalid User!");
exit();
}

$sql = "SELECT * FROM wallet WHERE investor_email = '$this->investor_email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){

$checkbalance = $row['ledger_bal'];

}

if ($checkbalance == 0) {
	
return $this->generateIDandUpdateNewDetails();
}else{

return $this->updateWalletAndInsertTransactions();
}

 


}
//end of checking if it's a new user
}
?>