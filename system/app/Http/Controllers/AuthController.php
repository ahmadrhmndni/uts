<?php

namespace App\Http\Controllers;
use App\Models;
use Auth;


class AuthController extends Controller{

	function showLogin(){
		return view('login');
	}

	function logout(){
		Auth::logout();
		return redirect('beranda');
	}
	
	function loginProsess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password'), 'retype password' => request('password')]))
		{
			return redirect('admin/beranda')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal Silahkan Cek Kembali Email Dan Password Anda');
		}

	function logout(){
		Auth::logout();
		return redirect('beranda');
		
	}
}