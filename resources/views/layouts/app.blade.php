<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>DevMarketer</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="nav has-shadow">
          <div class="container">

            <div class="nav-left">
              <a href="nav-item" href="{{route('home')}}">
                <img src="{{asset('images/devmarketer.png')}}" width="191" alt="DevMarketer Logo">
              </a>

              <a href="" class="nav-item is-tab is-hidden-mobile m-l-30"> Learn </a>

              <a href="" class="nav-item is-tab is-hidden-mobile m-l-30"> Discuss </a>

              <a href="" class="nav-item is-tab is-hidden-mobile m-l-30"> Share </a>

            </div>

            <div class="nav-right" style="overflow: visible;">
              @if(Auth::guest())
                <a href="#" class="nav-item is-tab">Login</a>
                <a href="#" class="nav-item is-tab">Join the community</a>
              @else
                <button class="dropdown nav-itam is-open is-tab">
                  Hay safa <span class="icon"> <i class="fa fa-caret-down"></i></span>

                  <ul class="dropdown-menu">
                      <li><a href="#">Profile</a></li>
                      <li><a href="#">Notifications</a></li>
                      <li><a href="#">Settings</a></li>
                      <li class="seperator"><a href="#"></a></li>
                      <li><a href="#">Logout</a></li>
                  </ul>
                </button>
              @endif
            </div>
          </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
