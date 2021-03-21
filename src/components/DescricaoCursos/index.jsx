import React, { useState, useEffect } from 'react';
import CardDesc from './cardDesc';
import courses from './course';


const Descricao = (props) =>{
    
    const id = props.id;
    const course = courses
    
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
              <li className="separator"> <span className="separator-bread"></span> 
              </li>
              <li className="item-current item-3351"><strong className="bread-current bread-3351" title="#">{course[id].nome}</strong>
              </li>
              </ul>

              <h1 className="single-title custom-post-type-title h1">{course[id].nome}</h1>
            <div className ="col-6 header-border"></div>
    
            </div>
        </div>
        </div>
 
    </header>
        <div className="container-fluid">
             <div className ="card-salario">
        <p className ="salarios">
            Qual o salário na área? 🤑
        </p>
        <div className="btns">
            <button className type="button" className ="efeito efeito1">Experiente, acima de R$ {course[id].sal_exp.toFixed(2)}</button>
            <button className type="button" className ="efeito efeito2">Valor médio R$ {course[id].sal_med.toFixed(2)}</button>
            <button className type="button" className ="efeito efeito3">Começando, abaixo de R$ {course[id].sal_ini.toFixed(2)}</button>

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
                        <p className="sub-desc">{course[id].descricao}</p>
                    </div>
                    <div className="row">
                    <div className="col">
                        <p className="onde-estudar">🏢 Onde estudar?</p>
                        <p className="modalidade">Santo André - São Bernado</p>

                        <p className="onde-estudar"> 🏡 Modalidade</p>
                        <p className="modadalidade">Presencial, Ead</p>

                        <p className="onde-estudar"> ⏳  Duração </p>
                        <p className="modadalidade"> {course[id].duracao_sem} Semestres</p>
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