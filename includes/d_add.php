<?php
include 'helpers/db.php';

$del_street = $_POST['del_street'];
$del_num_of_building = $_POST['del_num_of_building'];
$del_num_of_flat = $_POST['del_num_of_flat'];
$desired_date = $_POST['desired_date'];
$desired_time = $_POST['desired_time'];
$delivery_Status = $_POST['delivery_Status'];
$bank_details_courier = $_POST['bank_details_courier'];
$account_number = $_POST['account_number'];

$date_today = date("y.m.d");

if (strtotime($desired_date) < strtotime($date_today)){
    echo "Wrong date!";
}

$query = "INSERT INTO `Delivery`
(`del_street`, 
`del_num_of_building`, 
`del_num_of_flat`, 
`desired_date`, 
`desired_time`, 
`delivery_Status`, 
`bank_details_courier`, 
`account_number`
) 
VALUES 
('$del_street',
'$del_num_of_building',
'$del_num_of_flat',
'$desired_date',
'$desired_time',
'$delivery_Status',
'$bank_details_courier',
'$account_number'
);";

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Delivery add successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/delivery.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/delivery.php'";
   echo"</script>";
} 
?>
