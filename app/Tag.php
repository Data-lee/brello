<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
   /**
    * Get the tasks of the tag.
    */
    public function tasks()
    {
    	return $this->belongsToMany('\App\Task')->withTimestamps();
    }
}
