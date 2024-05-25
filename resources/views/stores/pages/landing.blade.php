@extends('stores.layouts.app', [
    'class' => 'landing-page',
    'elementActive' => ''
])
@section('content')
<div class="container" id="stores-landing">
    <div  style="background: url('{{ asset($store->branch_bg1) }}'), lightgray 50% / cover no-repeat;">
    <!-- <div  style="background: url('/stores-assets/images/stores/yamamori.png'), lightgray 50% / cover no-repeat;"> -->
         <div class="bg-landing bg-store-gradient">
            <div class="bg-dark">
                <div class="pt-3">
                    <div>
                        @if($store->branch_logo)
                            @if($store->slug == "gbk.com")
                            <img src="{{ asset($store->branch_logo) }}" class="store-logo" alt="{{ $store->branch_name }} Logo" style="background-color: #fff; width: 55%;">
                            @else
                            <img src="{{ asset($store->branch_logo) }}" class="store-logo" alt="{{ $store->branch_name }} Logo" >
                            @endif
                        
                        @else
                        <p>No store logo available.</p>
                        @endif
                        <!-- <img src="/stores-assets/images/stores/yamamori-logo3.png" class="store-logo" > -->
                    </div>
                    <div>
                        <h4 class="store-heading revLandHeading">Thank you for </br> dining with us</h4>
                        <p class="font-inter store-description" >
                            Share your experience and<br >Unlock delectable rewards as tokens </br> 
                            of our appreciation </p>
                    </div>
                    <div class="clear"></div>
                </div>
                    
                <div class="">
                    <div style="padding:0 25px">
                        
                        <ul style="padding: 0; list-style: none;"  class="button-lists">
                        @if($store->show_google)
                            <li><a href="{{ $store->review_link_google }}" class="btn-store icon-google" onClick="updateCount(1)"> Review on Google</a></li>
                        @endif
                        @if($store->show_trip_adv)
                            <li><a href="{{ $store->review_link_ta }}" onClick="updateCount(2)" class="btn-store icon-trip-advisor">Review on Trip Advisor</a></li>
                        @endif
                        @if($store->show_insta)
                            <li><a href="{{ $store->review_link_insta }}" class="btn-store icon-instagram" onClick="updateCount(3)">Follow us on Instagram</a></li>
                            <!-- <li><a href="yamamori/nps" class="btn-store icon-trip-advisor">NPS Review</a></li> -->
                        @endif
                        @if($store->show_nps)
                            <li><a href="/{{ $store->slug }}/nps"  class="btn-store icon-my-rewards" onClick="updateCount(4)">View my Rewards</a></li>
                        @endif
                        
                        </ul>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <a href="https://sentiment-reviews.com" style="width: 100%;
                        display: block;
                        text-align: center;
                        margin: 30px 0;
                        font-size: 12px;
                        color: #fff;">
                            Powered by SentimentReviews
                        </a>
                    </div>
                </div>

                <!-- <div class="row">
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
                </div> -->
            </div>
        </div>

    </div>
   
</div>
<div class="popup" id="popup">
    <button class="close" onclick="closePopup()">&#x2715;</button>

    <!-- <div class="input-container">
        <input type="text" id="nameInput" class="input-field" required>
        <label for="nameInput" class="input-label">Enter Name</label>
    </div>
    <div class="input-container">
        <input type="email" id="emailInput" class="input-field" required>
        <label for="emailInput" class="input-label">Enter Email</label>
    </div> -->

    <div class="input-container">
        <label for="nameInput" class="input-label">Enter Name</label>
        <input type="text" id="nameInput" class="input-field" required>
    </div>
    <div class="input-container">
        <label for="emailInput" class="input-label">Enter Email</label>
        <input type="email" id="emailInput" class="input-field" required>
    </div>
    <div class="floating-button-container">
        <button class="floating-button btn-store" id="floating-button" onclick="writeReview()">NPS REVIEW</button>
    </div>

</div>
@endsection
@section('afterJs')
    <script src="{{ asset('stores-assets') }}/js/landing.js"></script>
    <script type="text/javascript">

        
        function togglePopup() {
            var popup = document.getElementById('popup');
            popup.classList.toggle('active');
        }

        function closePopup() {
            var popup = document.getElementById('popup');
            popup.classList.remove('active');
        }

        function writeReview() {
            window.location.href = 'yamamori/nps';
        }
   
        document.addEventListener('DOMContentLoaded', function() {
            var stickyButton = document.getElementById('stickyButton');

            window.addEventListener('scroll', function() {
                if (window.pageYOffset < stickyButton.offsetTop - window.innerHeight) {
                    stickyButton.style.position = 'fixed';
                } else {
                    stickyButton.style.position = 'relative';
                }
            });
        });

        function updateCount(type) {
            fetch('/update-count', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token for security
                },
                body: JSON.stringify({ type: type })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log('Count updated successfully');
                } else {
                    console.error('Failed to update count');
                }
            })
            .catch(error => console.error('Error:', error));
        }

</script>
@endsection



