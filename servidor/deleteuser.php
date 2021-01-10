<?php
    require_once("./Models/User.php");
    session_start();
    if(!isset($_SESSION['id_user'])){
        header("Location: index.php");
        exit;
    }
    

    $id = $_SESSION['id_user'];
    $data = User::deleteUser($id);
    if ($data){
        session_destroy();
        echo "<script>alert('Conta deletada'); location.href = '../index.php'</script>";
    }
