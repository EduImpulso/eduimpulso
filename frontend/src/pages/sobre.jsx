import CardLeft from '../components/aboutItem/CardLeft';
import CardRight from '../components/aboutItem/CardRight';

const Sobre = () => {
    return(
        <>
        <main className="row">
            <div className="d-flex align-items-center justify-content-center py-4 col-lg-12">
                <div className="text-center">
                    <h1 className="display-4" id="topo">QUEM SOMOS</h1>
                </div>
            </div>
            
            {/* PARAGRAFO 1 */}
            <CardLeft url="url(./imgs/quem_somos/escola_1paragrafo.jpg)">
                EduImpulso é plataforma de orientação profissional, que tem como objetivo orientar os jovens e pessoas que querem descobrir qual carreira seguir.
            </CardLeft>

            {/*PARAGRAFO 2*/}
            <CardRight url="url(./imgs/quem_somos/multiplas_inteligencias_2paragrafo.jpg)">
                Trabalhamos com o conceito de múltiplas inteligências do psicólogo cognitivo e educacional Howard Gardner, pois acreditamos na importância da diversidade de saberes. O mercado de trabalho está se atualizando e reconhecendo cada vez mais os diferentes tipos de inteligência.
            </CardRight>

            {/* PARAGRAFO 3*/}
            <CardLeft url="url(./imgs/quem_somos/universidade_3paragrafo.jpg)">
                Aqui, você encontra-rá informações de contato com as universidades, notas de corte, vestibulares, entre outros fatores, que poderão te direcionar para o suas metas e objetivos.
            </CardLeft>

            {/*PARAGRAFO 4*/}
            <CardRight url="url(./imgs/quem_somos/carreiras_4paragrafo.jpg)">
                Também trazemos carreiras em expansão, novas áreas e quais estão se tornando obsoletas. Mostrando, dessa forma, o que pode ser mais vantajoso para cada indivíduo.
            </CardRight>

            {/* PARAGRAFO 5*/}
            <CardLeft url="url(./imgs/quem_somos/mudança_5paragrafo.jpg)">
                A missão da nossa plataforma é incluir jovens no ensino superior e ajudar aqueles que estão mudando de carreira.<br /> Queremos uma sociedade com mais acesso a educação!
            </CardLeft>

            {/* VIDEO */}
            <div className="d-flex align-items-center justify-content-center pt-4 col-lg-12">
                <div className="text-center">
                    <h1 className="display-4">INSTITUCIONAL</h1>
                </div>
            </div>
            <div className="d-flex align-items-center justify-content-center col-lg-12">
                <div className="embed-responsive embed-responsive-16by9 my-4 mx-auto shadow d-flex justify-content-center align-content-center" style={{width: "80%"}}>
                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/UvKwbgv-kmo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            
            <div className="d-flex align-items-center justify-content-center col-12 p-4">
                <a className="btn btn-dark" href='#topo'>Voltar ao topo</a>
            </div>
        </main>
        </>
    )
}

export default Sobre;