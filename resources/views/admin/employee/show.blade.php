<!DOCTYPE html>
<html lang="en">
<head>
  @include('templates.head')
  <title>Detail Karyawan</title>
</head>

<body>
  <div class="d-flex" id="wrapper">
  <!-- Sidebar -->
  @include('templates.sidebar')
  <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
    @include('templates.header')

      <!-- Content Header (Page header) -->
      <section class="content-header ml-3">
        <h3>
          Detail Karyawan
        </h3>
      </section>

      <!-- Main content -->
      <section class="content mt-4">
        <div class="container-fluid">
          <h5>{{ $employees->nama_karyawan }} / {{ $employees->sap }}</h5>
          <p>
            Jenis Kelamin : {{ $employees->genders->nama_gender }} <br>
            Tanggal Masuk : {{ $employees->tgl_daftar }} <br>
            Agama : {{ $employees->agamas->nama_agama }} <br>
            Alamat : {{ $employees->alamat }} / Telp : {{ $employees->telp }}
          </p>

          <div class="mt-2">
            <a href="{{ url('/employee') }}"> <button class="btn btn-primary btn-sm"><i class="#"></i> Kembali</button></a>
          </div>
        </div>
      </section>
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

@include('templates.scripts')
</body>
</html>
