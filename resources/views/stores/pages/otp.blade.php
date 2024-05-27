@extends('stores.layouts.app', [
    'class' => 'landing-page',
    'elementActive' => ''
])
@section('content')
<div class="container" id="stores-landing">
    <!-- <div  style="background: url('{{ asset($store->branch_bg1) }}'), lightgray 50% / contain no-repeat;"> -->
            <div class="bg-dark">
                <div class="row pt-3" >
                    <div class="col-sm-12">
                        
                        <div>
                            <h4 class="store-heading revLandHeading">Verification code</h4>
                            <p class="font-inter store-description" >
                                We have sent you a verification code to your email address. Please enter the code to continue.
                            </p>
                            <form>
                            <input type="number" name="digit1" />
                            <input type="number" name="digit2" />
                            <input type="number" name="digit3" />
                            <input type="number" name="digit4" />
                            </form>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- <div class="col-sm-8">
                        <h1 style="margin-top:35px; margin-left:4px">Yamamori</h1>
                    </div> -->
                </div>  
                <div class="row">
                    <div class="col-sm-12">
                        <div style="padding:0 25px">
                            <form action="/signin" method="post">
                                @csrf
                                <input type="email" name="email" placeholder="Enter email address" />
                                <input type="password" name="password" placeholder="Password" />
                                <input type="hidden" name="slug" value="{{$store->slug}}" />
                                <button class="btn-store" id="stickyButton" onclick="togglePopup()">Login</button>
                                <!-- <p class="text-center"><a href="" class="font-inter store-description text-center">Forgot password?</a></p> -->
                            </form>
                        </div>
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

               
            </div>
        

    <!-- </div> -->
   
</div>

@endsection
@section('afterJs')
    <script src="{{ asset('stores-assets') }}/js/landing.js"></script>
    <script type="text/javascript">
      

</script>
@endsection



