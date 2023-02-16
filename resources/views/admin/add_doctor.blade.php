<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="#"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
       @include('admin.navbar')
       <div class="container-fluid page-body-wrapper">

<div class="container" style="padding-top:5%;" align="center">


    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
@csrf
        <div class="p-2">
            <label class="m-1 w-25">Doctor Name</label>
            <input type="text"  name="name" placeholder="write the name" required="">
        </div>
        <div class="p-2">
            <label class="m-1  w-25">Phone</label>
            <input type="text" name="number" placeholder="write the number" required="">
        </div>
        <div class="p-2">
            <label class="m-1  w-25">Speciality</label>
            <select name="speciality" style="width:20%; height:30px;" >
                <option>--Select--</option>
                <option value="allergist">Allergist</option>
                <option value="dermatologist">Dermatologist</option>
                <option value="infectious">Infectious disease</option>
                <option value="ophtamologist">Ophthalmologist</option>
                <option value="gynecologist">Obstetrician/gynecologist</option>
                <option value="cardiologist">Cardiologist</option>
                <option value="endo">Endocrinologist</option>
                <option value="gastro">Gastroenterologist</option>
                <option value="uro">Urologist</option>
                <option value="pulmo">Pulmonologist</option>
                <option value="otolary">Otolaryngologist</option>
                <option value="neuro">Neurologist</option>
                <option value="psychiatrist">Psychiatrist</option>
                <option value="radiologist">Radiologist</option>

            </select>
        </div>
        <div class="p-2">
            <label class="m-1  w-25">Room No</label>
            <input type="text"  name="room" placeholder="write the room number" required="">
        </div>
        <div class="p-2">
            <label class="m-1  w-25">Doctor Image</label>
            <input type="file" name="file"  style="width:20%; height:30px;" required="">
        </div>
        <div class="p-2">

            <input type="submit" class="btn btn-success m-5">
        </div>

    </form>
    @if(session()->has('message'))
    <div class="alert alert-primary w-50">
        <button type="button" class="btn-close" aria-label="Close" data-dismiss="alert"></button>
        {{ session()->get('message') }}
    </div>
    @endif
</div>

      </div>

    </div>
@include('admin.script')
  </body>
</html>
