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
                          <iframe src="../../includes/ticket_table.php" width="870" height="489"></iframe>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                <div class="fc-tab-2">
                
                  <div class="about-container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Додати нову <em>інформацію</em></h2><br>
						<form method="POST" action="../../includes/t_add.php" class="form">
                            Ціна:<br>
							<input type="text" name="price" value=""><br>
                            Зона:<br>
							<input type="text" name="zona" value=""><br>
							Ряд:<br>
							<input type="text" name="row" value=""><br>
							Місце:<br>
							<input type="text" name="place" value=""><br>
                            <b>Код заходу:</b><br>
                             <select name="event_code">
                                   <option selected disabled>Оберіть</option>
   <?php $tbl = mysqli_query($connection, "SELECT * FROM `Event`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['event_code']."'>".$row['event_code']."</option><br>";
                            }
    ?>
   </select>  <br><br>
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
                          <form method="GET" action="../../includes/t_edit.php" class="form">
							<b>Оберіть код квитка, який хочете змінити:</b><br>
                           <select name="ticket_code">
                        <option selected disabled>Оберіть</option>
   <?php $tbl = mysqli_query($connection, "SELECT * FROM `Ticket`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['ticket_code']."'>".$row['ticket_code']."</option><br>";
                            }
    ?>
   </select><br><br>
							<b>Оберіть поле, яке хочете змінити:</b><br>
							<label class="label-input"><input type="radio" name="var" value="price" checked> Ціна</label><br>
							<label class="label-input"><input type="radio" name="var" value="zona">Зона</label><br>
							<label class="label-input"><input type="radio" name="var" value="row"> Ряд</label><br>
							<label class="label-input"><input type="radio" name="var" value="place"> Місце</label><br>
                              <b>Код заходу</b><br>
                           <select name="event_code">
                        <option selected disabled>Оберіть</option>
   <?php $tbl = mysqli_query($connection, "SELECT * FROM `Ticket`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['event_code']."'>".$row['event_code']."</option><br>";
                            }
    ?>
   </select><br><br>
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
                            <form method="GET" action="../../includes/t_del.php" class="form">
							<p>Оберіть квиток, який буде видалено:</p><br>
							 <select name="ticket_code">
                                 <option selected disabled>Оберіть</option>
                                <?php $tbl = mysqli_query($connection, "SELECT * FROM `Ticket`"); 
                                    while ($row = mysqli_fetch_assoc($tbl)) 
                                { 
                                echo "<option value='".$row['ticket_code']."'>".$row['ticket_code']."</option><br>";
                            }
                                 ?>
                                </select><br><br>
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