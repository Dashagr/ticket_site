<?php
include 'db.php';

session_start();
$login = $_SESSION['login'];

$q = mysqli_query($connection, "SELECT `status`, `quantity_of_tickets`  FROM (`Buyer` INNER JOIN `Orders` ON `Buyer`.`buyer_phone`  = `Orders`.`buyer_phone`) INNER JOIN `Ticket_in_order` ON `Orders`.`account_number` = `Ticket_in_order`.`account_number` WHERE `Orders`.`account_number` = (SELECT MAX(`Orders`.`account_number`) FROM `Buyer` INNER JOIN `Orders` ON `Buyer`.`buyer_phone`  = `Orders`.`buyer_phone` WHERE `login` = '$login' )");
$arr = mysqli_fetch_assoc($q);

$status = $arr['status'];
$qot = $arr['quantity_of_tickets'];

$bq = mysqli_query($connection, "SELECT * FROM `Buyer` WHERE `login` = '$login' ");
$barr = mysqli_fetch_assoc($bq);
$buyer_phone = $barr['buyer_phone'];

$ticket_code = $_POST['ticket_code'];
$order_status = $_POST['order_status'];
$quantity_of_tickets = $_POST['quantity_of_tickets'];

$tq = mysqli_query($connection, "SELECT * FROM `Ticket` WHERE `ticket_code` = '$ticket_code' ");
$tarr = mysqli_fetch_assoc($tq);
$price = $tarr['price'];

if( $status == "1" & $qot > "6"){ 
    $discount = "7";
} else if ($status == "0" & $qot > "6"){
    $discount = "5";
} else if ($status == "1" & $qot <= "6"){
    $discount = "0";
} else if ($status == "0" & $qot <= "6"){
    $discount = "0";
} else if ($status == "NULL" & $qot <= "NULL"){
    $discount = "0";
}
    
$total = $price*$quantity_of_tickets;   
$bonus = $total*($discount/100);
$total_price = $price*$quantity_of_tickets - $bonus;    
    
$bank_details_empl = "1111111122222222";
  $date_today = date("y.m.d");  
    
$query1 = "INSERT INTO `Orders`
(`purchase_date`, 
`discount`, 
`total_price`, 
`order_status`, 
`buyer_phone`, 
`bank_details_empl`
) 
VALUES 
('$date_today',
'$discount',
'$total_price',
'$order_status',
'$buyer_phone',
'$bank_details_empl'
);";

if (mysqli_query($connection, $query1)) {
    $aIDq = mysqli_query($connection, "SELECT MAX(`account_number`) FROM `Orders`");
  $aIDarr = mysqli_fetch_assoc($aIDq);
  $aID = $aIDarr['MAX(`account_number`)'];

$query2 = "INSERT INTO `Ticket_In_Order`
(`account_number`, 
`ticket_code`, 
`quantity_of_tickets`
) 
VALUES 
('$aID',
'$ticket_code',
'$quantity_of_tickets'
);";
       
    echo "<script language='javascript'>";
        echo "alert('Order added successfully')";
        echo"</script>";
    if (mysqli_query($connection, $query2)) {
        
        $eq = mysqli_query($connection, "SELECT * FROM `Event` INNER JOIN `Ticket` ON `Event`.`event_code` = `Ticket`.`event_code` WHERE `Ticket`.`ticket_code` = '$ticket_code' ");
        $earr = mysqli_fetch_assoc($eq);
        $cnt = $earr['current_num_tickets'];
        $event_code = $earr['event_code'];

        $new_num = $cnt-$quantity_of_tickets;
        
        $query3 = "UPDATE `Event` SET `current_num_tickets` = '$new_num' WHERE `event_code` = '$event_code' ";
        
		echo "<script language='javascript'>";
        echo "alert('TIO added successfully')";
        echo"</script>";
       
        if (mysqli_query($connection, $query3)) {
            echo "<script language='javascript'>";
        echo "alert('ok!')";
        echo"</script>";
         echo "<script  type='text/javascript'>";
        echo "window.location = '../single-post.php'";
        echo"</script>";
        }
	}else{ 
        echo "<script language='javascript'>";
        echo "alert('TIO didn`t added successfully!')";
        echo " </script>";
        echo "<script  type='text/javascript'>";
        echo "window.location = '../single-post.php'";
        echo"</script>";
	}
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/new_order.php'";
   echo"</script>";
} 
?>
