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

      <div class="collapse navbar-collapse" id="navbarSupport">
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

                      <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                          <div class="container">

                              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                  <span class="navbar-toggler-icon"></span>
                              </button>

                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <!-- Left Side Of Navbar -->
                                  <ul class="navbar-nav mr-auto">

                                  </ul>

                                  <!-- Right Side Of Navbar -->
                                  <ul class="navbar-nav ml-auto">
                                      <!-- Authentication Links -->
                                      @guest
                                          <li class="nav-item">
                                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                          </li>
                                          @if (Route::has('register'))
                                              <li class="nav-item">
                                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                              </li>
                                          @endif
                                      @else
                                          <li class="nav-item dropdown">
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
                                      @endguest
                                  </ul>
                              </div>
                          </div>
                      </nav>





          </li>
      </li>
  </ul>
</div> <!-- .navbar-collapse -->
</div> <!-- .container -->
</nav>
