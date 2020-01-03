<!-- Left side column. contains the logo and sidebar -->
<!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ url('assets/dist/img/logo.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Sistem Informasi</p>
        <p>Training</p>
      </div>
    </div>

    <!-- search form -->
    <!-- /.search form -->

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="{{ url('/home') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="{{ route('employee.index') }}">
          <i class="fa fa-address-book"></i> <span> Data Karyawan</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>
      <li>
        <a href="{{ route('schedule.index') }}">
          <i class="glyphicon glyphicon-floppy-save"></i> <span>Jadwal Training</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>

      <!-- yang hanya bisa diakses admin -->
      @if(Auth::user()->akses == 'admin')
      <li class="treeview">
        <a href="#">
          <i class="fa fa-database"></i> <span>Databases</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route('category.index') }}"><i class="fa fa-circle-o"></i>Kategori Training</a></li>
          <li><a href="{{ route('venue.index') }}"><i class="fa fa-circle-o"></i>Venue</a></li>
          <li><a href="{{ route('agama.index') }}"><i class="fa fa-circle-o"></i> Agama</a></li>
          <li><a href="{{ route('position.index') }}"><i class="fa fa-circle-o"></i> Jabatan</a></li>
          <li><a href="{{ route('user.index') }}"><i class="fa fa-circle-o"></i> User</a></li>
          <li><a href="{{ route('gender.index') }}"><i class="fa fa-circle-o"></i> Gender</a></li>
          <li><a href="{{ route('route.index') }}"><i class="fa fa-circle-o"></i>Route</a></li>
        </ul>
      </li>
      @endif

      <li>
        <a href="{{ route('galery.index') }}">
          <i class="glyphicon glyphicon-camera"></i> <span>Galeri Foto</span>
          <span class="pull-right-container">
          </span>
        </a>
      </li>

      <li>
        <a href="{{ url('/about') }}">
          <i class="glyphicon glyphicon-info-sign"></i> <span>About training</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
