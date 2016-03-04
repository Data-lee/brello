<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
    * Get the lane that task belongs to.
    */
    public function lane() 
    {
    	$this->belongsTo('\App\Lane');
    }

    /**
    * Get the tags of the task.
    */
    public function tags()
    {
    	return $this->belongsToMany('\App\Tag')->withTimestamps();
    }
}
