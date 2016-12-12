<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Lapangan;
use App\User;
use App\Petugas;

Route::group(['middleware' => ['web']], function () {
    // Put all your routes inside here.

Route::get('login-admin',function(){
	if(Auth::user())
	{
		return view('dashboard');
	}
	return view('auth.login');
});

Route::get('dashboard',function(){
$lapangan = Lapangan::all();
$users = User::all();
    return view('admin.dashboard')->with('lapangan',$lapangan);
});
Route::get('/', function () {
	return view('home');
});

Route::get('tambah-lapangan',function(){
	return view('admin.tambahlapangan');
});

Route::post('tbh-lapangan','managedLapangan@createLapangan');

Route::get('lapangan',function(){
	$lapangan = Lapangan::all();

	return view('admin.lapangan')->with('lapangan',$lapangan);
});
Route::get('hapus-lapangan/{id}','managedLapangan@hapusLapangan');
Route::get('edit-lapangan/{id}','managedLapangan@editLapangan');
Route::post('ubah-lapangan','managedLapangan@procesedit');

Route::get('jadwal',function(){
	return view('admin.jadwal');
});


Route::get('admin',function(){
	if(Auth::user()){
	$users = User::all();
	return view('admin.users')->with('users',$users);
}else{
	return view('admin.login');
}
});

Route::get('tambah-admin',function(){
	return view('admin.tambahuser');
});

Route::post('add-user','managedUser@createUser');
Route::get('hapus-user/{id}','managedUser@hapusUser');
Route::get('ubah-user/{id}','managedUser@ubahUser');
Route::post('edit-user','managedUser@editUser');


Route::get('petugas',function(){
	$users = Petugas::all();
	return view('admin.petugas')->with('petugas',$users);
});

Route::get('tambah-petugas',function(){
	return view('admin.tambahperugas');
});

Route::post('add-petugas','managedPetugas@createPetugas');
Route::get('hapus-petugas/{id}','managedPetugas@hapusPetugas');
Route::get('ubah-petugas/{id}','managedPetugas@ubahPetugas');
Route::post('edit-petugas','managedPetugas@editPetugas');

Route::get('pesan-lapangan','frontend@pesanLapangan');


Route::post('add-petugas','managedPetugas@createPetugas');
Route::get('hapus-petugas/{id}','managedPetugas@hapusPetugas');
Route::get('ubah-petugas/{id}','managedPetugas@ubahPetugas');
Route::post('edit-petugas','managedPetugas@editPetugas');


Route::get('pemesanan', function(){
	return view('pemesanan');
});
Route::post('post-order','frontend@postOrder');
});


Route::get('/home', 'HomeController@index');


