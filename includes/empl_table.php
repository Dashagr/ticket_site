<?php
include 'helpers/db.php';
include '../client/table.html';

$tbl = mysqli_query($connection, "SELECT *  FROM `Employee`  ");
    
$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";
      $table .= "<th>ПІБ</th>";
	  $table .= "<th>Банківські реквізити</th>";
	  $table .= "<th>Пошта</th>";
	  $table .= "<th>Адреса</th>";
      $table .= "<th>Дата вступу на роботу</th>";
      $table .= "<th>З-п</th>";
      $table .= "<th>День народження</th>";
      $table .= "<th>Посада</th>";

while ($row = mysqli_fetch_assoc($tbl))
{
    $salar_empl = $row['salary'];
      $table .= "<tr>";
      $table .= "<td>".$row['empl_surname']. " " .$row['empl_name']. " " .$row['empl_sec_name']."</td>";
      $table .= "<td>".$row['bank_details_empl']."</td>";
      $table .= "<td>".$row['empl_email']."</td>";
      $table .= "<td>".$row['empl_city']. ", " .$row['empl_street']. ", " .$row['empl_house_num']. ". " .$row['empl_num_of_flat']."</td>";
      $table .= "<td>".$row['date_of_empl_enlistment']."</td>";
      $table .= "<td>".$salar_empl."</td>";
      $table .= "<td>".$row['empl_bday']."</td>";
      $table .= "<td>".$row['job']."</td>";
    }

      $table .= "</table> ";
      echo $table;

echo "<h2>Couriers</h2>";

$tbl1 = mysqli_query($connection, "SELECT *  FROM `Courier`  ");
    
$table1 = "<table border='1' cellpadding='5'  width=100%>";
$table1 .= "<tr>";
      $table1 .= "<th>ПІБ</th>";
	  $table1 .= "<th>Банківські реквізити</th>";
	  $table1 .= "<th>Пошта</th>";
	  $table1 .= "<th>Адреса</th>";
      $table1 .= "<th>З-п</th>";
      $table1 .= "<th>День народження</th>";
      $table1 .= "<th>Посада</th>";

while ($row = mysqli_fetch_assoc($tbl1))
{
      $table1 .= "<tr>";
      $table1 .= "<td>".$row['courier_surname']. " " .$row['courier_name']. " " .$row['courier_sec_name']."</td>";
      $table1 .= "<td>".$row['bank_details_courier']."</td>";
      $table1 .= "<td>".$row['courier_email']."</td>";
      $table1 .= "<td>".$row['courier_city']. ", " .$row['courier_street']. ", " .$row['courier_house_num']. ". " .$row['courier_num_of_flat']."</td>";
      // $table1 .= "<td>".$row['date_of_courier_enlistment']."</td>";
      $table1 .= "<td>".$row['salary']."</td>";
      $table1 .= "<td>".$row['courier_bday']."</td>";
      $table1 .= "<td>кур'єр</td>";
    }
      $table1 .= "</table> ";
      echo $table1;


?>