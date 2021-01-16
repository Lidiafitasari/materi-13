<p>
	{{$produk->harga}} |
	Stok : {{$produk->stok}} |
	Berat : {{$produk->berat}} Kg |
	Seller : {{$produk->seller->nama}} <br> 
	Diupload : {{$produk->created_at->diffforHumans()}} | 
	Diupdate : {{$produk->updated_at->diffforHumans()}}
</p>