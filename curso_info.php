<?php
    session_start();
    require_once('./servidor/conection.php');
    if(!isset($_SESSION['nome'])){
        header("Location: index.php");
        exit;
    }
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $id = $_GET['curso'];
        $sql = "select * from cursos where id_curso = $id";
        $result = $conn->query($sql);
        $rows = $result->fetch_assoc();
    ?>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/global.css">
        <link rel="stylesheet" type="text/css" href="./css/login.css">
        <link rel="stylesheet" type="text/css" href="./css/cursos.css">
        <link rel="shortcut icon" href="./imgs/fav.ico" type="image/x-icon">
        <meta charset="UTF-8"/>
        <link rel="shortcut icon" href="./imgs/fav.ico" type="image/x-icon">
        <title> EduImpulso | <?php echo $rows['nome']; ?></title>
        

    </head>
    <body>
    <?php require_once('./nav/menuLogado.html')?>
        <div class="centraliza">
        <div class="inside">
        <div class="conteudo">
       
       <!--  <div class="logo"> <img src="imagem/logo2020.jpg" width="900px"></div>--> 
                
        <div class="texto">
        <div class="div100">
        <h1><?php echo $rows['nome']; ?></h1>
        <div class="menucur"></div>
        </div>
        </div>
        
       <div class="lado"><img src="<?php echo $rows['image']; ?>" height="320px"></div> <div class="lado"> 
         <strong> 
                Período:<br>
                <?php echo $rows['periodo']; ?><br><br>
                Duração: <br>
                <?php echo $rows['duracao']; ?><br><br>
                Onde estudar: <br>
                <?php echo $rows['local']; ?><br><br><br>
                Salários: <br><br>
                Começando, abaixo de: <br>
                R$ <?php echo $rows['sal_ini']; ?>,00 <br><br>
                Valor médio: <br>
                R$ <?php echo $rows['sal_med']; ?>,00 <br><br>
                Experiente, acima de: <br>
                R$ <?php echo $rows['sal_exp']; ?>,00 <br><br>
                Fonte: <br>
                <a href="<?php echo $rows['fonte']; ?>" target="_blank"><?php echo $rows['fonte']; ?></a>
        </strong>
            </div>
            <br><br><br>
            <br><br>

        <br><br><br>
        <br><br><br>
        <br><br><br> 
        <br><br><br>   
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>
        <br><br><br>


        <h1> O Profissional</h1> 
        <hr>
       <p class="justificado"> <?php echo $rows['descricao']; ?>
        <br>
        <hr>
        <br>
        <br>
    <p class="rodape"  style='margin-top:20px;'>

        <p class="titulo"><strong> Precisa de suporte financeiro pra estudar em universidades públicas? <br>
            Clique aqui e veja como conseguir!</strong> </p><br><br>

        <p class="titulo"><strong> Precisa de cursos preparatórios gratuitos ou de baixo custo pra entrar em universidades públicas? <br>
                Clique aqui e veja como conseguir!</strong> </p>
        
                
</div>
<?php
require_once('./nav/footer.html');
?>
