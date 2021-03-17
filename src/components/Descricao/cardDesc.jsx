import React from 'react';

const CardDescr = (props) =>{

    return(
        <>

    <div className="col-sm-4">
        <div className ="card-modalidade">
            <h1 className="titulos">{props.h1}</h1>
            <h2 className="subt">{props.h2}</h2>

        </div>
</div>
</>
        )
        };
        export default CardDescr
