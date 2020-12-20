import React from 'react';
import { Routes, Route } from 'react-router-dom';
import Home from './pages/index';
import Cadastro from './pages/cadastro';
import Blog from './pages/blog';
import Sobre from './pages/sobre';
import NotFound from './pages/notfound';

const MainRoutes = () => {
    return (
        <Routes>
            <Route path="/" element={<Home/>}/>
            <Route path="/cadastro" element={<Cadastro/>}/>
            <Route path="/sobre" element={<Sobre/>}/>
            <Route path="/blog" element={<Blog/>}/>
            <Route path="*" element={<NotFound/>}/>
        </Routes>
    );
}

export default MainRoutes;
