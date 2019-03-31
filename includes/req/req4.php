<br><br><br>
<p><h2>Імена артистів, які беруть участь у всіх заходах.</h2> </p> <br><br><br>

<?php
include '../helpers/db.php';
include '../../client/table.html';

$tbl = mysqli_query($connection, "SELECT `Artist`.`artist_name`
FROM `Artist`
WHERE NOT EXISTS (SELECT *
FROM `Event`
WHERE NOT EXISTS (SELECT *
FROM `Artist_On_Event`
WHERE `Artist_On_Event`.`event_code` = `Event`.`event_code` AND `Artist`.`artist_name` = `Artist_On_Event`.`artist_name`));");

$table = "<table border='1' cellpadding='5'  width=100%>";
      $table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Назва артиста</th>";

while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
      $table .= "<td></td>";
      $table .= "<td>".$row['artist_name']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>

  <br><button><a href="../../client/about_a.php" >Назад</a></button><br>
