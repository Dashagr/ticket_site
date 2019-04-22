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

            <a href="../about_c.php"><div class="responsive-logo hidden-lg hidden-md hidden-sm"><img src="../../images/logo.png"></div></a>
            
            <!-- Begin .HorizontalTab -->
            <div class="VerticalTab VerticalTab_hash_scroll VerticalTab_6 tabs_ver_6">
            
              <ul class="resp-tabs-list hor_1">
                <a href="../about_c.php"><div class="logo"><img src="../../images/logo.png"></div></a>
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
                          <iframe src="../../includes/del_table.php" width="870" height="489"></iframe>
                      </div>
                    </div>
                  </div>
                </div>
                  
                
                
                <div class="fc-tab-2">
                
                  <div class="about-container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Додати нову <em>інформацію</em></h2><br>
						<form method="POST" action="../../includes/d_add.php" class="form">
							Вулиця:<br>
							<input type="text" name="del_street" value=""><br>
							№ будинку :<br>
							<input type="text" name="del_num_of_building" value=""><br>
							№ квартири:<br>
							<input type="text" name="del_num_of_flat" value=""><br>
							Дата (рррр-мм-дд):<br>
							<input type="text" name="desired_date" value=""><br>
							Час (гг:хх): <br>
							<input type="text" name="desired_time" value=""><br>
							Статус:<br>
							<input type="text" name="delivery_Status" value=""><br>
				            Кур'єр:<br>
                            <select name="bank_details_courier">
                                 <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `courier`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['bank_details_courier']."'>".$row['bank_details_courier']."</option><br>"; 
                            }
    ?>   </select><br><br>
							Замовлення:<br>
                             <select name="account_number">
                                 <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `orders`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['account_number']."'>".$row['account_number']."</option><br>"; 
                            }
    ?>   </select><br><br>
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
						<form method="GET" action="../../includes/d_c_edit.php" class="form">
							<b>Оберіть ID доставки, яку хочете змінити:</b><br>
							<select name="id">
                                 <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `delivery`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['delivery_code']."'>".$row['delivery_code']."</option><br>"; 
                            }
    ?>   </select><br><br>
				  <b> Встановіть новий статус замовлення<br>
                            	<br><br>
                            <b>1 - доставка здійснена</b><br>
                           	<b>0 - очікується</b><br>
                         
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
                          <form method="GET" action="../../includes/d_del.php" class="form">
							<p>Оберіть ID заходу, яке хочете видалити:</p><br>
							 <select name="id_del">
                                 <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `delivery`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['delivery_code']."'>".$row['delivery_code']."</option><br>"; 
                            }
    ?>   </select><br><br>
    
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