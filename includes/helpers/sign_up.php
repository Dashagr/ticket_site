<?php
include '../../client/views/header.php';
include 'db.php';

$phone = $_POST['phone'];
$surname = $_POST['surname'];
$name = $_POST['name'];
$secname = $_POST['secname'];
$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

if($login = "SELECT`login` FROM `Buyer`"){ 
    echo "<script language='javascript'>";
   echo "alert('Такий логін уже є')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../sign.php'";
   echo"</script>";
}

if(strlen($secname) == 0) {$secname = 'NULL';}
if(strlen($email) == 0) {$email = 'NULL';}

$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO `Buyer` 
(`buyer_phone`,
`buyer_surname`, 
`buyer_name`, 
`buyer_sec_name`, 
`buyer_email`, 
`status`,
`login`, 
`password`
) 
VALUES 
('$phone',
'$surname',
'$name',
'$secname', 
'$email',
'0',
'$login',
'$hash'
)";

if (mysqli_query($connection, $sql)) {
    echo "<script language='javascript'>";
   echo "alert('successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../../client/about.php'";
   echo"</script>";
}else
{ 
echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../../client/sign.php'";
   echo"</script>";
}

?>