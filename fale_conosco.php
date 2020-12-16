<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/bootstrap-css/bootstrap.css">
    <title>Fale conosco - EdulImpulso</title>

    <style>
        @media(max-width:993px) {
            .desktop {
                display: none !important;

            }
        }

        @media(min-width:993px) {
            .phone {
                display: none !important;
            }
        }
    </style>

</head>

<body style="background-color: #d7d1dbd7;">

<?php require_once('./nav/menu.html')?>

<div class="container">

    <div class="row">
        <div class="col-12 text-center my-4">
            <h1 class="display-4"><img src="./imgs/fale_conosco.png" width="100" class="img-fluid">Fale Conosco</h1>
        </div>
    </div>

    <div class="jumbotron text-white" style="background-color: #8b1cdad7; box-shadow: 2px 2px 10px black;">

        <!--alinhamento -->

        <div class="row justify-content-center mb-5">

            <div class="col-sm-12 col-md-10 col-lg-8">

                <p class="lead"> Envie sua mensagem teremos o maior prazer em atendê-lo!</p>


                <form>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputNome">Digite seu nome</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="inputEmail">Endereço de E-mail</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="inputAssunto"> Assunto </label>
                            <input type="text" class="form-control" id="inputAssunto" placeholder="Assunto">
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="formControlTextarea"> Mensagem: </label>
                            <textarea class="form-control" id="formControlTextatrea" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn col-sm-12 col-md-12 col-lg-12" style="background-color: rgba(0, 0, 0, 0); border: 3px solid white; color: white;">Enviar</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

<!-- FOOTER -->

<footer class="container-fluid bg-dark font-weight-bold" style="height: 10.4vh; font-size: 110%;">
    <div class="container text-center d-flex align-items-center justify-content-center" style="height: 100%; font-family: 'Rubik', sans-serif;">
        ©2020 - Recode Pró - ORIENTAÇÃO PROFISSIONAL
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

</body>
</html>