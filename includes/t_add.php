<?php
include 'db.php';

$ticket_code = $_POST['ticket_code'];
$price = $_POST['price'];
$zona = $_POST['zona'];
$row = $_POST['row'];
$place = $_POST['place'];
$event_code = $_POST['event_code'];

if(strlen($row) == 0) {$row = '';}
if(strlen($place) == 0) {$place = '';}

$query = "INSERT INTO `Artist`
(`ticket_code`, 
`price`, 
`zona`, 
`row`, 
`place`, 
`event_code`
) 
VALUES 
('$ticket_code',
'$price',
'$zona',
'$row',
'$place',
'$event_code'
);";

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Ticket added successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/ticket.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Fail!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../empl/ticket.php'";
   echo"</script>";
} 
?>