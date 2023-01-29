<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Primary Meta Tags -->
    <meta name="title" content="Law Firm | M. Andrean Saefudin & Co">
    <meta name="description" content=" --- Corporate and Litigation Lawyer ---">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:title" content="Law Firm | M. Andrean Saefudin & Co">
    <meta property="og:description" content=" --- Corporate and Litigation Lawyer ---">
    <meta property="og:image" content="{{ asset('gambar/logo.png') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://metatags.io/">
    <meta property="twitter:title" content="Law Firm | M. Andrean Saefudin & Co">
    <meta property="twitter:description" content=" --- Corporate and Litigation Lawyer ---">
    <meta property="twitter:image" content="{{ asset('gambar/logo.png') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/font-icons.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&amp;family=Merriweather:wght@400;700&amp;family=Material+Icons+Outlined&amp;family=Material+Icons+Two+Tone&amp;display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
        .navbar img{
            width: 200px;
        }
        .navbar .nav-item{
            padding-left: 16px;
            font-weight: 600;
        }

        .text__primary{
            color: #9c8a49;
        }

        .fancy-title{
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 2rem;
        }

        .title-center::before {
            display: block;
        }

        .title-border::before, .title-border::after {
            border-top-width: 1px;
            border-top-style: solid;
        }

        .fancy-title::before {
            margin-right: 0.75rem;
        }

        .fancy-title::before, .fancy-title::after {
            content: '';
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%;
            height: 0;
            border-top: 3px solid #E5E5E5;
        }
        .fancy-title::after{
            margin-left: 0.75rem;
        }
        .navbar-light .navbar-nav .nav-link.active, .navbar-light .navbar-nav .show>.nav-link{
            color: #ba9f40;
        }
    </style>
    @stack('addStyle')
    <title>@yield('title', 'Law Firm | M. Andrean Saefudin & Co')</title>
  </head>
  <body>
    @include('includes.navbar')

    @yield('content')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('addScript')

    @if (Session::has('errorMsg'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Ups!!',
                text: "{{ Session::get('errorMsg') }}"
            })
        </script>
    @endif

    @if (Session::has('successMsg'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: "{{ Session::get('successMsg') }}"
            })
        </script>
    @endif
  </body>
</html>
