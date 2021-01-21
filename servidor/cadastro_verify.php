<?php

    require_once('./Models/User.php');

    $dados = [$_POST['name'], $_POST['username'], $_POST['born'], $_POST['email'], $_POST['password1'], $_POST['password2']];
    if (strlen($dados[0]) < 3 && $dados[1])
    { //name min three chars
        echo"<script>alert('Nome e/ou username deve conter no mínimo três caracteres'); location.href = '../cadastro.php'</script>";
    } else if (strlen($dados[6]) < 6)
    { //password min six chars
        echo"<script>alert('Senha deve conter no mínimo seis caracteres'); location.href = '../cadastro.php'</script>";
    } else if ($dados[6] != $dados[7])
    { //password as a confirm password
        echo"<script>alert('Senhas digitadas não são iguais'); location.href = '../cadastro.php'</script>";
    } else
    { //verify email
        $emailv = str_split($dados[3]);
        $count = 0;
        foreach ($emailv as $key) {
            if ($key == '@') {
                $count = $count + 1;
            }
        }
            if ($count > 0)
            { //verify username
                $user = User::getEmail($dados[3]);
                    if ($user)
                    {
                        echo"<script>alert('Email já cadastrado'); location.href = '../cadastro.php'</script>";
                    } else
                    {//verify username
                        $user = User::getUser($dados[1]);
                        if ($user){
                            echo"<script>alert('Username já cadastrado'); location.href = '../cadastro.php'</script>";
                        } else {
                            $name = $dados[0];
                            $username = $dados[1];
                            $born= $dados[2];
                            $email = $dados[3];
                            $scholling = $dados[4];
                            $gender = $dados[5];
                            $password = md5($dados[6]);
                            $user = new User($name, $username, $born, $scholling, $gender, $email, $password);
                            if ($user) {
                                echo"<script>alert('Cadastro concluído'); location.href = '../login.php'</script>";
                            } else {
                                echo"<script>alert('Erro ao cadastrar'); location.href = '../cadastro.php'</script>";
                            }
                        }
                    }
            } else
            {
                echo"<script>alert('Insira um e-mail válido'); location.href = '../cadastro.php'</script>";
            }
    }
    echo"<script>location.href = '../cadastro.php'</script>";
    