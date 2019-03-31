<?php
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
                          <iframe src="../../includes/empl_table.php" width="870" height="689"></iframe>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="fc-tab-2">
                
                  <div class="about-container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Додати нову <em>інформацію</em></h2><br>
                          <form method="GET" action="../../includes/empl_add.php" class="form">
                         
                              Банківські реквізити<br>
                            <input type="text" name="bank_details" value=""><br> 
                              Прізвище<br>
							<input type="text" name="surname" value=""> <br>
                               Ім'я<br>
							<input type="text" name="name" value=""><br>
                              По-батькові<br>
                            <input type="text" name="sec_name" value=""><br> 
                              Пошта<br>
                            <input type="text" name="email" value=""><br>
                              Місто<br>
                            <input type="text" name="city" value=""><br>
                              Вулиця<br>
                            <input type="text" name="street" value=""><br>
                              Номер будинку<br>
                            <input type="text" name="house_num" value=""><br>
                              Номер квартири<br>
                            <input type="text" name="num_of_flat" value=""><br>
                              День народження<br>
                            <input type="text" name="courier_bday" value=""><br>
                              Логін<br>
                            <input type="text" name="login" value=""><br>
                              Пароль<br>
                            <input type="text" name="password" value=""> <br> <br>
                          <input type="submit" value="Додати" class="primary-button">
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
						<form method="GET" action="../../includes/empl_edit.php" class="form">
							<b>Оберіть банківські реквізити співробітника, якого хочете змінити:</b><br>
                           <p><select name="id">
                            <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `employee`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['bank_details_empl']."'>".$row['bank_details_empl']."</option><br>"; 
                            }
    ?>   </select></p>   
						<br><br>
							<b>Оберіть поле, яке хочете змінити:</b><br>
							 <form method="GET" action="../../includes/empl_edit.php" class="form">
                              Банківські реквізити<br>
                            <input type="text" name="bank_details" value=""><br> 
                              Прізвище<br>
							<input type="text" name="surname" value=""> <br>
                               Ім'я<br>
							<input type="text" name="name" value=""><br>
                              По-батькові<br>
                            <input type="text" name="sec_name" value=""><br> 
                              День народження<br>
                            <input type="text" name="bday" value=""><br>
                              Пошта<br>
                            <input type="text" name="email" value=""><br>
                              Місто<br>
                            <input type="text" name="city" value=""><br>
                              Вулиця<br>
                            <input type="text" name="street" value=""><br>
                              Номер будинку<br>
                            <input type="text" name="house_num" value=""><br>
                              Номер квартири<br>
                            <input type="text" name="num_of_flat" value=""><br>
                          <input type="submit" value="Змінити" class="primary-button">
                          </form>  
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
                          <form method="GET" action="../../includes/empl_del.php" class="form"> 
							<p>Оберіть покупця, якого хочете видалити:</p><br>
                              <p><select name="id_del">
                                 <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `employee`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['bank_details_empl']."'>".$row['bank_details_empl']."</option><br>"; 
                            }
    ?>   </select></p>   
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