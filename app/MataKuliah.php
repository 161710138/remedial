<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
	 protected $table = 'matakuliah';
     protected $fillable = array('matkul');

     public function Matakuliah()
     {
     	return $this->belongsTo('App\Matakuliah','mata_kuliah_id');
     }

}
