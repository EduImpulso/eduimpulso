<?php
    require_once("./Models/User.php");
    session_start();
    if(!isset($_SESSION['id_user'])){
        header("Location: index.php");
        exit;
    }
    $id = $_SESSION['id_user'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    $data = User::editUser($id, $name, $username, $email);
    if ($data){
        session_destroy();
        session_start();
            $user = User::getInfo($email);
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['born_date'] = $user['born_date'];
            $_SESSION['email'] = $user['email'];
        echo "<script>alert('Dados alterados'); location.href = '../perfil.php'</script>";
    } else {
        echo"<script>alert('Erro ao editar informações'); location.href = '../index.php'</script>";
    }
   