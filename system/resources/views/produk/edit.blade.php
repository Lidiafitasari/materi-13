@extends('template.base')

@section('content')

	<div class="container">
		<div class="row mt-5">
			<div class ="col-md-3">
				<div class="card">
					<div class ="card-body">
						<img src="{{url("system/public/$produk->foto")}}" class="img-fluid">
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card">
					<div class="card-header">
						Edit Data Produk
						<form action="{{url('admin/produk', $produk->id)}}" method="post" enctype="multipart/form-data">
							@csrf
							@method('PUT')
					</div>
					<div class="card-body">
					<div class="form-group">
						<label class="control-label" for="">Nama</label>
						<input type="text" name="nama" class="form-control" value="{{$produk->nama}}">
					</div>
					<div class="row no-gutters">
					<div class="col-md-3">
						<div class="form-group">
						<label class="control-label" for="">Foto</label>
						<input type="file" name="foto" class="form-control" accept=".jpg">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label class="control-label" for="">Harga</label>
							<input type="text" name="harga" class="form-control" value="{{$produk->harga}}">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						<label class="control-label" for="">Berat</label>
						<input type="text" name="berat" class="form-control" value="{{$produk->berat}}">
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						<label class="control-label" for="">Stok</label>
						<input type="text" name="stok" class="form-control" value="{{$produk->stok}}">
						</div>
					</div>
					</div>			
					<div class="form-group">
						<label class="control-label" for="" >Deskripsi</label>
						<textarea name="deskripsi" class="form-control">{{$produk->deskripsi}}</textarea>
					</div>
					<button class="btn btn-dark float-right"><i class="fa fa-save"> simpan</i></button>
					</form>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection