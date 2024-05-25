<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/admin/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Sentiment</title>
    <!-- <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png"> -->
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="/admin/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="/admin/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="/admin/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="/admin/css/examples.css" rel="stylesheet">
    <link href="/admin/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <!-- <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg> -->
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="/admin/dashboard">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <!-- <li class="nav-title">Theme</li> -->
        <li class="nav-item"><a class="nav-link" href="stores">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
            </svg> Stores
          </a></li>
        <li class="nav-item"><a class="nav-link" href="add-store">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
            </svg> Add Store
          </a></li>
        
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      
      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
         
          <div class="row pt-4">
            <div class="col-md-12">
              <div class="card mb-4">
                <div class="card-header">Add Branch</div>
                <div class="card-body">
                  <!-- /.row--><br>
                  <form class="row g-3 needs-validation" novalidate="" action="/admin/add-store" method="POST">
                          @csrf
                          <div class="col-md-4">
                            <label class="form-label" for="branchname">Branch name</label>
                            <input class="form-control" id="validationCustom01" name="branchname" type="text" required>
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="email">Branch admin email</label>
                            <input class="form-control" name="email" type="text" placeholder="Enter Email" required>
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="password">Branch admin password</label>
                            <input class="form-control" name="password" type="password" placeholder="Password" required>
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                          </div>

                          <div class="col-md-4">
                            <label class="form-label" for="logo">Brand Logo</label>
                            <br>
                            <input type="file" id="logo" name="logo">
                            <!-- <input class="form-control" id="validationCustom01" name="storename" type="text" required=""> -->
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="bgImg1">Background Image1</label>
                            <br>
                            <input type="file" id="bgImg1" name="bgImg1">
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="bgImg2">Background Image2</label>
                            <br>
                            <input type="file" id="bgImg2" name="bgImg2">
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="description">Description</label>
                            <input class="form-control" name="description" type="text" placeholder="Description" required="">
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                          </div>
                          <div class="col-md-4">
                            <label class="form-label" for="nps">Show NPS Questionnaire</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="nps" name="nps">
                                <!-- <label class="form-check-label" for="active">ON</label> -->
                            </div>
                            <br>         
                            <!-- <div class="valid-feedback">Looks good!</div> -->
                          </div>
                         
                          <div class="col-12">
                            <button class="btn btn-primary" type="submit">Submit</button>
                          </div>

                        </form>
                </div>
              </div>
            </div>
            <!-- /.col-->
          </div>
          <!-- /.row-->
        </div>
      </div>
      <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2023 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/docs/">CoreUI UI Components</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="/admin/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="/admin/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="/admin/vendors/chart.js/js/chart.min.js"></script>
    <script src="/admin/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="/admin/vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="/admin/js/main.js"></script>
    <script>
    </script>

  </body>
</html>