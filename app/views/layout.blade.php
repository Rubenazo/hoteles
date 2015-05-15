<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $title }}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ HTML::style('css/normalize.css') }}
        {{ HTML::style('css/main.css') }}
        {{ HTML::script('js/vendor/modernizr-2.8.3.min.js') }}
        {{ HTML::style('css/bootstrap.min.css')}}
        {{ HTML::style('css/jumbotron-narrow.css')}}
        {{ HTML::style('css/custom.css')}}
        {{ HTML::script('js/jquery-1.11.2.js')}}
        {{ HTML::script('js/bootstrap.min.js')}}
        {{ HTML::script('js/custom.js')}}
    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="container">
            <div class="header">
                <ul class="nav nav-pills pull-right">
                    <li>{{ HTML::link('/','Inicio') }}</li>
                    <li>{{ HTML::link('about','Quienes somos') }}</li>
                    <li>{{ HTML::link('guide','Guia de Hoteles') }}</li>
                    <li>{{ HTML::link('contact','Contacto') }}</li>
                </ul>
            </div>

            @yield('content')

            <div class="footer">
                @if (Auth::check())
                    <h4 class="text-muted">Bienvenido {{Auth::user()->username}}</h4>
                @endif
            </div>

            {{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}
            <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
            {{ HTML::script('js/plugins.js') }}
            {{ HTML::script('js/main.js') }}

            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
            <script>
                (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src='https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                ga('create','UA-XXXXX-X','auto');ga('send','pageview');
            </script>
        </div>
    </body>
</html>
