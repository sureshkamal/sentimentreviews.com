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
    .question{
        padding: 60px 0;
    }
    #nps-landing input[type="radio"]{

    }


/*  radio button   */

.radio-button {
      display: none;
    }

   .custom-radio {
    position: relative;
    cursor: pointer;
    margin-right: 10px;
    display: flex;
    align-items: center;
    border: 1px solid;
    width: 50%;
    padding: 7px;
    background: #292828;
    margin-bottom: 10px;
    border-radius: 5px;
}

    .custom-radio input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }

    .radio-label {
    padding: 1px 7px;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s, border-color 0.3s;
    font-size: 13px;
    font-weight: bold;
    background-color: #000;
    border: 0.1px solid;
    margin-right: 10px;
}

    .custom-radio input:checked + .radio-label {
      background-color: #fff;
      color: #000;
      border-color: #000;
    }

    .tick-mark {
      margin-left: 5px;
      font-weight: bold;
    }

    .custom-radio input:checked + .radio-label::after {
      content: '\2713'; /* Checkmark character */
      font-size: 16px;
      margin-left: 5px;
      color: #000;
      font-weight: bold;
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
            <span>2&rarr;</span><span>Select the venue you visited today?*</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <div class="custom-control custom-radio">
    <input type="radio" id="radioA" name="radioGroup" class="radio-button" placeholder="A">
    <label class="radio-label" for="radioA">A</label><span>North City</span><span class="tick-mark"></span>
  </div>

  <div class="custom-control custom-radio">
    <input type="radio" id="radioB" name="radioGroup" class="radio-button">
    <label class="radio-label" for="radioB">B</label><span>North City</span><span class="tick-mark"></span>
  </div>

  <div class="custom-control custom-radio">
    <input type="radio" id="radioC" name="radioGroup" class="radio-button">
    <label class="radio-label" for="radioC">C</label><span>North City</span><span class="tick-mark"></span>
  </div>

            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label" for="flexRadioDefault1">
                Yamamori - Izakaya & Sake bar
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
              <label class="form-check-label" for="flexRadioDefault2">
                Yamamori - North City
              </label>
            </div>
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
