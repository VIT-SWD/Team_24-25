<?php
	$conn = mysqli_connect('localhost','root',"",'swd');
    if($conn->connect_error){
        die("Connection Failed!".$conn->connect_error);
    }
    mysqli_query($conn,"SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'");

mysqli_set_charset($conn,'utf8');
?>