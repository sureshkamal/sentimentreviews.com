@extends('stores.layouts.nps', [
    'class' => 'landing-page',
    'elementActive' => ''
])
@section('content')
<style type="text/css">
    body{
        background: #000;
        -webkit-tap-highlight-color: transparent;
    }

    .nps .container {
        width: 100%;
        max-width: 720px;
        margin: 0px auto;
    }
    .bgBlack{
        background: #000;
        color: #fff;
        width: 100%;
    }
    .buttonOrange{
        background: rgba(255, 51, 0,1);
        color: #fff;
        padding: 5px 20px;
        font-size: 18px;
        border-radius: 4px;
        border: none;
        font-weight: bold;
    }
    #nps-landing{
        padding: 0;
    }
    #nps-landing img{
        max-width: 350px;
        margin: 40px 0;
    }
    .nps input{

        width: 100%;
        border: none;
        outline: none;
        border-bottom: 3px solid #fff;
        font-size: 30px;
        color: #fff;
        background-color: rgba(255, 255, 255, 0);
        margin-bottom: 15px;        
    }
    .nps input::placeholder {
      color: #999; 
    }
    .enter{
        margin-inline-start: 12px;
        font-size: 12px;
    }
    .heading{
        font-size: 24px;
        line-height: 32px;
    }





    .progress-container {
      width: 100%;
      height: 10px;
      background-color: #ddd;
    }

    .progress-bar {
      height: 100%;
      background-color: #4CAF50;
      transition: width 0.5s ease;
    }

    .question {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.5s ease, transform 0.5s ease;
      padding: 50px 0;
    }

    .question.active {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
<!-- 
<div class="progress-container">
  <div class="progress-bar" id="myProgressBar" style="width: 0;"></div>
</div>

<div class="question-container" style="height: 1000px;">
  <div class="question" id="question1">
    <h2>Question 1</h2>
    <p>Your question details go here.</p>
  </div>
  <div class="question" id="question2">
    <h2>Question 2</h2>
    <p>Your question details go here.</p>
  </div>
</div>

 -->

<div class="progress-container">
  <div class="progress-bar" id="myProgressBar">0%</div>
</div>
<div class="container bgBlack" id="nps-landing">
    <div class="sec1 question" id="question1">
        <div class="heading">
            <span>1&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange">OK &#10003;</button><span class="enter">press <strong>Enter ↵</strong></span>
        </div>
        
    </div>
    <div class="sec2 question" id="question2">
        <div class="heading">
            <span>1&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange">OK &#10003;</button><span class="enter">press <strong>Enter ↵</strong></span>
        </div>
        
    </div>
    <div class="sec3 question" id="question3">
        <div class="heading">
            <span>1&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange">OK &#10003;</button><span class="enter">press <strong>Enter ↵</strong></span>
        </div>
        
    </div>
    <div class="sec4 question" id="question4">
        <div class="heading">
            <span>1&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange">OK &#10003;</button><span class="enter">press <strong>Enter ↵</strong></span>
        </div>
        
    </div>
    <div class="sec5 question" id="question5">
        <div class="heading">
            <span>1&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange">OK &#10003;</button><span class="enter">press <strong>Enter ↵</strong></span>
        </div>
        
    </div>
    <div class="sec6 question" id="question6">
        <div class="heading">
            <span>1&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange">OK &#10003;</button><span class="enter">press <strong>Enter ↵</strong></span>
        </div>
        
    </div>
    <div class="sec7 question" id="question7">
        <div class="heading">
            <span>1&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange">OK &#10003;</button><span class="enter">press <strong>Enter ↵</strong></span>
        </div>
        
    </div>
    <div class="sec8 question" id="question8">
        <div class="heading">
            <span>1&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange">OK &#10003;</button><span class="enter">press <strong>Enter ↵</strong></span>
        </div>
        
    </div>
    <div class="sec9 question" id="question9">
        <div class="heading">
            <span>1&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange">OK &#10003;</button><span class="enter">press <strong>Enter ↵</strong></span>
        </div>
        
    </div>
    <div class="sec10 question" id="question10">
        <div class="heading">
            <span>1&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange">OK &#10003;</button><span class="enter">press <strong>Enter ↵</strong></span>
        </div>
        
    </div>
   
</div>
@endsection
@section('afterJs')
    <script src="{{ asset('stores-assets') }}/js/landing.js"></script>

<script>
  // Track the current question index
  let currentQuestionIndex = 0;

  // Update progress bar and show next question
  function showNextQuestion() {
    currentQuestionIndex++;
    const progressBar = document.getElementById('myProgressBar');
    const question = document.getElementById('question' + currentQuestionIndex);


    // Update progress bar width
    progressBar.style.width = (currentQuestionIndex / 10) * 100 + '%';

    // Show next question
    if (question) {
        var elements = document.getElementsByClassName('question');

      // Loop through the elements and remove the class
      for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove('active');
      }

      question.classList.add('active');
      scrollToSection('question' + currentQuestionIndex);
    }
  }

  function scrollToSection(sectionId) {
    // const section = document.getElementById(sectionId);
    window.location.href="#"+sectionId;

    // if (section) {
    //   section.scrollIntoView({ behavior: 'smooth' });
    // }
  }

  // Attach the scroll event listener
  // window.addEventListener('scroll', handleScroll);
  window.onscroll = function() {showNextQuestion()};

  // Initial call to show the first question
  showNextQuestion();
</script>

    @endsection



