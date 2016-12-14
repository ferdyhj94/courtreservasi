<?php

namespace App\Http\Controllers;

use App\Lapangan;
use App\Http\Requests;
use Request;
use DB;
use Redirect;

class managedLapangan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function createLapangan(){
        $data = array('nama_lapangan'=>Request::get('nama_lapangan'),'jenis_lapangan'=>Request::get('jenis_lapangan'));

        DB::table('lapangan')->insert($data);
        return Redirect::to('lapangan')->with('message','Berhasil menambah data lapangan!');
    }

    public function showLapangan(){

        $lapangan = DB::table('lapangan')
            ->join('groups', 'lapangan.jenis_lapangan', '=', 'groups.id_group')
            ->select('lapangan.nama_lapangan','groups.nama')
            ->get();
        return view('admin.lapangan')->with('lapangan',$lapangan);
    }

    public function editLapangan($id_lapangan)
    {
        $data = DB::table('lapangan')->where('id_lapangan','=',$id_lapangan)->first();

        return View::make('admin.ubahlapangan')->with('lapangan',$data);
    }

    public function procesedit()
    {
        $data = ['nama_lapangan'=>Input::get('nama_lapangan')];

        DB::table('lapangan')->where('id_lapangan','=',Input::get('id_lapangan'))->update();

        return Redirect::to('lapangan')->with('message','Berhasil mengubah data lapangan!');
    }
    public function hapusLapangan($id_lapangan)
    {
        DB::table('lapangan')->where('id_lapangan', '=' , $id_lapangan)->delete();

        return Redirect::to('lapangan')->with('message','Berhasil menghapus data lapangan! ');
        
    }
}
