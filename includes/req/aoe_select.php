 <?php 
 include '../helpers/db.php';

 $tbl = mysqli_query($connection, "SELECT DISTINCT `artist_name` FROM `Artist_On_Event`"); 
    while ($row = mysqli_fetch_assoc($tbl)) { 
        echo "<option value='".$row['artist_name']."'>".$row['artist_name']."</option><br>";
    }
?>      