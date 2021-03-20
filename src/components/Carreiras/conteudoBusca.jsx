import React,{ useState, useEffect } from 'react';
import { Link } from 'react-router-dom';

const cursos =[
    
    'Administração - Tipo de Curso: Técnico - Duração: 4 semestres - Modalidade: Presencial, Ead (Online)',
    'Administração - Integrado ao Ensino Médio - Tipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial ',
    'Automação Industrial - Integrado ao Ensino Médio Tipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial' ,   
    'Automação Industrial Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial, Ead Online',
    'Cozinha Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial, Ead Online'
      ,
      'Contabilidade Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencia)',

      'Design de Interiores - Integrado ao Ensino MédioTipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
      'Desenvolvimento de Sistemas Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial)',
      'Desenvolvimento de Sistemas - Integrado ao Ensino MédioTipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial, Ead (Online)',
      'Design de Interiores - Integrado ao Ensino MédioTipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial, Ead (Online)',

      
      'EdificaçõesTipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial)',
      'Edificações - Integrado ao Ensino MédioTipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial)',
      'Eletrônica - Integrado ao Ensino MédioTipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial)',
      'Ensio Médio - com Habilitação Profissional em Administração Tipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial)',
       'Ensino Médio - com Habilitação Profissional de Técnico em InformáticaTipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial)',
       'Eletroeletrônica Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial)',

       'Ensino Médio - com Habilitação Profissional de Técnico em Meio AmbienteTipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial',
       'EletrotécnicaTipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial)',
       'Ensino Médio - com Habilitação Profissional de Técnico em Desenvolvimento de SistemasTipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial',
       'Ensino Médio - com Habilitação Profissional de Técnico em EletrônicaTipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial)',
       'Ensino Médio - com Habilitação Profissional de Técnico em Manutenção AutomotivaTipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial)',
       'Ensino Médio - com Habilitação Profissional de Técnico em MecatrônicaTipo de Curso: Técnico Duração: 6 semestres Modalidade: Presenciall',
       'Ensino Médio - com Habilitação Profissional de Técnico em QuímicaTipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial',
       'Ensino Médio - com Habilitação Profissional de Técnico em Recursos HumanosTipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial)',

      
       'Farmácia Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
      
       'Gestão de Projetos - Especialização Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial, Ead (Online)',
       'Guia de Turismo Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial, Ead (Online)',
      
       'Informática para InternetTipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
       'Informática para Internet - Integrada ao Ensino Médio Tipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial',
      
       'Logística Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
      
       'Mecânica Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
       'Mecânicatrônica Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
       'Mecânicatrônica - Integrada ao Ensino Médio Tipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial',
       'Meio Ambiente Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
       'Meio Ambiente - Integrado ao Ensino Médio Tipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial',
       'Manutenção e Suporte em Informática Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
       'Manutenção Automotiva Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
      
       'Nutrição e Dietética Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
       'Nutrição e Dietética - Integrado ao Ensino Médio Tipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial',
     
       'Química Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
       'Química - Integrado ao Ensino Médio Tipo de Curso: Técnico Duração: 6 semestres Modalidade: Presencial',
     
       'Recursos Humanos Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
      
       'Secretariado Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial, EaD (Online)',
       'Serviços Jurídicos  Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial',
      
       'Transações Imobiliárias Tipo de Curso: Técnico Duração: 4 semestres Modalidade: Presencial, EaD (Online)',

 
];



const Busca = (props) =>{
    const [busca, setBusca] = useState ('');
    const cursoFiltrados = cursos
    .filter((curso) => curso.toLowerCase().startsWith(busca.toLowerCase()));

    return(

<>
<div className="container-fluid">
<div className ="InputBusca"> 🔍
<input type ="text" onFocus="document.body.style.background = '#8220c6'" onBlur="document.body.style.background = '#000000'" value ={busca} onChange = {(ev) => setBusca(ev.target.value)} />
</div>

<span>
<ul className="filtro list-group list-group-flush">
        {cursoFiltrados.map((curso, id)=>(
            <Link to={`/carreiras/${id++}`} className="list-group-item" key={curso}>{curso}<br/></Link>
        ))}
</ul>
<div style={{height:"310px"}}></div>
</span>
</div><br/>
</>

        
    )
};

export default Busca;