<?php
include 'includes/header.php';
include 'includes/db.php';

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
   echo "window.location = '../about.php'";
   echo"</script>";
}else
{ 
echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/sign.php'";
   echo"</script>";
}

?>
<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>