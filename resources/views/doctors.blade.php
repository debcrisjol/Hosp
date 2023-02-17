
@include('components.header')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Doctors</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Our Doctors</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div>
  <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
    @foreach ($medic as $med )
    <div class="item">
      <div class="card-doctor">
        <div class="header">
          <img src="doctorimage/{{$med->image}}" alt="doctor-image">
          <div class="meta">
            <a href="#"><span class="mai-call"></span></a>
            <a href="#"><span class="mai-logo-whatsapp"></span></a>
          </div>
        </div>
        <div class="body">
          <p class="text-xl mb-0 fs-3 text-capitalize text-center">{{ $med->name }}</p>
          <p class="text-sm text-grey text-capitalize text-center">{{ $med->speciality }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{url('appointment')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text"name="email" class="form-control" placeholder="Email address..">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control">
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">
<option>Select Doctor</option>
                @foreach ($medic as $med)
              <option value="{{$med->name}}">
                {{$med->name}} |  Speciality: {{$med->speciality}}</option>


              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Number..">
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3 wow zoomIn ">Submit Request</button>
      </form>

    </div>
  </div> <!-- .page-section -->

  @include('components.footer')
