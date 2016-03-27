<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    public function locations()
    {
	return $this->hasOne('App\Location');
    }
     
    public function tags()
    {
	return $this->hasMany("App\Tag");
    }
}
