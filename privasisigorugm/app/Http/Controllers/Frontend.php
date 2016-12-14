<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Classes\Event;
use App\Classes\Group;
use App\Classes\Resource;
use App\Jadwal;
use App\Lapangan;
use App\Groups;
use Request;
use Auth;
use Input;
use DB;
use Redirect;
use View;

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
        
       
      return view('pesan');
    }

    public function backend_event_busy()
    {
        $result = DB::table('jadwal')->get();
        
        $events = array();

        foreach($result as $row) {
          $e = new Event();
          $e->id = $row['id'];
          $e->text = "";
          $e->start = $row['start'];
          $e->end = $row['end'];
          $e->resource = $row['resource_id'];
          $e->moveDisabled = true;
          $e->resizeDisabled = true;
          $e->clickDisabled = true;
          $e->backColor = "#E69138";   // lighter #F6B26B
          $e->bubbleHtml = "Not Available";
          
          $events[] = $e;
}

        header('Content-Type: application/json');
        echo json_encode($events);
    }
    public function backend_resource()
    {
         $scheduler_groups = DB::table('groups')->get();

         $groups = array();
         foreach($scheduler_groups as $group)
         {
          $g = new Group();
          $g->id = "group_".$group['id_group'];
          $g->name = $group['nama'];
          $g->expanded = true;
          $g->children = array();
          $g->eventHeight = 25;
          $groups[] = $g;

          $scheduler_resource = DB::table('lapangan')->get();

          foreach($scheduler_resource as $resource)
          {
            $r = new Resource();
            $r->id = $resource['id'];
            $r->name = $resource['name'];
            $g->children[] = $r;
          }
         }
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
