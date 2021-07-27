@extends('layouts.admin')
@section('content')
    
<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dashboard')}}" class="breadcrumb-item active"><i class="icon-home2 mr-2"></i>
                    Dashboard</a>
                <span class="breadcrumb-item active">Akademik</span>
                <span class="breadcrumb-item active">Data Kategori Penilaian</span>
                <span class="breadcrumb-item ">Tambah Data Kategori Penilaian</span>
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

    <form action="{{ route('store.katnilai') }}" method="POST">
        @csrf
<div class="container">
	<div class="alert alert-info bg-white alert-styled-left alert-arrow-left alert-dismissible mt-2">
        <h6 class="alert-heading font-weight-semibold mb-1">Angka Kriteria</h6>
            <div>4 : Sangat Baik</div>
            <div>3 : Baik</div>
            <div>2 : Cukup</div>
            <div>1 : Kurang</div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">ID Siswa</label>
        <div class="col-lg-11">
            <select id="id_siswa" name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror">
            @foreach ($siswa as $siswas)
                <option value="{{ $siswas->id }}">{{ $siswas->id }}</option>
            @endforeach
            </select>
        @error('ID Siswa')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Kelas</label>
        <div class="col-lg-11">
            <select id="kelas" name="kelas" class="form-control @error('kelas') is-invalid @enderror">
            @foreach ($siswa as $siswas)
                <option value="{{ $siswas->kelas }}">{{ $siswas->kelas }}</option>
            @endforeach
            </select>
        @error('Kelas')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
    </div>

    <div class="form-group row mt-5">
        <label class="col-form-label col-lg-1">Disiplin</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="number" name="disiplin" class="form-control @error('disiplin') is-invalid @enderror" placeholder="Masukkan Nilai Kedisiplinan">
                @error('Disiplin')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Tanggung Jawab</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="number" name="tanggung_jawab" class="form-control @error('tanggung_jawab') is-invalid @enderror" placeholder="Masukkan Nilai Tanggung Jawab">
                @error('Tanggung Jawab')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Teliti</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="number" name="teliti" class="form-control @error('teliti') is-invalid @enderror" placeholder="Masukkan Nilai Ketelitian">
                @error('teliti')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Kreatif</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="number" name="kreatif" class="form-control @error('kreatif') is-invalid @enderror" placeholder="Masukkan Nilai Kekreatifan">
                @error('kreatif')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Kerja Sama</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="number" name="kerjasama" class="form-control @error('kerjasama') is-invalid @enderror" placeholder="Masukkan Nilai Kerja Sama">
                @error('Kerja Sama')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>
</div>


    <div class="text-right">
        <a href="{{ route('data.katnilai') }}" class="btn btn-dark" style="width: 100px">back</a>
        <button type="submit" class="btn btn-success">Tambah <i
                class=""></i></button>
    </div>
  </form>
</div>
</fieldset>


@endsection