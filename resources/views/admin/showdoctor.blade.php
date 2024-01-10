
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">


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
