<meta charset="utf-8">
<?php
    $servername = "sql201.epizy.com";
    $username = "epiz_27138143";
    $password = "uLkhpaWxeBRh";
    $database = "epiz_27138143_eduimpulso";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Erro na conexão com banco de dados" .mysqli_connect_error());
    }