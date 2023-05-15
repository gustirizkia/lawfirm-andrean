<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    @stack('addMeta')

    <!-- Stylesheets
	============================================= -->
    
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="/style.css" type="text/css" />
    <link rel="stylesheet" href="/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="/css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/custom.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
	============================================= -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: justify;
        }
    
        .navbar img {
            width: 200px;
        }
    
        .navbar .nav-item {
            padding-left: 16px;
            font-weight: 600;
        }
    
        .text__primary {
            color: #003366;
        }
    
        .btn__primary {
            background: #003366;
            color: white;
        }

       .bg__primary{
            background-color: #003366;
        }
    
        .fancy-title {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
        }
    
        .fancy-title .text {
            margin-bottom: unset;
            margin-top: unset;
        }
    
        .title-center::before {
            display: block;
        }
    
        .title-border::before,
        .title-border::after {
            border-top-width: 1px;
            border-top-style: solid;
        }
    
        .fancy-title::before {
            margin-right: 0.75rem;
        }
    
        .fancy-title::before,
        .fancy-title::after {
            content: '';
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
            height: 0;
            border-top: 3px solid #E5E5E5;
        }
    
        .fancy-title::after {
            margin-left: 0.75rem;
        }
    
        .navbar-light .navbar-nav .nav-link.active,
        .navbar-light .navbar-nav .show>.nav-link {
            color: #ba9f40;
        }
    
        .social-facebook {
            background-color: #39599f;
        }
    
        .social-whatsapp {
            background-color: #2eb206;
        }
    
        .social-twitter {
            background-color: #55acee;
        }
    
        .social-instagram {
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
        }
    
        .medsos {
            display: inline-block;
            line-height: 36px;
            width: 36px;
            height: 36px;
            color: #fff;
            text-align: center;
            margin-right: 5px;
            margin-bottom: 3px;
            font-size: 12px;
            border-radius: 5px;
        }
    
        .medsos:focus,
        .medsos:hover {
            color: #fff;
            opacity: .9;
        }
    
        .img__artikel {
            border-radius: 4px;
        }
    
        .widget-title {
            background: linear-gradient(120deg, #9c8a49 35%, #60552d 74%);
            font-family: source sans pro, open sans, sans-serif;
            color: #fff !important;
            padding: 0 9px;
            line-height: 28px;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: .04em;
            font-weight: 700;
            border-radius: 5px;
        }
    
        a {
            text-decoration: none;
            color: unset;
        }
        .content-wrap{
            padding-top: 0 !important;
        }
    </style>
    @stack('addStyle')
    <title>@yield('title', 'Law Firm | M. Andrean Saefudin & Co')</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">
        @include('includes.navbar')
        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class=" clearfix">
                    @yield('content')
                </div>

            </div>
        </section>
        @include('includes.bot-footer')
    </div>
    <!-- #content end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>

    <!-- JavaScripts
	============================================= -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> --}}
        
    </script>
    <script src="/js/jquery.js"></script>
    <script src="/js/plugins.min.js"></script>

    <!-- Footer Scripts 
	============================================= -->
    <script src="/js/functions.js"></script>

    
</body>

</html>