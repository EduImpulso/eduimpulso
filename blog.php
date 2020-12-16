<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" href="./css/bootstrap-css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="shortcut icon" href="./imgs/fav.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <title>Blog - EduImpulso</title>
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

    body {
        font-family: 'Ubuntu', sans-serif;
    }
</style>

<body style="background-color: #e9e7e7">


    <?php require_once('./servidor/conection.php') ?>

    <?php require_once('./nav/menu.html') ?>

    <!-- BODY  border: 2px solid black; -->

    <div class="mt-5">
        <div class="col-12 text-center">
            <h1 class="display-4"><img class="mx-3" src="./imgs/blog.png" width="100" class="img-fluid">BLOG</h1>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center">


        <div class="container-fluid d-flex">

            <div class="row container-fluid d-flex justify-content-center my-auto">

                <div class="col-12 col-sm-12 col-lg-3 my-5 mx-4 p-0" style="background-color: #ffffff; box-shadow: 4px 4px 2px black;">
                    <div>
                        <h3 class="text-center m-2" style="color: #8B1CDA;">ENEM DIGITAL</h3>
                        <p class="text-center m-1" style="color: #252525;">O que é?</p>
                        <p class="text-center m-1" style="color: #252525;">Saiba mais!!!</p>
                    </div>
                    <div>

                        <a href="https://educacao.uol.com.br/noticias/2020/12/11/o-que-e-o-enem-digital-e-o-que-a-prova-tera-de-diferente.htm" target="_blank"><img class="img-fluid" src="./imgs/Blog - Enem Digital.jpg" alt="" style="height: 450px;"></a>
                    </div>
                </div>


                <div class="col-12 col-sm-12 col-lg-3 my-5 mx-4 p-0" style="background-color: #ffffff; box-shadow: 4px 4px 2px black;">
                    <div>
                        <h3 class="text-center m-2" style="color: #8B1CDA;">Vestibular 2021 </h3>
                        <p class="text-center m-1" style="color: #252525">Datas </p>
                        <p class="text-center m-1" style="color: #252525">e principais informações!</p>
                    </div>
                    <div>
                        <a href="https://blog.imaginie.com.br/calendario-de-vestibular/" target="_blank"><img class="img-fluid" src="./imgs/Blog - Calendario 2021.jpg" alt="" style="height: 450px;"></a>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-lg-3 my-5 mx-4 p-0" style="background-color:#ffffff; box-shadow: 4px 4px 2px black;">
                    <div>
                        <h3 class="text-center m-2" style="color: #8B1CDA;">Algum dia volto a escola?</h3>
                        <p class="text-center m-1" style="color: #252525">Alunos do Ensino Médio<br/>contam do temor por 2021.</p>
                    </div>
                    <div>
                    <a href="https://educacao.uol.com.br/noticias/2020/12/09/algum-dia-volto-a-escola-alunos-do-ensino-medio-falam-de-temor-por-2021.htm" target="_blank"><img class="img-fluid" src="./imgs/Blog - Enem Digital.jpg" alt="" style="height: 450px;"></a>
                    
                    </div>
                </div>

            </div>

        </div>
    </div>

    <?php require_once('./nav/footer.html') ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>