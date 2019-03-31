<?php
include 'helpers/db.php';

$id_del = $_GET['id_del'];

$query = "DELETE FROM `Delivery` WHERE `delivery_code` = '$id_del'";

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Delivery # " . $artist_name . " deleted successfully')";
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