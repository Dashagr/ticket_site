<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="../css/info.css">
</head>
<body>
<?php
include 'header.html';
?>
<style>
	.header-one, .header-two,
	.header-three, .header-four,
	.header-five {
		height: 100vh!important;
		width: 100%;
		min-height: 420px;
		display: flex;
		align-items: center;
		justify-content: center;
	}
	.logo-article{
    width: 100%;
    text-align: center;
    padding-bottom: 100px;
}
.header-thumb {
	margin: 0!important;
}
</style>

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
         		     <p>У нас ви можете придбати квитки тільки на найкращих виконавців серед вітчизняних та закордонник зірок. Купуйте квитки! </p>
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
          <h1 class="header-logo">Impreza</h1>
          <p class="logo-article">Квиткове агентство Impreza дає унікальну можливість організовувати своє дозвілля з мінімальною затратою сил і часу. Це не просто афіша заходів, які відбудуться в місті. Це ретельна підбірка того, що може зацікавити людину і допомогти їй.</p>
       </div>

      </div>
   </div>
</section>

<?php
    include 'footer.html';
    include 'script.html';
?>

</body>
</html>
