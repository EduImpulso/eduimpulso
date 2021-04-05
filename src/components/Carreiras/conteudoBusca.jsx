import React, { useState} from 'react';
import { Link } from 'react-router-dom';
import course from '../DescricaoCursos/course';





const Busca = () =>{
   

const [searchTerm, setSearchTerm] = useState('')
    return(
        <>
        <div className="container-fluid">
        <h1 className="titulo-courses my-5">
            Lista de Cursos 
        </h1>
       🔍 <input className=" my-5" type="text" placeholder ="Digite o curso" onChange ={(event) =>{ setSearchTerm(event.target.value);}}/>  
        
            {course.filter((item) =>{
                if (searchTerm == ""){
                    return item
                }else if (item.nome.toLowerCase().includes(searchTerm.toLocaleLowerCase())){
                    return item
                }
            }).map((item, id) =>(

                <div className="courses">
                 <Link to={`/carreiras/${id++}`} className ="courses1" key={item.id}>
                
                <p className="course-title"> {item.nome}</p> 
                
                 <p className="course-semestres">Duração: {item.duracao_sem} Semestres - 
               Período: {item.periodo}</p>
            </Link>
            </div>
        ))}
    <div style={{height:"310px"}}></div>
    </div>
</>

        
    );
}

export default Busca;