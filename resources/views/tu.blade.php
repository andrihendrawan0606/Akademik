@extends('layouts.app')

@section('content')
    
    <div class="container">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{url('admin')}}">Halaman Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('siswa')}}">Halaman Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('tu')}}">Halaman TU</a>
            </li>
        </ul>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
    
                    <div class="card-body">
                        <h1>Ini adalah halaman TU Cok</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection