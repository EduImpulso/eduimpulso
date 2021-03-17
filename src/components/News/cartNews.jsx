import React from 'react';

const CartNews = (props) => {
    return (
        <>
            <div className="cardBlog col-12 col-lg-3 my-5 mx-4 p-0" data-aos="fade-down">
                <div>
                    <h6 className="titleColor text-center m-2">{props.h6}</h6>
                    

                </div>
                <div>
                    <a href= {props.href} target="_blank"><img className="imgCardBlog img-fluid" src={props.src} alt="" /></a>
                    
                </div>
            </div>
        </>
    );
}

export default CartNews;