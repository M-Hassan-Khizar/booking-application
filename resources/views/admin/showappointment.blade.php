
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
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
<div align="center" style="padding-top: 100px;">
    <table>
        <tr style="background-color: gray">
        <th style="padding: 15px">Customer Name</th>
        <th style="padding: 15px">Email</th>
        <th style="padding: 15px">Phone</th>
        <th style="padding: 15px">Doctor Name</th>
        <th style="padding: 15px">Message</th>
        <th style="padding: 15px">Status</th>
        <th style="padding: 15px">Approved</th>
        <th style="padding: 15px">Cancel</th>
    </tr>

@foreach ($data as $appoint )


<tr align="center"  style="background-color: #73dec5;" >
    <td>{{ $appoint->name }}</td>
    <td>{{ $appoint->email}}</td>
    <td>{{ $appoint->phone}}</td>
    <td>{{ $appoint->doctor}}</td>
    <td>{{ $appoint->date}}</td>
    <td>{{ $appoint->status}}</td>
    <td>
        <a class="btn btn-success"  href="{{ url('approved',$appoint->id) }}">Approved</a>
    </td>
    <td>
        <a class="btn btn-danger" href="{{ url('canceled',$appoint->id)}}">Canceled</a>
    </td>

</tr>

@endforeach
</table>

</div>



        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
