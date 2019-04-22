<h1 class="all-ivents"><a name="ar"></a>Усі артисти</h1>

<?php
include '../includes/helpers/db.php';
include 'table.html';

$tbl = mysqli_query($connection, "SELECT * FROM `Artist`");
$table = "<table class=table cellpadding='5'  width=100% >";
$table .= "<tr>";

$table .= "<th class=table-article><span class=table-article>Назва</span></th>";
$table .= "<th class=table-article><span class=table-article>Sound producer</span></th>";
$table .= "<th class=table-article><span class=table-article>Назва альбому</span></th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
      $img = $row['image'];
      $table .= "<tr>";
 
     // $table .= "<td style='background_image: url(images/".$img."></td>";
      $table .= "<td class=table-row>".$row['artist_name']."</td>";
	  $table .= "<td class=table-row>".$row['processing']."</td>";
      $table .= "<td class=table-row>".$row['translation']."</td>";
      $table .= "<td class=table-row>".$row['album_title']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>
          <h1 class="all-ivents">На яких заходах можна їх побачити?</h1>
<?php
$tbl = mysqli_query($connection, "SELECT `Artist_On_Event`.`artist_name`, `Event`.`event_name` FROM `Artist_On_Event` INNER JOIN `Event` ON `Event`.`event_code`=`Artist_On_Event`.`event_code` GROUP BY `Artist_On_Event`.`artist_name`, `Event`.`event_name`");
$table = "<table class=table cellpadding='5'  width=100% >";
$table .= "<tr>";

$table .= "<th class=table-article><span class=table-article>Артист</span></th>";
$table .= "<th class=table-article><span class=table-article>Назва заходу</span></th>";
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

		$table .= "<td class=table-row>".$artist."</td>";
		$table .= "<td class=table-row>".$concerts."</td>";
	}
      $table .= "</table> ";
      echo $table;
?>

   <h1 class="all-ivents"><a name="ve"></a>Усі концертні майданчики</h1>
<?php
$tbl = mysqli_query($connection, "SELECT `institution_name`, CONCAT((CONCAT(`venue_street`, ', ')),`venue_building_num`) AS `adress`, `description` FROM `Venue`");
$table = "<table class=table cellpadding='5'  width=100% >";
$table .= "<tr>";

$table .= "<th class=table-article><span class=table-article>Назва</span></th>";
$table .= "<th class=table-article><span class=table-article>Адреса</span></th>";
$table .= "<th class=table-article><span class=table-article>Опис</span></th>";
          
while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
  
      $table .= "<td class=table-row>".$row['institution_name']."</td>";
	  $table .= "<td class=table-row>".$row['adress']."</td>";
      $table .= "<td class=table-row>".$row['description']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>      
