import React from 'react';
import CardConteudoA from './cardConteudoA';


const ConteudoA = () =>{
    return(
<>

<div className="container-fluid">
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
</div>

</>
    )
};

    export default ConteudoA;
