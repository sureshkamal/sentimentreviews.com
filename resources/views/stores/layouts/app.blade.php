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

<body class="stores">

<!-- /navigation -->
 @yield('content')


    <!-- # JS Plugins -->
    <script src="/wallet-bootstrap/plugins/jquery/jquery.min.js"></script>
    <script src="/wallet-bootstrap/plugins/bootstrap/bootstrap.min.js"></script>


</body>
</html>
