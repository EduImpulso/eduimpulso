<?php
    require_once('./servidor/conection.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/global.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <link rel="shortcut icon" href="./imgs/fav.ico" type="image/x-icon">
    <title>EduImpulso - Orientação profissional</title>
</head>
<body>
    <?php require_once('./nav/menu.html')?>
    <main>
        <div class="bannerCard">
            <img src="./imgs/bannerLogin.svg" alt="">
        </div>

        <div class="loginCard">
            <div class="loginCardInterno">
                <form method="POST" action="./servidor/login_verify.php" onsubmit="validate(event)">
                    <h1>LOGIN</h1>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                    <input type="password" id="password" name="password" placeholder="Digite uma senha" required>
                    <button id="submit" type="submit">ENTRAR</button>
                    <a href="cadastro.php">Cadastre-se</a>
                </form>
            </div>
        </div>
    </main>
    <?php require_once('./nav/footer.html')?>
</body>
</html>