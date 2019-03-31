<?php
include 'helpers/db.php';

$aid_del = $_GET['aid_del'];
$eid_del = $_GET['eid_del'];

$query = "DELETE FROM `Artist_On_Event` WHERE `artist_name` = '$aid_del' AND `event_code` = '$eid_del' ";

if (mysqli_query($connection, $query)) {
    echo "Artist_On_Event # " . $aid_del . " , " . $eid_del . " deleted successfully";
}else
{ 
echo 'Fail!';
}

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Artist_On_Event # " . $aid_del . " , " . $eid_del . " deleted successfully')";
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