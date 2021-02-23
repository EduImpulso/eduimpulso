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
  const [petrCurso, setPetrCurso] = useState(''); 

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
      setPetrCurso(finalPetr.cursos); 
      setShowResult(true);
		}
  };
  
  function refreshPage() {
    navigate('/quiz');
  }

  const Bounce = styled.div`animation: 1s ${keyframes`${bounce}`}`;
  const Fade = styled.div`animation: 1s ${keyframes`${fadeIn}`}`;

  return (
    <div className="App">
      <header className="Header-quiz-mobile" id="phone">
        <div className="Header-title-mobile"><h1 className="h1Quiz-mobile">Qual a sua inteligência predominante? <span>🤓</span></h1></div>
      </header>
      <header className="Header-quiz" id="desktop">
        <div className="Header-title"><h1 className="h1Quiz">Qual a sua inteligência predominante? <span>🤓</span></h1></div>
        <div className="Botton-header">


          <input type="checkbox" className="checkbox" id="chk" onClick={()=> BGbutton()}/>
          <label className="label" for="chk">
              <i className="fas fa-moon"></i>
              <i className="fas fa-sun"></i>
              <div className="ball"></div>
          </label>
        </div>


      </header>
      <Bounce><img className="imgQuiz" src={petrImg} alt="Petr Sticker" /></Bounce>
      
      <div className="Quiz">
        {showResult ? (
          <Fade><div className='score-section'>
            <h3 className="h3Quiz">Olha só!👏👏👏 Ao que tudo indica a sua inteligência predominante é:</h3>
            <h2 className="h2Quiz">{petrResult}</h2>
            <p className="linha mx-auto"></p>
            <p style={{textAlign:'center'}}>{petrDesc}</p>
            <p style={{textAlign:'center'}}>{petrCurso}</p>
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
    </div>
  );
}

export default Quiz;
