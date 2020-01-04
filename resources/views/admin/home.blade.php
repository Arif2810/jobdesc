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

      <section>
        <div class="container-fluid">
          <div class="row">
            <div class="col">
              <img src="{{ url('images/logo.jfif')}}" style="width: 70%">
            </div>
          </div>
        </div>
      </section>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  @include('templates.scripts')

</body>

</html>
