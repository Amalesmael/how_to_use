<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>ask</title>

    <!-- Styles -->
    <link href="{{ asset("assets/css/core.min.css")}}" rel="stylesheet">
    <link href="{{ asset("assets/css/thesaas.min.css")}}" rel="stylesheet">
    <link href="{{ asset("assets/css/style.css")}}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">
  </head>

  <body>


    <!-- Topbar -->
    <nav class="topbar topbar-inverse topbar-expand-md topbar-sticky">
      <div class="container">




        <div class="topbar-right">
          <ul class="topbar-nav nav">
            <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('index')}}">ask</a></li>
            <li class="nav-item"><a class="nav-link" href="{{url('aboutus')}}">about us</a></li>
          </ul>
        </div>

      </div>
    </nav>
    <!-- END Topbar -->



    <!-- Header -->
    <header class="header header-inverse h-fullscreen pb-80" style="background-image: ;" data-overlay="8">
      <div class="container text-center">

        <div class="row h-full">
          <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

            <p class="opacity-70">{{ $ask->category->name }}</p>
            <br>
            <h1 class="display-4 hidden-sm-down">If you know the answer, please help</h1>
            <br><br>
            <p><span class="opacity-70 mr-8">By</span> <a class="text-white" href="#">{{ $ask->name_of_user }}</a></p>
            <p><img class="rounded-circle w-40" height="70px" src="{{ asset("asset/dist/img/puzzle-connection@2x.png") }}" alt="..."></p>

          </div>

          <div class="col-12 align-self-end text-center">
            <a class="scroll-down-1 scroll-down-inverse" href="#" data-scrollto="section-content"><span></span></a>
          </div>

        </div>

      </div>
    </header>
    <!-- END Header -->




    <!-- Main container -->
    <main class="main-content">



      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Blog content
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section" id="section-content">
        <div class="container">
          <br>
          <p><img height="400px" width="800px" src="{{ asset("img/$ask->img") }}" alt="..."></p>
          <br>
          <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
              <p>{!! $ask->ask !!}</p>

            </div>
          </div>
          <input type="hidden" id="ask_id" value="{{$ask->category->id }}">

        </div>
      </div>





      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Comments
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <div class="section bt-1 bg-grey">
        <div class="container">

          <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">

              <div class="media-list">
  @foreach ($answer as $answer )
    <div class="media">
                  <div class="media-body">
                    <p class="fs-14">
                      <strong>{{ $answer->name }}</strong>
                    </p>
                    <p class="fs-13">{{ $answer->answer }}</p>
                  </div>
                </div>
  @endforeach

<div id="res"></div>

              </div>


              <hr>




                <div class="row">
                  <div class="form-group col-12 col-md-6">
                    <input class="form-control" id="name" type="text" placeholder="Name">
                  </div>

                  <div class="form-group col-12 col-md-6">
                    <input class="form-control" type="text" id="email" placeholder="Email">
                  </div>
                </div>

                <div class="form-group">
                  <textarea class="form-control" id="answer" placeholder="answer" rows="4"></textarea>
                </div>

                <button id="sendanswer"class="btn btn-primary btn-block"  type="submit">Submit your comment</button>


            </div>
          </div>

        </div>
      </div>





    </main>
    <!-- END Main container -->






    <!-- Footer -->
    <footer class="site-footer">
      <div class="container">
        <div class="row gap-y align-items-center">
          <div class="col-12 col-lg-3">

          </div>

          <div class="col-12 col-lg-6">
            <ul class="nav nav-primary nav-hero">
              <li class="nav-item">
                <a class="nav-link" href="{{ url("/") }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("index") }}">ask</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url("aboutus") }}">about us</a>
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
    <script src="{{ asset("assets/js/core.min.js") }}"></script>
    <script src="{{ asset("assets/js/thesaas.min.js")}}"></script>
    <script src="{{ asset("assets/js/script.js")}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $("#sendanswer").click(function(){
  let name= $("#name").val();
  let email= $("#email").val();
  let answer= $("#answer").val();
  let ask_id= $("#ask_id").val();


$.ajax({
            method:"POST",
            url:"http://127.0.0.1:8000/answer",
            headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
            data: {
               name:name,
                email:email,
                answer:answer,
                ask_id:ask_id

        },
        success:function(res){
          $("#res").append(`
          <div class="media">
                  <div class="media-body">
                    <p class="fs-14">
                      <strong>${name}</strong>
                      <time class="ml-16 opacity-70 fs-12" datetime="2017-07-14 20:00">24 min ago</time>
                    </p>
                    <p class="fs-13">${answer}</p>
                  </div>
                </div>
          `);
        },
        error:function(res){
         console.log(res);
        }
    }
        );

        }
        );
//


    </script>
  </body>
</html>
