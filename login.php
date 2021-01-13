<?php
//require_once('./servidor/Conection.php');
require_once('./nav/menu.html');
?>
<div class="d-flex justify-content-center align-items-center my-5">
    <div class="borderRadius cardLogin m-auto p-3 col-8 col-sm-10 col-xl-4">
        <h1 class="camposLogin text-white text-center pb-4">LOGIN</h1>
        <form method="post" action="./servidor/login_verify.php">
            <div class="form-group">
                <label class="my-2 form-label" for="e-mail" style="color: white">Digite seu e-mail</label>
                <input class="imputForm form-control has-validation" type="e-mail" id="email" aria-describedby="emailHelp" placeholder="email@email.com" name="email" />
            </div>
            <div class="form-group">
                <label class="my-2 form-label" for="password" style="color: white">Digite sua senha</label>
                <input class="imputForm form-control has-validation" type="password" id="password" name="password" />
            </div>

            <a class="linkCadastro form-text " href="/cadastro">Cadastre-se aqui!</a>

            <button class="buttonForm btn mt-3">
                Enviar
            </button>
        </form>
    </div>
    <div class="col-12 col-sm-12 col-xl-6 d-flex justify-content-center my-4" id="">
        <img src="./imgs/index/capa-home-login.jpg" width="95%" alt="login" />
    </div>
</div>

<?php require_once('./nav/footer.html')?>
