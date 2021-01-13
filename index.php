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

<?php
//require_once('./servidor/Conection.php');
require_once('./nav/footer.html');
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>