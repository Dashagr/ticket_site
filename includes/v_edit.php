<?php
include 'helpers/db.php';

$id = $_GET['id'];
$new_val = $_GET['new_val'];

$institution_name = "institution_name";
$internal_phone = "internal_phone";
$authority_sec_name = "authority_sec_name";
$authority_name = "authority_name";
$authority_surname = "authority_surname";
$venue_street = "venue_street";
$venue_building_num = "venue_building_num";
$number_of_zones = "number_of_zones";
$description = "description";

if ($_GET['var'] == $institution_name) {
	$query = "UPDATE `Venue` SET `institution_name`='$new_val' WHERE `institution_name` = '$id'";
} else if ($_GET['var'] == $internal_phone) {
	$query = "UPDATE `Venue` SET `internal_phone`='$new_val' WHERE `institution_name` = '$id'";
} else if ($_GET['var'] == $authority_sec_name) {
	$query = "UPDATE `Venue` SET `authority_sec_name`='$new_val' WHERE `institution_name` = '$id'";
} else if ($_GET['var'] == $authority_name) {
	$query = "UPDATE `Venue` SET `authority_name`='$new_val' WHERE `institution_name` = '$id'";
} else if ($_GET['var'] == $authority_surname) {
	$query = "UPDATE `Venue` SET `authority_surname`='$new_val' WHERE `institution_name` = '$id'";
} else if ($_GET['var'] == $venue_street) {
	$query = "UPDATE `Venue` SET `venue_street`='$new_val' WHERE `institution_name` = '$id'";
} else if ($_GET['var'] == $venue_building_num) {
	$query = "UPDATE `Venue` SET `venue_building_num`='$new_val' WHERE `institution_name` = '$id'";
} else if ($_GET['var'] == $number_of_zones) {
	$query = "UPDATE `Venue` SET `number_of_zones`='$new_val' WHERE `institution_name` = '$id'";
} else if ($_GET['var'] == $description) {
	$query = "UPDATE `Venue` SET `description`='$new_val' WHERE `institution_name` = '$id'";
} else { echo "Ви нічого не обрали!";}

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Venue # " . $id . "edited successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/venue.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/venue.php'";
   echo"</script>";
} 

?>


