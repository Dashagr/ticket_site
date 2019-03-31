<?php 
$connection = mysqli_connect ('127.0.0.1', 'root', 'root', 'bilet'); 

if ($connection == false) 
{ 
echo 'This connect is not successful'; 
echo mysqli_connect_error(); 
exit(); 
} 


/*mysqli_query($connection, "UPDATE Buyer SET password = '".password_hash('123',PASSWORD_DEFAULT)."'  WHERE `buyer_phone` = '380971232219 ';");*/

    