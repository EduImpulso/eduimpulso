<?php
//require_once('./servidor/Conection.php');
require_once('./nav/menu.html');
?>

<div class="container-fluid">

    <div class="row">
        <div class="col-12 text-center mt-4">
            <h1 class="">fale conosco</h1>
        </div>
    </div>

    <div class="row d-flex align-items-center justify-content-center p-3">

        <div class="col-12 col-lg-6 m-auto pb-3">
            <img src="./imgs/fale_conosco/contato.jpg" class="img-fluid border" style="" alt="">
        </div>

        <div class="cardContato p-1 text-white col-12 col-lg-6 rounded" ">

            <!--alinhamento -->

            <div class="justify-content-center my-1 p-2">

                <p class="text-center"> Envia-nos uma mensagem teremos o maior prazer em atendê-lo!</p>

                <form>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputNome">Digite seu nome</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="inputEmail">Endereço de E-mail</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="inputAssunto"> Assunto </label>
                            <input type="text" class="form-control" id="inputAssunto" placeholder="Assunto">
                        </div>

                        <div class="form-group col-sm-12">
                            <label for="formControlTextarea"> Mensagem: </label>
                            <textarea class="form-control" id="formControlTextatrea" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn col-sm-12 col-md-12 col-lg-12" style="background-color: rgba(0, 0, 0, 0); border: 3px solid white; color: white;">Enviar</button>

                    </div>

                </form>

            </div>

        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<footer className="container-fluid bg-purple text-light d-flex justify-content-center">
    <div className="footerBar d-flex align-items-center">
        ©2020 - EduImpulso - ORIENTAÇÃO PROFISSIONAL
    </div>
</footer>

</html>