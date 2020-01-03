<!DOCTYPE html>
<html lang="en">
<head>
  @include('templates.head')
  <title>Edit User</title>
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
        		<h3>Edit Data User</h3>
      		</section>

      		<section class="content mt-2">
	        	<div class="container-fluid">

	            	@if(session('result') == 'fail')
		            	<div class="alert alert-danger" role="alert">
		            		Data gagal di update !
		            	</div>
	            	@endif

	            	@include('admin/validation')
	            	{!! Form::model($users,['route'=>['user.update',$users->id],'method'=>'PUT']) !!}

	            	<div class="row">
		    			<div class="col-md-6 pl-4 pr-4">
		    				<div class="form-group">
								<label>Nama</label>
								<input class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" type="text" name="name" value="{{ old('name', $users->name) }}" required="">
								@if ($errors->has('name'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('name') }}</strong>
		                            </span>
		                        @endif
							</div>
							<div class="form-group">
								<label>Username</label>
								<input class="form-control{{ $errors->has('usernae') ? ' has-error' : '' }}" type="text" name="username" value="{{ old('username', $users->username) }}" required="">
								@if ($errors->has('username'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('username') }}</strong>
		                            </span>
		                        @endif
							</div>
							<div class="form-group">
								<label>Email</label>
								<input class="form-control{{ $errors->has('email') ? ' has-error' : '' }}" type="email" name="email" value="{{ old('email', $users->email) }}" required="">
								@if ($errors->has('email'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('email') }}</strong>
		                            </span>
		                        @endif
							</div>
		    			</div>

		    			<div class="col-md-6 pl-4 pr-4">
		    				<div class="form-group">
								<label>Password</label>
								<input class="form-control{{ $errors->has('password') ? ' has-error' : '' }}" type="password" name="password">
								@if ($errors->has('password'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('password') }}</strong>
		                            </span>
		                        @endif
								<div class="form-text text-muted">
									<small>kosongkan password apabila tidak diubah</small>
								</div>
							</div>
							<div class="form-group">
								<label>Ulangi password</label>
								<input class="form-control{{ $errors->has('repassword') ? ' has-error' : '' }}" type="password" name="repassword">
								@if ($errors->has('repassword'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('repassword') }}</strong>
		                            </span>
		                        @endif
							</div>
							<div class="form-group">
								<?php
									$val = old('akses', $users->akses); 
								?>
								<label>Hak akses</label>
								<select class="form-control{{ $errors->has('akses') ? ' has-error' : '' }}" name="akses" required="">
									<option value=""{{ $val==""?'selected':'' }}>-- Pilih hak akses sebagai --</option>
									<option value="operator" {{ $val=="operator"?'selected':'' }}>Operator</option>
									<option value="admin" {{ $val=="admin"?'selected':'' }}>Administrator</option>
								</select>
								@if ($errors->has('akses'))
		                            <span class="help-block">
		                                <strong>{{ $errors->first('akses') }}</strong>
		                            </span>
		                        @endif
								<!-- <input required="" class="form-control" type="password" name="password"> -->
							</div><br>

							<div class="form-group">
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