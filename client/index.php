<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/normalize.css">
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan" rel="stylesheet">
</head>
<body>
<?php
include 'header.html';
?>
<style>
  .login-form{
      width: 320px;
      height: 280px;
      margin-top: 50px;
      padding: 15px;
      background: rgba(216, 211, 211, 0.527);
      border-radius: 15px;
      border: 1px solid rgb(183, 187, 189);
}</style>
<section class="login-section">
  <div class="login-form">
    <form method="POST" action="../includes/helpers/heandler.php">
      <article>Sign in</article>
      <p><input class="login-input" type="text" maxlength="25" size="40" value="my_name" name="login" placeholder="Username" required></p>
      <p><input class="login-input login-password" type="password" maxlength="25" size="40" name="password" placeholder="Password" required></p>
      <p class="sibmit-fild"><button class="submit-btn btn">Submit</button>
      <a href="sign.php" class="btn submit-btn">Sign up</a>
      </p>
    </form>
  </div>
</section>

<?php
include 'script.html';
?>



