@include('components.header')
<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span>+0044090909090</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> doctors@cristina.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">OneCris</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('/home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('aboutus')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('doctors')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('news')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>

            <li class="nav-item">
                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links m-2 d-flex">
                            @auth

                                <a class="p-2 rounded bg-success " href="{{ url('/home') }}">Home</a>
                                <li class="nav-item dropdown">
                                    <a class="nav-link text-danger" href="{{url('myappointment')}}">My Appointments</a>
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }}
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                              @csrf
                                          </form>
                                      </div>
                                  </li>
                            @else
                                <a class="p-2 rounded bg-success " href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a class="p-2 rounded bg-success" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif

            </li>
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  <body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>



    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg.jpg);">
      <div class="hero-section">
        <div class="container text-center wow zoomIn">
          <span class="subhead">Let's make your life happier</span>
          <h1 class="display-4">Healthy Living</h1>
          <a href="#" class="btn btn-primary">Let's Consult</a>
        </div>
      </div>
    </div>


    <div class="bg-light">
      <div class="page-section py-3 mt-md-n5 custom-index">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-4 py-3 py-md-0">
              <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-secondary text-white">
                  <span class="mai-chatbubbles-outline"></span>
                </div>
                <p><span>Chat</span> with a doctors</p>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-primary text-white">
                  <span class="mai-shield-checkmark"></span>
                </div>
                <p><span>One</span>-Health Protection</p>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card-service wow fadeInUp">
                <div class="circle-shape bg-accent text-white">
                  <span class="mai-basket"></span>
                </div>
                <p><span>One</span>-Health Pharmacy</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .page-section -->

      <div class="page-section pb-0">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 py-3 wow fadeInUp">
              <h1>Welcome to Your Health <br> Center</h1>
              <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo, excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
              <div class="img-place custom-img-1">
                <img src="../assets/img/doctor1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div> <!-- .bg-light -->
    </div> <!-- .bg-light -->

    <div class="page-section">
        <div class="container">
          <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>


          <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach ($doctors as $doctor )
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="doctorimage/{{$doctor->image}}" alt="doctor-image">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0 fs-3 text-capitalize text-center">{{ $doctor->name }}</p>
              <p class="text-sm text-grey text-capitalize text-center">{{ $doctor->speciality }}</p>
            </div>
          </div>
        </div>
        @endforeach
          </div>

        </div>
    </div>
    @include('user.latest')
    @include('user.appointment')

    <div class="page-section banner-home bg-image" style="background-image: url(../assets/img/banner-pattern.svg);">
      <div class="container py-5 py-lg-0">
        <div class="row align-items-center">
          <div class="col-lg-4 wow zoomIn">
            <div class="img-banner d-none d-lg-block">
              <img src="../assets/img/mobile_app.png" alt="">
            </div>
          </div>
          <div class="col-lg-8 wow fadeInRight">
            <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health Application</h1>
            <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
            <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
          </div>
        </div>
      </div>
    </div> <!-- .banner-home -->
  </body>

@include('components.footer')



