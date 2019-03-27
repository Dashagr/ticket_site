<?php
include 'db.php';


$ticket_code = $_GET['ticket_code'];
$new_val = $_GET['new_val'];

$price = "price";
$zona = "zona";
$row = "row";
$place = "place";
$event_code = "event_code";

if ($_GET['var'] == $price) {
	$query = "UPDATE `Ticket` SET `price`='$new_val' WHERE `ticket_code` = '$ticket_code'";
} else if ($_GET['var'] == $zona) {
	$query = "UPDATE `Ticket` SET `zona`='$new_val' WHERE `ticket_code` = '$ticket_code'";
} else if ($_GET['var'] == $row) {
	$query = "UPDATE `Ticket` SET `row`='$new_val' WHERE `ticket_code` = '$ticket_code'";
} else if ($_GET['var'] == $place) {
	$query = "UPDATE `Ticket` SET `place`='$new_val' WHERE `ticket_code` = '$ticket_code'";
} else if ($_GET['var'] == $event_code) {
	$query = "UPDATE `Ticket` SET `event_code`='$new_val' WHERE `ticket_code` = '$ticket_code'";
} else { echo "Ви нічого не обрали!";}

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Ticket # " . $ticket_code . "edited successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/ticket.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Fail!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/ticket.php'";
   echo"</script>";
} 

?>