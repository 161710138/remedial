<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;
class Dosen extends Model
{
	protected $table = 'dosen';
    protected $fillable = array('nama','nipd','alamat');

    public function mahasiswa() {
    	return $this->hasMany('App\Mahasiswa','dosen_id');
    }
}
