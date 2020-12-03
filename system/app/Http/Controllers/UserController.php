<?php 

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller{
	function index(){
		// Select * from User
		$data['list_user'] = User::all();
		return view('user.index', $data);
	}

	function create(){
		return view('user.create');
	}

	function store(){
		$user = new User;
		$user->username = request('username');
		$user->nama = request('nama');
		$user->password = request('password');
		$user->email = request('email');
		$user->save();

		return redirect('User')->with('success', 'Data Berhasil Ditambahkan');
	}

	function show(User $user){
		// select * from User where id
		$data['user'] = $user;
		return view('user.show', $data);
	}

	function edit(User $user){
		// select * from User where id
		$data['user'] = $user;
		return view('user.edit', $data);
	}

	function update(User $user){
		$user->username = request('username');
		$user->nama = request('nama');
		if(request('password')) $user->password = bcrypt(request ('password'));
		$user->email = request('email');
		$user->save();

		return redirect('User')->with('success', 'Data Berhasil Diedit');
	}

	function destroy(User $user){
		$user->delete();

		return redirect('User') ->with('danger', 'Data Berhasil Dihapus');
	}
}