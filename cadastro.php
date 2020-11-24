<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" href="./css/bootstrap-css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="shortcut icon" href="./imgs/fav.ico" type="image/x-icon">
    <title>Cadastre-se | Demo</title>
</head>
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
</style>
<body class="bg-dark">


<?php require_once('./servidor/conection.php')?>

<?php require_once('./nav/menu.html')?>

    <!-- BODY  border: 2px solid black; -->

    <div class="container-fluid d-flex justify-content-center align-items-center">
        <div class="container-fluid row">

            
            <div class="container my-auto mx-auto col-md-12 col-lg-6 col-xl-6" id="imgSvg">
                <img src="./imgs/bannerCadastro.svg" alt="Imagem de capa do card">
            </div>

            <div class="m-auto p-5 col-12 col-md-12 col-lg-12 col-xl-5" style="border-radius: 30px; background-color: rgb(241, 228, 251, 0.8);">
                <h1 class="text-center pb-4" style="font-family: 'Rubik', sans-serif;">CADASTRO</h1>
                <form>

                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-family: 'Rubik', sans-serif;">Digite seu nome</label>
                        <input type="email" class="form-control" style="background-color: rgb(223, 223, 223);" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="digite seu nome">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-family: 'Rubik', sans-serif;">Endereço de email</label>
                        <input type="email" class="form-control" style="background-color: rgb(223, 223, 223);" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="digite seu email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-family: 'Rubik', sans-serif;">Suqa Senha</label>
                        <input type="email" class="form-control" style="background-color: rgb(223, 223, 223);" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="digite sua senha">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1" style="font-family: 'Rubik', sans-serif;">Confirme sua senha</label>
                        <input type="password" class="form-control" style="background-color: rgb(223, 223, 223);" id="exampleInputPassword1" placeholder="sua senha novamente">
                        <a class="form-text text-muted" style="font-family: 'Rubik', sans-serif; font-size: 12px;">Já possui o cadastro? Realize o login</a>
                    </div>

                    <button type="submit" class="btn" 
                        style=
                        "width: 100%;
                        background-color: rgba(255, 255, 255, 0);
                        border: 3px solid #8b1cdad7;
                        color: #8b1cdad7;
                        font-weight: bold;">
                        Cadastre-se
                    </button>
                </form>
            </div>    

        </div>
    </div>

<?php require_once('./nav/footer.html')?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>