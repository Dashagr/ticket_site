<?php
include 'includes/db.php';

session_start();

$login = $_POST['login'];
$password = $_POST['password'];

$user = mysqli_fetch_assoc(mysqli_query($connection, "SELECT `login`,`password` FROM `Buyer` WHERE `login`='$login';"));
//$admin = mysqli_fetch_assoc(mysqli_query($connection, "SELECT `login`,`password` FROM `Employee` WHERE `login` = 'admin'"));
$empl = mysqli_fetch_assoc(mysqli_query($connection, "SELECT `login`,`password` FROM `Employee` WHERE `login`='$login';"));
$cour = mysqli_fetch_assoc(mysqli_query($connection, "SELECT `login`,`password` FROM `Courier` WHERE `login`='$login';"));

if(count($user) > 0)
{
    if (password_verify($password, $user["password"])){
    $_SESSION['user_type'] = "user";
    $_SESSION['login'] = $login;
    header("Location: about.php");
    } else {
        echo "<script language='javascript'>";
   echo "alert('Неправильний пароль!')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../index.php'";
   echo"</script>";
    }
} else if(count($empl) > 0)
{
     if (password_verify($password, $empl["password"])){
         $_SESSION['user_type'] = "empl";
         $_SESSION['login'] = $login;
         header("Location: about_a.php");
    } else {
        echo "<script language='javascript'>";
   echo "alert('Неправильний пароль!')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../index.php'";
   echo"</script>";
    }
} else if(count($cour) > 0)
{
     if (password_verify($password, $cour["password"])){
         $_SESSION['user_type'] = "cour";
         $_SESSION['login'] = $login;
         header("Location: about_c.php");
         } else {
          echo "<script language='javascript'>";
   echo "alert('Неправильний пароль!')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../index.php'";
   echo"</script>";
    }
} else 
{
     echo "<script language='javascript'>";
   echo "alert('Ви не зареєстровані!')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../index.php'";
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