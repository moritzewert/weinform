<?php

namespace Weinform;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
	public function users()
	{
		return $this->belongsToMany('Weinform\User', 'members');
	}
}
