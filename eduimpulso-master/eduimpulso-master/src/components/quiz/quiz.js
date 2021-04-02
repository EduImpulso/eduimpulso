import React, { useState } from 'react';
import { useNavigate } from 'react-router-dom';

import ParticlesBg from "particles-bg";

import { questions, petrs } from "./data";

import styled, { keyframes } from 'styled-components';
import { bounce, fadeIn } from 'react-animations';

function Quiz() {
  
  const [showBG, setShowBG] = useState("flex");
  const navigate = useNavigate();
  function BGbutton(){

      if(showBG === "flex"){
        setShowBG("none");
        document.getElementById("bgParticle").style.display="none"
      }else{
        setShowBG("flex");
        document.getElementById("bgParticle").style.display="flex"
      }
      console.log(showBG)
      console.log(document.getElementById("bgParticle").style.display)

  }
  const [currentQuestion, setCurrentQuestion] = useState(0);
  const [showResult, setShowResult] = useState(false);
  const [petrResult, setPetrResult] = useState('');
  const [petrImg, setPetrImg] = useState('./imgs/quiz/index.gif');
  const [petrDesc, setPetrDesc] = useState('');
  const [petrDesca, setPetrDesca] = useState('');
  const [petrDescb, setPetrDescb] = useState('');
  const [petrDescc, setPetrDescc] = useState('');

  const [petrCursoa, setPetrCursoa] = useState(''); 
  const [petrUrla, setPetrUrla] = useState(''); 

  const [petrCursob, setPetrCursob] = useState(''); 
  const [petrUrlb, setPetrUrlb] = useState('');

  const [petrCursoc, setPetrCursoc] = useState(''); 
  const [petrUrlc, setPetrUrlc] = useState(''); 

  const [petrCursod, setPetrCursod] = useState(''); 
  const [petrUrld, setPetrUrld] = useState(''); 

  const [petrCursoe, setPetrCursoe] = useState(''); 
  const [petrUrle, setPetrUrle] = useState(''); 

  const [petrCursof, setPetrCursof] = useState(''); 
  const [petrUrlf, setPetrUrlf] = useState('');

  const [petrCursog, setPetrCursog] = useState(''); 
  const [petrUrlg, setPetrUrlg] = useState(''); 

  const [petrCursoh, setPetrCursoh] = useState(''); 
  const [petrUrlh, setPetrUrlh] = useState(''); 

  const [petrCursoi, setPetrCursoi] = useState(''); 
  const [petrUrli, setPetrUrli] = useState(''); 

  const [petrCursoj, setPetrCursoj] = useState(''); 
  const [petrUrlj, setPetrUrlj] = useState(''); 

  const [petrCursok, setPetrCursok] = useState(''); 
  const [petrUrlk, setPetrUrlk] = useState(''); 

  const [petrCursol, setPetrCursol] = useState(''); 
  const [petrUrll, setPetrUrll] = useState('');

  const [petrCursom, setPetrCursom] = useState(''); 
  const [petrUrlm, setPetrUrlm] = useState(''); 

  const [petrCurson, setPetrCurson] = useState(''); 
  const [petrUrln, setPetrUrln] = useState(''); 

  const [petrCursoo, setPetrCursoo] = useState(''); 
  const [petrUrlo, setPetrUrlo] = useState('');  

  const [petrCursop, setPetrCursop] = useState(''); 
  const [petrUrlp, setPetrUrlp] = useState('');

  const [petrCursoq, setPetrCursoq] = useState(''); 
  const [petrUrlq, setPetrUrlq] = useState('');

  const [petrCursor, setPetrCursor] = useState(''); 
  const [petrUrlr, setPetrUrlr] = useState('');

  const [petrCursos, setPetrCursos] = useState(''); 
  const [petrUrls, setPetrUrls] = useState('');

  const [petrCursot, setPetrCursot] = useState(''); 
  const [petrUrlt, setPetrUrlt] = useState('');

  const [petrCursou, setPetrCursou] = useState(''); 
  const [petrUrlu, setPetrUrlu] = useState('');

  const [petrCursov, setPetrCursov] = useState(''); 
  const [petrUrlv, setPetrUrlv] = useState('');

  const [petrCursow, setPetrCursow] = useState(''); 
  const [petrUrlw, setPetrUrlw] = useState('');

  const [petrCursox, setPetrCursox] = useState(''); 
  const [petrUrlx, setPetrUrlx] = useState('');

  const [petrCursoy, setPetrCursoy] = useState(''); 
  const [petrUrly, setPetrUrly] = useState('');

  const [petrCursoz, setPetrCursoz] = useState(''); 
  const [petrUrlz, setPetrUrlz] = useState('');

  const [petrCursoaa, setPetrCursoaa] = useState(''); 
  const [petrUrlaa, setPetrUrlaa] = useState('');

  const [petrCursoab, setPetrCursoab] = useState(''); 
  const [petrUrlab, setPetrUrlab] = useState('');

  const [petrCursoac, setPetrCursoac] = useState(''); 
  const [petrUrlac, setPetrUrlac] = useState('');

  const [petrCursoad, setPetrCursoad] = useState(''); 
  const [petrUrlad, setPetrUrlad] = useState('');

  const [petrCursoae, setPetrCursoae] = useState(''); 
  const [petrUrlae, setPetrUrlae] = useState('');

  const [petrCursoaf, setPetrCursoaf] = useState(''); 
  const [petrUrlaf, setPetrUrlaf] = useState('');

  const [petrCursoag, setPetrCursoag] = useState(''); 
  const [petrUrlag, setPetrUrlag] = useState('');

  const handleAnswerOptionClick = (petr) => {
    petrs.find(x => x.id === petr).points += 1;
    const nextQuestion = currentQuestion + 1;
    
		if (nextQuestion < questions.length) {
			setCurrentQuestion(nextQuestion);
		} else {
      var finalPetr = petrs.sort(function(a, b){return b.points - a.points})[0];
      setPetrResult(finalPetr.name);
      setPetrImg(`${finalPetr.img}`);
      setPetrDesc(finalPetr.description);
      setPetrDesca(finalPetr.description_a);
      setPetrDescb(finalPetr.description_b);
      setPetrDescc(finalPetr.description_c);

      setPetrCursoa(finalPetr.curso_a); 
      setPetrUrla(finalPetr.url_a); 

      setPetrCursob(finalPetr.curso_b); 
      setPetrUrlb(finalPetr.url_b); 

      setPetrCursoc(finalPetr.curso_c); 
      setPetrUrlc(finalPetr.url_c);

      setPetrCursod(finalPetr.curso_d); 
      setPetrUrld(finalPetr.url_d);

      setPetrCursoe(finalPetr.curso_e); 
      setPetrUrle(finalPetr.url_e);

      setPetrCursof(finalPetr.curso_f); 
      setPetrUrlf(finalPetr.url_f);

      setPetrCursog(finalPetr.curso_g); 
      setPetrUrlg(finalPetr.url_g);

      setPetrCursoh(finalPetr.curso_h); 
      setPetrUrlh(finalPetr.url_h);

      setPetrCursoi(finalPetr.curso_i); 
      setPetrUrli(finalPetr.url_i);

      setPetrCursoj(finalPetr.curso_j); 
      setPetrUrlj(finalPetr.url_j);

      setPetrCursok(finalPetr.curso_k); 
      setPetrUrlk(finalPetr.url_k);

      setPetrCursol(finalPetr.curso_l); 
      setPetrUrll(finalPetr.url_l);

      setPetrCursom(finalPetr.curso_m); 
      setPetrUrlm(finalPetr.url_m);

      setPetrCurson(finalPetr.curso_n); 
      setPetrUrln(finalPetr.url_n);

      setPetrCursoo(finalPetr.curso_o); 
      setPetrUrlo(finalPetr.url_o);

      setPetrCursop(finalPetr.curso_p); 
      setPetrUrlp(finalPetr.url_p);

      setPetrCursoq(finalPetr.curso_q); 
      setPetrUrlq(finalPetr.url_q);

      setPetrCursor(finalPetr.curso_r); 
      setPetrUrlr(finalPetr.url_r);

      setPetrCursos(finalPetr.curso_s); 
      setPetrUrls(finalPetr.url_s);

      setPetrCursot(finalPetr.curso_t); 
      setPetrUrlt(finalPetr.url_t);

      setPetrCursou(finalPetr.curso_u); 
      setPetrUrlu(finalPetr.url_u);

      setPetrCursov(finalPetr.curso_v); 
      setPetrUrlv(finalPetr.url_v);

      setPetrCursow(finalPetr.curso_w); 
      setPetrUrlw(finalPetr.url_w);

      setPetrCursox(finalPetr.curso_x); 
      setPetrUrlx(finalPetr.url_x);

      setPetrCursoy(finalPetr.curso_y); 
      setPetrUrly(finalPetr.url_y);

      setPetrCursoz(finalPetr.curso_z); 
      setPetrUrlz(finalPetr.url_z);

      setPetrCursoaa(finalPetr.curso_aa); 
      setPetrUrlaa(finalPetr.url_aa);

      setPetrCursoab(finalPetr.curso_ab); 
      setPetrUrlab(finalPetr.url_ab);

      setPetrCursoac(finalPetr.curso_ac); 
      setPetrUrlac(finalPetr.url_ac);

      setPetrCursoad(finalPetr.curso_ad); 
      setPetrUrlad(finalPetr.url_ad);

      setPetrCursoae(finalPetr.curso_ae); 
      setPetrUrlae(finalPetr.url_ae);

      setPetrCursoaf(finalPetr.curso_af); 
      setPetrUrlaf(finalPetr.url_af);

      setPetrCursoag(finalPetr.curso_ag); 
      setPetrUrlag(finalPetr.url_ag);

      setShowResult(true);
		}
  };
  
  function refreshPage() {
    window.location.reload(false);
  }

  const Bounce = styled.div`animation: 1s ${keyframes`${bounce}`}`;
  const Fade = styled.div`animation: 1s ${keyframes`${fadeIn}`}`;

  return (
    <div className="App">
       <header className="Header-quiz-mobile" id="phone">
        <div className="Header-title-mobile">
          <h1 className="h1Quiz-mobile">Qual a sua inteligência predominante? <span>🤓</span></h1>
        </div>
      </header>
      <header className="Header-quiz" id="desktop">
        <div className="Header-title"><h3 className="h1Quiz"><strong>Qual a sua inteligência predominante?</strong><span>🤓</span></h3></div>
        {/* <div className="Botton-header">


          <input type="checkbox" className="checkbox" id="chk" onClick={()=> BGbutton()}/>
          <label className="label" for="chk">
              <i className="fas fa-moon"></i>
              <i className="fas fa-sun"></i>
              <div className="ball"></div>
          </label>
        </div> */}
      </header>
      <Bounce><img className="imgQuiz" src={petrImg} alt="Petr Sticker" /></Bounce>
      
      <div className="Quiz">
        {showResult ? (
          <Fade><div className='score-section'>
            <h3 className="h3Quiz">Olha só!👀 Ao que tudo indica a sua inteligência predominante é:</h3>
            <h2 className="h2Quiz">{petrResult}</h2>
            <p className="linha mx-auto"></p>
            <p style={{textAlign:'center'}}>{petrDesc}</p>
            <p style={{textAlign:'center'}}>{petrDesca}</p>
            <p style={{textAlign:'center'}}>{petrDescb}</p>
            <p style={{textAlign:'center'}}>{petrDescc}</p>

            {/*  <p style={{textAlign:'center'}}>{petrCurso}</p> */}
            <hr/>

            <ul>

            <a className="linkInt" href={petrUrla} target="_blank">{petrCursoa}</a><br/>
            <a className="linkInt" href={petrUrlb} target="_blank">{petrCursob}</a><br/>
            <a className="linkInt" href={petrUrlc} target="_blank">{petrCursoc}</a><br/>
            <a className="linkInt" href={petrUrld} target="_blank">{petrCursod}</a><br/>
            <a className="linkInt" href={petrUrle} target="_blank">{petrCursoe}</a><br/>
            <a className="linkInt" href={petrUrlf} target="_blank">{petrCursof}</a><br/>
            <a className="linkInt" href={petrUrlg} target="_blank">{petrCursog}</a><br/>
            <a className="linkInt" href={petrUrlh} target="_blank">{petrCursoh}</a><br/>
            <a className="linkInt" href={petrUrli} target="_blank">{petrCursoi}</a><br/>
            <a className="linkInt" href={petrUrlj} target="_blank">{petrCursoj}</a><br/>
            <a className="linkInt" href={petrUrlk} target="_blank">{petrCursok}</a><br/>
            <a className="linkInt" href={petrUrll} target="_blank">{petrCursol}</a><br/>
            <a className="linkInt" href={petrUrlm} target="_blank">{petrCursom}</a><br/>
            <a className="linkInt" href={petrUrln} target="_blank">{petrCurson}</a><br/>
            <a className="linkInt" href={petrUrlo} target="_blank">{petrCursoo}</a><br/>
            <a className="linkInt" href={petrUrlp} target="_blank">{petrCursop}</a><br/>
            <a className="linkInt" href={petrUrlq} target="_blank">{petrCursoq}</a><br/>
            <a className="linkInt" href={petrUrlr} target="_blank">{petrCursor}</a><br/>
            <a className="linkInt" href={petrUrls} target="_blank">{petrCursos}</a><br/>
            <a className="linkInt" href={petrUrlt} target="_blank">{petrCursot}</a><br/>
            <a className="linkInt" href={petrUrlu} target="_blank">{petrCursou}</a><br/>
            <a className="linkInt" href={petrUrlv} target="_blank">{petrCursov}</a><br/>
            <a className="linkInt" href={petrUrlw} target="_blank">{petrCursow}</a><br/>
            <a className="linkInt" href={petrUrlx} target="_blank">{petrCursox}</a><br/>
            <a className="linkInt" href={petrUrly} target="_blank">{petrCursoy}</a><br/>
            <a className="linkInt" href={petrUrlz} target="_blank">{petrCursoz}</a><br/>
            <a className="linkInt" href={petrUrlaa} target="_blank">{petrCursoaa}</a><br/>
            <a className="linkInt" href={petrUrlab} target="_blank">{petrCursoab}</a><br/>
            <a className="linkInt" href={petrUrlac} target="_blank">{petrCursoac}</a><br/>
            <a className="linkInt" href={petrUrlad} target="_blank">{petrCursoad}</a><br/>
            <a className="linkInt" href={petrUrlae} target="_blank">{petrCursoae}</a><br/>
            <a className="linkInt" href={petrUrlaf} target="_blank">{petrCursoaf}</a><br/>
            <a className="linkInt" href={petrUrlag} target="_blank">{petrCursoag}</a>

            </ul>

            <button className="buttonQuiz" onClick={refreshPage} id='takeAgain'>Refazer o quiz</button>
          </div></Fade>
        ) : (
          <>
            <Fade><div className='question-section'>
              <div style={{display:"flex", alignItems:"center"}}>
              <div className='question-count' style={{width: "80%"}}>
                <span>Questão {currentQuestion + 1}</span>/{questions.length}
              </div>
              <div className="Botton-header-mobile" id="phone">

                <input type="checkbox" className="checkbox" id="chk" onClick={()=> BGbutton()}/>
                <label className="label-mobile" for="chk">
                    <i className="fas fa-moon"></i>
                    <i className="fas fa-sun"></i>
                    <div className="ball-mobile"></div>
                </label>
                </div>
                
              </div>

            <div className='question-text'>{questions[currentQuestion].questionText}</div>
            </div></Fade>
            <Fade><div className='answer-section'>
              {questions[currentQuestion].answerOptions.map((answerOption) => (
                <button className="buttonQuiz" onClick={() => handleAnswerOptionClick(answerOption.petr)}>{answerOption.answerText}</button>
              ))}
            </div></Fade>
          </>
        )}
      </div>
      <div id='bgParticle'>
        <ParticlesBg type="circle" bg={true} />
      </div>


      {/* <div className="divBotaoDesabilitar">
        <div style={{display: "flex", justifyContent: "center"}}>
          <h6 className="botaoDesabilitar">Desabilitar animação fundo de tela</h6>
        </div>
        
        <div style={{display: "flex", justifyContent: "center", width: "100%", border:"3px solid green"}}>

        </div>
      </div> */}
    </div>
  );
}

export default Quiz;
