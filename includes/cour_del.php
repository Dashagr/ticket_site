<?php
include 'db.php';

$id_del = $_GET['id_del'];

$query = "DELETE FROM `Courier` WHERE `bank_details_courier` = '$id_del'";

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Courier # " . $artist_name . " deleted successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/delivery.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/delivery.php'";
   echo"</script>";
} 
?>