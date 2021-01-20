<?php
session_start();
if(!isset($_SESSION['id_user'])){
    header("Location: index.php");
    exit;
}
require_once('./nav/menu.html') ?>

    <div class="container-fluid">
        <div class ="col-12 text-left mt-5">
            <div class="container">
                <h3 class="display-4" style="color:#a25fd1">Cursos Técnicos</h3>
                <div class="linha my-4 mx-auto"></div>
                <p class="display-4"> Curso: <?php echo $_SESSION['name_course'];?></p>
            </div>
        </div> 

        <div class="container">

            <div class="row" style="border-bottom: 1px solid rgba(0, 0, 0, 0.3);">

                <div class="col-6"  style="border-right:  1px solid rgba(0, 0, 0, 0.3)">
                    <div class="border-info text-center">
                        <div class="card-body">
                            <h4>Unidade </h4>
                            <h7 class ="card-subtitle mb-2"><?php echo $_SESSION['local'];?></h7>  
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="border-info text-center">
                        <div class="card-body">
                            <h4>Período: <?php echo $_SESSION['turn']; ?>
                            <h7 class ="card-subtitle mb-2">Duração: <?php echo number_format($_SESSION['duration'], 2, '.', ''); ?></h4> semestres </h7> 
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="row">

                <div class="col-6"style="border-right:  1px solid rgba(0, 0, 0, 0.3);">
                    <div class="border-info text-center">
                        <div class="card-body">
                            <h4 class="card-title ">Endereço </h4>
                            <h7 class ="card-subtitle mb-2">
                            <?php
                                $cep = $_SESSION['cep'];
                                $json = file_get_contents("https://viacep.com.br/ws/$cep/json");
                                $data = json_decode($json);
                            ?>
                            <p><?php print_r($data->logradouro); ?> - <?php print_r($data->bairro); ?></p>
                            <p><?php print_r($data->cep); ?> - <?php print_r($data->localidade); ?>(<?php print_r($data->uf); ?>)</p>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="border-info text-center">
                        <div class="card-body">
                            <h4 class="card-title">Salário:</h4>
                            <h7 class ="card-subtitle mb-2">Inicial: R$<?php echo $_SESSION['sal_start']; ?> - Média: R$ <?php echo $_SESSION['sal_med'];?> - Experiente: R$ <?php echo $_SESSION['sal_exp'];?> </h7>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="linha my-4 mx-auto"></div>
        <div class="container mb-4">
            <p class="text-justify">
                <?php echo $_SESSION['describe']; ?>
            </p>
        </div>
    </div>

 <?php require_once('./nav/footer.html') ?>