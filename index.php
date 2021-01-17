<?php
//require_once('./servidor/Conection.php');
require_once('./nav/menu.html');
?>

<div class="container-fluid">
<div class="row bannerHome" id="desktop" id="topo">

    <div class="container d-flex align-items-center p-5">

        <h1 class="p-4">
            MIRE O OLHAR NO<br /> SEU FUTURO!<br />
        </h1>

    </div>

</div>



<div class="row contaner-fluid d-flex align-items-center justify-content-around px-4 my-4">

    <div class="divCard col-12 col-lg-3 d-flex my-2 flex-column justify-content-around border shadow">
        <div class="d-flex justify-content-center">
            <img src="./imgs/index/cardLogin.png" class="imgCard img-fluid my-2" alt="">
        </div>
        <h5 class="tituloCard text-center my-auto d-flex align-items-center">Realize seu login ou cadastre-se por aqui! <br /> Assim você terá acesso a nosso teste e a outras informações! </h5>
        <div class="mb-2 d-flex justify-content-around">
            <button class="btnCardMini btn btn-danger"> login </button>
            <button class="btnCardMini btn btn-danger"> cadastro </button>
        </div>
    </div>
    <div class="divCard col-12 col-lg-3 d-flex my-2 flex-column justify-content-around border shadow">
        <div class="d-flex justify-content-center">
            <img src="./imgs/index/cardContato.png" class="imgCard img-fluid my-2">
        </div>
        <h5 class="tituloCard text-center my-auto d-flex align-items-center">Entre em contato! <br /> Fale conosco para tirar dúvidas e obter mais informações! </h5>
        <div class="mb-2 d-flex justify-content-around">
            <button class="btnCard btn btn-danger"> contato </button>
        </div>
    </div>
    <div class="divCard col-12 col-lg-3 d-flex my-2 flex-column justify-content-around border shadow">
        <div class="d-flex justify-content-center">
            <img src="./imgs/index/cardNoticias.png" class="imgCard img-fluid my-2">
        </div>
        <h5 class="tituloCard text-center my-auto d-flex align-items-center">Sabe o que anda acontecendo? <br /> Veja as principais noticias relacionadas a educação em nosso pais e no mundo! </h5>
        <div class="mb-2 d-flex justify-content-around">
            <button class="btnCard btn btn-danger"> noticias </button>
        </div>
    </div>

</div>
<div class="d-flex justify-content-center align-items-center my-5">
    <div class="borderRadius cardLogin p-3 col-12 col-sm-10 col-xl-4">
        <h1 class="camposLogin text-white text-center pb-4">LOGIN</h1>
        <form method="post" action="./servidor/login_verify.php">
            <div class="form-group">
                <label class="my-2 form-label" for="e-mail" style="color: white">Digite seu e-mail</label>
                <input class="imputForm form-control has-validation" type="e-mail" id="email" aria-describedby="emailHelp" placeholder="email@email.com" name="email" />
            </div>
            <div class="form-group">
                <label class="my-2 form-label" for="password" style="color: white">Digite seu e-mail</label>
                <input class="imputForm form-control has-validation" type="password" id="password" placeholder="email@email.com" name="password" />
            </div>

            <a class="linkCadastro form-text " href="/cadastro">Cadastre-se aqui!</a>

            <button class="buttonForm btn mt-3">
                Enviar
            </button>
        </form>
    </div>
    <div class="col-12 col-sm-12 col-xl-6 d-flex justify-content-center my-4" id="desktop">
        <img src="./imgs/index/capa-home-login.jpg" width="95%" alt="login" />
    </div>

</div>
</div>

</body>

<footer class="container-fluid bg-purple text-light d-flex justify-content-center">
    <div class="footerBar d-flex align-items-center">
        ©2020 - EduImpulso - ORIENTAÇÃO PROFISSIONAL
    </div>
</footer>

</html>