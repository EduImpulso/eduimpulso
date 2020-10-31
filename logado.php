<?php
    //session_start();
    require_once('conection.php');
    echo"loguei";
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql = "select * from usuarios where email = '$email' and senha = '$password';";
        $result = $conn->query($sql);
        $user = mysqli_fetch_all($result);
        //print_r($user[0]);
        if (count($user[0]) < 3){
            echo "<script>alert('Senha e/ou e-mail inválido')
                    location.href='login.php'</script>";
        } else {
            //$_SESSION['nome'] = $user[0][1];
            //$_SESSION['senha'] = $user[0][2];
            //$_SESSION['email'] = $user[0][3];       
            header('Location: index.php');
        }
    } else {
        header('Location: login.php');
    }