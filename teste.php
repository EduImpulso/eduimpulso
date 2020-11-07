<?php
    session_start();
    require_once('conection.php');
    
        $email = 'squad4@eduimpulso.com.br';
        $password = md5('squad4');
        $sql = "select * from usuarios where email = '$email' and senha = '$password';";
        $result = $conn->query($sql);
        $user = mysqli_fetch_all($result);
        //print_r($user[0]);
        //print_r($result);
        if ($result->num_rows == 0) {
            echo "<script>alert('Senha e/ou e-mail inválido')
                    location.href='index.php'</script>";
        } else {
            $_SESSION['nome'] = $user[0][1];
            $_SESSION['senha'] = $user[0][2];
            $_SESSION['email'] = $user[0][3];       
            print_r($_SESSION);
            //header('Location: cursos.php');
        }
    