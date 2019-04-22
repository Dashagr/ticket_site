<?php
include 'head2.html';
include '../head.html';
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
                          <iframe src="../../includes/event_table.php" width="870" height="489"></iframe>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="fc-tab-2">
                
                  <div class="about-container">
                    <div class="row">
                      <div class="col-md-12"style="height:550px;overflow-y: scroll;">
                        <h2>Додати нову <em>інформацію</em></h2><br>
						<form method="POST" action="../../includes/e_add.php" class="form">
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
                      <div class="col-md-12"style="height:550px;overflow-y: scroll;">
                        <h2><em>Редагувати</em> дані</h2>
                        <div class="under-line"></div>
						<form method="GET" action="../../includes/e_edit.php" class="form">
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
                            <input type="radio" name="var" value="event_code" checked> Код заходу</form><br>
							<label class="label-input"><input type="radio" name="var" value="event_name" checked> Назва заходу</label><br>
							<label class="label-input"><input type="radio" name="var" value="category"> Категорія</label><br>
							<label class="label-input"><input type="radio" name="var" value="genre"> Жанр</label><br>
							<label class="label-input"><input type="radio" name="var" value="data"> Дата (рррр-мм-дд)</label><br>
							<label class="label-input"><input type="radio" name="var" value="time"> Час (гг:хх)</label><br>
							<label class="label-input"><input type="radio" name="var" value="current_num_tickets"> Поточна кількість квитків</label><br>
							<label class="label-input"><input type="radio" name="var" value="summary_num_tickets">  Куплені квитки (кількість)</label><br>
							<label class="label-input"><input type="radio" name="var" value="min_price"> Ціна</label><br>  
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
                          <form method="GET" action="../../includes/e_del.php" class="form">
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
    
<?php
    include '../foot.html';
?>