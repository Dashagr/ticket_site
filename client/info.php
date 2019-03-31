<?php
include 'header.html';
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
         		   <a href="#ar"><img src="../images/b_art.jpg" class="img-responsive" alt="Blog"></a>
         		   <a href="#ar"><h1>Тільки найкращі виконавці</h1></a>
         		     <p>У нас ви можете придбати квитки тільки на найкращих виконавців серед вітчизняних та закордонник зірок.Хочете побачити селебріті? Купуйте квитки! </p>
         		     <a href="#ar" class="btn btn-default">Показати більше</a>
         	    </div>
		    </div>

		    <div class="wow fadeInUp col-md-6 col-sm-6" data-wow-delay="1.6s">
         	  <div class="blog-thumb">
         		   <a href="#ve"><img src="../images/b_ven.jpg" class="img-responsive" alt="Blog"></a>
         		   <a href="#ve"><h1>Тільки найращі концертні майданчики</h1></a>
         		     <p>Найвідоміші концертні зали нашого міста радо зустрінуть вас у віп-зонах. Перелік усіх майданчиків тут  ↓ </p>
         		     <a href="#ve" class="btn btn-default">Показати більше</a>
         	  </div>
		    </div>

        <?php
            include '../includes/helpers/info_table.php';
        ?>

        <div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="1.3s">
          <h1>Impreza</h1>
          <p>Квиткове агентство Impreza дає унікальну можливість організовувати своє дозвілля з мінімальною затратою сил і часу. Це не просто афіша заходів, які відбудуться в місті. Це ретельна підбірка того, що може зацікавити людину і допомогти їй.</p>
       </div>

      </div>
   </div>
</section>

<?php
    include 'footer.html';
    include 'script.html';
?>
