<?php
include 'helpers/db.php';

$event_code = $_GET['event_code'];

$query = "DELETE FROM `Event` WHERE `event_code` = '$event_code'";

if (mysqli_query($connection, $query)) {
    echo "Event # " . $event_code . "deleted successfully";
}else
{ 
echo 'Fail!';
}

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Event # " . $event_code . "deleted successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/event.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/event.php'";
   echo"</script>";
} 
?>