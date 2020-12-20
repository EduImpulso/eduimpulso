const CardRight = (props) => {
    return(
        <>
            <div className="d-flex align-items-center justify-content-center py-3 col-lg-6">
                <div className="text-center p-3">
                    <p style={{fontSize:"30px"}}>{props.children}</p>
                </div>
            </div>
            <div className="d-flex align-items-center justify-content-center pt-5 col-lg-6" style={{backgroundImage: `${props.url}`, height: "450px", backgroundSize: "cover"}}>
            </div>
        </>
    )
}

export default CardRight;
