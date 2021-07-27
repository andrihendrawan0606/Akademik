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
                <span class="breadcrumb-item ">Edit Data Guru</span>
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

    <form action="{{route('update.siswa',[$siswa->id])}}" method="POST">
        @method('PUT')
        @csrf
    <div class="form-group row mt-5">
        <label class="col-form-label col-lg-1">NISN</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="nisn" class="form-control @error('nisn') is-invalid @enderror" value="{{$siswa->nisn}}">
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
                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$siswa->nama}}">
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
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$siswa->email}}">
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
                <option value="XI RPL 1" {{ (old('kelas') ?? $siswa->kelas) == 'XI RPL 1' ? 'selected' : '' }}>XI RPL 1</option>
                <option value="XI RPL 2" {{ (old('kelas') ?? $siswa->kelas) == 'XI RPL 2' ? 'selected' : '' }}>XI RPL 2</option>
                <option value="XI RPL 3" {{ (old('kelas') ?? $siswa->kelas) == 'XI RPL 3' ? 'selected' : '' }}>XI RPL 3</option>
                <option value="XI TKJ 1" {{ (old('kelas') ?? $siswa->kelas) == 'XI TKJ 1' ? 'selected' : '' }}>XI TKJ 1</option>
                <option value="XI TKJ 2" {{ (old('kelas') ?? $siswa->kelas) == 'XI TKJ 2' ? 'selected' : '' }}>XI TKJ 2</option>
                <option value="XI TKJ 3" {{ (old('kelas') ?? $siswa->kelas) == 'XI TKJ 3' ? 'selected' : '' }}>XI TKJ 3</option>
                <option value="XI BC 1" {{ (old('kelas') ?? $siswa->kelas) == 'XI BC 1' ? 'selected' : '' }}>XI BC 1</option>
                <option value="XI BC 2" {{ (old('kelas') ?? $siswa->kelas) == 'XI BC 2' ? 'selected' : '' }}>XI BC 2</option>
                <option value="XI BC 3" {{ (old('kelas') ?? $siswa->kelas) == 'XI BC 3' ? 'selected' : '' }}>XI BC 3</option>
                <option value="XI MM 1" {{ (old('kelas') ?? $siswa->kelas) == 'XI MM 1' ? 'selected' : '' }}>XI MM 1</option>
                <option value="XI MM 2" {{ (old('kelas') ?? $siswa->kelas) == 'XI MM 2' ? 'selected' : '' }}>XI MM 2</option>
                <option value="XI MM 3" {{ (old('kelas') ?? $siswa->kelas) == 'XI MM 3' ? 'selected' : '' }}>XI MM 3</option>
                <option value="XI TEI" {{ (old('kelas') ?? $siswa->kelas) == 'XI TEI' ? 'selected' : '' }}>XI TEI</option>
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
                <option value="Rekayasa Perangkat Lunak" {{ (old('jurusan') ?? $siswa->jurusan) == 'Rekayasa Perangkat Lunak' ? 'selected' : '' }}>Rekayasa Perangkat Lunak</option>
                <option value="Multimedia" {{ (old('jurusan') ?? $siswa->jurusan) == 'Multimedia' ? 'selected' : '' }}>Multimedia</option>
                <option value="Brodcast" {{ (old('jurusan') ?? $siswa->jurusan) == 'Brodcast' ? 'selected' : '' }}>Brodcasting</option>
                <option value="Teknik Komputer dan Jaringan" {{ (old('jurusan') ?? $siswa->jurusan) == 'Teknik Komputer dan Jaringan' ? 'selected' : '' }}>Teknik Komputer dan Jaringan</option>
                <option value="Teknik Elektronika Industri" {{ (old('jurusan') ?? $siswa->jurusan) == 'Teknik Elektronika Industri' ? 'selected' : '' }}>Teknik Elektronika Industri</option>
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
                <option value="laki-laki" {{ (old('kelamin') ?? $siswa->kelamin) == 'laki-laki' ? 'selected' : '' }}>Laki - Laki</option>
                <option value="perempuan" {{ (old('kelamin') ?? $siswa->kelamin) == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        @error('kelamin')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
    </div>

    <div class="text-right">
        <a href="{{ route('data.siswa') }}" class="btn btn-dark" style="width: 100px">back</a>
        <button type="submit" class="btn btn-success">Update <i
                class=""></i></button>
    </div>
  </form>
</div>
</fieldset>


@endsection