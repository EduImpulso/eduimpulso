
import { useState } from 'react';
import { Link, useNavigate } from 'react-router-dom';

const Register = () => {

    const navigate = useNavigate();

    const [name, setName] = useState ('');
    const [username, setUsername] = useState ('');
    const [email, setEmail] = useState ('');
    const [password1, setPassword1] = useState ('');
    const [password2, setPassword2] = useState ('');

    const Register = (e) => {
        e.preventDefault();
        if(password1 === password2){
            const password = password1
            if(password.length >= 5){
                if(name.length > 1 && username.length > 1 ){
                    let form = {name: name,
                        username: username,
                        email: email,
                        password: password
                        };
                    const url = "https://eduimpulso-admin.herokuapp.com/user";
                    fetch(url, { 
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify(form)
                    }).then((res) => {
                        if(res.status === 406){
                            alert('Email já cadastrado!')
                            return
                        }
                        alert('Cadastro feito com sucesso')
                        navigate('/login')
                    })
                } else {
                    alert('O nome e username devem ter no mínimo três caracteres')
                }
            } else {
                alert('A senha precisa ter no mínimo seis caracteres')
            }
        } else {
            alert('As senhas precisam ser iguais')
        }
    }

    return(
        <div className="container-fluid d-flex justify-content-center align-items-center">
            <div className="container-fluid row mb-5">
            <div className="form m-auto p-4 my-4 col-12 col-md-12 col-lg-12 col-xl-5">
                <form onSubmit={Register}>
                <div className="form-group">
                    <label className="my-2 form-label" htmlFor="name" style={{color: 'white'}}>Nome completo</label>
                    <input className="form-control has-validation" value={name} onChange={(e) =>setName(e.target.value)}  id="name" placeholder="Nome Completo" name="name" />
                </div>
                <div className="form-group">
                    <label className="my-2 form-label" htmlFor="username" style={{color: 'white'}}>Nome de usuário</label>
                    <input className="form-control has-validation" value={username} onChange={(e) =>setUsername(e.target.value)} id="username" placeholder="Informe seu usuário" name="usuário" />
                </div>

                
                <div className="form-group">
                    <label className="my-2 form-label" htmlFor="email" style={{color: 'white'}}>Informe seu e-mail</label>
                    <input className="form-control has-validation" value={email} onChange={(e) =>setEmail(e.target.value)} type="e-mail" id="email" placeholder="Digite seu e-mail" name="email" />
                </div>
                <div className="form-group">
                    <label className="my-2 form-label" htmlFor="password1" style={{color: 'white'}}>Digite uma senha</label>
                    <input className="form-control has-validation" value={password1} onChange={(e) =>setPassword1(e.target.value)} type="password" id="password1" placeholder="Digite uma senha" name="password1" />
                </div>
                <div className="form-group">
                    <label className="my-2 form-label" htmlFor="password2" style={{color: 'white'}}>Repita a senha</label>
                    <input className="form-control has-validation" value={password2} onChange={(e) =>setPassword2(e.target.value)} type="password" id="password2" placeholder="Confirme a senha" name="password2" />
                </div>
                <button className="buttonForm btn mt-3">
                    Cadastre-se
                </button>
                <Link className="linkCadastro form-text" to="/login">Já possui o cadastro? Clique aqui!</Link>
                </form>
            </div>
            </div>
        </div>
    )
}

export default Register;
