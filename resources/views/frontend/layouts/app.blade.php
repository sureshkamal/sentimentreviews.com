<!DOCTYPE html>

<html lang="en-us">

<head>
    <meta charset="utf-8">
    <title>{{ __('Sentiment Reviews') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="description" content="{{ __('Sentiment Reviews') }}">
    <meta name="author" content="sentimentreviews">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
  
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

<section class="banner bg-light-pomegranate position-relative overflow-hidden" id="banner">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="block text-center text-lg-start pe-0 pe-xl-5">
          <h1 class="text-capitalize mb-4">Your brand's online reputation is crucial to its success</h1>
          <p class="mb-4">It is a long established fact that a reader will be distracted by the <br> readable content  of a page when</p> <a type="button"
            class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#applyLoan">Business Login<span style="font-size: 14px;" class="ms-2 fas fa-arrow-right"></span></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ps-lg-5 text-center">
          <img loading="lazy" decoding="async"
            src="/wallet-bootstrap/images/banner/banner1.png"
            alt="banner image" class="w-100">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="aboutus">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-title pt-4">
                  <h1>What can SentiBoard do for you?</h1>
                </div>
            </div>
            <div class="col-md-2">
                
            </div>
            <div class="col-md-5">
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when lookin.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="aboutus-card bg-black">
                    <div class="aboutus-card-number">
                        86<span>%</span>
                    </div>  
                    <div class="aboutus-card-underline"></div>
                    <p>
                        People would pay more for services from a company with higher ratings & reviews
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="aboutus-card bg-black">
                    <div class="aboutus-card-number">
                        90<span>%</span>
                    </div>  
                    <div class="aboutus-card-underline"></div>
                    <p>
                        Would not engage with a business that has a start rating of three or lower
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="aboutus-card bg-black">
                    <div class="aboutus-card-number">
                        74<span>%</span>
                    </div>  
                    <div class="aboutus-card-underline"></div>
                    <p>
                        Customers depend on social media to guide their purchases
                    </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="aboutus-card bg-pomegranate">
                    <div class="aboutus-header">
                       <h3>Light up your <br> profiles</h3>
                    </div>  
                    <div class="aboutus-card-underline"></div>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when lookin.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center" style="padding: 60px 0;">
                <h1>What can SentiBoard do for you?</h1>
                <p>It is a long established fact that a reader will be distracted</p>        
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bg-pomegranate" style="border-radius: 20px;">
                   <div class="row">
                        <div class="col-md-6" style="padding: 50px; position: relative;">
                            <div class="stroke-number">
                                01
                            </div>
                            <p style="
                                color: #fff;
                                font-size: 25px;
                                margin-top: 60px;
                            ">
                                We provide an instant, on the spot innovative solution where feedback are collected and businesses get insight to act  upon and  be better immediately
                            </p>
                            <ul class="dotIcons" style="display: none;">
                                <li><a href="#"class="active" >.</a> </li>
                                <li><a href="#">.</a> </li>
                                <li><a href="#">.</a> </li>
                                <li><a href="#">.</a> </li>
                                <li><a href="#">.</a> </li>
                            </ul>
                            <div class="dotIcons">
                                <img src="/wallet-bootstrap/images/home/3.png" style="
                                    width: 300px;
                                    position: absolute;
                                    bottom: 20px;
                                ">
                            </div>
                        </div>
                        <div class="col-md-6" style=""> 
                            <img src="/wallet-bootstrap/images/home/1.png">
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>

<section class="howitsworks" id="howitsworks">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" style="padding: 60px 0;">
                <h1>How its works</h1>
                <p>It is a long established fact that a reader will be distracted</p>        
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="/wallet-bootstrap/images/home/4.png">
            </div>
        </div>
        <div class="row" style="margin-top:80px"> 
            <div class="col-md-6" style="position: relative;">
                <h2 style="margin-top:40px">Step name One</h2>
                <p style="
                    margin-top: 25px;
                    font-size: 17px;
                ">
                     It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English
                </p>
                <img src="/wallet-bootstrap/images/home/5.png"style="
                    position: absolute;
                    bottom: 1px;
                    width: 110px;
                ">
            </div>
            <div class="col-md-6">
                <img src="/wallet-bootstrap/images/home/2.png">
            </div>
        </div>
    </div>
</section>

<section class="testimonials" id="testimonials" style="margin-top:100px">
    <div class="container" style="
        background: url(&quot;/wallet-bootstrap/images/home/6.png&quot;);
        border-radius: 20px;
    ">
        <div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-7">
                    <h2 style="
                        margin-top: 65px;
                        font-size: 50px;
                        color: #fff;
                    ">
                        Testimonials    
                    </h2>
                    <p style="
                        color: #fff;
                        margin-top: 84px;
                    ">
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.
                    </p>
                    <div class="row" style="
                        margin: 100px 0 20px;
                    ">
                        <div class="col-md-2">
                            <img src="/wallet-bootstrap/images/home/7.png" style="width: 100px;">
                        </div>
                        <div class="col-md-10">
                            <h3 style="color: #fff;">Darlene J. BooksWest Chester, PA</h3>
                            <h4 style="color: #fff;">West Chester, PA</h4>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-1">
                </div>
                <div class="col-md-3">
                    <div>
                        <img src="/wallet-bootstrap/images/home/quote@1x.png" style="
                        padding: 26px;
                        width: 100px;
                        margin-top: 60px;
                        background: #000;
                        border-radius: 50px;
                    ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section faq" id="faq" style="
    background: #000;
    margin: 120px 0;
    color: #fff;
">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 style="
                    color: #fff;
                    font-size: 54px;
                ">
                    Commonly asked questions
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="accordion shadow rounded py-5 px-0 px-lg-4 position-relative" id="accordionFAQ">
                    <div class="accordion-item p-1 mb-2">
                        <h2 class="accordion-header accordion-button h5 border-0 active"
                          id="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" aria-expanded="true"
                          aria-controls="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9">It is a long established fact that a reader will be distracted?
                        </h2>
                    <div id="collapse-ebd23e34fd2ed58299b32c03c521feb0b02f19d9"
                      class="accordion-collapse collapse border-0 show"
                      aria-labelledby="heading-ebd23e34fd2ed58299b32c03c521feb0b02f19d9" data-bs-parent="#accordionFAQ">
                      <div class="accordion-body py-0 content">The difference between and premium product consist number of
                        components, plugins, page in each. The Free versions contain only a few elements and pages that.</div>
                    </div>
                    </div>
                    <div class="accordion-item p-1 mb-2">
                        <h2 class="accordion-header accordion-button h5 border-0 "
                          id="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" aria-expanded="false"
                          aria-controls="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1">It is a long established fact that a reader will be distracted?
                        </h2>
                        <div id="collapse-a443e01b4db47b3f4a1267e10594576d52730ec1" class="accordion-collapse collapse border-0 "
                          aria-labelledby="heading-a443e01b4db47b3f4a1267e10594576d52730ec1" data-bs-parent="#accordionFAQ">
                          <div class="accordion-body py-0 content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English..</div>
                        </div>
                    </div>
                    <div class="accordion-item p-1 mb-2">
                        <h2 class="accordion-header accordion-button h5 border-0 "
                          id="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd" aria-expanded="false"
                          aria-controls="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd">It is a long established fact that a reader will be distracted?
                        </h2>
                        <div id="collapse-4b82be4be873c8ad699fa97049523ac86b67a8bd" class="accordion-collapse collapse border-0 "
                          aria-labelledby="heading-4b82be4be873c8ad699fa97049523ac86b67a8bd" data-bs-parent="#accordionFAQ">
                          <div class="accordion-body py-0 content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English..</div>
                        </div>
                    </div>
                    <div class="accordion-item p-1 mb-2">
                        <h2 class="accordion-header accordion-button h5 border-0 "
                          id="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" aria-expanded="false"
                          aria-controls="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3">It is a long established fact that a reader will be distracted?
                        </h2>
                        <div id="collapse-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" class="accordion-collapse collapse border-0 "
                          aria-labelledby="heading-3e13e9676a9cd6a6f8bfbe6e1e9fc0881ef247b3" data-bs-parent="#accordionFAQ">
                          <div class="accordion-body py-0 content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English..</div>
                        </div>
                    </div>
                    <div class="accordion-item p-1 mb-2">
                        <h2 class="accordion-header accordion-button h5 border-0 "
                          id="heading-0c2f829793a1f0562fea97120357dd2d43319164" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-0c2f829793a1f0562fea97120357dd2d43319164" aria-expanded="false"
                          aria-controls="collapse-0c2f829793a1f0562fea97120357dd2d43319164">It is a long established fact that a reader will be distracted?
                        </h2>
                        <div id="collapse-0c2f829793a1f0562fea97120357dd2d43319164" class="accordion-collapse collapse border-0 "
                          aria-labelledby="heading-0c2f829793a1f0562fea97120357dd2d43319164" data-bs-parent="#accordionFAQ">
                          <div class="accordion-body py-0 content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English..</div>
                        </div>
                    </div>
                    <div class="accordion-item p-1 mb-2">
                        <h2 class="accordion-header accordion-button h5 border-0 "
                          id="heading-8fe6730e26db16f15763887c30a614caa075f518" type="button" data-bs-toggle="collapse"
                          data-bs-target="#collapse-8fe6730e26db16f15763887c30a614caa075f518" aria-expanded="false"
                          aria-controls="collapse-8fe6730e26db16f15763887c30a614caa075f518">It is a long established fact that a reader will be distracted?
                        </h2>
                        <div id="collapse-8fe6730e26db16f15763887c30a614caa075f518" class="accordion-collapse collapse border-0 "
                          aria-labelledby="heading-8fe6730e26db16f15763887c30a614caa075f518" data-bs-parent="#accordionFAQ">
                          <div class="accordion-body py-0 content">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English..</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
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
