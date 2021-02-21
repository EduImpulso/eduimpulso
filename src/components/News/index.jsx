import React from 'react';

import CartNews from './cartNews';
const News = () => {
    return (
        <>
            <div className="mt-4">
                <div className="col-12 text-center">
                    <h3 className="pb-3"><strong>Notícias 📰</strong></h3>
                </div>
            </div>


            <div id="carouselExampleFade" className="desktop carousel slide carousel-fade border" data-ride="carousel">
                <div className="carousel-inner">
                    <div className="carousel-item active shadow">
                        <img className="d-block w-100" src="./imgs/blog/escola-australiana.png" alt="Primeiro Slide" />
                        <div className="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div className="carousel-item shadow">
                        <img className="d-block w-100" src="./imgs/blog/minecraft.png" alt="Segundo Slide" />
                        <div className="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div className="carousel-item shadow">
                        <img className="d-block w-100" src="./imgs/blog/piano.png" alt="Terceiro Slide" />
                        <div className="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <a className="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span className="sr-only">Anterior</span>
                </a>
                <a className="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span className="carousel-control-next-icon" aria-hidden="true"></span>
                    <span className="sr-only">Próximo</span>
                </a>
            </div>

            <div className="container-fluid">
                <div className="row d-flex justify-content-center align-items-center">
                <CartNews src="./imgs/blog/busao.png" h6='Santo André define regras para gratuidade de estudantes no transporte público'href="https://www2.santoandre.sp.gov.br/index.php/noticias/item/9257-santo-andre-define-regras-para-gratuidade-de-estudantes-no-transporte-publico"/>
                <CartNews src="./imgs/blog/usp.png" h6='USP: Veja como solicitar auxílios para estudantes'href="http://www.puspsc.usp.br/bolsas-e-auxilios/"/>
                <CartNews src='./imgs/blog/professor_indiano.png' h6='Professor indiano vence Nobel da Educação e divide U$ 1 milhão com colegas' href='https://www.sonoticiaboa.com.br/2020/12/08/professor-indiano-vence-nobel-educacao-e-divide-1-milhao-colegas/'/>
                <CartNews src="./imgs/blog/jovem_down01.png" alt="" h6='Jovem com Down é a 1ª professora de Educação Física do Sul' href='https://www.sonoticiaboa.com.br/2018/08/15/jovem-com-down-1a-professora-educacao-fisica-sul/'/>
                <CartNews src='./imgs/blog/empreendedorismo.png' h6='Universidades precisam estimular estudantes a inovar' href='https://www.nsctotal.com.br/noticias/na-era-do-empreendedorismo-universidades-precisam-estimular-estudantes-a-inovar'/>
                <CartNews src='./imgs/blog/bolsistas.png' h6='MEC abre inscrições para seleção de bolsistas ProUni'href="https://agenciabrasil.ebc.com.br/educacao/noticia/2021-01/mec-abre-inscricoes-para-selecao-de-bolsistas-do-prouni"/>
                <CartNews src="./imgs/blog/aulas-suspensas-868x644.png" h6='Aprendizagem retrocede até 4 anos com suspensão de aulas presenciais'href="https://www.poder360.com.br/educacao/aprendizagem-pode-retroceder-ate-4-anos-sem-aulas-presenciais-diz-estudo/#:~:text=Pesquisa%20da%20FGV%20(Funda%C3%A7%C3%A3o%20Get%C3%BAlio,no%20acesso%20ao%20ensino%20remoto."/>
                <CartNews src="./imgs/blog/professora-nobel-educaçao.png" h6='Professora brasileira sobe para a final do “Nobel de Educação”'href="https://www.sonoticiaboa.com.br/2019/03/06/professora-brasileira-sobe-final-nobel-educacao/"/>
                </div>

            </div>
        </>
    );
}

export default News;