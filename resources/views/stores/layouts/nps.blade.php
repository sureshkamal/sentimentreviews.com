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
    <link href="https://fonts.googleapis.com/css?family=Figtree:500,700,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Inter:500,700,400" rel="stylesheet">
    <!-- # CSS Plugins -->
    <!-- # Main Style Sheet -->
    <link rel="stylesheet" href="/wallet-bootstrap/css/style.css?{{time()}}">
    <link rel="stylesheet" href="/stores-assets/css/styles.css?{{time()}}">
</head>

<body class="nps">

<!-- /navigation -->
 @yield('content')

 @yield('beforeJs')
    <!-- # JS Plugins -->
    <script src="/wallet-bootstrap/plugins/jquery/jquery.min.js"></script>
    <script src="/wallet-bootstrap/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="//cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
 @yield('afterJs')

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
