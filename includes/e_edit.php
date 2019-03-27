<?php
include 'db.php';

$event_code = $_GET['event_code'];
$var = $_GET['var'];
$new_val = $_GET['new_val'];

$id = "event_code";
$event_name = "event_name";
$category = "category";
$genre = "genre";
$data = "data";
$time = "time";
$current_num_tickets = "current_num_tickets";
$summary_num_tickets = "summary_num_tickets";
$min_price = "min_price";
$institution = "institution";

$date_today = date("y.m.d");

if (strtotime($data) <= strtotime($date_today)){
    echo "Wrong date!";
}

if ($_GET['var'] == $event_name) {
	$query = "UPDATE `Event` SET `event_name`='$new_val' WHERE `event_code` = '$event_code'";
} else if ($_GET['var'] == $id) {
	$query = "UPDATE `Event` SET `event_code`='$new_val' WHERE `event_code` = '$event_code'";
} else if ($_GET['var'] == $category) {
	$query = "UPDATE `Event` SET `category`='$new_val' WHERE `event_code` = '$event_code'";
} else if ($_GET['var'] == $genre) {
	$query = "UPDATE `Event` SET `genre`='$new_val' WHERE `event_code` = '$event_code'";
} else if ($_GET['var'] == $data) {
	$query = "UPDATE `Event` SET `data`='$new_val' WHERE `event_code` = '$event_code'";
} else if ($_GET['var'] == $time) {
	$query = "UPDATE `Event` SET `time`='$new_val' WHERE `event_code` = '$event_code'";
} else if ($_GET['var'] == $current_num_tickets) {
	$query = "UPDATE `Event` SET `current_num_tickets`='$new_val' WHERE `event_code` = '$event_code'";
} else if ($_GET['var'] == $summary_num_tickets) {
	$query = "UPDATE `Event` SET `summary_num_tickets`='$new_val' WHERE `event_code` = '$event_code'";
} else if ($_GET['var'] == $min_price) {
	$query = "UPDATE `Event` SET `min_price`='$new_val' WHERE `event_code` = '$event_code'";
} else if ($_GET['var'] == $institution) {
	$query = "UPDATE `Event` SET `institution`='$new_val' WHERE `event_code` = '$event_code'";
} else { echo "Ви нічого не обрали!";}

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Event # " . $event_code . "edited successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/event.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Fail!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/event.php'";
   echo"</script>";
} 

?>