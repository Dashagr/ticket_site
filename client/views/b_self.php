<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

<!-- Bootstrap CSS
 ================================================== -->
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<link rel="stylesheet" href="../../css/bootstrap1.min.css">
<link rel="stylesheet" href="../../css/bootstrap-theme.min.css">

<!-- Animate CSS
 ================================================== -->
<link rel="stylesheet" href="../../css/animate.min.css">
<link rel="stylesheet" href="../../css/animate1.min.css">

<!-- Font Icons CSS
 ================================================== -->
<link rel="stylesheet" href="../../css/font-awesome.min.css">
<link rel="stylesheet" href="../../css/ionicons.min.css">
<link rel="apple-touch-icon" href="apple-touch-icon.png">

<!-- Main CSS
 ================================================== -->
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="../../css/easy-responsive-tabs.min.css">
<link rel="stylesheet" href="../../css/tabs.css">
<link rel="stylesheet" href="../../css/templatemo-style.css">
<link rel="stylesheet" href="../../css/main.css">
<link rel="stylesheet" href="../../css/normalize.css">


<!-- Google web font 
 ================================================== -->	
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

<script src="../../js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<style>
  
/* ----- HEADER ------- */
.navicon {
    padding: 0;
    top: -5px;
    position: relative;
    z-index: 9999;
}
.brand {
    padding: 8px 0 0 10px;
}

body{
  height: 100vh!important;
  min-height: 100%;
  overflow: hidden;
}

.brand .header-logo:hover{
    color: rgba(224, 228, 231, 0.904)!important;
    cursor: pointer;
}

.brand .header-logo{
    color: rgb(49, 69, 83);
    font-family: 'ZCOOL XiaoWei', serif;
    transition: .5s;
}

.navbar{
    height: 0;
    width: 100%;
    background: #4985859a;
    background-size: cover;
    border: none;
    transition: .4s;
    position: absolute;
    z-index: 1000;
}

.home-container {
    margin-top: 20%;
    background-color: transparent;
}

.resp-tabs-list {
  padding: 15.5% 0 0 0!important;
  margin: 0!important;
}

.about-container {
  margin: 15.5% 0 0 0!important;
  background: #fff;
  border: 1px solid #999;
}

footer {
  background: #3a3a42!important;
  padding-top: 0px!important;
  padding-bottom: 10px!important;
  text-align: center;
}

.VerticalTab.tabs_ver_6 .resp-tabs-list .logo img{
  transition: .3s;
  border: 1px solid #999;
}

.VerticalTab.tabs_ver_6 .resp-tabs-list .logo img:hover {
  background: #f78b26!important;
}

.VerticalTab.tabs_ver_6 .resp-tabs-list li {
    color: #000;
    border: 1px solid #999!important;
}

.VerticalTab.tabs_ver_6 .resp-tabs-list .resp-tab-active {
  border: 1px solid #999!important;
}

.label-input:hover{
  cursor: pointer;
  color: #f78b26;
  background: #fff;
}

.label-input{
  padding: 5px 10px;
  margin: 0 10px;
  border: 1px solid #999;
  color: rgb(49, 69, 83);
  background: rgb(245, 245, 245);
}

.input-value:hover~ .label-input{
  background: #fff!important;
}

.form{
  display: flex;
  flex-direction: column;
}

.input-tittle{
  font-size: 16px;
  color: rgb(49, 69, 83);
  padding: 20px 0;
  font-weight: bold;
}

.input-value{
  padding: 0 10px;
}

.new-value{
  margin-left: 35%;
  padding: 10px;
  font-size: 20px;
  width: 30%;
}

.submit{
  margin-top: 40px;
  padding: 20px 0 ;
  font-style: normal;
  font-weight: bold;
  font-size: 16px;
  background: rgb(245, 245, 245);
  color: #f78b26;
  border-top: 1px solid #999;
  transition: .7s;
}

.submit:hover{
  background: #f78b26;
  color: #000;
}

</style>

<body>

<?php
  include '../header.html';
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
                        <form method="GET" action="../../includes/helpers/bself_edit.php" class="form">
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
    <!-- End HorizontalTab style 6 -->
    <footer class="footer">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
					<li><a href="#" class="fa fa-google-plus"></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>

</body>
    
<?php
  include '../foot.html';
?>

</boby>
</head>