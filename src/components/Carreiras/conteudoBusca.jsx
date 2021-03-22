import React,{ useState } from 'react';
import { Link } from 'react-router-dom';
import courses from '../DescricaoCursos/course';

const Busca = (props) =>{

    let cursos = []

    courses.map((curso) => {
       cursos.push(curso.nome)
    })

    console.log(cursos)

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