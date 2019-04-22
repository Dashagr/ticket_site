<?php 
$connection = mysqli_connect ('eu-cdbr-west-02.cleardb.net', 'bb4b5ece424ead', '95c19f97', 'heroku_18523afeec49ff5');

if ($connection == false) 
{ 
echo 'This connect is not successful'; 
echo mysqli_connect_error(); 
exit(); 
} 

// mysql://bb4b5ece424ead:95c19f97@eu-cdbr-west-02.cleardb.net/heroku_18523afeec49ff5?reconnect=true