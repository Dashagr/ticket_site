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
  .sign-form{
      height: 480px;
      width: 400px!important;
      margin-top: 50px;
      padding: 15px;
      background: rgba(216, 211, 211, 0.527);
      border-radius: 15px;
      border: 1px solid rgb(183, 187, 189);
}</style>
<section class="login-section">
  <div class="sign-form">
    <form method="POST" action="../includes/helpers/sign_up.php" scrolling="yes">
      <article> You can sign up here !</article>
      <p class="sign-item"><input class="sign-input"  type="text" maxlength="25" size="40"  name="phone" placeholder="Your phone number" required></p>
      <p><input class="sign-input" type="text" maxlength="25" size="40"  name="surname" placeholder="Surname" required></p>
      <p><input class="sign-input" type="text" maxlength="25" size="40"  name="name" placeholder="Name" required></p>
      <p><input class="sign-input" type="text" maxlength="25" size="40"  name="secname" placeholder="Second name (not necessarily)"></p>
      <p><input class="sign-input" type="text" maxlength="25" size="40"  name="email" placeholder="Email (not necessarily)"></p>
      <p><input class="sign-input" type="text" maxlength="25" size="40"  name="login" placeholder="Login" required></p>
      <p><input class="sign-input" type="text" maxlength="25" size="40"  name="password" placeholder="Password" required></p>
      <p class="sibmit-fild"><input class="sign-submit-btn" type="Submit" value=""></p>
    </form>
  </div>
</section>

<?php
    include 'script.html';
?>
