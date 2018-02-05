<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkulmahasiswa extends Model
{
	protected $table = 'matkulmahasiswa';
    protected $fillable = array('matkul', 'siswa_id');

    public function matakuliah()
    {
    	return $this->belongsTo('App\Matakuliah','siswa_id','mata_kuliah_id');
    }
}
