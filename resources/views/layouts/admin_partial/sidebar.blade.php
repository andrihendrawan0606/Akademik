<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
           
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">
                

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                
                <li class="nav-item">
                    <a href=" {{route('admin.dashboard')}}" class="nav-link  {{'admin/dashboard' === request()->path() ? 'active' : ''}}">
                        <i class="icon-stats-bars2"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                @if ($admin->level == 'admin') 
                
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link {{'admin/masterdata' === request()->path() ? 'active ' : ''}}"> <i class="icon-equalizer3"></i> <span>Master Data</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                        <li class="nav-item"><a href="{{route('data.jadwal')}}" class="nav-link">Data Jadwal</a></li>
                        <li class="nav-item"><a href="{{route('data.guru')}}" class="nav-link">Data Guru</a></li>
                        <li class="nav-item"><a href="{{route('data.kelas')}}" class="nav-link">Data Kelas</a></li>
                        <li class="nav-item"><a href="{{route('data.mapel')}}" class="nav-link">Data Mapel</a></li>
                        <li class="nav-item"><a href="{{route('data.siswa')}}" class="nav-link {{'admin/masterdata/datasiswa' === request()->path() ? 'active ' : ''}}">Data Siswa</a></li>
                    </ul>
                </li>
               

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="icon-menu2"></i> <span>Akademik</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                            <li class="nav-item"><a href="{{route ('data.katnilai')}}" class="nav-link">Data Kategori Penilaian</a></li>
                        </li>
                @elseif ($admin->level == 'guru')
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link">
                        <i class="icon-menu2"></i> <span>Akademik</span></a>
                        <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                            <li class="nav-item"><a href="{{route ('data.entripenilaian')}}" class="nav-link">Entri Penilaian </a></li>
                            <li class="nav-item"><a href="" class="nav-link">Inputan KKM </a></li>
                        </ul>
                </li>
               
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-folder5"></i> <span>Guru Dan Staff</span></a>
                   
                    <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                    </ul>
                </li>
                @elseif ($admin->level == 'admin')
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-users"></i> <span> Siswa Dan Alumni</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                        <li class="nav-item"><a href="" class="nav-link">List Nilai Siswa</a></li>
                        <li class="nav-item"><a href="" class="nav-link">List Data Alumni</a></li>
                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-inbox"></i> <span> Manajemen Data</span></a>
    
                      <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                          <li class="nav-item"><a href="{{route('data.matapelajaran')}}" class="nav-link">Input Mata Pelajaran Siswa</a></li>
                          <li class="nav-item"><a href="" class="nav-link">Input Ekstrakulikuler Siswa</a></li>
                          <li class="nav-item"><a href="{{route('data.nilaisiswa')}}" class="nav-link">Nilai Siswa</a></li>
                          <li class="nav-item"><a href="{{route('data.pembayaransiswa')}}" class="nav-link">Status Pembayaran Siswa</a></li>
                          <li class="nav-item"><a href="" class="nav-link">Rapor Siswa</a></li>
                          <li class="nav-item"><a href="" class="nav-link">Transkrip Siswa</a></li>
                      </ul>
                  </li>
                  @endif

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="icon-cog"></i> <span>Pengaturan</span></a>      
                        </ul>
                </li>
               


            
                  {{-- {{route('laporan.masyarakat')}}
{{route('laporan.masyarakat')}}
{{route('laporan.masyarakat')}}
{{route('laporan.masyarakat')}}
{{route('laporan.masyarakat')}} --}}
                {{-- @endif --}}
              
                <!-- /main -->

              
              {{-- petugas --}}
             
              {{-- @if ($petugas->level == 'admin') --}}
              {{-- <li class="nav-item nav-item-submenu  {{'petugas/report/laporan_masyarakat' === request()->path()  ||'petugas/report/laporan_pengaduan' === request()->path()  ||'petugas/dashboard' === request()->path() || 'petugas/masyarakat/data' === request()->path() ?  '' : 'nav-item-expanded nav-item-open'}} "> --}}
                {{-- <a href="#" class="nav-link {{'petugas/admin/data' === request()->path() ? 'active ' : ''}}"><i class="icon-user-tie"></i> <span> Petugas</span></a> --}}

                  <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                      {{-- <li class="nav-item"><a href="{{route('data.petugas')}}" class="nav-link {{'petugas/admin/data' === request()->path() ? 'active' : ''}}">Data Petugas</a></li> --}}
                  </ul>
              </li>
              {{-- @endif --}}



            {{-- <li class="nav-item nav-item-submenu  {{'petugas/pengaduan' === request()->path() || 'petugas/pengaduan/show/{*}' === request()->path() || 'petugas/pennav-item-expanded nav-item-opengaduan' === request()->path() ||'petugas/dashboard' === request()->path() || 'petugas/masyarakat/data' === request()->path() || 'petugas/admin/data' === request()->path()   ?  '' : 'nav-item-expanded nav-item-open'}} "> --}}
                {{-- <a href="#" class="nav-link {{'petugas/report/laporan_masyarakat' === request()->path()  ||'petugas/report/laporan_pengaduan' === request()->path()  ? 'active ' : ''}}"><i class="icon-file-text3"></i> <span> Laporan</span></a> --}}

                  <ul class="nav nav-group-sub" data-submenu-title="Widgets">
                      {{-- <li class="nav-item"><a href="{{route('laporan.pengaduan')}}" class="nav-link {{'petugas/report/laporan_pengaduan' === request()->path() ? 'active' : ''}}">Laporan Pengaduan</a></li> --}}
                      {{-- <li class="nav-item"><a href="{{route('laporan.masyarakat')}}" class="nav-link {{'petugas/report/laporan_masyarakat' === request()->path() ? 'active' : ''}}">Laporan Masyarakat</a></li> --}}
                  </ul>
              </li>
            
              {{-- petuags --}}
              
              
              
              
              {{-- Dashboard --}}
              {{-- {{route('petugas.dashboard')}}" class="nav-link {{'petugas/dashboard' === request()->path() ? 'active' : ''}} --}}

              {{-- Navv Item --}}
              {{-- {{'petugas/report/laporan_masyarakat' === request()->path()  ||'petugas/report/laporan_pengaduan' === request()->path()  || 'petugas/dashboard' === request()->path()  ||  'petugas/admin/data' === request()->path()  ? '' : 'nav-item-expanded nav-item-open'}} --}}
              
              {{-- Navv Link --}}
              {{-- {{'petugas/masyarakat/data' === request()->path() ? 'active ' : ''}} --}}
              
              
              
              
              
              
              
              
              
              
              
              
              
              
                <!-- Forms -->

               

            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->
    
</div>