<?php
    session_start();
    require_once('./servidor/conection.php');
    if(!isset($_SESSION['nome'])){
        header("Location: index.php");
        exit;
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="stylesheet" type="text/css" href="./css/listas_curso.css">
    <link rel="shortcut icon" href="./imgs/fav.ico" type="image/x-icon">
    <title>EduImpulso | Cursos</title>

</head>
<body>
<?php require_once('./nav/menuLogado.html')?>

<div class="container">
    <div class="box_cursos">
      <img src="imgs/cursos/medicina.png" width="170px"><br>
        <a href="./curso_info.php?curso=5"> Medicina </a>
</div>  

<div class="box_cursos">

        <img src="imgs/cursos/negocio.png" width="170px"><br>
        <a href="./curso_info.php?curso=1"> Economia</a>
    </div>

    <div class="box_cursos">

        <img src="imgs/cursos/jornalismo.png" width="170px"><br>
        <a href="./curso_info.php?curso=6"> Comunicação Social - Midialogia</a>
    </div>

    <div class="box_cursos">

        <img src="imgs/cursos/engenhariadesoftware.png" width="170px"><br>
        <a href="./curso_info.php?curso=3"> Engenharia de Software</a>
    </div>

    <div class="box_cursos">

        <img src="imgs/cursos/gastronomia.png" width="170px"><br>
        <a href="./curso_info.php?curso=7"> Nutrição</a>
    </div>


    <div class="box_cursos">

        <img src="imgs/cursos/farmacia.png" width="170px"><br>
        <a href="./curso_info.php?curso=4"> Farmácia</a>
    </div>

   
    <div class="box_cursos">

        <img src="imgs/cursos/engambiental.png" width="170px"> <br>
        <a href="./curso_info.php?curso=2"> Engenharia Ambiental</a>
    </div>


</div>
</body>

<footer class="container-fluid bg-purple text-light d-flex justify-content-center">
    <div class="footerBar d-flex align-items-center">
        ©2021 - EduImpulso - ORIENTAÇÃO PROFISSIONAL
    </div>
</footer>

</html>
