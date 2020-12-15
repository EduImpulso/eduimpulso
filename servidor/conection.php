<meta charset="utf-8">
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "recode_eduimpulso_teste";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Erro na conexão com banco de dados" .mysqli_connect_error());
    }