<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Jadwal;
use Request;
use Auth;
use Input;
use DB;
use Redirect;
class Frontend extends Controller
{
    public function postOrder()
    {
    	$data = array('nama_penyewa' => Request::get('nama'),
    		'no_identitas' => Request::get('no_identitas'),
            'alamat_penyewa' =>Request::get('alamat_penyewa'),
    		'email' => Request::get('email'),
    		'no_telp' => Request::get('no_hp'),
            'status_penyewa' => Request::get('status'));

    	DB::table('penyewa')->insert($data);
    	// return Redirect::to('pesan-lapangan');
    	return Redirect::to('pesan-lapangan');
    }

    public function pesanLapangan()
    {
         $scheduler_groups = DB::table('lapangan')
                ->orderBy('nama_lapangan', 'asc')
                ->get();

      return view('pesan')->with($scheduler_groups);

    }

    public function login()
    {
    	if(Auth::attempt(['username' => Request::get('username'),'pasword' => Request::get('password')]))
    	{
    		
    			return Redirect::to('admin');
    		
    	}
    	else
    	{
    		return Redirect::to('login-admin')->with('message','Gagal masuk, username atau password tidak cocok');
    	}
    }
}
