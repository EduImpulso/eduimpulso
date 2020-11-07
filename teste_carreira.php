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
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="stylesheet" type="text/css" href="./css/teste_carreiras.css">
    <link rel="shortcut icon" href="./imgs/fav.ico" type="image/x-icon">
    <title> Teste de inteligência de Howard Gardner</title>
</head>
<body>
    <?php require_once('./nav/menuLogado.html') ?>
    <br><br>
    <div class="container">
    <p><h2> Nas questões abaixo, marque uma opção na escala de 1 a 4 (onde 1 = concordo plenamente e 4 = discordo plenamente): </p></h2>
    <br/>
    <form>
        <label>"Eu gosto de aprender sobre a minha personalidade"</label> <br>
        <label for="v1">1</label>
        <input type="radio" name="q1" id="v1" value="1">
        <label for="v2">2</label>
        <input type="radio" name="q1" id="v2" value="2">
        <label for="v3">3</label>
        <input type="radio" name="q1" id="v3" value="3">
        <label for="v4">4</label>
        <input type="radio" name="q1" id="v4" value="4"><br> <br>
        <br/>
       
        <label>"Eu consigo tocar um instrumento musical"</label><br>
        <label for="v5">1</label>
        <input type="radio" name="q2" id="v5" value="1">
        <label for="v6">2</label>
        <input type="radio" name="q2" id="v6" value="2">
        <label for="v7">3</label>
        <input type="radio" name="q2" id="v7" value="3">
        <label for="v8">4</label>
        <input type="radio" name="q2" id="v8" value="4"><br> <br>
        <br/>
      
        <label>"Acho que é mais fácil de resolver os problemas, quando eu estou fazendo alguma atividade física"</label><br>
        <label for="v9">1</label>
        <input type="radio" name="q3" id="v9" value="1">
        <label for="v10">2</label>
        <input type="radio" name="q3" id="v10" value="2">
        <label for="v11">3</label>
        <input type="radio" name="q3" id="v11" value="3">
        <label for="v12">4</label>
        <input type="radio" name="q3" id="v12" value="4"><br><br>
        <br/>
       
        <label>"Eu sempre tenho uma música ou o trecho de uma música na minha cabeça"</label><br>
        <label for="v13">1</label>
        <input type="radio" name="q4" id="v13" value="1">
        <label for="v14">2</label>
        <input type="radio" name="q4" id="v14" value="2">
        <label for="v15">3</label>
        <input type="radio" name="q4" id="v15" value="3">
        <label for="v16">4</label>
        <input type="radio" name="q4" id="v16" value="4"><br><br>
        <br/>
        
        <label>"Eu acho que fazer orçamentos e gerenciar recursos financeiros é algo fácil"</label><br>
        <label for="v17">1</label>
        <input type="radio" name="q5" id="v17" value="1">
        <label for="v18">2</label>
        <input type="radio" name="q5" id="v18" value="2">
        <label for="v19">3</label>
        <input type="radio" name="q5" id="v19" value="3">
        <label for="v20">4</label>
        <input type="radio" name="q5" id="v20" value="4"><br><br>
        <br/>
        
        <label>"Acho que é fácil inventar histórias"</label><br>
        <label for="v21">1</label>
        <input type="radio" name="q6" id="v21" value="1">
        <label for="v22">2</label>
        <input type="radio" name="q6" id="v22" value="2">
        <label for="v23">3</label>
        <input type="radio" name="q6" id="v23" value="3">
        <label for="v24">4</label>
        <input type="radio" name="q6" id="v24" value="4"><br><br>
        <br/>
        
        <label>"Sou muito interessado em testes de personalidade e testes de inteligência"</label><br>
        <label for="v25">1</label>
        <input type="radio" name="q7" id="v25" value="1">
        <label for="v26">2</label>
        <input type="radio" name="q7" id="v26" value="2">
        <label for="v27">3</label>
        <input type="radio" name="q7" id="v27" value="3">
        <label for="v28">4</label>
        <input type="radio" name="q7" id="v28" value="4"><br><br>
        <br/>
       
        <label>"Eu sou uma pessoa muito sociável e que gosta de estar com outras pessoas"</label><br>
        <label for="v29">1</label>
        <input type="radio" name="q8" id="v29" value="1">
        <label for="v30">2</label>
        <input type="radio" name="q8" id="v30" value="2">
        <label for="v31">3</label>
        <input type="radio" name="q8" id="v31" value="3">
        <label for="v32">4</label>
        <input type="radio" name="q8" id="v32" value="4"><br><br>
        <br/>
      
        <label>"Eu sempre posso reconhecer lugares pelos quais já passei, mesmo que tenham passado muitos anos"</label><br>
        <label for="v33">1</label>
        <input type="radio" name="q9" id="v33" value="1">
        <label for="v34">2</label>
        <input type="radio" name="q9" id="v34" value="2">
        <label for="v35">3</label>
        <input type="radio" name="q9" id="v35" value="3">
        <label for="v36">4</label>
        <input type="radio" name="q9" id="v36" value="4"><br><br>
        <br/>
       
        <label>"Eu posso manipular as pessoas se assim eu quiser"</label><br>
        <label for="v37">1</label>
        <input type="radio" name="q10" id="v37" value="1">
        <label for="v38">2</label>
        <input type="radio" name="q10" id="v38" value="2">
        <label for="v39">3</label>
        <input type="radio" name="q10" id="v39" value="3">
        <label for="v40">4</label>
        <input type="radio" name="q10" id="v40" value="4"><br><br>
        <br/>
        
        <label>"Gosto de debates e discussões"</label><br>
        <label for="v41">1</label>
        <input type="radio" name="q11 "id="v41" value="1">
        <label for="v42">2</label>
        <input type="radio" name="q11 "id="v42" value="2">
        <label for="v43">3</label>
        <input type="radio" name="q11 "id="v43" value="3">
        <label for="v44">4</label>
        <input type="radio" name="q11 "id="v44" value="4"><br>
        <input type="button" id="btnSubmit" value="Calcular" />   <br><br>
    </form>
    </div>
    <script>
        document.getElementById("btnSubmit").onclick = function() {
            alert('Teste enviado! Entraremos em contato')
        };
    </script>
    <?php require_once('./nav/footerLogado.html') ?>
</body>
</html>