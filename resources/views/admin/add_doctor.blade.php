<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }
</style>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        @include('admin.sidebar')

        @include('admin\navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            <div class="container" align="center"  style= "padding-top: 100px;">

                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x
                    </button>
                    {{ session()->get('message')}}
                </div>
                @endif

                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data" style="background-color: gray" >


                    @csrf
                    <div style="padding-top: 15px;" >
                        <label>Doctor Name</label>
                        <input type ="text" style="color:black" name="doctor_name" placeholder="write the Name" required="">
                    </div>
                    <div style="padding-top: 15px;">
                        <label>Phone No.</label>
                        <input type="number" style="color:black" name="phone_Number" placeholder="write the Number"required="">
                    </div>

                    <div style="padding-top: 15px;">

                        <label>Speciality</label>

                        <select name="speciality" style="color:black; width:200px"required="">
                            <option>---Select---</option>
                            <option value="Skin">Skin</option>
                            <option value="Heart">Heart</option>
                            <option value="Eye">Eye</option>
                            <option value="Nose">Nose</option>
                        </select>
                    </div>
                    <div style="padding-top: 15px;">
                        <label>Room No.</label>
                        <input type="text" style="color:black" name="room_no" placeholder="write the name" required="">
                    </div>
                    <div style="padding-top: 15px;" required="">
                        <label>Doctor Image</label>
                        <input type="file" name="file">
                    </div>

                    <div style="padding-top: 15px;">

                        <input type="submit"class="btn btn-success">
                    </div>
                </form>


            </div>
            </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
</body>

</html>
