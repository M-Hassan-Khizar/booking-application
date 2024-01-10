<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.css')
    <style>
        label {

            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">


        @include('admin.sidebar')

        @include('admin\navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">


            <div class="container" align="center" style="padding-top: 100px;">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">X
                    </button>
                    {{ session()->get('message')}}
                </div>
                @endif


                <form action="{{ url('editdoctor', $data->id) }}" method="POST" enctype="multipart/form-data"
                    style="background-color: gray">
                    @csrf
                    <div style="padding: 15px">

                        <label>Doctor</label>
                        <input type="text" style="color:black" name="name" value="{{ $data->name }}">

                    </div>
                    <div style="padding: 15px">

                        <label>Phone</label>
                        <input type="text" style="color:black" name="phone" value="{{ $data->phone }}">

                    </div>
                    <div style="padding: 15px">

                        <label>Speciality</label>
                        <input type="text" style="color:black" name="speciality" value="{{ $data->speciality }}">

                    </div>
                    <div style="padding: 15px">

                        <label>Room</label>
                        <input type="text" style="color:black" name="room" value="{{ $data->room }}">

                    </div>
                    <div style="padding: 15px">

                        <label>Old Image</label>
                        <img height="150px" width="150px" src="doctorimage/{{ $data->image }}">

                    </div>
                    <div>
                        <label>Change image</label>
                        <input type="file" name="file">
                    </div>
                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-primary">
                    </div>



                </form>


            </div>



            <!-- container-scroller -->
            <!-- plugins:js -->
            @include('admin.script')
</body>

</html>
