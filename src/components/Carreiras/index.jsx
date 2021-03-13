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
      <h3 className="my-3 text-center"><strong>Cursos Técnicos 🎓</strong></h3>
      <h5 className="pb-3" style={{color:"#363636"}}><br></br>Já sabe qual carreira seguir ou quer mais informações? Dá uma pesquisada aí embaixo!</h5>
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
