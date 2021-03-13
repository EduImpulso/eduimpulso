import { Link } from 'react-router-dom';
import { useSelector, useDispatch } from 'react-redux';
import loginActions from '../store/actions/login';

const Header = () => {

  const login = useSelector(state => state.login.status);
  const dispatch = useDispatch();

  const Logout = () => {
    dispatch(loginActions.Logout())
  }

  return (
    <>
    <header style={{position:"fixed", minWidth:"100%", zIndex:"10"}}>
      
      <nav className="menuBar navbar navbar-expand-lg bg-purple p-3">
        <Link className="navbar-brand" to="/">
          <img
            src="./imgs/Icones/logo_eduimpulso.svg"
            height={40}
            alt="EduImpulso"
            loading="lazy"
          />
        </Link>

        <div className="btn-group" id="phone">
          <button
            type="button"
            className
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            style={{
              backgroundColor: "transparent",
              border: "none",
              width: 30,
            }}
          >
            <img className="img-fluid" src="./imgs/Icones/btn-menu.svg" alt="Botão" />
          </button>
          <div
            className="dropdown-menu dropdown-menu-right"
            style={{ width: 280 }}
          >
            <button className="dropdown-item text-center border text-secondary" type="button">
            <Link className="text-secondary h6" to="/quiz">QUIZ</Link>
            </button>
            <button className="dropdown-item text-center border text-secondary" type="button">
            <Link className="text-secondary h6" to="/carreiras">Carreiras</Link>
            </button>
            <button className="dropdown-item text-center border text-secondary" type="button">
            <Link className="text-secondary h6" to="/inteligencia">Tipos de Inteligências</Link>
            </button>

            <button className="dropdown-item text-center border text-secondary" type="button">
            <Link className="text-secondary h6" to="/inteligencia">Cursinhos Preparatórios</Link>
            </button>
            <button className="dropdown-item text-center border text-secondary" type="button">
            <Link className="text-secondary h6" to="/news">Notícias</Link>
            
            </button>

            
            <button className="dropdown-item text-center border text-secondary" type="button">
            <Link className="text-secondary h6" to="/contato">Fale Conosco</Link>
            </button>
            <button className="dropdown-item text-center border text-secondary" type="button">
            <Link className="text-secondary h6" to="/privacity">Política de Privacidade</Link>
            </button>
            <button className="dropdown-item text-center border text-secondary" type="button">
            <Link className="text-secondary h6" to="/cadastro">Cadastre-se</Link>
            </button>
            <button
              className="dropdown-item text-center border"
              style={{ backgroundColor: "#9D40E0" }}
              type="button"
            >
              <Link className="text-light h6" to="/login">Acessar</Link>
            </button>
          </div>
        </div>
        <div
          className="collapse navbar-collapse justify-content-end "
          id="navbarNav"
        >
          <ul className="divItensMenu d-flex justify-content-around navbar-nav ">
            <li className="nav-item ">
              <Link
                className="tamanhoFonteMenu nav-link text-white"
                to="/quiz"
              >
                QUIZ
              </Link>
            </li>
            <li className="nav-item ">
              <a
                className="tamanhoFonteMenu nav-link text-white"
                href="/carreiras"
              >
                Carreiras
              </a>
            </li>
            <li className="nav-item ">
              <Link
                className="tamanhoFonteMenu nav-link text-white"
                to="/inteligencia"
              >
                Múltiplas Inteligências
              </Link>
            </li>
            <li className="nav-item ">
              <div className="btn-group">
                <button
                  type="button buttonVejaMais"
                  className="btn dropdown-toggle buttonVejaMais"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Veja mais
                </button>
                <div className="dropdown-menu dropdown-menu-right">
                  <a
                    href="/cursinhos"
                    className="btnLinkVejaMais dropdown-item"
                  >
                    Cursinhos
                  </a>
                  <Link
                    to="/news"
                    className="btnLinkVejaMais dropdown-item"
                  >
                    Notícias
                  </Link>
                  <Link
                    to="/privacity"
                    className="btnLinkVejaMais dropdown-item"
                  >
                    Política de Privacidade
                  </Link>
                  {login && <Link
                    to="/perfil"
                    className="btnLinkVejaMais dropdown-item"
                  >
                    Perfil
                  </Link>}
                </div>
              </div>
            </li>
            <li className="nav-item">
              <Link
                className="tamanhoFonteMenu nav-link text-white"
                to="/contato"
              >
                Fale conosco
              </Link>
            </li>
            {!login ? 
              (<li className="nav-item mx-1 d-flex align-items-center ">
                <Link
                  to="/login"
                  className="tamanhoFonteMenu menuButton btn text-dark btn-light d-flex align-items-center"
                  type="submit "
                >
                  Acessar
                </Link>
              </li>) :
              (<li class="nav-item mx-1 d-flex align-items-center ">
                <button onClick={Logout} class="tamanhoFonteMenu menuButton btn text-dark btn-warning d-flex align-items-center">Sair</button>
                </li>)
            }  
          </ul>
        </div>
      </nav>
    </header>
    <div style={{Width:"100%", height:"12vh", backgroundColor:"red"}}></div>
    </>
  );
}

export default Header;
