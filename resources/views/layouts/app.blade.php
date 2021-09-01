<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div id="wrapper">
        @section('topnav')
            <div class="card">
                <div class="card-header">
                    <div class="container justify-content-center">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('studentdata')}}">Data Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('addstudent')}}">Tambah Data Siswa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Data SPP</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('logout')}}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-lg-12 mt-5">
                @section('topnav')
                @show


                @section('content')
                @show
            </div>
        </div>
    </div>





</body>

</html>
