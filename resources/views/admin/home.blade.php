@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-lg-12 mt-5">

            <div class="card">
                <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <div class="card-body">
                    <h5>Selamat datang di halaman dashboard admin, <strong>{{ Auth::user()->name }}</strong></h5> <br />
                    <h5>anda login sebagai <strong>{{ Auth::user()->name }}</strong></h5>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@stop
