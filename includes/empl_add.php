<?php
include 'helpers/db.php';

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
$job = "продавець";
$date = date("y.m.d");

if(strlen($sec_name) == 0) {$sec_name = 'NULL';}
if(strlen($email) == 0) {$email = 'NULL';}
if(strlen($num_of_flat) == 0) {$num_of_flat = 'NULL';}

$hash = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO `Employee`(`bank_details_empl`, `empl_name`, `empl_sec_name`, `empl_surname`, `empl_bday`, `empl_email`, `empl_city`, `empl_street`, `empl_house_num`, `empl_num_of_flat`, `date_of_empl_enlistment`, `salary`, `job`, `login`, `password`)
        VALUES 
        ('$bank_details',
        '$name',
        '$sec_name',
        '$surname',
        '$bday',
        '$email',
        '$city',
        '$street',
        '$house_num',
        '$num_of_flat',
        '$date',
        '1260',
        '$job',
        '$login',
        '$hash'
        );";


if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Employee add successfully')";
    echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/empl.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
  echo "window.location = '../client/views/empl.php'";
   echo"</script>";
}
?>
