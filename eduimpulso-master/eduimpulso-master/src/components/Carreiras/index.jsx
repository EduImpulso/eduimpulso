import React from 'react';
import Tabs from "./Tabs";
import Conteudo from "./conteudo";
import CounteudoA from "./conteudoArea";
import Busca from "./conteudoBusca";

const Carreiras = ()=>{
    return(
<>
<div>
<div className="mt-4">
                <div className="col-12 text-center">
                    <h3 className="pb-3"><strong>Cursos Técnicos 🎓</strong></h3>
                </div>
                <div className="col-12 text-center">
                    <h5 className="pb-3" style={{color:"#363636"}}>Já sabe qual carreira seguir ou quer mais informações? Dá uma pesquisada aí embaixo!</h5>
                </div>
      <Tabs>
        <div label="Por área">
         <CounteudoA/>
        </div>
        <div label="Por Busca de Curso">
       <Busca />
        </div>
        <div label="Por Busca de Cidade">
       <Conteudo/>
      
        </div>
      </Tabs>
    </div>
    </div>

</>
    )
};

export default Carreiras;
