<?php
include 'helpers/db.php';
include '../client/table.html';

$tbl = mysqli_query($connection, "SELECT `Artist_On_Event`.`artist_name`, `Artist_On_Event`.`event_code`, `Event`.`event_name` FROM `Artist_On_Event` INNER JOIN `Event` ON `Event`.`event_code`=`Artist_On_Event`.`event_code` GROUP BY `Artist_On_Event`.`artist_name`, `Event`.`event_name`");
$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";

$table .= "<th class=table-article><span class=table-article>Артист</span></th>";
$table .= "<th class=table-article><span class=table-article>Код заходу</span></th>";
$table .= "<th class=table-article><span class=table-article>Назва заходу</span></th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
     
      $table .= "<td class=table-row>".$row['artist_name']."</td>";
	  $table .= "<td class=table-row>".$row['event_code']."</td>";
      $table .= "<td class=table-row>".$row['event_name']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>