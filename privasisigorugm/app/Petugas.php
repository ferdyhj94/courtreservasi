<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $table = 'petugas';
    protected $fillable = ['nama_petugas,alamat,no_telp'];
    public $timestamps = false;
}
