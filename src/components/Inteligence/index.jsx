import React from 'react';

import CartInteligence from './cartInteligence';

const Inteligence = () => {
    return (

        <div className="container-fluid">
            <div className="row">

                <div className="d-flex align-items-center justify-content-center py-4 col-lg-12">
                    <div className="text-center">
                        <h3 className="display-5" id="topo">
                            <strong>
                                🧐 Teoria das Múltiplas Inteligências: o que é isso?
                            </strong>
                        </h3>
                    </div>
                </div>

                <div style={{width:"100%", display: "flex", justifyContent: "center"}}>
                    <div className="embed-responsive embed-responsive-16by9">
                        <iframe className="embed-responsive-item p-4 shadow" src="https://www.youtube.com/embed/oJ85PMYqHqg" allowfullscreen></iframe>
                    </div>

                </div>


                <div className="container-fluid">
                    <h1 className="text-center teoriaTitulo1">
                        <strong> Quais são os oito tipos de inteligência? </strong>
                    </h1>

                    <p className="text-center teoriaTitulo2">
                        Conheça os oito perfis definidos pela Teoria das Múltiplas
                        Inteligências e aprenda a identificar qual é a sua!
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
                    a1="https://pt.wikipedia.org/wiki/Albert_Einstein"
                    g1="Albert Einstein, "
                    a2="https://pt.wikipedia.org/wiki/Isaac_Newton"
                    g2="Isaac Newton, "
                    a3="https://pt.wikipedia.org/wiki/Stephen_Hawking"
                    g3="Stephen Hawkin, "
                    a4="https://pt.wikipedia.org/wiki/Mark_Zuckerberg"
                    g4="Mark Zuckerberg."
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
                    a1="https://pt.wikipedia.org/wiki/Cec%C3%ADlia_Meireles"
                    g1="Cecília Meirelles, "
                    a2="https://pt.wikipedia.org/wiki/Gabriel_Garc%C3%ADa_M%C3%A1rquez"
                    g2="Gabriel García Marquez, "
                    a3="https://pt.wikipedia.org/wiki/William_Shakespeare"
                    g3="William Shakespeare, "
                    a4="https://pt.wikipedia.org/wiki/Tom_Wolfe"
                    g4="Tom Wolfe."
                />

                <CartInteligence
                    title="MUSICAL" 
                    link="https://super.abril.com.br/wp-content/uploads/2018/07/8-inteligencias-4.png" 
                    txt="O nome já entrega: é aquela que permite a uma pessoa produzir,
                    recordar e estabelecer sentido em diferentes padrões de som. <br/>
                    A sensibilidade musical se manifesta ao ouvir, cantar, compor e tocar
                    instrumentos."
                    x1="assobiar, cantar, fazer rimas, compor, participar de um coral, ouvir música, tocar instrumentos."
                    x2="canto, composição, crítica musical, direção musical, DJ, ensino de música, engenharia de som para filmes e peças."
                    a1="https://pt.wikipedia.org/wiki/Ludwig_van_Beethoven"
                    g1="Ludwig van Beethoven, "
                    a2="https://pt.wikipedia.org/wiki/Ant%C3%B4nio_Carlos_Jobim"
                    g2="Tom Jobim, "
                    a3="https://pt.wikipedia.org/wiki/Wolfgang_Amadeus_Mozart"
                    g3="Wolfgang Amadeus Mozart. "
                    a4=""
                    g4=""
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
                    a1="https://pt.wikipedia.org/wiki/Charles_Darwin"
                    g1="Charles Darwin, "
                    a2="https://pt.wikipedia.org/wiki/Alexander_von_Humbold"
                    g2="Alexander von Humboldt, "
                    a3="https://pt.wikipedia.org/wiki/Chico_Mendes"
                    g3="Chico Mendes, "
                    a4="https://pt.wikipedia.org/wiki/Aziz_Ab%27Saber"
                    g4="Aziz Ab’Saber."
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
                    a1="https://pt.wikipedia.org/wiki/Lionel_Messi"
                    g1="Lionel Messi, "
                    a2="https://pt.wikipedia.org/wiki/Marta_(futebolista)"
                    g2="Marta, "
                    a3="https://pt.wikipedia.org/wiki/Meryl_Streep"
                    g3="Meryl Streep, "
                    a4="https://pt.wikipedia.org/wiki/Michael_Phelps"
                    g4="Michael Phelps."
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
                    a1="https://pt.wikipedia.org/wiki/Coco_Chanel"
                    g1="Coco Chanel, "
                    a2="https://pt.wikipedia.org/wiki/Oscar_Niemeyer"
                    g2="Oscar Niemeyer, "
                    a3="https://pt.wikipedia.org/wiki/Pablo_Picasso"
                    g3="Pablo Picasso, "
                    a4="https://pt.wikipedia.org/wiki/Santos_Dumont"
                    g4="Santos Dumont."
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
                    a1="https://pt.wikipedia.org/wiki/Winston_Churchill"
                    g1="Winston Churchill, "
                    a2="https://pt.wikipedia.org/wiki/Mahatma_Gandhi"
                    g2="Mahatma Gandhi, "
                    a3="https://pt.wikipedia.org/wiki/Mar%C3%ADlia_Gabriela"
                    g3="Marília Gabriela, "
                    a4="https://pt.wikipedia.org/wiki/Papa_Francisco"
                    g4="Papa Francisco."
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
                    a1="https://pt.wikipedia.org/wiki/Ernest_Hemingway"
                    g1="Ernest Hemingway, "
                    a2="https://pt.wikipedia.org/wiki/Machado_de_Assis"
                    g2="Machado de Assis, "
                    a3="https://pt.wikipedia.org/wiki/Friedrich_Nietzsche"
                    g3="Friedrich Nietzsche, "
                    a4="https://pt.wikipedia.org/wiki/Simone_de_Beauvoir"
                    g4="Simone de Beauvoir."
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
                    a1="https://pt.wikipedia.org/wiki/Ernest_Hemingway"
                    g1="Ernest Hemingway, "
                    a2="https://pt.wikipedia.org/wiki/Machado_de_Assis"
                    g2="Machado de Assis, "
                    a3="https://pt.wikipedia.org/wiki/Friedrich_Nietzsche"
                    g3="Friedrich Nietzsche, "
                    a4="https://pt.wikipedia.org/wiki/Simone_de_Beauvoir"
                    g4="Simone de Beauvoir."
                />
                </div>
            

                <div className="container text-justify px-5">
                    <p>
                        <strong>TOQUE DE MIDAS</strong>
                    </p>
                    <p>
                        Gardner não acredita em testes, mas alguns seguidores da Teoria da
                        Inteligências Múltiplas já tentaram sistematizá-las (e
                        transformá-las numa forma de ganhar dinheiro). O mais famoso é o
                        Midas, criado pelo consultor Branton Shearer, que pode ser utilizado
                        como um <strong>teste vocacional.</strong> O próprio Gardner
                        reconhece que ele mede, sim, habilidades em certas áreas &#8211; mas
                        não todas. E ainda depende da pessoa se conhecer bem (ou seja, ter
                        alta inteligência interpessoal!)
                    </p>
                    <p><strong>UMA PAUSA PARA PENSAR</strong></p>
                    <p>
                        Testes podem não medir com precisão as capacidades de cada um, mas
                        um pouco de autorreflexão não faz mal a ninguém.
                        <strong>Pense nas perguntas abaixo</strong> e compare com as
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
                        Fonte: <br/>
                        Portal da Revista SuperInteressante, fevereiro de 2020 <br/>
                        Textos por Julia Moióli <br/>
                        Ilustrações por Bruno Miranda <br/>
                        </em>
                    </h6>
                </div>


                <div className="d-flex align-items-center justify-content-center col-12 p-4">
                    <a className="btnTopo button-btnTopo col-12 col-lg-4" href="#topo">
                        Voltar ao topo
                    </a>
                </div>
            </div>
                    
        </div>
    )
};

export default Inteligence;
