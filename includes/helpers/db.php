<?php 
$connection = mysqli_connect ('localhost', 'root', 'root', 'bilet');

if ($connection == false) 
{ 
echo 'This connect is not successful'; 
echo mysqli_connect_error(); 
exit(); 
} 