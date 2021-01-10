<?php

    require_once('./Models/User.php');

    session_start();
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $user = User::login($email, $password);
        if (!$user){
            echo "<script>alert('Senha e/ou e-mail inválido')
                    location.href='index.php'</script>";
        } else {
            $_SESSION['nome'] = $user[0][1];
            $_SESSION['senha'] = $user[0][2];
            $_SESSION['email'] = $user[0][3];       
            print_r($_SESSION);
        }
    } else {
        header('Location: ../index.php');
    }
