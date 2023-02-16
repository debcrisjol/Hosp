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

@include('components.navbar')
</header>
<body>
    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg.jpg);">

          <div class="container text-center text-white wow zoomIn">

            <h1 class="display-4">Your Appointments</h1>
            <span class="subhead">at Healthy Living Center</span>
            <table class="table m-3 ">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Message</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
               @foreach ($appoint as $appoints )
                  <tr class="text-success text-capitalize font-weight-bold">
                    <th scope="row" class="text-danger">1</th>
                    <td>{{$appoints->doctor}}</td>
                    <td class="text-danger ">{{$appoints->date}}</td>
                    <td>{{$appoints->message}}</td>
                    <td class="text-dark">{{$appoints->status}}</td>

                  </tr>

                  @endforeach
                </tbody>
              </table>

        </div>
      </div>

</body>

@include('components.footer')
