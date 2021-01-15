<?php
//require_once('./servidor/Conection.php');
require_once('./nav/menu.html');
?>

<main class="container-fluid d-flex justify-content-center align-items-center my-5 p-5">
    <div class="row p-3">

        <div class="col-12 col-lg-6">
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

        <div class="col-12 col-lg-6 my-3 p-5 d-flex align-items-center justify-content-center" style="background-color:rgb(37, 37, 37, 0.5)">

            <div class=" d-block alert alert-danger" role="alert">
                Cuidado! ao remover a conta, não poderá ser recuperada!
            </div>
            <!-- { alert &&
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Cadastro deletado
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                </button>
            </div>
            } -->
            <form onSubmit="">
                <fieldset disabled>
                    <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Disabled input</label>
                        <input type="text" id="disabledTextInput" class="form-control" name="username" placeholder="Disabled input" defaultValue="username" />
                    </div>
                </fieldset>
                <button class="d-block btn btn-danger" style="width: 100%">Remover a conta</button>
            </form>
        </div>
    </div>

</main>

<?php
//require_once('./servidor/Conection.php');
require_once('./nav/footer.html');
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>