<?php
include 'helpers/db.php';

$id = $_GET['id'];
$new_val = $_GET['new_val'];

$bank_details = "bank_details";
$name = "name";
$sec_name = "sec_name";
$surname = "surname";
$email = "email";
$city = "city";
$street = "street";
$house_num = "house_num";
$num_of_flat = "num_of_flat";
$bday = "bday";

if ($_GET['var'] == $bank_details) {
	$query = "UPDATE `Employee` SET `bank_details_empl`='$new_val' WHERE `bank_details_empl` = '$id'";
} else if ($_GET['var'] == $name) {
	$query = "UPDATE `Employee` SET `empl_name`='$new_val' WHERE `bank_details_empl` = '$id'";
} else if ($_GET['var'] == $sec_name) {
	$query = "UPDATE `Employee` SET `empl_sec_name`='$new_val' WHERE `bank_details_empl` = '$id'";
} else if ($_GET['var'] == $surname) {
	$query = "UPDATE `Employee` SET `empl_surname`='$new_val' WHERE `bank_details_empl` = '$id'";
} else if ($_GET['var'] == $bday) {
	$query = "UPDATE `Employee` SET `empl_bday`='$new_val' WHERE `bank_details_empl` = '$id'";
} else if ($_GET['var'] == $email) {
	$query = "UPDATE `Employee` SET `empl_email`='$new_val' WHERE `bank_details_empl` = '$id'";
} else if ($_GET['var'] == $city) {
	$query = "UPDATE `Employee` SET `empl_city`='$new_val' WHERE `bank_details_empl` = '$id'";
} else if ($_GET['var'] == $street) {
	$query = "UPDATE `Employee` SET `empl_street`='$new_val' WHERE `bank_details_empl` = '$id'";
} else if ($_GET['var'] == $house_num) {
	$query = "UPDATE `Employee` SET `empl_house_num`='$new_val' WHERE `bank_details_empl` = '$id'";
} else if ($_GET['var'] == $num_of_flat) {
	$query = "UPDATE `Employee` SET `empl_num_of_flat`='$new_val' WHERE `bank_details_empl` = '$id'";
} else { echo "Ви нічого не обрали!";}

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Employee # " . $id . "edited successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/empl.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/empl.php'";
   echo"</script>";
} 

?>