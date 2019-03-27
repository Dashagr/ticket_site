<br><br><br>
<p><h2>Визначити заходи, на які було здійснено замовлення на суму, більшу, ніж n гривень.</h2> </p> <br><br><br>

<?php
include '../includes/db.php';
include '../includes/table.php';

$new_val = $GET['new_val'];

$tbl = mysqli_query($connection, "SELECT DISTINCT `Event`.`event_name`
FROM ((`Event` INNER JOIN `Ticket` ON `Event`.`event_code` = `Ticket`.`event_code`) INNER JOIN `Ticket_In_Order` ON `Ticket`.`ticket_code` = `Ticket_In_Order`.`ticket_code`) INNER JOIN `Orders` ON `Orders`.`account_number` = `Ticket_In_Order`.`account_number`
WHERE `Orders`.`total_price` > '$new_val' ");

$table = "<table border='1' cellpadding='5'  width=100%>";
      $table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Назва заходу</th>";

while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
      $table .= "<td></td>";
      $table .= "<td>".$row['event_name']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>

  <br><button><a href="empl/about_a.php" >Назад</a></button><br>
