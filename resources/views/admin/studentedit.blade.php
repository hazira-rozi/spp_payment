@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Data Siswa</h3>
                </div>

                <form method="POST" action="{{ url('student/update', $student->id ) }}">  
                    {{-- {{ url('post/update', $post->id ) }} --}}
                    {{-- @method('PUT') --}}
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
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""><strong>NISN</strong></label>
                            <input type="text" name="nisn" class="form-control" placeholder="NISN"
                                value={{ $student->nisn }}>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>NIS</strong></label>
                            <input type="text" name="nis" class="form-control" placeholder="NIS"
                                value={{ $student->nis }}>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Nama Lengkap</strong></label>
                            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap"
                                value={{ $student->nama_lengkap }}>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Kelas</strong></label>
                            <input type="text" name="id_kelas" class="form-control" placeholder="Kelas"
                                value={{ $student->id_kelas }}>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Alamat</strong></label>
                            <input type="text" name="alamat" class="form-control" placeholder="Alamat"
                                value={{ $student->alamat }}>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>No Telepon</strong></label>
                            <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telepon"
                                value={{ $student->no_telp }}>
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Kode SPP</strong></label>
                            <input type="text" name="id_spp" class="form-control" placeholder="Kode SPP"
                                value={{ $student->id_spp }}>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
@stop
