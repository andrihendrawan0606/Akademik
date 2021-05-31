@extends('layouts.admin')
@section('content')
    
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
                <option value="">Pilih Kelas</option>
                <option value="XI RPL 1" {{ (old('kelas') ?? $siswa->kelas) == 'XI RPL 1' ? 'selected' : '' }}>XI RPL 1</option>
                <option value="XI RPL 2" {{ (old('kelas') ?? $siswa->kelas) == 'XI RPL 2' ? 'selected' : '' }}>XI RPL 2</option>
                <option value="XI RPL 3" {{ (old('kelas') ?? $siswa->kelas) == 'XI RPL 3' ? 'selected' : '' }}>XI RPL 3</option>
            </select>
        @error('kelas')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Kelamin</label>
        <div class="col-lg-11">
            <select id="kelamin" name="kelamin" class="form-control @error('kelamin') is-invalid @enderror">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="laki-laki" {{ (old('kelamin') ?? $siswa->kelamin) == 'laki-laki' ? 'selected' : '' }}>Laki - Laki</option>
                <option value="perempuan" {{ (old('kelamin') ?? $siswa->kelamin) == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        @error('kelamin')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
    </div>

    <div class="text-right">
        <a href="{{ route('data.siswa') }}" class="btn btn-dark">back</a>
        <button type="submit" class="btn btn-primary">Update <i
                class=""></i></button>
    </div>
  </form>
</div>
</fieldset>


@endsection