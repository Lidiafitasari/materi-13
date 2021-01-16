@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Data Register
						<a href="{{url('daftar/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus">  Tambah Data</i></a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th width="200px">Aksi</th>
								<th>Nama</th>
								<th>Email</th>
							</thead>
							<tbody>
								@foreach($list_daftar as $daftar)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">										
											<a href="{{url('daftar', $daftar->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('daftar', $daftar->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete',['url' => url('daftar', $daftar->id)])
										</div>

									</td>
									<td>{{$daftar->username}}</td>
									<td>{{$daftar->nama}}</td>
									<td>{{$daftar->email}}</td>
									
								</tr>
								@endforeach
							</tbody>							
						</table>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection