import { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';
import { useDispatch } from 'react-redux';
import loginActions from '../store/actions/login';

// import eye from '../../img/eye.svg';

const Login = () => {

    const dispatch = useDispatch();
    const navigate = useNavigate();

    const [email, setEmail] = useState ('');
    const [password, setPassword] = useState ('');

    const tooglePassword = () =>{
        let input = document.getElementById('password')

        input.type === 'password' ? input.type = 'text' : input.type = 'password';
    }
    
    const Login = (e) => {
        e.preventDefault();
        let form = {email: email,
            password: password};
        const url = "https://eduimpulso-admin.herokuapp.com/login";
        fetch(url, { 
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(form)
        }).then((res) => {
            if(res.ok){
                dispatch(loginActions.Login(email))
                navigate('/perfil');
            }
            else {
                alert('Senha e/ou e-mail inválido')
            }
        })
    }

    return(
        <div className="container-fluid">
        <div className="row d-flex justify-content-center align-items-center my-4">
            <div class="col-12 col-sm-12 col-xl-6 d-flex justify-content-center my-4" id="phone">
                <img src="./imgs/index/capa-home-login.jpg" width="95%" alt="login" />
            </div>
            <div className="borderRadius cardLogin m-auto p-3 col-11 col-sm-10 col-xl-4">
            <h1 className="camposLogin text-white text-center pb-4" id="login">login</h1>
            <form onSubmit={Login}>
                <div>
                <label className="my-2 form-label text-light" htmlFor="e-mail">Digite seu e-mail</label>
                <input className="imputForm form-control has-validation" value={email} onChange={(e)=>{setEmail(e.target.value)}} type="e-mail" id="email" aria-describedby="emailHelp" placeholder="email@email.com" name="email" />
                </div>
                
                
                <div>
                <label className="my-2 form-label text-light" htmlFor="password">Digite sua senha</label>

                <div className="input-group">
                    <input className="form-control has-validation" value={password} onChange={(e)=>{setPassword(e.target.value)}} type="password" id="password" placeholder="senha" name="password" />
                    <span className="input-group-text btn" style={{background:"white",  border:"0px 5px 5px 0px"}} onClick={tooglePassword}><img className="img-fluid" style={{background:"white"}} width="25px" src="./imgs/eye.png"/></span>
                </div>

                </div>
                
                
                <Link className="linkCadastro form-text" to="/cadastro">Cadastre-se aqui!</Link>
                <button className="buttonForm btn mt-3">
                    Enviar
                </button>
            </form>
            </div>
            <div className="col-12 col-sm-12 col-xl-6 d-flex justify-content-center my-4" id="desktop">
                <img src="./imgs/index/capa-home-login.jpg" width="95%" alt="login" />
            </div>
        </div>
        <div style={{width:"100%", height: "65px"}}></div>
        </div>
        // #4CC9F0
    )
}

export default Login;
