<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model {
	//
	public function blog() {
		return $this->belongsTo('App\Blog');
	}

	public function section() {
		return $this->belongsTo('App\Section');
	}
}
