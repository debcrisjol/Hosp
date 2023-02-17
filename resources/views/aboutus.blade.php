
@include('components.header')

<div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3">Welcome to Your Health Center</h1>
          <div class="text-lg">
            <p>Knowledge is empowering, especially when it comes to your health. Our team of health practitioners hosts seminars and events to help keep you up to date. We cover topics such as bio-identical hormone therapy, mind-body medicine, adrenal and thyroid health, gastro-intestinal health, and various topics on midlife health and wellness issues.</p>
            <p>Balance Medical Center unites conventional medicine and natural practices for holistic health. Considering your unique lifestyle and body, we use a range of therapies to restore optimal wellness.</p>
          </div>
        </div>
        <div class="col-lg-10 mt-5">
          <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>
          <div class="row justify-content-center">
            @foreach ($doctors as $doctor)
            <div class="col-md-6 col-lg-4 wow zoomIn">
                <div class="card-doctor">
                  <div class="header">
                    <img src="doctorimage/{{$doctor->image}}" alt="doctor pic">
                    <div class="meta">
                      <a href="#"><span class="mai-call"></span></a>
                      <a href="#"><span class="mai-logo-whatsapp"></span></a>
                    </div>
                  </div>
                  <div class="body">
                    <p class="text-xl mb-0">{{$doctor->name}}</p>
                    <span class="text-sm text-grey">{{$doctor->speciality}}</span>
                  </div>
                </div>
              </div>
            @endforeach


          </div>
        </div>
      </div>
    </div>
  </div>
@include('components.footer')
