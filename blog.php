<?php
include 'includes/header.php';
include 'includes/table.php';
include 'includes/db.php';
?>

<!-- Header section
================================================== -->
<section id="header" class="header-five">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="0.6s">Довідка</h1>
              <h3 class="wow fadeInUp" data-wow-delay="0.9s">Останні новини про артистів та концертні зали</h3>
          </div>
			</div>

		</div>
	</div>		
</section>


<!-- Blog section
================================================== -->
<section id="blog">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="1s">
         	  <div class="blog-thumb">
         		   <a href="#ar"><img src="images/b_art.jpg" class="img-responsive" alt="Blog"></a>
         		   <a href="#ar"><h1>Тільки найкращі виконавці</h1></a>
         		     <p>У нас ви можете придбати квитки тільки на найкращих виконавців серед вітчизняних та закордонник зірок.Хочете побачити селебріті? Купуйте квитки! </p>
         		     <a href="#ar" class="btn btn-default">Показати більше</a>
         	    </div>
		    </div>

		    <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="1.6s">
         	  <div class="blog-thumb">
         		   <a href="#ve"><img src="images/b_ven.jpg" class="img-responsive" alt="Blog"></a>
         		   <a href="#ve"><h1>Тільки найращі концертні майданчики</h1></a>
         		     <p>Найвідоміші концертні зали нашого міста радо зустрінуть вас у віп-зонах. Перелік усіх майданчиків тут  ↓ </p>
         		     <a href="#ve" class="btn btn-default">Показати більше</a>
         	  </div>
		    </div>

        <h1><a name="ar"></a>Усі артисти</h1>
<?php
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
        <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="1.3s">
          <h1>Impreza</h1>
          <p>Квиткове агентство Impreza дає унікальну можливість організовувати своє дозвілля з мінімальною затратою сил і часу. Це не просто афіша заходів, які відбудуться в місті. Це ретельна підбірка того, що може зацікавитилюдину і допомогти їй.</p>
       </div>

      </div>
   </div>
</section>

<?php
include 'includes/footer.php';
?>

<!-- Javascript 
================================================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>