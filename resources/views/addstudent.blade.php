<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data siswa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-10 offset-md-1 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Tambah Data Siswa</h3>
                </div>
                <form action="{{ route('addstudent') }}" method="post">
                @csrf
                <div class="card-body">
                    @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                    @endif
           
                    <div class="form-group">
                        <label for=""><strong>NISN</strong></label>
                        <input type="text" name="nisn" class="form-control" placeholder="NISN">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>NIS</strong></label>
                        <input type="text" name="nis" class="form-control" placeholder="NIS">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Nama Lengkap</strong></label>
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Kelas</strong></label>
                        <input type="text" name="id_kelas" class="form-control" placeholder="Kelas">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Alamat</strong></label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>No Telepon</strong></label>
                        <input type="text" name="no_telp" class="form-control" placeholder="Kode SPP">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Kode SPP</strong></label>
                        <input type="text" name="id_spp" class="form-control" placeholder="Kode SPP">
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-block">Tambahkan</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html