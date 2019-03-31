<?php
include 'helpers/db.php';

$institution_name = $_GET['id_del'];

$query = "DELETE FROM `Venue` WHERE `institution_name` = '$institution_name'";

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Venue # " . $institution_name . " deleted successfully')";
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