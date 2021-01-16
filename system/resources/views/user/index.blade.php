@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Data User
						<a href="{{url('admin/user/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus">  Tambah Data</i></a>
					</div>
					<div class="card-body">
						<table class="table">
							<thead>
								<th>No</th>
								<th width="200px">Aksi</th>
								<th>Username</th>
								<th>Nama</th>
								<th>Email</th>
								<th>Jenis Kelamin</th>
							</thead>
							<tbody>
								@foreach($list_user as $user)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">										
											<a href="{{url('admin/user', $user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
										<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										@include('template.utils.delete',['url' => url('admin/user', $user->id)])
										</div>

									</td>
									<td>{{$user->username}}</td>
									<td>{{$user->nama}}</td>
									<td>{{$user->email}}</td>
									<td>{{$user->jenis_kelamin_string}}</td>
									
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