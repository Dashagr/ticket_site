<?php
include 'helpers/db.php';

$id = $_GET['id'];
$new_val = $_GET['new_val'];

$artist_name = "artist_name";
$processing = "processing";
$translation = "translation";
$album_title = "album_title";

if ($_GET['var'] == $artist_name) {
	$query = "UPDATE `Artist` SET `artist_name`='$new_val' WHERE `artist_name` = '$id'";
} else if ($_GET['var'] == $processing) {
	$query = "UPDATE `Artist` SET `processing`='$new_val' WHERE `artist_name` = '$id'";
} else if ($_GET['var'] == $translation) {
	$query = "UPDATE `Artist` SET `translation`='$new_val' WHERE `artist_name` = '$id'";
} else if ($_GET['var'] == $album_title) {
	$query = "UPDATE `Artist` SET `album_title`='$new_val' WHERE `artist_name` = '$id'";
} else { echo "Ви нічого не обрали!";}

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert(' Artist # " . $artist_name . " edited successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/artist.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/artist.php'";
   echo"</script>";
} 

?>