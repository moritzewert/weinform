@extends('layouts.app_v1')

@section('content')

<body>

<header class="home-header" data-stellar-background-ratio="0.2">
    <div class="section-bg-verlauf"></div>
    
    <nav class="navbar navbar-ct-azure navbar-transparent navbar-fixed-top"role="navigation">
        <div class="nav-bg"></div>
        <div class="container wow fadeIn" data-wow-delay="1.1s">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle">
                <span class="sr-only">Navigation aufklappen</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
                </button>
{{--                 <a class="navbar-brand" href="{{url('/')}}"><span class="icon-logo"></span> <span>We.Inform</span></a> --}}
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
{{--                     <li><a href="{{url('#')}}" class="bt bt-weiss-transparent">Login</a></li>
                    <li><a href="{{url('#')}}" class="bt bt-second-fill">Register</a></li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <div class="header-title wow zoomInUp">
        <h1>We.Inform</h1>
        <h2>Information for refugees - More coming soon.</h2>
        <a href="mailto:info@we-inform.de" class="bt bt-second-fill">E-Mail us!</a>
    </div>
    {{-- <div class="header-facts wow fadeIn" data-wow-delay="1.1s">
        <div class="container">
            <ul>
                <li><span>2.701</span> Pakete versendet</li>
                <li><span>1.445</span> Registrierte Fahrer</li>
                <li><span>2.701</span> Glückliche Kunden</li>
                <li><span>0</span> Beschädigte oder verlorene Pakete</li>
            </ul>
        </div>
    </div> --}}
</header>

<footer class="wow fadeIn" data-wow-delay="0.6s">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li><a target="blank" href="http://www.law-school.de/deutsch/footer/impressum/">Imprint</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('/js/landing.js') }}" type="text/javascript"></script>

</body>

@stop