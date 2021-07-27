@extends('layouts.admin')
@section('content')

<div class="page-header page-header-light">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dashboard')}}" class="breadcrumb-item active"><i class="icon-home2 mr-2"></i>
                    Dashboard</a>
                <span class="breadcrumb-item active">Data Master</span>
                <span class="breadcrumb-item active">Data Kelas</span>
                <span class="breadcrumb-item ">Edit Data Kelas</span>
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

    <form action="{{ route('update.kelas3',[$kelas->id]) }}" method="POST">
        @method('PUT')
        @csrf
    <div class="form-group row mt-5">
        <label class="col-form-label col-lg-1">Kode Kelas</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="kode_kelas" class="form-control @error('kode_Kelas') is-invalid @enderror" value="{{$kelas->kode_kelas}}" placeholder="Masukkan Kode Kelas">
                @error('nisn')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Nama Kelas</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="nama_kelas" class="form-control @error('nama_kelas') is-invalid @enderror" value="{{$kelas->nama_kelas}}" placeholder="Masukkan Nama Kelas">
                @error('nama')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Guru/Wali Kelas</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="guru" class="form-control @error('guru/walikelas') is-invalid @enderror" value="{{$kelas->guru}}" placeholder="Masukkan Walikelas">
                @error('walikelas')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Ruangan</label>
        <div class="col-lg-11">
            <select id="ruangan" name="ruangan" class="form-control @error('ruangan') is-invalid @enderror">
                <option value="">Pilih Ruangan</option>
                <option value="1" {{ (old('ruangan') ?? $kelas->ruangan) == '1' ? 'selected' : '' }}>1</option>
                <option value="2" {{ (old('ruangan') ?? $kelas->ruangan) == '2' ? 'selected' : '' }}>2</option>
                <option value="3" {{ (old('ruangan') ?? $kelas->ruangan) == '3' ? 'selected' : '' }}>3</option>
                <option value="4" {{ (old('ruangan') ?? $kelas->ruangan) == '4' ? 'selected' : '' }}>4</option>
                <option value="5" {{ (old('ruangan') ?? $kelas->ruangan) == '5' ? 'selected' : '' }}>5</option>
                <option value="6" {{ (old('ruangan') ?? $kelas->ruangan) == '6' ? 'selected' : '' }}>6</option>
                <option value="7" {{ (old('ruangan') ?? $kelas->ruangan) == '7' ? 'selected' : '' }}>7</option>
                <option value="8" {{ (old('ruangan') ?? $kelas->ruangan) == '8' ? 'selected' : '' }}>8</option>
                <option value="9" {{ (old('ruangan') ?? $kelas->ruangan) == '9' ? 'selected' : '' }}>9</option>
                <option value="10" {{ (old('ruangan') ?? $kelas->ruangan) == '10' ? 'selected' : '' }}>10</option>
                <option value="11" {{ (old('ruangan') ?? $kelas->ruangan) == '11' ? 'selected' : '' }}>11</option>
                <option value="12" {{ (old('ruangan') ?? $kelas->ruangan) == '12' ? 'selected' : '' }}>12</option>
                <option value="13" {{ (old('ruangan') ?? $kelas->ruangan) == '13' ? 'selected' : '' }}>13</option>
                <option value="14" {{ (old('ruangan') ?? $kelas->ruangan) == '14' ? 'selected' : '' }}>14</option>
                <option value="15" {{ (old('ruangan') ?? $kelas->ruangan) == '15' ? 'selected' : '' }}>15</option>
                <option value="16" {{ (old('ruangan') ?? $kelas->ruangan) == '16' ? 'selected' : '' }}>16</option>
                <option value="17" {{ (old('ruangan') ?? $kelas->ruangan) == '17' ? 'selected' : '' }}>17</option>
                <option value="18" {{ (old('ruangan') ?? $kelas->ruangan) == '18' ? 'selected' : '' }}>18</option>
                <option value="19" {{ (old('ruangan') ?? $kelas->ruangan) == '19' ? 'selected' : '' }}>19</option>
                <option value="20" {{ (old('ruangan') ?? $kelas->ruangan) == '20' ? 'selected' : '' }}>20</option>
            </select>
        @error('ruangan')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Jurusan</label>
        <div class="col-lg-11">
            <select name="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                <option value="">Pilih Jurusan</option>
                <option value="Rekayasa Perangkat Lunak" {{ (old('jurusan') ?? $kelas->jurusan) == 'Rekayasa Perangkat Lunak' ? 'selected' : '' }}>Rekayasa Perangkat Lunak</option>
                <option value="Multimedia" {{ (old('jurusan') ?? $kelas->jurusan) == 'Multimedia' ? 'selected' : '' }}>Multimedia</option>
                <option value="Brodcast" {{ (old('jurusan') ?? $kelas->jurusan) == 'Brodcast' ? 'selected' : '' }}>Brodcasting</option>
                <option value="Teknik Komputer dan Jaringan" {{ (old('jurusan') ?? $kelas->jurusan) == 'Teknik Komputer dan Jaringan' ? 'selected' : '' }}>Teknik Komputer dan Jaringan</option>
                <option value="Teknik Elektronika Industri" {{ (old('jurusan') ?? $kelas->jurusan) == 'Teknik Elektronika Industri' ? 'selected' : '' }}>Teknik Elektronika Industri</option>
            </select>
        @error('jurusan')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Jumlah Siswa</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                    <input type="text" name="jumlah_siswa" class="form-control @error('jumlah siswa') is-invalid @enderror" value="{{$kelas->jumlah_siswa}}" placeholder="Masukkan Jumlah Siswa">
                @error('jumlah_siswa')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="text-right">
        <a href="{{ route('data.kelas') }}" class="btn btn-dark" style="width: 100px">back</a>
        <button type="submit" class="btn btn-success">Update <i
                class=""></i></button>
    </div>
  </form>
</div>
</fieldset>


@endsection