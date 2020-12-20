import InputForm from '../components/Form/input';
import ButtonForm from '../components/Form/button';

const Cadastro = () => {
    return(
        <>
        <div className="container-fluid">
            <div className="col-12 text-center my-4">
                <h1 className="display-4"><img src="./imgs/bannerCadastro.svg" width="100" className="img-fluid"/>Cadastre-se</h1>
            </div>
        </div>
        <div className="container-fluid d-flex justify-content-center align-items-center">


            <div className="container-fluid row mb-5">


                

                <div className="m-auto p-4 my-4 col-12 col-md-12 col-lg-12 col-xl-5" style={{borderRadius: "10px", boxShadow: "2px 2px 2px black", backgroundColor: "#8b1cdad7"}}>

                    <form>
                        <InputForm for="name" type="text" placeholder="Nome completo">
                            Nome completo
                        </InputForm>

                        <InputForm for="username" type="text" placeholder="Digite um nome de usuário">
                            Username
                        </InputForm>

                        <InputForm for="email" type="e-mail" placeholder="Informe seu e-mail">
                            E-mail
                        </InputForm>

                        <InputForm for="password1" type="password" placeholder="Digite uma senha">
                            Digite uma senha
                        </InputForm>

                        <InputForm for="password2" type="password" placeholder="Confirme a senha">
                            Repita a senha
                        </InputForm>

                        <InputForm for="born" type="date">
                            Data de nascimento
                        </InputForm>

                        <InputForm for="adress" type="text" placeholder="Informe seu endereço">
                            Endereço
                        </InputForm>

                        <ButtonForm>Cadastre-se</ButtonForm>
                        <a class="form-text text-white" style={{fontFamily: "'Rubik', sans-serif", fontSize: "12px"}}>Já possui o cadastro? Realize o login</a>
                    </form>
                </div>

            </div>
        </div>
        </>
    )
}

export default Cadastro;