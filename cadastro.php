<?php
//require_once('./servidor/Conection.php');
require_once('./nav/menu.php');
?>
<div class="container-fluid mt-4">
    <div class="col-12 text-center mb-4" id="desktop">
        <h3><strong>Cadastre-se 📋</strong></h3>
    </div>
    <div class="col-12 text-center mb-4" id="phone">
        <h3>Cadastre-se</h3>
    </div>
</div>
<div class="container-fluid d-flex justify-content-center align-items-center">

    <div class="container-fluid row mb-5">

        <div class="form m-auto p-4 my-4 col-12 col-md-12 col-lg-12 col-xl-5">

            <form method="post" action="./servidor/cadastro_verify.php">
                <div class="form-group">
                    <label class="my-2 form-label" for="name" style="color: white">Nome completo</label>
                    <input class="form-control has-validation" type="text" id="name" placeholder="Nome Completo" name="name" />
                </div>
                <div class="form-group">
                    <label class="my-2 form-label" for="username" style="color: white">Nome de usuário</label>
                    <input class="form-control has-validation" type="text" id="username" placeholder="Informe seu usuário" name="username" />
                </div>
                <div class="form-group">
                    <label class="my-2 form-label" for="email" style="color: white">Informe seu e-mail</label>
                    <input class="form-control has-validation" type="e-mail" id="email" placeholder="Digite seu e-mail" name="email" />
                </div>
                <div class="form-group">
                    <label class="my-2 form-label" for="password1" style="color: white">Digite uma senha</label>
                    <input class="form-control has-validation" type="password" id="password1" placeholder="Digite uma senha" name="password1" />
                </div>
                <div class="form-group">
                    <label class="my-2 form-label" for="password2" style="color: white">Repita a senha</label>
                    <input class="form-control has-validation" type="password" id="password2" placeholder="Confirme a senha" name="password2" />
                </div>
                <div class="form-group">
                    <label class="my-2 form-label" for="born" style="color: white">Data de nascimento</label>
                    <input class="form-control has-validation" type="date" id="born" placeholder="Confirme a senha" name="born" />
                </div>
<!-- 
                <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <label class="dropsownEscolaridadeLabel my-2">Nível de escolaridade</label>
                        <div class="dropdown">
                            <button class="dropsownEscolaridade btn btn-secondary dropdown-toggle" style="color: black; width: 100%" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                clique aqui
                            </button>
                            <div class="dropdown-menu" style="width: 100%" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Fundamental</a>
                                <a class="dropdown-item" href="#">Ensino Médio</a>
                                <a class="dropdown-item" href="#">Técnico</a>
                                <a class="dropdown-item" href="#">Superior</a>
                                <a class="dropdown-item" href="#">Não estou estudando</a>
                                <a class="dropdown-item" href="#">Não quero declarar</a>
                            </div>
                        </div>
                    </div>

                </div> -->

                <!-- <div class="row d-flex justify-content-center">
                    <div class="col-12">
                        <label class="dropsownGeneroLabel my-2">Genero</label>
                        <div class="dropdown">
                            <button class="dropsownGenero btn btn-secondary dropdown-toggle" style="color: black" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                clique aqui
                            </button>
                            <div class="dropdown-menu" style="width: 100%" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Masculino</a>
                                <a class="dropdown-item" href="#">Feminino</a>
                                <a class="dropdown-item" href="#">Homem Trans</a>
                                <a class="dropdown-item" href="#">Mulher Trans</a>
                                <a class="dropdown-item" href="#">Não quero declarar</a>
                            </div>
                        </div>
                    </div>

                </div> -->

                <button class="buttonForm btn mt-3">
                    Cadastre-se
                </button>
                <link class="alternativeLink form-text" to="/">Já possui o cadastro? Clique aqui!</link>
            </form>
        </div>

    </div>
</div>
<body>
</body>

<?php
require_once('./nav/footer.html');
?>
</body>

</html>