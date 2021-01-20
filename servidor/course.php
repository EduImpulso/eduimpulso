<?php
    require_once('./Models/Courses.php');
    session_start();
    if(!isset($_SESSION['id_user'])){
        header("Location: index.php");
        exit;
    }

    $id = $_GET['id'];
    $course = Courses::getCourse($id);
    $_SESSION['name_course'] = $course['nome'];
    $_SESSION['local'] = $course['name'];
    $_SESSION['turn'] = $course['periodo'];
    $_SESSION['cep'] = $course['cep'];
    $_SESSION['duration'] = $course['duracao_sem'];
    $_SESSION['sal_start'] = $course['sal_ini'];
    $_SESSION['sal_med'] = $course['sal_med'];
    $_SESSION['sal_exp'] = $course['sal_exp'];
    $_SESSION['describe'] = $course['descricao'];
    $host  = $_SERVER['HTTP_HOST'];
    $extra = "cursos_sobre.php?id=$id";
    //print_r($_SERVER);
    header("Location: http://$host/eduimpulso/$extra");