<?php
include 'includes/db.php';

session_start();
$login = $_SESSION['login'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title
   ================================================== -->
	<title>Pure Mix - HTML CSS Template</title>

	<!-- Main CSS
   ================================================== -->
	<link rel="stylesheet" href="/css/style.css">

	<!-- Google web font 
   ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
<style>

body {
	background-image: url(images/zvit.jpg);      
    background-position: center;      
    background-repeat: no-repeat;      
    background-attachment: fixed;      
    background-size: cover;      
    background-color: #464646; 
	font-style: italic;
	font-variant: small-caps;
	font-family: Times New Roman, serif;
   }
    
    h1{
       font-size: 250%; 
       color: white;
    }
    p{
        font-size: x-large;
        color:aqua   ;
    }
    .sector {
        background-image: url(images/ticke.jpg);      
        background-position: center center;      
        background-repeat: no-repeat;      
        background-attachment: fixed;      
        background-size: cover;      
        background-color: white;
        width: 85%;
        margin: auto;
        padding: 25px;
        padding-top: 1px;
        padding-left: 60px;
    }   
    
    .fig{
        width: 320px;
        height: 70px; 
        float: center;
        display: block;
        margin: auto;
        text-align: center;
    }
    
    mark{
         background: #1AA2A1;
    }
@media print{
  a {
    display: none;
  }
  
  @page {
    margin: 0cm;
  }
}
</style>
</head>
    
<body>

<!-- Navigation section
================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="main.php">Impreza</a>
              </div>
             </div>
         </div>           
       </div>
    </nav>
</div>       

    
<!-- Single Post section
================================================== -->
<section id="single-post">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10" data-wow-delay="2.3s">
         	  <div class="blog-thumb">
         		<div class="sector">
                  
                    <?php
                    
                    $eIDq = mysqli_query($connection, "SELECT * FROM (((`Event` INNER JOIN `Ticket` ON `Event`.`event_code` = `Ticket`.`event_code`) INNER JOIN `Ticket_In_Order` ON `Ticket`.`ticket_code` = `Ticket_In_Order`.`ticket_code`) INNER JOIN `Orders` ON `Ticket_In_Order`.`account_number` = `Orders`.`account_number`) INNER JOIN `Buyer`ON `Buyer`.`buyer_phone` = `Orders`.`buyer_phone` WHERE `Orders`.`account_number` = (SELECT MAX(`Orders`.`account_number`) FROM `Buyer` INNER JOIN `Orders` ON `Buyer`.`buyer_phone` = `Orders`.`buyer_phone` WHERE `login` = '$login' )");
                    
                    $eIDarr = mysqli_fetch_assoc($eIDq);
                    $event_name = $eIDarr['event_name'];
                    $category = $eIDarr['category'];
                    $date = $eIDarr['data'];
                    $time = $eIDarr['time'];
                    $institution = $eIDarr['institution'];
                    $zona = $eIDarr['zona'];
                    $row = $eIDarr['row'];
                    $place = $eIDarr['place'];
                    $total_price = $eIDarr['min_price'];
                    ?>
                    <p style="text-align: center"><b><?php echo $institution ?> </b><br><br></p>
                    <h1 style="text-align: center"><?php echo $event_name ?></h1>
                   
                    <p>                        
                    <strong style="color: #120BAD "><?php echo $category ?></strong><br> 
                    <b>DATE: <?php echo $date ?></b><br>
                    <b>TIME: <?php echo $time ?></b><br>
                    <b>SECTOR: <?php echo $row . "   " . $place ?></b> <br>
                    <b>ZONA: <?php echo $zona ?></b><br><br>
                        <mark>TOTAL PRICE: <?php echo $total_price ?></mark>     
                        <img class="fig" src="images/code.jpg" >
                    </p>
                  
                  
                  
                  
                  
          
         	  </div>
             </div>
		    </div>

      </div>
   </div>
</section>
        
</body>
</html>