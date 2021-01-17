<?php
//require_once('./servidor/Conection.php');
require_once('./nav/menu.html');
?>

<main class="container-fluid d-flex justify-content-center align-items-center my-5">
    <div class="row d-flex justify-content-center">

        <div class="col-12 col-lg-5">
            <div class="col-lg-12 py-2" style="background-color: hsla(275, 46%, 64%, 0.562); border-radius: 20px; ">
                <form onSubmit="">
                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Nome </span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" name="nome" value="name" onChange="" aria-describedby="inputGroup-sizing-sm" />
                    </div>
                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> User </span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" name="user" value="user" onChange="" aria-describedby="inputGroup-sizing-sm" />
                    </div>
                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> E-mail </span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" name="email" value="email" onChange="" aria-describedby="inputGroup-sizing-sm" />
                    </div>
                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Password </span>
                        </div>
                        <input type="password" class="form-control" aria-label="Small" name="password" value="password" onChange="" aria-describedby="inputGroup-sizing-sm" />
                    </div>
                    <button class="btn btn-secondary" style="border-radius: 5px";>Alterar</button>

                </form>
            </div>
        </div>
        <div id="phone" style="height:20px;"></div>
        <div class="row col-12 col-lg-5 p-3 d-flex justify-content-around my-3 mx-3" style="background-color:rgb(37, 37, 37, 0.5);">

            <div class="col-12 col-lg-6 my-auto d-block alert alert-danger mx-2 text-center d-flex align-items-center h-50" role="alert">
                Cuidado! ao remover a conta, não poderá ser recuperada!
            </div>
            <!-- { alert &&
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Cadastro deletado
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                </button>
            </div>
            } -->
            <form onSubmit="" class="col-12 col-lg-5 h-50 p-3 mx-2 my-auto d-flex flex-column align-items-center justify-content-around border shadow text-center">
                <fieldset disabled>
                    <div class="mb-1 w-100">
                        <label for="disabledTextInput" class="form-label">Disabled input</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="username" placeholder="Disabled input" defaultValue="username" />
                    </div>
                </fieldset>
                <button class="d-block btn btn-danger w-100">Remover a conta</button>
            </form>
        </div>
    </div>

</main>

</body>

<footer class="container-fluid bg-purple text-light d-flex justify-content-center">
    <div class="footerBar d-flex align-items-center">
        ©2020 - EduImpulso - ORIENTAÇÃO PROFISSIONAL
    </div>
</footer>

</html>