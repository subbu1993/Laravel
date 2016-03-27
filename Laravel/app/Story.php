<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    public function locations()
    {
	return $this->belongsTo('App\Location');
    }
     
    public function tags()
    {
	return $this->belongsToMany("App\Tag");
    }
}
