<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{
	function showHome(){
		return view('home');
	}
	function showBlog(){
		return view('blog');
	}
	function showBeranda(){
		return view('beranda');
	}
	function showUser(){
		return view('user');
	}

}