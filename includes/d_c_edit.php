<?php
include 'helpers/db.php';

session_start();
$login = $_SESSION['login'];

$id = $_GET['id'];
$new_val = $_GET['new_val'];

$cIDq = mysqli_query($connection, "SELECT `bank_details_courier` FROM `courier` WHERE `login` = '$login' ");
$cIDarr = mysqli_fetch_assoc($cIDq);
$cID = $cIDarr['bank_details_courier'];
    
    
if ($_GET['new_val'] == "0") {
   $query = "UPDATE `Delivery` SET `delivery_Status`='0', `bank_details_courier`='$cID' WHERE `delivery_code` = '$id'";
} else if ($_GET['new_val'] == "1"){ 
   $query = "UPDATE `Delivery` SET `delivery_Status`='1', `bank_details_courier`='$cID' WHERE `delivery_code` = '$id'"; 
} else {    
	 echo "Такого стану статусу немає!";
}

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert(' " . $cID . " edit delivery status # " . $id . "successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/del_c.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/del_c.php'";
   echo"</script>";
} 

?>