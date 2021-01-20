<?php
    require_once('./Models/Courses.php');
    session_start();
    if(!isset($_SESSION['id_user'])){
        header("Location: index.php");
        exit;
    }

    $id = $_GET['id'];
    $course = Courses::getCourse($id);
    $_SESSION['name_course'] = $user['nome'];
    $_SESSION['local'] = $user['name'];
    $_SESSION['turn'] = $user['periodo'];
    $_SESSION['adress'] = $user['cep'];
    $_SESSION['duration'] = $user['duracao_sem'];
    $_SESSION['sal_start'] = $user['sal_ini'];
    $_SESSION['sal_med'] = $user['sal_med'];
    $_SESSION['sal_exp'] = $user['sal_exp'];
    $_SESSION['describe'] = $course['descricao'];
    header('Location: ../cursos_sobre.php');
