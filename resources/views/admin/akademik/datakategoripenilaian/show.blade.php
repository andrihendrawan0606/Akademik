@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dashboard')}}" class="breadcrumb-item active"><i class="icon-home2 mr-2"></i>
                    Dashboard</a>
                <span class="breadcrumb-item active">Akademik</span>
                <span class="breadcrumb-item active">Kategori Penilaian</span>
                <span class="breadcrumb-item ">Show Kategori Penilaian</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
            
               
            </div>
        </div>
    </div>
</div>

<h2 class="text-center">Data Kategori Penilaian</h2>
<div class="container">
    <div class="identitas">

        <div>ID Siswa : <strong>{{$kategoripenilaian->id_siswa}}</strong></div>
        <div>Kelas : <strong>{{$kategoripenilaian->kelas}}</strong></div>

    </div>

    <div class="table-responsive">
     
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kedisiplinan</th>
                    <th>Tanggung Jawab</th>
                    <th>Teliti</th>
                    <th>Kreatif</th>
                    <th>Kerja Sama</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td>1</td>
                    <td>{{$kategoripenilaian->Disiplin}}</td>
                    <td>{{$kategoripenilaian->tanggung_jawab}}</td>
                    <td>{{$kategoripenilaian->teliti}}</td>
                    <td>{{$kategoripenilaian->kreatif}}</td>
                    <td>{{$kategoripenilaian->kerjasama}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="text-right mt-3 mr-4">
        <a href="{{ route('data.katnilai') }}" class="btn btn-dark" style="width: 100px">back</a>
    </div>

</div>


</div>

@endsection