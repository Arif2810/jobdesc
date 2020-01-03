<!DOCTYPE html>
<html lang="en">
<head>
  @include('templates.head')
  <title>Edit Job Description</title>
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
          		Edit Job Description
        		</h3>
      		</section>

      		<section class="content mt-2">
	        	<div class="container-fluid">
	        	@include('admin/validation')
	        	{!! Form::model($job_descriptions,['route'=>['job_description.update',$job_descriptions->id_job],'method'=>'PUT']) !!}
		    				
					<div class="form-group">
						<label>Nama Karyawan</label>
						{{ Form::select('id_karyawan', \App\Employee::pluck('nama_karyawan', 'id_karyawan'), NULL, ['class'=>'form-control']) }}
					</div>

					<div class="form-group">
						<label>Job Description</label>
						<textarea class="form-control" name="job_deskripsi" cols="80" rows="3">{{ $job_descriptions->job_deskripsi }}</textarea>
					</div>

					<div class="form-group">
						<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
						<input type="reset" class="btn btn-danger" value="Reset">
						{{csrf_field()}}
						<input type="hidden" name="_method" value="PUT">
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
