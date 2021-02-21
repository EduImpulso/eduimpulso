import React from 'react';

const CardCursos = (props) =>{
    return (
        <>
        <div className="card-container">
        <div className="card">
            
            <div>
                <h2 className="front text-front my-4">{props.h2}</h2>

            </div>
            <div className="back d-flex flex-column justify-content-around">
            
                <h1 className =" text-back text-info">{props.h1}</h1>
                <p className ="text-card">{props.p}</p>
               
                <a href={props.href} className ="btn buttonCard mx-auto" target ="_blank">Clique aqui</a>
            </div>
        </div>
        </div>
        </>
    );
}

export default CardCursos;