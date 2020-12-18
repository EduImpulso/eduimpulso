<?php
require_once('./servidor/conection.php')
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require_once('./nav/head.html') ?>
</head>

<body id="body" style="background-image: url(./imgs/perfil/bg_3.jpg);">

    <?php require_once('./nav/menu.html') ?>

    <main class="d-flex justify-content-center align-items-center my-5 p-5">
        <div class="row p-3">

            <div class="col-lg-6">
                <div class="col-lg-12 py-2" style="background-color: hsla(0, 0%, 100%, 0.5); border-radius:20px;">

                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nome: Gustavo</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" name="nome" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" style="border-radius: 5px">Alterar</button>
                        </div>
                    </div>

                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email: gustavo@gmail.com</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" style="border-radius: 5px">Alterar</button>
                        </div>
                    </div>

                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Senha: ******</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" style="border-radius: 5px">Alterar</button>
                        </div>
                    </div>

                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Instituiçao: Anhembi Morumbi</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" style="border-radius: 5px">Alterar</button>
                        </div>
                    </div>
                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Apelido: Guga123</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button" style="border-radius: 5px">Alterar</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 my-3 p-5 d-flex align-items-center justify-content-center" style="background-color:rgb(37, 37, 37, 0.5)">

                <div class="">

                    <div class=" d-block alert alert-danger" role="alert">
                        Cuidado! ao remover a conta, não poderá ser recuperada!
                    </div>

                    <button class="d-block btn btn-danger" onclick="confirmar()" style="width: 100%;">Remover a conta</button>

                </div>
            </div>
        </div>

    </main>

    <script>
        function confirmar() {
            let confirmacao = confirm("Você realmente deseja excluir a conta?");
        }
    </script>

    <?php require_once('./nav/footer.html') ?>

</body>

</html>