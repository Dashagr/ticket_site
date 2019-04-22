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

            <a href="../about.php"><div class="responsive-logo hidden-lg hidden-md hidden-sm"><img src="../../images/logo.png"></div></a>
            
            <!-- Begin .HorizontalTab -->
            <div class="VerticalTab VerticalTab_hash_scroll VerticalTab_6 tabs_ver_6">
            
              <ul class="resp-tabs-list hor_1">
                <a href="../about.php"><div class="logo"><img src="../../images/logo.png"></div></a>
                <li class="tabs-1" data-tab-name="profile"><span class="tabs-text">Таблиця</span></li>
                <li class="tabs-3" data-tab-name="portfolio"><span class="tabs-text">Змінити</span></li>             
              </ul>
              
              <div class="resp-tabs-container hor_1 tabs_scroll">
                
                <div class="fc-tab-1">
                
                  <div class="home-container">
                    <div class="row">
                      <div class="col-md-6">
                          <iframe src="../../includes/buyero_table.php" width="870" height="389"></iframe>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="fc-tab-2">
                
                  <div class="about-container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Додати нову <em>інформацію</em></h2><br>
						<form method="POST" action="../../includes/tio_add.php" class="form">
							Кількість квитків :<br>
							<input type="text" name="quantity_of_tickets" value=""><br>
							Код замовлення:<br>
							<input type="text" name="account_number" value=""><br>
							Дата (рррр-мм-дд):<br>
							<input type="text" name="purchase_date" value=""><br>
							Знижка: <br>
							<input type="text" name="discount" value=""><br>
							Загальна сума:<br>
							<input type="text" name="total_price" value=""><br>
				            Стан замовлення:<br>
							<input type="text" name="order_status" value=""><br>
                            
                            Телефон покупця:<br>
                            <select name="buyer_phone">
                                 <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `buyer`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['buyer_phone']."'>".$row['buyer_phone']."</option><br>"; 
                            }
    ?>   </select><br><br>
							Співробітник:<br>
                             <select name="bank_details_empl">
                                 <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `employee`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['bank_details_empl']."'>".$row['bank_details_empl']."</option><br>"; 
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
						<form method="GET" action="../../includes/tio_edit.php" class="form">
							<b>Оберіть код замовлення, яке хочете змінити:</b><br>
							<select name="account_number">
                                 <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `orders`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['account_number']."'>".$row['account_number']."</option><br>"; 
                            }
    ?>   </select>
						<br><br>
							<b>В - сплачено</b><br>
                            <b>Р - зарезервовано</b><br>
                            <b>З - знято з резерву</b><br>
							<b>Р - зарезервовано</b><br><br>
                           <b> Встановіть новий статус замовлення<br>
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
                          <form method="GET" action="../../includes/tio_del.php" class="form">
							<p>Оберіть замовлення, яке хочете видалити:</p><br>
							<select name="account_number">
                                 <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `orders`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['account_number']."'>".$row['account_number']."</option><br>"; 
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