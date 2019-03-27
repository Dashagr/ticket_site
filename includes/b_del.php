<?php
include 'db.php';

$id_del = $_GET['id_del'];

$query = "DELETE FROM `buyer` WHERE `buyer_phone` = '$id_del' ";

if (mysqli_query($connection, $query)) {
    echo "buyer # " . $id_del . " deleted successfully";
}else
{ 
echo 'Fail!';
}

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('buyer # " . $id_del . " deleted successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/buyer.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/buyer.php'";
   echo"</script>";
} 
?>