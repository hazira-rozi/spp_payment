@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-lg-12 mt-5">
            @if (session('success'))
                <div class="alert-success">
                    <p>{{ session('success') }}</p>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h3>Data Siswa</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>NISN</th>
                                <th>NIS</th>
                                <th>Nama Lengkap</th>
                                <th>Kode Kelas</th>
                                <th>Alamat</th>
                                <th>No Telpon</th>
                                <th>Kode SPP</th>
                                <th colspan="2" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->nisn }}</td>
                                    <td>{{ $student->nis }}</td>
                                    <td>{{ $student->nama_lengkap }}</td>
                                    <td>{{ $student->id_kelas }}</td>
                                    <td>{{ $student->alamat }}</td>
                                    <td>{{ $student->no_telp }}</td>
                                    <td>{{ $student->id_spp }}</td>
                                    <td><a class="btn btn-primary" href="student/edit/{{ $student->id }}"
                                            role="button">Edit</a></td>
                                            <td><a class="btn btn-danger" href="student/delete/{{ $student->id }}"
                                                role="button">Delete</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
</body>

</html>
