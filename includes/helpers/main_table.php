<?php
include 'db.php';
include '../client/table.html';

$tbl = mysqli_query($connection, "SELECT * FROM `Event`");
$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Назва заходу</th>";
      $table .= "<th>Категорія</th>";
	  $table .= "<th>Жанр</th>";
	  $table .= "<th>День</th>";
	  $table .= "<th>Час</th>";
	  $table .= "<th>Вільні квитки</th>";
	  $table .= "<th>Ціна</th>";
	  $table .= "<th>Де проходить?</th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
	  $table .= "<td></td>";
	  $table .= "<td>".$row['event_name']."</td>";
      $table .= "<td>".$row['category']."</td>";
      $table .= "<td>".$row['genre']."</td>";
	  $table .= "<td>".$row['data']."</td>";
	  $table .= "<td>".$row['time']."</td>";
	  $table .= "<td>".$row['current_num_tickets']."</td>";
	  $table .= "<td><p align=center>".$row['min_price']."</td>";
	  $table .= "<td><p align=center>".$row['institution']."</td>";
    }
      $table .= "</table> ";
      echo $table;

?>