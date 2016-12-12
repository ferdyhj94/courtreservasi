<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\validateuser;
use DB;
use Redirect;
use View;
use Input;
class managedUser extends Controller
{
      public function createUser(){
      	
      	
        $data = ['id_petugas'=>Request::get('username'),
        	'email'=>Request::get('email'),
        	'password'=>bcrypt(Request::get('password'),
        	'status'=>Request::get('status')
        	];

        DB::table('users')->insert($data);
        return Redirect::to('users')->with('message','Berhasil menambah data admin!');
    }


    public function ubahUser($id)
    {
        $data = DB::table('users')->where('id','=',$id_lapangan)->first();

        return View::make('admin.ubahuser')->with('user',$data);
    }

    public function editUser()
    {
        $username = $data->username;
      	$password = bcrypt($data->password);

        $data = ['username'=>$username,
        	'email'=>Request::get('email'),
        	'password'=>$password,
        	'status'=>Request::get('status')
        	];

        DB::table('users')->where('id','=',Input::get('id'))->update();

        return Redirect::to('lapangan')->with('message','Berhasil mengubah data lapangan!');
    }
    public function hapusUser($id_lapangan)
    {
        DB::table('lapangan')->where('id_lapangan', '=' , $id_lapangan)->delete();

        return Redirect::to('lapangan')->with('message','Berhasil menghapus data lapangan! ');
        
    }
}
