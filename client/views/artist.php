<?php
include 'head2.html';
include '../header.html';
include '../../includes/helpers/db.php';
?>

    <!-- Begin HorizontalTab style 6 -->
    <section class="section-full image-bg">

      <div class="container">

        <div class="row">

          <div class="col-md-12">

            <a href="../about_a.php"><div class="responsive-logo hidden-lg hidden-md hidden-sm"><img src="../../images/logo.png"></div></a>
            
            <!-- Begin .HorizontalTab -->
            <div class="VerticalTab VerticalTab_hash_scroll VerticalTab_6 tabs_ver_6">
            
              <ul class="resp-tabs-list hor_1">
                <a href="../about_a.php"><div class="logo"><img src="../../images/logo.png"></div></a>
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
                          <iframe src="../../includes/artist_table.php" width="870" height="289"></iframe>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="fc-tab-2">
                
                  <div class="about-container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Додати нову <em>інформацію</em></h2><br>
						<form method="POST" action="../../includes/a_add.php" class="form">
							Артист:<br>
							<input type="text" name="artist_name" value=""><br>
							Обробка пісень (якщо є):<br>
							<input type="text" name="processing" value=""><br>
							Переклад (якщо є):<br>
							<input type="text" name="translation" value=""><br>
							Назва альбому(туру):<br>
							<input type="text" name="album_title" value=""><br><br>
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
						<form method="GET" action="../../includes/a_edit.php" class="form">
							<b>Оберіть артиста, якого хочете змінити:</b><br>
                           <p><select name="id">
                                 <option selected disabled>Оберіть</option>
   <?php $tbl = mysqli_query($connection, "SELECT * FROM `Artist`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                //echo "<input type='radio' name='id' value='".$row['artist_name']."'>".$row['artist_name']."<br>";
                                echo "<option value='".$row['artist_name']."'>".$row['artist_name']."</option><br>";
                            }
    ?>
   </select></p>   
						<br><br>
							<b>Оберіть поле, яке хочете змінити:</b><br>
							<input type="radio" name="var" value="artist_name" checked> Назва артиста<br>
							<input type="radio" name="var" value="processing"> Обробка пісень<br>
							<input type="radio" name="var" value="translation"> Переклад<br>
							<input type="radio" name="var" value="album_title"> Назва альбому(туру)<br>
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
                          <form method="GET" action="../../includes/a_del.php" class="form">
							<p>Оберіть артиста, якого хочете видалити:</p><br>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `Artist`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<input type='radio' name='id_del' value='".$row['artist_name']."'>".$row['artist_name']."<br>"; 
                            }
    ?>
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
    
<?php
  include '../foot.html';
?>