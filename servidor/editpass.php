<?php
    require_once("./Models/User.php");
    session_start();
    if(!isset($_SESSION['id_user'])){
        header("Location: index.php");
        exit;
    }
    $id = $_SESSION['id_user'];
    $password = $_SESSION['password'];
    
    $data = User::editPass($id, $password);
    if ($data){
        session_destroy();
        echo "<script>alert('Senha alterada'); location.href = '../index.html'</script>";
    } else {
        echo"<script>alert('Erro ao editar informações'); location.href = '../index.html'</script>";
    }   
