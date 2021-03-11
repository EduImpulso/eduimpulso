
import { Link } from 'react-router-dom';

const Footer = () => {
    return(
        <footer className="container-fluid bg-purple text-light d-flex justify-content-around">
            <div className="footerBar d-flex align-items-center">
            <span className="copyleft">&copy;</span>  2021 - EduImpulso
            </div>
            <div className="footerBar d-flex align-items-center">
            <Link className="politicaPriv" to="/privacity">politica de privacidade</Link>
            </div>
        </footer>
    )
}

export default Footer;
