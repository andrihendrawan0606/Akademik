@extends('layouts.admin')
@section('content')


<div class="container">
    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dashboard')}}" class="breadcrumb-item active"><i class="icon-home2 mr-2"></i>
                    Dashboard</a>
                <span class="breadcrumb-item active">Akademik</span>
                <span class="breadcrumb-item active">Entri Penilaian</span>
                <span class="breadcrumb-item ">Show Entri Penilaian</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
            
               
            </div>
        </div>
    </div>
</div>

<div><a href="{{ route('pdf.nilai',[$nilaisiswa->id]) }}" class="btn btn-danger ml-2">Export PDF</a>
    <a href="{{ route('excel.nilai',[$nilaisiswa->id]) }}" class="btn btn-success ml-2">Export Excel</a>
</div>

<h2 class="text-center">Data Nilai Ulangan Harian UTS Dan UAS</h2>
<div class="container">
    <div class="identitas">

        <div>Nama Siswa : {{$identitas->nama}}</div>
        <div>Kelas : {{$identitas->kelas}}</div>
        <div>Jurusan : {{$identitas->jurusan}}</div>

    </div>

    <div class="table-responsive">
     
        <table class="table table-bordered table-striped mt-3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>KD 3,25</th>
                    <th>KD 3,26</th>
                    <th>KD 3,27</th>
                    <th>KD 3,28</th>
                    <th>KD 3,29</th>
                    <th>KD 3,30</th>
                    <th>KD 3,31</th>
                    <th>KD 3,32</th>
                    <th>KD 3,33</th>
                    <th>KD 3,34</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                   <td>1</td>
                    <td>{{$nilaisiswa->kd325}}</td>
                    <td>{{$nilaisiswa->kd326}}</td>
                    <td>{{$nilaisiswa->kd327}}</td>
                    <td>{{$nilaisiswa->kd328}}</td>
                    <td>{{$nilaisiswa->kd329}}</td>
                    <td>{{$nilaisiswa->kd330}}</td>
                    <td>{{$nilaisiswa->kd331}}</td>
                    <td>{{$nilaisiswa->kd332}}</td>
                    <td>{{$nilaisiswa->kd333}}</td>
                    <td>{{$nilaisiswa->kd334}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="text-right mt-3 mr-4">
        <a href="{{ route('data.entripenilaian') }}" class="btn btn-dark" style="width: 100px">back</a>
    </div>

</div>


</div>


        
@endsection