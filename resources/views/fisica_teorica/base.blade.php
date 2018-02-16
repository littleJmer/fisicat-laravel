<?php $date = date('YmdGis'); ?>
<!DOCTYPE html lang="es">
<html>
    <head>
        <meta charset="utf-8">
        <meta name="theme-color" content="#2A4C90">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="shortcut icon" href="" type="image/vnd.microsoft.icon" />
        <meta name="description" content="" />
        <link rel="canonical" href="" />
        <link rel="shortlink" href="" />
        <meta property="og:site_name" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:title" content="" />
        <meta property="og:image" content="" />
        <meta property="og:image:secure_url" content="" />
        <meta property="og:image:type" content="image/png" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <title>@yield('title')</title>        

        <!-- google fonts -->
        <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" /> -->
    
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
        <!-- css files -->
        <link rel="stylesheet" href="{{ asset('lib/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('lib/owl.carousel.2.1.0/assets/owl.carousel.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('lib/owl.carousel.2.1.0/assets/owl.theme.default.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/styles.css') . '?_' . $date  }}" />
        <link rel="stylesheet" href="{{ asset('css/responsive.css') . '?_' . $date  }}" />
        <link rel="stylesheet" href="{{ asset('lib/font-awesome-4.7.0/css/font-awesome.css') . '?_' . $date  }}" />
        @yield('extra_css')
    </head>
    <body>
        @include('fisica_teorica/header')
        <div id="wrapper">
            @yield('content')
        </div>
        @include('fisica_teorica/footer')            
        <!-- js files -->            
            <!-- cdn -->
            <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
            <!-- local -->
            <script src="{{ asset('lib/jquery1.12.4/jquery1.12.4.min.js') }}"></script>
            <script src="{{ asset('lib/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('lib/owl.carousel.2.1.0/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('js/main.js') . '?_' . $date }}"></script>

            <!-- cdn -->
            <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

            @yield('extra_js')
    </body>
</html>
