@extends('layouts.admin')
@section('content')
    
<fieldset class="mb-3">

<div class="container">

    <form action="{{ route('store.entripenilaian') }}" method="POST">
        @csrf
    <div class="form-group row mt-5">
        <label class="col-form-label col-lg-1">Nama Siswa</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>
                <input type="text" name="" class="form-control" value="{{$siswa->nama}}" disabled="disabled">
                @error('Nama Siswa')
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
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>

                        <input type="text" name="" class="form-control" value="{{$siswa->kelas}}" disabled="disabled">

                @error('Kelas')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>


    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Jurusan</label>
        <div class="col-lg-11">
            <div class="input-group">
                <span class="input-group-prepend">
                    <span class="input-group-text"><i class="icon-user"></i></span>
                </span>

                        <input type="text" name="" class="form-control" value="{{$siswa->jurusan}}" disabled="disabled">

                @error('Jurusan')
                    <span>
                        <small class="text-danger">{{ $message }}</small>
                    </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group row mt-2">
        <label class="col-form-label col-lg-1">Mata Pelajaran</label>
        <div class="col-lg-11">
            <select id="mapel" name="mapel" class="form-control @error('mapel') is-invalid @enderror">
                <option value="">-- Pilih Mata Pelajaran --</option>
            @foreach ($mapel as $siswas)
                <option value="{{ $siswas->nama_mapel }}">{{ $siswas->nama_mapel }}</option>
            @endforeach
            </select>
        @error('Mata Palajaran')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        </div>
    </div>

    <h3 class="text-center col-md-10">Nilai Ulangan Harian</h3>
    <div class="form-group row">
        <div class="col-lg-10">
            <div class="row ml-5">
                <div class="col-md-4">

                    <form action="" method="POST">
                    <div class="form-group mt-2">
                        <a href="" class="btn btn-warning" style="width: 255PX;"><span class=""></span>KD 3,25</a>
                    </div>

                    <div class="form-group">
                        <a href="" class="btn btn-warning" style="width: 255PX;"><span class=""></span>KD 3,25</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group mt-2">
                        <a href="" class="btn btn-warning" style="width: 255PX;"><span class=""></span>KD 3,27</a>
                    </div>

                    <div class="form-group">
                        <a href="" class="btn btn-warning" style="width: 255PX;"><span class=""></span>KD 3,28</a>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group mt-2">
                        <a href="" class="btn btn-warning" style="width: 255PX;"><span class=""></span>KD 3,29</a>
                    </div>

                    <div class="form-group">
                        <a href="" class="btn btn-warning" style="width: 255PX;"><span class=""></span>KD 3,30</a>
                    </div>
                </div>

                <div class="col-md-4 mt-3">
                    <div class="form-group">
                        <a href="" class="btn btn-warning" style="width: 255PX;"><span class=""></span>KD 3,31</a>
                    </div>
                </div>
                    <div class="form-group mt-3 ml-2">
                        <a href="" class="btn btn-warning" style="width: 255PX;"><span class=""></span>KD 3,32</a>
                    </div>
                </div>
        </div>
                    <div class="form-group">
                        <a href="" class="btn btn-warning" style="width: 255PX;"><span class=""></span>KD 3,33</a>
                    </div>

                    <div class="form-group">
                        <a href="" class="btn btn-warning" style="width: 255PX;"><span class=""></span>KD 3,34</a>
                    </div>
                </div>
            </div>

            <h3 class="text-center mt-3">Nilai UTS</h3>
            <div class="form-group row ml-1">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="uts" class="form-control ml-5  @error('uts') is-invalid @enderror" placeholder="Masukkan Nilai UTS">
                    @error('UTS')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                        </div>
                    </div>
                </div>
            </div>
        </form>

            
            <h3 class="text-center mt-3">Nilai UAS</h3>
            <div class="form-group row ml-1">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="uas" class="form-control ml-5  @error('uas') is-invalid @enderror" placeholder="Masukkan Nilai UAS">
                    @error('UAS')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-right mt-2">
                <a href="{{ route('data.entripenilaian') }}" class="btn btn-dark" style="width: 100px">back</a>
                <button type="submit" class="btn btn-success">Tambah <i
                        class=""></i></button>
            </div>
        </div>
  </form>
</div>
</fieldset>


@endsection