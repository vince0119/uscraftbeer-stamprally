<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Global site tag (gtag.js) - Google Analytics --> 
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-D7D14BC884"></script> 
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-D7D14BC884');
        </script> 
        <!-- End Global site tag (gtag.js) - Google Analytics --> 
        <!-- Google Tag Manager --> 
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TLVS29Z');</script> 
        <!-- End Google Tag Manager --> 

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('user/css/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('user/css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('user/css/stamprally.css') }}">
        <!-- <link rel="stylesheet" href="{{ asset('user/css/stamprally_sub.css') }}"> -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,500,700&amp;subset=japanese" rel="stylesheet">
        <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet">

        <!-- Favicon -->
        <link rel="icon" href="https://uscraftbeer.jp/img/common/favicon.ico">
        <!-- Favicon for smartphone -->
        <link rel="apple-touch-icon" sizes="180x180" href="https://uscraftbeer.jp/img/common/apple-touch-icon.png">

        <!--Twitter Card-->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@acbe_japan" />
        <meta name="twitter:title" content="スタンプラリー｜アメリカン クラフトビア エクスペリエンス 2021" />
        <meta name="twitter:description" content="ビアスタイルスタンプを集めてアメリカンクラフトビールをGETしよう！" />
        <meta name="twitter:image" content="https://uscraftbeer.jp/img/common/acbe2021.jpg" />

        <!--OGP-->
        <meta property="og:title" content="スタンプラリー｜アメリカン クラフトビア エクスペリエンス 2021" />
        <meta property="og:description" content="ビアスタイルスタンプを集めてアメリカンクラフトビールをGETしよう！" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://uscraftbeer.jp/" />
        <meta property="og:image" content="https://uscraftbeer.jp/img/common/acbe2021.jpg" />
        <meta property="og:site_name" content="スタンプラリー｜アメリカン クラフトビア エクスペリエンス 2021" />

        <!-- Scripts -->
        @routes
        <script src="{{ route('messages') }}?t={{ filemtime(resource_path('/lang/ja/validation.php')) }}"></script>
        <script src="{{ mix('dist/js/app.js') }}" defer></script>
        <script src="{{ asset('user/js/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('user/js/common.js') }}"></script>
    </head>
    <body>
        @inertia

        @env ('local')
            <script src="http://localhost:8080/js/bundle.js"></script>
        @endenv
    </body>
</html>
