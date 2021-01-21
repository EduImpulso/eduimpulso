<?php

require_once('./Models/Msg.php');

$name = $_POST['name'];
$email = $_POST['email'];;
$assunto = $_POST['assunto'];
$msg = $_POST['msg'];
$message = new Msg($name, $assunto, $email, $msg);

$validate = $message->sentMsg(); 

if ($validate ){
    echo "<script>alert('Mensagem enviada com sucesso');
                    location.href='../fale_conosco.php'</script>";
} else {
    echo "<script>alert('Erro ao enviar mensagem');
                    location.href='../fale_conosco.php'</script>";
}
