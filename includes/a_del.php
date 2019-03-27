<?php
include 'db.php';

$id_del = $_GET['id_del'];

$query = "DELETE FROM `Artist` WHERE `artist_name` = '$id_del'";

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert(' Artist # " . $artist_name . " deleted successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/artist.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/artist.php'";
   echo"</script>";
} 
?>