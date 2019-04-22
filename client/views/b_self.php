<?php
  include 'head2.html';
  include '../head.html';
  include '../../includes/helpers/db.php';
?>

   <!-- Laoding page  -->
    <div class="preloader">
      <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
  
  <!-- Begin HorizontalTab style 6 -->
    <section class="section-full">

      <div class="container">

        <div class="row">

          <div class="col-md-12">
            
            <!-- Begin .HorizontalTab -->
            <div class="VerticalTab VerticalTab_hash_scroll VerticalTab_6 tabs_ver_6">
            
              <ul class="resp-tabs-list hor_1">
                <a href="../about.php"><div class="logo"><img src="../../images/logo.png"></div></a>
                <li class="tabs-1" data-tab-name="profile"><span class="tabs-text">Дані</span></li>
                <li class="tabs-3" data-tab-name="portfolio"><span class="tabs-text">Змінити</span></li> 
              </ul>
              
              <div class="resp-tabs-container hor_1 tabs_scroll">
                
                <div class="fc-tab-1">
                
                  <div class="home-container">
                    <div class="row">
                      <div class="col-md-6">
                          <iframe src="../../includes/b_self_table.php" width="850" height="305" frameborder="no" allowtransparency></iframe>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
<!--
                <div class="fc-tab-2">
                
                  <div class="about-container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2>Додати нову <em>інформацію</em></h2><br>
						<p>Ви не можете додати дані звідси!</p>
                        <p>Зареєструйте користувача тут  ↓ </p>
                        <br><a href="../sign.php" class="btn btn-default">Sign Up</a><br>
                      </div>
                    </div>
                  </div>
                  
                </div>
-->
                
                <div class="fc-tab-3">
				
		          	<div class="about-container">
                    <div class="row">
                      <div class="col-md-12">
                        <h2><em>Редагувати</em> дані</h2>
                        <hr>
                        <form method="GET" action="../../includes/bself_edit.php" class="form">
                          <span class="input-tittle">Оберіть поле, яке хочете змінити:</span>
                          <div class="all-input">
                            <label class="label-input"><input type="radio" name="var" value="buyer_phone" checked> <span class="input-value">Телефон</span></label>
                            <label class="label-input"><input type="radio" name="var" value="buyer_surname"><span class="input-value">Прізвище</span></label>
                            <label class="label-input"><input type="radio" name="var" value="buyer_name"> <span class="input-value">Ім'я</span></label>
                            <label class="label-input"> <input type="radio" name="var" value="buyer_sec_name"><span class="input-value">По-батькові</span></label>
                            <label class="label-input"><input type="radio" name="var" value="buyer_email"><span class="input-value">Пошта</span></label>
                          </div>
                          <span class="input-tittle">Введіть нове значення:</span>
                          <input class="new-value" type="text" name="new_val" value="">
                          <input type="submit" class="submit" value="Змінити" class="primary-button">
                        </form>                        
                      </div>
                    </div>
                  </div>
                  
                </div>
                
<!--
               <div class="fc-tab-4">
                
                  <div class="home-container">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="left-content">
                          <div class="left-line"></div>  
                          <h2><em>Видалення</em> даних</h2>
                          <form method="GET" action="../includes/b_del.php" class="form"> 
							<p>Оберіть покупця, якого хочете видалити:</p><br>
                              <p><select name="buyer_phone">
                                 <option selected disabled>Оберіть</option>
							<?php $tbl = mysqli_query($connection, "SELECT * FROM `buyer`"); 
                            while ($row = mysqli_fetch_assoc($tbl)) 
                            { 
                                echo "<option value='".$row['buyer_phone']."'>".$row['buyer_phone']."</option><br>"; 
                            }
    ?>   </select></p>   
							<input type="submit" value="Видалити" class="primary-button">
						</form>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
-->
                
              </div>
            </div>
            <!-- End .HorizontalTab -->
          
          </div>
          
        </div>
        
      </div>

    </section>

    
<?php
  include '../foot.html';
?>
