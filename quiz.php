<?php
//require_once('./servidor/Conection.php');
require_once('./nav/menu.html');
?>
<div class="container-fluid d-flex flex-column align-items-center mt-4 ">
    <h1 class="quiz">QUIZ: Qual o seu principal tipo de inteligência? 🧠🧐 </h1> 
    <h1 class="subtitulo">Escolha a frase com a qual vc mais se identifica! </h1>
    <br/>
    <div class="quiz-area" id="quiz-area">
        <!-- beginning of quiz -->
        <section class="q-n-a">
                <h3 class="question text-center">🟣⚪⚪⚪⚪⚪⚪⚪⚪⚪⚪⚪⚪⚪⚪⚪⚪⚪⚪⚪</h3> <!-- Questão 1 de 20 -->
                <div class="answers">
                    <div class="answer" data-value="1">Eu gosto de aprender coisas sobre a minha personalidade</div> <!-- 1_Intrapessoal -->
                    <div class="answer" data-value="2">Eu consigo tocar um instrumento musical facilmente</div> <!-- 2_Musical -->
                    <div class="answer" data-value="3">Acho que é mais fácil resolver os problemas quando eu estou fazendo alguma atividade física</div> <!-- 3_Cinestésica-Corporal -->
                    <div class="answer" data-value="4">Acho gráficos e tabelas fáceis de compreender</div> <!-- 4_Espacial-Visual -->
                    <div class="answer" data-value="0">Não me identifico com nenhuma frase 😬</div> <!-- 0_Nada -->
                </div>
                <div class="button-holder clearfix">
                    <div class="previous mini button-quiz">Anterior</div><div class="next mini button-quiz">Próximo</div>
                </div>
            </section>

    </div> <!-- end quiz area -->
    <div class="button finish button-finish" style="display: none;">Que rufem os tambores! 🥁🥁🥁 <br/> (clica aqui pra ver o resultado)</div>
    <div class="response" id="teste" style="display: none;">
        <div class="missed button" style="display: none;">Procurar onde esqueci de selecionar alguma(s) frase(s) 🔍 </div>
    </div>
    </div>
<!-- jquery! -->
<script 
src="https://code.jquery.com/jquery-3.5.1.min.js"
integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
crossorigin="anonymous"
src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"
src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"
src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>


<!-- any JQ Plugins go here -->
<script type="text/javascript">
    // my custm script that uses jQuery or jQ Plugins

    //in order to check that my user has answered all the questions I will need to know now many there are.
    var questions = $('.question').length; //this tells us how many items have the class of questions. jQuery stores them in a nodeList.
    var total = 0; //I am going to store a total of the user's answers in the total variable
    var avg = 0; //I am going to store the average of the questions answerea
    var myQuestions = $('section.q-n-a');
    var currQ = 0; //question we are currently showing.

// randomize the questions sections
//shuffle(myQuestions); //  ****** Deixei SEM o shuffle nas perguntas
//console.log(myQuestions);
// randomize the answer elements within

myQuestions.each( function(index){

    var myAnswers = $(this).find('.answer');
    //shuffle(myAnswers); // ****** Deixei SEM o shuffle nas respostas
    $(this).find('.answers').html(myAnswers);
    $(this).attr('id', index+1);

    if(index == 0){
        // remove the previous button from the first question
    $(this).find('.previous').remove();

    }
    
})

$('#quiz-area').html(myQuestions);

function showQ(){
    $('section.q-n-a').hide();
    currQ++;
    if( $('#'+currQ).length > 0 ){
        //there is at least one of that id on this page
        $('#'+currQ).fadeIn(200);
    }else{
        $('.finish').fadeIn();
    }
}

showQ();

$('.previous, .next, .missed').click( function(){
     if($(this).hasClass('previous')){
         currQ-=2; //because showQ always increment by 1, we need to set the currQ by 2 and THEN showQ
     }else if($(this).hasClass('missed')){
        currQ = 0;
        $('.response, .finish, .missed').hide(); 
     }
     showQ();

})

// shuffles arrays and html collections and node lists
function shuffle(array){
    for(let i = array.length-1; i >0; i--){
        let j = Math.floor( Math.random() * (i+1));
        [array[i], array[j]] = [array[j], array[i]];
    }

}

    // I want to determine what the value of the answer the user clicked is. First I need to attach a listener to each answer.

    $('.answer').on('click', function(){

        if($(this).parent().find('.selected').length > 0){
            // this tells me if there are any answer siblings that already have the class selected on them
            total -= $(this).parent().find('.selected').data('value');
            // this removes what we selected before from the total....
            $(this).parent().find('.selected').removeClass('selected');
            // remove the class... then...
        }

        $(this).addClass('selected');
        total += $(this).data('value');

        console.log(total);
    })

    $('.finish').on('click', function(){
    // when the finish button gets clicked ... 
    // I need to make sure that user has clicked all the questions:

       if($('.selected').length === questions){
            avg = total / questions;
            var message = '';
           //an answer for every question

            if(avg<0.1){
                message = '🤪 eita, vc precisa selecionar ao menos uma frase pra gente conseguir calcular! ';
                let image = document.createElement('img');
                let texto = document.createElement('p');
                image.src="https://media.giphy.com/media/Pm4GlBiHRJulsJGwe1/giphy.gif";
                document.getElementById('teste').appendChild(image);
                document.getElementById('teste').appendChild(texto)  
            }else if(avg<1.5){
                message = 'Intrapessoal 🧘‍♀️'; 
                let image = document.createElement('img');
                let texto = document.createElement('p');
                image.src="https://media.giphy.com/media/3o6gaQQitM8rrsR1za/giphy.gif";
                document.getElementById('teste').appendChild(image);
                document.getElementById('teste').appendChild(texto)  
            }else if(avg<2.5){
                message = 'Musical 👩🏾‍🎤'; 
                let image = document.createElement('img');
                let texto = document.createElement('p');
                image.src="https://media.giphy.com/media/3o84sGjhZQMlKbs3Uk/giphy.gif";
                document.getElementById('teste').appendChild(image);
                document.getElementById('teste').appendChild(texto)
            }else if(avg<3.5){
                message = 'Cinestésica-Corporal 🤸‍♀️';
                let image = document.createElement('img');
                let texto = document.createElement('p');
                image.src="https://media.giphy.com/media/9iCulQTAGMa1W/giphy.gif";
                document.getElementById('teste').appendChild(image);
                document.getElementById('teste').appendChild(texto)
            }else if(avg<4.5){
                message = 'Espacial-Visual 👩🏾‍🎨';
                let image = document.createElement('img');
                let texto = document.createElement('p');
                image.src="https://media.giphy.com/media/CbSGut2wzWKZy/giphy.gif";
                document.getElementById('teste').appendChild(image);
                document.getElementById('teste').appendChild(texto)
            }else if(avg<5.5){
                message = 'Interpessoal 👨🏾‍⚕️';
                let image = document.createElement('img');
                let texto = document.createElement('p');
                image.src="https://media.giphy.com/media/vVKqa0NMZzFyE/giphy.gif";
                document.getElementById('teste').appendChild(image);
                document.getElementById('teste').appendChild(texto)
            }else if(avg<6.5){
                message = 'Linguistica 👩‍🏫';
                let image = document.createElement('img');
                let texto = document.createElement('p');
                image.src="https://media.giphy.com/media/Ze4BXdrjDjygM9Piq0/giphy.gif";
                document.getElementById('teste').appendChild(image);
                document.getElementById('teste').appendChild(texto)
            }else if(avg<7.5){
                message = 'Lógico-Matemática 👩🏿‍💻';
                let image = document.createElement('img');
                let texto = document.createElement('p');
                image.src="https://media.giphy.com/media/3o7btPCcdNniyf0ArS/giphy.gif";
                document.getElementById('teste').appendChild(image);
                document.getElementById('teste').appendChild(texto)
            }else{
                message = 'Naturalística 👩‍🌾';
                let image = document.createElement('img');
                let texto = document.createElement('p');
                image.src="https://media.giphy.com/media/8hZqxM7jwDnmrAoYat/giphy.gif";
                document.getElementById('teste').appendChild(image);
                document.getElementById('teste').appendChild(texto)
            }  
                $('#quiz-area, .finish').hide();
            }else{
                message = 'eita, parece que vc esqueceu de selecionar alguma(s) resposta(s) lá atrás!😲 ';
                $('.missed').show();
            } 
            $('.response p').text(message);
            $('.response').show();
        
        //alert(message);   
    })


</script>    
</body>

<footer class="container-fluid bg-purple text-light d-flex justify-content-center">
    <div class="footerBar d-flex align-items-center">
        ©2021 - EduImpulso - ORIENTAÇÃO PROFISSIONAL
    </div>
</footer>

</html>