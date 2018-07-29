    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Mobile Web-app fullscreen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title>@yield('title') | Peri - Hotel, Alaçatı</title>
    <!--CSS styles-->
    <link rel="stylesheet" media="all" href="{{ asset('public/css/bootstrap.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('public/css/animate.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('public/css/font-awesome.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('public/css/linear-icons.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('public/css/hotel-icons.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('public/css/magnific-popup.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('public/css/owl.carousel.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('public/css/datepicker.css') }}" />
    <link rel="stylesheet" media="all" href="{{ asset('public/css/theme.css') }}" />

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&amp;subset=latin-ext" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121335591-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-121335591-1');
    </script>
    
    