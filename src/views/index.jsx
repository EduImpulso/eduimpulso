import Login from '../components/Login';
import { useSelector } from 'react-redux';
import { Link } from 'react-router-dom';
const Home = () => {

    const login = useSelector(state => state.login.status);

    return(
        <div className="container-fluid">
            <div className="row bannerHome" id="desktop">
                <div className="container d-flex align-items-center p-5">
                <h1 className="p-4">
                    corrida hj,<br /> vitória amanhã!<br /> <h2>#ralaquerola</h2>✌✌🏿
                </h1>
                </div>
            </div>
            <div className="row contaner-fluid d-flex align-items-center justify-content-around px-4 my-4">
                <div className="divCard col-12 col-lg-3 d-flex my-2 flex-column justify-content-around shadow">
                <div className="d-flex justify-content-center">
                    <img src="./imgs/index/cardLogin.png" className="imgCard img-fluid my-2" alt="Login" />
                </div>
                <h5 className="tituloCard text-center my-auto d-flex align-items-center justify-content-center">Faça seu login ou cadastre-se aqui. <br /> Assim vc terá acesso ao nosso quiz e outras informações! </h5>
                <div className="mb-2 d-flex justify-content-around">
                    <Link to="/login" className="btnCardMini"> Login </Link>
                    <Link to="/cadastro" className="btnCardMini"> Cadastro </Link>
                </div>
                </div>
                <div className="divCard col-12 col-lg-3 d-flex my-2 flex-column justify-content-around border shadow">
                <div className="d-flex justify-content-center">
                    <img src="./imgs/index/cardContato.png" className="imgCard img-fluid my-2" alt="Contato" />
                </div>
                <h5 className="tituloCard text-center my-auto d-flex align-items-center justify-content-center">Fale conosco pra tirar dúvidas e saber mais informações! </h5>
                <div className="mb-2 d-flex justify-content-around">
                    <Link to="/contato" className="btnCard"> Contato </Link>
                </div>
                </div>
                <div className="divCard col-12 col-lg-3 d-flex my-2 flex-column justify-content-around border shadow">
                <div className="d-flex justify-content-center">
                    <img src="./imgs/index/cardNoticias.png" className="imgCard img-fluid my-2" alt="Notícias" />
                </div>
                <h5 className="tituloCard my-auto d-flex align-items-center justify-content-center">Sabe o que anda acontecendo? <br /> Veja as principais noticias relacionadas a educação em nosso pais e no mundo! </h5>
                <div className="mb-2 d-flex justify-content-around">
                    <Link to="/news" className="btnCard"> Notícias </Link>
                </div>
                </div>
            </div>
            {!login && <Login />}
        </div>
    )
}

export default Home;
