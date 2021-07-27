@extends('layouts.admin')

@section('content')


<div class="page-header page-header-light">


    <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
        <div class="d-flex">
            <div class="breadcrumb">
                <a href="{{route('admin.dashboard')}}" class="breadcrumb-item active"><i class="icon-home2 mr-2"></i>
                    Dashboard</a>
                <span class="breadcrumb-item active">Data Master</span>
                <span class="breadcrumb-item ">Data Guru</span>
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
                            <h2 class="card-title">Data Guru</h2>
                            <div class="header-elements">
                                <a href="{{route('data.tambahh')}}" class="btn bg-indigo-600 rounded">Tambah Data</a>
                        
                            </div>
                        </div>
    
    
                        <div class="table-responsive">
                            <table class="table  ">
                                <thead>
                                    <tr class="text-center bg-dark">
                                        <th>NO</th>
                                        <th>Nama Guru</th>
                                        <th>NIP</th>
                                        <th>Email</th>
                                        <th>Mapel</th>
                                        <th>Kelas</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($guru as $gurus)

                                    <tr class=" text-center">
                                        @if (($loop->iteration % 3) === 2)
                                        <tr class="bg-teal-300 text-center">
                                            <td><b>{{ $loop->iteration }}</b></td>
                                            @else 
                                            <tr class=" text-center">
                                                <td><b>{{ $loop->iteration }}</b></td>
                                            @endif
                                        <td><b>{{ $gurus->nama }}</b></td>
                                        <td><b>{{ $gurus->nip }}</b></td>
                                        <td><b>{{ $gurus->email }}</b></td>
                                        <td><b>{{ $gurus->mapel}}</b></td>
                                        <td><b>{{ $gurus->kelas}}</b></td>
                                       <td>
                                        <form action="{{route('delete.guru',$gurus->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            
                                            <a href="{{route('edit.guru',[$gurus->id])}}" class="btn btn-warning"><span class="icon-pencil3"></span></a>
        
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
            
            {{ $guru->links() }}
        </div>
    </div>
</div>
@endsection