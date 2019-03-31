<?php
include 'helpers/db.php';
include '../client/table.html';

$tbl = mysqli_query($connection, "SELECT * FROM `Ticket` INNER JOIN `Event` ON `Ticket`.`event_code` = `Event`.`event_code` ORDER BY `event_name` ");
$table = "<table border='0' cellpadding='5'  width=100%>";
$table .= "<tr>";
      $table .= "<th></th>";
      $table .= "<th>Назва заходу</th>";
      $table .= "<th>Код заходу</th>";
	  $table .= "<th>Код квитка</th>";
      $table .= "<th>Ціна</th>";
	  $table .= "<th>Зона</th>";
	  $table .= "<th>Ряд</th>";
      $table .= "<th>Місце</th>";
     
    
while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
      $table .= "<td></td>";
      $table .= "<td>".$row['event_name']."</td>";
      $table .= "<td>".$row['event_code']."</td>";
      $table .= "<td>".$row['ticket_code']."</td>";
	  $table .= "<td>".$row['price']."</td>";
      $table .= "<td>".$row['zona']."</td>";
      $table .= "<td>".$row['row']."</td>";
      $table .= "<td>".$row['place']."</td>";    
    }
      $table .= "</table> ";
      echo $table;
?>