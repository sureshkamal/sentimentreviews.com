@extends('stores.layouts.app', [
    'class' => 'landing-page',
    'elementActive' => ''
])
@section('content')
<div class="container">
    <div  style="background: url('/stores-assets/images/stores/yamamori.png'), lightgray 50% / cover no-repeat;">
         <div class="bg-landing bg-store-gradient" style="padding:200px 8px 8px">
            <div class="row" >
                <div class="col-sm-4">
                    <div class="bg-eclipse">
                        <img src="/stores-assets/images/stores/yamamori-logo.png">
                    </div>
                </div>
                 <div class="col-sm-8">
                    <h1 style="margin-top:35px; margin-left:4px">Yamamori</h1>
                </div>
            </div>  
            <div class="row">
                <div class="col-sm-12">
                    <div style="padding:25px">
                        <p class="font-inter store-description">
                            We’d love to hear how your experience was, it’ll take just a minute.
                        </p>
                        <ul style="padding: 0; list-style: none;">
                            <li><a href="#" class="btn-store">GOOGLE</a></li>
                            <li><a href="#" class="btn-store">OPEN TABLE</a></li>
                            <li><a href="#" class="btn-store">TRIP ADVISOR</a></li>
                            <li><a href="#" class="btn-store">GET 15% OFF</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
@endsection
