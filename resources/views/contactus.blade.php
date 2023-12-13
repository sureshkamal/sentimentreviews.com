<!DOCTYPE html>

<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>Contact Us - {{ __('Sentiment Reviews') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="keywords" content="restaurants, reviews, online reviews, hospitality, best restaurants in ireland, best restaurants in dublin, customer service, loyalty, brands">
    <meta name="description" content="Sentiment Reviews is the must have hospitality tool for getting online reviews, key valuable insights & boosting your brand loyalty.We make your customers your raving fans.Our unique & innovative solution, powered by our dashboard we help your business to have a competitive advantage over your competitors.">
    <meta name="author" content="sentimentreviews">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
  
  <!-- theme meta -->
  <meta name="theme-name" content="sentimentreviews" />

    <!-- # Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:500,700,400" rel="stylesheet">
    <!-- # CSS Plugins -->
    <link rel="stylesheet" href="/wallet-bootstrap/plugins/slick/slick.css">
    <link rel="stylesheet" href="/wallet-bootstrap/plugins/font-awesome/fontawesome.min.css">
    <link rel="stylesheet" href="/wallet-bootstrap/plugins/font-awesome/brands.css">
    <link rel="stylesheet" href="/wallet-bootstrap/plugins/font-awesome/solid.css">

    <!-- # Main Style Sheet -->
    <link rel="stylesheet" href="/wallet-bootstrap/css/style.css?{{time()}}">
</head>

<body>

<!-- navigation -->
 @include('frontend.layouts.navbars.nav')

<!-- /navigation -->

<div class="modal applyLoanModal fade" id="applyLoan" tabindex="-1" aria-labelledby="applyLoanLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h4 class="modal-title" id="exampleModalLabel">Login</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#!" method="post">
          <div class="row">
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_amount" class="form-label">Name</label>
                <input type="number" class="form-control shadow-none" id="loan_amount" placeholder="Name">
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_how_long_for" class="form-label">Phone number</label>
                <input type="number" class="form-control shadow-none" id="loan_how_long_for" placeholder="ex: 12">
              </div>
            </div>
            <div class="col-lg-12 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_repayment" class="form-label">Address</label>
                <input type="number" class="form-control shadow-none" id="loan_repayment" disabled>
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_full_name" class="form-label">Full Name</label>
                <input type="text" class="form-control shadow-none" id="loan_full_name">
              </div>
            </div>
            <div class="col-lg-6 mb-4 pb-2">
              <div class="form-group">
                <label for="loan_email_address" class="form-label">Email address</label>
                <input type="email" class="form-control shadow-none" id="loan_email_address">
              </div>
            </div>
            <div class="col-lg-12">
              <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<section class="position-relative overflow-hidden" id="banner">
  <div class="container">
    <div class="row align-items-center justify-content-center">
        <div class="col-sm-12">
            <div style="
                background: url('/assets/images/contactus/b2.jpeg'); 
                height: 500px;">
            </div>
        </div>
    </div>
  </div>
</section>


 @include('frontend.layouts.includes.footer')


<!-- # JS Plugins -->
<script src="/wallet-bootstrap/plugins/jquery/jquery.min.js"></script>
<script src="/wallet-bootstrap/plugins/bootstrap/bootstrap.min.js"></script>
<script src="/wallet-bootstrap/plugins/slick/slick.min.js"></script>
<script src="/wallet-bootstrap/plugins/scrollmenu/scrollmenu.min.js"></script>

<!-- Main Script -->
<script src="/wallet-bootstrap/js/script.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51633555-2"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4PY250HYDC"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YY2X6CPM2G"></script>

<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-51633555-2');
  gtag('config', 'G-4PY250HYDC');
  gtag('config', 'G-YY2X6CPM2G');

</script>

</body>
</html>
