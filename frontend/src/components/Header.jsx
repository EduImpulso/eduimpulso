import React from 'react';
import logo from '../assets/logo_eduimpulso.svg';
import { Link } from 'react-router-dom';

const Header = () => {
        return (
            <>
             <header>
                    <nav className="navbar navbar-expand-lg navbar-light bg-purple">
                        <Link className="navbar-brand" to="/">
                            <img
                            src={logo}
                            height="50"
                            className="d-inline-block align-top"
                            alt="Soccershop"
                            loading="lazy"
                            />
                        </Link>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div className="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <ul className="navbar-nav">
                                <li className="nav-item">
                                    <Link className="nav-link text-white" to="/sobre">Sobre</Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link text-white" to="/blog">Blog</Link>
                                </li>
                                <li className="nav-item">
                                    <Link className="nav-link text-white" to="/cadastro">Cadastro</Link>
                                </li>
                            </ul>
                        </div>
                    </nav>
             </header>
            </>
        );
}

export default Header;
