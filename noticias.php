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
                <a href="https://www1.folha.uol.com.br/educacao/2021/01/diretor-responsavel-pelo-enem-morre-de-covid-em-meio-a-pressao-para-adiar-exame.shtml" target="_blank"><img class="imgCardBlog img-fluid" src="./imgs/blog/news3.png" alt="" /></a>
            </div>
        </div>
        <div class="cardBlog col-12 col-lg-3 my-5 mx-4 p-0">
            <div>
                <h6 class="titleColor text-center m-2">Universidades federais cobram plano de vacinação contra a Covid-19</h6>

                <p class="text-center m-1">{props.p1}</p>

            </div>
            <div>
                <a href="https://www.metropoles.com/brasil/universidades-federais-cobram-plano-de-vacinacao-contra-a-covid-19" target="_blank"><img class="imgCardBlog img-fluid" src="./imgs/blog/news4.png" alt="" /></a>
            </div>
        </div>
        <div class="cardBlog col-12 col-lg-3 my-5 mx-4 p-0">
            <div>
                <h6 class="titleColor text-center m-2">Universidades precisam estimular estudantes a inovar </h6>

                <p class="text-center m-1">{props.p1}</p>

            </div>
            <div>
                <a href="https://www.nsctotal.com.br/noticias/na-era-do-empreendedorismo-universidades-precisam-estimular-estudantes-a-inovar" target="_blank"><img class="imgCardBlog img-fluid" src="./imgs/blog/news2.png" alt="" /></a>
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
                <a href="https://agenciabrasil.ebc.com.br/educacao/noticia/2021-01/mec-abre-inscricoes-para-selecao-de-bolsistas-do-prouni" target="_blank"><img class="imgCardBlog img-fluid" src="./imgs/blog/news6.png" alt="" /></a>
            </div>
        </div>
        <div class="cardBlog col-12 col-lg-3 my-5 mx-4 p-0">
            <div>
                <h6 class="titleColor text-center m-2">Aprendizagem retrocede até 4 anos com suspensão de aulas presenciais</h6>

                <p class="text-center m-1">{props.p1}</p>

            </div>
            <div>
                <a href="https://www.poder360.com.br/educacao/aprendizagem-pode-retroceder-ate-4-anos-sem-aulas-presenciais-diz-estudo/#:~:text=Pesquisa%20da%20FGV%20(Funda%C3%A7%C3%A3o%20Get%C3%BAlio,no%20acesso%20ao%20ensino%20remoto." target="_blank"><img class="imgCardBlog img-fluid" src="./imgs/blog/news5.png" alt="" /></a>
            </div>
        </div>
        <div class="cardBlog col-12 col-lg-3 my-5 mx-4 p-0">
            <div>
                <h6 class="titleColor text-center m-2">ENEM 2020 - Veja temas que podem cair na redação</h6>

                <p class="text-center m-1">{props.p1}</p>

            </div>
            <div>
                <a href="https://oglobo.globo.com/sociedade/educacao/enem-e-vestibular/enem-2020-veja-10-temas-de-redacao-que-podem-aparecer-na-prova-24825304#:~:text=Por%20isso%2C%20O%20GLOBO%20consultou,cancelamento%20e%20ado%C3%A7%C3%A3o%20no%20Brasil.&text=Em%20geral%2C%20o%20foco%20%C3%A9,%2C%20tecnol%C3%B3gica%2C%20cultural%20ou%20pol%C3%ADtica." target="_blank"><img class="imgCardBlog img-fluid" src="./imgs/blog/news1.png" alt="" /></a>
            </div>
        </div>

    </div>

</div>

</div>
</div>

</body>

<footer class="container-fluid bg-purple text-light d-flex justify-content-center">
    <div class="footerBar d-flex align-items-center">
        ©2021 - EduImpulso - ORIENTAÇÃO PROFISSIONAL
    </div>
</footer>

</html>