<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head lang="{{ LaravelLocalization::setLocale() }}">
    <meta charset="UTF-8">
    @section('meta')
        <meta name="description" content="@setting('core::site-description')"/>
    @show
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title')@setting('core::site-name')@show</title>
    @if(isset($alternate))
        @foreach($alternate as $alternateLocale=>$alternateSlug)
            <link rel="alternate" hreflang="{{$alternateLocale}}" href="{{url($alternateLocale.'/'.$alternateSlug)}}">
        @endforeach
    @endif
    <link rel="canonical" href="{{url()->current()}}" />
    <link rel="shortcut icon" href="{{ Theme::url('favicon.ico') }}">

    {!! Theme::style('css/main.css') !!}
    @stack('css-stack')

    <base href="{{ route('homepage') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta charset="utf-8" />
    <meta name="description" content="Hamcore Amateur Radio Development System" />
    <meta name="generator" content="laravel - Open Source Content Management" />
    <title>DigiQRP</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('/safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- <link href="/index.php?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" /> -->
    <!-- <link href="/index.php?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" /> -->
    <!-- <link href="https://jtest.dev/index.php/component/search/?layout=blog&amp;id=9&amp;Itemid=101&amp;format=opensearch" rel="search" title="Search jtest" type="application/opensearchdescription+xml" /> -->

    <link href="{{asset('css/prostar.css')}}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        h1, h2, h3, h4, h5, h6, .site-title {
            font-family: 'Open Sans', sans-serif;
        }
        body.site {
            border-top: 3px solid #0088cc;
            background-color: #f4f6f7;
        }
        a {
            color: #0088cc;
        }
        .nav-list > .active > a,
        .nav-list > .active > a:hover,
        .dropdown-menu li > a:hover,
        .dropdown-menu .active > a,
        .dropdown-menu .active > a:hover,
        .nav-pills > .active > a,
        .nav-pills > .active > a:hover,
        .btn-primary {
            background: #0088cc;
        }
        div.mod_search87 input[type="search"]{ width:auto; }
    </style>


    <script src="{{asset('js/jquery.js')}}"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script> -->

    <!--[if lt IE 9]><script src="{{ asset('/media/jui/js/html5.js?963cf106d068e216817dc4d9f34de42a') }}"></script><![endif]-->
    <!--[if lt IE 9]><script src="{{ asset('/media/system/js/html5fallback.js?963cf106d068e216817dc4d9f34de42a') }}"></script><![endif]-->

</head>


<body class="site com_content view-category layout-blog no-task itemid-101">

<div class="container">
    @yield('content')
</div>

</body>

</html>
