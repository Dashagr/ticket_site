<br><br><br>
<p><h2>Співробітники, які співпрацювали над замовленням з одним конкретним кур’єром Бережним більше одного разу.</h2> </p> <br><br><br>

<?php
include '../helpers/db.php';
include '../../client/table.html';

$tbl = mysqli_query($connection, "SELECT `empl_surname`, `empl_name`, `empl_sec_name`, `Courier`.`courier_surname`, COUNT(`Delivery`.`delivery_code`) AS `N` FROM ((`Employee` INNER JOIN `Orders` ON `Employee`.`bank_details_empl` = `Orders`.`bank_details_empl`) INNER JOIN `Delivery` ON `Delivery`.`account_number` = `Orders`.`account_number`) INNER JOIN `Courier` ON `Courier`.`bank_details_courier` = `Delivery`.`bank_details_courier` WHERE `Courier`.`courier_surname` = 'Бережний' GROUP BY `empl_surname`, `empl_name`, `empl_sec_name`, `Courier`.`courier_surname` HAVING (COUNT(`Delivery`.`delivery_code`)) > 1");

$table = "<table border='1' cellpadding='5'  width=100%>";
      $table .= "<tr>";
      $table .= "<th></th>";
	  $table .= "<th>Прізвище</th>";
      $table .= "<th>Ім'я</th>";
      $table .= "<th>По-батькові</th>";
      $table .= "<th>Прізвище кур'єра</th>";
      $table .= "<th>Кількість</th>";

while ($row = mysqli_fetch_assoc($tbl))
    {
      $table .= "<tr>";
      $table .= "<td></td>";
      $table .= "<td>".$row['empl_surname']."</td>";
      $table .= "<td>".$row['empl_name']."</td>";
      $table .= "<td>".$row['empl_sec_name']."</td>";
      $table .= "<td>".$row['courier_surname']."</td>";
	  $table .= "<td>".$row['N']."</td>";
    }
      $table .= "</table> ";
      echo $table;
?>

  <br><button><a href="../../client/about_a.php" >Назад</a></button><br>
