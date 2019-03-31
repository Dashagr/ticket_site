<?php
include 'helpers/db.php';

$id = $_GET['id'];
$new_val = $_GET['new_val'];

$delivery_code = "delivery_code";
$del_street = "del_street";
$del_num_of_building = "del_num_of_building";
$del_num_of_flat = "del_num_of_flat";
$desired_date = "desired_date";
$desired_time = "desired_time";
$delivery_Status = "delivery_Status";
$bank_details_courier = "bank_details_courier";
$account_number = "account_number";

if ($_GET['var'] == $artist_name) {
	$query = "UPDATE `Delivery` SET `delivery_code`='$new_val' WHERE `delivery_code` = '$id'";
} else if ($_GET['var'] == $del_street) {
	$query = "UPDATE `Delivery` SET `del_street`='$new_val' WHERE `delivery_code` = '$id'";
} else if ($_GET['var'] == $del_num_of_building) {
	$query = "UPDATE `Delivery` SET `del_num_of_building`='$new_val' WHERE `delivery_code` = '$id'";
} else if ($_GET['var'] == $del_num_of_flat) {
	$query = "UPDATE `Delivery` SET `del_num_of_flat`='$new_val' WHERE `delivery_code` = '$id'";
} else if ($_GET['var'] == $desired_date) {
	$query = "UPDATE `Delivery` SET `desired_date`='$new_val' WHERE `delivery_code` = '$id'";
} else if ($_GET['var'] == $desired_time) {
	$query = "UPDATE `Delivery` SET `desired_time`='$new_val' WHERE `delivery_code` = '$id'";
} else if ($_GET['var'] == $delivery_Status) {
	$query = "UPDATE `Delivery` SET `delivery_Status`='$new_val' WHERE `delivery_code` = '$id'";
} else if ($_GET['var'] == $bank_details_courier) {
	$query = "UPDATE `Delivery` SET `bank_details_courier`='$new_val' WHERE `delivery_code` = '$id'";
} else if ($_GET['var'] == $account_number) {
	$query = "UPDATE `Delivery` SET `account_number`='$new_val' WHERE `delivery_code` = '$id'";
} else { echo "Ви нічого не обрали!";}

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Delivery # " . $id . "edited successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/delivery.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/delivery.php'";
   echo"</script>";
} 

?>