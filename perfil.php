<?php
session_start();
if(!isset($_SESSION['id_user'])){
    header("Location: index.php");
    exit;
}
require_once('./nav/menu.html');
?>

<main class="container-fluid d-flex justify-content-center align-items-center my-5">
    <div class="row d-flex justify-content-center">

        <div class="col-12 col-lg-5">
            <div class="col-lg-12 py-2" style="background-color: hsla(275, 46%, 64%, 0.562); border-radius: 20px; ">
                <form method="post" action="./servidor/edituser.php">
                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> Nome </span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" name="name" value=<?php echo $_SESSION['name'] ?> aria-describedby="inputGroup-sizing-sm" />
                    </div>
                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> User </span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" name="username" value=<?php echo $_SESSION['username'] ?> aria-describedby="inputGroup-sizing-sm" />
                    </div>
                    <div class="input-group my-3 col-lg-12 d-flex align-items-center">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> E-mail </span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" name="email" value=<?php echo $_SESSION['email'] ?> aria-describedby="inputGroup-sizing-sm" />
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
            <form method="post" action="./servidor/deleteuser.php" class="col-12 col-lg-5 h-50 p-3 mx-2 my-auto d-flex flex-column align-items-center justify-content-around border shadow text-center">
                <fieldset disabled hidden>
                    <div class="mb-1 w-100">
                        <input type="text" id="disabledTextInput" class="form-control" name="id" placeholder="Disabled input" defaultValue=<?php echo $_SESSION['id_user'] ?> />
                    </div>
                </fieldset>
                <button class="d-block btn btn-danger w-100">Remover a conta</button>
            </form>
        </div>
    </div>

</main>

<?php
require_once('./nav/footer.html');
?>
