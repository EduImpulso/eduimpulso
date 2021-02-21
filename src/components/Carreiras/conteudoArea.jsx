import React from 'react';
import CardConteudoA from './cardConteudoA';


const ConteudoA = () =>{
    return(
<>

<div className="container-fluid">
<div className="row d-flex justify-content-center align-items-center">
 <CardConteudoA   src="./imgs/carreiras/moda.jpg" h5="Artes, Arquitetura,Desing e Moda"/>   
<CardConteudoA src="./imgs/carreiras/negocios.jpg"h5="Negócios"/>

<CardConteudoA src="./imgs/carreiras/educacao.jpg"h5="Educação"/>
<CardConteudoA  src="./imgs/carreiras/saude.jpg"  h5="Ciências da Saúde"/>
<CardConteudoA src="./imgs/carreiras/comunicacao.jpg"h5="Comunicação"/>
<CardConteudoA src="./imgs/carreiras/direito.jpg"h5="Direito"/>

<CardConteudoA src="./imgs/carreiras/engenharia.jpg"h5="Engenharia e Tecnologia"/>


<CardConteudoA src="./imgs/carreiras/turismo.jpg"h5="Turismo e Hospitalidade"/>
</div>
</div>

</>
    )
};

    export default ConteudoA;
