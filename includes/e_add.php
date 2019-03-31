<?php
include 'helpers/db.php';

$event_name = $_POST['event_name'];
$category = $_POST['category'];
$genre = $_POST['genre'];
$data = $_POST['data'];
$time = $_POST['time'];
$current_num_tickets = $_POST['current_num_tickets'];
$summary_num_tickets = $_POST['summary_num_tickets'];
$min_price = $_POST['min_price'];
$institution = $_POST['institution'];
$artist_name = $_POST['artist_name'];

$date_today = date("y.m.d");

if (strtotime($data) <= strtotime($date_today)){
    echo "Wrong date!";
}else{ echo "ok";
}

$query1 = "INSERT INTO `Event`
(`event_name`, 
`category`, 
`genre`, 
`data`, 
`time`, 
`current_num_tickets`, 
`summary_num_tickets`, 
`min_price`, 
`institution`) 
VALUES 
('$event_name',
'$category',
'$genre',
'$data',
'$time',
'$current_num_tickets',
'$summary_num_tickets',
'$min_price',
'$institution');";

$eIDq = mysqli_query($connection, "SELECT MAX(`event_code`) FROM `Event`");
	$eIDarr = mysqli_fetch_assoc($eIDq);
	$eID = $eIDarr['MAX(`event_code`)'];

$query2 = "INSERT INTO `Artist_on_event`
(`event_code`, 
`artist_name`) 
VALUES 
('$eID',
'$artist_name');";


if (mysqli_query($connection, $query1)) {
    echo "New record created successfully<br><br>";
	if (mysqli_query($connection, $query2)) {
		echo "Artist added successfully<br>";
	}else
	{ 
	echo "Artist didn't added successfully!<br>";
	}
}else
{ 
echo 'Fail!';
}

if (mysqli_query($connection, $query1)) {
   echo "<script language='javascript'>";
   echo "alert('Event created successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/event.php'";
   echo"</script>";
    if (mysqli_query($connection, $query2)) {
		echo "<script language='javascript'>";
        echo "alert('Artist added successfully')";
        echo"</script>";
        echo "<script  type='text/javascript'>";
        echo "window.location = '../client/views/event.php'";
        echo"</script>";
	}else
	{ 
        echo "<script language='javascript'>";
        echo "alert('Artist didn`t added successfully!')";
        echo " </script>";
        echo "<script  type='text/javascript'>";
        echo "window.location = '../client/views/event.php'";
        echo"</script>";
	}
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/event.php'";
   echo"</script>";
} 
?>