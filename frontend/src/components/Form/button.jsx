const ButtonForm = (props) => {
    return(
        <button className="btn" style={{width: "100%", backgroundColor: "rgba(255, 255, 255, 0)",
            border: "3px solid white", color: "white", fontWeight: "bold"}}>
            {props.children}
        </button>
    )
}

export default ButtonForm;
