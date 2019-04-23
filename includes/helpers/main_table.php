<?php
include 'db.php';
include '../client/table.html';

$tbl = mysqli_query($connection, "SELECT * FROM `Event` Order by `data` DESC");
$table = "<table class=table cellpadding='5'  width=100% >";
$table .= "<tr>";
      // $table .= "<th></th>";
	  $table .= "<th class=table-article><span class=table-article>Назва заходу</span></th>";
      $table .= "<th class=table-article><span class=table-article>Категорія</span></th>";
	  $table .= "<th class=table-article><span class=table-article>Жанр</span></th>";
	  $table .= "<th class=table-article><span class=table-article>День</span></th>";
	  $table .= "<th class=table-article><span class=table-article>Час</span></th>";
	  $table .= "<th class=table-article><span class=table-article>Вільні квитки</span></th>";
	  $table .= "<th class=table-article><span class=table-article>Ціна</span></th>";
	  $table .= "<th class=table-article><span class=table-article>Де проходить?</span></th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
	//   $table .= "<td></td>";
	  $table .= "<td class=table-row>".$row['event_name']."</td>";
      $table .= "<td class=table-row>".$row['category']."</td>";
      $table .= "<td class=table-row>".$row['genre']."</td>";
	  $table .= "<td class=table-row>".$row['data']."</td>";
	  $table .= "<td class=table-row>".$row['time']."</td>";
	  $table .= "<td class=table-row>".$row['current_num_tickets']."</td>";
	  $table .= "<td class=table-row>".$row['min_price']."</td>";
	  $table .= "<td class=table-row>".$row['institution']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>
