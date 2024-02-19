@extends('stores.layouts.nps', [
    'class' => 'landing-page',
    'elementActive' => ''
])
@section('content')
<style type="text/css">
    body{
        background: #000;
        -webkit-tap-highlight-color: transparent;
    }

    .nps .container {
        width: 100%;
        max-width: 720px;
        margin: 0px auto;
    }
    .bgBlack{
        background: #000;
        color: #fff;
        width: 100%;
    }
    .buttonOrange{
        background: rgba(255, 51, 0,1);
        color: #fff;
        padding: 5px 20px;
        font-size: 18px;
        border-radius: 4px;
        border: none;
        font-weight: bold;
    }
    #nps-landing{
        padding: 0;
    }
    #nps-landing img{
        max-width: 350px;
        margin: 40px 0;
    }
  

   
  </style>

<div id="myProgress">
  <div id="myBar"></div>
</div>
<div class="container bgBlack" id="nps-landing">
    <div class="text-center">
        <img src="/stores-assets/images/icons/thank-you.svg" width="120">
        <p>Thanks for your feedback. Please check the mail to view the reward you earned!!</p>
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