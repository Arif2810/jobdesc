<div class="bg-light border-right" id="sidebar-wrapper">
  <div class="sidebar-heading"><strong> Job Deskripsi </strong></div>
  <div class="list-group list-group-flush">
    <a href="{{ url('/home') }}" class="list-group-item list-group-item-action bg-light">Dashboard</a>
    <a href="{{ route('employee.index') }}" class="list-group-item list-group-item-action bg-light">Data Karyawan</a>
    <a href="{{ route('job_description.index') }}" class="list-group-item list-group-item-action bg-light">Job Deskripsi</a>

    @if(Auth::user()->akses == 'admin')
    <li class="nav-item dropdown" style="list-style-type: none;">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;">
        Database
      </a>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('agama.index') }}">Agama</a>
        <a class="dropdown-item" href="{{ route('user.index') }}">User</a>
        <a class="dropdown-item" href="{{ route('gender.index') }}">Gender</a>
      </div>
    </li>
    @endif

    <a href="{{ url('/about') }}" class="list-group-item list-group-item-action bg-light">Sejarah Perusahaan</a>
  </div>
</div>