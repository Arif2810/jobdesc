<!DOCTYPE html>
<html lang="en">

<head>

  @include('templates.head')
  <title>Job Deacription</title>

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
          Job Description
        </h3>
      </section>

      <section class="content mt-2">
        <div class="container-fluid">
        @include('admin/notification')
          <div class="mb-2">
            @if(Auth::user()->akses == 'admin')
            <a href="{{ route('job_description.create') }}"> <button class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-plus"></i> Tambah Deskripsi pekerjaan</button></a>
            @endif
          </div>
          <table id="example1" class="table table-bordered table-hover">
            <thead>
              <?php $no=1; ?>
              <tr style="background-color: rgb(230, 230, 230);">
                <th>No</th>
                <th>Nama Karyawan</th>
                <th>Jabatan</th>
                <th>Job Description</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($job_descriptions as $job_description)
              <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $job_description->employee->nama_karyawan }}</td>
                <td>{{ $job_description->employee->jabatan }}</td>
                <td>{{ $job_description->job_deskripsi }}</td>
                <td>
                  @if(Auth::user()->akses == 'admin')
	                  <a href="job_description/{{$job_description->id_job}}/edit"><button class="btn btn-warning btn-sm">Edit</button></a>
	                  <button class="btn btn-danger btn-sm" data-delid={{$job_description->id_job}} data-toggle="modal" data-target="#delete"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                  @endif
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </section>

    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  @include('templates.scripts')

  <!-- page script -->
  <script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
  </script>


  <!-- modal -->
  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="background-color: rgb(200, 200, 200)">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
        </div>
        <form action="{{route('job_description.destroy', 'test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
          <div class="modal-body" style="background-color: rgb(230, 230, 230)">
            <p class="text-center">Apakah anda yakin akan menghapus ini?</p>
            <input type="hidden" name="id_job" id="del_id" value="">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger">Ya, hapus ini</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Tidak, kembali</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @include('templates.modal')

</body>

</html>
