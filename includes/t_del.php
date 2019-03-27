<?php
include 'db.php';

$ticket_code = $_GET['ticket_code'];

$query = "DELETE FROM `Ticket` WHERE `ticket_code` = '$ticket_code'";

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Ticket # " . $ticket_code . "deleted successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/ticket.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Fail!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/ticket.php'";
   echo"</script>";
} 
?>