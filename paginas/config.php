<?php
    $servername = 'localhost'; // Variável usada: $servername
    $username = 'root';        // Variável usada: $username
    $password = '';            // Variável usada: $password
    $database = 'epic';        // Variável usada: $database

    // Linha original: $connection = new mysqli($server, $user, $password, $database);
    // As variáveis usadas são $server, $user, que não foram definidas.
    //mysqli_report(MYSQLI_REPORT_OFF);
    // CORREÇÃO:
    $mysqli = new mysqli($servername, $username, $password, $database);

    if($mysqli->connect_error){
        die('Erro de conexão: '.$mysqli->connect_error);
    }
?>