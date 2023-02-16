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
      <!-- partial -->

        <!-- partial:partials/_navbar.html -->
       @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

        <div class="container" style="font-size: smaller" >
            <!-- partial -->

        <table class="table table-hover table-dark table-bordered">

                    <thead>
                      <tr class="table-active">

                       <th scope="col" >Doctor name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Speciality</th>
                        <th scope="col">Room no</th>
                        <th scope="col" >Image</th>
                        <th scope="col" >Delete</th>
                        <th scope="col" >Update</th>

                      </tr>
                    </thead>
                    <hr>
                    <tbody>
                        @foreach ($data as $doctor )
                      <tr>

                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img src="doctorimage/{{$doctor->image}}" alt="pic doctor"></td>
                        <td><a onclick="return confirm('Are you sure to delete this?')" class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                        <td><a class="btn btn-primary"  href="{{url('updatedoctor',$doctor->id)}}">Update</a></td>

                      </tr>
                      @endforeach

                    </tbody>




                  </table>


        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
@include('admin.script')
  </body>
</html>
