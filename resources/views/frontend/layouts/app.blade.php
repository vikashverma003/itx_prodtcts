<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Builtin css-->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
      <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
      <link rel="stylesheet" href="{{ asset('css/all.css') }}">
      <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
      <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
      @yield('css')
      @yield('pagecss')
</head>
<body>
    <div id="app">
        
      @include('frontend.includes.header')

        <main class="py-4">
            @yield('content')
        </main>
      @include('frontend.includes.footer')

    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/fontawsome.js')}}"></script>
      <script src="{{asset('js/script.js')}}"></script>
      <script src="{{asset('js/slick.js')}}"></script>
              <script src="{{asset('js/sweetalert2@9.js')}}"></script>
      <script src="{{asset('js/sweetalert.min')}}"></script>
        <script src="{{asset('js/landingPage.js')}}"></script>
         
     <script type="text/javascript">
          $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        dots: false,
        slidesToScroll: 3,
        responsive: [
                            {
                              breakpoint: 1200,
                              settings: {
                                slidesToShow: 3,
                                slidesToScroll: 1
                              }
                            },
                            {
                              breakpoint: 768,
                              settings: {
                                slidesToShow: 2,
                                slidesToScroll: 1
                              }
                            },
                            {
                              breakpoint: 575,
                              settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                              }
                            },
                          ]
      });
      </script>
      @yield('js')
     @yield('pagejs')
</body>
</html>
