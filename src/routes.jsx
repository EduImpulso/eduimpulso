import { Routes, Route } from 'react-router-dom';
import { useSelector } from 'react-redux';
import Home from './views/index';
import Login from './components/Login';
import Cadastro from './views/cadastro';
import Perfil from './views/perfil';
import Contato from './views/contato';
import News from './views/news';
import Inteligences from './views/inteligencia';
import Privacity from './views/privacity';
import Quiz from './views/quiz';
import Curso from './views/cursinhos';
import Carreira from './views/carreiras';

const MainRoutes = () => {

    const login = useSelector(state => state.login.status);

    return (
        <Routes>
            <Route path="/" element={<Home/>}/>
            <Route path="/login" element={<Login/>}/>
            <Route path="/inteligencia" element={<Inteligences/>}/>
            <Route path="/cadastro" element={<Cadastro/>}/>
            <Route path ="/cursinhos" element={<Curso/>}/>
            {!login ? 
                <Route path="/carreiras" element={<Login/>}/> :
                <Route path ="/carreiras" element ={<Carreira/>}/> 
            }       
            {!login ? 
                <Route path="/perfil" element={<Login/>}/> :
                <Route path="/perfil" element={<Perfil/>}/>
            }
            <Route path="/contato" element={<Contato/>}/>
            <Route path="/news" element={<News/>}/>
            <Route path="/privacity" element={<Privacity/>}/>
            {!login ? 
                <Route path="/quiz" element={<Login/>}/> :
                <Route path="/quiz" element={<Quiz/>}/>
            }
            <Route path="*" element={<Home/>}/>
        </Routes>
        )
}

export default MainRoutes
