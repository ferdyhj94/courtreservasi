<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyewa extends Model
{
    protected $table = 'penyewa';
    protected $fillable = ['nama_penyewa','no_identitas','alamat_penyewa','email','no_telp','status_penyewa'];
    public $timestamps = false;}
