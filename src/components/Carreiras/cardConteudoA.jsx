import React from 'react';

const CardConteudoA = (props) =>{
    return(
        <>
<div className="cardArea col-12 col-lg-3 my-5 mx-4 p-0">
    <div>
        <h5 className="titleColor text-center m-2">{props.h5}</h5>
    </div>

    <a href= {props.href} target="_blank"><img className="imgCardArea img-fluid" src={props.src} alt="" /></a>
</div>
            
            
            
                
      
        
</>
        )
        };
export default CardConteudoA;