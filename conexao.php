<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "flmusic";

    $conn = mysqli_connect("$servername", $username, $password, $database);

    if(!$conn){
        die("Erro ao conectar ao banco de dados" .mysqli_connect_error());
    }



?>