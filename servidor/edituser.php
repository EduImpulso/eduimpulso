<?php
    require_once("./Models/User.php");
    session_start();
    if(!isset($_SESSION['id_user'])){
        header("Location: index.php");
        exit;
    }
    $id = $_SESSION['id_user'];
    $name = $_SESSION['name'];
    $username = $_SESSION['username'];
    $scholling = $_SESSION['scholling'];
    $gender = $_SESSION['gender'];
    $email = $_SESSION['email'];
    
    $data = User::editUser($id, $name, $username, $scholling, $gender, $email);
    if ($data){
        session_destroy();
        echo "<script>alert('Dados alterados'); location.href = '../index.html'</script>";
    } else {
        echo"<script>alert('Erro ao editar informações'); location.href = '../index.html'</script>";
    }

    
