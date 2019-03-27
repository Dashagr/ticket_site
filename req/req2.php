<br><br><br>
<p><h2>Кількість замовлень для кожного місця проведення.</h2> </p> <br><br><br>

<?php
include '../includes/db.php';
include '../includes/table.php';

$tbl = mysqli_query($connection, "SELECT `Venue`.`institution_name`, COUNT(`Ticket_In_Order`.`account_number`) AS `N`
FROM ((`Venue` INNER JOIN `Event` ON `Venue`.`institution_name` = `Event`.`institution` ) INNER JOIN `Ticket` ON `Event`.`event_code` = `Ticket`.`event_code`) INNER JOIN `Ticket_In_Order` ON `Ticket`.`ticket_code` = `Ticket_In_Order`.`ticket_code`
GROUP BY `Venue`.`institution_name`
UNION (SELECT `Venue`.`institution_name`, 0 AS `N`
FROM `Venue`
WHERE `Venue`.`institution_name` NOT IN (SELECT `Venue`.`institution_name`
FROM (`Venue` INNER JOIN `Event` ON `Venue`.`institution_name` = `Event`.`institution` ) INNER JOIN `Ticket` ON `Event`.`event_code` = `Ticket`.`event_code`))");

$table = "<table border='1' cellpadding='5'  width=100%>";
      $table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Назва закладу</th>";
      $table .= "<th>Кількість</th>";

while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
      $table .= "<td></td>";
      $table .= "<td>".$row['institution_name']."</td>";
	  $table .= "<td>".$row['N']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>

  <br><button><a href="empl/about_a.php" >Назад</a></button><br>

