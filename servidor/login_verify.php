<?php
    require_once('./Models/User.php');

    
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $user = User::login($email, $password);
        if (!$user){
            echo "<script>alert('Senha e/ou e-mail inválido');
                    location.href='../index.php'</script>";
        } else {
            session_start();
            $user = User::getInfo($email);
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['born_date'] = $user['born_date'];
            $_SESSION['email'] = $user['email'];
            header('Location: ../perfil.php');
        }
    } else {
        header('Location: ../index.php');
    }
