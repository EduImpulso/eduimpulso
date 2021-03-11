import React from 'react';

const CardCarreirasAlf = (props) =>{
    return(
        <>
        <div className=" cardAlfabeto">
            <div className="card-bodya">
                <h5 className = "card-title">{props.h5}</h5>
                <p className = "card-text">{props.p}</p>

        </div>
            </div>
        </>

    )
};

export default CardCarreirasAlf;