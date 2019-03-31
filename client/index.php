<?php
include 'header.html';
include '../includes/helpers/db.php';
?>

<div class="login">
<form method="POST" action="../includes/helpers/heandler.php">
   <p><strong>Please, enter your login</strong></p>
   <p><input type="text" maxlength="25" size="40" value="my_name" name="login"></p>
   <p><strong>Password</strong></p>
   <p><input type="password" maxlength="25" size="40" name="password"></p>
   <p style="text-align: center"><input type="Submit" value="Submit"></p><br>
   <a href="sign.php" class="btn btn-default">Sign Up</a>
     </form>
</div>

<?php
include 'script.html';
?>       