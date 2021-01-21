<?php
//require_once('./servidor/Conection.php');
require_once('./nav/menu.php');
?>

<div class="container-fluid">

    <div class="row">
        <div class="col-12 text-center mt-4">
            <h3 class=""><strong>Fale conosco 💌</strong></h3>
        </div>
    </div>

    <div class="row d-flex align-items-center justify-content-center p-3">

        <div class="col-12 col-lg-6 m-auto pb-3">
            <img src="./imgs/fale_conosco/contato.jpg" class="img-fluid border" alt="fale conosco">
        </div>

        <div class="cardContato p-1 text-white col-12 col-lg-6 rounded">

            <!--alinhamento -->

            <div class="justify-content-center my-1 p-2">

                <p class="text-center"> Envia-nos uma mensagem teremos o maior prazer em atendê-lo!</p>

                <form method="post" action="./servidor/sentmsg.php">
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputNome">Digite seu nome</label>
                            <input type="text" class="form-control" name="name" id="inputNome" placeholder="Nome">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="inputEmail">Endereço de E-mail</label>
                            <input type="email" class="form-control" name="email" id="inputEmail" placeholder="E-mail">
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="inputAssunto"> Assunto </label>
                            <input type="text" class="form-control" name="assunto" id="inputAssunto" placeholder="Assunto">
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="formControlTextarea"> Mensagem: </label>
                            <textarea class="form-control" name="msg" id="formControlTextatrea" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn col-sm-12 col-md-12 col-lg-12" style="background-color: rgba(0, 0, 0, 0); border: 3px solid white; color: white;">Enviar</button>

                    </div>

                </form>

            </div>

        </div>
    </div>

</div>

<?php
require_once('./nav/footer.html');
?>
