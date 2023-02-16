<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">

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

     @include('admin.sidebar')

       @include('admin.navbar')

       <div class="container-fluid page-body-wrapper">
        <div class="container" style="padding-top:2%;" align="center">
            <h1>Update Doctor</h1>
            @if(session()->has('message'))
            <div class="alert alert-success w-50">
                <button type="button" class="btn-close" aria-label="Close" data-dismiss="alert"></button>
                {{ session()->get('message') }}
            </div>
            @endif
            <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                        <div class="p-2">
                            <label class="m-1 w-25">Doctor Name</label>
                            <input type="text"  name="name" value="{{$data->name}}">
                        </div>
                        <div class="p-2">
                            <label class="m-1  w-25">Phone</label>
                            <input type="text" name="phone" value="{{$data->phone}}">
                        </div>
                        <div class="p-2">
                            <label class="m-1  w-25">Speciality</label>
                            <input type="text" name="speciality" value="{{$data->speciality}}">

                        </div>
                        <div class="p-2">
                            <label class="m-1  w-25">Room no</label>
                            <input type="text" name="room" value="{{$data->room}}">

                        </div>
                        <div class="p-2">
                            <label class="m-1  w-25">Old Image</label>
                            <img style="width:15%" class="rounded-circle" src="doctorimage/{{$data->image}}" alt="doctor pic">
                        </div>
                        <div class="p-2">
                            <label class="m-1  w-25">Change Image</label>
                            <input type="file" name="file" >

                        </div>
                        <div class="p-2">
                            <input type="submit" class="btn btn-primary " >

                        </div>

                    </form>



        </div>

       </div>

    </div>
@include('admin.script')
  </body>
</html>
