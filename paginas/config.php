<?php
    $servername = 'localhost'; 
    $username = 'root';        
    $password = '';   
    $database = 'epic';
    $mysqli = new mysqli($servername, $username, $password, $database);

    if($mysqli->connect_error){
        die('Erro de conexão: '.$mysqli->connect_error);
    }
?>