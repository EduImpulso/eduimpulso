<?php
    require_once('./servidor/conection.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="stylesheet" href="./css/bootstrap-css/bootstrap.css">
    <link rel="shortcut icon" href="./imgs/fav.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>EduImpulso - Orientação profissional</title>

    <style>
        /* MENU DESKTOP */
        @media(max-width: 1000px) {
            .desktop {
                display: none !important;
            }
        }
    
        /* MENU DEVICE */
        @media(min-width: 1000px) {
            .phone {
                display: none !important;
            }
        }
        body{
            font-family: 'Ubuntu', sans-serif;
        }
    </style>

</head>

<body style="background-color: #DDD8E0;">

<?php require_once('./nav/menu.html') ?>

    <!-- BODY  border: 2px solid black; -->

    <div class="container-fluid" width="100%" style="background-image: url(./imgs/capa-home.jpg); width:100%; height: 100%; background-size: cover;">

        <div class="container d-flex align-items-center p-5" style="height:100%;">

        <h1 class="p-4" style="font-weight: bold;text-shadow: 2px 2px 15px black; border-radius:10px; background-color:rgba(255, 255, 255, 0.4);">MIRE O OLHAR NO<br/> SEU FUTURO!</h1>

        </div>
    
        <!-- <img src="./imgs/capa home.jpg" width="100%" alt=""> -->
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center my-5">
        <div class="container-fluid row">
            <div class="m-auto p-5 col-12 col-md-12 col-lg-12 col-xl-5" style="border-radius: 10px; background-color: #983ADB;">
                <h1 class="text-center pb-4" style="font-family: 'Ubuntu', sans-serif;  color: white;">LOGIN</h1>
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-family: 'Ubuntu', sans-serif;  color: white;">Endereço de email</label>
                        <input type="email" class="form-control" style="background-color: rgb(223, 223, 223);" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" style="font-family: 'Ubuntu', sans-serif;  color: white;">Senha</label>
                        <input type="password" class="form-control" style="background-color: rgb(223, 223, 223);" id="exampleInputPassword1" placeholder="digite sua senha">
                        <a class="form-text " href="./cadastro.php" style="font-family: 'Ubuntu', sans-serif; font-size: 12px;  color: white;">Cadastre-se aqui!</a>
                    </div>

                    <button type="submit" class="btn" 
                        style=
                        "width: 100%;
                        background-color: rgba(255, 255, 255, 0);
                        border: 3px solid white;
                        color: white;
                        font-weight: bold;
                        font-family: 'Ubuntu', sans-serif;">
                        ENVIAR
                    </button>
                </form>
            </div>    
<!-- 
            <div class="container my-auto mx-auto col-md-12 col-lg-6 col-xl-6" id="imgSvg">
                <img src="./imgs/bannerLogin.svg" alt="Imagem de capa do card">
            </div> -->
        </div>
    </div>

    <?php require_once('./nav/footer.html')?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>