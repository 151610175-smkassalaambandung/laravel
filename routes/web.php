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

Route::get('/', function () {
    return view('welcome');
});

//latihan model
Route::get('testmodel', function(){
	$a = App\Post::all();
	$b = App\Produk::all();
	$c = App\Pengguna::all();
	$d = App\Pengaturan::all();
	return $a.$b.$c.$d;
});
Route::get('testmodel1', function(){
	$b = App\Produk::all();
	return $b;
});
Route::get('testmodel2', function(){
	$c = App\Pengguna::all();
	return $c;
});
Route::get('testmodel3', function(){
	$d = App\Pengaturan::all();
	return $d;
});

//latihan controller
route::get('test','MyController@percobaan');
route::get('test2','MyController@percobaan2');
route::get('test3','MyController@percobaan3');
route::get('test4','MyController@percobaan4');
route::get('test5','MyController@percobaan5');
route::get('test6','MyController@percobaan6');
route::get('test7/{data?}/{data2?}','MyController@percobaan7');

//latihan model$controller
Route::get('test8','SiswaController@Percobaan');
Route::resource('siswa','SiswaduaController');