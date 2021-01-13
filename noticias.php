<?php
//require_once('./servidor/Conection.php');
require_once('./nav/menu.html');
?>

<div class="mt-4">
    <div class="col-12 text-center">
        <h5 class="">noticias<img src="./imgs/blog/megaphone.svg" class="img-fluid" alt="" width="50px"></h5>
    </div>
</div>

<div id="carouselExampleFade" class="desktop carousel slide carousel-fade border" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active shadow">
            <img class="d-block w-100" src="./imgs/blog/enem-digital.png" alt="Primeiro Slide" />
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item shadow">
            <img class="d-block w-100" src="./imgs/blog/inscrição-vestibular.png" alt="Segundo Slide" />
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item shadow">
            <img class="d-block w-100" src="./imgs/blog/volta-as-aulas.png" alt="Terceiro Slide" />
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>
<div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">

        <div class="cardBlog col-12 col-lg-3 my-5 mx-4 p-0">
            <div>
                <h6 class="titleColor text-center m-2">Diretor do Inep responsável pelo Enem morre de covid-19</h6>

                <p class="text-center m-1">{props.p1}</p>

            </div>
            <div>
                <Link to="/" target="_blank"><img class="imgCardBlog img-fluid" src="./imgs/blog/news3.png" alt="" /></Link>
            </div>
        </div>
        <div class="cardBlog col-12 col-lg-3 my-5 mx-4 p-0">
            <div>
                <h6 class="titleColor text-center m-2">Universidades federais cobram plano de vacinação contra a Covid-19</h6>

                <p class="text-center m-1">{props.p1}</p>

            </div>
            <div>
                <Link to="/" target="_blank"><img class="imgCardBlog img-fluid" src="./imgs/blog/news4.png" alt="" /></Link>
            </div>
        </div>
        <div class="cardBlog col-12 col-lg-3 my-5 mx-4 p-0">
            <div>
                <h6 class="titleColor text-center m-2">Universidades precisam estimular estudantes a inovar </h6>

                <p class="text-center m-1">{props.p1}</p>

            </div>
            <div>
                <Link to="/" target="_blank"><img class="imgCardBlog img-fluid" src="./imgs/blog/news2.png" alt="" /></Link>
            </div>
        </div>

    </div>
    <div class="row d-flex justify-content-center align-items-center">

        <div class=" cardBlog col-12 col-lg-3 my-5 mx-4 p-0">
            <div>
                <h6 class="titleColor text-center m-2">MEC abre inscrições para seleção de bolsistas ProUni</h6>

                <p class="text-center m-1">{props.p1}</p>

            </div>
            <div>
                <Link to="/" target="_blank"><img class="imgCardBlog img-fluid" src="./imgs/blog/news6.png" alt="" /></Link>
            </div>
        </div>
        <div class="cardBlog col-12 col-lg-3 my-5 mx-4 p-0">
            <div>
                <h6 class="titleColor text-center m-2">Aprendizagem retrocede até 4 anos com suspensão de aulas presenciais</h6>

                <p class="text-center m-1">{props.p1}</p>

            </div>
            <div>
                <Link to="/" target="_blank"><img class="imgCardBlog img-fluid" src="./imgs/blog/news5.png" alt="" /></Link>
            </div>
        </div>
        <div class="cardBlog col-12 col-lg-3 my-5 mx-4 p-0">
            <div>
                <h6 class="titleColor text-center m-2">ENEM 2020 - Veja temas que podem cair na redação</h6>

                <p class="text-center m-1">{props.p1}</p>

            </div>
            <div>
                <Link to="/" target="_blank"><img class="imgCardBlog img-fluid" src="./imgs/blog/news1.png" alt="" /></Link>
            </div>
        </div>

    </div>

</div>

</div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<footer className="container-fluid bg-purple text-light d-flex justify-content-center">
    <div className="footerBar d-flex align-items-center">
        ©2020 - EduImpulso - ORIENTAÇÃO PROFISSIONAL
    </div>
</footer>

</html>