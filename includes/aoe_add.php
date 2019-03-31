<?php
include 'helpers/db.php';

$artist_name = $_POST['artist_name'];
$event_code = $_POST['event_code'];

$query = "INSERT INTO `Artist_On_Event`
(`artist_name`, 
`event_code`
) 
VALUES 
('$artist_name',
'$event_code'
);";
 

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('successfully! ')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/aoe.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/aoe.php'";
   echo"</script>";
} 
?>