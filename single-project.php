<?php
include 'db.php';

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
    background-position: center center;      
    background-repeat: no-repeat;      
    background-attachment: fixed;      
    background-size: cover;      
    background-color: #464646; 
	font-style: italic;
	font-variant: small-caps;
	font-family: Times New Roman, serif;
   }
   
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
	background-color: white;
	opacity: 1;
    width: 80%;
    margin: auto
}
th {
    background-color: #a0e5e0;
}

th, td {
    padding: 15px;
}

@media{}
</style>
</head>
<body>

    <body>
        
<!-- Single Post section
================================================== -->
<section id="single-post">
   <div class="container">
      <div class="row">

         <div class="wow fadeInUp col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10" data-wow-delay="2.3s">
         	  <div class="blog-thumb">
         		   
         		   <h2>Чек № ... ID ... </h2>
<p>Продавець ... </p>
<br><br>
<table>
  <tr>
    <th>Назва рослини</th>
    <th>Кількість</th>
    <th>Ціна</th>
	<th>Сума</th>
  </tr>
  <tr>
    <td>А</td>
    <td>Б</td>
    <td>В</td>
	<td>А</td>
  </tr>
  <tr>
    <td>Г</td>
    <td>Д</td>
    <td>Ж</td>
	<td>А</td>
  </tr>
  <tr>
    <td>З</td>
    <td>І</td>
    <td>К</td>
	<td>А</td>
  </tr>
  <tr>
    <td   colspan="3" style="text-align:right; "><b>Загальна сума: </b></td>
	<td>10000</td>
  </tr>
</table>
          
         	  </div>
		    </div>

      </div>
   </div>
</section>
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

              <div class="navicon">
</div>
      </div>           
            </div>        

</body>
</html>