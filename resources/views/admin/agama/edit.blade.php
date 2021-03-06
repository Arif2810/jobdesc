<!DOCTYPE html>
<html lang="en">
<head>
  @include('templates.head')
  <title>Edit Agama</title>
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
        		<h3>Edit Data Agama</h3>
      		</section>

      		<section class="content mt-2">
        		<div class="container-fluid">
        			<div class="box">

			            <div class="box-body">
			            	@include('admin/validation')
			            	@include('admin/notification')
			            	<form action="{{ url('/agama') }}/{{ $agamas->id_agama }}" method="post">
			            		<div class="form-group">
									<label>Agama</label>
									<input class="form-control" type="text" name="nama_agama" value="{{ $agamas->nama_agama }}">
								</div>							
								<div class="form-group">
									<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
									<input type="reset" class="btn btn-danger" value="Reset">
									{{csrf_field()}}
									<input type="hidden" name="_method" value="PUT">
								</div>
			            	</form>
			            </div>

        		</div>
        		</div>
        	</section>


		    <section class="content">
		      	<div class="row">
		        	<div class="col-xs-12">
		          		

		    		</div>
				</div>
			</section>
		</div>
		<!-- /.content-wrapper -->

	</div>
	@include('templates.scripts')
</body>
</html>