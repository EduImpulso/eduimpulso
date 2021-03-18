
import { Link } from 'react-router-dom';

// import Facebook from './imgs/icones-footer/facebook.svg';

const Footer = () => {
    return (
        <footer className="container-fluid bg-purple text-light d-flex flex-column justify-content-around">

            <div className="d-flex align-items-center justify-content-around" style={{  width:"50%", height:"70%", marginLeft:"50%"}}>
                <a href="https://www.linkedin.com/" className="d-flex justify-content-center">
                    <img className="img-fluid" style={{width:"40%"}} src="./imgs/icones-footer/linkedin.svg"/>
                </a>
                <a href="https://www.youtube.com/" className="d-flex justify-content-center">
                    <img className="img-fluid" style={{width:"40%"}} src="./imgs/icones-footer/youtube.svg"/>
                </a>
                <a href="https://www.facebook.com/" className="d-flex justify-content-center">
                    <img className="img-fluid" style={{width:"40%"}} src="./imgs/icones-footer/facebook.svg"/>
                </a>
                <a href="https://twitter.com/" className="d-flex justify-content-center">
                    <img className="img-fluid" style={{width:"40%"}} src="./imgs/icones-footer/twitter.svg"/>
                </a>
                <a href="https://instagram.com/" className="d-flex justify-content-center">
                    <img className="img-fluid" style={{width:"40%"}} src="./imgs/icones-footer/instagram.svg"/>
                </a>
                <a href="https://www.tiktok.com/pt-BR/" className="d-flex justify-content-center">
                    <img className="img-fluid" style={{width:"40%"}} src="./imgs/icones-footer/tik-tok.svg"/>
                </a>
                <a href="https://www.spotify.com/br/" className="d-flex justify-content-center">
                    <img className="img-fluid" style={{width:"40%"}} src="./imgs/icones-footer/spotify.svg"/>
                </a>
                <a href="https://www.whatsapp.com/" className="d-flex justify-content-center">
                    <img className="img-fluid" style={{width:"40%"}} src="./imgs/icones-footer/whatsap.svg"/>
                </a>
                
            </div>

            <div className="d-flex justify-content-around" style={{width:"100%", height:"30%" }}>

                <div className="footerBar d-flex align-items-center">
                    <span className="copyleft">&copy;</span>  2021 - EduImpulso
                </div>
                <div className="footerBar d-flex align-items-center">
                    <Link className="politicaPriv" to="/privacity">politica de privacidade</Link>
                </div>

            </div>


        </footer>
    )
}

export default Footer;
