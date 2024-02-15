@extends('stores.layouts.app', [
    'class' => 'landing-page',
    'elementActive' => ''
])
@section('content')
<div class="container" id="stores-landing">
    <div  style="background: url('/stores-assets/images/stores/yamamori.png'), lightgray 50% / cover no-repeat;">
         <div class="bg-landing bg-store-gradient" style="padding:150px 8px 8px">
            <div class="row" >
                <div class="col-sm-12">
                    <div>
                        <img src="/stores-assets/images/stores/yamamori-logo3.png" style="width: 84%;display: block;margin: auto;">
                    </div>
                    <div>
                        <h4 style="
                            color: #fff;
                            text-align: center;
                            margin-top: 10px;
                        ">Izakaya Japas & Sake Bar</h4>
                    </div>
                    <div class="clear"></div>
                </div>
                 <!-- <div class="col-sm-8">
                    <h1 style="margin-top:35px; margin-left:4px">Yamamori</h1>
                </div> -->
            </div>  
            <div class="row">
                <div class="col-sm-12">
                    <div style="padding:25px 25px 0">
                        <p class="font-inter store-description" style="
                            text-align: center;
                            line-height: 18px;
                        ">
                            Would you be so kind to leave a review?  <br >It’ll take just a minute.Thank you!
                        <ul style="padding: 0; list-style: none;"  class="button-lists">
                            <li><a href="https://g.page/r/CSvj_Oj-XuMzEB0/review" class="btn-store icon-google">GOOGLE</a></li>
                            <li><a href="https://www.opentable.com/r/yamamori-izakaya-japas-and-sake-bar-dublin-2" class="btn-store icon-open-table">OPEN TABLE</a></li>
                            <li><a href="https://www.tripadvisor.in/UserReviewEdit-g186605-d2486893-Yamamori_Izakaya_Sake_Bar-Dublin_County_Dublin.html" class="btn-store icon-trip-advisor">TRIP ADVISOR</a></li>
                            <!-- <li><a href="yamamori/nps" class="btn-store icon-trip-advisor">NPS Review</a></li> -->

                            <!-- <li><a href="#" class="btn-store" v-on:click="comingsoonalert()">REWARDS</a></li> -->
                        </ul>
                        <div class="floating-button-container">
                            <button class="floating-button btn-store" id="floating-button" onclick="togglePopup()">CLAIM YOUR REWARDS</button>
                        </div>
                    </div>
                </div>
            </div>

    <!-- <div class="sec10 question" id="question10">
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
        
    </div> -->


            <div class="row">
                <div class="social-links">
                    <a href="https://www.facebook.com/YamamoriDining"><img src="/stores-assets/images/icons/facebook.png"> </a>
                    <a href="https://www.instagram.com/yamamoridining/"><img src="/stores-assets/images/icons/instagram.png"> </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <a href="https://sentiment-reviews.com" style="width: 100%;
                    display: block;
                    text-align: center;
                    margin-top: 10px;
                    color: #fff;">
                        www.sentiment-reviews.com
                    </a>
                </div>
            </div>
        </div>
    </div>
   
</div>
<div class="popup" id="popup">
    <button class="close" onclick="closePopup()">&#x2715;</button>

    <div class="input-container">
        <input type="text" id="nameInput" class="input-field" required>
        <label for="nameInput" class="input-label">Enter Name</label>
    </div>
    <div class="input-container">
        <input type="email" id="emailInput" class="input-field" required>
        <label for="emailInput" class="input-label">Enter Email</label>
    </div>

</div>
@endsection
@section('afterJs')
    <script src="{{ asset('stores-assets') }}/js/landing.js"></script>
    <script type="text/javascript">
        window.addEventListener('scroll', function() {
            var button = document.getElementById('floating-button');
            var contentHeight = document.querySelector('.container').offsetHeight;
            var screenHeight = window.innerHeight;
            var scrollPosition = window.scrollY || window.pageYOffset;
            
            if (scrollPosition > contentHeight - screenHeight) {
                button.classList.add('floating-button-fixed');
            } else {
                button.classList.remove('floating-button-fixed');
            }
        });

        function togglePopup() {
        var popup = document.getElementById('popup');
        popup.classList.toggle('active');
    }

    function closePopup() {
        var popup = document.getElementById('popup');
        popup.classList.remove('active');
    }

    document.addEventListener('DOMContentLoaded', function() {
        var inputField = document.getElementById('nameInput');
        var inputLabel = inputField.nextElementSibling; // Get the label next to the input field

        // Add event listener for focus
        inputField.addEventListener('focus', function() {
            inputLabel.classList.add('active');
        });

        // Add event listener for blur
        inputField.addEventListener('blur', function() {
            if (inputField.value === '') {
                inputLabel.classList.remove('active');
            }
        });

        // Check if input field already has value on page load
        if (inputField.value !== '') {
            inputLabel.classList.add('active');
        }

     });
</script>
@endsection



