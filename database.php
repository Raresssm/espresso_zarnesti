<?php 
	$db_server = "localhost";
    $db_user = "Rares1";
    $db_pass = "Password_12";
    $db_name = "espresso_zarnesti";
    $conn = "";


    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    if(!$conn){
        exit('Conectare esuata: ' . mysqli_connect_error ());
    }
    echo "You are connected!";
?>