<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Portal News</title>
    <link href="{{asset('template/css/media_query.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="{{asset('template/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="{{asset('template/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('template/css/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('template/css/style_1.css')}}" rel="stylesheet" type="text/css" />
    <!-- Modernizr JS -->
    <script src="{{asset('template/js/modernizr-3.5.0.min.js')}}"></script>
</head>

<body>
    {{-- Header --}}
    <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
        <div class="container padding_786">
            <nav class="navbar navbar-toggleable-md navbar-light ">
                <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                <a class="navbar-brand" href="#"><img src="images/logo.png" alt="img" class="mobile_logo_width" /></a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a>
                        </li>
                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori <span class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="/categories">Tampil Kategori</a>
                                <a class="dropdown-item" href="/categories/categories">Tambah Kategori</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Berita <span class="sr-only">(current)</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink_1">
                                <a class="dropdown-item" href="/news">Tampil Berita</a>
                                <a class="dropdown-item" href="/news/create">Tambah Berita</a>
                            </div>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a class="nav-link bg-primary" href="/login"> <span class="text-white">Login</span> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-primary" href="/register"> <span class="text-white">Register</span> <span class="sr-only">(current)</span></a>
                        </li>
                        @endguest
                        @auth
                        <a class="nav-link bg-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    {{-- End Header --}}

    {{-- Content --}}
    <div class="container-fluid pb-4 pt-4 paddding">
        @yield('content')
    </div>
    {{-- End Content --}}

    {{-- Footer --}}
    <div class="container-fluid fh5co_footer_right_reserved">
        <div class="container">
            <div class="row ">
                <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2018, All rights reserved. Design by <a href="https://freehtml5.co" title="Free HTML5 Bootstrap templates">FreeHTML5.co</a>. </div>
            </div>
        </div>
    </div>
    {{-- End Footer --}}

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <!-- Waypoints -->
    <script src="{{asset('template/js/jquery.waypoints.min.js')}}"></script>
    <!-- Main -->
    <script src="{{asset('template/js/main.js')}}"></script>

</body>

</html>