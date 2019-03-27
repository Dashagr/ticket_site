<?php
include 'db.php';

session_start();
$login = $_SESSION['login'];

include 'table.php';

$tbl = mysqli_query($connection, "SELECT * FROM ((`Delivery` INNER JOIN `Courier` ON `Delivery`.`bank_details_courier` = `Courier`.`bank_details_courier`) INNER JOIN `Orders` ON `Delivery`.`account_number` = `Orders`.`account_number`) INNER JOIN `Buyer` ON `Buyer`.`buyer_phone` = `Orders`.`buyer_phone` WHERE `Buyer`.`login` = '$login' ");

$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Код</th>";
      $table .= "<th>Вулиця</th>";
	  $table .= "<th>№ будинку</th>";
	  $table .= "<th>№ квартири</th>";
      $table .= "<th>Бажана дата</th>";
      $table .= "<th>Час</th>";
      $table .= "<th>Статус</th>";
      $table .= "<th>Прізвище кур'єра</th>";
      $table .= "<th>Ім'я кур'єра</th>";
      $table .= "<th>По-батькові</th>";
      $table .= "<th>Код замовлення в базі</th>";
      $table .= "<th>Його код</th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
      $table .= "<td></td>";
      $table .= "<td>".$row['delivery_code']."</td>";
	  $table .= "<td>".$row['del_street']."</td>";
      $table .= "<td>".$row['del_num_of_building']."</td>";
      $table .= "<td>".$row['del_num_of_flat']."</td>";
      $table .= "<td>".$row['desired_date']."</td>";
      $table .= "<td>".$row['desired_time']."</td>";
      $table .= "<td>".$row['delivery_Status']."</td>";
      $table .= "<td>".$row['courier_surname']."</td>";
      $table .= "<td>".$row['courier_name']."</td>";
      $table .= "<td>".$row['courier_sec_name']."</td>";
      $table .= "<td>".$row['account_number']."</td>";
      $table .= "<td>".$row['bank_details_courier']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>