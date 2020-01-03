<!DOCTYPE html>
<html lang="en">
<head>
  @include('templates.head')
  <title>Edit Karyawan</title>
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
          		Edit Karyawan
        		</h3>
      		</section>

      		<section class="content mt-2">
	        	<div class="container-fluid">
	        	@include('admin/validation')
	        	{!! Form::model($employees,['route'=>['employee.update',$employees->id_karyawan],'method'=>'PUT']) !!}

		        	<div class="row">
		    			<div class="col-md-6 pl-4 pr-4">
		    				<div>
								<label>SAP</label>
								<input class="form-control" type="text" name="sap" value="{{ $employees->sap }}">
							</div><br>
							<div>
								<label>Nama</label>
								<input class="form-control" type="text" name="nama_karyawan" value="{{ $employees->nama_karyawan }}">
							</div><br>
							<div>
								<label>Jenis Kelamin</label>
								{{ Form::select('id_gender', \App\Gender::pluck('nama_gender', 'id_gender'), NULL, ['class'=>'form-control']) }}
							</div><br>
							<div>
								<label>Tanggal Daftar</label>
								<input class="form-control" type="date" name="tgl_daftar" value="{{ $employees->tgl_daftar }}">
							</div><br>
		    			</div>

		    			<div class="col-md-6 pl-4 pr-4">
		    				<div>
								<label>Agama</label>
								{{ Form::select('id_agama', \App\Agama::pluck('nama_agama', 'id_agama'), NULL, ['class'=>'form-control']) }}
							</div><br>
							<div>
								<label>Alamat</label>
								<textarea class="form-control" name="alamat" cols="80" rows="3">{{ $employees->alamat }}</textarea>
								<!-- <input class="form-control" type="text" name="alamat" value="{{ $employees->alamat }}"> -->
							</div><br>
							<div>
								<label>No Telepon</label>
								<input class="form-control" type="text" name="telp" value="{{ $employees->telp }}">
							</div><br><br>
							<div>
								<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
								<input type="reset" class="btn btn-danger" value="Reset">
								{{csrf_field()}}
								<input type="hidden" name="_method" value="PUT">
							</div>
		    			</div>
		    		</div>

	        	</div>
      		</section>

		</div>
		<!-- /.content-wrapper -->

	<!-- Control Sidebar -->
	</div>
@include('templates.scripts')
</body>
</html>
