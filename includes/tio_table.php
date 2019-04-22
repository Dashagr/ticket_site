<?php
include 'helpers/db.php';
include '../client/table.html';

$tbl = mysqli_query($connection, "SELECT * FROM `Ticket_In_Order` INNER JOIN `Orders` ON `Orders`.`account_number`=`Ticket_In_Order`.`account_number` ORDER BY `Ticket_In_Order`.`account_number`");
$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";
	  $table .= "<th>Код квитка</th>";
      $table .= "<th>Кількість квитків</th>";
	  $table .= "<th>Код замовлення</th>";
      $table .= "<th>Дата замовлення</th>";
      $table .= "<th>Знижка</th>";
      $table .= "<th>Загальна сума</th>";
      $table .= "<th>Статус замовлення</th>";
      $table .= "<th>Телефон покупця</th>";
      $table .= "<th>Співробітник</th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
    if($row['discount'] == 0){
        $row['discount'] = "";
    }
      $table .= "<tr>";
      $table .= "<td>".$row['ticket_code']."</td>";
	  $table .= "<td>".$row['quantity_of_tickets']."</td>";
      $table .= "<td>".$row['account_number']."</td>";
      $table .= "<td>".$row['purchase_date']."</td>";
      $table .= "<td>".$row['discount']."</td>";
      $table .= "<td>".$row['total_price']."</td>";
      $table .= "<td>".$row['order_status']."</td>";
      $table .= "<td>".$row['buyer_phone']."</td>";
      $table .= "<td>".$row['bank_details_empl']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>