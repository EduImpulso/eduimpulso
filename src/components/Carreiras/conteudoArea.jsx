import React from 'react';
import CardConteudoA from './cardConteudoA';


const ConteudoA = () =>{
    return(
<>
<div className="row d-flex justify-content-center align-items-center">
        <div className="container-Area">
            <div className="card-Area">
                <div className ="face face1">
                    <div className="content-Area">
                        <h5 className="titleColorCards text-center m-2">
                            Artes, Arquitetura, Design e Moda
                        </h5>
                        <img  className="imgCardArea img-fluid" style={{padding:"20px", width:"50%"}} src= "./imgs/carreiras/artes.png"alt=""></img>
                    </div>
                </div>
                <div className ="face face2">
                    <div className ="content-Area">
                        <ul>
                            <li>
                            Design de Interiores - Integrado ao Ensino Médio</li>
                            <li>Dança</li>
                            <li>Regência</li>
                            <li>Canto</li>
                            <li>Teatro</li>
                          
                        </ul>
                    </div>
                </div>
            </div>

            {/* card 2 */}

            <div className="card-Area">
                <div className ="face face1">
                    <div className="content-Area">
                        <h5 className="titleColorCards text-center m-2">
                           Negócios
                        </h5>
                        <img  className="imgCardArea img-fluid" style={{padding:"20px", width:"50%"}} src= "./imgs/carreiras/negocios.png"alt=""></img>
                    </div>
                </div>
                <div className ="face face2">
                    <div className ="content-Area">
                        <ul>
                            <li>
                            Administração
                            </li>
                            <li>Contabilidade</li>
                            
                            <li>Gestão de Projetos - Especialização</li>
                            <li>Logística</li>
                            <li>Recursos Humanos</li>
                            <li>Secretariado</li>
                            <li>Transações Imobiliárias </li>


                        </ul>
                    </div>
                </div>
            </div>

            {/* card - 3 */}

            <div className="card-Area">
                <div className ="face face1">
                    <div className="content-Area">
                        <h5 className="titleColorCards text-center m-2">
                           Engenharia e Tecnologia
                        </h5>
                        <img  className="imgCardArea img-fluid" style={{padding:"20px", width:"50%"}} src= "./imgs/carreiras/engenharia.png"alt=""></img>
                    </div>
                </div>
                <div className ="face face2">
                    <div className ="content-Area">
                        <ul>
                            <li>Automação Industrial</li>
                            <li>Desenvolvimento de Sistemas</li>
                            <li>Edificações | Eletroeletrônica | Eletrônica </li>
                            <li>Informática para internet</li>
                            <li>Manutenção Automotiva</li>
                            <li>Manutenção e Suporte em Informática</li>
                            <li>Mecânica | Mecatrônica</li>
                             <li>Meio Ambiente  | Química</li>
                            
                           

                                         
                        </ul>
                    </div>
                </div>
            </div>

            {/* card -4  */}

            <div className="card-Area">
                <div className ="face face1">
                    <div className="content-Area">
                        <h5 className="titleColorCards text-center m-2">
                           Saúde
                        </h5>
                        <img  className="imgCardArea img-fluid" style={{padding:"20px", width:"50%"}} src= "./imgs/carreiras/saude.png"alt=""></img>
                    </div>
                </div>
                <div className ="face face2">
                    <div className ="content-Area">
                        <ul>
                            <li>
                            Nutrição e Dietética </li>
                            <li>Farmácia</li>

                        </ul>
                    </div>
                </div>
            </div>

            <div className="card-Area">
                <div className ="face face1">
                    <div className="content-Area">
                        <h5 className="titleColorCards text-center m-2">
                           Comunicação
                        </h5>
                        <img  className="imgCardArea img-fluid" style={{padding:"20px", width:"50%"}} src= "./imgs/carreiras/comunicacao2.png"alt=""></img>
                    </div>
                </div>
                <div className ="face face2">
                    <div className ="content-Area">
                        <ul>
                            <li>
                            Ensino Médio - Linguagens, Ciências Humanas e Sociais</li>
 
                        </ul>
                    </div>
                </div>
            </div>
            <div className="card-Area">
                <div className ="face face1">
                    <div className="content-Area">
                        <h5 className="titleColorCards text-center m-2">
                           Turismo e Hospitalidade
                        </h5>
                        <img  className="imgCardArea img-fluid" style={{padding:"20px", width:"50%"}} src= "./imgs/carreiras/turismo.png"alt=""></img>
                    </div>
                </div>
                <div className ="face face2">
                    <div className ="content-Area">
                        <ul>
                            <li>
                            Cozinha</li>
                            <li>Guia de Turismo</li>
 
                        </ul>
                    </div>
                </div>
            </div>
            
            <div className="card-Area">
                <div className ="face face1">
                    <div className="content-Area">
                        <h5 className="titleColorCards text-center m-2">
                           Direito
                        </h5>
                        <img  className="imgCardArea img-fluid" style={{padding:"20px", width:"50%"}} src= "./imgs/carreiras/direito.png"alt=""></img>
                    </div>
                </div>
                <div className ="face face2">
                    <div className ="content-Area">
                        <ul>
                            <li>
                            Serviços Jurídicos</li>
                            
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        </div>    
 
{/* <div className="container-fluid">
<div className="row d-flex justify-content-center align-items-center">
<CardConteudoA   src="./imgs/carreiras/artes.png" h5="Artes, Arquitetura,Design e Moda"/>   
<CardConteudoA src="./imgs/carreiras/negocios.png"h5="Negócios"/>

<CardConteudoA src="./imgs/carreiras/educacao.png"h5="Educação"/>
<CardConteudoA src="./imgs/carreiras/saude.png"  h5="Ciências da Saúde"/>
<CardConteudoA src="./imgs/carreiras/comunicacao2.png"h5="Comunicação"/>
<CardConteudoA src="./imgs/carreiras/direito.png"h5="Direito"/>

<CardConteudoA src="./imgs/carreiras/engenharia.png"h5="Engenharia e Tecnologia"/>


<CardConteudoA src="./imgs/carreiras/turismo.png"h5="Turismo e Hospitalidade"/>
</div>
</div> */}

</>
    )
};

    export default ConteudoA;
