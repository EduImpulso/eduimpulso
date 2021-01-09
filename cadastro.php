<?php
    //require_once('./servidor/Conection.php');
    require_once('./nav/menu.html');
?>
<div class="container-fluid mt-4">
                <div class="col-12 text-center mb-4">
                    <h1 class="display-4">Cadastre-se</h1>
                </div>
            </div>
            <div class="container-fluid d-flex justify-content-center align-items-center">

                <div class="container-fluid row mb-5">

                    <div class="form m-auto p-4 my-4 col-12 col-md-12 col-lg-12 col-xl-5">

                        <form>
                            <InputForm for="name" type="text" placeholder="Nome completo">
                                Nome completo
                        </InputForm>

                            <InputForm for="username" type="text" placeholder="Digite um nome de usuário">
                                Username
                        </InputForm>

                            <InputForm for="email" type="e-mail" placeholder="Informe seu e-mail">
                                E-mail
                        </InputForm>

                            <InputForm for="password1" type="password" placeholder="Digite uma senha">
                                Digite uma senha
                        </InputForm>

                            <InputForm for="password2" type="password" placeholder="Confirme a senha">
                                Repita a senha
                        </InputForm>

                            <InputForm for="born" type="date">
                                Data de nascimento
                        </InputForm>

                        <div class="row d-flex justify-content-center">
                                <div class="col-12">
                                <label class="dropsownEscolaridadeLabel my-2">Nível de escolaridade</label>
                                    <div class="dropdown">
                                        <button class="dropsownEscolaridade btn btn-secondary dropdown-toggle" style="color: black; width: 100%" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            clique aqui
                                        </button>
                                        <div class="dropdown-menu" style="width: 100%" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Fundamental</a>
                                            <a class="dropdown-item" href="#">Ensino Médio</a>
                                            <a class="dropdown-item" href="#">Técnico</a>
                                            <a class="dropdown-item" href="#">Superior</a>
                                            <a class="dropdown-item" href="#">Não estou estudando</a>
                                            <a class="dropdown-item" href="#">Não quero declarar</a>
                                        </div>
                                    </div>
                                </div>

                        
                                
                            </div>

                            
                            <div class="row d-flex justify-content-center">
                                <div class="col-12">
                                <label class="dropsownGeneroLabel my-2">Genero</label>
                                    <div class="dropdown">
                                        <button class="dropsownGenero btn btn-secondary dropdown-toggle" style="color: black" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            clique aqui
                                        </button>
                                        <div class="dropdown-menu" style="width: 100%" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">Masculino</a>
                                            <a class="dropdown-item" href="#">Feminino</a>
                                            <a class="dropdown-item" href="#">Homem Trans</a>
                                            <a class="dropdown-item" href="#">Mulher Trans</a>
                                            <a class="dropdown-item" href="#">Não quero declarar</a>
                                        </div>
                                    </div>
                                </div>

                        
                                
                            </div>

                            <ButtonForm>Cadastre-se</ButtonForm>
                            <Link class="alternativeLink form-text" to="/">Já possui o cadastro? Clique aqui!</Link>
                        </form>
                    </div>

                </div>
            </div>
            <?php
    //require_once('./servidor/Conection.php');
    require_once('./nav/footer.html');
?>
