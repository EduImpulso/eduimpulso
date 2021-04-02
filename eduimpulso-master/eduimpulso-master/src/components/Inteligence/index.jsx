import React,{ useEffect } from 'react';

import Aos from 'aos';
import 'aos/dist/aos.css';

import CartInteligence from './cartInteligence';

const Inteligence = () => {

    useEffect(()=> {
        Aos.init({duration: 1500});
    }, [])

    return (

        <div className="container-fluid">
            <div className="row">

                <div className="d-flex align-items-center justify-content-center pt-4 col-lg-12">
                    <div className="text-center">
                        <h3 className="display-5" id="topo">
                            <strong>
                                 Teoria das Múltiplas Inteligências: o que é isso? 🤔
                            </strong>
                            <div className="col-12 text-center"> 
                            <h5 className="pb-2" style={{color:"#363636"}}><br></br>Pra ficar por dentro do assunto, assista ao vídeo e leia uma matéria super interessante logo abaixo!</h5>
                            <p style={{color: "#5a5b5e", fontSize: "17px"}}>Tempo de leitura estimado: 15 minutos</p>
                            </div>
                        </h3>
                    </div>
                </div>

                <div style={{ width: "100%", display: "flex", justifyContent: "center" }}>
                    <div className="embed-responsive embed-responsive-16by9">
                        <iframe className="embed-responsive-item p-4 shadow" src="https://www.youtube.com/embed/oJ85PMYqHqg" allowFullScreen></iframe>
                    </div>
                </div>

                <div className="container-fluid" data-aos="fade-up">
                    <h1 className="text-center teoriaTitulo1" data-aos="fade-up">
                    <strong> Quais são os oito tipos de inteligência? </strong>
                    </h1>

                    <p className="text-center teoriaTitulo2">
                        Conheça os oito perfis da "Teoria das Múltiplas
                        Inteligências" de Howard Gardner e tente identificar qual é a sua!
                    </p>
                </div>
                <p className="linha mx-auto"></p>
                <div className="container text-justify px-3"> 
                    <CartInteligence
                        title="LÓGICO MATEMÁTICA"
                        link="https://super.abril.com.br/wp-content/uploads/2018/07/8-inteligencias-2.png"
                        txt="É a habilidade para desenvolver equações, resolver cálculos e resolver
                    problemas abstratos. Sua manifestação é uma das que as pessoas
                    consideram como inteligência tradicional, especialmente na escola. Ela
                    é típica de quem manda bem em contas, em lógica e em estratégia."
                        x1="quebra-cabeça, xadrez, videogame, computadores, desvendar mistérios."
                        x2="ciências, computação, direito, engenharia, matemática, medicina."
                        
                        a1="https://pt.wikipedia.org/wiki/Sonia_Guimar%C3%A3es"
                        g1="Sonia Guimarães, "     

                        a2="https://pt.wikipedia.org/wiki/Artur_Avila"
                        g2="Artur Avila, "   

                        a3="https://pt.wikipedia.org/wiki/Albert_Einstein"
                        g3="Albert Einstein, "

                        a4="https://pt.wikipedia.org/wiki/Mar%C3%ADlia_Chaves_Peixoto"
                        g4="Marília Chaves Peixoto, "

                        a5="https://pt.wikipedia.org/wiki/Steve_Wozniak"
                        g5="Steve Wozniak, "

                        a6="https://pt.wikipedia.org/wiki/Mary_Jackson"
                        g6="Mary Jackson."

                        l="https://br.psicologia-online.com/inteligencia-logico-matematica-caracteristicas-exemplos-e-atividades-222.html"
                    />

                    <CartInteligence
                        title="LINGUÍSTICA"
                        link="https://super.abril.com.br/wp-content/uploads/2018/07/8-inteligencias-3.png"
                        txt="Algumas pessoas têm muita facilidade para lidar com palavras. Elas
                    possuem um tipo de inteligência que permite analisar informações e
                    desenvolver produtos de linguagem escrita e oral, como discursos e
                    livros, sempre encontrando o melhor jeito de comunicar grandes ideias.
                    É bastante requisitada (e apreciada) na escola, já que a maioria das
                    provas e exercícios são por escrito."
                        x1="contar histórias, escrever textos, declamar poesias, fazer passatempos com palavras, ler, jogar RPG."
                        x2="editoração, educação, jornalismo, literatura, tradução."

                        a1="https://pt.wikipedia.org/wiki/Carolina_de_Jesus"
                        g1="Carolina de Jesus, "

                        a2="https://pt.wikipedia.org/wiki/M%C3%A1rio_de_Andrade"
                        g2="Mário de Andrade, "

                        a3="https://pt.wikipedia.org/wiki/Cec%C3%ADlia_Meireles"
                        g3="Cecília Meireles, "

                        a4="https://pt.wikipedia.org/wiki/William_Shakespeare"
                        g4="Shakespeare, "

                        a5="https://pt.wikipedia.org/wiki/Jorge_Amado"
                        g5="Jorge Amado, "

                        a6="https://pt.wikipedia.org/wiki/Clarice_Lispector"
                        g6="Clarice Lispector."

                        l="https://br.psicologia-online.com/inteligencia-linguistica-caracteristicas-e-atividades-para-melhora-la-223.html"
                    />

                    <CartInteligence
                        title="MUSICAL"
                        link="https://super.abril.com.br/wp-content/uploads/2018/07/8-inteligencias-4.png"
                        txt="O nome já entrega: é aquela que permite a uma pessoa produzir,
                    recordar e estabelecer sentido em diferentes padrões de som.
                    A sensibilidade musical se manifesta ao ouvir, cantar, compor e tocar
                    instrumentos."
                        x1="assobiar, cantar, fazer rimas, compor, participar de um coral, ouvir música, tocar instrumentos."
                        x2="canto, composição, crítica musical, direção musical, DJ, ensino de música, engenharia de som para filmes e peças."

                        a1="https://pt.wikipedia.org/wiki/Negra_Li"
                        g1="Negra Li, "

                        a2="https://pt.wikipedia.org/wiki/Milton_Nascimento"
                        g2="Milton Nascimento, "

                        a3="https://pt.wikipedia.org/wiki/Erykah_Badu"
                        g3="Erykah Badu, "

                        a4="https://pt.wikipedia.org/wiki/Paul_McCartney"
                        g4="Paul McCartney, "

                        a5="https://pt.wikipedia.org/wiki/Elis_Regina"
                        g5="Elis Regina, "

                        a6="https://pt.wikipedia.org/wiki/Ant%C3%B4nio_Carlos_Jobim"
                        g6="Tom Jobim."

                        l="https://br.psicologia-online.com/inteligencia-musical-o-que-e-caracteristicas-e-atividades-224.html"
                    />

                    <CartInteligence
                        title="NATURALÍSTICA"
                        link="https://super.abril.com.br/wp-content/uploads/2018/07/8-inteligencias-5.png"
                        txt="Típica daqueles que têm uma forte ligação com a natureza e uma
                    habilidade incomum para identificar e distinguir animais, plantas,
                    formações climáticas e outros elementos do mundo natural. Na escola,
                    quem tem essa inteligência bombando se dá bem em biologia e geografia."
                        x1="cuidar de plantas e jardins, fazer trilhas e caminhadas na natureza, passear com o cachorro."
                        x2="biologia, ecologia, geologia, medicina, medicina veterinária, meteorologia."

                        a1="https://pt.wikipedia.org/wiki/Inge_Lehmann"
                        g1="Inge Lehmann, "

                        a2="https://pt.wikipedia.org/wiki/Chico_Mendes"
                        g2="Chico Mendes, "

                        a3="https://pt.wikipedia.org/wiki/Bertha_Lutz"
                        g3="Bertha Lutz, "

                        a4="https://pt.wikipedia.org/wiki/Oswaldo_Cruz"
                        g4="Oswaldo Cruz, "

                        a5="https://pt.wikipedia.org/wiki/Johanna_D%C3%B6bereiner"
                        g5="Johanna Döbereiner, "

                        a6="https://pt.wikipedia.org/wiki/Charles_Darwin"
                        g6="Charles Darwin."

                        l="https://br.psicologia-online.com/inteligencia-naturalista-o-que-e-exemplos-e-atividades-297.html"
                    />

                    <CartInteligence
                        title="CORPORAL-CINESTÉSICA"
                        link="https://super.abril.com.br/wp-content/uploads/2018/07/8-inteligencias-6.png"
                        txt="É a capacidade de usar o próprio corpo (e seus movimentos) para
                    solucionar problemas ou criar produtos. É a mais requisitada, por
                    exemplo, nos craques de futebol, nos ginastas, nos bailarinos e nos
                    artistas em geral."
                        x1="esportes, dança, mágica, teatro, mímica, malabarismo, massagem."
                        x2="coreografia, dança, artes dramáticas, artes plásticas, educação física, esportes."

                        a1="https://pt.wikipedia.org/wiki/Marta_(futebolista)"
                        g1="Marta, "

                        a2="https://pt.wikipedia.org/wiki/Michael_Jordan"
                        g2="Michael Jordan, "

                        a3="https://pt.wikipedia.org/wiki/Daiane_dos_Santos"
                        g3="Daiane dos Santos, "

                        a4="https://pt.wikipedia.org/wiki/Michael_Phelps"
                        g4="Michael Phelps, "

                        a5="https://pt.wikipedia.org/wiki/Ronda_Rousey"
                        g5="Ronda Rousey, "

                        a6="https://pt.wikipedia.org/wiki/Lionel_Messi"
                        g6="Lionel Messi."

                        l="https://br.psicologia-online.com/inteligencia-corporal-cinestesica-o-que-e-caracteristicas-e-como-melhora-la-221.html"
                    />

                    <CartInteligence
                        title="ESPACIAL"
                        link="https://super.abril.com.br/wp-content/uploads/2018/07/8-inteligencias-7.png"
                        txt="Tem gente que não sabe se orientar num mapa, não consegue estimar
                    medidas e não é capaz de montar um bom look. Por outro lado, os
                    mestres dessa inteligência têm uma habilidade extra para reconhecer o
                    espaço e pensar em termos de cores, formas e medidas, manipulando
                    tanto as grandes quanto as pequenas imagens."
                        x1="aeromodelismo, artesanato, desenho, fotografia, pintura, escultura."
                        x2="arquitetura, artes plásticas, aviação, desenho industrial, design de interiores, design gráfico, engenharia."

                        a1="https://pt.wikipedia.org/wiki/Lina_Bo_Bardi"
                        g1="Lina Bo Bardi, "

                        a2="https://pt.wikipedia.org/wiki/Oscar_Niemeyer"
                        g2="Oscar Niemeyer, " 

                        a3="https://pt.wikipedia.org/wiki/S%C3%B4nia_Gomes"
                        g3="Sônia Gomes, " 

                        a4="https://pt.wikipedia.org/wiki/Santos_Dumont"
                        g4="Santos Dumont, " 

                        a5="https://pt.wikipedia.org/wiki/Ada_Rogato"
                        g5="Ada Rogato, "

                        a6="https://pt.wikipedia.org/wiki/Os_G%C3%AAmeos"
                        g6="Os Gêmeos. " 

                        l="https://br.psicologia-online.com/inteligencia-espacial-visual-caracteristicas-exemplos-e-atividades-269.html"
                    />

                    <CartInteligence
                        title="INTERPESSOAL"
                        link="https://super.abril.com.br/wp-content/uploads/2018/07/8-inteligencias-8.png"
                        txt="Sabe aquele amigo que é o melhor ombro na hora que você precisa
                    chorar? Que entende fácil tudo que você está sentindo, sabe te
                    consolar e sabe propor soluções para os problemas? Ele é bem
                    desenvolvido nesse tipo de inteligência: a que reconhece e trabalha os
                    desejos e humores dos outros. Ela é útil na hora de estudar em grupo,
                    por exemplo, ou de gerenciar uma equipe."
                        x1="trabalho voluntário, esportes em grupo, conversas."
                        x2="jornalismo, marketing, política, psicologia, recursos humanos, relações públicas, teologia, vendas."

                        a1="https://pt.wikipedia.org/wiki/Madam_C._J._Walker"
                        g1="Madam C. J. Walker, "

                        a2="https://pt.wikipedia.org/wiki/Winston_Churchill"
                        g2="Winston Churchill, "

                        a3="https://pt.wikipedia.org/wiki/Zilda_Arns"
                        g3="Zilda Arns, "

                        a4="https://pt.wikipedia.org/wiki/Papa_Francisco"
                        g4="Papa Francisco, "

                        a5="https://pt.wikipedia.org/wiki/Oprah_Winfrey"
                        g5="Oprah Winfrey, "

                        a6="https://pt.wikipedia.org/wiki/Heraldo_Pereira"
                        g6="Heraldo Pereira."

                        l="https://br.psicologia-online.com/inteligencia-interpessoal-o-que-e-exemplos-e-atividades-209.html"
                    />

                    <CartInteligence
                        title="INTRAPESSOAL"
                        link="https://super.abril.com.br/wp-content/uploads/2018/07/8-inteligencias-9.png"
                        txt="É o inverso da interpessoal: o indivíduo usa a inteligência para se
                    autoconhecer. São as pessoas com grande grau de autonomia, capazes de
                    reconhecer suas próprias intenções, motivações e opiniões. Essa
                    autoanálise pode colocá-las em boa posição para refletir sobre a
                    condição humana, seja por meio de textos filosóficos, seja por meio de
                    grandes romances."
                        x1="escrever um diário, meditar, planejar seus objetivos de vida."
                        x2="filosofia, literatura, psicologia, teologia."

                        a1="https://pt.wikipedia.org/wiki/Nise_da_Silveira"
                        g1="Nise da Silveira, "

                        a2="https://pt.wikipedia.org/wiki/Machado_de_Assis"
                        g2="Machado de Assis, "

                        a3="https://pt.wikipedia.org/wiki/Anna_Freud"
                        g3="Anna Freud, "

                        a4="https://pt.wikipedia.org/wiki/Juliano_Moreira"
                        g4="Juliano Moreira, "

                        a5="https://pt.wikipedia.org/wiki/Melanie_Klein"
                        g5="Melanie Klein, "

                        a6="https://pt.wikipedia.org/wiki/Howard_Gardner"
                        g6="Howard Gardner."

                        l="https://br.psicologia-online.com/inteligencia-intrapessoal-o-que-e-exemplos-e-atividades-para-melhora-la-208.html"
                    />

                </div>


                <div className="container text-justify px-5">
                    <p><strong>UMA PAUSA PARA PENSAR</strong></p>
                    <p>
                        <strong> Pense nas perguntas abaixo</strong> e compare com as
                        descrições dos oito tipos de inteligência para ver qual delas tem
                        mais a ver com você:
                    </p>

                    <div className="d-flex text-justify">
                        <ul>
                            <li>
                                Que tipos de atividades mais atraem sua atenção? E qual é
                            <span className="textoDestaque">seu</span> nível de aptidão para elas?
                        </li>
                            <li>Em quais matérias da escola você se sai melhor?</li>
                            <li>
                                Que métodos e ferramentas você usa para se expressar ou resolver
                                problemas?
                        </li>
                            <li>
                                Quando memoriza uma cena, o que nela chama mais sua atenção?
                        </li>
                            <li>Que carreira você pensa em seguir?</li>
                        </ul>
                    </div>
                    <h6 className="teoriaFonte">
                        <em>
                            Fonte: <br />
                        Adaptado do Portal da Revista SuperInteressante, fevereiro de 2020 <br />
                        Textos por Julia Moióli <br />
                        Ilustrações por Bruno Miranda <br />
                        </em>
                    </h6>
                </div>


                <div className="d-flex align-items-center justify-content-center col-12 p-4">
                    <a className="buttonForm btn col-12 col-lg-4" href="#topo">
                        Voltar ao topo
                    </a>
                </div>
            </div>

        </div>
    )
};

export default Inteligence;
