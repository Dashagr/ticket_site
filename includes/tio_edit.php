<?php
include 'db.php';

session_start();
$login = $_SESSION['login'];

$id = $_GET['account_number'];
$new_val = $_GET['new_val'];

$eIDq = mysqli_query($connection, "SELECT `bank_details_empl` FROM `Employee` WHERE `login` = '$login' ");
$eIDarr = mysqli_fetch_assoc($eIDq);
$eID = $eIDarr['bank_details_empl'];

if ($_GET['new_val'] == "в") {
   $query = "UPDATE `Orders` SET `order_status`='в', `bank_details_empl` = '$eID' WHERE `account_number` = '$id'";
    
} else if ($_GET['new_val'] == "з"){ 
   $query = "UPDATE `Orders` SET `order_status`='з', `bank_details_empl` = '$eID' WHERE `account_number` = '$id'";
    
} else if ($_GET['new_val'] == "р"){ 
    $query = "UPDATE `Orders` SET `order_status`='р', `bank_details_empl` = '$eID' WHERE `account_number` = '$id'";
    
} else {    
	 echo "Такого стану статусу немає!";
}


if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('" . $eID . " змінив замовлення №  ".$id."  успішно!')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/tio.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Fail!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/tio.php'";
   echo"</script>";
} 
?>
