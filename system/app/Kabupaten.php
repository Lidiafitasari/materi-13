<?php

namespace App;

use App\Kecamatan;
use App\Provinsi;
use Illuminate\Database\Eloquent\Factories\HasFactories;
use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
	protected $table = 'kabupaten';

	function kecamatan(){
		return $this->hasMany(Kecamatan::class, 'id_kabupaten');
	}

	function provinsi(){
		return $this->belongsTo(Provinsi::class, 'id_provinsi');
	}
}