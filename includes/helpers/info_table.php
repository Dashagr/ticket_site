<h1><a name="ar"></a>Усі артисти</h1>

<?php
include '../includes/helpers/db.php';
include 'table.html';

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
          <h1>На яких заходах можна їх побачити?</h1>
<?php
$tbl = mysqli_query($connection, "SELECT `Artist_On_Event`.`artist_name`, `Event`.`event_name` FROM `Artist_On_Event` INNER JOIN `Event` ON `Event`.`event_code`=`Artist_On_Event`.`event_code` GROUP BY `Artist_On_Event`.`artist_name`, `Event`.`event_name`");
$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Артист</th>";
      $table .= "<th>Назва заходу</th>";
	  $artists = array();
while ($row = mysqli_fetch_assoc($tbl))
    {
		if(!isset($artists[$row['artist_name']]))
		{
			$artists[$row['artist_name']] = $row['event_name'];
		}
		else
		{
			$artists[$row['artist_name']] .= (", ".$row['event_name']);
		}
    }
	foreach($artists as $artist=>$concerts)
	{
		$table .= "<tr>";
		$table .= "<td></td>";
		$table .= "<td>".$artist."</td>";
		$table .= "<td>".$concerts."</td>";
	}
      $table .= "</table> ";
      echo $table;
?>

   <h1><a name="ve"></a>Усі концертні майданчики</h1>
<?php
$tbl = mysqli_query($connection, "SELECT `institution_name`, CONCAT((CONCAT(`venue_street`, ', ')),`venue_building_num`) AS `adress`, `description` FROM `Venue`");
$table = "<table border='1' cellpadding='5'  width=100%>";
$table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Назва</th>";
      $table .= "<th>Адреса</th>";
	  $table .= "<th>Опис</th>";
          
while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
      $table .= "<td></td>";
      $table .= "<td>".$row['institution_name']."</td>";
	  $table .= "<td>".$row['adress']."</td>";
      $table .= "<td>".$row['description']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>      