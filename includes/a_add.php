<?php
include 'helpers/db.php';

$artist_name = $_POST['artist_name'];
$processing = $_POST['processing'];
$translation = $_POST['translation'];
$album_title = $_POST['album_title'];

if(strlen($processing) == 0) {$processing = '';}
if(strlen($translation) == 0) {$translation = '';}

$query = "INSERT INTO `Artist`
(`artist_name`, 
`processing`, 
`translation`, 
`album_title`
) 
VALUES 
('$artist_name',
'$processing',
'$translation',
'$album_title'
);";

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert(' Артист  ".$artist_name."  успішно доданий!')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/artist.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так з даними!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/artist.php'";
   echo"</script>";
} 
?>