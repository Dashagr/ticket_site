<?php
include 'helpers/db.php';

$institution_name = $_POST['institution_name'];
$internal_phone = $_POST['internal_phone'];
$authority_sec_name = $_POST['authority_sec_name'];
$authority_name = $_POST['authority_name'];
$authority_surname = $_POST['authority_surname'];
$venue_street = $_POST['venue_street'];
$venue_building_num = $_POST['venue_building_num'];
$number_of_zones = $_POST['number_of_zones'];
$description = $_POST['description'];

$query = "INSERT INTO `Venue`
(`institution_name`, 
`internal_phone`, 
`authority_sec_name`, 
`authority_name`, 
`authority_surname`, 
`venue_street`, 
`venue_building_num`, 
`number_of_zones`, 
`description`
) 
VALUES 
('$institution_name',
'$internal_phone',
'$authority_sec_name',
'$authority_name',
'$authority_surname',
'$venue_street',
'$venue_building_num',
'$number_of_zones',
'$description'
);";
 

if (mysqli_query($connection, $query)) {
   echo "<script language='javascript'>";
   echo "alert('Venue added successfully')";
   echo"</script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/venue.php'";
   echo"</script>";
}else
{ 
   echo "<script language='javascript'>";
   echo "alert('Щось не так!')";
   echo " </script>";
   echo "<script  type='text/javascript'>";
   echo "window.location = '../client/views/venue.php'";
   echo"</script>";
} 
?>