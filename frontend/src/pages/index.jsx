import { Link } from 'react-router-dom';
import InputForm from '../components/Form/input';
import ButtonForm from '../components/Form/button';

const Home = () => {
    return(
        <>
        <div className="container-fluid" id="desktop" style={{backgroundImage: "url(./imgs/index/capa-home.jpg)", width:"100%", height: "100%", backgroundSize: "cover"}}>

            <div className="container d-flex align-items-center p-5" style={{height:"100vh"}}>

                <h1 className="p-4" style={{fontWeight: "bold", textSshadow: "2px 2px 15px black", borderRadius:"10px", backgroundColor:"rgba(255, 255, 255, 0.4)"}}>
                MIRE O OLHAR NO<br />
                SEU FUTURO!<br />
                <Link className="form-text " to="/sobre" style={{fontSize: "12px", color: "#212529"}}>Nos conheça melhor <img width="12" src="./imgs/index/seta-direita.svg"/></Link>
                </h1>
                
            </div>

        </div>
        <div className="d-flex justify-content-center align-items-center my-5">
            <div className="m-auto p-3 col-12 col-md-12 col-lg-12 col-xl-4" style={{borderRadius: "5px", backgroundColor: "#983ADB"}}>
                <h1 className="text-center pb-4" style={{color: "white"}}>LOGIN</h1>
                <form>
                    <InputForm for="e-mail" type="email" describe="emailHelp" placeholder="Digite seu e-mail">
                        Digite seu e-mail
                    </InputForm>
                    <InputForm for="password" type="password" placeholder="Digite sua senha">
                        Digite sua senha
                    </InputForm>
                    <Link className="form-text " to="/cadastro" style={{fontSize: "12px", color: "white"}}>Cadastre-se aqui!</Link>

                    <ButtonForm>Enviar</ButtonForm>
                </form>
            </div>
            <div class="col-12 col-md-12 col-lg-12 col-xl-6  d-flex justify-content-center" >
                <img src="./imgs/index/capa-home-login.jpg" width="80%" alt="login"/>
            </div>
        </div>
        </>
    )
}

export default Home;