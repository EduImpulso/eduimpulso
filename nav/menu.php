<?php
session_start();
if(!isset($_SESSION['id_user'])){
    $status = false;
} else {
    $status = true;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Importação de CSS -->
    
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/cursinhos.css">
    <link rel="stylesheet" type="text/css" href="./css/politica.css">
    <!--<link rel="stylesheet" type="text/css" href="./css/cursinhos.css">
    <link rel="stylesheet" type="text/css" href="./css/politica.css">-->

    <!-- Importação de BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./imgs/Icones/favicon_svg.svg" type="image/x-icon">

    <!-- Titulo da pagina -->
    <title>EduImpulso - Orientação profissional</title>
</head>
<!-- style: border 3px solid; -->

<body>
    <header>
        <nav class="menuBar navbar navbar-expand-lg bg-purple p-3">

            <a class="navbar-brand" href="./index.php">
                <img src="./imgs/Icones/logo_eduimpulso.svg" height="40" alt="EduImpulso" loading="lazy" />
            </a>

            <div class="btn-group" id="phone">
                <button type="button" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: transparent; border: none; width: 30px;">
                  <img class="img-fluid" src="./imgs/Icones/btn-menu.svg " alt="">
                </button>
                <div class="dropdown-menu dropdown-menu-right" style="width: 250px;">
                    <button class="dropdown-item text-center border" type="button">Tipos de Inteligências</button>
                    <button class="dropdown-item text-center border" type="button">Carreiras</button>
                    <button class="dropdown-item text-center border" type="button">Cursinhos Preparatórios</button>
                    <button class="dropdown-item text-center border" type="button">Fale Conosco</button>
                    <button class="dropdown-item text-center border" style="background-color: #9D40E0;" type="button">Acessar</button>
                </div>
            </div>

            <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                <ul class="divItensMenu d-flex justify-content-around navbar-nav ">
                    <li class="nav-item ">
                        <a class="tamanhoFonteMenu nav-link text-white" href="./quiz.php">QUIZ</a>
                    </li>
                    <li class="nav-item ">
                        <a class="tamanhoFonteMenu nav-link text-white" href="./carreiras.php">Carreiras</a>
                    </li>
                    <li class="nav-item ">
                        <a class="tamanhoFonteMenu nav-link text-white" href="./teoria.php">Múltiplas Inteligências</a>
                    </li>
                    <li class="nav-item ">
                        <div class="btn-group">
                            <button type="button buttonVejaMais" class="btn dropdown-toggle buttonVejaMais" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Veja mais
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="./cursinhos.php" class="btnLinkVejaMais dropdown-item">Cursinhos</a>
                              <a href="./noticias.php" class="btnLinkVejaMais dropdown-item">Noticias</a>
                              <a href="./politica.php" class="btnLinkVejaMais dropdown-item">Politica de Privacidade</a>
                              <a href="./perfil.php" class="btnLinkVejaMais dropdown-item">Perfil</a>
                            </div>
                          </div>
                    </li>
                    <li class="nav-item">
                        <a class="tamanhoFonteMenu nav-link text-white" href="./fale_conosco.php">Fale conosco</a>
                    </li>
                    <?php
                    if (!$status) {
                        ?>
                            <li class="nav-item mx-1 d-flex align-items-center ">
                                <a href="./login.php" class="tamanhoFonteMenu menuButton btn text-dark btn-light d-flex align-items-center" type="submit ">Acessar</a>
                            </li>
                        <?php
                    } else {
                        ?>
                            <li class="nav-item mx-1 d-flex align-items-center ">
                                <a href="./servidor/logout.php" class="tamanhoFonteMenu menuButton btn text-dark btn-warning d-flex align-items-center" type="submit ">Sair</a>
                            </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
        <!-- <div class="whiteBar "></div> -->
    </header>
