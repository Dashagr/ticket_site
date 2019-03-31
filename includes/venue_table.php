<?php
include 'helpers/db.php';
include '../client/table.html';

$tbl = mysqli_query($connection, "SELECT * FROM `Venue`");
$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Назва</th>";
      $table .= "<th>Телефон</th>";
	  $table .= "<th>Прізвище</th>";
	  $table .= "<th>Ім'я</th>";
      $table .= "<th>По-батькові</th>";
      $table .= "<th>Вулиця</th>";
      $table .= "<th>№ будинку</th>";
      $table .= "<th>Кількість зон</th>";
      $table .= "<th>Опис</th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
      $table .= "<td></td>";
      $table .= "<td>".$row['institution_name']."</td>";
	  $table .= "<td>".$row['internal_phone']."</td>";
      $table .= "<td>".$row['authority_sec_name']."</td>";
      $table .= "<td>".$row['authority_name']."</td>";
      $table .= "<td>".$row['authority_surname']."</td>";
      $table .= "<td>".$row['venue_street']."</td>";
      $table .= "<td>".$row['venue_building_num']."</td>";
      $table .= "<td>".$row['number_of_zones']."</td>";
      $table .= "<td>".$row['description']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>