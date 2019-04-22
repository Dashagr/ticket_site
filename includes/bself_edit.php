<?php
include 'helpers/db.php';

session_start();
$login = $_SESSION['login'];

$new_val = $_GET['new_val'];

$buyer_phone = "buyer_phone";
$buyer_surmame = "buyer_surname";
$buyer_name = "buyer_name";
$buyer_sec_name = "buyer_sec_name";
$buyer_email = "buyer_email";


if ($_GET['var'] == $buyer_phone) {
	$query = "UPDATE `Buyer` SET `buyer_phone`='$new_val' WHERE `login` = '$login'";
} else if ($_GET['var'] == $buyer_surmame) {
	$query = "UPDATE `Buyer` SET `buyer_surname`='$new_val' WHERE `login` = '$login'";
} else if ($_GET['var'] == $buyer_name) {
	$query = "UPDATE `Buyer` SET `buyer_name`='$new_val' WHERE `login` = '$login'";
} else if ($_GET['var'] == $buyer_sec_name) {
	$query = "UPDATE `Buyer` SET `buyer_sec_name`='$new_val' WHERE `login` = '$login'";
} else if ($_GET['var'] == $buyer_email) {
	$query = "UPDATE `Buyer` SET `buyer_email`='$new_val' WHERE `login` = '$login'";
} else if ($_GET['var'] == $status) {
	$query = "UPDATE `Buyer` SET `status`='$new_val' WHERE `login` = '$login'";
} else { echo "Ви нічого не обрали!";}

if (mysqli_query($connection, $query)) {
    echo "Buyer # " . $login . " edited successfully";
}else
{ 
echo 'Fail!';
}

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Buyer # " . $login . " edited successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   header('Location: ' . $_SERVER['HTTP_REFERER']);
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/b_self.php'";
   echo"</script>";
} 

?>