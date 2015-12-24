<?php

namespace Weinform;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['begin', 'end', 'created_at', 'updated_at'];

    public function attendees()
    {
	    return $this->belongsToMany('Weinform\User', 'attendance');
    }
}
