import React from 'react';
import { useParams } from 'react-router-dom';
import CardDesc from './cardDesc';


const Descricao = () =>{
    
    const { course } = useParams();
    
    return(
        <>


    <header className=" header-banner header-np">
        <div className="banner" style= {{backgroundSize:"cover"}}> </div>
        <div className ="content">
            <div className="wrap">
            <div className ="m-all t-all d-aal">
                <ul id="breadcrumbs" className ="breadcrumbs">
                    <li className ="item-home">
                        <a className ="bread-link bread-home" href="#" title="Home"> Home</a>
                    </li>
                    <li className="separator separator-home"> <span className="separator-bread"></span></li>
                    <li className="item-cat item-custom-post-type-curso-tecnico"><a className="bread-cat bread-custom-post-type-curso-tecnico" href="#">Carreiras</a>
              </li>
              <li className="separator"> <span class="separator-bread"></span> 
              </li>
              <li className="item-current item-3351"><strong className="bread-current bread-3351" title="#">Administração</strong>
              </li>
              </ul>

              <h1 className="single-title custom-post-type-title h1"> Técnico em Administração</h1>
            <div className ="col-6 header-border"></div>
    
            </div>
        </div>
        </div>
 
    </header>
        <div className="container-fluid">
             <div className ="card-salario">
        <p className ="salarios">
            Quanto ganha um técnico em administração? 🤑
        </p>
        <div className="btns">
            <button className type="button" className ="efeito efeito1">Experiente, acima de $ 1.800,00</button>
            <button className type="button" className ="efeito efeito2">Valor médio $ 1.500,00</button>
            <button className type="button" className ="efeito efeito3">Começando, abaixo de $ 1.300,00</button>

         </div>
    </div>
     </div>   

             <div className ="container-fluid">
                <section className="section-pagina-cursos m-t-3 wrap">
                    <div className ="title text-uppercase m-t-1 m-b-3">
                        <h3 className="m-t-0 title-section">📑 Descrição do  <b>curso</b></h3>
                    </div>
                  </section>   
            </div>

            <br/>

            <div className="container">
                <div className="row">
                    <div className="col">
                        <p className="titulo-desc"> &#9998; O que faz um técnico em administração?</p>
                        <p className="sub-desc">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                    <div className="row">
                    <div className="col">
                        <p className="onde-estudar">🏢 Onde estudar?</p>
                        <p className="modalidade">Santo André - São Bernado</p>

                        <p className="onde-estudar"> 🏡 Modalidade</p>
                        <p className="modadalidade">Presencial, Ead</p>

                        <p className="onde-estudar"> ⏳  Duração </p>
                        <p className="modadalidade"> 4 Semestres</p>
                    </div>
                </div>
            </div>
          </div>

          <br/>
          <br/><br/>
     
        </>
    )
};

export default Descricao;