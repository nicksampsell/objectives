<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
	public function section()
	{
		return $this->belongsTo('App\Section');
	}
}
