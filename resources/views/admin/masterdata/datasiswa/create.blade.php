@extends('layouts.admin')
@section('content')

<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dashboard')}}" class="breadcrumb-item active"><i class="icon-home2 mr-2"></i>
                    Dashboard</a>
                <span class="breadcrumb-item active">Data Master</span>
                <span class="breadcrumb-item active">Data Siswa</span>
                <span class="breadcrumb-item ">Tambah Data Siswa</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
            
               
            </div>
        </div>
    </div>
</div>

<fieldset class="mb-3">

<div class="container">

    <form action="{{ route('store.siswa') }}" method="POST">
        @csrf
    <div class="form-group row mt-5">
        <label class="col-form-label col-lg-1">NISN</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror" placeholder="Masukkan NISN">
                @error('nisn')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Nama</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Lengkap">
                @error('nama')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Email</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email">
                @error('email')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Kelas</label>
        <div class="col-lg-11">
            <select id="kelas" name="kelas" class="form-control @error('kelas') is-invalid @enderror">
                <option value="">-- Pilih Kelas --</option>
                <option value="XI RPL 1">XI RPL 1</option>
                <option value="XI RPL 2">XI RPL 2</option>
                <option value="XI RPL 3">XI RPL 3</option>
                <option value="XI TKJ 1">XI TKJ 1</option>
                <option value="XI TKJ 2">XI TKJ 2</option>
                <option value="XI TKJ 3">XI TKJ 3</option>
                <option value="XI BC 1">XI BC 1</option>
                <option value="XI BC 2">XI BC 2</option>
                <option value="XI BC 3">XI BC 3</option>
                <option value="XI MM 1">XI MM 1</option>
                <option value="XI MM 2">XI MM 2</option>
                <option value="XI MM 3">XI MM 3</option>
                <option value="XI TEI">XI TEO </option>
            </select>
        @error('kelas')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">jurusan</label>
        <div class="col-lg-11">
            <select id="jurusan" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                <option value="">-- Pilih Jenis Jurusan --</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Brodcast">Brodcasting</option>
                <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                <option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
            </select>
        @error('jurusan')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Kelamin</label>
        <div class="col-lg-11">
            <select id="kelamin" name="kelamin" class="form-control @error('kelamin') is-invalid @enderror">
                <option value="">-- Pilih Jenis Kelamin --</option>
                <option value="laki-laki">Laki - Laki</option>
                <option value="perempuan">Perempuan</option>
            </select>
        @error('kelamin')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
    </div>

    <div class="text-right">
        <a href="{{ route('data.siswa') }}" class="btn btn-dark" style="width: 100px">back</a>
        <button type="submit" class="btn btn-success">Tambah <i
                class=""></i></button>
    </div>
  </form>
</div>
</fieldset>


@endsection