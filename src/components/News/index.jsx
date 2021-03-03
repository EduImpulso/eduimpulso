import React from 'react';

import CartNews from './cartNews';
const News = () => {
    return (
        <>
            <div className="mt-4">
                <div className="col-12 text-center">
                    <h3 className="pb-3"><strong>Notícias 📰</strong></h3>
                </div>
                <div className="col-12 text-center">
                    <h5 className="pb-3" style={{color:"#363636"}}>Não é que o mundo esteja pior, você que não fica sabendo das coisas boas que acontecem!</h5>
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
                <CartNews src="./imgs/blog/menina-siria.png" h6='Menina síria vence campeonato mundial de matemática'href="https://razoesparaacreditar.com/menina-siria-vence-campeonato-mundial-matematica/"/>
                <CartNews src='./imgs/blog/professor_indiano.png' h6='Professor indiano vence Nobel da Educação e divide U$ 1 milhão com colegas' href='https://www.sonoticiaboa.com.br/2020/12/08/professor-indiano-vence-nobel-educacao-e-divide-1-milhao-colegas/'/>
                <CartNews src="./imgs/blog/jovem_down01.png" alt="" h6='Jovem com Down é a 1ª professora de Educação Física do Sul' href='https://www.sonoticiaboa.com.br/2018/08/15/jovem-com-down-1a-professora-educacao-fisica-sul/'/>
                <CartNews src='./imgs/blog/empreendedorismo.png' h6='Universidades precisam estimular estudantes a inovar' href='https://www.nsctotal.com.br/noticias/na-era-do-empreendedorismo-universidades-precisam-estimular-estudantes-a-inovar'/>
                <CartNews src='./imgs/blog/prof-tubarao.png' h6='Professora se veste de tubarão para ensinar matemática' href="https://razoesparaacreditar.com/professora-tubarao-ensinar-matematica/"/>
                <CartNews src="./imgs/blog/bengala.png" h6='Estudantes de Santos criam sistema sonoro para ajudar deficientes visuais' href="https://razoesparaacreditar.com/estudantes-criam-sistema-sonoro-deficientes-visuais/"/>
                <CartNews src="./imgs/blog/professora-nobel-educaçao.png" h6='Professora brasileira sobe para a final do “Nobel de Educação”'href="https://www.sonoticiaboa.com.br/2019/03/06/professora-brasileira-sobe-final-nobel-educacao/"/>
                <CartNews src="./imgs/blog/prof-santos.png" h6='Filha homenageia mãe faxineira usando seu uniforme durante formatura' href="https://razoesparaacreditar.com/filha-homenageia-mae-faxineira-formatura/"/>
                </div>

            </div>
        </>
    );
}

export default News;