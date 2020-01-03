<!DOCTYPE html>
<html lang="en">
<head>
  @include('templates.head')
  <title>Tambah Job Description</title>
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
        	<h3>Tambah Job Description</h3>
      	</section>

      	<section class="content mt-2">
        	<div class="container-fluid">
        	@include('admin/validation')
        	@include('admin/notification')
        	<form action="{{ url('/job_description') }}" method="post">


				<div class="form-group">
					<label>Nama Karyawan</label>
					<select class="form-control" name="id_karyawan">
						<option>- Nama Karyawan -</option>
						@foreach($employees as $employee)
						<option value="{{$employee->id_karyawan}}">{{$employee->nama_karyawan}}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<label>Job Description</label>
					<textarea required="" class="form-control" name="job_deskripsi" cols="4" rows="4" placeholder="Input Job Description"></textarea>

				</div>

				<div class="form-group">
					<input class="btn btn-primary" type="submit" name="submit" value="Tambahkan">
					{{csrf_field()}}
					<input type="reset" class="btn btn-danger" value="Reset">
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
