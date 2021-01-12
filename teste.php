<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Titulo da pagina -->
    <title>EduImpulso - Orientação profissional</title>
</head>
<body class="container">
    <form method="post" action="./servidor/cadastro_verify.php">
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
            <div id="nameHelp" class="form-text">Insira seu nome</div>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp">
            <div id="usernameHelp" class="form-text">Insira seu username</div>
        </div>
        <div class="mb-3">
            <label for="born" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" id="born" name="born" aria-describedby="bornHelp">
            <div id="bornHelp" class="form-text">Informe sua data de nascimento</div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Informe seu e-mail</div>
        </div>
        <div class="mb-3">
            <label for="scholling" class="form-label">Escolaridade</label>
            <select class="form-select" name="scholling" id="scholling" aria-label="Default select example">
                <option selected value="Fundamental">Fundamental completo</option>
                <option value="Ensino Médio">Ensino Médio</option>
                <option value="Ensino Técnico">Ensino Técnico</option>
                <option value="Superior completo">Superior completo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gênero</label>
            <select class="form-select" name="gender" id="gender" aria-label="Default select example">
                <option selected value="Não informado">Não quero informar</option>
                <option value="Homem">Homem</option>
                <option value="Homem trans">Homem trans</option>
                <option value="Mulher">Mulher</option>
                <option value="Mulher trans">Mulher trans</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="password1" class="form-label">E-mail</label>
            <input type="password" class="form-control" id="password1" name="password1" aria-describedby="passwordHelp">
            <div id="passwordHelp" class="form-text">Digite sua senha</div>
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">E-mail</label>
            <input type="password" class="form-control" id="password2" name="password2" aria-describedby="passwordHelp">
            <div id="passwordHelp" class="form-text">Repita a senha informada</div>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>