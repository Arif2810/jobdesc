<!DOCTYPE html>
<html lang="en">

<head>

  @include('templates.head')
  <title>Job Deskripsi</title>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    @include('templates.sidebar')
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      @include('templates.header')

      <div class="container-fluid">
        <h1 class="mt-4">Selamat Datang {{ Auth::user()->name }}</h1>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  @include('templates.scripts')

</body>

</html>
