<?php include 'header.html'; ?>

<style>
	.btn-default {
		width: 160px;
		display: flex;
		justify-content: center;
	}

.first-img{
    margin-top: 40px!important;
}

.second-img{
    margin-top: 40px!important;
}

</style>
	
</body>

<!-- Header section
================================================== -->
<section id="header" class="header-three">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
            	<div class="header-thumb">
              		 <h1 class="wow fadeIn reviue-article" data-wow-delay="0.6s">Особистий кабінет</h1>
              		 <h3 class="wow fadeInUp reviue-article" data-wow-delay="0.9s">Ласкаво просимо!</h3>
           		</div>
			</div>

		</div>
	</div>		
</section>


<!-- About section
================================================== -->
<section id="about">
   <div class="container">
      <div class="row">

<div class="reviue-data about-data-first">
	<h1 class="reviue-article" >Перегляд даних ↓ </h1><br><br>
	<a href="views/b_self.php" class="btn btn-default btn-default-about-client">Мої дані</a>
	<!-- <a href="empl/ticket.php" class="btn btn-default">Інформація про квитки</a> -->
	<a href="views/new_order.php" class="btn btn-default btn-default-about-client">Нове замовлення</a>
	<a href="views/buyer_del.php" class="btn btn-default btn-default-about-client">Доставки</a>
	<a href="views/buyer_o.php" class="btn btn-default btn-default-about-client">Мої замовлення</a>
</div>
				
         <div class="wow fadeInUp col-md-4 col-sm-5" data-wow-delay="1.3s">
         	<img src="../images/about-img1.jpg" class="img-responsive first-img" alt="About">
		</div>

		<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="1.6s">
		    
			<img src="../images/about-img.jpg" class="img-responsive second-img" alt="About">
			<p>Квиткове агентство Impreza дає унікальну можливість організовувати своє дозвілля з мінімальною затратою сил і часу. Це не просто афіша заходів, які відбудуться в місті. Це ретельна підбірка того, що може зацікавити людину і допомогти їй.</p>
		</div>


		<!-- <div class="clearfix"></div> -->
      </div>
   </div>
</section>


<?php
include 'footer.html';
include 'script.html';
?>
