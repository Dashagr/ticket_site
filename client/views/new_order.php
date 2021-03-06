<?php
include 'head2.html';
include '../head.html';
include '../../includes/helpers/db.php';
?>
<style type="text/css">input {
    width: 150px;
    margin: 20px auto; }</style>
    
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
                <li class="tabs-1" data-tab-name="profile"><span class="tabs-text">Квитки</span></li>
                <li class="tabs-2" data-tab-name="resume"><span class="tabs-text">Створити</span></li>
                <li class="tabs-3" data-tab-name="portfolio"><span class="tabs-text">Змінити</span></li>             
                <li class="tabs-4" data-tab-name="contact"><span class="tabs-text">Видалити</span></li>
              </ul>
              
              <div class="resp-tabs-container hor_1 tabs_scroll">
                
               <div class="fc-tab-1">
                
                  <div class="home-container">
                    <div class="row">
                      <div class="col-md-6">
                          <h3 style="text-align:center">Вільні квитки</h3>
                          <iframe frameborder="0" src="../../includes/ticket_table.php" width="870" height="489"></iframe>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="fc-tab-2">
                
                  <div class="about-container">
                    <div class="row">
                      <div class="col-md-12"style="height:550px;overflow-y: scroll;">
                        <h2>Додати нове <em>замовлення</em></h2><br>
						<form method="POST" action="../../includes/tio_add.php" class="form">
							
                            <b>Оберіть захід:</b>
                            <select name="ticket_code" class="custom">
                                 <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `Ticket` INNER JOIN `Event` ON `Ticket`.`event_code` = `Event`.`event_code` ORDER BY `event_name`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['ticket_code']."'>".$row['event_name']." - ".$row['ticket_code']."</option><br>"; 
                            }
    ?>   </select><br>
                            <b>Кількість квитків :</b>
							<input type="text" name="quantity_of_tickets" value=""><br><br>
                            
                            <b>Якщо хочете зарезервувати замовлення, натисніть "r",<br> якщо придбати - "d":<br></b>
                             <select name="order_status" class="custom">
                                 <option selected disabled>Оберіть</option>
                                 <option>d</option>
                                 <option>r</option>
                             </select><br>
                        
							
							<input type="submit" class="submit" value="Додати" class="primary-button"><br>
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
						<form method="GET" action="../../includes/tio_edit.php" class="form">
							<b>Оберіть код замовлення, яке хочете змінити:</b><br>
							<select name="account_number">
                                 <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT DISTINCT * FROM `ticket_in_order`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['account_number']."'>".$row['account_number']."</option><br>"; 
                            }
    ?>   </select>
						<br><br>
							<b>d - сплачено</b><br>
                            <b>r - зарезервовано</b><br>
                            <b>c - знято з резерву</b><br>
							
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
                
               <div class="fc-tab-3"> 

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
