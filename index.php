<?php
//require_once('./servidor/Conection.php');
require_once('./nav/menu.html');
?>

<div class="bannerHome container-fluid" id="desktop" id="topo">

    <div class="container d-flex align-items-center p-5">

        <h1 class="p-4">
            MIRE O OLHAR NO<br /> SEU FUTURO!<br />
        </h1>

    </div>

</div>



<div class="contaner-fluid d-flex align-items-center justify-content-around px-4 my-4" style="height: 55vh;">

    <div class="col-12 col-lg-3 d-flex flex-column justify-content-around border shadow" style="background-color: hsla(275, 100%, 67%, 0.827); height: 90%; border-radius: 10px;">
        <div class="d-flex justify-content-center">
            <img src="./imgs/index/cardLogin.png" class="img-fluid my-2" style="width: 30%;" alt="">
        </div>
        <h5 class="text-center my-auto" style="height:45%;">Realize seu login ou cadastre-se por aqui! <br /> Assim você terá acesso a nosso teste e a outras informações! </h5>
        <div class="mb-2 d-flex justify-content-around">
            <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0); width:40%; border: 3px solid white; color: white;"> login </button>
            <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0); width:40%; border: 3px solid white; color: white;"> cadastro </button>
        </div>
    </div>
    <div class="col-12 col-lg-3 d-flex flex-column justify-content-around border shadow" style="background-color: hsla(275, 56%, 67%, 0.827); height: 90%; border-radius: 10px;">
        <div class="d-flex justify-content-center">
            <img src="./imgs/index/cardContato.png" class="img-fluid my-2" style="width: 30%;" alt="">
        </div>
        <h5 class="text-center my-auto" style="height:45%;">Entre em contato! <br /> Fale conosco para tirar dúvidas e obter mais informações! </h5>
        <div class="mb-2 d-flex justify-content-around">
            <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0); width:80%; border: 3px solid white; color: white;"> contato </button>
        </div>
    </div>
    <div class="col-12 col-lg-3 d-flex flex-column justify-content-around border shadow" style="background-color: hsla(275, 100%, 67%, 0.827); height: 90%; border-radius: 10px;">
        <div class="d-flex justify-content-center">
            <img src="./imgs/index/cardNoticias.png" class="img-fluid my-2" style="width: 30%;" alt="">
        </div>
        <h5 class="text-center my-auto" style="height:45%;">Sabe o que anda acontecendo? <br /> Veja as principais noticias relacionadas a educação em nosso pais e no mundo! </h5>
        <div class="mb-2 d-flex justify-content-around">
            <button class="btn btn-danger" style="background-color: rgba(0, 0, 0, 0); width:80%; border: 3px solid white; color: white;"> noticias </button>
        </div>
    </div>

</div>
<div class="d-flex justify-content-center align-items-center my-5">
    <div class="borderRadius bg-purple m-auto p-3 col-8 col-sm-10 col-xl-4">
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

</div>

<?php
//require_once('./servidor/Conection.php');
require_once('./nav/footer.html');
?>
