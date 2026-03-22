<?php
$db_host = 'localhost';
$db_username = 'ytdcfvmy_malick';
$db_password = 'iRG4!-QnM_qA';
$db_name = 'ytdcfvmy_artdialga_db';
$db = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die('Could not connect to the database');


if(isset($_GET['email'])){
	$email = $_GET['email'];
}
$SQL = "DELETE FROM emails WHERE email='$email'";

    // Execute the query
    mysqli_query($db, $SQL);

	if (mysqli_query($db, $SQL))  
	{
   
   	header("location: ../index.php?toastun");	
	}
	

?>
