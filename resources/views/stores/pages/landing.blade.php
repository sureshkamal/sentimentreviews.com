@extends('stores.layouts.app', [
    'class' => 'landing-page',
    'elementActive' => ''
])
@section('content')
<div class="container">
    <div  style="background: url('/stores-assets/images/stores/yamamori.png'), lightgray 50% / cover no-repeat;">
         <div class="bg-landing bg-store-gradient" style="padding:200px 8px 8px">
            <div class="row" >
                <div class="col-sm-12">
                    <div class="left">
                        <img src="/stores-assets/images/stores/yamamori-logo1.png" style="width:95px">
                    </div>
                    <div class="left store-title">Yamamori</div>
                    <div class="clear"></div>
                </div>
                 <!-- <div class="col-sm-8">
                    <h1 style="margin-top:35px; margin-left:4px">Yamamori</h1>
                </div> -->
            </div>  
            <div class="row">
                <div class="col-sm-12">
                    <div style="padding:25px 25px 0">
                        <p class="font-inter store-description">
                            We’d love to hear how your experience was, it’ll take just a minute.
                        </p>
                        <ul style="padding: 0; list-style: none;"  class="button-lists">
                            <li><a href="https://g.page/r/CXxHmVISMHNuEB0/review" class="btn-store icon-google">GOOGLE</a></li>
                            <li><a href="#" class="btn-store icon-open-table">OPEN TABLE</a></li>
                            <li><a href="#" class="btn-store icon-trip-advisor">TRIP ADVISOR</a></li>
                            <li><a href="#" class="btn-store">GET 15% OFF</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="social-links">
                    <a href="https://facebook.com"><img src="/stores-assets/images/icons/facebook.png"> </a>
                    <a href="https://instagram.com"><img src="/stores-assets/images/icons/instagram.png"> </a>
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
