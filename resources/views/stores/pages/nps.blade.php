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
        font-size: 22px;
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



    #myProgress {
      width: 100%;
      background-color: #ddd;
    }

    #myBar {
      width: 1%;
      height: 10px;
      background-color: rgb(255 51 0 / 74%);
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

    
/*  new styles  */
.question{
    display: none;
}
#question1{
    display: block;
}

   
  </style>

<div id="myProgress">
  <div id="myBar"></div>
</div>
<div class="container bgBlack" id="nps-landing">
    @for ($i = 1; $i <= 10; ++$i)
        <div class="sec{{ $i }} question" id="question{{ $i }}" data-id="{{ $i }}">
            <div class="background-overlay ">
            <div class="vertical-center text-center ">
                <div class="heading">
                    <span>{{ $i }}&rarr;</span><span>{{ data_get($questions, 'question' . $i) }}</span>
                </div>
                <div class="nps-middle-seperator">
                    <!-- <img src="/assets/images/nps/1.png"> -->
                </div>
                <div>
                    <input type="" name="" placeholder="Type your answer here...">
                </div>
                <div>
                    <button class="buttonOrange" onclick="next({{ $i+1 }})">OK &#10003;</button>
                </div>
            </div>
            </div>
        </div>
    @endfor


    <!-- <div class="sec1 question" id="question1" data-id="1">
        <div class="heading">
            <span>1&rarr;</span><span>{{$questions->question1}}</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange" onclick="next(2)">OK &#10003;</button>
        </div>
        
    </div>
    <div class="sec2 question" id="question2" data-id="2">
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
            
        </div>
        <div>
            <button class="buttonOrange" onclick="next(3)">OK &#10003;</button>
        </div>
        
    </div>
    <div class="sec3 question" id="question3" data-id="3">
        <div class="heading">
            <span>3&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange" onclick="next(4)">OK &#10003;</button>
        </div>
        
    </div>
    <div class="sec4 question" id="question4" data-id="4">
        <div class="heading">
            <span>4&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange" onclick="next(5)">OK &#10003;</button>
        </div>
        
    </div>
    <div class="sec5 question" id="question5" data-id="5">
        <div class="heading">
            <span>5&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange" onclick="next(6)">OK &#10003;</button>
        </div>
        
    </div>
    <div class="sec6 question" id="question6" data-id="6">
        <div class="heading">
            <span>6&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange" onclick="next(7)">OK &#10003;</button>
        </div>
        
    </div>
    <div class="sec7 question" id="question7" data-id="7">
        <div class="heading">
            <span>7&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange" onclick="next(8)">OK &#10003;</button>
        </div>
        
    </div>
    <div class="sec8 question" id="question8" data-id="8">
        <div class="heading">
            <span>8&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange" onclick="next(9)">OK &#10003;</button>
        </div>
        
    </div>
    <div class="sec9 question" id="question9" data-id="9">
        <div class="heading">
            <span>9&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange" onclick="next(10)">OK &#10003;</button>
        </div>
        
    </div>
    <div class="sec10 question" id="question10" data-id="10">
        <div class="heading">
            <span>10&rarr;</span><span>Hey there! What is your name?</span>
        </div>
        <div>
            <img src="/assets/images/nps/1.png">
        </div>
        <div>
            <input type="" name="" placeholder="Type your answer here...">
        </div>
        <div>
            <button class="buttonOrange" onclick="next(0)">OK &#10003;</button>
        </div>
        
    </div> -->
   
</div>
@endsection
@section('afterJs')
    <script src="{{ asset('stores-assets') }}/js/landing.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<script type="text/javascript">

    var step = 0;
    var width = 1;

    function next(goto) {
        if(goto > 10)
            goto = 0;
        progress();
        $(".question").hide();
        $("#question"+goto).show();
        if(!goto){
            window.location.href = 'thank-you';
        }
    }

    function progress() {
       if(step < 10){
        var elem = document.getElementById("myBar");
        
        step++;
        var id = setInterval(frame, 10);
        function frame() {
          if (width >= step*10) {
            clearInterval(id);
            i = 0;
          } else {
            width++;
            elem.style.width = width + "%";
          }
        }
      }
    }

</script>