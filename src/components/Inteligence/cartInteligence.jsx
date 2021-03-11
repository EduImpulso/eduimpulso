import React from 'react';

const cartInteligence = (props) => {

    return (

        <div className="container">
            <div>
                <p className="text-center teoriaTitulo2"  data-anima="center">
                    <strong> {props.title} </strong>
                </p>

                <div className="displayed">
                    <img className="displayed img-fluid mx-auto"
                        src={props.link}
                        alt=""
                        width="462"
                        height="270"
                        data-anima="right"
                    >
                    </img>
                </div>
            </div>

            <div className="container">
                <p className="teoriaCorpo1" data-anima="left" >{props.txt}</p>
            </div>

            <div className="container">
                <ul className="teoriaCorpo1" data-anima="center">
                    <li>
                        <strong>Hobbies indicados: </strong>{props.x1}
                    </li>
                    <li>
                        <strong>Carreiras indicadas: </strong>{props.x2}
                    </li>
                    <li>
                        <strong>Gênios desse tipo: </strong>

                        <a href={props.a1} target="_blank">{props.g1}</a>
                        
                        <a href={props.a2} target="_blank">{props.g2}</a>

                        <a href={props.a3} target="_blank">{props.g3}</a>

                        <a href={props.a4} target="_blank">{props.g4}</a>

                    </li>
                    <li>
                        <a href={props.l} target="_blank">Saiba +</a>
                    </li>

                </ul>
            </div>
            <p className="linha mx-auto"></p>
        </div>
    )
};

export default cartInteligence;
