<!DOCTYPE html>
<html lang="en">
<head>
  @include('templates.head')
  <title>Tambah Karyawan</title>
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
        	<h3>Tambah Karyawan</h3>
      	</section>

      	<section class="content mt-2">
        	<div class="container-fluid">
        	@include('admin/validation')
        	@include('admin/notification')
        	<form action="{{ url('/employee') }}" method="post">
        		<div class="row">
        			<div class="col-md-6 pl-4 pr-4">
        				<div class="form-group">
							<label>SAPid</label>
							<input required="" class="form-control" type="text" name="sap">
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input required="" class="form-control" type="text" name="nama_karyawan">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select class="form-control" name="id_gender">
								<option>- Jenis Kelamin -</option>
								@foreach($genders as $gender)
								<option value="{{$gender->id_gender}}">{{$gender->nama_gender}}</option>
								@endforeach
							</select>
							<!-- <input required="" type="radio" name="jk" value="laki-laki" checked> Laki-laki
							<span style="padding-left: 20px"></span>
							<input type="radio" name="jk" value="perempuan"> Perempuan -->
						</div>
						<div class="form-group">
							<label>Tanggal Masuk</label>
							<input required="" class="form-control" type="date" name="tgl_daftar" value="<?=date('Y-m-d')?>">
						</div>
        			</div>

        			<div class="col-md-6 pl-4 pr-4">
        				<div class="form-group">
							<label>Agama</label>
							<select class="form-control" name="id_agama">
								<option>- Pilih Agama -</option>
								@foreach($agamas as $agama)
								<option value="{{$agama->id_agama}}">{{$agama->nama_agama}}</option>
								@endforeach
							</select>
						</div>
        				<div class="form-group">
							<label>Alamat</label>
							<textarea class="form-control" type="text" name="alamat" cols="80" rows="3"></textarea>
						</div>
						<div class="form-group">
							<label>No Telepon</label>
							<input class="form-control" type="text" name="telp">
						</div>
						<div class="form-group">
							<input class="btn btn-primary" type="submit" name="submit" value="Tambahkan">
							{{csrf_field()}}
							<input type="reset" class="btn btn-danger" value="Reset">
						</div>

        			</div>
        		</div>
				
        	</form>
	        </div>
      	</section>
   
	</div>
  </div>
<!-- /.content-wrapper -->

@include('templates.scripts')
</body>
</html>
