<?php
include 'db.php';

session_start();
$login = $_SESSION['login'];

include 'table.php';

$tbl = mysqli_query($connection, "SELECT * FROM ((((`Event` INNER JOIN `Ticket` ON `Event`.`event_code` = `Ticket`.`event_code`)  INNER JOIN `Ticket_In_Order` ON `Ticket`.`ticket_code` = `Ticket_In_Order`.`ticket_code`) INNER JOIN `Orders` ON `Orders`.`account_number`=`Ticket_In_Order`.`account_number`) INNER JOIN `Employee` ON `Orders`.`bank_details_empl` = `Employee`.`bank_details_empl`) INNER JOIN `Buyer` ON `Orders`.`buyer_phone` = `Buyer`.`buyer_phone` WHERE `Buyer`.`login` = '$login' ");

$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";
      $table .= "<th></th>";
      $table .= "<th>Назва заходу</th>";
	  $table .= "<th>Код квитка</th>";
      $table .= "<th>Кількість квитків</th>";
	  $table .= "<th>Код замовлення</th>";
      $table .= "<th>Дата замовлення</th>";
      $table .= "<th>Знижка</th>";
      $table .= "<th>Загальна сума</th>";
      $table .= "<th>Статус замовлення</th>";
      $table .= "<th>Ваш телефон</th>";
      $table .= "<th>Прізвище співробітника</th>";
      $table .= "<th>Ім'я співробітника</th>";
      $table .= "<th>По-батькові</th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
      $table .= "<td></td>";
      $table .= "<td>".$row['event_name']."</td>";
      $table .= "<td>".$row['ticket_code']."</td>";
	  $table .= "<td>".$row['quantity_of_tickets']."</td>";
      $table .= "<td>".$row['account_number']."</td>";
      $table .= "<td>".$row['purchase_date']."</td>";
      $table .= "<td>".$row['discount']."</td>";
      $table .= "<td>".$row['total_price']."</td>";
      $table .= "<td>".$row['order_status']."</td>";
      $table .= "<td>".$row['buyer_phone']."</td>";
      $table .= "<td>".$row['empl_surname']."</td>";
      $table .= "<td>".$row['empl_name']."</td>";
      $table .= "<td>".$row['empl_sec_name']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>