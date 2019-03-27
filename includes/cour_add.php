<?php
include 'db.php';

$type = $_GET['var'];

$bank_details = $_GET['bank_details'];
$name = $_GET['name'];
$sec_name = $_GET['sec_name'];
$surname = $_GET['surname'];
$email = $_GET['email'];
$city = $_GET['city'];
$street = $_GET['street'];
$house_num = $_GET['house_num'];
$num_of_flat = $_GET['num_of_flat'];
$bday = $_GET['bday'];
$login = $_GET['login'];
$password = $_GET['password'];
$salaryC = "1000";
$salaryE = "1260";

$date = date("y.m.d");

if(strlen($sec_name) == 0) {$sec_name = 'NULL';}
if(strlen($email) == 0) {$email = 'NULL';}
if(strlen($num_of_flat) == 0) {$num_of_flat = 'NULL';}

$hash = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO `Courier`(`bank_details_courier`, `courier_name`, `courier_sec_name`, `courier_surname`, `courier_email`, `courier_city`, `courier_street`, `courier_house_num`, `courier_num_of_flat`, `date_of_courier enlistment`, `salary`, `courier_bday`, `login`, `password`)
        VALUES 
        ('$bank_details',
        '$name',
        '$sec_name',
        '$surname',
        '$email',
        '$city',
        '$street',
        '$house_num',
        '$num_of_flat',
        '$date',
        '1000',
        '$bday',
        '$login',
        '$hash'
        )";


if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Delivery add successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/empl.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/empl.php'";
   echo"</script>";
}
?>
