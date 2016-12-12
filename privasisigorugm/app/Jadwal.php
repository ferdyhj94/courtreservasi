<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    protected $table = 'jadwal';
    protected $fillable = ['id_penyewa,id_lapangan,status_jadwal'];
    public $timestamps = false;
}
