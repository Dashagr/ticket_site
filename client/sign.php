<?php
include 'header.php';
include '../includes/helpers/db.php';
?>

<div>
<form method="POST" action="sign_up.php" scrolling="yes">
    <p> You can sign up here !</p>
    <p><strong>Your phone number</strong></p>
   <p><input type="text" maxlength="25" size="40"  name="phone"></p>
   <p><strong>Surname</strong></p>
   <p><input type="text" maxlength="25" size="40"  name="surname"></p>
    <p><strong>Name</strong></p>
   <p><input type="text" maxlength="25" size="40"  name="name"></p>
   <p><strong>Second name (not necessarily)</strong></p>
   <p><input type="text" maxlength="25" size="40"  name="secname"></p>
    <p><strong>Email (not necessarily)</strong></p>
   <p><input type="text" maxlength="25" size="40"  name="email"></p>
   <p><strong>Login</strong></p>
   <p><input type="text" maxlength="25" size="40"  name="login"></p>
   <p><strong>Password</strong></p>
   <p><input type="password" maxlength="25" size="40"  name="password"></p>
   <p><input type="Submit" value="Submit"></p>
     </form>

</div>

<?php
    include 'script.html';
?>