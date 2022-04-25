<?php 
use App\User ;
use App\Product;
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <!-- Styles -->
  <link rel="icon" href="{{ asset ('img/favicon.png') }} ">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset ('css/css/bootstrap.min.css') }} ">
  <!-- animate CSS -->
  <link rel="stylesheet" href=" {{ asset ('css/css/animate.css') }}">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="{{ asset ('css/css/owl.carousel.min.css') }} ">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="{{ asset ('css/css/all.css') }} ">
  <!-- icon CSS -->
  <link rel="stylesheet" href="{{ asset ('css/css/flaticon.css') }} ">
  <link rel="stylesheet" href="{{ asset ('css/css/themify-icons.css') }} ">
  <!-- magnific popup CSS -->
  <link rel="stylesheet" href=" {{ asset ('css/css/magnific-popup.css') }}">
  <link rel="stylesheet" href=" {{ asset ('css/css/nice-select.css') }}">
  <!-- style CSS -->
  <link rel="stylesheet" href="{{ asset ('css/css/style.css') }} ">


</head>

<body>


  <header class="">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="menu_icon"><i class="fas fa-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="/product">
                    Product
                  </a>
                </li>
                @guest
                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{ route('login') }}">
                    {{ __('Login') }}
                  </a>
                </li>
                <li class="nav-item dropdown">
                  @if (Route::has('register'))
                  <a class="nav-link" href="{{ route('register') }}">
                    {{ __('Register') }}
                  </a> @endif
                </li>
                @else

                <li class="nav-item dropdown">
                  <a class="nav-link" href="{{ route('ej') }}">
                    Profile

                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>



                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                  </form>
                </li>
                @endguest
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
    
    <main class="py-4">
      @yield('content')
    </main>

    <script src=" {{ asset ('js/js/jquery-1.12.1.min.js') }} "></script>
    <!-- popper js -->
    <script src=" {{ asset ('js/js/popper.min.js') }} "></script>
    <!-- bootstra {{ asset ('js/js/jquery-1.12.1.min.js') }} p js -->
    <script src=" {{ asset ('js/js/bootstrap.min.js') }} "></script>
    <!-- easing j {{ asset ('js/js/jquery-1.12.1.min.js') }} s -->
    <script src=" {{ asset ('js/js/jquery.magnific-popup.js') }} "></script>
    <!-- swiper j {{ asset ('js/js/jquery-1.12.1.min.js') }} s -->
    <script src=" {{ asset ('js/js/swiper.min.js') }} "></script>
    <!-- swiper j {{ asset ('js/js/jquery-1.12.1.min.js') }} s -->
    <script src=" {{ asset ('js/js/mixitup.min.js') }} "></script>
    <!-- particle {{ asset ('js/js/jquery-1.12.1.min.js') }} s js -->
    <script src=" {{ asset ('js/js/owl.carousel.min.js') }} "></script>
    <script src=" {{ asset ('js/js/jquery.nice-select.min.js') }} "></script>
    <!-- slick js {{ asset ('js/js/jquery-1.12.1.min.js') }}  -->
    <script src=" {{ asset ('js/js/slick.min.js') }} "></script>
    <script src=" {{ asset ('js/js/jquery.counterup.min.js') }} "></script>
    <script src=" {{ asset ('js/js/waypoints.min.js') }} "></script>
    <script src=" {{ asset ('js/js/contact.js') }} "></script>
    <script src=" {{ asset ('js/js/jquery.ajaxchimp.min.js') }} "></script>
    <script src=" {{ asset ('js/js/jquery.form.js') }} "></script>
    <script src=" {{ asset ('js/js/jquery.validate.min.js') }} "></script>
    <script src=" {{ asset ('js/js/mail-script.js') }} "></script>
    <!-- custom js -->
    <script src=" {{ asset ('js/js/custom.js') }} "></script>
</body>

</html>