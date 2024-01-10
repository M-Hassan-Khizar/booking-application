
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      {{-- <div class="p-0 m-0 row proBanner" id="proBanner">
        <div class="p-0 m-0 col-md-12">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="border-0 btn me-2 buy-now-btn">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="text-white mdi mdi-home me-3"></i></a>
              <button id="bannerClose" class="p-0 border-0 btn">
                <i class="text-white mdi mdi-close me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div> --}}
      <!-- partial:partials/_sidebar.html -->

      @include('admin.sidebar')

    @include('admin\navbar')

    <!-- container-scroller -->



    <div class="container-fluid page-body-wrapper">

        <div align="center" style="padding-top: 10px;">


        <table>
            <tr style="background-color: gray">
            <th style="padding: 15px">Doctor Name</th>
            <th style="padding: 15px">Phone</th>
            <th style="padding: 15px">Speciality</th>
            <th style="padding: 15px">Room No</th>
            <th style="padding: 15px">Image</th>
            <th style="padding: 15px">Delete</th>
            <th style="padding: 15px">Update</th>

        </tr>
      @foreach ($data as $doctor )


        <tr align="center"  style="background-color: #73dec5;" >

            <td>{{ $doctor->name }}</td>
            <td>{{ $doctor->phone }}</td>
            <td>{{ $doctor->speciality}}</td>
            <td>{{ $doctor->room}}</td>
            <td><img height="80px" width="80px" src="doctorimage/{{ $doctor->image }}"></td>

            <td>
                <a onclick="return confirm('Are you sure to delete this')" class="btn btn-danger"
                href="{{ url('deletedoctor',$doctor->id)}}">Delete</a>



            </td>
            <td>
                <a class="btn btn-primary"  href="{{ url('updatedoctor',$doctor->id) }}">update</a>
            </td>

        </tr>
        @endforeach
    </div>
    </div>

    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
