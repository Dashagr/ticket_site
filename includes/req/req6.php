<br><br><br>
<p><h2>Артист та назви заходів, на яких вони виступали, у заданому жанрі.</h2> </p> <br><br><br>

<?php
include '../helpers/db.php';
include '../../client/table.html';

$new_val = $GET['new_val'];

var_dump($GET['new_val']);

$tbl = mysqli_query($connection, "SELECT `Event`.`event_name`, `Artist`.`artist_name`
FROM (`Artist` INNER JOIN `Artist_On_Event` ON `Artist`.`artist_name` = `Artist_On_Event`.`artist_name`) INNER JOIN `Event` ON `Artist_On_Event`.`event_code` = `Event`.`event_code`
WHERE `genre` = 'рок' ");


$table = "<table border='1' cellpadding='5'  width=100%>";
      $table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Назва заходу</th>";
      $table .= "<th>Артист</th>";

while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
      $table .= "<td></td>";
      $table .= "<td>".$row['event_name']."</td>";
	  $table .= "<td>".$row['artist_name']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>


  <br><button><a href="../../client/about_a.php" >Назад</a></button><br>
