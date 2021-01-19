-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 06/11/2020 às 01:50
-- Versão do servidor: 10.4.13-MariaDB
-- Versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `recode_impulso`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `periodo` varchar(120) NOT NULL,
  `duracao` varchar(120) NOT NULL,
  `local` varchar(240) NOT NULL,
  `sal_ini` decimal(10,0) NOT NULL,
  `sal_med` decimal(10,0) NOT NULL,
  `sal_exp` decimal(10,0) NOT NULL,
  `fonte` varchar(240) NOT NULL,
  `descricao` text NOT NULL,
  `image` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nome`, `periodo`, `duracao`, `local`, `sal_ini`, `sal_med`, `sal_exp`, `fonte`, `descricao`, `image`) VALUES
(1, 'Economia (Ciências Econômicas)', 'Diurno, Integral ou Noturno', '8 a 10 semestres (4 a 5 anos)', 'Unicamp, USP, UNESP, UFABC, UNIVESP\r\n', '3800', '6000', '8600', 'https://www.vagas.com.br/mapa-de-carreiras/cargos/economista/0', 'Poderá atuar nas áreas de planejamento econômico, financeiro e administrativo; pesquisar e analisar o mercado e os preços, a renda nacional, a conjuntura econômica, o desenvolvimento econômico, o custo de vida e salário; efetuar perícia e avaliações econômicas; determinar o nível ideal de produção; fixar preços de venda e apropriação de custos; prestar assessoria de economia e finanças, visando sempre o aumento de produtividade e a rentabilidade do patrimônio ou dos serviços em âmbito privado e público. Poderá atuar como professor universitário.', './imgs/cursos/negocio.png'),
(2, 'Engenharia Ambiental', 'Integral ou Noturno', '8 a 12 semestres (4 a 6 anos)', 'Unicamp, USP, UNESP, UFABC, UNIVESP', '3000', '5100', '7900', 'https://www.vagas.com.br/mapa-de-carreiras/cargos/engenheiro-ambiental/0', 'O Engenheiro Ambiental, por sua formação generalista, poderá atuar em diversos segmentos da socidade, nas esferas pública e privadas, aliando ao conhecimento tecnológico, conteúdos relacionados à legislação ambiental e às ciências sociais e humanas, de forma a atuar em todas as frentes relacionadas com o meio ambiente, como agente modificador e transformador da sociedade. O profissional estará capacitado para contribuir com a resolução de problemas ambientais por meio da realização de análises, diagnósticos integrados, concepção e execução de projetos e avaliações técnicas, tecnológicas, sócio-econômicas e de impactos nos setores e sistemas ambientais. Poderá atuar em agências reguladoras e órgãos ambientais nos poderes públicos federal, estadual e municipal, em concessionárias de serviços públicos, agências bilaterais e multilaterais de cooperação, em empresas do setor industrial, de serviços, de consultoria e projetos de pesquisa, ONGs e como profissional autônomo ', './imgs/cursos/engambiental.png'),
(3, 'Engenharia de Computação', 'Integral', '10 semestres (5 anos)', 'Unicamp, USP, UNESP, UFABC, UNIVESP', '4400', '6300', '8600', 'https://www.vagas.com.br/mapa-de-carreiras/cargos/engenheiro-de-software/0', 'O engenheiro de computação é um profissional que possui qualificação para atuar em uma ampla gama de atividades na área da computação, abrangendo, entre outros, sistemas embarcados, computadores pessoais e redes de computadores. O engenheiro de computação possui a formação necessária para analisar, especificar, projetar, implementar, integrar, testar e manter sistemas de hardware e software. Este profissional pode atuar no desenvolvimento de produtos, aplicações e serviços em qualquer área da informática e da tecnologia da informação, atendendo a demanda de indústrias, empresas, grupos financeiros, centros de pesquisa e desenvolvimento, universidades, estabelecimentos de ensino e do setor de serviços públicos. A formação do engenheiro de computação agrega conhecimentos das áreas de Engenharia Elétrica e da Ciência da Computação. ', './imgs/cursos/engenhariadesoftware.png'),
(4, 'Farmácia', 'Integral e noturno', '10 semestres (5 anos)', 'Unicamp, USP, UNESP, UFABC, UNIVESP', '3000', '3400', '4100', 'https://www.vagas.com.br/mapa-de-carreiras/cargos/farmaceutico/0', 'A realidade nacional demanda, cada vez mais, a inserção de profissionais capazes de promover o desenvolvimento de novos fármacos, especialmente aqueles que utilizam o potencial da biodiversidade brasileira, respaldada em pesquisa científica e tecnologia avançada. O curso de graduação em Farmácia da Unicamp prepara profissionais da saúde com sólida formação em pesquisa, desenvolvimento, produção e controle da qualidade de medicamentos, relacionando sempre a área clínica.\r\nOs estudantes são capacitados para atuar ao lado de outros profissionais da saúde, na construção de um sistema de saúde cada vez mais efetivo. O projeto pedagógico do curso prevê a conclusão em dez semestres, em período integral, qualificando o aluno para todas as habilidades do profissional. ', './imgs/cursos/farmacia.png'),
(5, 'Medicina', 'Integral', '12 semestres (6 anos)', 'Unicamp, USP, UNESP, UFABC, UNIVESP', '6900', '10500', '15200', 'https://www.vagas.com.br/mapa-de-carreiras/cargos/medico/0', 'Poderá atuar como clínico geral ou especializar-se, realizando o atendimento médico conforme a hierarquização de cuidados proporcionados pelo SUS a adultos, crianças e adolescentes de ambos os gêneros, em nível primário e secundário geral, incluindo as emergências mais comuns e medidas de suporte vital básico. Poderá atender pessoas e comunidade de forma integral, criando vínculos e se responsabilizando pelo seu paciente, identificando riscos mais comuns para a saúde e atuando preventivamente. O curso de Medicina o tornará apto a atuar com dicernimento frente à situação econômica, financeira e organizacional do sistema de saúde, levando em consideração os aspectos de custo/benefício e eqüidade, sendo capaz de trabalhar em equipe, incorporando criticamente tecnologias. Aplicar princípios éticos e humanísticos nas relações com pessoas e a comunidade, para promover a defesa da individualidade, respeitando os princípios de cidadania, visando a redução das desigualdades. Otimizar o uso dos recursos propedêuticos, valorizando o método clínico em todos os seus aspectos. Diagnosticar e tratar doenças da gestante, da criança, do adulto e do idoso em critérios de prevalência, potencial mórbido. Adequar criticamente a sua vida profissional aos contextos social, político e histórico vigentes, com perspectiva transformadora. ', './imgs/cursos/medicina.png'),
(6, 'Comunicação Social - Midialogia (Jornalismo)', 'Integral, Matutino ou Noturno ', '8 semestres (4 anos)', 'Unicamp, USP, UNESP, UFABC, UNIVESP', '1700', '2600', '3800', 'https://www.vagas.com.br/mapa-de-carreiras/cargos/jornalista/0', 'Este profissional tem sua formação centrada no estudo das mídias audiovisuais. Ocupa-se de suas características específicas, suas convergências, interfaces e fronteiras. Compreende seus campos de linguagem e tecnologia, observando suas eficácias, usos e funcionamentos nas sociedades contemporâneas, historicamente constituídas. O Curso se dedica a uma formação de saber-fazer, saber-pensar, saber-estar, saber-ser no campo da cultura e tecnologia midiática. Este profissional poderá atuar em áreas específicas de som, fotografia, cinema, vídeo, televisão, computação gráfica, hipermídia, na produção, realização, recepção e gestão dessas obras audiovisuais, com decisivo interesse crítico e analítico pelas mídias audivisuais. Pode também desenvolver uma carreira no âmbito da produção cultural e no trabalho de crítica. Outra atuação pode acontecer na esfera acadêmica interdiciplinar da Comunicação Social, no exercício da docência e da pesquisa. Primeiro, existe uma formação baseada num núcleo comum do profissional, independente do modo com que venha atuar no mundo do trabalho depois de formado. Trata-se de um conjunto de saberes fundamentais para a discussão das mídias audiovisuais. ', './imgs/cursos/jornalismo.png'),
(7, 'Nutrição', 'Integral, matutino ou noturno', '10 semestres (5 anos)', 'Unicamp, USP, UNESP, UFABC, UNIVESP', '2500', '2900', '3400', 'https://www.vagas.com.br/mapa-de-carreiras/cargos/nutricionista/0', 'Aprender a atuar de forma integrada e compartilhada na PROMOÇÃO, PREVENÇÃO E RECUPERAÇÃO da saúde a nível individual e coletivo. Realizar procedimentos específicos dentro de seu âmbito profissional conforme a hierarquização de cuidados proporcionados pelo SUS. Realizar seu aprimoramento continuado, selecionando, coletando e analisando a informação científica pertinente à prática profissional, mantendo-se cientificamente atualizado. Atender as pessoas e a comunidade de forma integral, criando vínculos, identificando os riscos mais comuns à saúde e atuando preventivamente. Incorporar o conhecimento das ciências básicas na sua prática diária. Atuar com discernimento frente à situação econômica, social e organizacional do sistema de saúde, levando em consideração o custo/benefício, a equidade e, sendo principalmente capaz de trabalhar em equipe, aplicando sempre princípios humanísticos e éticos nas relações individuais e com a comunidade. Saber lidar com a diversidade de comportamentos, credos, raças e idéias, reconhecendo os direitos individuais e coletivos das pessoas envolvidas. Adequar criticamente sua vida profissional aos contextos social, político e histórico vigente, promovendo a defesa da individualidade, respeitando os princípios de cidadania, com a perspectiva transformadora de redução das desigualdades. ', './imgs/cursos/gastronomia.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `usuario`, `senha`, `email`, `image`) VALUES
(15, 'Squad 4', '2bef362c73d49018a7bf9aaef3f33d91', 'squad4@eduimpulso.com.br', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
