<?php
class AddClass{


//getting the date difference
function updateROI($email){
include('../../../db.php');
include_once('../../../encryptdecrypt.php');
$date = date('Y-m-d H:i:s');
$current_date = strtotime($date);
$investment_date = "";
$ledgerbal = "";
$investment_plan = "";
$bronze = "bronze";
$silver = "silver";
$gold = "gold";
$diamond = "diamond";
$roi = "";
$new_roi = "";
$roi2dnearestint = "";
$finaltotaldiff = "";
$round_roi = "";
$withdrawn = "";
$act_bal = "";
$database_roi = "";
$main_roi = "";



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

//fetching the required data from the database table
$sql = "SELECT * FROM wallet WHERE investor_email = '$email'";
$result = $conn->query($sql);
while($row = $result->fetch_assoc()){

$investment_date = $row['investment_date'];
$ledgerbal = $row['ledger_bal'];
$investment_plan = $row['plan'];
$withdrawn = $row['withdrawn'];
$database_roi = $row['available_bal'];


}
//calculating the date difference in days
$realinvestment_date = strtotime($investment_date);
$totalSecondsDiff = abs($current_date - $realinvestment_date);
$totalDaysDiff    = $totalSecondsDiff/60/60/24;


//setting the required condition to calculate rate
if ($investment_plan == $bronze) {
	
	$roi = ($ledgerbal * 0.03);

}elseif ($investment_plan == $silver) {
	
	$roi = ($ledgerbal * 0.07);

}elseif ($investment_plan == $gold) {
	
	$roi = ($ledgerbal * 0.12);

}elseif ($investment_plan == $diamond) {
	
	$roi = ($ledgerbal * 0.15);
}else{

return array("status"=>false,"message"=>"Cannot Detect your investment Plan!");
}

//getting the final total diff to make sure it's rate per 7 days
$finaltotaldiff = ($totalDaysDiff/7);

//getting the real roi
$new_roi = ($roi * $finaltotaldiff);

$main_roi = ($new_roi + $database_roi);

//rounding off the final_roi to decimal places
$round_roi = round($main_roi, 2);

//getting the total balance
$act_bal = ($ledgerbal + $round_roi);


//updating new ROI
$sql = "UPDATE wallet SET available_bal = '$round_roi', act_bal = '$act_bal', investment_date = '$date' WHERE investor_email = '$email'";

//checking if new roi updated
if ($conn->query($sql) === TRUE){
//response if new roi updated successfully
return array("status"=>true,"message"=>"New ROI updated successfully!");
}else{
//response if new roi update fails
return array("status"=>false,"message"=>"New ROI update Failed!");
} 






}
//end of function updateROI




//class addclass end curly
}
?>