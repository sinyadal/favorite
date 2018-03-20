<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div id="app">



        <nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <div class="navbar-burger burger" data-target="navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>

                <div id="navbar" class="navbar-menu">
                    <div class="navbar-start">

                    </div>

                    <div class="navbar-end">
                        @guest
                        <div class="navbar-item">
                            <div class="field is-grouped">
                                <p class="control">
                                    <a href="{{ route('login') }}" class="button">
                                        Sign In
                                    </a>
                                </p>
                                <p class="control">
                                    <a href="{{ route('register') }}" class="button is-primary">
                                        Register
                                    </a>
                                </p>
                            </div>
                        </div>
                        @else
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-item" href="">
                                <i class="material-icons">face</i>
                            </a>
                            <div class="navbar-dropdown is-boxed is-right">
                                <div class="dropdown-item">
                                    <p>Signed in as
                                        <b>{{ Auth::user()->name }}</b>
                                    </p>
                                </div>
                                <hr class="navbar-divider">
                                <a href="{{ route('myfavorite') }}" class="navbar-item">
                                    Your favorite
                                </a>
                                <a href="{{ route('logout') }}" class="navbar-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    Sign Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        @endguest

                    </div>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>