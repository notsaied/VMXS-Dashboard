        <title>@yield('page_name',env('APP_NAME'))</title>
        <meta charset="utf-8">
        <meta name="description" content="Check out all the features of the Start admin panel. A large number of templates, components and widgets.">
        <meta name="keywords" content="Start, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard, html admin theme, html template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="article">
        <meta property="og:title" content="@yield('page_name',env('APP_NAME'))">
        <meta property="og:url" content="{{env('APP_URL')}}">
        <meta property="og:site_name" content="@yield('page_name',env('APP_NAME'))">
        <!-- <link rel="shortcut icon" href="https://preview.keenthemes.com/start-html-pro/assets/media/logos/favicon.ico"> -->
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700">
        <!--end::Fonts-->
        <!--begin::Page Vendor Stylesheets(used by this page)-->
        <link href="{{asset('vmxs/css/leaflet.bundle.css')}}" rel="stylesheet" type="text/css">
        @yield('css_custom')
        <!--end::Page Vendor Stylesheets-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="{{asset('vmxs/css/ele.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('vmxs/css/plugins.bundle.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('vmxs/css/style.bundle.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('vmxs/css/style.bundle.css')}}" rel="stylesheet" type="text/css">
        <!--end::Global Stylesheets Bundle-->
        <script src="{{asset('vmxs/js/lib/jq.js')}}" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>