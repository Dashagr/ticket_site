<?php
include 'includes/header.php';
include 'includes/db.php';
?>

<div class="login">
<form method="POST" action="heandler.php">
   <p><strong>Please, enter your login</strong></p>
   <p><input type="text" maxlength="25" size="40" value="my_name" name="login"></p>
   <p><strong>Password</strong></p>
   <p><input type="password" maxlength="25" size="40" name="password"></p>
   <p style="text-align: center"><input type="Submit" value="Submit"></p><br>
   <a href="sign.php" class="btn btn-default">Sign Up</a>
     </form>
</div>

 <!--<a href="main.php">Home</a><br>-->
<!--
<a href="about_a.php">HomeAdmin</a><br>
 <a href="includes/db.php">DB</a><br>
<a href="single-post.php">post</a><br>
<a href="single-project.php">proj</a><br>
-->


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
       