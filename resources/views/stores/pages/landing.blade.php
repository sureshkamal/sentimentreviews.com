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
                            <!-- <li><a href="#" class="btn-store" v-on:click="comingsoonalert()">REWARDS</a></li> -->
                        </ul>
                    </div>
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
   
</div>
@endsection
@section('afterJs')
    <script src="{{ asset('stores-assets') }}/js/landing.js"></script>
    @endsection



