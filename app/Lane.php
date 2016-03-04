<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lane extends Model
{
    /**
    * Get the tasks that belong to the lane
    */
    public function tasks() 
    {
    	$this->hasMany('\App\Task');
    }
}
