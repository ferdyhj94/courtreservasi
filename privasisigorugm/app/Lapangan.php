<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    protected $table = 'lapangan';
    protected $fillable = ['nama_lapangan','jenis_lapangan'];
    public $timestamps = false;

    public function jenis_lapangan()
    {
    	return $this->belongsTo('App\Models\Groups');
    }
}
