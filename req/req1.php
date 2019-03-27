<br><br><br>
<p><h2>Покупці, які купували квитки на заходи жанру «фестиваль» та ніколи не замовляли доставку</h2> </p> <br><br><br>
<?php
include '../includes/db.php';
include '../includes/table.php';

$tbl = mysqli_query($connection, "SELECT DISTINCT `Buyer`.`buyer_surname`, `Buyer`.`buyer_name` FROM (((`Buyer` INNER JOIN `Orders` ON `Buyer`.`buyer_phone` = `Orders`.`buyer_phone`) INNER JOIN `Ticket_In_Order` ON `Ticket_In_Order`.`account_number` = `Orders`.`account_number`) INNER JOIN `Ticket` ON `Ticket`.`ticket_code` = `Ticket_In_Order`.`ticket_code`) INNER JOIN `Event` ON `Event`.`event_code` = `Ticket`.`event_code` WHERE `Category` = 'фестиваль' AND `Orders`.`buyer_phone` NOT IN (SELECT `buyer_phone` FROM `Orders` INNER JOIN `Delivery` ON `Orders`.`account_number` = `Delivery`.`account_number`)");

$table = "<table border='1' cellpadding='5'  width=100%>";
      $table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Прізвище</th>";
      $table .= "<th>Ім'я</th>";

while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
      $table .= "<td></td>";
      $table .= "<td>".$row['buyer_surname']."</td>";
	  $table .= "<td>".$row['buyer_name']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>

  <br><button><a href="empl/about_a.php" >Назад</a></button><br>
