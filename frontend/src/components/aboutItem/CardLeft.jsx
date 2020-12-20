const CardLeft = (props) => {
    return(
        <>
        <div className="d-flex pt-5 col-6" style={{backgroundImage: `${props.url}`, height: "450px", backgroundSize: "cover"}}>
        </div>
        <div className="d-flex align-items-center justify-content-center p-5 col-6">
            <div className="text-center p-3">
                <p style={{fontSize:"30px"}}>{props.children}</p>
            </div>
        </div>
        </>
    )
}

export default CardLeft;
