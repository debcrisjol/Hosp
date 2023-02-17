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

       @include('admin.navbar')
       <div class="container-fluid page-body-wrapper">
       <div class="d-flex flex-column">


              <h2 class="card-title mt-3">Appointments</h2>

                <table >



                    <thead>
                      <tr class="table-active">

                       <th scope="col" >Customer name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Doctor name</th>
                        <th scope="col" >Date</th>
                        <th scope="col" >Message</th>
                        <th scope="col">Status</th>
                        <th scope="col">Approved</th>
                        <th scope="col">Canceled</th>
                      </tr>
                    </thead>
                    <hr>
                    <tbody>
                        @foreach ($data as $appoint )


                      <tr>

                        <td>{{$appoint->name}}</td>
                        <td>{{$appoint->email}}</td>
                        <td>{{$appoint->phone}}</td>
                        <td>{{$appoint->doctor}}</td>
                        <td>{{$appoint->date}}</td>
                        <td>"{{$appoint->message}}"</td>
                        <td>{{$appoint->status}}</td>
<td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
<td><a class="btn btn-danger"  href="{{url('canceled',$appoint->id)}}">Canceled</a></td>
                      </tr>
                      @endforeach

                    </tbody>


                  </table>
              </div>
</div>


@include('admin.script')
  </body>
</html>
