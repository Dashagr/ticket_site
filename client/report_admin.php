<?php
include 'header_a.html';
?>

 <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                      <ul id="nav-menu">
                        <li><a href="about_a.php">Особистий кабінет</a></li>
                        <li><a href="single-post.php">Звіт</a></li>
                        <li><a href="index.php">Вийти</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>

<!-- Header section
================================================== -->
<section id="header" class="header-five">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="0.6s">Звіти</h1>
              <h3 class="wow fadeInUp" data-wow-delay="0.9s">Деякі дані</h3>
          </div>
			</div>

		</div>
	</div>		
</section>



<!-- About section
================================================== -->
<section id="about">
   <div class="container">
        <!-- 	<img class="repor" src="images/info.jpg" class="img-responsive" alt="About"> -->
         	<h1>Деякі відомості</h1>
			<p><br> Покупці, які купували квитки на заходи жанру «фестиваль» та ніколи не замовляли доставку.
                <br><a href="../includes/req/req1.php" class="btn btn-default">Подивитись</a><br>
             <br>Кількість замовлень для кожного місця проведення.
                <br><a href="../includes/req/req2.php" class="btn btn-default">Подивитись</a><br>
             <br>Співробітники, які співпрацювали над замовленням з одним конкретним кур’єром Бережним більше одного разу
                <br><a href="../includes/req/req3.php" class="btn btn-default">Подивитись</a> <br>
             <br>Імена артистів, які беруть участь у всіх заходах
                <br><a href="../includes/req/req4.php" class="btn btn-default">Подивитись</a> <br>
             <br>Заходи, на які було здійснено замовлення на суму, більшу, ніж n гривень.
                <form method="GET" action="../includes/req/req5.php" class="form" style="text-align: center;">
    <b>Введіть суму:</b><br>
							<input type="text" name="new_val" value=""><br><br>
							<input type="submit" value="Подивитись" class="btn btn-default">
                          </form>              
        <p>     <br>Артист та назви заходів, на яких вони виступали, у  заданому жанрі.<br>
              <form method="GET" action="../includes/req/req6.php" class="form" style="text-align: center;">
    <b>Вказати жанр:</b><br>
							<input type="text" name="new_val" value=""><br><br>
							<input type="submit" value="Подивитись" class="btn btn-default"> <br>
                          </form>  </p>
		
		<div class="clearfix"></div>

      </div>
   </div>
</section>

<?php
    include 'footer.html';
    include 'script.html';
?>