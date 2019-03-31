<?php
include 'helpers/db.php';
include '../client/table.html';

session_start();
$login = $_SESSION['login'];

$tbl = mysqli_query($connection, "SELECT * FROM `Buyer` WHERE `Buyer`.`login` = '$login' ");
$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";
      $table .= "<th></th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
    
    if ($row['status'] == 0){
        $row['status']="ordinary";
    }else{$row['status']="PRIME";}
    
        $table .= "<th>Ваша інформація</th>";
      $table .= "<tr>";
    	  $table .= "<tr><td>Номер телефону</td>";
      $table .= "<td>".$row['buyer_phone']."</td></tr>";
          $table .= "<tr><td>Прізвище</td>";
	  $table .= "<td>".$row['buyer_surname']."</td></tr>";
          $table .= "<tr><td>Ім'я</td>";
      $table .= "<td>".$row['buyer_name']."</td></tr>";
          $table .= "<tr><td>По-батькові</td>";
      $table .= "<td>".$row['buyer_sec_name']."</td></tr>";
           $table .= "<tr><td>Пошта</td>";
      $table .= "<td>".$row['buyer_email']."</td></tr>";
           $table .= "<tr><td>Статус</td>";
      $table .= "<td>".$row['status']."</td></tr>";
    }
      $table .= "</table> ";
      echo $table;
?>