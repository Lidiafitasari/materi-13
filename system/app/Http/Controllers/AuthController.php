<?php 
namespace App\Http\Controllers;
use Auth;

class AuthController extends Controller{
		function showLogin(){
		return view('login');
	}
	function loginProcess(){
		if(Auth::attempt(['email' => request('email'),'password' => request('password')])){
			$user = Auth::user();
			if($user->level == 1) return redirect('beranda/admin')->with('success', 'Login Berhasil');
			if($user->level == 0) return redirect('beranda/pengguna')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger','Login Gagal, silahkan cek username dan password anda');
		}

		//if(request('login_as') == 1){
		//if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password'=> request('password')])){
		//	return redirect('beranda/pembeli')->with('success', 'Login Berhasil');
		//	}else{
		//		return back()->with('danger','Login Gagal, silahkan cek username dan password anda');
		//	}
		//}else{
		//if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password'=> request('password')])){
		//	return redirect('beranda/penjual')->with('success', 'Login Berhasil');
		//	}else{
		//		return back()->with('danger','Login Gagal, silahkan cek username dan password anda');
		//	}
		//}
	}
	function logout(){
		Auth::logout();
		Auth::guard('penjual')->logout();
		Auth::guard('pembeli')->logout();
		return redirect ('beranda');
	}
	function showRegister(){
		return view('register');
	}
}