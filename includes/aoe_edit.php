<?php
include 'db.php';

$aid = $_GET['a_id'];
$eid = $_GET['e_id'];
$new_val = $_GET['new_val'];

$artist_name = "artist_name";
$event_code = "event_code";

if ($_GET['var'] == $artist_name) {
	$query = "UPDATE `Artist_On_Event` SET `artist_name`='$new_val' WHERE `artist_name` = '$aid' AND `event_code` = '$eid' ";
} else if ($_GET['var'] == $event_code) {
	$query = "UPDATE `Artist_On_Event` SET `event_code`='$new_val' WHERE `artist_name` = '$aid' AND `event_code` = '$eid'";
} else { echo "Ви нічого не обрали!";}

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Artist_On_Event # " . $aid . $eid . "edited successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/aoe.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/aoe.php'";
   echo"</script>";
} 
?>