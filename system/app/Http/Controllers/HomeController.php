<?php 
namespace App\Http\Controllers;
use App\Produk;
use App\Provinsi;
class HomeController extends Controller{
	function showBeranda(){
		return view('beranda');
	}
	function showKategory(){
		return view('kategory');
	}
	function showProduk(){
		return view('produk');
	}
	function showPromo(){
		return view('promo');
	}
	function showPelanggan(){
		return view('pelanggan');
	}
	function showSupplier(){
		return view('supplier');
	}
	function showCreate(){
		return view('create');
	}
	function showTemplate(){
		return view('template.base');
	}
	function test($produk, $hargaMin =0 , $hargaMax =0){
		if($produk == 'lampu'){
			echo "Tampilkan Produk Lampu";
		}elseif ($produk == 'spiker') {
			echo "Produk Spiker";
		}
		echo "<br>";
		echo "Harga minimal adalah $hargaMin <br>";
		echo "Harga Maximal adalah $hargaMax <br>";
	}

	public function testCollection()
	{
		$list_fashion = ['aksesoris', 'celana', 'baju', 'sepatu', 'tas'];
		$collection = collect($list_fashion);
		$list_produk = Produk::all();

		// Sorting

		//Sort By harga terendah
		//dd($list_produk->sortBy('harga'));
		//Sort By harga tertinggi
		//dd($list_produk->sortByDesc('harga'));
		//$data['list'] = $list_produk;
		//return view('test-collection', $data);
		

		//filter

		//$filtered = $list_produk->filter(function($item){
			//return $item->harga < 200000;
		//});

		//dd($filtered);

		//$sum = $list_produk->sum('stok');
		//dd($sum);

		$data['list'] = Produk:: Paginate(3);
		return view('test-collection', $data);

		dd($list_fashion, $list_produk);
	}

	function testAjak(){
		$data['list_provinsi'] = Provinsi::all();
		return view('test-ajax', $data);
	}
}

