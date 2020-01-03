<!DOCTYPE html>
<html lang="en">

<head>

  @include('templates.head')
  <title>Data Agama</title>

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
      <section class="content-header ml-3 mb-3">
        <h3>Data Agama</h3>
      </section>

      <!-- Main content -->
      <section class="content mt-2">
        <div class="container-fluid">
          <div class="box" style="padding: 0 30px">
              <div class="box-header">
                <div class="box-header">
                  <h5 class="box-title">Tambah data agama</h5>
                </div>
                <div class="box-body">
                  @include('admin/validation')
                  <form action="{{ url('/agama') }}" method="post">
                    <div class="form-group">
                      <label>Agama</label>
                      <!-- <input class="form-control" type="text" name="nama_agama"> -->
                      {!!Form::text('nama_agama', null, ['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                      <input class="btn btn-primary" type="submit" name="submit" value="Tambahkan">
                      {{csrf_field()}}
                    </div>
                  </form>
                </div>
              </div>
          </div> 
          <hr>         
        </div>
      </section>

      <section class="content mt-2">
        <div class="container-fluid">
          <div class="box" style="padding: 0 30px">
            
            <div class="box-header">
              <h5 class="box-title">Data agama</h5>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @include('admin/notification')
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                  <?php $no=1; ?>
                  <tr style="background-color: rgb(230, 230, 230);">
                    <th>No</th>
                    <th>Agama</th>
                    <th>Action</th>                 
                  </tr>
                </thead>
                <tbody>
                  @foreach($agamas as $agamas)
                  <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $agamas->nama_agama }}</td>
                    <td>
                      <a href="{{ url('agama') }}/{{$agamas->id_agama}}/edit"><button class="btn btn-warning btn-sm">Edit</button></a>
                      <button class="btn btn-danger btn-sm" data-delid={{$agamas->id_agama}} data-toggle="modal" data-target="#delete"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            <!-- /.box-body -->
          </div>
        </div>
      </section>

    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- ./wrapper -->

  @include('templates.scripts')

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
        <form action="{{route('agama.destroy', 'test')}}" method="post">
          {{method_field('delete')}}
          {{csrf_field()}}
          <div class="modal-body" style="background-color: rgb(230, 230, 230)">
            <p class="text-center">Apakah anda yakin akan menghapus ini?</p>
            <input type="hidden" name="id_agama" id="del_id" value="">
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
