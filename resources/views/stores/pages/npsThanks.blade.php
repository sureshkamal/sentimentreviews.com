@extends('stores.layouts.app', [
    'class' => 'landing-page',
    'elementActive' => ''
])
@section('content')
<style type="text/css">
    .bgBlack{
        color: #fff;
    }
    .bg-landing{
        height: auto;
    }
</style>
<div class="container" id="stores-landing">
    <div  style="background: url('/stores-assets/images/stores/yamamori.png'), lightgray 50% / cover no-repeat;">
         <div class="bg-landing bg-store-gradient pb-5" style="padding:150px 8px 8px">
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

<div class="container bgBlack mt-5" id="nps-landing">
    <div class="text-center ps-5 pe-5">
        <img src="/stores-assets/images/icons/thank-you.svg" width="120">
        <p>Thanks for your feedback. Please check the mail to view the reward you earned!!</p>
    </div>
   
</div>

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



@endsection
@section('afterJs')
    <script src="{{ asset('stores-assets') }}/js/landing.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<script type="text/javascript">

    

</script>