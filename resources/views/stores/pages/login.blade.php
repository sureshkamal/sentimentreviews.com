@extends('stores.layouts.app', [
    'class' => 'landing-page',
    'elementActive' => ''
])
@section('content')
<div class="container" id="stores-landing">
    <div  style="background: url('{{ asset($store->branch_bg1) }}'), lightgray 50% / contain no-repeat;background-size: contain;">
         <div class="bg-landing bg-store-gradient">
            <div class="bg-dark">
                <div class="pt-3" >
                    <div>
                    @if($store->branch_logo)
                        @if($store->slug == "gbk")
                        <img src="{{ asset($store->branch_logo) }}" class="store-logo" alt="{{ $store->branch_name }} Logo" style="background-color: #fff; width: 55%;">
                        @else
                        <img src="{{ asset($store->branch_logo) }}" class="store-logo" alt="{{ $store->branch_name }} Logo" >
                        @endif
                    
                    @else
                    <p>No store logo available.</p>
                    @endif
                        <!-- <img src="{{ $store->image }}" class="store-logo" > -->
                        <!-- <img src="/stores-assets/images/stores/yamamori-logo3.png" class="store-logo" > -->
                    </div>
                    <div>
                        <h4 class="store-heading revLandHeading">Unlock Your</br>Rewards</h4>
                        <p class="font-inter store-description" >
                            Share your experience!</br>
                            Leave us a review. Just enter your email to begin.
                        </p>
                    </div>
                </div>  
                        <div style="padding:0 25px">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <!-- <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="error-list">{{ $error }}</li>
                                        @endforeach
                                    </ul> -->
                                    @error('general')
                                        <div class="error">{{ $message }}</div>
                                    @enderror

                                </div> 
                            @endif
                            <form action="/signin" method="post">
                                @csrf
                                <input type="email" name="email" placeholder="Enter email address" required />
                                @error('email')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                                <!-- <input type="password" name="password" placeholder="Password" /> -->
                                <div class="password-container">
                                    <input type="password" id="password" name="password" placeholder="Password" required>
                                    <span class="toggle-password">
                                        <i class="fa fa-eye-slash" id="togglePasswordIcon"></i>
                                    </span>
                                </div>
                                @error('password')
                                    <div class="error">{{ $message }}</div>
                                @enderror
                                <input type="hidden" name="slug" value="{{$store->slug}}" />
                                <button class="btn-store" id="stickyButton" type="submit" >Review Now</button>
                                <!-- <p class="text-center"><a href="" class="font-inter store-description text-center">Forgot password?</a></p> -->
                            </form>
                            
                        </div>

                    <div class="">
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
        </div>

    </div>
   
</div>

@endsection
@section('afterJs')
    <script src="{{ asset('stores-assets') }}/js/landing.js"></script>
    <script type="text/javascript">
        document.querySelector('.toggle-password').addEventListener('click', function () {
            var passwordField = document.getElementById('password');
            var togglePasswordIcon = document.getElementById('togglePasswordIcon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                togglePasswordIcon.classList.remove('fa-eye-slash');
                togglePasswordIcon.classList.add('fa-eye');
            } else {
                passwordField.type = 'password';
                togglePasswordIcon.classList.remove('fa-eye');
                togglePasswordIcon.classList.add('fa-eye-slash');
            }
        });
    </script>
@endsection



