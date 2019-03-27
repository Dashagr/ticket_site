<?php
include 'db.php';
include 'table.php';
$tbl = mysqli_query($connection, "SELECT `Artist_On_Event`.`artist_name`, `Artist_On_Event`.`event_code`, `Event`.`event_name` FROM `Artist_On_Event` INNER JOIN `Event` ON `Event`.`event_code`=`Artist_On_Event`.`event_code` GROUP BY `Artist_On_Event`.`artist_name`, `Event`.`event_name`");
$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Артист</th>";
      $table .= "<th>Код заходу</th>";
	  $table .= "<th>Назва заходу</th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
      $table .= "<td></td>";
      $table .= "<td>".$row['artist_name']."</td>";
	  $table .= "<td>".$row['event_code']."</td>";
      $table .= "<td>".$row['event_name']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>