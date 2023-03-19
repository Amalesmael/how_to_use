<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>ASK</title>

    <!-- Styles -->
    <link href="{{ asset("assets/css/core.min.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/css/thesaas.min.css")}}" rel="stylesheet">
    <link href="{{ asset("assets/css/style.css")}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("asset/dist/css/welcome.css") }}">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset("assets/img/apple-touch-icon.png")}}">
    <link rel="icon" href="{{ asset("assets/img/favicon.png")}}">
  </head>

  <body>


    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
      <div class="container">



        <div class="topbar-right">
          <ul class="topbar-nav nav">
            <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
            <li class="nav-item activee"><a class="nav-link activee" href="{{url('index')}}">ask</a></li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('aboutus')}}">about us </a>
            </li>



            <li class="nav-item">
              <a class="nav-link" href="#">category <i class="fa fa-caret-down"></i></a>

              <div class="nav-submenu align-right">
                @foreach ( $category as $category )
                <a class="nav-link" href="{{ url("category/$category->id") }}">{{ $category->name }}</a>
                  @endforeach
              </div>


            </li>
          </ul>
        </div>

      </div>
    </nav>
    <!-- END Topbar -->



    <!-- Header -->
    <header class="header header-inverse" style="background-color: lightpink">
      <div class="container text-center">

        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">

            <h1>HOW TO USE ? </h1>
            <p class="fs-20 opacity-70">Read the question and then answer the questions that you can answer</p>

          </div>
        </div>

      </div>
    </header>
    <!-- END Header -->




    <!-- Main container -->
    <main class="main-content">




      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Basic cards
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section bg-gray">
        <div class="container">

          <div class="row gap-y">
@foreach ($ask as $ask )
   <div class="col-12 col-md-6 col-lg-4">

              <div class="card card-hover-shadow">
                <a href="{{ url("blog/$ask->id" ) }}"><img class="card-img-top" height="200px" src="{{ asset("img/$ask->img") }}" alt="Card image cap"></a>
                <div class="card-block">
                  <h4 class="card-title">{{ $ask->ask }}</h4>
                  <p class="card-text">{{ $ask->name_of_user}}</p>
                  <p class="card-text">{{ $ask->category->name}}</p>

                  <a class="fw-600 fs-12" href="{{ url("blog/ $ask->id" ) }}"> answer <i class="fa fa-chevron-right fs-9 pl-8"></i></a>
                </div>
              </div>
            </div>
@endforeach





          </div>





        </div>
      </section>






    </main>
    <!-- END Main container -->






    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row gap-y align-items-center">
          <div class="col-12 col-lg-3">
            <p class="text-center text-lg-left">

            </p>
          </div>

          <div class="col-12 col-lg-6">
            <ul class="nav nav-primary nav-hero">
                <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                <li class="nav-item "><a class="nav-link " href="{{url('index')}}">ask</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('aboutus')}}">about us </a>
                </li>
            </ul>
          </div>

          <div class="col-12 col-lg-3">
            <div class="social text-center text-lg-right">
              <a class="social-facebook" href="https://www.facebook.com/thethemeio"><i class="fa fa-facebook"></i></a>
              <a class="social-twitter" href="https://twitter.com/thethemeio"><i class="fa fa-twitter"></i></a>
              <a class="social-instagram" href="https://www.instagram.com/thethemeio/"><i class="fa fa-instagram"></i></a>
              <a class="social-dribbble" href="https://dribbble.com/thethemeio"><i class="fa fa-dribbble"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- END Footer -->



    <!-- Scripts -->
    <script src="{{ asset("assets/js/core.min.js")}}"></script>
    <script src="{{ asset("assets/js/thesaas.min.js")}}"></script>
    <script src="{{ asset("assets/js/script.js")}}"></script>

  </body>
</html>
