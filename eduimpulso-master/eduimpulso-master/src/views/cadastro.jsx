import Register from '../components/Register';

const Cadastro = () => {
    return(
        <>
        <div>
            <div className="container-fluid mt-4">
                <div className="col-12 text-center mb-4" id="desktop">
                <h3><strong>Cadastre-se 📋</strong></h3>
                </div>
                <div className="col-12 text-center mb-4" id="phone">
                <h3>Cadastre-se</h3>
                </div>
            </div>
            <Register/>
        </div>
        </>
    )
}


export default Cadastro;
