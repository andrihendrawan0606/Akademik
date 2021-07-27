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
                <span class="breadcrumb-item ">Edit Data Kategori Penilaian</span>
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

    <form action="{{ route('update.katnilai',[$kategori_penilaian->id]) }}" method="POST">
        @method('PUT')
        @csrf
<div class="container">

   
    <div class="form-group row mt-5">
        <label class="col-form-label col-lg-1">Kehadiran</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="kehadiran" class="form-control @error('kehadiran') is-invalid @enderror" value="{{$kategori_penilaian->kehadiran}}" placeholder="Masukkan Data Kehadiran">
                @error('kehadiran')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">ID Siswa</label>
        <div class="col-lg-11">
            <select id="id_siswa" name="id_siswa" class="form-control @error('id_siswa') is-invalid @enderror">
            @foreach ($sistod as $siswas)
                <option value="{{ $siswas->id }}" {{ (old('id_siswa') ?? $siswas->id) == '{{$siswas->id}}' ? 'selected' : '{{$siswas->id}}' }}>{{ $siswas->id }}</option>
            @endforeach
            </select>
        @error('kelas')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
    </div>


    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Kedisiplinan</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="kedisiplinan" class="form-control @error('kedisiplinan') is-invalid @enderror" value="{{$kategori_penilaian->kedisiplinan}}" placeholder="Masukkan Sikap Kedisiplinan">
                @error('kedisiplinan')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Prestasi</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="prestasi" class="form-control @error('prestasi') is-invalid @enderror" value="{{$kategori_penilaian->prestasi}}" placeholder="Masukkan Data Prestasi">
                @error('prestasi')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Penampilan</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="penampilan" class="form-control @error('penampilan') is-invalid @enderror" value="{{$kategori_penilaian->penampilan}}" placeholder="Masukkan Data Penampilan">
                @error('penampilan')
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