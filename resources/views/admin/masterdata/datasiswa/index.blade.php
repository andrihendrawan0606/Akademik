@extends('layouts.admin')

@section('content')


<div class="page-header page-header-light">


    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dashboard')}}" class="breadcrumb-item active"><i class="icon-home2 mr-2"></i>
                    Dashboard</a>
                <span class="breadcrumb-item active">Data Master</span>
                <span class="breadcrumb-item ">Data Siswa</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
            
               
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                @if ($message = Session::get('success'))
                <div class="alert bg-success text-white alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <span class="font-weight-semibold">Success!</span> {{$message}} 
                </div>   
                @endif




                <div class="table-responsive">
                    
                    <div class="card ">
                        <div class="card-header header-elements-inline">
                            <h2 class="card-title">Data Siswa</h2>
                            <div class="header-elements">
                                <a href="{{route('data.tambah')}}" class="btn bg-indigo-600 rounded">Tambah Data</a>
                        
                            </div>
                        </div>
    
    
                        <div class="table-responsive">
                            <table class="table  ">
                                <thead>
                                    <tr class="text-center bg-dark">
                                        <th>NO</th>
                                        <th>Nama Siswa</th>
                                        <th>NISN</th>
                                        <th>Email</th>
                                        <th>Kelas</th>
                                        <th>Jenis Kelamin</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $siswas)

                                    <tr class=" text-center">
                                        @if (($loop->iteration % 3) === 2)
                                        <tr class="bg-teal-300 text-center">
                                            <td><b>{{ $loop->iteration }}</b></td>
                                            @else 
                                            <tr class=" text-center">
                                                <td><b>{{ $loop->iteration }}</b></td>
                                            @endif
                                        <td><b>{{ $siswas->nama }}</b></td>
                                        <td><b>{{ $siswas->nisn }}</b></td>
                                        <td><b>{{ $siswas->email }}</b></td>
                                        <td><b>{{ $siswas->kelas}}</b></td>
                                        <td><b>{{ $siswas->kelamin}}</b></td>
                                       <td>
                                        <form action="{{route('delete.siswa',$siswas->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            
                                            <a href="{{route('edit.siswa',[$siswas->id])}}" class="btn btn-warning"><span class="icon-pencil3"></span></a>
        
                                            <button type="submit" class="btn btn-danger" ><span class="icon-trash"></span></button> 
                                        </form>
                                       </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
            <div class="text-center">
                
            </div>
            
            {{ $siswa->links() }}
        </div>
    </div>
</div>

{{-- <div class="page-header page-header-light">


    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="#" class="breadcrumb-item active"><i class="icon-home2 mr-2"></i>
                    Dashboard</a>
                <span class="breadcrumb-item active">Siswa Dan Alumni</span>
                <span class="breadcrumb-item">Data Siswa</span>
            </div>

            <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
        </div>

        <div class="header-elements d-none">
            <div class="breadcrumb justify-content-center">
             
                
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
                <div class="card-body">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a href="#basic-pill1" class="nav-link active" data-toggle="tab">Active</a></li>
                        <li class="nav-item"><a href="#basic-pill2" class="nav-link" data-toggle="tab">Inactive</a></li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#basic-pill3" class="dropdown-item" data-toggle="tab">Dropdown pill</a>
                                <a href="#basic-pill4" class="dropdown-item" data-toggle="tab">Another pill</a>
                            </div>
                        </li>
                    </ul>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            
            <div class="card">
                @if ($message = Session::get('success'))
                <div class="alert bg-success text-white alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                    <span class="font-weight-semibold">Success!</span> {{$message}} 
                </div>   
                @endif




                <div class="table-responsive">
                    
                    <div class="card ">
                        <div class="card-header header-elements-inline">
                            <h2 class="card-title">Data Nilai Siswa</h2>
                            <div class="header-elements">
                                <a href="}" class="btn bg-indigo-600 rounded">Tambah Data</a>
                        
                            </div>
                        </div>
    
    
                        <div class="table-responsive">
                            <table class="table  ">
                                <thead>
                                    <tr class="text-center bg-dark">
                                        <th>NO</th>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>JK</th>
                                        <th>Email</th>
                                        <th>Kelas</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $siswas)

                                    <tr class=" text-center">
                                        @if (($loop->iteration % 3) === 2)
                                        <tr class="bg-teal-300 text-center">
                                            <td><b>{{ $loop->iteration }}</b></td>
                                            @else 
                                            <tr class=" text-center">
                                                <td><b>{{ $loop->iteration }}</b></td>
                                            @endif
                                        <td><b>{{ $siswas->nisn }}</b></td>
                                        <td><b>{{ $siswas->nama }}</b></td>
                                        <td><b>{{ $siswas->email }}</b></td>
                                        <td><b>{{ $siswas->kelas}}</b></td>
                                        <td><b>{{ $siswas->kelamin}}</b></td>
                                       <td>
                                        <form action="" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            
                                            <a href="" class="btn btn-warning">Edit</a>
        
                                            <button type="submit" class="btn btn-danger " >Delete</button> 
                                        </form>
                                       </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
            <div class="text-center">
                
            </div>
            

        </div>
    </div>
</div> --}}


@endsection