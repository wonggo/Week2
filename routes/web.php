<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
	$tanggal = date("d-m-Y H:i:s",time());
	$gini = "ia gitu";
	return view ('Welcome')
	->with('tanggal', $tanggal)
	->with('gini', $gini);
});*/
Route::get('/', function(){
	return view('rumah');
});

Route::get('about', function(){
	return view('about');
});

Route::get('rumah/gallery', function(){
	return view('gallery');
});

Route::get('hola', function(){
	return view('hola');
});

route::get('bebas',function(){
	return view('bebas');
});
route::get('hola/bebas',function(){
	return view('terserah.bebas');
    
});
