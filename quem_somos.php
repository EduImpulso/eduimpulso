<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" href=".\css\bootstrap-css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="shortcut icon" href="./imgs/fav.ico" type="image/x-icon">
    <title>Quem somos</title>

    <style>
        /* MENU DESKTOP */
        @media(max-width: 1000px) {
            .desktop {
                display: none !important;
            }
        }
    
        /* MENU DEVICE */
        @media(min-width: 1000px) {
            .phone {
                display: none !important;
            }
            .phone {
                display: none !important;
            }

        }
    </style>
</head>

<body>

<?php require_once('./nav/menu.html')?>

<main class="container-fluid" style="background-color: #8B1CDA;">

    <div class=" d-flex align-items-center justify-content-center pt-5">
        <div class="text-center" style="">
            <h1 class="text-light" style="font-weight: 400; text-shadow: 2px 2px 2px black; font-size: 3.5vw;">Quem somos</h1>
        </div>
    </div>
    <div class="row" >            
        <div class="col-lg-6 col-xl-6" style="background-color: #8B1CDA;">
                <p class="text-justify p-5 mb-3" style="font-size: 2vh; font-weight: 500; text-shadow: 0.3px 0.3px 5px #9a57c9;"> EduImpulso é plataforma de orientação profissional, que tem o objetivo orientar os jovens da escola pública e pessoas querem descobrir qual carreira seguir.
                    <br /><br /> Trabalhamos com o conceito de múltiplas inteligências do psicólogo cognitivo e educacional Howard Gardner, pois acreditamos na importância da diversidade de saberes. O mercado de trabalho está se atualizando e reconhecendo cada vez mais os diferentes tipos de inteligência.
                    <br /><br /> Aqui, você terá contato com as universidades, as notas de corte, vestibulares, entre outros fatores, que poderão te direcionar para o suas metas e objetivos. Nossa base de dados é completa, não é tendenciosa e não tem nenhum vínculo com instituições de ensino.
                    <br /><br /> Mostraremos carreiras em expansão, novas áreas e quais estão se tornando obsoletas. Mostrando, dessa forma, o que pode ser mais vantajoso para cada indivíduo.
                    <br /><br /> A missão da nossa plataforma é incluir jovens de escolas públicasno ensino superior e ajudar aqueles que estão mudando de carreira. Queremos uma sociedade com mais acesso a educação!
                </p>
        </div>


        <div class="desktop col-lg-1 col-xl-1" style="">
            <div style="height: 30%; width: 1px; border:1px black solid; margin: auto; margin-top: 200px; box-shadow: 2.5   px 2.5px 2px #919191;"></div>
        </div>


        <div class="desktop col-lg-5 col-xl-5" style="background-color: #8B1CDA;">
            <div class="d-flex justify-content-center">
                <img class="img-fluid my-auto" src="imgs/graduation.png" alt="Estudantes do ensino superior" style="width: 80%; " >
            </div>
        </div>


        <div class="col-lg-12 col-xl-12" style="background-color: #8B1CDA;">
            <div class="embed-responsive embed-responsive-16by9 my-4 mx-auto shadow" style="width: 70%;">
                <iframe width="1280" height="720" src="https://www.youtube.com/embed/UvKwbgv-kmo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>

</main>

<?php require_once('./nav/footer.html')?>

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