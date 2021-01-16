@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Tambah Data Register
						<form action="{{url('daftar')}}" method="post">
							@csrf
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Nama</label>
						<input type="nama" name="nama" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="">Username</label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="">Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label class="control-label" for="">Confirmasi Password</label>
						<input type="confirpassword" name="confirpassword" class="form-control">
					</div>
					
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection