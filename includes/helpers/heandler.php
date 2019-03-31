<?php
include 'db.php';

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
    header("Location: ../../client/about.php");
    } else {
        echo "<script language='javascript'>";
   echo "alert('Неправильний пароль!')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = ' ../../client/index.php'";
   echo"</script>";
    }
} else if(count($empl) > 0)
{
     if (password_verify($password, $empl["password"])){
         $_SESSION['user_type'] = "empl";
         $_SESSION['login'] = $login;
         header("Location:  ../../client/about_a.php");
    } else {
        echo "<script language='javascript'>";
   echo "alert('Неправильний пароль!')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = ' ../../client/index.php'";
   echo"</script>";
    }
} else if(count($cour) > 0)
{
     if (password_verify($password, $cour["password"])){
         $_SESSION['user_type'] = "cour";
         $_SESSION['login'] = $login;
         header("Location:  ../../client/about_c.php");
         } else {
          echo "<script language='javascript'>";
   echo "alert('Неправильний пароль!')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = ' ../../client/index.php'";
   echo"</script>";
    }
} else 
{
     echo "<script language='javascript'>";
   echo "alert('Ви не зареєстровані!')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = ' ../../client/index.php'";
   echo"</script>";
}

include ' ../../client/script.html';
?>
