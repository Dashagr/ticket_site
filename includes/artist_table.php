<?php
include 'helpers/db.php';
include '../client/table.html';

$tbl = mysqli_query($connection, "SELECT * FROM `Artist`");
$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Назва</th>";
      $table .= "<th>Обробка (якщо є)</th>";
	  $table .= "<th>Переклад (якщо є)</th>";
	  $table .= "<th>Назва альбому</th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
      $img = $row['image'];
      $table .= "<tr>";
      $table .= "<td></td>";
     // $table .= "<td style='background_image: url(images/".$img."></td>";
      $table .= "<td>".$row['artist_name']."</td>";
	  $table .= "<td>".$row['processing']."</td>";
      $table .= "<td>".$row['translation']."</td>";
      $table .= "<td>".$row['album_title']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>