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
                    <div class="bg-eclipse left">
                        <img src="/stores-assets/images/stores/yamamori-logo.png">
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
                    <div style="padding:25px">
                        <p class="font-inter store-description">
                            We’d love to hear how your experience was, it’ll take just a minute.
                        </p>
                        <ul style="padding: 0; list-style: none;"  class="button-lists">
                            <li><a href="#" class="btn-store icon-google">GOOGLE</a></li>
                            <li><a href="#" class="btn-store icon-open-table">OPEN TABLE</a></li>
                            <li><a href="#" class="btn-store icon-trip-advisor">TRIP ADVISOR</a></li>
                            <li><a href="#" class="btn-store">GET 15% OFF</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection
