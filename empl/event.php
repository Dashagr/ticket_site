<?php
include '../includes/header.php';
include '../includes/db.php';
include '../includes/table.php';
?>

<!doctype html>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Short HTML CSS Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="../css/bootstrap1.min.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/animate1.min.css">
        <link rel="stylesheet" href="../css/easy-responsive-tabs.min.css">
        <link rel="stylesheet" href="../css/tabs.css">
        <link rel="stylesheet" href="../css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
    <!-- Laoding page  -->
    <div class="preloader">
      <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- End Laoding page  -->

    <!-- Begin HorizontalTab style 6 -->
    <section class="section-full image-bg">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <a href="about_a.php"><div class="responsive-logo hidden-lg hidden-md hidden-sm"><img src="../img/logo.png"></div></a>
            
            <!-- Begin .HorizontalTab -->
            <div class="VerticalTab VerticalTab_hash_scroll VerticalTab_6 tabs_ver_6">
            
              <ul class="resp-tabs-list hor_1">
                <a href="about_a.php"><div class="logo"><img src="../img/logo.png"></div></a>
                <li class="tabs-1" data-tab-name="profile"><span class="tabs-text">Таблиця</span></li>
                <li class="tabs-2" data-tab-name="resume"><span class="tabs-text">Додати</span></li>
                <li class="tabs-3" data-tab-name="portfolio"><span class="tabs-text">Змінити</span></li>             
                <li class="tabs-4" data-tab-name="contact"><span class="tabs-text">Видалити</span></li>
              </ul>
              
              <div class="resp-tabs-container hor_1 tabs_scroll">
                
                <div class="fc-tab-1">
                
                  <div class="home-container">
                    <div class="row">
                      <div class="col-md-6">
                          <iframe src="../includes/event_table.php" width="870" height="489"></iframe>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="fc-tab-2">
                
                  <div class="about-container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Додати нову <em>інформацію</em></h2><br>
						<form method="POST" action="../includes/e_add.php" class="form">
							Назва заходу:<br>
							<input type="text" name="event_name" value=""><br>
							Категорія :<br>
							<input type="text" name="category" value=""><br>
							Жанр:<br>
							<input type="text" name="genre" value=""><br>
							Дата (рррр-мм-дд):<br>
							<input type="text" name="data" value=""><br>
							Час (гг:хх): <br>
							<input type="text" name="time" value=""><br>
							Поточна кількість квитків:<br>
							<input type="text" name="current_num_tickets" value=""><br>
				            Куплені квитки (кількість):<br>
							<input type="text" name="summary_num_tickets" value=""><br>
							Ціна:<br>
							<input type="text" name="min_price" value=""><br>     <br>   
                            <b>Місце проведення:</b><br>
                            якщо серед списку немає, додайте у відповідній таблиці
                           <p><select selected name="institution">
                           <option selected disabled>Оберіть</option>
   <?php $tbl = mysqli_query($connection, "SELECT * FROM `Venue`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['institution_name']."'>".$row['institution_name']."</option><br>";
                            }
    ?>
   </select></p>   
                            <b>Артист: </b><br>
                           <p><select name="artist_name">
                                 <option selected disabled>Оберіть</option>
   <?php $tbl = mysqli_query($connection, "SELECT * FROM `Artist`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['artist_name']."'>".$row['artist_name']."</option><br>";
                            }
    ?>
   </select></p>   
                              
                            <br>
							<input type="submit" value="Додати" class="primary-button"><br>
						</form>
                      
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="fc-tab-3">
				
			<div class="about-container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2><em>Редагувати</em> дані</h2>
                        <div class="under-line"></div>
						<form method="GET" action="../includes/e_edit.php" class="form">
							<b>Оберіть ID заходу, яке хочете змінити:</b><br>
                           <p><select name="event_code">
                                 <option selected disabled>Оберіть</option>
   <?php $tbl = mysqli_query($connection, "SELECT * FROM `event`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['event_code']."'>".$row['event_code']."</option><br>";
                            }
    ?>
   </select></p>   
							<b>Оберіть поле, яке хочете змінити:</b><br>
                            <input type="radio" name="var" value="event_code" checked> Код заходу<br>
							<input type="radio" name="var" value="event_name" checked> Назва заходу<br>
							<input type="radio" name="var" value="category"> Категорія<br>
							<input type="radio" name="var" value="genre"> Жанр<br>
							<input type="radio" name="var" value="data"> Дата (рррр-мм-дд)<br>
							<input type="radio" name="var" value="time"> Час (гг:хх)<br>
							<input type="radio" name="var" value="current_num_tickets"> Поточна кількість квитків<br>
							<input type="radio" name="var" value="summary_num_tickets">  Куплені квитки (кількість)<br>
							<input type="radio" name="var" value="min_price"> Ціна<br>  
                            <b>Місце проведення:</b><br>
                            якщо серед списку немає, додайте у відповідній таблиці
                           <p><select name="institution">
                            <option selected disabled>Оберіть</option>
   <?php $tbl = mysqli_query($connection, "SELECT * FROM `Venue`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['institution_name']."'>".$row['institution_name']."</option><br>";
                            }
    ?>
   </select></p>   
							<br><br>
							<b>Введіть нове значення:</b><br>
							<input type="text" name="new_val" value=""><br><br>
							<input type="submit" value="Змінити" class="primary-button">
                          </form>  
                          
                      </div>
                    </div>
                  </div>
                  
                </div>
                
               <div class="fc-tab-4">
                
                  <div class="home-container">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="left-content">
                          <div class="left-line"></div>  
                          <h2><em>Видалення</em> даних</h2>
                          <form method="GET" action="../includes/e_del.php" class="form">
							<p>Оберіть ID заходу, яке хочете видалити:</p><br>
							         <p><select name="event_code">
                                 <option selected disabled>Оберіть</option>
   <?php $tbl = mysqli_query($connection, "SELECT * FROM `event`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['event_code']."'>".$row['event_code']."</option><br>";
                            }
    ?>
   </select></p> 
							<input type="submit" value="Видалити" class="primary-button">
						</form>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                
              </div>
            </div>
            <!-- End .HorizontalTab -->
          
          </div>
          
        </div>
        
      </div>

    </section>
    <!-- End HorizontalTab style 6 -->
    

    </div> <!-- /container -->        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="../js/vendor/bootstrap.min.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/main.js"></script>
        <script src="../js/jquery.nicescroll.min.js"></script>
        <script src="../js/easyResponsiveTabs.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    

    </body>
</html>
