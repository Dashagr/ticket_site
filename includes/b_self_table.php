<?php
include 'helpers/db.php';
include '../client/table.html';

session_start();
$login = $_SESSION['login'];

$tbl = mysqli_query($connection, "SELECT * FROM `Buyer` WHERE `Buyer`.`login` = '$login' ");
$table = "<table class=table-tempale cellpadding='5'  width=100% >";
$table .= "<tr>";
      $table .= "<th></th>";
while ($row = mysqli_fetch_assoc($tbl))
    {
    
    if ($row['status'] == 0){
        $row['status']="ordinary";
    }else{$row['status']="PRIME";}
    
      $table .= "<th  class=table-article><span class=table-article>Ваша інформація</span></th>";
      $table .= "<tr>";
      $table .= "<tr class=table-article><td>Номер телефону</td>";
        $table .= "<td class=table-row>".$row['buyer_phone']."</td></tr>";
      $table .= "<tr class=table-article><td>Прізвище</td>";
	      $table .= "<td class=table-row>".$row['buyer_surname']."</td></tr>";
      $table .= "<tr class=table-article><td>Ім'я</td>";
        $table .= "<td class=table-row>".$row['buyer_name']."</td></tr>";
      $table .= "<tr class=table-article><td>По-батькові</td>";
        $table .= "<td class=table-row>".$row['buyer_sec_name']."</td></tr>";
      $table .= "<tr class=table-article><td>Пошта</td>";
        $table .= "<td class=table-row>".$row['buyer_email']."</td></tr>";
      $table .= "<tr class=table-article><td>Статус</td>";
        $table .= "<td class=table-row>".$row['status']."</td></tr>";
    }
      $table .= "</table> ";
      echo $table;
?>