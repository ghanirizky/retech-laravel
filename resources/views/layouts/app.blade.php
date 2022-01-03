<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/logo.png') }}" width = '120' class="d-inline-block align-top" alt="" loading="lazy">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                        <ul class="navbar-nav mr-auto">
                            <!-- Search -->
                            <li class="nav-item ml-5 my-at">
                                <form class="form-inline" action="{{ route('category.category', 'showall') }}" method="GET" >
                                    <input class="form-control mr-sm-2 searchbar" type="text" name="searchKey" placeholder="Search" aria-label="Search" autocomplete="off">
                                    <button class="btn btn-primary my-2 my-sm-0 " style="background-color: #124E61" type="submit">Search</button>
                                </form>
                            </li>
                            <!-- End Search -->

                            <li class="nav-item mx-2 ml-5">
                                <a class="nav-link" href="{{ route('home') }}">SHOP</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link" href="{{ route('build.page') }}">BUILD</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link" href="{{ route('service.form') }}">SERVICE</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link" href="{{ route('simulation.page') }}">SIMULATION</a>
                            </li>
                        </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="btn text-white nav-link mx-4" style="background-color: #124E61" href="{{ route('login') }}">{{ __('LOG IN') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-outline-secondary nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                                </li>
                            @endif
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('user.cart')}}">
                                        {{ __('Cart') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('transaction.history.page')}}">
                                        {{ __('Transaction History') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('service.transaction') }}">
                                        {{ __('Service Transaction') }}
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class=""  style="background-color: #f1f1f1; min-height: 800px">
            
            <section class="body pt-4">
                @yield('content')
            </section>
        </main>

        
        <section class="footer">
            <hr class="my-4" style="border: 1px solid #124E61;">
            
            <div class="container">
    

                <div class="row justify-content-center">
                    
                    <div class="col-md-2 mx-auto">
                        <ul class="list-group list-group-flush">
                            
                            <li class="list-group-item font-weight-bold">HELP CENTER</li>
                            <a href="#"><li class="list-group-item border-0 text-dark">Order Status</li></a> 
                            <a href="#"><li class="list-group-item border-0 text-dark" >Customer Service</li></a> 
                            <a href="#"><li class="list-group-item border-0 text-dark">Shopping Method</li></a> 
                            <a href="#"><li class="list-group-item border-0 text-dark">Payment Method</li></a> 
                            <a href="#"><li class="list-group-item border-0 text-dark">ReTech Warranty</li></a> 
                            <a href="#"><li class="list-group-item border-0 text-dark">Terms and Condition</li></a> 
                            <a href="#"><li class="list-group-item border-0 text-dark">Privacy Policy</li></a> 
                            </ul>
                    </div>
        
                    <div class="col-md-2 mx-auto">
                        <ul class="list-group list-group-flush">
                                <li class="list-group-item font-weight-bold">RETECH</li>
                                <a href="#"><li class="list-group-item border-0 text-dark">About Us</li></a> 
                                <a href="#"><li class="list-group-item border-0 text-dark">Career</li></a> 
                                <a href="#"><li class="list-group-item border-0 text-dark">Partner List</li></a> 
                            <a href="#"> <li class="list-group-item border-0 text-dark">Partner Requirement</li></a> 
                                <a href="#"><li class="list-group-item border-0 text-dark">ReTech Membership</li></a> 
                                <a href="#"><li class="list-group-item border-0 text-dark">Best Seller</li></a> 
                            </ul>
                    </div>
        
                    <div class="col-md-2 mx-auto">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item font-weight-bold text-dark">FOLLOW US</li>
                            <a href="#"><li class="list-group-item border-0 text-dark">Instagram</li></a> 
                            <a href="#"><li class="list-group-item border-0 text-dark">Facebook</li></a> 
                            <a href="#"><li class="list-group-item border-0 text-dark">Twitter</li></a> 
                            <a href="#"><li class="list-group-item border-0 text-dark">LINE</li></a> 
                            </ul>
                    </div>
        
                    <div class="col-md-3 mx-auto">
                        <ul class="list-group list-group-flush">
                                <li class="list-group-item font-weight-bold text-dark">DOWNLOAD MOBILE APPS</li>
                            <a href="#"> <li class="list-group-item border-0 text-dark">Google Play</li></a> 
                                <a href="#"><li class="list-group-item border-0 text-dark">App Store</li></a> 
                            </ul>
                    </div>
        
                    <div class="col-md-2 mx-auto">
                        <img src="{{asset('assets/logo.png')}}" width="200" alt="">
                    </div>
        
                </div>
            </div>
        </section>
            
    </div>
</body>
</html>
