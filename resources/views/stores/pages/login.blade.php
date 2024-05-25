@extends('stores.layouts.app', [
    'class' => 'landing-page',
    'elementActive' => ''
])
@section('content')
<div class="container" id="stores-landing">
    <div  style="background: url('{{ asset($store->branch_bg1) }}'), lightgray 50% / cover no-repeat;">
         <div class="bg-landing bg-store-gradient">
            <div class="bg-dark">
                <div class="row pt-3" >
                    <div class="col-sm-12">
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
                            <!-- <img src="{{ $store->image }}" class="store-logo" > -->
                            <!-- <img src="/stores-assets/images/stores/yamamori-logo3.png" class="store-logo" > -->
                        </div>
                        <div>
                            <h4 class="store-heading revLandHeading">Unlock Your</br>Rewards</h4>
                            <p class="font-inter store-description" >
                                Login to continue or register here
                            </p>
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
                                <p class="text-center"><a href="" class="font-inter store-description text-center">Forgot password?</a></p>
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
        </div>

    </div>
   
</div>

@endsection
@section('afterJs')
    <script src="{{ asset('stores-assets') }}/js/landing.js"></script>
    <script type="text/javascript">
      

</script>
@endsection



