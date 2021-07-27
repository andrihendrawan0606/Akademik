@extends('layouts.admin')
@section('content')

<div class="page-header page-header-light">


    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dashboard')}}" class="breadcrumb-item active"><i class="icon-home2 mr-2"></i>
                    Dashboard</a>
                <span class="breadcrumb-item active">Data Master</span>
                <span class="breadcrumb-item active">Data Guru</span>
                <span class="breadcrumb-item ">Tambah Data Guru</span>
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

    <form action="{{ route('store.guru') }}" method="POST">
        @csrf
    <div class="form-group row mt-5">
        <label class="col-form-label col-lg-1">NIP</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" placeholder="Masukkan NIP">
                @error('nip')
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
        <label class="col-form-label col-lg-1">Mapel</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="mapel" class="form-control @error('mapel') is-invalid @enderror" placeholder="Masukkan Mapel">
                @error('mapel')
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
                <option value="">Pilih Kelas</option>
                <option value="XI RPL 1">XI RPL 1</option>
                <option value="XI RPL 2">XI RPL 2</option>
                <option value="XI RPL 3">XI RPL 3</option>
                <option value="XI TKJ 1">XI TKJ 1</option>
                <option value="XI TKJ 2">XI TKJ 2</option>
                <option value="XI TKJ 3">XI TKJ 3</option>
                <option value="XI BC 1">XI BC 1 </option>
                <option value="XI BC 2">XI BC 2 </option>
                <option value="XI BC 3">XI BC 3 </option>
                <option value="XI MM 1">XI MM 1</option>
                <option value="XI MM 2">XI MM 2</option>
                <option value="XI MM 3">XI MM 3</option>
                <option value="XI TEI">XI TEI</option>
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
                <option value="">Pilih Jenis Jurusan</option>
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

    <form action="{{route ('post.pengaduan')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group-row">
            <br>
            <div class="col-12 text-center">
                <img src="#" id="blah" style="heighwe have to defeat itt: 200px; width: 350px;" alt="">
            </div>
            <label class="col-form-label col-lg-12 text-dark">Upload Gambar</label>
            <div class="col-lg-8" style="margin-bottom: -25px;">
                <div class="custom-file">
                    <input type="file" class="custom-file-input @error('foto') is-invalid @enderror"
                        id="imgInp" name="foto">
                    <label class="custom-file-label" for="customFile">Masukan Gambar </label>
                </div>
                @error('foto')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


    <div class="text-right">
        <a href="{{ route('data.guru') }}" class="btn btn-dark" style="width: 100px">back</a>
        <button type="submit" class="btn btn-success">Tambah <i
                class=""></i></button>
    </div>
  </form>
</div>
</fieldset>


@endsection