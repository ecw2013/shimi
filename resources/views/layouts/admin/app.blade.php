<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Esmaeel Cheshmehkhavar">
    <meta name="keywords" content="{{ $keywords ?? 'shimi shimi shimi' }}">
    <meta name="description" content="{{ $description ?? 'shimi shimi shimi'}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'شرکت شیمیایی گسترش پرداز ماده') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="font-family: IranSans">
<div id="app">
    <nav class="navbar navbar-default nqavbar-static-top">
        <div class="container">
            <div class="navbar-header pull-right">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand pull-right" href="{{ url('/') }}">
                    {{ config('app.name', 'شرکت شیمیایی گسترش پرداز ماده') }}
                </a>
            </div>

            <div class="collapse navbar-collapse pull-right" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('admin.contact.index') }}">تماس ها</a></li>
                    <li><a href="{{ route('admin.news.index') }}">اخبار </a></li>
                    <li><a href="{{ route('admin.product.index') }}">محصولات </a></li>
                    <li><a href="{{ route('admin.home') }}">صفحه اصلی</a></li>
                </ul>
            </div>
            <div class="collapse navbar-collapse pull-left">

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right pull-left">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div>
        @if(count($errors->all()) > 0 )
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <strong>Error!</strong>
                            <ul>
                                @foreach($errors->all() as $message)
                                    <li>
                                        {{ $message }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    @yield('content')
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>