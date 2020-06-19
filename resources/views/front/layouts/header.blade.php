<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>travel</title>
    <link rel="icon"       href="{{asset('front/')}}/img/favicon.png">
    <link rel="stylesheet" href="{{asset('front/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('front/')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/css/all.css">
    <link rel="stylesheet" href="{{asset('front/')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('front/')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('front/')}}/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('front/')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('front/')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('front/')}}/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"> <img src="{{asset('front/')}}/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('home')}}"> {{__('texts.home')}} </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('about')}}">{{__('texts.about')}}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('contact')}}">{{__('texts.contact')}}</a>
                                </li>
                              <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('texts.Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('texts.Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('texts.Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                             
                               
                              

<li class="nav-item">
<a  class="nav-link" href="{{ url('locale/en') }}" ><img src="{{asset('images/en.svg')}}" width="25" class="img-fluid" alt="">
     EN</a></li>
<li class="nav-item">
    <a  class="nav-link" href="{{ url('locale/az') }}" ><img src="{{asset('images/az.svg')}}" width="25" class="img-fluid" alt=""> AZ</a></li>

                            </ul>
                        </div>
                        <a class="btn_1 d-none d-lg-block" href="#">{{__('texts.hotline')}} 052</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->