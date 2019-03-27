<?php
include 'db.php';

$id_del = $_GET['account_number'];


$query1 = "DELETE FROM `Ticket_in_Order` WHERE `account_number` = '$id_del'";
$query2 = "DELETE FROM `Orders` WHERE `account_number` = '$id_del'";

if (mysqli_query($connection, $query1)) {
     echo "<script language='javascript'>";
   echo "alert('Tickets # " . $id_del . " deleted successfully!')";
   echo"</script>";
        if (mysqli_query($connection, $query2)) {
           echo "<script language='javascript'>";
           echo "alert('Orders # " . $id_del . " deleted successfully!')";
           echo"</script>";
           echo "<script  type='text/javascript'>";
           echo "window.location = '../empl/tio.php'";
           echo"</script>";
        } else if (mysqli_query($connection, $query2)) {
           echo "<script language='javascript'>";
           echo "alert('Orders # " . $id_del . " didn`t deleted successfully!')";
           echo"</script>";
           echo "<script  type='text/javascript'>";
           echo "window.location = '../empl/tio.php'";
           echo"</script>";
}else { 
   echo "<script language='javascript'>";
   echo "alert('Fail!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/tio.php'";
   echo"</script>";
} }
?>