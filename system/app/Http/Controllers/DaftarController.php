<?php 

namespace App\Http\Controllers;
use App\Daftar;

class DaftarController extends controller{
	function index(){
		$data['list_daftar'] = daftar::all();
		return view('daftar.index', $data);
	}
	function create(){
		return view('daftar.create');
	}
	function store(){
		$daftar= new Daftar;
		$daftar-> nama = request('nama');
		$daftar-> username = request('username');
		$daftar-> email = request('email');
		$daftar-> password = bcrypt(request('password'));
		$daftar-> confirpassword = bcrypt(request('confirpassword'));
		$daftar->save();

		return redirect('daftar')->with('success','Data berhasil ditambahkan');
	}
	function show(Daftar $daftar){
		$data['daftar'] = $daftar;
		return view('daftar.show', $data);
	}
	function edit(Daftar $daftar){
		$data['daftar'] = $daftar;
		return view('daftar.edit', $data);
	}
	function update(Daftar $daftar){
		$daftar-> nama = request('nama');
		$daftar-> username = request('username');
		$daftarr-> email = request('email');
		if(request('password'))	$daftar-> password = bcrypt(request('password'));
		if(request('password')) $daftar-> confirpassword = bcrypt(request('confirpassword'));
		$daftar->save();

		return redirect('daftar')->with('warning','Data berhasil diupdate');
	}
	function destroy(Daftar $daftar){
		$daftar->delete();
		return redirect('daftar')->with('danger','Data berhasil dihapus');
	}
}