<?php

namespace App;

use App\Kecamatan;
use Illuminate\Database\Eloquent\Factories\HasFactories;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
	protected $table = 'desa';

	function kecamatan(){
		return $this->belongsTo(Kecamatan::class, 'id_kecamatan');
	}
}