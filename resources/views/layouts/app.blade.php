<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Postman</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/product.css') }}" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{ Auth::guest() ? url('/') : url('home') }}">We.Inform</a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/lang/ar') }}">تعذر على</a></li>
                        <li><a href="{{ url('/lang/en') }}">English</a></li>
                        <li><a href="/register"><i class="fa fa-btn fa-keyboard-o"></i>@lang('product/general.register')</a></li>
                        <li><a href="/login"><i class="fa fa-btn fa-sign-in"></i>@lang('product/general.login')</a></li>
                    @else
                        <li class="navbar-text"><i class="fa fa-btn fa-user"></i>{{ Auth::user()->name }}</li>
                        <li><a href=""><i class="fa fa-btn fa-cog"></i>Settings</a></li>
                        <li><a href="/logout"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</div>

@include('common.infos')

@yield('content')

<hr>
<center>
    <a id="imprint_link" target="blank" href="http://www.law-school.de/deutsch/footer/impressum/"><p>@lang('product/general.imprint')</p></a>
</center>

</body>
</html>