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
              <a class="nav-link" href="index.html">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>

            <li class="nav-item">

                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                        <div class="top-right links m-2">
                            @auth
                                <a class="p-2 rounded bg-success " href="{{ url('/home') }}">Home</a>

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
  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier...We do more then you can imagine</span>
        <h1 class="display-4">Healthy,Strong and Happy </h1>
        <a href="#" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>
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

@include('components.footer')



