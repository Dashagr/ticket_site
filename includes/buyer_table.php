<?php
include 'helpers/db.php';
include '../client/table.html';

$tbl = mysqli_query($connection, "SELECT * FROM `Buyer`");
$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";

	  $table .= "<th>Номер телефону</th>";
      $table .= "<th>Прізвище</th>";
      $table .= "<th>Ім'я</th>";
      $table .= "<th>По-батькові</th>";
	  $table .= "<th>Пошта</th>";
	  $table .= "<th>Статус</th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";

      $table .= "<td>".$row['buyer_phone']."</td>";
	  $table .= "<td>".$row['buyer_surname']."</td>";
      $table .= "<td>".$row['buyer_name']."</td>";
      $table .= "<td>".$row['buyer_sec_name']."</td>";
      $table .= "<td>".$row['buyer_email']."</td>";
      $table .= "<td>".$row['status']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>