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
                          <iframe src="../../includes/venue_table.php" width="870" height="689"></iframe>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="fc-tab-2">
                
                  <div class="about-container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Додати нову <em>інформацію</em></h2><br>
						<form method="POST" action="../../includes/v_add.php" class="form">
							Назва закладу:<br>
							<input type="text" name="institution_name" value=""><br>
							Телефон:<br>
							<input type="text" name="internal_phone" value=""><br>
							Прізвище контактної особи:<br>
							<input type="text" name="authority_sec_name" value=""><br>
                            Ім'я контактної особи:<br>
                            <input type="text" name="authority_name" value=""><br>
                             По-батькові контактної особи:<br>
							<input type="text" name="authority_surname" value=""><br>
                           Вулиця:<br>
							<input type="text" name="venue_street" value=""><br>
                            № будинку:<br>
							<input type="text" name="venue_building_num" value=""><br>
                            Кількість зон:<br>
							<input type="text" name="number_of_zones" value=""><br>
                            Опис:<br>
							<input type="text" name="description" value=""><br><br>
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
						<form method="GET" action="../../includes/v_edit.php" class="form">
							<b>Оберіть зал, який хочете змінити:</b><br>
                    <p><select name="id"> 
                    <option selected disabled>Оберіть</option>
   <?php $tbl = mysqli_query($connection, "SELECT * FROM `Venue`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['institution_name']."'>".$row['institution_name']."</option><br>"; 
                            }
    ?>
   </select></p>                   
						<br>
							<b>Оберіть поле, яке хочете змінити:</b><br>
							<input type="radio" name="var" value="institution_name" checked> Назва закладу<br>
							<input type="radio" name="var" value="internal_phone"> Телефон<br>
							<input type="radio" name="var" value="authority_sec_name"> Прізвище контактної особи<br>
                            <input type="radio" name="var" value="authority_name"> Ім'я контактної особи<br>
                            <input type="radio" name="var" value="authority_surname"> По-батькові контактної особи <br>
                            <input type="radio" name="var" value="venue_street"> Вулиця<br>
                            <input type="radio" name="var" value="venue_building_num"> № будинку<br>
                            <input type="radio" name="var" value="number_of_zones"> Кількість зон<br>
							<input type="radio" name="var" value="description"> Опис<br>
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
                          <form method="GET" action="../../includes/v_del.php" class="form">
							<p>Оберіть артиста, якого хочете видалити:</p><br>
							<p><select name="id"> 
                    <option selected disabled>Оберіть</option>
   <?php $tbl = mysqli_query($connection, "SELECT * FROM `Venue`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['institution_name']."'>".$row['institution_name']."</option><br>"; 
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