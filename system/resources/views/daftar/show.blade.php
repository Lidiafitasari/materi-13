@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data Register
					</div>
					<div class="card-body">
						<h4>{{$daftar->nama}}</h4><hr>
						<p>
							{{"@".$daftar->username}} |
							Email : {{$daftar->email}} |
						</p>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection