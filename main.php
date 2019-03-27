<?php
include 'includes/header.php';
include 'includes/db.php';
include 'includes/table.php';
?>

<!-- Portfolio section
================================================== -->
<section id="portfolio">
   <div class="container">
      <div class="row">

         <div class="col-md-12 col-sm-12">
            
               <!-- iso section -->
               <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">

                  <ul class="filter-wrapper clearfix">
                           <li><a href="#" data-filter="*" class="selected opc-main-bg">Топ афіш</a></li>
                           <li><a href="#" class="opc-main-bg" data-filter=".graphic">Найпопулярніші</a></li>
                         <!--  <li><a href="#" class="opc-main-bg" data-filter=".template"></a></li> -->
                           <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Обмежена кількість квитків</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".branding">скоро</a></li>
                        </ul>

                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                           <div class="iso-box-wrapper col4-iso-box">

                              <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="images/1.jpg" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="#ar"><i class="fa fa-link"></i></a>
                                                <h2>Project One</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box graphic template col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="images/2.jpg" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="#ar"><i class="fa fa-link"></i></a>
                                                <h2>Project Two</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box template graphic col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="images/3.jpg" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="#ar"><i class="fa fa-link"></i></a>
                                                <h2>Project Three</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box graphic template col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="images/4.jpg" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                               <a href="#ar"><i class="fa fa-link"></i></a>
                                                <h2>Project Four</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="images/5.jpg" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="#ar"><i class="fa fa-link"></i></a>
                                                <h2>Project Five</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box graphic branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="images/6.jpg" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="#ar"><i class="fa fa-link"></i></a>
                                                <h2>Project Six</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                            </div>
                        </div>

               </div>
             <h1><a name="ar"></a>Усі заходи</h1>
<?php
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
<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>