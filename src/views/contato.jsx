import Contact from '../components/Contact';

const Contato = () => {
    return(
        <div className="container-fluid">
            <div className="row">
                <div className="col-12 text-center mt-4">
                    <h3 className><strong>Fale conosco 💌</strong></h3>
                </div>
            </div>
            <div className="row d-flex align-items-center justify-content-center p-3">
                <Contact />
            </div>
        </div>

    )
}


export default Contato;
