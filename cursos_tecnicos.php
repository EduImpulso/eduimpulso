<!DOCTYPE html>
<html lang="pt-br">

<head>

<style>
    *{
    margin: 0;  
    padding: 0;
  }

      /* Configuração nav tabs - conteudo*/

  .nav_tabs{
      width: 1120px;
      height: 900px;
      margin: 50px auto;
      background-color:#fff;
      position: relative;
  }
  .nav_tabs ul{
      list-style: none;
  }
  .nav_tabs ul li{
      float: left;
  }
  .nav_tabs label{
      width: 280px;
      padding: 35px;
      background-color:#55165e;
      display: block;
      color:#fff;
      cursor: pointer;
      text-align: center;
  }
  /*cor campos por área - por ordem alfabética...*/
  .rd_tabs:checked ~ label {
      background-color: #a25fd1;
  }

  .rd_tabs{
      display: none;
  }

  .content{
      border-top: 7px solid #e54e43;
      background-color: white;
      display: none;
      position: absolute;
      height: 620px;
      width: 1120px;
      left: 0;
  }

  .rd_tabs:checked ~ .content{
      display: block ;

  }

  .input {
height: 50px;
}


.cf, cursos-adm{
    background-color:antiquewhite;
    height:150px ;
    border: 1px solid #fff ;
}

.titulos{
    color: blueviolet;
}

</style>
  
<?php require_once('./nav/menu.php') ?>
    <span id='topo'></span>

</head>

<body style="background-color: #a25fd1;">

    <?php require_once('./nav/menu.html') ?>

    <div class="container-fluid">

        <main class="row" style="background-color: white;">

            <div class ="col-12 my-4">
            </div>
                <h1 style="color: #a25fd1;">Cursos</h1>

                <nav class="nav_tabs">
                    <ul>
                        <li>
                            <input type="radio" name ="tabs" class="rd_tabs" id="tab1" checked>
                            <label for ="tab1"> Por área </label>
                            <div class="content">

                            <article>
                                <div class="row mb-5">

                                    <div class ="col-sm-4">
                                        <div class="card align-items-center">
                                        <a href="#">                        
                                        <img class="img-thumbnail" src="imgs/graduação/aadm.png" width="175px" ></a>
                                            <div class="card-body">
                                            <h5 class="card-title text-center" style="color: #a25fd1;">Artes, Arquitetura, Design e Moda</h5>
                                            </div>
                                        </div>
                                    </div>
                                    
                                <div class ="col-sm-4">
                                    <div class="card align-items-center">
                                    <a href="#"> 
                                                              
                                        <img class="img-thumbnail " src="imgs/graduação/ciencias_saude.png" width="115px" ></a>
                                            <div class="card-body">
                                            <h5 class="card-title text-center" style="color: #a25fd1;">Ciências e Saúde</h5>
                                            </div>
                                    </div>
                                </div>

                                <div class ="col-sm-4">
                                    <div class="card align-items-center">
                                    <a href="#"> 
                                        <img class="img-thumbnail "  src="imgs/graduação/comunicacao.png" width="200px" >  </a>  
                                            <div class="card-body">
                                            <h5 class="card-title text-center" style="color: #a25fd1;">Comunicação</h5>
                                            </div>
                                    </div>
                                </div>
                                <div class ="col-12 my-2">
                                </div>

                                    <div class ="col-sm-4">
                                        <div class="card align-items-center">
                                        <a href="#">                       
                                        <img class="img-thumbnail " src="imgs/graduação/educacao.png" width="140px" ></a>
                                            <div class="card-body">
                                            <h5 class="card-title text-center" style="color: #a25fd1;">Educação</h5>
                                            </div>
                                        </div>
                                    </div>

                                <div class ="col-sm-4">
                                    <div class="card align-items-center">
                                       <a href="#">                       
                                        <img class="img-thumbnail " src="imgs/graduação/direito.png" width="250px" > </a>
                                            <div class="card-body">
                                            <h5 class="card-title text-center" style="color: #a25fd1;">Direito </h5></a>
                                            </div>
                                    </div>
                                </div>

                                <div class ="col-sm-4">
                                    <div class="card align-items-center">
                                    <a href="#"> 
                                        <img class="img-thumbnail " src="imgs/graduação/engenharia_tecnologia.png" width="165px" > </a>   
                                            <div class="card-body">
                                            <h5 class="card-title text-center" style="color: #a25fd1;">Engenharia e Tecnologia</h5>
                                            </div>
                                    </div>
                                </div>
                                <div class ="col-12 my-2">
                                </div>

                                <div class ="col-sm-4">
                                        <div class="card align-items-center">
                                        <a href="#">                        
                                        <img class="img-thumbnail " src="imgs/graduação/negocios.png" width="170px" ></a>
                                            <div class="card-body">
                                            <h5 class="card-title text-center" style="color: #a25fd1;">Negócios</h5>
                                            </div>
                                        </div>
                                    </div>

                                <div class ="col-sm-4">
                                    <div class="card align-items-center">
                                    <a href="#">                        
                                        <img class="img-thumbnail " src="imgs/graduação/bsp.png" width="165px" ></a>
                                            <div class="card-body">
                                            <h5 class="card-title text-center" style="color: #a25fd1;">Negócios - Bussiness Scholl </h5>
                                            </div>
                                    </div>
                                </div>

                                <div class ="col-sm-4">
                                    <div class="card align-items-center">
                                    <a href="#"> 
                                        <img class="img-thumbnail " src="imgs/graduação/turismo_hospitalidade.png" width="165px" ></a>    
                                            <div class="card-body">
                                            <h5 class="card-title text-center" style="color: #a25fd1;">Turismo e Hospitalidade</h5>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            </article>
                           </div>
                        </li>

                        <li>
                            <input type="radio" name ="tabs" class="rd_tabs" id="tab2">
                            <label for ="tab2"> Por câmpus </label>
                            <div class="content">
                                <article>
                                <nav class="navbar navbar-expand-lg" style="background-color: #4c2666 !important;">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    Santo André</a> 
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">    
                                     Diadema</a>
                                     <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                     Rio Grande da Serra </a>
                                     <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                     São Caetano do Sul </a>
                                     <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                     Ribeirão Pires </a>
                                     <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                     Mauá </a>
                                         

                                </nav>    
                                </article>

                            </div>
                        </li>

                        <li>
                            <input type="radio" name ="tabs" class="rd_tabs" id="tab3">
                            <label for ="tab3"> Por ordem alfabética </label>
                            <div class="content">
                            <article>
                                <nav class="navbar navbar-expand-lg" style="background-color: #4c2666 !important;">
                                
                                    <a class="navbar-brand text-white" href="#"> A </a>
                                    <a class="navbar-brand text-white" href="#"> B </a>
                                    <a class="navbar-brand text-white" href="#"> C </a>
                                    <a class="navbar-brand text-white" href="#"> D </a>
                                    <a class="navbar-brand text-white" href="#"> E </a>
                                    <a class="navbar-brand text-white" href="#"> F </a>
                                    <a class="navbar-brand text-white" href="#"> G </a>
                                    <a class="navbar-brand text-white" href="#"> H </a>
                                    <a class="navbar-brand text-white" href="#"> I </a>
                                    <a class="navbar-brand text-white" href="#"> J </a>
                                    <a class="navbar-brand text-white" href="#"> K </a>
                                    <a class="navbar-brand text-white" href="#"> L </a>
                                    <a class="navbar-brand text-white" href="#"> M </a>
                                    <a class="navbar-brand text-white" href="#"> N </a>
                                    <a class="navbar-brand text-white" href="#"> O </a>
                                    <a class="navbar-brand text-white" href="#"> P </a>
                                    <a class="navbar-brand text-white" href="#"> Q </a>
                                    <a class="navbar-brand text-white" href="#"> R </a>
                                    <a class="navbar-brand text-white" href="#"> S </a>
                                    <a class="navbar-brand text-white" href="#"> T </a>
                               
                                </nav>
                                                                  
                            </article>
                            <div class ="col-12 my-4">
                             </div>
                            <article class="cf cursos-adm">
                            <a href="#" class="titulos">
                            <header class="article-header">
                                <h3 class="titulo">
                                    Automação Industrial		</h3>
                            </header>
                            <section class="entry-content"></section>
                            <footer class="article-footer">
                                <span class="item-grau">
                                    <span class="label">Tipo de curso: </span>
                                                                                                                                            Técnico															</span>
                                                                                        <span class="item-duracao">
                                    <span class="label">Duração: </span>
                                    4 semestres
                                </span>
                                                            <span class="item-modalidade">
                                    <span class="label">Modalidade: </span>
    
                                    Presencial
                                </span>
                            </footer>
                            </a>
                            </article>
                            <div class ="col-12 my-4">
                             </div>
                            <article class="cf curso type-curso hentry escola-ciencias-da-saude" role="article">
                            <a href="#" class="titulos">
                            <header class="article-header">
                                <h3 class="h2">
                                    Administração							</h3>
                            </header>
                            <section class="entry-content"></section>
                            <footer class="article-footer">
                                <span class="item-grau">
                                    <span class="label">Tipo de curso: </span>
                                                                                                                                            Bacharelado															</span>
                                                                                        <span class="item-duracao">
                                    <span class="label">Duração: </span>
                                    4 semestres
                                </span>
                                                            <span class="item-modalidade">
                                    <span class="label">Modalidade: </span>
    
                                    Presencial
                                </span>
                            </footer>
                            </a>
                            </article>
                            <div class ="col-12 my-4">
                             </div>
                            <article class="cf curso type-curso hentry escola-ciencias-da-saude" role="article">
                            <a href="#" class="titulos">
                            <header class="article-header">
                                <h3 class="h2">
                                   Cozinha						</h3>
                            </header>
                            <section class="entry-content"></section>
                            <footer class="article-footer">
                                <span class="item-grau">
                                    <span class="label">Tipo de curso: </span>
                                                                                                                                            Bacharelado															</span>
                                                                                        <span class="item-duracao">
                                    <span class="label">Duração: </span>
                                    4 semestres
                                </span>
                                                            <span class="item-modalidade">
                                    <span class="label">Modalidade: </span>
    
                                    Presencial
                                </span>
                            </footer>
                            </a>
                            </article>
                            <div class ="col-12 my-4">
                             </div>
                            <article class="cf curso type-curso hentry" role="article">
                            <a href="#" class="titulos">
                            <header class="article-header">
                                <h3 class="h2">
                                   Contabilidade						</h3>
                            </header>
                            <section class="entry-content"></section>
                            <footer class="article-footer">
                                <span class="item-grau">
                                    <span class="label">Tipo de curso: </span>
                                                                                                                                            Bacharelado															</span>
                                                                                        <span class="item-duracao">
                                    <span class="label">Duração: </span>
                                    4 semestres
                                </span>
                                                            <span class="item-modalidade">
                                    <span class="label">Modalidade: </span>
    
                                    Presencial
                                </span>
                            </footer>
                            </a>
                            </article>

                            </div>
                        </li>

                        <li>
                            <input type="radio" name ="tabs" class="rd_tabs" id="tab4">
                            <label for ="tab4"> Por busca </label>
                            <div class="content">
                            <article>
                            <nav class="navbar " style="background-color: #4c2666 !important;">
                                <form>
                                    <input type="busca"  class="form-control"  id="exampleInputBusca1"  style="min-width:999px;"  aria-describedby="busca" placeholder="" onfocus="this.style.backgroundColor='#CCFF66'" onblur="this.style.backgroundColor='#ffffff'"/>
                                </form>
                            </nav>
                            
                            </article>

                            </div>
                        </li>
                    </ul>
                </nav>

            <div class ="col-12 my-4">
            </div>    
      
        </main>
</div>
 
<?php require_once('./nav/footer.html') ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>