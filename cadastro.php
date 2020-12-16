<?php require_once('./servidor/conection.php') ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require_once('./nav/head.html') ?>
</head>

<body style="background-color: #e9e7e7">

    <?php require_once('./nav/menu.html') ?>

    <!-- BODY  border: 2px solid black; -->

    <div class="container-fluid">
        <div class="col-12 text-center my-4">
            <h1 class="display-4"><img src="./imgs/bannerCadastro.svg" width="100" class="img-fluid">Cadastre-se</h1>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-center align-items-center">


        <div class="container-fluid row mb-5">


            <!-- <div class="container my-auto mx-auto col-md-12 col-lg-6 col-xl-6" id="imgSvg">
                <img src="./imgs/bannerCadastro.svg" alt="Imagem de capa do card">
            </div> -->

            <div class="m-auto p-4 my-4 col-12 col-md-12 col-lg-12 col-xl-5" style="border-radius: 10px; box-shadow: 2px 2px 2px black; background-color: #8b1cdad7;">

                <form>

                    <div class="form-group">
                        <label for="nome" style="color: white;" style="font-family: 'Rubik', sans-serif;">Nome Completo</label>
                        <input type="email" name="nome" class="form-control" style="background-color: rgb(223, 223, 223);" placeholder="digite aqui">
                    </div>
                    <div class="form-group">
                        <label for="apelido" style="color: white;" style="font-family: 'Rubik', sans-serif;">Apelido</label>
                        <input type="text" name="apelido" class="form-control" style="background-color: rgb(223, 223, 223);" placeholder="digite aqui">
                    </div>
                    <div class="form-group">
                        <label for="email" style="color: white;" style="font-family: 'Rubik', sans-serif;">Endereço de email</label>
                        <input type="email" name="email" class="form-control" style="background-color: rgb(223, 223, 223);" placeholder="digite aqui">
                    </div>
                    <div class="form-group">
                        <label for="senha" style="color: white;" style="font-family: 'Rubik', sans-serif;">Senha</label>
                        <input type="email" name="senha" class="form-control" style="background-color: rgb(223, 223, 223);" placeholder="digite aqui">
                    </div>
                    <div class="form-group">
                        <label for="senha_confirma" style="color: white;" style="font-family: 'Rubik', sans-serif;">Confirme sua senha</label>
                        <input type="password" name="senha_confirma" class="form-control" style="background-color: rgb(223, 223, 223);" id="exampleInputPassword1" placeholder="digite aqui">
                    </div>
                    <div class="form-group">
                        <label for="data" style="color: white;" style="font-family: 'Rubik', sans-serif;">Data de Nascimento</label>
                        <input type="date" name="data" class="form-control" style="background-color: rgb(223, 223, 223);" placeholder="digite aqui">
                    </div>
                    <div class="form-group">
                        <label for="endereço" style="color: white;" style="font-family: 'Rubik', sans-serif;">Endereço</label>
                        <input type="text" name="endereço" class="form-control" style="background-color: rgb(223, 223, 223);" placeholder="digite aqui">
                    </div>
                    <div class="form-group border border-secondary p-2">
                        <label for="instituição_ensino" style="color: white;" style="font-family: 'Rubik', sans-serif;">Instituição de Ensino</label>
                        <input type="text" name="instituição_ensino" class="form-control" style="background-color: rgb(223, 223, 223);" placeholder="digite aqui">
                        <div class="mt-1 p-2 d-flex justify-content-around">
                            <div class="mx-3">
                                <label for="data_inicio_curso" style="color: white;" style="font-family: 'Rubik', sans-serif;">Inicio do curso</label>
                                <input type="date" name="data_inicio_curso" class="form-control" style="background-color: rgb(223, 223, 223);" placeholder="digite aqui">
                            </div>
                            <div>
                                <label for="data_termino_curso" style="color: white;" style="font-family: 'Rubik', sans-serif;">Termino do curso</label>
                                <input type="date" name="data_termino_curso" class="form-control" style="background-color: rgb(223, 223, 223);" placeholder="digite aqui">
                            </div>
                        </div>
                    </div>


                    <button type="submit" class="btn" style="width: 100%;
                        background-color: rgba(255, 255, 255, 0);
                        border: 3px solid white;
                        color: white;
                        font-weight: bold;">
                        Cadastre-se
                    </button>
                    <a class="form-text text-white" style="font-family: 'Rubik', sans-serif; font-size: 12px;">Já possui o cadastro? Realize o login</a>
                </form>
            </div>

        </div>
    </div>

    <?php require_once('./nav/footer.html') ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>