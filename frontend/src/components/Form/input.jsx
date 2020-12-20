const InputForm = (props) => {
    return(
        <div className="form-group">
            <label for={props.for} style={{color: "white"}}>{props.children}</label>
            <input className="form-control" style={{backgroundColor: "rgb(223, 223, 223)"}} id={props.for} aria-describedby={props.describe}/>
        </div>
    )
}

export default InputForm;
