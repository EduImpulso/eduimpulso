import Login from '../components/Login';
import { useEffect } from 'react';
import { useSelector } from 'react-redux';
import { Link } from 'react-router-dom';
import Aos from 'aos';
import 'aos/dist/aos.css';

const Home = () => {

    const login = useSelector(state => state.login.status);
    useEffect(() => {
        Aos.init({ duration: 1000 });
    }, [])

    return (
        <div className="container-fluid">
            <div className="row bannerHome" id="desktop">
                <div className="container d-flex align-items-center p-5">
                    <h1 className="p-4">
                        corrida hj,<br /> vitória amanhã!<br /> <h2>#ralaquerola</h2>🏆✌🏽
                </h1>
                </div>
            </div>


            <div className="my-4 d-flex justify-content-center" style={{ width: "100%" }} data-aos="fade-up">
                <img className="img-fluid" style={{ width: "60%" }} src="./imgs/index/Como funciona_R0.png" />
            </div>



            <div className="row contaner-fluid d-flex align-items-center justify-content-around px-4 my-4" data-aos="fade-up">
                <div className="divCard col-12 col-lg-3 d-flex my-2 flex-column justify-content-around shadow">
                    <div className="d-flex justify-content-center">
                        <img src="./imgs/index/cardLogin.png" className="imgCard img-fluid my-2" alt="Login" />
                    </div>
                    <h5 className="tituloCard text-center my-auto d-flex align-items-center justify-content-center">Para ter acesso às nossas páginas secretas, <br /> faça seu login ou cadastre-se aqui!</h5>
                    <div className="mb-2 d-flex justify-content-around">
                        <Link to="/login" className="btnCardMini"> Login </Link>
                        <Link to="/cadastro" className="btnCardMini"> Cadastro </Link>
                    </div>
                </div>
                <div className="divCard col-12 col-lg-3 d-flex my-2 flex-column justify-content-around border shadow">
                    <div className="d-flex justify-content-center">
                        <img src="./imgs/index/cardContato.png" className="imgCard img-fluid my-2" alt="Contato" />
                    </div>
                    <h5 className="tituloCard text-center my-auto d-flex align-items-center justify-content-center">Fale conosco pra tirar dúvidas ou enviar sugestões! </h5>
                    <div className="mb-2 d-flex justify-content-around">
                        <Link to="/contato" className="btnCard"> Contato </Link>
                    </div>
                </div>
                <div className="divCard col-12 col-lg-3 d-flex my-2 flex-column justify-content-around border shadow">
                    <div className="d-flex justify-content-center">
                        <img src="./imgs/index/cardNoticias.png" className="imgCard img-fluid my-2" alt="Notícias" />
                    </div>
                    <h5 className="tituloCard my-auto d-flex align-items-center justify-content-center"> Saiba o que anda rolando de interessante na educação do Brasil e do mundo! #sonoticiaboa </h5>
                    <div className="mb-2 d-flex justify-content-around">
                        <Link to="/news" className="btnCard"> Notícias </Link>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up">
                {!login && <Login />}
            </div>
        </div>
    )
}

export default Home;
