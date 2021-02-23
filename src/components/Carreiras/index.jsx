import React from 'react';
import Tabs from "./Tabs";
import Conteudo from "./conteudo";
import CounteudoA from "./conteudoArea";
import Busca from "./conteudoBusca";

const Carreiras = ()=>{
    return(
<>
<div>
  <div className= "container-fluid">
      <h1 className="my-3 text-center"><strong>Cursos Técnicos 🎓</strong></h1>
      <Tabs>
        <div label="Por área">
         <CounteudoA/>
        </div>
        <div label="Por Busca">
       <Busca />
        </div>
        <div label="Por ordem alfabética">
       <Conteudo/>
      
        </div>
      </Tabs>
    </div>
    </div>

</>
    )
};

export default Carreiras;
